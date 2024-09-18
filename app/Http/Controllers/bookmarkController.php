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
        Bookmark::create($request->all());
        return redirect()->route('bookmark.index');
    }

    public function show($id)
    {
        $bookmark = Bookmark::findOrFail($id);
        return view('bookmark.show', compact('bookmark'));
    }

    public function edit()
    {
        return view('bookmark.edit');
    }

    public function update(Request $request, Bookmark $bookmark)
    {
        $bookmark->update($request->all());
        return redirect()->route('bookmark.edit', $bookmark);
    }
}


