<?php

namespace App\Http\Controllers;

use App\Keyboard;
use Illuminate\Http\Request;

class KeyboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $keyboards = Keyboard::paginate(18);
        $data = [
            'keyboards' => $keyboards,
            'title' => 'Keyboards Home'
        ];

        return view('keyboards.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('keyboards.create', ['title' => 'Add new keyboard']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) //keyboards
    {

        $dataArray = $request->all();
        //validazione
        $keyboard = new Keyboard();
        $keyboard->name = $dataArray['name'];
        $keyboard->sku = $dataArray['sku'];
        $keyboard->features = $dataArray['features'];
        $keyboard->switches = $dataArray['switches'];
        $keyboard->keycaps = $dataArray['keycaps'];
        $keyboard->photo = $dataArray['photo'];
        $keyboard->price = $dataArray['price'];

        $save = $keyboard->save();

        if (!$save) {
            dd('salvataggio non riuscito');
        }

        //passiamo tramite una rotta per poter visualizzate correttamente i dati e l'indirizzo della pagina
        return redirect()->route('keyboards.show', $keyboard->id); //keyboards/id
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Keyboard  $keyboard
     * @return \Illuminate\Http\Response
     */
    public function show(Keyboard $keyboard) //keyboards/id
    {
        $data = [
            'keyboard' => $keyboard,
            'title' => $keyboard->name
        ];
        return view('keyboards.show', $data);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Keyboard  $keyboard
     * @return \Illuminate\Http\Response
     */
    public function edit(Keyboard $keyboard)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Keyboard  $keyboard
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Keyboard $keyboard)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Keyboard  $keyboard
     * @return \Illuminate\Http\Response
     */
    public function destroy(Keyboard $keyboard)
    {
        //
    }

    public function miaRotta()
    {
    }
}
