<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Computer;

class ComputersController extends Controller
{

  /*  private function GetData(){
        return[
        ['id'=> 1 , 'name'=>'LG' ,'origin'=>'Korea'],
        ['id'=> 2 , 'name'=>'HP' ,'origin'=>'USA'],
        ['id'=> 3 , 'name'=>'Acer' ,'origin'=>'China'],
        ['id'=> 4 , 'name'=>'Siemens' ,'origin'=>'Germany'],

        ];
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('computers/index' , 
        ['computers'=> Computer::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('computers/create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'computer-name'  => 'required',
            'computer-origin'=> 'required',
            'computer-price' => 'required | integer',
            'shop-name'  => 'required',
        ]);
       $computer = new Computer(); 

       $computer->name = strip_tags( $request->input('computer-name')) ;
       $computer->origin = strip_tags($request->input('computer-origin')) ;
       $computer->price = strip_tags($request->input('computer-price')) ;
       $computer->shop = strip_tags($request->input('shop-name')) ;


       $computer->save();

       return redirect()->route('computers.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($computer)
    {
        
        
        return view('computers/show', ['computer' => Computer::findorfail($computer)]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($computer)
    {
        return view('computers.edit',[
            'computer'=> Computer::findorfail($computer)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $computer)
    {
        $request->validate([
            'computer-name'  => 'required',
            'computer-origin'=> 'required',
            'computer-price' => 'required | integer',
            'computer-name'  => 'required',

        ]);
         $updatedcomputer = Computer::findOrfail($computer);
         $updatedcomputer->name = strip_tags( $request->input('computer-name')) ;
         $updatedcomputer->origin = strip_tags($request->input('computer-origin')) ;
         $updatedcomputer->price = strip_tags($request->input('computer-price')) ;
         $updatedcomputer->shop = strip_tags( $request->input('shop-name')) ;

  
         $updatedcomputer->save();
  
         return redirect()->route('computers.show', $computer);
  

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($computer)
    {
        $to_delete = Computer::findOrfail($computer);
        $to_delete->delete();
        return redirect()->route('computers.index' , $computer);
    }
}



