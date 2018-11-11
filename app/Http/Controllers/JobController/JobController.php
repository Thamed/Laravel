<?php

namespace App\Http\Controllers\JobController;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('job')->get();
        return view('job.index')->with('data', $data);
    }
    public function job()
    {
        $data = DB::table('job')->where('rodzaj','P')->get();
        return view('job.praca')->with('data', $data);
    }
    public function intership()
    {
        $data = DB::table('job')->where('rodzaj','S')->get();
        return view('job.staz')->with('data', $data);
    }
    public function practice()
    {
        $data = DB::table('job')->where('rodzaj','PZ')->get();
        return view('job.praktyka')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('job.create');
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
            'rodzaj' => 'required',
            'stanowisko' => 'required',
            'wymagania' => 'required',
            'mWidziane' => 'required',
            'obowiazki' => 'required',
            'dInfo' =>'required',
            'aInfo' =>'required'
        ]);

        

           $rodzaj = $req->input('rodzaj');
           $stanowisko = $req->input('stanowisko');
           $wymagania = $req->input('wymagania');           
           $mWidziane = $req->input('mWidziane');
           $obowiazki = $req->input('obowiazki');
           $dInfo = $req->input('dInfo');
           $aInfo = $req->input('aInfo');

           $data = array('rodzaj' => $rodzaj,
                        'stanowisko' => $stanowisko,
                        'wymagania' => $wymagania,
                        'mWidziane' => $mWidziane,
                        'obowiazki' => $obowiazki,
                        'dInfo' =>$dInfo,
                        'aInfo' =>$aInfo);
            
        DB::table('job')->insert($data);
        return view('job.index')->with('success', 'Dodano nowa oferte pracy.');
    }

   
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $offer = DB::table('job')->where('id',$id)->get();
        return view('job.edit')->with('offer', $offer);
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
        $data = array('rodzaj' => DB::table('job')->where('id',$id)->value('rodzaj')->get() ,
                        'stanowisko' => DB::table('job')->where('id',$id)->value('stanowisko')->get() ,
                        'wymagania' => DB::table('job')->where('id',$id)->value('wymagania')->get() ,
                        'mWidziane' => DB::table('job')->where('id',$id)->value('mWidziane')->get() ,
                        'obowiazki' => DB::table('job')->where('id',$id)->value('obowiazki')->get() ,
                        'dInfo' =>DB::table('job')->where('id',$id)->value('dInfo')->get() ,
                        'aInfo' =>DB::table('job')->where('id',$id)->value('aInfo')->get() ,);
        if(!$req->input('rodzaj') == NULL)
            $data['rodzaj'] = $req->input('rodzaj');
        if(!$req->input('stanowisko') == NULL)
        $data['stanowisko'] = $req->input('stanowisko');
        if(!$req->input('wymagania') == NULL)
        $data['wymagania'] = $req->input('wymagania');
        if(!$req->input('mWidziane') == NULL)
        $data['mWidziane'] = $req->input('mWidziane');
        if(!$req->input('obowiazki') == NULL)
        $data['obowiazki'] = $req->input('obowiazki');
        if(!$req->input('dInfo') == NULL)
        $data['dInfo'] = $req->input('dInfo');
        if(!$req->input('aInfo') == NULL)
        $data['aInfo'] = $req->input('aInfo');

        DB::table('job')->where('id',$id)->update($data);
        return redirect('career')->with('success', 'Zedytowano pole.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        DB::table('job')->where('id', $id)->delete();
        return back()->with('success', 'Usunięto pole.');
    }
}
