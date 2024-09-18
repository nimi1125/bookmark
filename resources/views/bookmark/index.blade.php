@extends('layouts.app')

@section('content')
    <div class="contener">
        <div class="col-md-10 mx-auto">
            <div class="card">
                <div class="card-header">ブックマーク一覧</div>
                <div class="card-boby">
                    <div class="mt-3 ml-3 mb-3">
                        <a href="{{ route('bookmark.create') }}" class="btn btn-primary">新規登録</a>
                    </div>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>タイトル</th>
                                <th>詳細</th>
                                <th>アクション</th>
                            </tr>
                            @foreach($bookmarks as $bookmark)
                            <tr>
                                <th>{{ $bookmark->id }}</th>
                                <td><a href="{{ $bookmark->url }}">{{ $bookmark->title }}</a></td>
                                <th><a href="{{ route('bookmark.show', $bookmark->id) }}">表示</a></th>
                                <th><a href="{{ route('bookmark.edit', $bookmark->id) }}" class="btn btn-primary">編集</a></th>
                            </tr>
                            @endforeach
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
