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
        // $ninjasList= Ninja::orderBy('created_at', 'desc')->get();
        // $ninjasList= Ninja::orderBy('created_at', 'desc')->paginate(10);

        //this is called Eagle loading which is more recommanded
        $ninjasList = Ninja::with('dojo')->orderBy('created_at','desc')->paginate(10);
        return view('ninjas.index',["ninjas"=> $ninjasList]);
    }
    public function show($id){
        //route --> /ninjas/{id}
        //fetch a single record and pass int show view
        // $ninja = Ninja::findOrFail($id);

        $ninja = Ninja::with('dojo')->findOrfail($id);
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