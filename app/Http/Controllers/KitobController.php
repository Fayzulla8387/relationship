<?php

namespace App\Http\Controllers;

use App\Models\Kitob;
use App\Models\Muallifi;
use Illuminate\Http\Request;

class KitobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
   $data=Kitob::all();
    return view('kitob.index',[
            'data'=>$data,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $muallif=Muallifi::all();
//        dd($muallif);
        return view('kitob.create',compact('muallif'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Kitob();
        $data->create([
                'name' => $request['name'],
                'muallif_id' => $request['muallif'],
            ]
        );
        return redirect()->route('kitob.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kitob  $kitob
     * @return \Illuminate\Http\Response
     */
    public function show(Kitob $kitob)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kitob  $kitob
     * @return \Illuminate\Http\Response
     */
    public function edit(Kitob $kitob)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kitob  $kitob
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kitob $kitob)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kitob  $kitob
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kitob $kitob)
    {
        //
    }
}
