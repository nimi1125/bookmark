@extends('layouts.app')

@section('content')
    <div class="contener">
        <div class="col-md-12">
            <div class="card">
                <div class="card-boby">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>タイトル</th>
                            </tr>
                        </thead>
                        @foreach ($bookmarks as $bookmark)
                            
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection