<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Ninja;
class NinjaController extends Controller
{
    //
    public function index(){
        //route--> /ninjas/
        //fetch all records $ pass into the index view
        // $ninjasList = Ninja::all();
        $ninjasList= Ninja::orderBy('created_at', 'desc')->get();
        return view('ninjas.index',["ninjas"=> $ninjasList]);
    }
    public function show($id){
        //route --> /ninjas/{id}
        //fetch a single record and pass int show view
        $ninja = Ninja::findOrFail($id);
        return view('ninjas.show', ["ninja"=>$ninja]);
    }
    public function create(){
        //route --> /ninjas/create
        //render a create view(with web form) to user
        return view('ninjas.create');
    }
    public function store(){
        //---> /ninjas/ (POST)
        //handle POST request to store a new ninja record in table
    }
}