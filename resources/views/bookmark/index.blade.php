@extends('layouts.app')

@section('content')
    <div class="contener">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">ブックマーク一覧</div>
                <div class="card-boby">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>タイトル</th>
                            </tr>
                            @foreach($bookmarks as $bookmark)
                            <tr>
                                <th>{{ $bookmark->id }}</th>
                                <th>{{ $bookmark->title }}</th>
                            </tr>
                            @endforeach
                        </thead>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
