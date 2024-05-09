@extends('layout')
@section('content')
 
<div class="card">
  <div class="card-header">Edit Page</div>
  <div class="card-body">
      
      <form action="{{ url('entollments/' .$entollments->id) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="id" id="id" value="{{$entollments->id}}" id="id" />

        <label>Enroll no</label></br>
        <input type="text" name="enroll_no" id="enroll_no" value="{{$entollments->enroll_no}}" class="form-control"></br>

        <label>Batch</label></br>
        <input type="text" name="batch_id" id="batch_id" value="{{$entollments->batch_id}}" class="form-control"></br>

        <label>Student</label></br>
        <input type="text" name="student_id" id="student_id" value="{{$entollments->student_id}}" class="form-control"></br>

        <label>Join Date</label></br>
        <input type="text" name="join_date" id="join_date" value="{{$entollments->join_date}}" class="form-control"></br>

        <label>Fee</label></br>
        <input type="text" name="fee" id="fee" value="{{$entollments->fee}}" class="form-control"></br>

        <input type="submit" value="Update" class="btn btn-success"></br>
  
  
  
  
      </form>
   
  </div>
</div>
 
@stop