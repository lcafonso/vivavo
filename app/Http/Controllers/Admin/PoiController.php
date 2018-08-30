<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\PoiStoreRequest;
use App\Http\Requests\PoiUpdateRequest;
use App\Http\Controllers\Controller;

use App\Poi;
use App\Local;

class PoiController extends Controller
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
        $pois = Poi::orderBy('id','DESC')->paginate();

        return view('admin.pois.index', compact('pois'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $locals = Local::orderBy('name', 'ASC')->pluck('name','id');

        return view('admin.pois.create', compact('locals'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PoiStoreRequest $request)
    {

        // Validar
        $poi = Poi::create($request->all());

        return redirect()->route('pois.edit', $poi->id)
            ->with('info', 'Ponto de Interesse criado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $poi = Poi::find($id);

        return view('admin.pois.show', compact('poi'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $poi = Poi::find($id);
        $locals = Local::orderBy('name', 'ASC')->pluck('name','id');

        return view('admin.pois.edit', compact('poi', 'locals'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PoiUpdateRequest $request, $id)
    {
        $poi = Poi::find($id);
        //Validar
        $poi->fill($request->all())->save();

        return redirect()->route('pois.edit', $poi->id)
            ->with('info', 'Ponto de Interesse atualizado com sucesso!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $poi = Poi::find($id)->delete();

        return back()->with('info', 'Ponto de Interesse eliminado!');

    }
}
