
@extends('backend.master')


@section('content')
<div class="container-fluid px-4">
<h1 class="mt-2">Delivery Man Assign</h1>
<ol class="breadcrumb mb-1">

</ol>

<form action="" method="" >
  
       
       <div>
        <label for="employee">Select Delivery Man</label>
        <select class="form-select" aria-label="Default select example" name="employee_name">
        @foreach($employees as $employee)
            <option value="">{{$employee->name}}</option>
        @endforeach      
       </select>
       </div>

       <button type="submit" class="btn btn-primary">Submit</button>
<form>

</div>
@endsection




