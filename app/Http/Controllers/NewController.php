<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Mujtaba_ltd;

class NewController extends Controller
{
    public function index(){
        return view('index');
    }
    public function add(){
        return view('add');
    }
    public function addemp(Request $request){
        $empdata = new Mujtaba_ltd;
        $empdata->empname = $request->empname;
        $empdata->empmail = $request->empmail;
        $empdata->empdess = $request->empdess;
        $empdata->empsalary = $request->empsalary;
        $empdata->save();
        return redirect('/home/add');
    }
    public function read(){
        $data = Mujtaba_ltd::all();
        return view('read',compact('data'));
    }
    public function getid($id){
        $data = Mujtaba_ltd::find($id);
        return view('update',compact('data'));
    }
    public function update(Request $Urequest,$id){
        // dd($Urequest->all());
        $empdata = Mujtaba_ltd::where('id',$id)->first();
        $empdata->empname = $Urequest->empname;
        $empdata->empmail = $Urequest->empmail;
        $empdata->empdess = $Urequest->empdess;
        $empdata->empsalary = $Urequest->empsalary;
        $empdata->save();
        return redirect('/home/view');
    }
    public function deleteid($id){
        // dd($id);
        $data = Mujtaba_ltd::find($id);
        $data->delete();
        return redirect('/home/view');
    }
}
