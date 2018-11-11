<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
class RefController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ref = DB::table('ref')->get();
        return view('ref.index')->with('ref', $ref);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ref.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function post(Request $req)
    {
        $this->validate($req, [
            'image' => 'image',
            'logo' => 'image',
            'text' => 'required',
            'author' => 'required'
        ]);

        

           $logo =  time().'.'.$req->file('logo')->getClientOriginalExtension();
           $image =  time().'.'.$req->file('image')->getClientOriginalExtension();
           $text = $req->input('text');           
           $author = $req->input('author');
           

           $data = array('image'=>$logo ,
                           'logo'=>$image ,
                           'text'=>$text ,
                           'author'=>$author);
            
        DB::table('ref')->insert($data);
        $req->file('image')->move(
            base_path() . '/public/Content/img', $image);
        $req->file('logo')->move(
            base_path() . '/public/Content/img', $logo);
        return view('ref.index')->with('success', 'Dodano referencję.');
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
        $ref = DB::table('ref')->where('id',$id)->get();
        return view('ref.edit')->with('ref', $ref);
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
        $data = array('image'=>DB::table('ref')->where('id',$id)->value('image') ,
                        'logo'=>DB::table('ref')->where('id',$id)->value('logo') ,
                        'text'=>DB::table('ref')->where('id',$id)->value('text') ,
                        'author'=>DB::table('ref')->where('id',$id)->value('author'));  

        if(!$req->input('image') == NULL){
            $data['image'] = time().'.'.$req->file('image')->getClientOriginalExtension();
            $req->file('image')->move(
                base_path() . '/public/Content/img', $image
                );
        }
        if(!$req->input('logo') == NULL){
            $data['logo'] = time().'.'.$req->file('logo')->getClientOriginalExtension();
            $req->file('logo')->move(
                base_path() . '/public/Content/img', $logo
                );
        }
        if(!$req->input('text') == NULL)
            $data['text'] = $req->input('text');
        if(!$req->input('author') == NULL)
            $data['author'] =  $req->input('author');
            
        DB::table('ref')->where('id',$id)->update($data);
        return redirect('ref')->with('success', 'Zedytowano pole.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        DB::table('ref')->where('id', $id)->delete();
        return back()->with('success', 'Usunięto pole.');
    }
}
