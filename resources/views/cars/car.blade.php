@extends('layouts.master')

@section('title', $car->title)

@section('content')
            {{$car->producer}}
@endsection
