@extends('layout')

@section('content')

<h1 class="title">Edit </h1>

<form method="POST" action="/commissions/{{$commission->id}}">
    {{ method_field('PATCH') }}
    {{csrf_field()}}
    <div class="field">
      <label for="title" class="label">Title</label>
      <div class="control">
        <input type="text" class="input" name="title" placeholder="Title" value="{{ $commission->title }}">
      </div>
    </div>

    <div class="field">
      <label class="label" for="description" >Description</label>
      <div class="control">
      <textarea name="description" class="textarea">{{ $commission->description }}</textarea>
      </div>
    </div>
    <div class="field">
      <div class="control">
        <button type="submit" class="button is-link">Update</button>
      </div>
    </div>
</form>




@endsection
