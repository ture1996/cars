@extends('layouts.master')

@section('title', 'Cars')

@section('content')
        @foreach($cars as $car)
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">
                <div class="card-body">
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


