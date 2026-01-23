<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactSubmissionRequest;
use App\Services\ContactSubmissionService;
use App\Models\ContactSubmission;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ContactSubmissionController extends Controller
{
    public function __construct(
        private ContactSubmissionService $contactService
    ) {}

    /**
     * Display the contact form
     */
    public function create(): View
    {
        return view('contact_us');
    }

    /**
     * Store a new contact submission
     */
    public function store(ContactSubmissionRequest $request): JsonResponse|RedirectResponse
    {
        try {
            $submission = $this->contactService->store($request);

            // If it's an AJAX request, return JSON response
            if ($request->expectsJson()) {
                return response()->json([
                    'success' => true,
                    'message' => 'Thank you for your message! We\'ll get back to you within 24 hours.',
                    'submission_id' => $submission->id,
                ], 201);
            }

            // For regular form submission, redirect back with success message
            return redirect()->back()->with('success', 'Thank you for your message! We\'ll get back to you within 24 hours.');

        } catch (\Exception $e) {
            // If it's an AJAX request, return JSON error response
            if ($request->expectsJson()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Sorry, there was an error sending your message. Please try again.',
                    'error' => config('app.debug') ? $e->getMessage() : null,
                ], 500);
            }

            // For regular form submission, redirect back with error message
            return redirect()->back()
                ->withInput()
                ->with('error', 'Sorry, there was an error sending your message. Please try again.');
        }
    }

    /**
     * Display all contact submissions (Admin only)
     */
    public function index(Request $request): View
    {
        $status = $request->get('status');
        $perPage = $request->get('per_page', 15);

        if ($status && in_array($status, ['new', 'read', 'replied'])) {
            $submissions = $this->contactService->getSubmissionsByStatus($status, $perPage);
        } else {
            $submissions = $this->contactService->getAllSubmissions($perPage);
        }

        $statistics = $this->contactService->getStatistics();

        return view('admin.contact-submissions.index', compact('submissions', 'statistics', 'status'));
    }

    /**
     * Display a specific contact submission (Admin only)
     */
    public function show(ContactSubmission $contactSubmission): View
    {
        // Mark as read when viewed
        if ($contactSubmission->is_new) {
            $this->contactService->markAsRead($contactSubmission);
        }

        return view('admin.contact-submissions.show', compact('contactSubmission'));
    }

    /**
     * Mark submission as read (Admin only)
     */
    public function markAsRead(ContactSubmission $contactSubmission): JsonResponse
    {
        $success = $this->contactService->markAsRead($contactSubmission);

        return response()->json([
            'success' => $success,
            'message' => $success ? 'Marked as read' : 'Failed to mark as read',
        ]);
    }

    /**
     * Mark submission as replied (Admin only)
     */
    public function markAsReplied(ContactSubmission $contactSubmission): JsonResponse
    {
        $success = $this->contactService->markAsReplied($contactSubmission);

        return response()->json([
            'success' => $success,
            'message' => $success ? 'Marked as replied' : 'Failed to mark as replied',
        ]);
    }

    /**
     * Delete a contact submission (Admin only)
     */
    public function destroy(ContactSubmission $contactSubmission): JsonResponse|RedirectResponse
    {
        try {
            $contactSubmission->delete();

            if (request()->expectsJson()) {
                return response()->json([
                    'success' => true,
                    'message' => 'Contact submission deleted successfully.',
                ]);
            }

            return redirect()->route('admin.contact-submissions.index')
                ->with('success', 'Contact submission deleted successfully.');

        } catch (\Exception $e) {
            if (request()->expectsJson()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Failed to delete contact submission.',
                ], 500);
            }

            return redirect()->back()
                ->with('error', 'Failed to delete contact submission.');
        }
    }

    /**
     * Get contact submission statistics (API endpoint)
     */
    public function statistics(): JsonResponse
    {
        $statistics = $this->contactService->getStatistics();

        return response()->json([
            'success' => true,
            'data' => $statistics,
        ]);
    }
}
