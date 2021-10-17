<?php

$data = DB::table('supervisors')->where('id', $id)->first();
        return view('components.supervisordetail',['supervisors' => $data]);
?>

<div>
    <h1>Supervisor Information Detail</h1>

    
</div>