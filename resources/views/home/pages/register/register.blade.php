@extends('home.master')

@section('header')
    @include('home.elements.global.header.header')
@endsection

@section('body')
    @include('home.elements.register.register')
@endsection

@section('footer')
    @include('home.elements.global.footer.footer')
@endsection