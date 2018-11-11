<?php

namespace App\Http\Controllers\ClientsController;

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = DB::table('client')->get();
        return view('clients.index')-with('clients', $clients);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('clients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function post(Request $request)
    {
        $this->validate($req, [
            'name' => 'required',
            'sector' => 'required',
        ]);

        

           $name = $req->input('name');
           $sector = $req->input('sector');

           $data = array('name'=>$name ,
                           'sector'=>$sector);
            
        DB::table('client')->insert($data);

        return view('clients.index')->with('success', 'Dodano konsultanta.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $client = DB::table('client')->where('id',$id)->get();
        return view('client.edit')->with('client', $client);
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
        $data = array('name'=>DB::table('client')->where('id',$id)->value('name') ,
                        'sector'=>DB::table('client')->where('id',$id)->value('position') );  
        if(!$req->input('name') == NULL)
            $data['name'] = $req->input('name');
        if(!$req->input('sector') == NULL)
            $data['sector'] = $req->input('sector');

            
        DB::table('client')->where('id',$id)->update($data);
        return redirect('clients')->with('success', 'Zedytowano pole.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        DB::table('client')->where('id', $id)->delete();
        return back()->with('success', 'Usunięto pole.');
    }
}
