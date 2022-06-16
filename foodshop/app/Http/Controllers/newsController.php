<?php

namespace App\Http\Controllers;
use App\Models\news;
use App\Models\contact;
use Illuminate\Http\Request;

class newsController extends Controller
{
    public function storeNews(Request $request){
        $request->validate([
            'name'=>'required',
            'description'=>'required',
            'image' => 'required|image|mimes:jpeg, png, jpg, svg, gif|max:2048'
        ]);
    
        $image = $request->file('image');
        $image_name = time() . $image->getClientOriginalName();
        $image->move('public/uploads/news_image/', $image_name);


        news::create([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'image' => 'public/uploads/news_image/' . $image_name,
        ]);

        return redirect()->route('viewNews');
    }


        public function viewNews(){
            $News = news::all();
            $i=1;
            return view('adminDashboard.News.viewNews', compact('News', 'i'));
        }

        public function update(Request $request, $id){
            $request->validate([
                'name'=>'required',
                'description'=>'required',
                'image' => 'required|image|mimes:jpeg, png, jpg, svg, gif|max:2048'
            ]);

            
           $News = news::find($id);
          
            if($request->hasFile('image')){
                $images = $request->image;
               $image_new_name= time().$images->getClientOrginalName();
                $images->move('uploads/news_image/', $image_new_name);
            }else{
                dd('Not a file');
            }
        dd($image_new_name);
             $data = [
               'name' => $request->name,
               'description' =>$request->description,
               'image' => $image_new_name

             ];

            news::whereId($id)->update($data);
               return redirect()->route('viewNews');
        }


        public function edit($id){
            $new=news::findOrFail($id);
            return view('adminDashboard.News.editNews', compact('new'));
        }
    
        public function delete($id){
            news::find($id)->delete();
            return redirect()->route('viewNews');
}
    
    public function contact(){
        $contact = contact::all();
        $i=1;
        return view('adminDashboard.Contact.Contact', compact('contact', 'i'));
    }

    public function storecontact(Request $request){
    $request->validate([
    'name'=>'required',
    'email'=>'required',
    'message'=>'required'

    ]);
    contact::create([
        'name'=>$request->name,
        'email'=>$request->email,
        'message'=>$request->message

    ]);
    return redirect()->back();
    }
}
