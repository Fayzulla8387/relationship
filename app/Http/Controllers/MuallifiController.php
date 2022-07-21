<?php

namespace App\Http\Controllers;

use App\Models\Muallifi;
use Illuminate\Http\Request;

class MuallifiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Muallifi::all();
        return view('muallif.index', [
            'data' => $data,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('muallif.create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $data = new Muallifi();
        $data->create([
                'name' => $request['muallif'],
            ]
        );
//        $dd=Muallifi::all();
//         return view('muallif.index',[
//             'data'=>$dd,
//         ]);
        return redirect()->route('muallif.index');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Muallifi $muallifi
     * @return \Illuminate\Http\Response
     */
    public function show(Muallifi $muallifi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Muallifi $muallifi
     * @return \Illuminate\Http\Response
     */
    public function edit(Muallifi $muallifi)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Muallifi $muallifi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Muallifi $muallifi)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Muallifi $muallifi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Muallifi $muallifi)
    {
        //
    }
}
