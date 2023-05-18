@extends('layouts.app')

@section('page-title') Comics Create  @endsection

@section('content') 

    <main>
        <div class="container">
            <form class="row g-3" action="{{route('comics.store')}}" method="POST">
                @csrf

                <div class="col-12">
                  <label for="title" class="form-label">Titolo</label>
                  <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{old('title')}}">
                  @error('title') <div class="alert alert-danger">{{ $message }}</div> @enderror
                </div>

                <div class="col-12">
                  <label for="thumb" class="form-label">URL immagine</label>
                  <input type="text" class="form-control @error('thumb') is-invalid @enderror" id="thumb" name="thumb" value="{{old('thumb')}}">
                  @error('thumb') <div class="alert alert-danger">{{ $message }}</div> @enderror
                </div>

                <div class="col-md-6">
                  <label for="price" class="form-label">Prezzo</label>
                  <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price" value="{{old('price')}}">
                  @error('price') <div class="alert alert-danger">{{ $message }}</div> @enderror
                </div>

                <div class="col-md-6">
                    <label for="series" class="form-label">Serie</label>
                    <input type="text" class="form-control @error('series') is-invalid @enderror" id="series" name="series" value="{{old('series')}}">
                    @error('series') <div class="alert alert-danger">{{ $message }}</div> @enderror
                </div>

                <div class="col-md-6">
                    <label for="sale_date" class="form-label">Data di uscita</label>
                    <input type="text" class="form-control @error('sale_date') is-invalid @enderror" id="sale_date" name="sale_date" value="{{old('sale_date')}}">
                    @error('sale_date') <div class="alert alert-danger">{{ $message }}</div> @enderror
                </div>

                <div class="col-md-6">
                    <label for="type" class="form-label">Tipo</label>
                    <input type="text" class="form-control @error('type') is-invalid @enderror" id="type" name="type" value="{{old('type')}}">
                    @error('type') <div class="alert alert-danger">{{ $message }}</div> @enderror
                </div>

                <div class="form-floating">
                    <textarea class="form-control @error('description') is-invalid @enderror" placeholder="Descrizione" id="description" name="description">{{old('description')}}</textarea>
                    <label for="description">Descrizione</label>
                    @error('description') <div class="alert alert-danger">{{ $message }}</div> @enderror
                </div>
                
                <div class="col-12">
                  <button type="submit" class="btn btn-primary">Create Comic</button>
                </div>
            </form>
        </div>
    </main>

@endsection
