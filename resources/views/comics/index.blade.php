@extends('layouts.app')

@section('page-title') Comics List  @endsection

@section('content') 

    <main>
        <div class="container">
            
            <div>
                <a class="btn btn-info" href="{{route('comics.create')}}" role="button">Create new Comic</a>
            </div>

            <table class="table table-striped table-hover">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Titolo</th>
                    <th scope="col">Serie</th>
                    <th scope="col">Prezzo</th>
                    <th scope="col">Azioni</th>
                  </tr>
                </thead>
                <tbody>
                    @forelse ($comics as $comic)
                        <tr>
                            <th scope="row">{{$comic['id']}}</th>
                            <td>{{$comic['title']}}</td>
                            <td>{{$comic['series']}}</td>
                            <td>{{$comic['price']}}</td>
                            <td>
                                <a class="btn btn-primary" href="{{route('comics.show', ['comic' => $comic->id])}}" role="button">Show</a>
                                <a class="btn btn-warning" href="{{route('comics.edit', ['comic' => $comic->id])}}" role="button">Edit</a>
                            </td>
                        </tr>
                    @empty
                        <h1>Non ci sono elementi da visualizzare</h1>
                    @endforelse
                </tbody>
              </table>
            
        </div>
    </main>

@endsection
