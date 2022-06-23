<?php

namespace App\Http\Controllers;

use App\Http\Requests\SellerRequest;
use App\Models\Seller;
use Illuminate\Http\Request;

class SellerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sellers = Seller::all();

        return view('seller.index', compact('sellers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('seller.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SellerRequest $request)
    {
        Seller::create($request->all());

        $request->session()->flash('sucesso', "Representante cadastrado com sucesso");

        return redirect()->route('seller.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {

            $seller = Seller::findOrFail($id);

            return response()->json($seller, 200);

        } catch (\Throwable $th) {
            return response()->json(['erro' => 'Representante comercial não encontrado'], 404);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $seller = Seller::findOrFail($id);

        return view('seller.form_edit', compact('seller'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SellerRequest $request, $id)
    {
        try {

            $seller = Seller::findOrFail($id);
            $seller->update($request->all());

            return response()->json($seller, 200);

        } catch (\Throwable $th) {
            return response()->json(['erro' => 'Representante comercial não encontrado'], 404);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        try {

            $seller = Seller::findOrFail($id);
            $seller->delete($id);

            $request->session()->flash('sucesso', "Representante excluído com sucesso");

            return redirect()->route('seller.index');

        } catch (\Throwable $th) {
            return response()->json(['erro' => 'Representante comercial não encontrado'], 404);
        }
    }
}
