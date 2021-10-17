<div>
    <h1>Supervisor Information Detail</h1>
    
<tr>
<img src="data:image/jpg;base64,{{ chunk_split(base64_encode($supervisors->img)) }}" style="border-radius: 40px; object-fit: cover;" height="200px" width="200px"/>
<p>{{$supervisors->name}}</p>
<p>{{$supervisors->email}}</p>

</tr>
    
</div>