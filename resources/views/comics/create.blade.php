@extends('layouts.app')

@section('page-title') Comics Create  @endsection

@section('content') 

    <main>
        <div class="container">
            <form class="row g-3" action="{{route('comics.store')}}" method="POST">
                @csrf

                <div class="col-12">
                  <label for="title" class="form-label">Titolo</label>
                  <input type="text" class="form-control" id="title" name="title">
                </div>

                <div class="col-12">
                  <label for="thumb" class="form-label">URL immagine</label>
                  <input type="text" class="form-control" id="thumb" name="thumb">
                </div>

                <div class="col-md-6">
                  <label for="price" class="form-label">Prezzo</label>
                  <input type="text" class="form-control" id="price" name="price">
                </div>

                <div class="col-md-6">
                    <label for="series" class="form-label">Serie</label>
                    <input type="text" class="form-control" id="series" name="series">
                </div>

                <div class="col-md-6">
                    <label for="sale_date" class="form-label">Data di uscita</label>
                    <input type="text" class="form-control" id="sale_date" name="sale_date">
                </div>

                <div class="col-md-6">
                    <label for="type" class="form-label">Tipo</label>
                    <input type="text" class="form-control" id="type" name="type">
                </div>

                <div class="form-floating">
                    <textarea class="form-control" placeholder="Descrizione" id="description" name="description"></textarea>
                    <label for="description">Descrizione</label>
                </div>
                
                <div class="col-12">
                  <button type="submit" class="btn btn-primary">Create Comic</button>
                </div>
            </form>
        </div>
    </main>

@endsection
