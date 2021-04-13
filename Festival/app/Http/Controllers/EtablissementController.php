<?php

namespace App\Http\Controllers;

use App\Models\Etablissement;
use Illuminate\Http\Request;

class EtablissementController extends Controller
{
  /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Etablissement::latest()->paginate(5);

        return view('etablissement.index',compact('data'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('etablissement.create');
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
            'nomEtab' => 'required',
            'adrueEtab' => 'required',
            'cpEtab' => 'required',
            'villeEtab' => 'required',
            'telEtab' => 'required',
            'mailEtab' => 'required',
            'nomResponsable' => 'required',
            'prenomResponsable' => 'required',
            'nbChambresOffertes' => 'required',
        ]);

        Etablissement::create($request->all());

        return redirect()->route('etablissement.index')
                        ->with('success','Etablissement created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Etablissement  $etablissement
     * @return \Illuminate\Http\Response
     */
    public function show(Etablissement $etablissement)
    {
        return view('etablissement.show',compact('etablissement'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Etablissement  $etablissement
     * @return \Illuminate\Http\Response
     */
    public function edit(Etablissement $etablissement)
    {
        return view('etablissement.edit',compact('etablissement'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Etablissement  $etablissement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Etablissement $etablissement)
    {
        $request->validate([
          'nomEtab' => 'required',
          'adrueEtab' => 'required',
          'cpEtab' => 'required',
          'villeEtab' => 'required',
          'telEtab' => 'required',
          'mailEtab' => 'required',
          'nomResponsable' => 'required',
          'prenomResponsable' => 'required',
          'nbChambresOffertes' => 'required',
        ]);

        $post->update($request->all());

        return redirect()->route('etablissement.index')
                        ->with('success','Etablissement updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Etablissement $etablissement)
    {
        $post->delete();

        return redirect()->route('etablissement.index')
                        ->with('success','Etablissement deleted successfully');
    }
}
