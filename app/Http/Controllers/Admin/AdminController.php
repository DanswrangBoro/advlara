<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ContactSubmission;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AdminController extends Controller
{
    /**
     * Show the admin dashboard
     */
    public function dashboard(): View
    {
        $stats = [
            'total_contacts' => ContactSubmission::count(),
            'new_contacts' => ContactSubmission::where('status', 'new')->count(),
            'total_users' => User::count(),
            'admin_users' => User::where('role', 'admin')->count(),
            'recent_contacts' => ContactSubmission::latest()->take(5)->get(),
            'contacts_this_month' => ContactSubmission::whereMonth('created_at', now()->month)
                ->whereYear('created_at', now()->year)
                ->count(),
            'contacts_today' => ContactSubmission::whereDate('created_at', today())->count(),
        ];

        return view('admin.dashboard', compact('stats'));
    }

    /**
     * Show content management page
     */
    public function content(): View
    {
        return view('admin.content.index');
    }

    /**
     * Show settings page
     */
    public function settings(): View
    {
        return view('admin.settings.index');
    }
}
