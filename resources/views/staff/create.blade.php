@extends('master')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <h3></h3>
            <br/>
                <h3 align="center">Add Data</h3>
            <br/>
            @if(count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
                </ul>
            </div>
            @endif
  
            @if(\Session::has('success'))
                <div class="alert alert-success">
                    <p>{{ \Session::get('success') }}</p>
                </div>
             @endif
             

            <form method="post" action="{{url('staff')}}">
            {{csrf_field()}}
            <div class="form-group">
                <input type="text" name="name" class="
                form-control" placeholder="Enter your name"/>
            </div>
            <div class="form-group">
                <input type="text" name="job" class="
                form-control" placeholder="Enter your job"/>
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-primary" />
                <a href="{{route('staff.index')}}" class="btn btn-primary">back</a>
            </div>
           
            </form>
            </div>
        </div>
    </div>
@endsection