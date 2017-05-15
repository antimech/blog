@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>{{ $post->title }}</h1>
            <p>Created At: {{ date('M j, Y h:ia', strtotime($post->created_at)) }}</p>
            <p class="lead">{{ $post->body }}</p>
        </div>
    </div>
</div>
@endsection
