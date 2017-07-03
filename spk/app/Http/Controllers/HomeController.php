<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('Home');
    }

    public function hapusHp()
    {
        session()->flush();
        return redirect('/');
    }

    public function deleteSession()
    {
      session()->flush();
      return redirect('/pilihhp');
    }

    public function pilihHp()
    {
      return view('setponsel/sethp');
    }

    public function setHp($hp)
    {
      session([
        'hp' => $hp
      ]);

      return redirect('/');
    }

    public function setTipe(Request $request)
    {
      session([
        'tipe' => $request->tipe
      ]);

      return redirect('/');
    }

}
