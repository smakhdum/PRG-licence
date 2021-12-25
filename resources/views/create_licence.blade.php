@extends('welcome')
@section('content') 
<div class="col-md-6 offset-md-3 ">
        <div class="fill-parent">
        <img  class="img-fluid" src="{{ url('/img/licence.png') }}">
        <br>
        <h2 class="bg-warning">Please Enter The Licence Details</h2>
        </div>    
        <form accept-charset="UTF-8" action="{{ url('/store-licence') }}" method="POST" enctype="multipart/form-data" target="">
          @csrf
        <div class="form-group">
            <label for="licenceName">Licence Name</label>
            <select class="form-control" name="licenceName" id="">
              @foreach($licenceTypeList as $item)
               <option value="{{$item->licence_name}}">{{$item->licence_name}}</option>
              @endforeach
            </select>
            @error('licenceName')
            <span class="text-danger">{{$message}}</span>
            @enderror
          </div>
          <div class="form-group">
            <label for="licenceNumber" >Licence Number </label>
            <input type="text" name="licenceNumber" class="form-control"  placeholder="Enter Licence Number">
            @error('licenceNumber')
            <span class="text-danger">{{$message}}</span>
            @enderror
          </div>
          <div class="form-group">
            <label for=""> Select Company Name</label>
            <select class="form-control" name="companyID" id="">
              @foreach($company as $item)
               <option value="{{$item->id}}">{{$item->company_name}}</option>
              @endforeach
            </select>
            @error('companyID')
            <span class="text-danger">{{$message}}</span>
            @enderror
          </div>
          <div class="form-group">
            <label for="">Select Authority</label>
            <select class="form-control" name="authorityID" id="">
              @foreach($authority as $item)
               <option value="{{$item->id}}">{{$item->authority_name}}</option>
              @endforeach
            </select>
            @error('authorityID')
            <span class="text-danger">{{$message}}</span>
            @enderror
          </div>
          <div class="form-group">
            <label for="expiryDate" >Expiry Date</label>
            <input type="date" name="expiryDate" class="form-control glyphicon "  placeholder="Enter email">
            @error('expiryDate')
            <span class="text-danger">{{$message}}</span>
            @enderror
          </div>
          <div class="form-group">
            <label for="responsible">Responsible Person</label>
            <input type="text" name="responsible" class="form-control" placeholder="Enter Responsible Person">
            @error('responsible')
            <span class="text-danger">{{$message}}</span>
            @enderror
          </div>
          <div class="form-group">
            <label for="remarks" >Remarks </label>
            <input type="text" name="remarks" class="form-control"  placeholder="Enter Remarks ">
            @error('remarks')
            <span class="text-danger">{{$message}}</span>
            @enderror
          </div>
          <hr>
          <div class="form-group mt-3">
            <label class="mr-2">Upload Licence File:</label>
            <input class=" btn bg-success" type="file" name="file">
            @error('file')
            <span class="text-danger">{{$message}}</span>
            @enderror
          </div>
          <hr>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div> 
    <br>
@endsection