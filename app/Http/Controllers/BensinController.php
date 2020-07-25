<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Bensin;
use DB;

class BensinController extends Controller
{
    protected $table='bensins';
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bensins=Bensin::all();
        return view('bensin.index', compact('bensins'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bensin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, ['nama'      =>'Required',
                                   'harga'     =>'Required',
                                   'ron'       =>'Required',
                                   'id_vehicle'=>'Required']);

        $bensin=$request->all();
        bensin::create($bensin);
        return redirect('bensin');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bensin=Bensin::find($id);
        return view('bensin.edit', compact('bensin'));
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
        $this->validate($request, ['nama'=>'Required',
                                   'harga'=>'Required',
                                   'ron'=>'Required',
                                   'id_vehicle'=>'Required']);

        $bensin=Bensin::find($id);
        $bensinUpdate=$request->all();
        $bensin->update($bensinUpdate);
        return redirect('bensin');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bensin=Bensin::find($id);
        $bensin->delete();
        return redirect('bensin');
    }
    public function tableJoin()
    {
        $bensins = DB::table('vehicles')
        ->leftJoin('bensins', 'vehicles.id', '=', 'bensins.id_vehicle')
        ->get();
        return view('bensin.index',compact('bensins'));
  }

}

