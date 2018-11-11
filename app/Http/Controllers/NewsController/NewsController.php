<?php

namespace App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('news.index');
    }

    public function prawne()
    {
        return view('news.prawo');
    }

    public function prasa()
    {
        return view('news.prasa');
    }

    public function media()
    {
        return view('news.media');
    }

    public function gadzety()
    {
        return view('news.gadzety');
    }
    public function uslugi()
    {
        return view('news.services');
    }

    public function doradztwo()
    {
        return view('news.doradztwo');
    }
    public function strategia()
    {
        return view('news.strategia');
    }

    public function bezpieczenstwo()
    {
        return view('news.bezpieczenstwo');
    }
    public function szkolenia()
    {
        return view('news.szkolenia');
    }
    public function pozostale()
    {
        return view('news.pozostale');
    }

    public function news()
    {
        $news = DB::table('news')->get();
        return view('news.news')->with('news', $news);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('news.create');
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
            'headline' => 'required',
            'text' => 'required',
            'date' => 'required',
            'image' =>'image'
        ]);

        

           $headline = $req->input('headline');
           $text = $req->input('text');         
           $date = $req->input('date');
           $image =  time().'.'.$req->file('image')->getClientOriginalExtension();

           $data = array('headline' => $headline ,
                        'text' => $text,
                        'date' => $date,
                        'image' =>$image);
            
        DB::table('news')->insert($data);   
        $req->file('image')->move(
            base_path() . '/public/Content/img/news', $image
            );
        return view('news.index')->with('success', 'Dodano konsultanta.');
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
        $news = DB::table('news')->where('id',$id)->get();
        return view('news.edit')->with('news', $news);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, $id)
    {
        $data = array('headline'=>DB::table('news')->where('id',$id)->value('headline') ,
                        'text'=>DB::table('news')->where('id',$id)->value('text') ,
                        'date'=>DB::table('news')->where('id',$id)->value('date') ,
                        'image'=>DB::table('news')->where('id',$id)->value('image'),);  
        if(!$req->input('headline') == NULL)
            $data['headline'] = $req->input('headline');
        if(!$req->input('text') == NULL)
            $data['text'] = $req->input('text');
        if(!$req->input('date') == NULL)
            $data['date'] = $req->input('date'); 
        if(!$req->input('image') == NULL){
            $data['image'] = time().'.'.$req->file('image')->getClientOriginalExtension();
            $req->file('image')->move(
                base_path() . '/public/Content/img/kons', $image
                );
        }

            
        DB::table('news')->where('id',$id)->update($data);
        return redirect('news')->with('success', 'Zedytowano pole.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        DB::table('news')->where('id', $id)->delete();
        return back()->with('success', 'Usunięto pole.');
    }
}
