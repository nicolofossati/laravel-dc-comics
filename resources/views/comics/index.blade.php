@extends('layouts.app')

@section('page-title') Comics List  @endsection

@section('content') 

    <main>
        <div class="container">
            
            @forelse ($comics as $comic)
                {{$comic['title']}}
                <a class="btn btn-primary" href="{{route('comics.show', ['comic' => $comic->id])}}" role="button">Show</a>
                <br>
            @empty
        
            @endforelse
        </div>
    </main>

@endsection
