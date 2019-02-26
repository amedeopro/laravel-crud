<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
      $users = User::all();

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


    public function show(User $user)
    {
        //
    }


    public function edit(User $user)
    {
        //
    }


    public function update(Request $request, User $user)
    {
        //
    }


    public function destroy(User $user)
    {
        //
    }
}
