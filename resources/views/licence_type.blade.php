@extends('welcome')
@section('content') 
<div class="col-md-6 offset-md-3">
        <div class="fill-parent">
        <img  class="img-fluid" src="{{ url('/img/licence1.png') }}">
        <br>
        <h2 class="bg-warning">Please Enter The Licence Name</h2>
        </div>    
        <form accept-charset="UTF-8" action="{{url('/store-licence-type')}}" method="POST"  target="">
        @csrf
          <div class="form-group">
            <label for="exampleInputName">Licence Name</label>
            <input type="text" name="licence_name" class="form-control" id="licence_name" placeholder="Enter Licence Name">
            @error('licence_name')
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
      <th scope="col">Licence Name</th>
    </tr>
  </thead>
  <tbody>
  @foreach($licenceList as $item)
    <tr>
    <td>{{$item->id}}</td>
      <td>{{$item->licence_name}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
{{$licenceList->links()}}
    </div>
    <br>
    <br>
    <hr>
@endsection