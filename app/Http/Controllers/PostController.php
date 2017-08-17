<?php

namespace altavisionApp\Http\Controllers;

use Illuminate\Http\Request;
use altavisionApp\FirstMenu;
use altavisionApp\SecondMenu;
use altavisionApp\ThirdMenu;
use altavisionApp\Post;
use altavisionApp\Http\Requests;
use altavisionApp\Http\Controllers\Controller;

class PostController extends Controller
{
    public function __construct(){
      $this->middleware('auth', ['only' => ['index', 'create' , 'store', 'edit', 'update', 'destroy']]);
    }
////////////////////////////////////////////////////////
    public function index(Request $request)
    {
      $posts=Post::
      title($request->name)->
      orderBy('created_at')->get();
      return view('posts.index', ['posts'=>$posts]);
    }
/////////////////////////////////////////////////////////
    public function create()
    {
      $firstlist=FirstMenu::lists('name','id');
      return view('posts.create', ['firstlist'=>$firstlist]);
    }
/////////////////////////////////////////////////////////
    public function store(Request $request)
    {
      Post::create($request->all());
      Flash('Post creado satisfactoriamente' , 'success');
      return Redirect('posts');
      // return $request->all();
    }
/////////////////////////////////////////////////////////
    public function show($slug , Request $request)
    {
      $post =        Post::
      where('slug','=', $slug)
      ->firstOrFail();

      if (!isset($request->title)) {
        $firstPosts = Post::
          where('first_menu_id', '=', $post->first_menu_id)
          ->whereNull('second_menu_id')
          ->get();
      }elseif(isset($request->title)){
        $firstPosts=Post::
        title($request->title)->
        orderBy('created_at')->get();
      }

      $secondPosts = Post::
        where('first_menu_id', '=', $post->first_menu_id)
        ->whereNotNull('second_menu_id')
        ->get();

      $secondMenus = SecondMenu::where('first_menu_id','=', $post->first_menu_id)->get();
      // return dd($secondMenus);
      $thirdMenus  = ThirdMenu::where('id','=', $post->third_menu_id)->get();
      return view('posts.view' , ['post'=>$post , 'firstPosts'=>$firstPosts , 'secondPosts'=>$secondPosts , 'thirdMenus'=>$thirdMenus , 'secondMenus'=>$secondMenus]);
    }
/////////////////////////////////////////////////////////
    public function edit($id)
    {
      $post=Post::find($id);
      $firstlist=FirstMenu::lists('name','id');
      $secondlist=SecondMenu::lists('name','id');
      $thirdlist=ThirdMenu::lists('name','id');
      return view('posts.edit', ['post'=>$post , 'firstlist'=>$firstlist , 'secondlist'=>$secondlist,'thirdlist'=>$thirdlist]);
    }
/////////////////////////////////////////////////////////
    public function update(Request $request, $id)
    {
      $post=Post::find($id);
      $post->first_menu_id    =$request->first_menu_id;
      $post->second_menu_id   =$request->second_menu_id;
      $post->third_menu_id    =$request->third_menu_id;
      $post->title            =$request->title;
      $post->content          =$request->content;
      $post->save();
      flash('Post actualizado satisfactoriamente', 'success');
      return Redirect('posts');
    }
/////////////////////////////////////////////////////////
    public function destroy($id)
    {
      Post::destroy($id);
      Flash('Post eliminado satisfactoriamente' , 'success');
      return redirect('posts');
    }
////////////////////////////////////////////////////////
    public function autoComplete(Request $request) {
      $query = $request->get('term','');
      $allPosts=Post::where('title','LIKE','%'.$query.'%')->get();
      $data=array();
      foreach ($allPosts as $post) {
        $data[]=array('menu'=>$post->firstMenu->slug , 'post'=> $post->slug, 'value'=>$post->title,'id'=>$post->id);
      }
      if(count($data))
        return $data;
      else
        return ['value'=>'No se han encontrado resultados','id'=>''];
    }
}
