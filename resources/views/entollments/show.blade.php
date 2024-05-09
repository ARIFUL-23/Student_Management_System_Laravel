@extends('layout')
@section('content')
 
 
<div class="card">
  <div class="card-header">Enrollment Page</div>
  <div class="card-body">
   
 
        <div class="card-body">
        <h5 class="card-title">Enrollment Number : {{ $entollments->enroll_no }}</h5>
        <p class="card-text">Batch : {{ $entollments->batch_id }}</p>
        <p class="card-text">Student : {{ $entollments->student_id }}</p>
        <p class="card-text">Join Date : {{ $entollments->join_date }}</p>
        <p class="card-text">Fee : {{ $entollments->fee }}</p>
  </div>
       
    </hr>
  
  </div>
</div>
@endsection