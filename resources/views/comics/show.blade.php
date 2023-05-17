@extends('layouts.app')

@section('page-title') Comics Show  @endsection

@section('content') 

    <main>
        <div class="container">
            
            <h1>{{$comic['title']}}</h1>
            <h2>Ha id: {{$comic['id']}}</h2>

        </div>
    </main>

@endsection