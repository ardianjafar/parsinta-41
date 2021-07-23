@extends('layouts.app',['title' => 'Create Post'])

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">New Post</div>
                <div class="card-body">
                    <form action="/posts/store" method="post" enctype="multipart/form-data">
                        @include('/posts.partials.form-control',['submit' => 'Create'])
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div> 
</div>
@endsection