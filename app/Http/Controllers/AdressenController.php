<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Adressen;

class AdressenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $adressen = Adressen::get()->where('gebruiker_id', auth()->user()->id);
      return view('adressen.index', compact('adressen'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('adressen.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
          'naam'  =>  ['required', 'unique:adressen'],
          'adres' =>  'required'
        ]);
        $Adres = new Adressen;
        $Adres->gebruiker_id = auth()->user()->id;
        $Adres->naam = $request->naam;
        $Adres->adres = $request->adres;
        $Adres->Save();
        return redirect()->route('adressen.index')->with('succes','Adres aangemaakt');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Adressen $adressen)
    {
        return view('adressen.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Adressen $adressen)
    {
        return view('adressen.edit', compact('adressen'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $request->validate([
        'naam'  =>  'required',
        'adres' =>  'required'
      ]);
      $Adres = Adressen::find($id);
      $Adres->naam = $request->naam;
      $Adres->adres = $request->adres;
      $Adres->Save();
      return redirect()->route('adressen.index')->with('succes','Adres aangepast');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Adressen $adressen)
    {
      $adressen->delete();
      return redirect()->route('adressen.index')->with('succes','Adres verwijderd');
    }

}
