<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Cviebrock\ImageValidator\ImageValidator;

use App\News;
//use App\Http\Requests;
//use Auth;
//use Illuminate\Validation\Validator;
//use Illuminate\Support\Facades\Validator;
//use Illuminate\Contracts\Validation\Validator;


class NewsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
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
        $news = News::paginate(10);

        if(Auth::user()->hasRole('Administrador'))
            return view('news.index', ['news' => $news]);
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
        $news = new News();
        return view('news.create',['news'=>$news]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $v = Validator::make($request->all(),[
            'tittle'    => 'required|max:100',
            'summary'   => 'required|max:255',
            'content'   => 'required',
            'image'     => 'required|mimes:jpeg,png|max:500|image_size:<=300,<=600', //'max:45', //
            'date'      => 'required',
        ]);

        if ($v->fails()) {
            return redirect('news/create')
                ->withErrors($v)
                ->withInput();
        }

        $imageName = $request->file('image')->getClientOriginalName();
        $path = base_path() . "/public/images/news/";
        $request->file('image')->move($path, $imageName);

        News::create([
            'tittle'    => $request->input('tittle'),
            'summary'   => $request->input('summary'),
            'content'   => $request->input('content'),
            'image'     => $imageName,
            'date'      => $request->input('date'),
        ]);

        return redirect('/news');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $news = News::findOrFail($id);
        return view('news.show',['news'=>$news]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $news = News::findOrFail($id);
        return view('news.edit',['news'=>$news]);
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
        $v = Validator::make($request->all(),[
            'tittle'    => 'required|max:100',
            'summary'   => 'required|max:255',
            'content'   => 'required',
            'image'     => 'required|mimes:jpeg,png|max:500|image_size:<=300,<=600', // 'max:45', //
            'date'      => 'required|date',
        ]);

        if ($v->fails()) {
            return redirect('news/create')
                ->withErrors($v)
                ->withInput();
        }
        $news = News::findOrFail($id);
        $imageName = $request->file('image')->getClientOriginalName();

        if($news->image!=$imageName){
            $path = base_path() . "/public/images/news/";
            $request->file('image')->move($path, $imageName);
            File::delete($path.$news->image);
        }

        $news::update([
            'tittle'    => $request->input('tittle'),
            'summary'   => $request->input('summary'),
            'content'   => $request->input('content'),
            'image'     => $imageName,
            'date'      => $request->input('date'),
        ]);

        return redirect('/news');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        News::destroy($id);
        return redirect('/news');
    }
}
