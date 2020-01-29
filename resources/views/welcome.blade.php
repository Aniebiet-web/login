@extends('layout.master')
@section('title','welcome')
@section('body')
<div class="container mt-5">
    <div class="jumbotron">
       <h1> welcome to Artisan class</h1>
       <p class="w5-50 m-auto font-size-25"> Lorem ipsum dolor sit amet consectetur adipisicing elit.
        Nam hic corporis, aperiam animi obcaecati impedit!</p>

        <div class="text-center">
            <a href="{{route('signup')}}" class="btn btn-info">Get started</a>
            <a href="{{route('login')}}" class="btn btn-success">login</a>
        
        
        </div>
    
    
    </div>
</div>
@endsection