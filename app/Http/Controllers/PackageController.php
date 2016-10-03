<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Auth;

use App\Package;
use Illuminate\Support\Facades\File;
use Validator;

class PackageController extends Controller
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
        if(Auth::user()->hasRole('Administrador')){
            $packages = Package::all();
            return view('paquetes.index', ['packages' => $packages]);
        }else{
            return redirect('/');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $package = new Package();
        return view('package.create', ['package' => $package]);
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
            'destiny' => 'required',
            'ticket_price' => 'required',
            'tickets_total' => 'required',
            'valid_from' => 'required',
            'valid_to' => 'required',
            'content' => 'required|max:400',
            'images' => 'required|mimes:jpeg,jpg,png|max:500|image_size: <=300,<=500',
        ]);

        if($v->fails()){
            return redirect('films/create')
            ->withInput()
            ->withErrors($v);
        }

        //$foto = $request->input('foto');
        //if(isset($foto)){
           // $ext = strtolower($request->file('foto')->getClientOriginalExtension());
            $imageName = $request->file('foto')->getClientOriginalName();
            $path = base_path() . "/public/images/package/";
            $request->file('foto')->move($path,$imageName);
        //}

        Package::create([
            'tittle' => $request->input('tittle'),
            'destiny' => $request->input('destiny'),
            'ticket_price' => $request->input('ticket_price'),
            'tickets_total' => $request->input('tickets_total'),
            'valid_to' => $request->input('valid_to'),
            'valid_from' => $request->input('valid_from'),
            'content' => $request->input('content'),
            'images' => $imageName,

        ]);

        return redirect('/package');
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
        $package = Package::findOrFail($id);
        return view('package.edit', ['package' => $package]);
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
            'destiny' => 'required',
            'ticket_price' => 'required',
            'tickets_total' => 'required',
            'valid_from' => 'required',
            'valid_to' => 'required',
            'content' => 'required|max:400',
            'images' => 'required|mimes:jpeg,jpg,png|max:500|image_size: <=300,<=500',
        ]);

         if($v->fails()){
            return redirect()->back()
                ->withErrors($v)
                ->withInput();
        }

        $package = Package::findOrFail($id);

        $imageName = $request->file('foto')->getClientOriginalName();

            if($package->foto!=$imageName){
                $path = base_path() . "/public/images/package/";
                $request->file('foto')->move($path,$imageName);
                File::delete($path. $package->foto);

            }

        $package->update([
            'tittle' => $request->input('tittle'),
            'destiny' => $request->input('destiny'),
            'ticket_price' => $request->input('ticket_price'),
            'tickets_total' => $request->input('tickets_total'),
            'valid_to' => $request->input('valid_to'),
            'valid_from' => $request->input('valid_from'),
            'content' => $request->input('content'),
            'images' => $imageName,
        ]);

        return redirect('/package');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Package::destroy($id);
        return redirect('/package');
    }
}
