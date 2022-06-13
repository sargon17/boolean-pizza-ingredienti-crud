<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ingrediente;

class IngredientiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ingredienti = Ingrediente::all();
        return view("ingredienti.index", compact("ingredienti"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("ingredienti.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                "name" => "required",
            ],
            [
                "name.required" => "Il nome è obbligatorio",
            ]
        );

        $ingrediente = new Ingrediente();
        $ingrediente->name = $request->name;
        $ingrediente->save();
        return redirect()->route("ingredienti.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ingrediente = Ingrediente::find($id);
        return view("ingredienti.show", compact("ingrediente"));
    }

    // public function

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ingrediente = Ingrediente::find($id);
        return view("ingredienti.edit", compact("ingrediente"));
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
        $request->validate(
            [
                "name" => "required",
            ],
            [
                "name.required" => "Il nome è obbligatorio",
            ]
        );

        $ingrediente = Ingrediente::find($id);
        $ingrediente->name = $request->name;
        $ingrediente->update();

        return redirect()->route("ingredienti.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ingrediente = Ingrediente::find($id);
        if ($ingrediente) {
            $ingrediente->delete();
        }
        return redirect()->route("ingredienti.index");
    }
}
