<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\commissions;

class CommissionsController extends Controller
{
   public function index()
   {
       $commissions = commissions::all();
      // return $commissions;
       return view('commissions.index', compact('commissions'));
   }


     public function show($id)
    {
      //  $commission = Commissions::findOrFail($id);
      //  return view('/commissions.show', compact('commission'));
       
    }


   public function create()
  {
      return view ('commissions.create');
  }

   public function store()
  {
     //return request()->all();
    // return request('title');
    
     $commissions = new commissions();
     $commissions->title = request('title');
     $commissions -> description = request('description');
     $commissions -> save();
     return redirect('/commissions');
  }

  //public function edit(Post $post)
  public function edit($id)
    {
        $commission=Commissions::findOrFail($id);
       return view('commissions.edit',compact('commission'));
     // return view('commissions.edit');
        //return $id;
    }

    public function update($id)
    //public function update()
    {
        // dd('hello');
        $commission=Commissions::findOrFail($id);
        $commission->title=request('title');
        $commission->description=request('description');
        $commission->save();

        return redirect('/commissions'); 
      
    }
     //public function destroy(Post $post)
     public function destroy($id)
    {
        //dd('hallo!!!'.$id);
        Commissions::findOrFail($id)->delete();

        return redirect('/commissions');
    }
}
