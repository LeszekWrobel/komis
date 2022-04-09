@extends('layout')

@section('content')
<h1>hej</h1>

@foreach ($commissions as $commission)
   <li> {{$commission}} </li>
    <li> {{$commission->title}} </li>
    <li> {{$commission->description}} </li>

@endforeach
-->
<ul>
    @foreach ($commissions as $commission)
         <li>
            <a href="/commissions/{{$commission->id}}">
             {{$commission->title}}
            </a>
        </li>
    @endforeach
</ul>

@endsection
