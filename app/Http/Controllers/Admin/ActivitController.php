<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\ActivitStoreRequest;
use App\Http\Requests\ActivitUpdateRequest;
use App\Http\Controllers\Controller;

use App\Activit;

class ActivitController extends Controller
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
        $activities = Activit::orderBy('id','DESC')->paginate();

        return view('admin.activities.index', compact('activities'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.activities.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ActivitStoreRequest $request)
    {

        // Validar
        $activit = Activit::create($request->all());

        return redirect()->route('activities.edit', $activit->id)
            ->with('info', 'Etiqueta criada com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $activit = Activit::find($id);

        return view('admin.activities.show', compact('activit'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $activit = Activit::find($id);

        return view('admin.activities.edit', compact('activit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ActivitUpdateRequest $request, $id)
    {
        $activit = Activit::find($id);
        //Validar
        $activit->fill($request->all())->save();

        return redirect()->route('activities.edit', $activit->id)
            ->with('info', 'Etiqueta atualizada com sucesso!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $activit = Activit::find($id)->delete();

        return back()->with('info', 'Etiqueta eliminada!');

    }
}
