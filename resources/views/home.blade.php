@extends('welcome')
@section('content') 
<div class="">
    <div class="fill-parent">
    <div class="row">
    <img  class="col-2" src="{{ url('/img/pr.png') }}" height="100px" width="100px"> 
    <div class="col-10 align-middle bg-success">
    <p></p>
    <h2 class=" text-white  text-center font-weight-bold"> PRG LICENCE MANAGEMENT SYSTEM</h2>
    </div>    

    <table class="table table-striped table-hover">
    <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Company name </th>
      <th scope="col">Company type </th>
      <th scope="col">Location </th> 
      <th scope="col">Licence Name</th>
      <th scope="col">Number</th>
      <th scope="col">Expiry Date</th>
      <th scope="col"> Remarks</th>
      <th scope="col">Resposible </th>
      <th scope="col">Authority Name </th>
      <th scope="col">Contact person </th>
      <th scope="col">Contact Mobile </th>
      <th scope="col">View Licence </th>
      <th scope="col">Delete </th>
      
    </tr>
  </thead>
  <tbody>
  @foreach($data as $key=>$item)
    <tr>
      <td >{{$key+1}}</td>
      <td >{{$item->company_name}}</td>
      <td >{{$item->company_type}}</td>
      <td >{{$item->company_location}}</td>
      <td >{{$item->licence_name}}</td>
      <td >{{$item->licence_number}}</td>
      <td class="bg-warning">{{$item->expiry_date}}</td>
      <td >{{$item->remarks}}</td>
      <td >{{$item->responsible}}</td>
      <td >{{$item->authority_name}}</td>
      <td >{{$item->contact_person}}</td>
      <td >{{$item->contact_mobile}}</td>
      <td >
      <a href="{{URL::to('/view-licence',$item->id)}}"> <img src="{{asset('licence_img/'.$item->file_path) }}" width="100px" alt="Not Found"></a>
      </td>
    </tr>
    
    @endforeach
  </tbody>
</table>
{{ $data->links() }}
        </div>
        </div>    
    </div> 
@endsection