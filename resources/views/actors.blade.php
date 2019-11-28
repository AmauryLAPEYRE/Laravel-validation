@extends('layouts.master')

@section('title', 'Home')

@section('content')
    <h1>List all actors</h1>
    <table>
      <tr>
        <td><h3>ACTORS</h3></td>
        <td><h3>DELETE</h3></td>
        <td><h3>UPDATE</h3></td>
      </tr>
        @foreach ($actors as $actor)
          <tr>
            <td>
             {{ $actor->completeName() }}
            </td>
            <td><form class="" action="/deleteactor" method="post">
              @csrf
              <input type="hidden" name="id" value="{{ $actor->id }}">
              <input type="submit" name="" value="X">
            </form></td>
            <td><form class="" action="/updateactor" method="post">
              @csrf
              <input type="hidden" name="id" value="{{ $actor->id }}">
              <input type="submit" name="" value="U">
            </form></td>
          </tr>
        @endforeach
    </table>
@endsection
