<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\movieModel;
use Yajra\Datatables\Datatables;

class adminController extends Controller
{

    public function index()
    {
        return view('admin.movie');

    	//return Datatables::of($movieR)->make(true);
    }

    public function getMovie(){
    	$movie = new movieModel;
    	$movieR = $movie->get();
    	return Datatables::of($movieR)->addColumn('movieImg', function ($data) {
            return '<img height="75" src="'.asset('/img/').'/'.$data->movieImg.'"/>';
        })->addColumn('action', function($movieR){
              return '<a href="/admin/editMovie/'.$movieR['movieID'].'" movieID="'.$movieR['movieID'].'" class="btn btn-xs btn-primary edit">Edit</a>';
        })
        ->rawColumns(['movieImg', 'action'])->make(true);
    }

    public  function editMovie(Request $r){
        $movie = new movieModel;
        $movieR = $movie->where('movieID', '=', $r->movieID)->first();
        return view('admin.editMovie', ['movie'=>$movieR]);
    }

    public function editMoviePost(Request $r){
        $movie = new movieModel();
        if ($r->hasFile('photo'))
        {
            $photoName = time().'.'.$r->photo->getClientOriginalExtension();
            $r->photo->move(public_path('img/'), $photoName);
            $movie->where('movieID', '=', $r->movieID)
                ->update([
                    ['movieImg'=> $photoName],
                    ['name'=> $r->input('movieName')]
                ]);

        }else
        {
            $movie->where('movieID', '=', $r->movieID)
                ->update([
                    'name'=> $r->input('movieName'),
                    'releaseDate'=> $r->input('releaseDate'),
                    'languages' => $r->input('languages'),
                    'runningTime' => $r->input('runningTime'),
                    'rating' => $r->input('rating')
                ]);
        }
        return view('admin.movie');//return $r->movieID;//
    }

    public function showing()
    {
        return view('admin.showing');
    }

}
