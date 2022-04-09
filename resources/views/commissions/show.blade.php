@extends('layout')

@section('content')

<h1 class="title">Edishow {{$commission->title}} </h1>

<div class="content"> {{$commission->description}}

<a href="{{$commission->id}}/edit"> Edit </a>


@endsection
