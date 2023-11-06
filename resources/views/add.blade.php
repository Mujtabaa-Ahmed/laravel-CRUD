@extends('layout')
@section('section')
    
    <div class="container mb-5 bg-dark rounded">
        <h1 class="text-center mt-5 mb-2 text-light">Add Employ</h1>
        <form class="container-fluid" action="{{route('create')}}" method="post">
            @csrf
            <div class="form-group">
                <input type="text" class="form-control mb-4" name="empname" id="exampleFormControlInput1"
                    placeholder="Emp Name">
            </div>
            <div class="form-group">
                <input type="text" class="form-control mb-4" name="empmail" id="exampleFormControlInput1"
                    placeholder="Emp Email">
            </div>
            <div class="form-group">
                <input type="text" class="form-control mb-4" name="empdess" id="exampleFormControlInput1"
                    placeholder="Emp Dessignation">
            </div>
            <div class="form-group">
                <input type="number" class="form-control mb-4" name="empsalary" id="exampleFormControlInput1"
                    placeholder="Emp Salary">
            </div>

            <div class="form-group text-end">
                <button type="submit" class="btn btn-primary w-25  mb-5">Submit</button>
            </div>
        </form>
    </div>
    
@endsection
