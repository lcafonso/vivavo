<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\LocalStoreRequest;
use App\Http\Requests\LocalUpdateRequest;
use App\Http\Controllers\Controller;

use App\Local;
use App\District;

class LocalController extends Controller
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
        $locals = Local::orderBy('id','DESC')->paginate();

        return view('admin.locals.index', compact('locals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $districts = District::orderBy('name', 'ASC')->pluck('name','id');


        return view('admin.locals.create', compact('districts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(LocalStoreRequest $request)
    {

        // Validar
        $local = Local::create($request->all());

        return redirect()->route('locals.edit', $local->id)
            ->with('info', 'Localidade criada com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $local = Local::find($id);

        return view('admin.locals.show', compact('local'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $local = Local::find($id);
        $districts = District::orderBy('name', 'ASC')->pluck('name','id');

        return view('admin.locals.edit', compact('local','districts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(LocalUpdateRequest $request, $id)
    {
        $local = Local::find($id);
        //Validar
        $local->fill($request->all())->save();

        return redirect()->route('locals.edit', $local->id)
            ->with('info', 'Localidade atualizada com sucesso!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $local = Local::find($id)->delete();

        return back()->with('info', 'Localidade eliminada!');

    }
}
