@extends('layouts.app')

@section('content')
        <h1> {{$title}}</h1>
        <br/>
        <p> This is services page</p>
        @if(count($services) > 0)
            @foreach($services as $service)
                
            <ul>
                <li>{{$service}}</li>
            </ul>
            @endforeach
        @endif
@endsection