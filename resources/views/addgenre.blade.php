@extends('layouts.master')

@section('title', 'Home')

@section('content')
  <form class="" action="/insertgenre" method="post">
    @csrf
    <input required type="text" name="name" placeholder="Genre">
    <input type="submit" name="" value="Ajouter">
  </form>
@endsection
