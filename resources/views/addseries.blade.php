@extends('layouts.master')

@section('title', 'Home')

@section('content')
    <h1>Ajouter une série</h1>
    <form class="" action="/insertserie" method="post">
      @csrf
      <input required type="text" name="title" placeholder="Titre">
      <input required type="number" name="publication_year" value="Year Movie" placeholder="0000">
      <select multiple class="" name="actors[]">
          @foreach ($actors as $actor)
            <option value="{{ $actor->id }}">
            {{ $actor->completeName() }}
            </option>
          @endforeach
      </select>
      <select multiple class="" name="genres[]">
        @foreach ($genres as $genre)
          <option value="{{ $genre->id }}">
          {{ $genre->name }}
          </option>
        @endforeach
      </select>
      <input type="submit" name="" value="Ajouter">
    </form>
@endsection
