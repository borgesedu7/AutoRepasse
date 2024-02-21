<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Veiculo;

class VeiculoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("veiculos.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Veiculo::create([
            'veiculo' => $request->veiculo,
            'ano_modelo' => $request->ano_modelo,
            'placa' => $request->placa,
            'renavam' => $request->renavam,
            'cor' => $request->cor,
            'chassi' => $request->chassi,
            'cod_seg_crv' => $request->cod_seg_crv,
            'cod_seg_cla' => $request->cod_seg_cla,
            'crv' => $request->crv,
            'atpve' => $request->atpve,
        ]);


        return view('auth.index');

    }

    public function dashboard() {

        $veiculo = Veiculo::all(['id','veiculo', 'ano_modelo', 'placa','cor']);
        return view('veiculos.dashboard', [
            'veiculo' => $veiculo,
        ]);
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
        $veiculo = Veiculo::findOrFail($id);

        return view('veiculos.show', ['veiculo' => $veiculo]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $veiculo = Veiculo::findOrFail($id);

        return view('veiculos.edit', ['veiculo' => $veiculo]);
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
        Veiculo::findOrFail($id)->delete();

        return redirect('dashboard')->with('msg','Veiculo excluido com sucesso');
    }
}
