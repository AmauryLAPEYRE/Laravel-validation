@extends('layouts.master')

@section('title', 'Home')

@section('content')
  <form class="" action="/insertactor" method="post">
    @csrf
    <input required type="text" name="last_name" placeholder="Nom">
    <input required type="text" name="first_name" placeholder="Prénom">
    <input type="submit" name="" value="Ajouter">
  </form>
@endsection
