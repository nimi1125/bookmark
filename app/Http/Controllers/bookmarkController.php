<?php

namespace App\Http\Controllers;

use App\Models\Bookmark;
use Illuminate\Http\Request;

class BookmarkController extends Controller
{
    public function index()
    {
        $bookmarks = Bookmark::all();

        return view('bookmark.index',['bookmarks' => $bookmarks]);
    }
}
