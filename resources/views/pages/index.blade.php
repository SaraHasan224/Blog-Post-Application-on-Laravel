@extends('layouts.app')

@section('content')
    <div class="jumbotron">
        <h1 align="center"> {{$title}}</h1>        <!-- syntax for passing a single value  (method 1) --> 
        <br/>
        <p align="center"> This is laravel application from the "laravel from scratch" youtube series</p>
        <div align = "center">
            <button type="button" class="btn btn-primary">Login</button>
            <button type="button" class="btn btn-success">Register</button>
        </div>
    </div>
@endsection