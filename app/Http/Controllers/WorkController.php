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
        $newWork ->cliente = $data['cliente'];
        $newWork ->lavoro = $data['lavoro'];
        $newWork ->assegnazione = $data['assegnazione'];

        $newWork->save();

        return 'ok';

    }


    public function show($id)
    {
        //
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
