@extends('index')
@section('content')

<div class="col-md-7">
    <table class="table table-striped"
           <thead>
           <th>Post ID</th>
           <th>Post Title</th>
           <th>Post Created</th>
           </thead>
    <tbody>
    @foreach($post as posts)
    <tr>
        <td>$post->id</td>
        <td>$post->title</td>
        <td>$post->created</td>
    </tr>
    </tbody>
</div>
