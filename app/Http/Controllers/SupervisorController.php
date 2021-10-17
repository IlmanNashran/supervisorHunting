<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supervisor;
use DB;

class SupervisorController extends Controller
{
    //
    function show()
    {
        $data = Supervisor::all();
        return view('Supervisor.main',['supervisors'=>$data]);
    }

    function edit($id)
    {
        $data = DB::table('supervisors')->where('id', $id)->first();
        return view('Supervisor.edit',['supervisors' => $data]);
    }

}
