
@extends('backend.master')


@section('content')
<div class="container-fluid px-4">
<h1 class="mt-2">Edit Category</h1>
<ol class="breadcrumb mb-1">

</ol>

<form action="{{route('category.update',$categories->id)}}" method="post" >
    @csrf
    @method('put')

        <div class="form-group">
            <label for="">Name <span style="color:red">*</span></label>
            <input value="{{$categories->name}}" required name="category_name" type="text" class="form-control" id="" placeholder="Enter name">
        </div>

        <div class="form-group">
            <label for="">Description</label>
            <textarea class="form-control" placeholder="Enter description" name="description" id="" cols="" rows="">{{$categories->description}}</textarea>

        </div>

        <!-- <div class="form-group">
            <label for="">Upload Image</label>
            <input type="file" placeholder="upload image" class="form-control">

        </div> -->

        <ol class="breadcrumb mb-1">

        </ol>

        <button type="submit" class="btn btn-primary">Update</button>
</form>

</div>
@endsection