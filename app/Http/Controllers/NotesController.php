<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;  
use App\Nota;

class NotesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $notas = DB::table('pruebasql')->get();
            $notas = Nota::all();
        // var_dump($notas);        
        return view('notes.indexNotes')->with('notas',$notas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("notes.formNotes");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $note = DB::table('pruebasql')->insert(array(
        'description' => $request->input('note_description'),
        'created_at' => $request->input('note_fecha')
        ));
        if($note){
        return redirect()->action('NotesController@index');    
        }else{
            return "no se pudo";
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $id2 = $id-1;
        $nota = DB::table('pruebasql')->where('id',$id)
                                ->where('description','esta es la description'.$id2)    
        ->first();

        var_dump($nota);
        return "buscar id ".$id."tambien ".$id2;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
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