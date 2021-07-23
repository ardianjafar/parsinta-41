@extends('layouts.app',['title' => 'Update Post'])

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">Update Post</div>
                <div class="card-body">                   
                    <form action="/posts/{{ $post->slug }}/edit" method="post" enctype="multipart/form-data">
                        @include('posts.partials.form-control')
                        @method('patch')
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div> 
</div>
@endsection