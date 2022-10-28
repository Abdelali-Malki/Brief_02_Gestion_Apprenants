<?php

namespace App\Http\Controllers;

use App\Models\Apprenants;
use App\Models\promotion;
use Illuminate\Http\Request;

class PromotionController extends Controller
{
    //

    public function select(){
        $data = promotion::all();
        return view ('index', compact("data"));
    }

    public function add(){
        return view('add');
    }

    public function insert(Request $request){
        $addpromotion = new promotion();
        $addpromotion->name = $request->name;
        $addpromotion->save(); 
        return redirect('index');

    }

    public function deletepromo(Request $request){

       promotion::where('id',$request->id)->delete();
        return  redirect('index'); 
    }


    public function update_promotion($id){
        
        $edit = new promotion();    
        $promotion = $edit::where('id', $id )->get();  

        $apprenants=apprenants::select('apprenants.name','email','promotions.id as id_promo','apprenants.id as id_app')
        ->RightJoin('promotions','promotions.id','=','apprenants.id_promo') 
        ->where('promotions.id','=',$id)->get();
        return view('update_promotion', compact(['promotion', 'apprenants']));
    }
    


    public function edit($id,Request $request){
        $editpromotion = promotion::where('id',$id)->first();
        $editpromotion->name = $request->name;
        $editpromotion->save();
        return redirect('index');
    }



    public function search($name=null){ 
        
        if($name == null){
            $data =promotion::all();
            return view('index_search',compact('data'));        }
        else {
            $data =promotion::where('name', 'like','%'.$name.'%')->get();
            return view('index_search',compact('data'));

        }

    }



    public function searchapprenants($id,$name=null){
        
        if($name == null){
            $edit = new promotion();    
            $promotion = $edit::where('id', $id )->get();  
            $apprenants=Apprenants::select('apprenants.name','email','promotions.id as id_promo','apprenants.id as id_app')
            ->RightJoin('promotions','promotions.id','=','apprenants.id_promo') 
            ->where('promotions.id','=',$id)->get();     
            return view('update_promotion', compact(['promotion', 'apprenants']));

        }
            else {
                $edit = new promotion();    
                $promotion = $edit::where('id', $id )->get();  
                $apprenants=Apprenants::select('apprenants.name','email','promotions.id as id_promo','apprenants.id as id_app')
                ->RightJoin('promotions','promotions.id','=','apprenants.id_promo') 
                ->where([
                    ['promotions.id','=',$id],
                    ['name', 'like','%'.$name.'%']
                ])->get();
                return view('update_promotion', compact(['promotion', 'apprenants']));
        }

    }

    

}
