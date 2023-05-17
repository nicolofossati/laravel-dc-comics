@extends('layouts.app')

@section('page-title') Comics Edit  @endsection

@section('content') 

    <main>
        <div class="container">
            <form class="row g-3" action="{{route('comics.update', ['comic' => $comic->id])}}" method="POST">
                @csrf
                @method('PUT')

                <div class="col-12">
                  <label for="title" class="form-label">Titolo</label>
                  <input type="text" class="form-control" id="title" name="title" value="{{$comic['title']}}">
                </div>

                <div class="col-12">
                  <label for="thumb" class="form-label">URL immagine</label>
                  <input type="text" class="form-control" id="thumb" name="thumb" value="{{$comic['thumb']}}">
                </div>

                <div class="col-md-6">
                  <label for="price" class="form-label">Prezzo</label>
                  <input type="text" class="form-control" id="price" name="price" value="{{$comic['price']}}">
                </div>

                <div class="col-md-6">
                    <label for="series" class="form-label">Serie</label>
                    <input type="text" class="form-control" id="series" name="series" value="{{$comic['series']}}">
                </div>

                <div class="col-md-6">
                    <label for="sale_date" class="form-label">Data di uscita</label>
                    <input type="text" class="form-control" id="sale_date" name="sale_date" value="{{$comic['sale_date']}}">
                </div>

                <div class="col-md-6">
                    <label for="type" class="form-label">Tipo</label>
                    <input type="text" class="form-control" id="type" name="type" value="{{$comic['type']}}">
                </div>

                <div class="form-floating">
                    <textarea class="form-control" placeholder="Descrizione" id="description" name="description">value="{{$comic['description']}}"</textarea>
                    <label for="description">Descrizione</label>
                </div>
                
                <div class="col-12">
                  <button type="submit" class="btn btn-primary">Update Comic</button>
                </div>
            </form>
        </div>
    </main>

@endsection
