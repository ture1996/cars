@extends('layouts.master')

@section('title', 'About')

@section('content')
        @foreach($cars as $car)
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
                <div class="card-body">
                  <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                  <div class="d-flex justify-content-between align-items-center">
                    <div class="btn-group">
                      <a href="{{ route('single-car', ['id' => $car->id]) }}">{{$car->title}}</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        @endforeach
@endsection


