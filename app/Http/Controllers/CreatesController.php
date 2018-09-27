<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;

class CreatesController extends Controller
{
   public function home(){
       $articles= Article::paginate(13  );
       return view('home', compact('articles'));
       //return view('home',['articles' => $articles]);
   }

   public function add(Request $request){
     $this->validate($request , [
         'title'=>'required',
         'description'=>'required'
     ]);

        $article = new Article;
        $article->title = $request->input('title');
        $article->description = $request->input('description');
        $article->save();
        return redirect('/')->with('info','Article save succesfully!!!');
   }

   public function update($id){
    $articles= Article::find($id);
    return view('update',['articles' => $articles]);
   }

   public function edit(Request $request,$id){
    $this->validate($request , [ 
        'title'=>'required',
        'description'=>'required'
    ]);
        $data=array(
            'title'=> $request->input('title'),
            'description'=> $request->input('description')
        );
        Article::where('id',$id)->update($data);
       return redirect('/')->with('info','Article updated succesfully!!!');
   }
   public function read($id){
    $articles= Article::find($id);
    return view('read',['articles' => $articles]);
   } 

   public function delete($id){
    Article::where('id',$id)->delete();
    return redirect('/')->with('info','Article deleted succesfully!!!');
   } 

  
}
