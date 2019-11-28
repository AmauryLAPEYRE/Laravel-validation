<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Serie extends Controller
{
    // Je crée une fonction que je nomme insertone qui me permettra d'ajouter une serie
    public function insertOne(Request $request)
    {
        $serie = new \App\Serie;
        $serie->title = $request->input('title');
        $serie->publication_year = $request->input('publication_year');
        $serie->save();
        // Je lie mes acteurs à ma serie
        $serie->actors()->attach($request->input('actors'));
        // Je lie mes genres à ma serie
        $serie->genres()->attach($request->input('genres'));
        return redirect('/series');
    }
    // Je crée une fonction que je nomme deleteOne qui me permettra de supprimer une serie
    public function deleteOne(Request $request)
    {
        $id = $request->id;
        $serie = \App\Serie::find($id);
        $serie->delete();
        return redirect('/series');
    }
    // Je crée une fonction que je nomme updateOne qui me permettra d'update une serie
    public function updateOne(Request $request)
    {
      $id = $request->id;
      $serie = \App\Serie::find($id);
      $serie->title = $request->input('title');
      $serie->publication_year = $request->input('publication_year');
      $serie->save();
      $serie->actors()->detach();
      $serie->genres()->detach();
      $serie->actors()->attach($request->input('actors'));
      $serie->genres()->attach($request->input('genres'));
      return redirect('/series');
    }
}
