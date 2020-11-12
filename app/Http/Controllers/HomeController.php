<?php

namespace App\Http\Controllers;

use App\Categorie;
use App\Show;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $trending=Show::orderBy('watched', 'desc')->first();
        $popular_movies=Show::where('type','movie')->orderBy('watched', 'desc')->paginate(4);
        $popular_tvShow=Show::where('type','tvShow')->orderBy('watched', 'desc')->paginate(4);
        $new_movies=Show::orderBy('year', 'desc')->where('type','movie')->paginate(4);
        $new_tvShow=Show::orderBy('year', 'desc')->where('type','tvShow')->paginate(4);
        $new_movies_added=Show::latest()->where('type','movie')->paginate(4);
        $new_tvShow_added=Show::latest()->where('type','tvShow')->paginate(4);

        return view('home')->with([
            'trending'=> $trending,
            'popular_movies'=> $popular_movies,
            'popular_tvShow'=>$popular_tvShow ,
            'new_movies'=>$new_movies ,
            'new_tvShow'=>$new_tvShow ,
            'new_movies_added'=>$new_movies_added,
            'new_tvShow_added'=>$new_tvShow_added
        ]);


    }
    public function movies(){
        $Categorys=Categorie::all();
        if (request('Category')){
            $movies=Categorie::where('name',request('Category'))->first()->shows->where('type','movie')->take(20);
            return view('Lyouts.movies.tags')->with(
                [
                    'Categorys'=>$Categorys ,
                    'categorysName'=>request('Category') ,
                    'movies'=>$movies
                ]
            );
        }
        if (request('Rating')){
            if(request('Rating')=="Y-12"){
                $Rating='-12';
            }else{
                $Rating="+".request('Rating');
            }

            $movies=Show::where('type','movie')->where('rating',$Rating)->get();

            return view('Lyouts.movies.tags')->with(
                [
                    'Categorys'=>$Categorys ,
                    'categorysName'=>$Rating ,
                    'movies'=>$movies
                ]
            );
        }


        $new_movies=Show::orderBy('year', 'desc')->where('type','movie')->take(4)->get();
        $popular_movies=Show::where('type','movie')->orderBy('watched', 'desc')->take(4)->get();
        $new_movies_added=Show::latest()->where('type','movie')->take(4)->get();
        $Family_movies=Categorie::where('name','Family')->first()->shows->where('type','movie')->take(4);
        $Action_movies=Categorie::where('name','Action')->first()->shows->where('type','movie')->take(4);
        $Comedy_movies=Categorie::where('name','Comedy')->first()->shows->where('type','movie')->take(4);
        $Horror_movies=Categorie::where('name','Horror')->first()->shows->where('type','movie')->take(4);

        return view('Lyouts.movies.movies')->with([
                'Categorys'=>$Categorys ,
                'new_movies'=>$new_movies ,
                'popular_movies'=> $popular_movies,
                'new_movies_added'=>$new_movies_added,
                'Family_movies'=>$Family_movies,
                'Action_movies'=>$Action_movies,
                'Comedy_movies'=>$Comedy_movies,
                'Horror_movies'=>$Horror_movies
        ]);



    }

}
