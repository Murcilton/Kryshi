<?php

namespace App\Http\Controllers;

use App\Models\Adv;
use Illuminate\Http\Request;
use PHPUnit\Event\Code\Test;

class AdvController extends Controller
{
    public function test(){
        $tests = Adv::all();
        return view('test',compact('tests'));
    }
    public function test1(Request $request,$id){
        $request->validate([
            'id_user' => 'integer',
            'img' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'Text1' => 'required|string',
            'Text2' => 'required|string',
            'price' => 'required|numeric', 

        ]);

        $path = $request->file('img')->store('images', 'public');

        $adv = new Adv();
        $adv->id_user = $id;
        $adv->Text1 = $request->Text1;
        $adv->Text2 = $request->Text2;
        $adv->price = $request->price;
        $adv->img = $path;

        $adv->save();



        return redirect()->route('test');
    }
    public function test3(Request $request,$id){

        $adv= Adv::findOrFail($id);

        $request->validate([
           
            'Text1' => 'required|string',
            'Text2' => 'required|string',
            'price' => 'required|numeric', 

        ]);

        $adv->Text1 = $request->Text1;
        $adv->Text2 = $request->Text2;
        $adv->price = $request->price;

        $adv->save();

        return redirect()->route('test');
    }
    public function test2($id){
        $adv = Adv::findOrFail($id);
        $adv->delete();
        return redirect()->route('test');
    }

}
