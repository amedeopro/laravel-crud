<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Work;

class WorkController extends Controller
{

    public function index()
    {
      $works = Work::all();

      return view('works.index', compact('works'));
    }


    public function create()
    {
        return view('works.create');
    }


    public function store(Request $request)
    {
        $data = $request->all();

        $newWork = new Work();
        // $newWork = fill($data); questo e' piu' veloce ma salva anche il token quindi nel model inserisco protected $fillable = ['cliente','lavoro','assegnazione']; quindi solo i campi che deve inserire
        $newWork ->cliente = $data['cliente'];
        $newWork ->lavoro = $data['lavoro'];
        $newWork ->assegnazione = $data['assegnazione'];

        $newWork->save();

        return redirect()->route('works.index');

    }


    public function show($id)
    {

        $work = Work::find($id); //find funziona solo ed esclusivamente per l'id
        if (empty($work)) {
          return abort(404);
        }

        return view('works.show', compact('work'));
        //metodo piu' lungo
        // $works = Work::all();
        //
        // foreach ($works as $work) {
        //   if ($work->id == $id){
        //     $foundWork = $work;
        //   }
        // }
        //
        // $foundWork
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
