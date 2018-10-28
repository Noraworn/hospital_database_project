@extends('master')

@section('content')

<div class="row">
    <div class="col-md-12">
        <br />
        <h3 align="center">Staff Data</h3>
        <br />
       
        @if($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{$message}}</p>
        </div>
        @endif

         
        <table class="table table-bordered table-striped">
            <tr>
                <th>Name</th>
                <th>Job Name</th>
                <th></th>
                <th></th>
            </tr>
          @foreach($staffs as $row)
            <tr>
            <td>{{$row['Name']}}</td>
            <td>{{$row['Job']}}</td>
            <td align="center"><a href="{{action('StaffController@edit', $row['id'])}}" class="btn btn-warning">Edit</a></td>
            <td align="center">
                <form method="post" class="delete_form" action="{{action('StaffController@destroy', $row['id'])}}">
                 {{csrf_field()}}
                <input type="hidden" name="_method" value="DELETE" />
                <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
         </tr>
        @endforeach
        </table>
        <div >
            <a href="{{route('staff.create')}}" 
            class="btn btn-primary">
            Add</a>
            <br/>
            <br/>   
        </div>    
    </div>
</div>

<script>
$(document).ready(function(){
 $('.delete_form').on('submit', function(){
  if(confirm("Are you sure you want to delete it?"))
  {
   return true;
  }
  else
  {
   return false;
  }
 });
});
</script>

@endsection

