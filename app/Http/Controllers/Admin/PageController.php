<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\View\View;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class PageController extends Controller
{
    /**
     * Display a listing of pages
     */
    public function index(Request $request): View
    {
        $query = Page::with('author')->latest();

        // Filter by type
        if ($request->filled('type')) {
            $query->where('type', $request->type);
        }

        // Filter by status
        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        // Search
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                  ->orWhere('content', 'like', "%{$search}%")
                  ->orWhere('slug', 'like', "%{$search}%");
            });
        }

        $pages = $query->paginate(15);

        $stats = [
            'total' => Page::count(),
            'published' => Page::where('status', 'published')->count(),
            'draft' => Page::where('status', 'draft')->count(),
            'archived' => Page::where('status', 'archived')->count(),
        ];

        return view('admin.pages.index', compact('pages', 'stats'));
    }

    /**
     * Display a listing of blog posts only
     */
    public function blogs(Request $request): View
    {
        $query = Page::with('author')->where('type', 'blog')->latest();

        // Filter by status
        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        // Search
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                  ->orWhere('content', 'like', "%{$search}%")
                  ->orWhere('slug', 'like', "%{$search}%");
            });
        }

        $pages = $query->paginate(15);

        $stats = [
            'total' => Page::where('type', 'blog')->count(),
            'published' => Page::where('type', 'blog')->where('status', 'published')->count(),
            'draft' => Page::where('type', 'blog')->where('status', 'draft')->count(),
            'archived' => Page::where('type', 'blog')->where('status', 'archived')->count(),
        ];

        return view('admin.pages.index', compact('pages', 'stats'));
    }

    /**
     * Show the form for creating a new page
     */
    public function create(): View
    {
        return view('admin.pages.create');
    }

    /**
     * Store a newly created page
     */
    public function store(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'title' => ['required', 'string', 'max:255'],
            'slug' => ['nullable', 'string', 'max:255', 'unique:pages,slug'],
            'content' => ['nullable', 'string'],
            'excerpt' => ['nullable', 'string', 'max:500'],
            'type' => ['required', 'in:page,blog,service'],
            'status' => ['required', 'in:draft,published,archived'],
            'template' => ['required', 'string'],
            'meta_title' => ['nullable', 'string', 'max:255'],
            'meta_description' => ['nullable', 'string', 'max:500'],
            'meta_keywords' => ['nullable', 'string'],
            'featured_image' => ['nullable', 'string'],
            'published_at' => ['nullable', 'date'],
            'is_featured' => ['boolean'],
            'show_in_menu' => ['boolean'],
            'sort_order' => ['nullable', 'integer'],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation failed',
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            $data = $validator->validated();
            
            // Generate slug if not provided
            if (empty($data['slug'])) {
                $data['slug'] = Str::slug($data['title']);
            }

            // Set author
            $data['author_id'] = auth()->id();

            // Handle published_at
            if ($data['status'] === 'published' && empty($data['published_at'])) {
                $data['published_at'] = now();
            }

            $page = Page::create($data);

            return response()->json([
                'success' => true,
                'message' => 'Page created successfully',
                'page' => [
                    'id' => $page->id,
                    'title' => $page->title,
                    'slug' => $page->slug,
                    'status' => $page->status,
                    'type' => $page->type,
                ]
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to create page: ' . $e->getMessage()
            ], 500);
        }
    }

    /**
     * Display the specified page
     */
    public function show(Page $page): JsonResponse
    {
        return response()->json([
            'success' => true,
            'page' => [
                'id' => $page->id,
                'title' => $page->title,
                'slug' => $page->slug,
                'content' => $page->content,
                'excerpt' => $page->excerpt,
                'type' => $page->type,
                'status' => $page->status,
                'template' => $page->template,
                'meta_title' => $page->meta_title,
                'meta_description' => $page->meta_description,
                'meta_keywords' => $page->meta_keywords,
                'featured_image' => $page->featured_image,
                'published_at' => $page->published_at?->format('Y-m-d\TH:i'),
                'is_featured' => $page->is_featured,
                'show_in_menu' => $page->show_in_menu,
                'sort_order' => $page->sort_order,
                'author' => $page->author?->name,
                'created_at' => $page->created_at->format('M d, Y \a\t H:i'),
                'updated_at' => $page->updated_at->format('M d, Y \a\t H:i'),
            ]
        ]);
    }

    /**
     * Show the form for editing the specified page
     */
    public function edit(Page $page): View
    {
        return view('admin.pages.edit', compact('page'));
    }

    /**
     * Update the specified page
     */
    public function update(Request $request, Page $page): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'title' => ['required', 'string', 'max:255'],
            'slug' => ['nullable', 'string', 'max:255', 'unique:pages,slug,' . $page->id],
            'content' => ['nullable', 'string'],
            'excerpt' => ['nullable', 'string', 'max:500'],
            'type' => ['required', 'in:page,blog,service'],
            'status' => ['required', 'in:draft,published,archived'],
            'template' => ['required', 'string'],
            'meta_title' => ['nullable', 'string', 'max:255'],
            'meta_description' => ['nullable', 'string', 'max:500'],
            'meta_keywords' => ['nullable', 'string'],
            'featured_image' => ['nullable', 'string'],
            'published_at' => ['nullable', 'date'],
            'is_featured' => ['boolean'],
            'show_in_menu' => ['boolean'],
            'sort_order' => ['nullable', 'integer'],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Validation failed',
                'errors' => $validator->errors()
            ], 422);
        }

        try {
            $data = $validator->validated();
            
            // Generate slug if not provided
            if (empty($data['slug'])) {
                $data['slug'] = Str::slug($data['title']);
            }

            // Handle published_at
            if ($data['status'] === 'published' && empty($data['published_at']) && $page->status !== 'published') {
                $data['published_at'] = now();
            }

            $page->update($data);

            return response()->json([
                'success' => true,
                'message' => 'Page updated successfully',
                'page' => [
                    'id' => $page->id,
                    'title' => $page->title,
                    'slug' => $page->slug,
                    'status' => $page->status,
                    'type' => $page->type,
                ]
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to update page: ' . $e->getMessage()
            ], 500);
        }
    }

    /**
     * Remove the specified page
     */
    public function destroy(Page $page): JsonResponse
    {
        try {
            $page->delete();

            return response()->json([
                'success' => true,
                'message' => 'Page deleted successfully'
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to delete page: ' . $e->getMessage()
            ], 500);
        }
    }

    /**
     * Duplicate a page
     */
    public function duplicate(Page $page): JsonResponse
    {
        try {
            $newPage = $page->replicate();
            $newPage->title = $page->title . ' (Copy)';
            $newPage->slug = $page->slug . '-copy-' . time();
            $newPage->status = 'draft';
            $newPage->published_at = null;
            $newPage->author_id = auth()->id();
            $newPage->save();

            return response()->json([
                'success' => true,
                'message' => 'Page duplicated successfully',
                'page' => [
                    'id' => $newPage->id,
                    'title' => $newPage->title,
                    'slug' => $newPage->slug,
                ]
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to duplicate page: ' . $e->getMessage()
            ], 500);
        }
    }
}
