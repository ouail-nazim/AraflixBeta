<?php

namespace App\Http\Controllers;

use App\Categorie;
use App\Episode;
use App\Show;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $trending=Show::orderBy('watched', 'desc')->where('type','tvShow')->first();
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
            $movies=Categorie::where('name',request('Category'))->get();
            if (count($movies) == 0){
                return view('Lyouts.notFound');
            }
            $movies=$movies->first()->shows->where('type','movie')->take(20);

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
    public function watcheMovies($title)
    {
        $movie=Show::where('title',$title)->first();
        if ($movie == null){
            return view('Lyouts.notFound');
        }
        $movie=$movie->episodes->first();
        $categories=$movie->show->categories;

        /* similarMovies */
        $similarMovies=array();
        $ids=array();
        foreach ($categories as $categorie){
            $shows=$categorie->shows->where('id','!=',$movie->show->id)->where('type','movie');
            foreach ($shows as $show){
                if (!in_array($show->id, $ids))
                {
                    array_push($similarMovies,$show);
                    array_push($ids,$show->id);
                }
            }
        }
        return view('Lyouts.movies.watche')->with([
            'movie'=>$movie,
            'similarMovies'=>$similarMovies
        ]);

    }


    public function tvShow(){
        $Categorys=Categorie::all();
        if (request('Category')){
            $tvShows=Categorie::where('name',request('Category'))->get();
            if (count($tvShows) == 0){
                return view('Lyouts.notFound');
            }
            $tvShows=$tvShows->first()->shows->where('type','tvShow')->take(20);

            return view('Lyouts.tvShow.tags')->with(
                [
                    'Categorys'=>$Categorys ,
                    'categorysName'=>request('Category') ,
                    'tvShows'=>$tvShows
                ]
            );
        }
        if (request('Rating')){
            if(request('Rating')=="Y-12"){
                $Rating='-12';
            }else{
                $Rating="+".request('Rating');
            }

            $tvShows=Show::where('type','tvShow')->where('rating',$Rating)->get();

            return view('Lyouts.tvShow.tags')->with(
                [
                    'Categorys'=>$Categorys ,
                    'categorysName'=>$Rating ,
                    'tvShows'=>$tvShows
                ]
            );
        }

        $new_tvShows=Show::orderBy('year', 'desc')->where('type','tvShow')->take(4)->get();
        $popular_tvShows=Show::where('type','tvShow')->orderBy('watched', 'desc')->take(4)->get();
        $new_tvShows_added=Show::latest()->where('type','tvShow')->take(4)->get();
        $Family_tvShows=Categorie::where('name','Family')->first()->shows->where('type','tvShow')->take(4);
        $Action_tvShows=Categorie::where('name','Action')->first()->shows->where('type','tvShow')->take(4);
        $Comedy_tvShows=Categorie::where('name','Comedy')->first()->shows->where('type','tvShow')->take(4);
        $Horror_tvShows=Categorie::where('name','Horror')->first()->shows->where('type','tvShow')->take(4);

        return view('Lyouts.tvShow.tvShow')->with([
            'Categorys'=>$Categorys ,
            'new_tvShows'=>$new_tvShows ,
            'popular_tvShows'=> $popular_tvShows,
            'new_tvShows_added'=>$new_tvShows_added,
            'Family_tvShows'=>$Family_tvShows,
            'Action_tvShows'=>$Action_tvShows,
            'Comedy_tvShows'=>$Comedy_tvShows,
            'Horror_tvShows'=>$Horror_tvShows
        ]);


    }
    public function getTvShow($title)
    {
        $show=Show::where('type','tvShow')->where('title',$title)->first();
        if ($show == null){
            return view('Lyouts.notFound');
        }
        $episodes=Episode::orderBy('number','ASC')->where('show_id',$show->id)->where('season',1)->get();
        return view('Lyouts.tvShow.show')->with([
            'show'=>$show,
            'episodes'=>$episodes
        ]);
    }
    public function watcheTvShow($title,$season,$episode)
    {
        $show=Show::where('type','tvShow')->where('title',$title)->first();

        if ($show == null){
            return view('Lyouts.notFound');
        }else{
            $episodes=Episode::orderBy('number','ASC')->where('show_id',$show->id)->where('season',$season)->get();
            if (count($episodes)==0){
                return view('Lyouts.notFound');
            }else{
                $episodeWatche=$episodes->where('number',$episode)->first();
                if($episodeWatche == null){
                    return view('Lyouts.notFound');
                }
            }
        }
        return view('Lyouts.tvShow.watch')->with([
            'show'=>$show,
            'episodes'=>$episodes,
            'episodeWatche'=>$episodeWatche,
            'isLast'=>$episodeWatche->lastOne($season)
        ]);

    }

}
