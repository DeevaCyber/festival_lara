<?php

namespace App\Http\Controllers;

use App\Models\Equipe;
use Illuminate\Http\Request;

class EquipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $data = Equipe::latest()->paginate(5);

      return view('equipe.index',compact('data'))
          ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('equipe.create');
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
         'nomEquipe' => 'required',
         'responsableEquipe' => 'required',
         'nombreMembreEquipe' => 'required',
         'paysEquipe' => 'required',
     ]);

     Equipe::create($request->all());

     return redirect()->route('equipe.index')
                     ->with('success','Equipe created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Equipe  $equipe
     * @return \Illuminate\Http\Response
     */
    public function show(Equipe $equipe)
    {
        return view('equipe.show',compact('equipe'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Equipe  $equipe
     * @return \Illuminate\Http\Response
     */
    public function edit(Equipe $equipe)
    {
        return view('equipe.edit',compact('equipe'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Equipe  $equipe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Equipe $equipe)
    {
      $request->validate([
        'nomEquipe' => 'required',
        'responsableEquipe' => 'required',
        'nombreMembreEquipe' => 'required',
        'paysEquipe' => 'required',
      ]);

      $equipe->update($request->all());

      return redirect()->route('equipe.index')
                      ->with('success','Equipe updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Equipe  $equipe
     * @return \Illuminate\Http\Response
     */
    public function destroy(Equipe $equipe)
    {
      $equipe->delete();

      return redirect()->route('equipe.index')
                      ->with('success','Equipe deleted successfully');
    }
}
