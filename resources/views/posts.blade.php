@extend('index')
@section('content')

<div class="col-md-7">
    <table class="table">
        <thead class="thead-dark text-info">
        <th>User</th>
        <th class="">Post ID</th>
        <th class="">Post Title</th>
        <th class="">Post Created</th>
        <th class="">Post Update</th>
        <th class="text-center"  colspan="3">Action</th>

        </thead>
        <tbody>
        @foreach($posts as $post)

        <tr>
        <td>{{$post->user->name}}</td>
        <td>{{$post->id}}</td>
        <td>{{$post->title}}</td>
        <td>{{$post->created_at}}</td>
        <td>{{$post->updated_at}}</td>
        <td><a..class="btn btn-success" data-toggle="tooltip" title="{{post->content}}">View</a></td>
        <td><a..class="btn btn-primary" href={{route('post.edit',$post->id)}}">Edit</a></td>
        <td><a..class="btn btn-danger" href={{route('post.delete',$post->id)}}>Delete</a></td>
        </tr>

        @endforeach
        </tbody>
    </table>
    </div>
@endsection

