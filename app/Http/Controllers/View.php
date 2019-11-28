<?php

namespace App\Http\Controllers;

use App\Genre as Genre;
use App\Serie as Serie;
use App\Actor as Actor;
use Illuminate\Http\Request;


class View extends Controller
{
    //Une methode
    public function home()
    {
      return view('welcome');
    }
    public function series()
    {
      // je retourne toutes mes series de ma table series via le model serie
      $series = Serie::all();
      return view('series', ['series' => $series]);
    }
    public function actors()
    {
      $actors = Actor::all();
      return view('actors', ['actors' => $actors]);
    }
    public function genres()
    {
      $genres = Genre::all();
      return view('genres', ['genres' => $genres]);
    }
    public function addSeries()
    {
      $actors = \App\Actor::all();
      $genres = \App\Genre::all();
      return view ('addseries', [
        "actors" => $actors,
        "genres" => $genres,
      ]);
    }
    public function addActor()
    {
      $actors = \App\Actor::all();
      return view('addActor');
    }
    public function addGenre()
    {
      $genres = \App\Genre::all();
      return view('addGenre');
    }
    public function updateForm(Request $request)
    {
      $serie = Serie::find($request->input('id'));
      $actors = \App\Actor::all();
      $genres = \App\Genre::all();
      return view('update', [
        'serie' => $serie,
        'actors' => $actors,
        'genres' => $genres,
      ]);
    }
    public function updateActor(Request $request)
    {
      $actor = Actor::find($request->input('id'));
      return view('updateactor', [
        'actor' => $actor,
      ]);
    }
    public function updateGenre(Request $request)
    {
      $genre = Genre::find($request->input('id'));
      return view('updategenre', [
        'genre' => $genre,
      ]);
    }
}
