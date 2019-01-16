<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Chitanta;
use App\Models\Factura;
use App\Models\Automobil;
use App\Models\Client;
use App\Models\Interventie;

class InterventionController extends Controller
{
    /**
     * Display a listing of the resource to user.
     *
     * @return \Illuminate\Http\Response
     */
    public function showToUser()
    {
        //
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.pages.intervention.allInterventions');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.intervention.newIntervention');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'numar' => 'required|max:255',
            'serieCaroserie' => 'required|max:255',
            'marca' => 'required|max:255',
            'model' => 'required|max:255',
            'anFabricatie' => 'required|max:255',
            'denumire' => 'required|max:255',
            'telefon' => 'required|max:255',
            'email' => 'nullable|max:255',
            'judet' => 'nullable|max:255',
            'cnpcui' => 'nullable|max:255',
            'regcom' => 'nullable|max:255',
            'cont' => 'nullable|max:255',
            'banca' => 'nullable|max:255',
            'adresa' => 'nullable|max:255',
            'reprezentant' => 'nullable|max:255',
            'serieCi' => 'nullable|max:255',
            'numarCi' => 'nullable|max:255',
            'eliberat' => 'nullable|max:255',
        ]);
        $automobil= new Automobil();
        $automobil->numar = $request->numar;
        $automobil->marca = $request->marca;
        $automobil->model = $request->model;
        $automobil->sasiu = $request->serieCaroserie;
        $automobil->an = $request->anFabricatie;
        $automobil->save();
        $client = new Client();
        $client->denumire = $request->denumire;
        $client->cnpcui = $request->cnpcui;
        $client->email = $request->email;
        $client->telefon = $request->telefon;
        $client->metadata = json_encode(['judet' => $request->judet,
                                        'regcom' => $request->regcom,
                                        'cont' => $request->cont,
                                        'banca' => $request->banca,
                                        'adresa' => $request->adresa,
                                        'reprezentant' => $request->reprezentant,
                                        'serieCi' => $request->serieCi,
                                        'numarCi' => $request->numarCi,
                                        'eliberat' => $request->eliberat,
                            ]);
        $client->save();
        $interventie = new Interventie();
        $interventie->automobil_id = $automobil->id;
        $interventie->save();
        $a=0;
        return view('admin.pages.intervention.newIntervention');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.pages.intervention.singleIntervention',compact('id'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
