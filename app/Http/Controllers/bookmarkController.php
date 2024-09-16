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

    public function show($id)
    {
        $bookmark = Bookmark::findOrFail($id);
        return view('bookmark.show', compact('bookmark'));
    }
}
