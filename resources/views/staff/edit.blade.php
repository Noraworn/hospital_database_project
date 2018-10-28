@extends('master')

@section('content')

<div class="row">
 <div class="col-md-12">
  <br />
  <h3>Edit Record</h3>
  <br />
  @if(count($errors) > 0)

  <div class="alert alert-danger">
         <ul>
         @foreach($errors->all() as $error)
          <li>{{$error}}</li>
         @endforeach
         </ul>
  @endif
  <form method="post" action="{{action('StaffController@update', $id)}}">
   {{csrf_field()}}
   <input type="hidden" name="_method" value="PATCH" />
   <div class="form-group">
    <input type="text" name="name" class="form-control" value="{{$staff->first_name}}" placeholder="Enter Name" />
   </div>
   <div class="form-group">
    <input type="text" name="job" class="form-control" value="{{$staff->job}}" placeholder="Enter Job" />
   </div>
   <div class="form-group">
    <input type="submit" class="btn btn-primary" value="Edit" />
    <a href="{{route('staff.index')}}" class="btn btn-primary">back</a>
   </div>
  </form>
 </div>
</div>

@endsection