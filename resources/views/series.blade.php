@extends('layouts.master')

@section('title', 'Home')

@section('content')
    <h3>Liste des series</h3>
    <table class="series mdl-data-table mdl-js-data-table mdl-data-table mdl-shadow--2dp">
      <thead>
        <tr>
          <th class="mdl-data-table__cell--non-numeric">TITRE</th>
          <th>ANNEE</th>
          <th>ACTEUR</th>
          <th>GENRE</th>
          <th>SUPPRIMER</th>
          <th>MODIFIER</th>
        </tr>
      </thead>
      <tbody>
        @foreach($series as $serie)
          <tr>
            <td class="mdl-data-table__cell--non-numeric">{{ $serie->title }}</td>
            <td>{{ $serie->publication_year }}</td>
            <td>
              @foreach ($serie->actors as $actor)
                {{ $actor->completeName() }}
              @endforeach
            </td>
            <td>
              @foreach ($serie->genres as $genre)
                {{ $genre->name }}
              @endforeach
            </td>
            <td><form class="" action="/deleteserie" method="post">
              @csrf
              <input type="hidden" name="id" value="{{ $serie->id }}">
              <input type="submit" name="" value="X">
            </form></td>
            <td><form class="" action="/updateserie" method="post">
              @csrf
              <input type="hidden" name="id" value="{{ $serie->id }}">
              <input type="submit" name="" value="U">
            </form></td>
          </tr>
        @endforeach
      </tbody>
    </table>
@endsection
