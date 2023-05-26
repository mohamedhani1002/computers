<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Str;

class PostController extends Controller
{
   
    public function index()
    {
        
        return view('blog.index')->with('posts',Post::get());
    }

    
    public function create()
    {
        return view('blog.create');
    }

    public function store(Request $request)
    {
          /*  $request->validate([
                'title'=>'required',
                'dsecrition' => 'required',
                'image'=>'required | mimes:jpg,png,jpeg | max: 5048 '
            ]);*/

          



            $slug = str::slug($request->title , '-');

            $newimagename = uniqid() . '-' . $slug  . '.' . $request->image->extension();
            $request->image->move(public_path('images') , $newimagename);
           
                Post::create([
                    'title'       => $request->input('title') ,
                    'description' => $request->input('description') , 
                    'slug'        => $slug ,            
                    'image_path'  => $newimagename ,
                    'user_id'     => Auth()->user()->id ,

                ]);

                return redirect('blog');
    }

  
    public function show($slug)
    {
        return  view('blog.show')->with('post', Post::where('slug',$slug)->first());
    }

  
    public function edit($slug)
    {
        return view('blog.edit')->with('post', Post::where('slug',$slug)->first());
    }

    
    public function update(Request $request, $slug)
    {
        $newimagename = uniqid() . '-' . $slug  . '.' . $request->image->extension();
        $request->image->move(public_path('images') , $newimagename);

        Post::where('slug', $slug)->update([
            'title'       => $request->input('title') ,
            'description' => $request->input('description') , 
            'slug'        => $slug ,  
            'image_path'  => $newimagename ,               
            'user_id'     => Auth()->user()->id ,

        ]);

        return redirect('/blog/' . $slug)->with('message', 'the article has been aupdated succesfully');
    }

 
    public function destroy($slug)
    {
        Post::where('slug', $slug)->delete();
        return redirect('/blog')->with('message' , 'article has been deleted');
    }
}


