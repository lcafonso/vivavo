<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\GrandmaStoreRequest;
use App\Http\Requests\GrandmaUpdateRequest;
use App\Http\Controllers\Controller;

use App\Grandma;
use App\Local;

class GrandmaController extends Controller
{

    /**
     * Validação de segurança
     */
    public  function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $grandmas = Grandma::orderBy('id','DESC')->paginate();

        return view('admin.grandmas.index', compact('grandmas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $locals = Local::orderBy('name', 'ASC')->pluck('name', 'id');

        return view('admin.grandmas.create', compact('locals'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(GrandmaStoreRequest $request)
    {

        // Validar
        $grandma = Grandma::create($request->all());

        return redirect()->route('grandmas.edit', $grandma->id)
            ->with('info', 'Dados guardados com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $grandma = Grandma::find($id);

        return view('admin.grandmas.show', compact('grandma'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $grandma = Grandma::find($id);
        $locals = Local::orderBy('name', 'ASC')->pluck('name', 'id');

        return view('admin.grandmas.edit', compact('grandma', 'locals'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(GrandmaUpdateRequest $request, $id)
    {
        $grandma = Grandma::find($id);
        //Validar
        $grandma->fill($request->all())->save();

        return redirect()->route('grandmas.edit', $grandma->id)
            ->with('info', 'Dados atualizados com sucesso!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $grandma = Grandma::find($id)->delete();

        return back()->with('info', 'Dados eliminados!');

    }
}
