<?php

namespace App\View\Components;

use Illuminate\View\Component;
use DB;
use Illuminate\Http\Request;
use App\Models\Supervisor;

class supervisordetail extends Component
{
    public $id;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id)
    {
        //
        $data = DB::table('supervisors')->where('id', $id)->first();
        return view('components.supervisordetail',['supervisors' => $data]);
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.supervisordetail');
    }
}
