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
                    
                    <a href="{{ $post->path() }}">
                    <div class="panel-heading">
                    {{ str_limit($post->title, $limit = 150, $end = '...') }}
                    </a>
                    <div class="text-right">
                    
                    <a href=" {{ $post->user->path }}">{{
                    $post->user->name
                    
                    }}</a>
                    </div>
                    </div>
                    

                    <div class="panel-body">
                    {{ str_limit($post->content, $limit = 150, $end = '...') }}
                    </div>

                </div>

            @endforeach
            
        </div>
    </div>
</div>
@endsection
