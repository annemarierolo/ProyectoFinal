<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;
use App\Event;
use Illuminate\Support\Facades\File;
use Validator;

class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $events = Event::paginate(10);

        if(Auth::user()->hasRole('Administrador'))
            return view('events.index', ['events' => $events]);
        else
            return redirect('/');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $events = new Event();
        return view('events.create', ['events' => $events]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $v = Validator::make($request->all(), [
            'tittle' => 'required|max:255',
            'addres' => 'required|max:80',
            'tickets_total' => 'required',
            'tickets_sold' => 'required',
            'ticket_price' => 'required',
            'valid_to' => 'required',
            'valid_from' => 'required',
            'description' => 'required|max:400',
            //'foto' => 'required|mimes:jpeg,jpg,png|max:500|image_size: <=300,<=500',
        ]);

        /*if($v->fails()){
            return redirect('events/create')
            ->withInput()
            ->withErrors($v);
        }

        //$foto = $request->input('foto');
        //if(isset($foto)){
           // $ext = strtolower($request->file('foto')->getClientOriginalExtension());
            $imageName = $request->file('foto')->getClientOriginalName();
            $path = base_path() . "/public/images/events/";
            $request->file('foto')->move($path,$imageName);
        //}*/

        Event::create([
            'tittle' => $request->input('tittle'),
            'addres' => $request->input('addres'),
            'valid_to' => $request->input('valid_to'),
            'valid_from' => $request->input('valid_from'),
            'tickets_total' => $request->input('tickets_total'),
            'ticket_price' => $request->input('ticket_price'),
            'tickets_sold' => $request->input('tickets_sold'),
            'description' => $request->input('description'),
            //'foto' => $imageName,

        ]);

        return redirect('/events');
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
        $events = Event::findOrFail($id);
        return view('events.edit', ['events' => $events]);
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
        $v = Validator::make($request->all(), [
            'tittle' => 'required|max:255',
            'addres' => 'required|max:80',
            'tickets_total' => 'required',
            'tickets_sold' => 'required',
            'ticket_price' => 'required',
            'valid_to' => 'required',
            'valid_from' => 'required',
            'description' => 'required|max:400',
            //'foto' => 'required|mimes:jpeg,jpg,png|max:500|image_size: <=300,<=500',
        ]);

         /*if($v->fails()){
            return redirect()->back()
                ->withErrors($v)
                ->withInput();
        }

        $events = Event::findOrFail($id);

        $imageName = $request->file('foto')->getClientOriginalName();

            if($events->foto!=$imageName){
                $path = base_path() . "/public/images/events/";
                $request->file('foto')->move($path,$imageName);
                File::delete($path. $events->foto);

            }*/

        $events->update([
            'tittle' => $request->input('tittle'),
            'addres' => $request->input('addres'),
            'valid_to' => $request->input('valid_to'),
            'valid_from' => $request->input('valid_from'),
            'tickets_total' => $request->input('tickets_total'),
            'ticket_price' => $request->input('ticket_price'),
            'tickets_sold' => $request->input('tickets_sold'),
            'description' => $request->input('description'),
            //'foto' => $imageName,

        ]);

        return redirect('/events');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Event::destroy($id);
        return redirect('/events');
    }
}
