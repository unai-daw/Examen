<?php

namespace App\Http\Controllers;

use App\Models\hegaldia;
use Illuminate\Http\Request;

class HegaldiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return hegaldia::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $hegaldia = new hegaldia;
        $hegaldia -> ireteeraAirport = $request-> ireteeraAirport;
        $hegaldia -> helmugaAirport = $request-> helmugaAirport;
        $hegaldia -> ireteeraEguna = $request-> ireteeraEguna;
        $hegaldia -> iraupena = $request-> iraupena;

        $hegaldia -> save();

        return redirect()->route('/hegaldiak/index')->with('success', 'Hegaldia created successfully');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\hegaldia  $hegaldia
     * @return \Illuminate\Http\Response
     */
    public function show(){
        $hegaldia = hegaldia::all();
        return view('/hegaldiak/index', ['hegaldiak' => $hegaldia]);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\hegaldia  $hegaldia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $hegaldia = hegaldia::find($id);
        $hegaldia -> ireteeraAirport = $request-> ireteeraAirport;
        $hegaldia -> helmugaAirport = $request-> helmugaAirport;
        $hegaldia -> ireteeraEguna = $request-> ireteeraEguna;
        $hegaldia -> iraupena = $request-> iraupena;
        $hegaldia -> save();
    
        return redirect()->route('/hegaldiak/index')->with('success', 'Hegaldia updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\hegaldia  $hegaldia
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $hegaldia = hegaldia::find($id);
        $hegaldia->delete();
    }

    
}
