@extends('welcome')
@section('content') 
<div class="col-md-6 offset-md-3 ">
        <div class="fill-parent">
        <img  class="img-fluid height:70%" src="{{ url('/img/pran.jpg') }}">
        <br>
        <h2 class="bg-warning">Please Enter The Company Details</h2>
        </div>    
        <form accept-charset="UTF-8" action="{{ url('/store-company') }}" method="POST"  target="">
          @csrf
          <div class="form-group">
            <label for="exampleInputName">Company Name</label>
            <input type="text" name="companyName" class="form-control" id="" placeholder="Enter Company Name" >
            @error('companyName')
            <span class="text-danger">{{$message}}</span>
            @enderror
          </div>
          <div class="form-group">
            <label for="companyType">Select Company Type</label>
            <select class="form-control" id="" name="companyType" >
              <option></option>
              <option>PRAN</option>
              <option>RFL</option>
              <option>Other</option>
            </select>
            @error('companyType')
            <span class="text-danger">{{$message}}</span>
            @enderror
          </div>
          <div class="form-group">
            <label for="location">location</label>
            <input type="text" name="location" class="form-control" id="" placeholder="Enter Company Location" >
            @error('location')
            <span class="text-danger">{{$message}}</span>
            @enderror
          </div>    
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div> 
    <br>
    <br>
    <hr>
    <div>
    <table class="table table-success">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Company Name</th>
      <th scope="col">Company Type</th>
      <th scope="col">Company Location</th>
    </tr>
  </thead>
  <tbody>
  @foreach($companyList as $item)
    <tr>
    <td>{{$item->id}}</td>
      <td>{{$item->company_name}}</td>
      <td>{{$item->company_type}}</td>
      <td>{{$item->company_location}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
{{$companyList->links()}}
    </div>
    <br>
    <br>
    <hr>
@endsection