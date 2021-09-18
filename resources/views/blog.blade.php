@extends('layouts.master')

@section('title',
  'About')

@section('content')    
        @include('inc.user.banner')
        @include('inc.user.comingsoon')
        @include('inc.user.feature')
@endsection
