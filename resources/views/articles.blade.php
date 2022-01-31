@extends('layouts.app')

@section('content')

        <div class="col-md-6  offset-3">
            <h1 class="text-center">liste des articles</h1>
        </div>
        <div class="row">
            @foreach ($posts as $post)
                 <div class="col-md-3"><p><a class="text-center " href="post/{{2}}">{{$post}}</a></p></div>
            @endforeach
        </div>
@endsection
