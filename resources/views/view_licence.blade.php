@extends('welcome')
@section('content') 
<div class="fill-parent ">

    <div>
    <table class="table table-success">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Licence Name</th>
      <th scope="col">Licence Number</th>
      <th scope="col">Expiry Date</th>
      <th scope="col"> Remarks </th>
     <th scope="col">responsible</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <td>{{$data->id}}</td>
      <td>{{$data->licence_name}}</td>
      <td>{{$data->licence_number}}</td>
      <td>{{$data->expiry_date}}</td>
      <td>{{$data->remarks}}</td>
      <td>{{$data->responsible}}</td>
    </tr>
  </tbody> 
</table>
<img src="{{asset('licence_img/'.$data->file_path) }}" width="" alt="Not Found">
    </div>
    <br>
    <br>
    <hr>
@endsection