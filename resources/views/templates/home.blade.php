@extends('layouts.master')

@section('title')
    Travel Express | Home
@endsection

@section('content')
    @include('layouts.navbar')
    @include('layouts.carousel')
    @include('layouts.tourPackages')
    @include('layouts.tours')
    @include('layouts.footer')
@endsection
