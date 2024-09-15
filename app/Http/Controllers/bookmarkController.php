<?php

namespace App\Http\Controllers;

use App\Models\Bookmark;
use Illuminate\Http\Request;

class bookmarkController extends Controller
{
    public function index()
    {
        dd(bookmark::all());
    }
}
