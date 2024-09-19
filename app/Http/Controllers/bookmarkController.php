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
        return redirect()
            ->route('bookmark.index')
            ->with('status','ブックマークを追加しました。');
    }

    public function show($id)
    {
        $bookmark = Bookmark::findOrFail($id);
        return view('bookmark.show', compact('bookmark'));
    }

    public function edit($id)
    {
        $bookmark = Bookmark::findOrFail($id);
        return view('bookmark.edit',compact('bookmark'));
    }

    public function update(Request $request, Bookmark $bookmark)
    {
        $bookmark->update($request->all());
        return redirect()
        ->route('bookmark.index')
        ->with('status','ブックマークを編集しました。');
    }

    public function destroy($id)
    {
        $bookmark = Bookmark::findOrFail($id);
        $bookmark->delete();
        return redirect()
            ->route('bookmark.index')
            ->with('status','ブックマークを削除しました。');
    }
}


