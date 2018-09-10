@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
        
                    <a href="{{ url('/posts/create') }}" class="btn btn-primary">Create Post</a>
                   <h3>Your Blog Posts</h3>
                    <table class="table table-striped">
                            <tr>
                                <td>Title</td>
                                <td></td>
                                <td></td>
                            </tr>
                            @if(count($posts)>0)
                                @foreach ($posts as $post)
                                <tr>
                                        <td>{{$post->title}}</td>
                                        <td><a href="/posts/{{$post->id}}" class="btn btn-default">Edit</a></td>
                                        <td>
                                            {!!Form::open(['action'=>['PostsController@destroy',$post->id],'method'=> 'POST','class' =>'pull-right'])!!}
                                            {{Form::hidden('_method','DELETE')}}
                                            {{Form::submit('Delete',['class' => 'btn btn-danger'])}}
                                            {!!Form::close()!!}
                                        </td>
                                    </tr>   
                                @endforeach
                            @else
                                    <p>You have no posts</p>
                            @endif
                       </table>

                    {{-- @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in! --}}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
