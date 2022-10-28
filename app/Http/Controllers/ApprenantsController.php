<?php

namespace App\Http\Controllers;

use App\Models\Apprenants;
use App\Models\promotion;
use Illuminate\Http\Request;

class ApprenantsController extends Controller
{
//     public function selectapprenants(){
//         $selectapprenants = Apprenants::all();
//         return view ('selectapprenants', compact("selectapprenants"));
//     }



public function addapprenants($id){
    return view('addapprenants',['id'=>$id]);

}

    public function insertapprenants(Request $request){
        $addapprenants = new Apprenants();
        $addapprenants->name = $request->nameapprenants;
        $addapprenants->email = $request->emailapprenants;
        $addapprenants->id_promo = $request->promoapprenants;
        $addapprenants->save(); 
        return redirect('/update_promotion'.'/'.$addapprenants->id_promo);
    }

    public function deleteapprenants(Request $request){
        $query = Apprenants::find($request->id)->first();
        Apprenants::where('id',$request->id)->delete();
        return redirect(('update_promotion/' .$query->id_promo));

    }
    
    public function update_apprenants($id){
        $edit = new Apprenants();    
        $apprenant = $edit::where('id', $id )->get();
        return view('update_apprenants', compact('apprenant'));
    }
 
    public function edit_apprenants($id,Request $request){
        $query = Apprenants::find($request->id)->first();
        $editapprenant = Apprenants::where('id',$id)->first();
        $editapprenant->name = $request->name;
        $editapprenant->email = $request->email;
        $editapprenant->id_promo = $request->id_promo;
        $editapprenant->save();
        return redirect('update_promotion/' .$query->id_promo);

    }


}