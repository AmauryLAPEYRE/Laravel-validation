@extends('layouts.master')

@section('title', 'Home')

@section('content')
  <h1>Update one actor</h1>
  <form class="" action="/updateactoraction" method="post">
    @csrf
      <input type="hidden" name="id" value="{{ $actor->id }}">
      <input required type="text" name="last_name" placeholder="Last name" value="{{ $actor->last_name }}">
      <input required type="text" name="first_name" placeholder="First name" value="{{ $actor->first_name }}">
    <input type="submit" name="" value="Update">
  </form>
@endsection
