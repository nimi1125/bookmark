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
                    @include('components.alert')
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>タイトル</th>
                                <th>アクション</th>
                            </tr>
                            @foreach($bookmarks as $bookmark)
                            <tr>
                                <th>{{ $bookmark->id }}</th>
                                <td><a href="{{ $bookmark->url }}">{{ $bookmark->title }}</a></td>
                                <th>
                                    <div class="d-flex">
                                        <a href="{{ route('bookmark.show', $bookmark->id) }}" class="btn btn-secondary">表示</a>
                                        <a href="{{ route('bookmark.edit', $bookmark->id) }}" class="btn btn-light boder">編集</a>
                                        <form method="POST" action="{{ route('bookmark.destroy',$bookmark) }}">
                                            @method('DELETE')
                                            @csrf
                                            <button class="btn btn-dark" onclick="return confirm('本当に削除しますか？')">削除</button>
                                        </form>
                                    </div>
                                </th>
                            </tr>
                            @endforeach
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
