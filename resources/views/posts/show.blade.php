@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            
            <div class="panel panel-default">
                
                <a href="##">
                <div class="panel-heading">
                {{ $post->title }}
                </a>
                <div class="text-right">
                {{ $post->User->username }}
                <a href="#">{{ $post->user->name }}</a>
                </div>
                </div>
                

                <div class="panel-body">
                {{ $post->content }}
                </div>

                <div class="panel-body">
                <div class="text-right">
                    <a href="{{ $post->id }}/edit ">
                    Edit note
                    </a>
                </div>
               
                </div>

            </div>

            
        </div>
    </div>
</div>

@endsection
