<?php

namespace App\Http\Controllers\ConsultantController;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ConsultantController extends Controller
{
    public function index()
    {
        $user = DB::table('consultants')->get();
        return view('consultants.all')->with('user', $user);
    }
    public function details($id)
    {
        $user = DB::table('consultants')->where('id', $id)->get();
        return view('consultants.details')->with('user', $user);
    }

    public function create()
    {
        return view('consultants.create');
    }

    public function post(Request $req)
    {                
        $this->validate($req, [
            'name' => 'required',
            'position' => 'required',
            'email' => 'required',
            'About' => 'required',
            'AboutScpecjalist' => 'required',
            'image' =>'image'
        ]);

        

           $name = $req->input('name');
           $position = $req->input('position');
           $email = $req->input('email');           
           $About = $req->input('About');
           $AboutSpecjalist = $req->input('AboutScpecjalist');
           $image =  time().'.'.$req->file('image')->getClientOriginalExtension();

           $data = array('name'=>$name ,
                           'position'=>$position ,
                           'email'=>$email ,
                           'image'=>$image,
                           'about'=>$About ,
                           'aboutSpecialist'=>$AboutSpecjalist);
            
        DB::table('consultants')->insert($data);
        $req->file('image')->move(
            base_path() . '/public/Content/img/kons', $image
            );
        return view('consultants.all')->with('success', 'Dodano konsultanta.');
    }

    public function edit($id){
        $consultant = DB::table('consultants')->where('id',$id)->get();
        return view('consultants.edit')->with('consultant', $consultant);
    }

    public function update(Request $req, int $id){
        $data = array('name'=>DB::table('consultants')->where('id',$id)->value('name') ,
                        'position'=>DB::table('consultants')->where('id',$id)->value('position') ,
                        'email'=>DB::table('consultants')->where('id',$id)->value('email') ,
                        'image'=>DB::table('consultants')->where('id',$id)->value('image'),
                        'about'=>DB::table('consultants')->where('id',$id)->value('about') ,
                        'aboutSpecialist'=>DB::table('consultants')->where('id',$id)->value('aboutSpecialist'));  
        if(!$req->input('name') == NULL)
            $data['name'] = $req->input('name');
        if(!$req->input('position') == NULL)
            $data['position'] = $req->input('position');
        if(!$req->input('email') == NULL)
            $data['email'] = $req->input('email'); 
        if(!$req->input('image') == NULL){
            $data['image'] = time().'.'.$req->file('image')->getClientOriginalExtension();
            $req->file('image')->move(
                base_path() . '/public/Content/img/kons', $image
                );
        }
        if(!$req->input('about') == NULL)
            $data['about'] = $req->input('About');
        if(!$req->input('aboutSpecialist') == NULL)
            $data['aboutSpecialist'] =  $req->input('AboutScpecjalist');
            
        DB::table('consultants')->where('id',$id)->update($data);
        return redirect('consultants')->with('success', 'Zedytowano pole.');
    }

    public function delete($id)
    {
        DB::table('consultants')->where('id', $id)->delete();
        return back()->with('success', 'Usunięto pole.');
    }
}
