<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\animeList;
use Auth;
use Redirect;
class listController extends Controller
{
    public function getListFromUser(){
      $username=Auth::user()->username;
      $animes= animeList::where('username',$username)->get(['anime','completed','updated_at']);
      return view('list')->with('animes',$animes);
    }

    public function createForm(){
      return redirect('/myList')->with('form', 'true');
    }

    public function addAnime(Request $request){
      $this->validate($request, array('anime'=>'required'));
      $username=Auth::user()->username;

      if(animeList::where('username',$username)->where('anime',$request->input('anime'))->count()>0)
        return redirect('/myList')->with('alert2','Anime already in list');
      else{
      $anime = new animeList;
      $anime->username=$username;
      $anime->anime = $request->input('anime');
      if($request->input('completed') =="Completed")
      $anime->completed = 1;
      else {
          $anime->completed = 0;
      }

      $anime->save();

      $username=Auth::user()->username;
      $animes= animeList::where('username',$username)->get(['anime','completed','updated_at']);
      return redirect('/myList')->with('animes',$animes);
    }
    }

    public function removeAnime(Request $request){

      $anime=$request->input('anime');
      $username=Auth::user()->username;

      if(animeList::where('username',$username)->where('anime',$anime)->count() >0){
        animeList::where('username',$username)->where('anime',$anime)->delete();
        return redirect('/myList')->with('alert','deleted '.$anime);
      }
      else
        return redirect('/myList')->with('alert2','failure to delete '.$anime);
    }

    public function getListFromAnotherUser(Request $request){
      $targetUsername=$request->input('user');
      $animes= animeList::where('username',$targetUsername)->get(['anime','completed','updated_at']);

      if(animeList::where('username',$targetUsername)->count()>0)
      {
        return Redirect::route('search.user',array('user'=>$targetUsername))->with(['animes'=>$animes, 'user'=>$targetUsername]);
      }
      else {
        return Redirect::route('search.user', array('user'=>$targetUsername))->with(['alert2'=> 'No such Username exists', 'animes'=>$animes, 'user'=>$targetUsername]);
      }
    }

    public function completeAnime(Request $request){
      $username=Auth::user()->username;
      $anime=$request->input('anime');
      if(animeList::where('username',$username)->where('anime',$anime)->value('completed')=='1')
        return redirect('/myList')->with('alert2','Status is already completed');
      else{
        animeList::where('username',$username)->where('anime',$anime)->update(['completed' => 1]);
        return redirect('/myList');
      }
    }
}
