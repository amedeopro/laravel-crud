<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
      $users = User::paginate();

      return view('users.index', compact('users'));

    }


    public function create()
    {
        return view('users.create');
    }


    public function store(Request $request)
    {
      $data = $request->all();

      $newUser = new User();
      // $newUser = fill($data); questo e' piu' veloce ma salva anche il token quindi nel model inserisco protected $fillable = ['cliente','lavoro','assegnazione']; quindi solo i campi che deve inserire
      $newUser ->name = $data['name'];
      $newUser ->lastname = $data['lastname'];
      $newUser ->age = $data['age'];
      $newUser ->cf = $data['cf'];

      $newUser->save();

      return redirect()->route('users.index');
    }


    public function show($id)
    {
      $user = User::find($id); //find funziona solo ed esclusivamente per l'id
      if (empty($user)) {
        return abort(404);
      }

      return view('users.show', compact('user'));
    }


    public function edit($id)
    {
      $user = User::find($id);
      if (empty($user)) {
        return abort(404);
      }
      return view('users.edit', compact('user'));
    }


    public function update(Request $request, User $user)
    {
      $data = $request->all();

      $user->update($data);

      return redirect()->route('users.index');
    }


    public function destroy($id)
    {
      $user = User::find($id);
      $user->delete();
      return redirect()->back();
    }
}
