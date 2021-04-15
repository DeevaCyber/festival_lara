<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Attribution;

class AttributionController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $data = Attribution::latest()->paginate(5);

      return view('attribution.index',compact('data'))
          ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $etab = DB::table('etablissements')->get();
        $equipe = DB::table('equipes')->get();
        return view('attribution.create',compact('etab','equipe'));
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
         'etablissements_idEtab' => 'require',
         'equipes_idEquipe' => 'require'
     ]);

     Attribution::create($request->all());

     return redirect()->route('attribution.index')
                     ->with('success','Attribution created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Attribution  $attribution
     * @return \Illuminate\Http\Response
     */
    public function show(Attribution $attribution)
    {
      $etab = DB::table('attributions')
                  ->join('etablissements','attributions.etablissements_idEtab','=','etablissements.id')
                  ->where('etablissements.id','=',$attribution)
                  ->select('etablissements.nomEtab')
                  ->get();
      $equipe = DB::table('attributions')
                  ->join('equipes','attributions.equipes_idEquipe','=','equipes.id')
                  ->where('equipes.id','=',$attribution)
                  ->select('equipes.nomEquipe')
                  ->get();
        return view('attribution.show',compact('attribution','etab','equipe'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Attribution  $attribution
     * @return \Illuminate\Http\Response
     */
    public function edit(Attribution $attribution)
    {
      $etab = DB::table('etablissements')->get();
      $equipe = DB::table('equipes')->get();
      return view('attribution.edit',compact('attribution','etab','equipe'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Attribution  $attribution
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Attribution $attribution)
    {
      $request->validate([
        'etablissements_idEtab' => 'require',
        'equipes_idEquipe' => 'require'
      ]);

      $attribution->update($request->all());

      return redirect()->route('attribution.index')
                      ->with('success','Attribution updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Attribution  $attribution
     * @return \Illuminate\Http\Response
     */
    public function destroy(Attribution $attribution)
    {
      $attribution->delete();

      return redirect()->route('attribution.index')
                      ->with('success','Attribution deleted successfully');
    }
}
