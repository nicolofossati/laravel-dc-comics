@extends('layouts.app')

@section('page-title') Comics Show  @endsection

@section('content') 

    <main>
        <div class="container">
            
            <div class="card m-auto" style="max-width: 540px;">
                <div class="row g-0">
                  <div class="col-md-4">
                    <img src="{{$comic['thumb']}}" class="img-fluid rounded-start">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h5 class="card-title">{{$comic['title']}}</h5>
                      <p class="card-text">{{$comic['price']}}</p>
                      <p class="card-text">{{$comic['series']}}</p>
                      <p class="card-text">{{$comic['type']}}</p>
                      <p class="card-text"><small class="text-body-secondary">{{$comic['sale_date']}}</small></p>
                      
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </main>

@endsection