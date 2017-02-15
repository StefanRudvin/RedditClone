@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Home</div>

                <div class="panel-body">
                    Welcome to reddit!
                </div>

            </div>

            @foreach ($posts as $post)

                <div class="panel panel-default">
                    

                    
                    <div class="panel-heading">
                        <a href="{{ $post->path() }}">
                        <h3>{{ str_limit($post->title, $limit = 150, $end = '...') }}</h3>
                        </a>
                    </div>
                    

                    <div class="panel-body">
                    {{ str_limit($post->content, $limit = 150, $end = '...') }}
                    </div>

                    <div class="text-right">
                        <a href="/user/{{ $post->user->id }}"> {{$post->user->name}}</a>
                    </div>

                </div>

            @endforeach
            
        </div>
    </div>
</div>
@endsection
