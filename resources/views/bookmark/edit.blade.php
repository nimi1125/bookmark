@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">ブックマーク編集</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('bookmark.update', $bookmark) }}">
                            @method('PUT')
                            @csrf
                            @include('bookmark.bookmarksfields')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection