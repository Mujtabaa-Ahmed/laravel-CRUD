@extends('layout')
@section('section')
<div class="container mb-5 bg-dark rounded">
    <h1 class="text-center mt-5 mb-2 text-light">Edit Employ Data</h1>
    <form class="container-fluid" action="{{route('update', $data->id)}}" method="post">
        @csrf
        <div class="form-group">
            <input type="text" class="form-control mb-4" name="empname" id="exampleFormControlInput1"
                placeholder="Emp Name" value="{{$data->empname}}">
        </div>
        <div class="form-group">
            <input type="text" class="form-control mb-4" name="empmail" id="exampleFormControlInput1"
                placeholder="Emp Email" value="{{$data->empmail}}">
        </div>
        <div class="form-group">
            <input type="text" class="form-control mb-4" name="empdess" id="exampleFormControlInput1"
                placeholder="Emp Dessignation" value="{{$data->empdess}}">
        </div>
        <div class="form-group">
            <input type="number" class="form-control mb-4" name="empsalary" id="exampleFormControlInput1"
                placeholder="Emp Salary" value="{{$data->empsalary}}">
        </div>

        <div class="form-group text-end">
            <button type="submit" class="btn btn-primary w-25  mb-5">Submit</button>
        </div>
    </form>
</div>


@endsection