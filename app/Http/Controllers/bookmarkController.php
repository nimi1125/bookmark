<?php

namespace App\Http\Controllers;

use App\Models\Bookmark;
use Illuminate\Http\Request;

class bookmarkController extends Controller
{
    public function index()
    {
        $bookmarks = bookmark::all();

        return view('bookmark.index',['bookmark' => $bookmarks]);
    }
}
