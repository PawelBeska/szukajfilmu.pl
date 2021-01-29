@extends('home.masterMovies')
@section('nav')
    @include('home.elements.global.header.nav')
@endsection
@section('body')
    @include('home.elements.movies.movies')
@endsection()