@extends('layout')
@section('section')

{{-- @foreach ($data as $item)
    {{$item ->empname}}
    <br>
    {{$item ->empmail}}
@endforeach --}}
<div class="container mt-5 bg-dark rounded ">
<table class="table table-dark text-break">
    <thead>
      <tr>
        <th scope="col">SNo</th>
        <th scope="col">Employ Name</th>
        <th scope="col">Employ E-mail</th>
        <th scope="col">Employ Dessignation</th>
        <th scope="col">Employ Salary</th>
        <th scope="col">Update</th>
        <th scope="col">Delete</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($data as $i)
            <tr>
        <th scope="row">{{$i->id}}</th>
        <td>{{$i->empname}}</td>
        <td>{{$i->empmail}}</td>
        <td>{{$i->empdess}}</td>
        <td>{{$i->empsalary}}</td>
        <td><a href="{{route('getid',['updateid'=>$i])}}">
            <button class="btn btn-success"><i class="bi bi-pen-fill"></i></button>
        </a></td>
        <td><a href="{{route('deleteid',['deleteid'=>$i])}}">
            <button class="btn btn-danger"><i class="bi bi-trash3-fill"></i></button>
        </a></td>
      </tr>
        @endforeach
      
    
    </tbody>
  </table>
</div>
@endsection