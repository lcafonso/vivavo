<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\EventStoreRequest;
use App\Http\Requests\EventUpdateRequest;
use App\Http\Controllers\Controller;

use App\Event;
use App\Grandma;
use App\Activit;

class EventController extends Controller
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
        $events = Event::orderBy('id','DESC')->paginate();

        return view('admin.events.index', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $grandmas = Grandma::orderBy('name','ASC')->pluck('name','id');
        $activities = Activit::orderBy('name','ASC')->pluck('name','id');


        return view('admin.events.create',compact('grandmas','activities'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EventStoreRequest $request)
    {

        // Validar
        $event = Event::create($request->all());

        return redirect()->route('events.edit', $event->id)
            ->with('info', 'Evento criado com sucesso!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $event = Event::find($id);

        return view('admin.events.show', compact('event'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $event = Event::find($id);
        $grandmas = Grandma::orderBy('name','ASC')->pluck('name','id');
        $activities = Activit::orderBy('name','ASC')->pluck('name','id');

        return view('admin.events.edit', compact('event','grandmas','activities'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(EventUpdateRequest $request, $id)
    {
        $event = Event::find($id);
        //Validar
        $event->fill($request->all())->save();

        return redirect()->route('events.edit', $event->id)
            ->with('info', 'Evento atualizado com sucesso!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $event = Event::find($id)->delete();

        return back()->with('info', 'item eliminado!');

    }
}
