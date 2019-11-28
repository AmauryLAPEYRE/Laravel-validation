@extends('layouts.master')

@section('title', 'Home')

@section('content')
    <h1>List all genres</h1>
    <table>
      <tr>
        <td><h3>GENRES</h3></td>
        <td><h3>DELETE</h3></td>
        <td><h3>UPDATE</h3></td>
      </tr>
        @foreach ($genres as $genre)
          <tr>
            <td>
             {{ $genre->name }}
            </td>
            <td><form class="" action="/deletegenre" method="post">
              @csrf
              <input type="hidden" name="id" value="{{ $genre->id }}">
              <input type="submit" name="" value="X">
            </form></td>
            <td><form class="" action="/updategenre" method="post">
              @csrf
              <input type="hidden" name="id" value="{{ $genre->id }}">
              <input type="submit" name="" value="U">
            </form></td>
          </tr>
        @endforeach
    </table>
@endsection
