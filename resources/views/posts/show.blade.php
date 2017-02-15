@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            
            <div class="panel panel-default">
                <div class="panel-heading">

                    <div class="text-right">
                        {{ $post->User->username }}
                        <a href="/user/{{ $post->user->id }}">{{ $post->user->name }}</a>
                    </div>

                    <div class="text-center"><h3>{{ $post->title }}</h3></div>

                    <div class="panel-body">
                    {{ $post->content }}
                    </div>
                    
                    <div class="pull-right">
                        <a href="{{ $post->id }}/edit ">
                        Edit note
                        </a>
                    </div>

                    <div class="pull-left">
                        <a href="/user/{{ $post->user->id }}">{{ $post->score }}</a>
                    </div>
                    
                    <div class="text-center">
                        -
                    </div>

                </div>
            </div>

            @foreach ($comments as $comment)
            <div class="panel panel-default">
                <div class="panel-body">
                {{ $comment->content }}

                <div class="text-center">
                        
                <div class="pull-right">
                    <a href="/user/{{ $comment->user->id }}">{{ $comment->user->name }}
                    </a>
                </div>
                <div class="pull-left">
                    <a href="/user/{{ $comment->user->id }}">{{ $comment->score }}
                    </a>
                </div>

                </div>
                </div>
            </div>
            @endforeach
               
            </div>
        </div>
    </div>
</div>

@endsection
