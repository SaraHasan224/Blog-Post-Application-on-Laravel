@extends('layouts.app');

@section('content');
    
    <a href="/posts" class="btn btn-primary">Back</a>
      
    <h1>{{$posts -> title}}</h1>
    <img style="width:100%" src="/storage/cover_images/{{$posts->cover_image}}">
    <div>
        {!!$posts -> description!!}
    </div>
    <hr/>
    <small> Post created on {{$posts -> created_at}} by {{$posts -> user -> name}}</small>
    
    <hr/>
    @if(!Auth::guest())
        @if(Auth::user()->id == $posts->user_id)
            <a href="/posts/{{$posts -> id}}/edit" class="btn btn-default" >Edit</a>
            {!!Form::open(['action'=>['PostsController@destroy',$posts->id],'method'=> 'POST','class' =>'pull-right'])!!}
            {{Form::hidden('_method','DELETE')}}
            {{Form::submit('Delete',['class' => 'btn btn-danger'])}}
            {!!Form::close()!!}
        @endif
    @endif
@endsection