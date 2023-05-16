@extends('layouts.app')

@section('page-title') Home Page  @endsection

@section('content') 

    <main>
        <div class="container">
            @forelse ($comics as $comic)
                {{$comic['title']}}<br>
            @empty
                
            @endforelse
        </div>
    </main>

@endsection
