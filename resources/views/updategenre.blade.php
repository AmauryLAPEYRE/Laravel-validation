@extends('layouts.master')

@section('title', 'Home')

@section('content')
  <h1>Update one actor</h1>
  <form class="" action="/updategenreaction" method="post">
    @csrf
      <input type="hidden" name="id" value="{{ $genre->id }}">
      <input required type="text" name="name" placeholder="Last name" value="{{ $genre->name }}">
    <input type="submit" name="" value="Update">
  </form>
@endsection
