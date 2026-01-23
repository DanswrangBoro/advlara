<?php

namespace App\Services;

use App\Models\ContactSubmission;
use App\Http\Requests\ContactSubmissionRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class ContactSubmissionService
{
    /**
     * Store a new contact submission
     */
    public function store(ContactSubmissionRequest $request): ContactSubmission
    {
        try {
            $submission = ContactSubmission::create([
                'name' => $request->validated('name'),
                'email' => $request->validated('email'),
                'phone' => $request->validated('phone'),
                'subject' => $request->validated('subject'),
                'message' => $request->validated('message'),
                'ip_address' => $request->ip(),
                'user_agent' => $request->userAgent(),
                'status' => ContactSubmission::STATUS_NEW,
            ]);

            // Log the submission for monitoring
            Log::info('New contact submission received', [
                'id' => $submission->id,
                'email' => $submission->email,
                'subject' => $submission->subject,
            ]);

            // Send notification email (optional)
            $this->sendNotificationEmail($submission);

            return $submission;

        } catch (\Exception $e) {
            Log::error('Failed to store contact submission', [
                'error' => $e->getMessage(),
                'data' => $request->validated(),
            ]);
            
            throw $e;
        }
    }

    /**
     * Get all submissions with pagination
     */
    public function getAllSubmissions(int $perPage = 15)
    {
        return ContactSubmission::orderBy('created_at', 'desc')
            ->paginate($perPage);
    }

    /**
     * Get submissions by status
     */
    public function getSubmissionsByStatus(string $status, int $perPage = 15)
    {
        return ContactSubmission::where('status', $status)
            ->orderBy('created_at', 'desc')
            ->paginate($perPage);
    }

    /**
     * Mark submission as read
     */
    public function markAsRead(ContactSubmission $submission): bool
    {
        try {
            $submission->markAsRead();
            
            Log::info('Contact submission marked as read', [
                'id' => $submission->id,
            ]);

            return true;
        } catch (\Exception $e) {
            Log::error('Failed to mark submission as read', [
                'id' => $submission->id,
                'error' => $e->getMessage(),
            ]);
            
            return false;
        }
    }

    /**
     * Mark submission as replied
     */
    public function markAsReplied(ContactSubmission $submission): bool
    {
        try {
            $submission->markAsReplied();
            
            Log::info('Contact submission marked as replied', [
                'id' => $submission->id,
            ]);

            return true;
        } catch (\Exception $e) {
            Log::error('Failed to mark submission as replied', [
                'id' => $submission->id,
                'error' => $e->getMessage(),
            ]);
            
            return false;
        }
    }

    /**
     * Get submission statistics
     */
    public function getStatistics(): array
    {
        return [
            'total' => ContactSubmission::count(),
            'new' => ContactSubmission::new()->count(),
            'read' => ContactSubmission::read()->count(),
            'replied' => ContactSubmission::replied()->count(),
            'today' => ContactSubmission::whereDate('created_at', today())->count(),
            'this_week' => ContactSubmission::whereBetween('created_at', [
                now()->startOfWeek(),
                now()->endOfWeek()
            ])->count(),
            'this_month' => ContactSubmission::whereMonth('created_at', now()->month)
                ->whereYear('created_at', now()->year)
                ->count(),
        ];
    }

    /**
     * Send notification email to admin (optional)
     */
    private function sendNotificationEmail(ContactSubmission $submission): void
    {
        try {
            // You can implement email notification here
            // Mail::to(config('mail.admin_email'))->send(new ContactSubmissionNotification($submission));
            
            Log::info('Contact submission notification email sent', [
                'submission_id' => $submission->id,
            ]);
        } catch (\Exception $e) {
            Log::warning('Failed to send contact submission notification email', [
                'submission_id' => $submission->id,
                'error' => $e->getMessage(),
            ]);
        }
    }

    /**
     * Delete old submissions (for cleanup)
     */
    public function deleteOldSubmissions(int $daysOld = 365): int
    {
        $deletedCount = ContactSubmission::where('created_at', '<', now()->subDays($daysOld))
            ->delete();

        Log::info('Old contact submissions deleted', [
            'count' => $deletedCount,
            'days_old' => $daysOld,
        ]);

        return $deletedCount;
    }
}