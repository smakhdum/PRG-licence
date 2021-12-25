@extends('welcome')
@section('content') 
<div class="col-md-6 offset-md-3 ">
        <div class="fill-parent">
        <img  class="img-fluid" src="{{ url('/img/authority.jpg') }}">
        <br>
        <h2 class="bg-warning">Please Enter The Authority Name</h2>
        </div>    
        <form accept-charset="UTF-8" action="{{url('/store-authority')}}" method="POST"  target="">
        @csrf
          <div class="form-group">
            <label for="">Authority Name</label>
            <input type="text" name="authorityName" class="form-control" id="" placeholder="Enter Authority Name">
            @error('authorityName')
            <span class="text-danger">{{$message}}</span>
            @enderror
          </div>
          <div class="form-group">
            <label for="">Contact Person</label>
            <input type="text" name="contactPerson" class="form-control" id="" placeholder="Enter Contact Person Name">
            @error('contactPerson')
            <span class="text-danger">{{$message}}</span>
            @enderror
          </div>
          <div class="form-group">
            <label for="">Contact Mobile Number</label>
            <input type="text" name="contactMobile" class="form-control" id="" placeholder="Enter Contact Person Mobile Number">
            @error('contactMobile')
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
      <th scope="col">Authority Name</th>
      <th scope="col">Contact Person</th>
      <th scope="col">Contact Mobile</th>
    </tr>
  </thead>
  <tbody>
  @foreach($authorityList as $item)
    <tr>
    <td>{{$item->id}}</td>
      <td>{{$item->authority_name}}</td>
      <td>{{$item->contact_person}}</td>
      <td>{{$item->contact_mobile}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
{{$authorityList->links()}}
    </div>
    <br>
    <br>
    <hr>
@endsection