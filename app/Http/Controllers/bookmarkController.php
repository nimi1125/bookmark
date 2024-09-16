<?php

namespace App\Http\Controllers;

use App\Models\Bookmark;
use Illuminate\Http\Request;

class BookmarkController extends Controller
{
    public function index()
    {
        $bookmarks = Bookmark::paginate(20);
        return view('bookmark.index',['bookmarks' => $bookmarks]);
    }

    public function create()
    {
        return view('bookmark.create');
    }

    public function store(Request $request)
    {
            // バリデーション
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'url' => 'required|url|max:255',
            'description' => 'required|string',
        ]);
        Bookmark::create($validated);
        return redirect()->route('bookmarks.index')->with('success', 'ブックマークが作成されました。');
    }

    public function show($id)
    {
        $bookmark = Bookmark::findOrFail($id);
        return view('bookmark.show', compact('bookmark'));
    }
}
