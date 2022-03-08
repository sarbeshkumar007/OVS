<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\candidate;
use Illuminate\Http\Request;

class ovsController extends Controller
{
    public function candidate(){
        $candidates=candidate::paginate(4);
        return view('candidate',compact('candidates'));
    }

    public function create(){
        return view('candidate_create');
    }

    public function submit(Request $request){

        $image_url='';
      if($request->hasFile('upload_photo')){
          $file=$request->file('upload_photo');
          $new_name=str_random(5).time().$file->getClientOriginalName();
          $path=public_path('/uploads');
          $file->move($path,$new_name);
          $image_url=asset('uploads/'.$new_name);
       //    dd('$image_url');
      }
       try{

        $data=[
            
            'F_name'=>$request->get('F_name'),
            'L_name'=>$request->get('L_name'),
            'Citizenship_no'=>$request->get('Citizenship_no'),
            'age'=>$request->get('age'),
            'email'=>$request->get('email'),
            'gender'=>$request->get('gender'),
            'qualification'=>$request->get('qualification'),
            'marital_status'=>$request->get('marital_status'),
            'city'=>$request->get('city'),
            'area'=>$request->get('area'),
            'upload_photo'=>$image_url ?? '',

           // 'upload_photo'=>$request->get('upload_photo'),
            'party_name'=>$request->get('party_name'),
            'election_symbol'=>$request->get('election_symbol'),
          //  'cover'=>$image_url ?? '',

        ];
        candidate::insert($data);
        return redirect()->route('candidate.create');

    }catch(\Exception $exception){
            dd($exception);
    }
    }
    public function tables() {
        return view('frontend-page.tables');
    }


    //coding of Edit

    public function edit($id)
{
    
    $candidate=candidate::where('id',$id)->first();
    if($candidate){
        return view('edit_candidate',compact('candidate'));
    
    }
}
public function update(Request $request, $id)
{
    $image_url='';

        if($request->hasFile('upload_photo')){

            $file=$request->file('upload_photo');
            $new_name=str_random(5).time().$file->getClientOriginalName();
            $path=public_path('/uploads');
            $file->move($path,$new_name);
            $image_url= asset('uploads/' .$new_name);
        }
   //dd('Here');
    $data =[
        'F_name'=>$request->get('F_name'),
        'L_name'=>$request->get('L_name'),
        'Citizenship_no'=>$request->get('Citizenship_no'),
        'age'=>$request->get('age'),
        'email'=>$request->get('email'),
        'gender'=>$request->get('gender'),
        'qualification'=>$request->get('qualification'),
        'marital_status'=>$request->get('marital_status'),
        'city'=>$request->get('city'),
        'area'=>$request->get('area'),
        'upload_photo'=>$image_url ?? '',
        'party_name'=>$request->get('party_name'),
        'election_symbol'=>$request->get('election_symbol'),

    ];

    candidate::where('id', $id)->update($data);
    return redirect()->route('candidate.create');
}
//coding of delete
public function delete($id){
    $candidate=candidate::find($id);
    if($candidate){
        candidate::destroy($id);
    }
    return redirect()->back();
}




}
