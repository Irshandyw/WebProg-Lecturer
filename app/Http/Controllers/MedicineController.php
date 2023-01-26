<?php

namespace App\Http\Controllers;

use App\Models\Medicine;
use Illuminate\Support\Facades\Request;

class MedicineController extends Controller
{
    public function index()
    {
        $medicineList = Medicine::all();
        return view('medicine', compact('medicineList'));
    }
    public function details($id)
    {
        $medicine = Medicine::find($id);
        return view('medicinedetail', compact('medicine'));
    }

    public function create(Request $request,$id)
    {
        medicine::insert([
            'name'=>$request->name,
            'img'=>$request->img,
            'price'=>$request->price,
            'description'=>$request->description,

    ]);
    }
    public function createview()
    {
        return view('MedicineInsert');
    }
}
