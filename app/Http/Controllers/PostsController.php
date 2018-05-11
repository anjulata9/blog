<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use \Input as Input;

use App\Post;
use Auth;

class PostsController extends Controller
{

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
       
        return view('post.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*$this->validate($request, [
            'name' => 'required|alpha'
        ]);*/
       // echo $request['post_text'];

        if($request->hasFile('file')){
            echo 'Uploaded <br/>';
            $file = $request->file('file');
            $file->move('images',$file->getClientOriginalName());
            echo '<img src="images/'.$file->getClientOriginalName().'" />';
            /*echo $request['post_text'];
            dd($request);*/

            



            /*$post = Post::create($request->all());
            return redirect()->route('post.create');*/

        }
         $post= new Post();
        $post->user_id= Auth::user()->id;
        $post->post_text= $request['post_text'];
        $post->post_image= $file->getClientOriginalName();
        $post->date= date('Y-m-d');
    // add other fields
    $post->save();

       /* $image = $request->file('file');

        echo $input['imagename'] = time().'.'.$image->getClientOriginalExtension();

    echo "<br/>".$destinationPath = public_path('/images');exit;

    $image->move($destinationPath, $input['imagename']);


    $this->Post->add($input);*/


        
        /*print_r($request->hasFile('file')); 
        dd($request);
        $post = Post::create($request->all());
        return redirect()->route('post.create');*/
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
