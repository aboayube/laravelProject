@extends('layouts.app')
@section('content')
@if(count($errors)>0)
<div class="alert alert-danger">
<ul>
    @foreach($errors->all() as $error)
    <li>{{$error}}</li>
    @endforeach
    </ul>

</div>
@endif
    <form action="add" method="POST">
        {{ csrf_field() }}
        
        
        <div class="form-group{{ $errors->has('price')? 
            ' has-error': '' }}">
    <label for="exampleInputEmail1">name</label>
    <input type="name" class="form-control" id="exampleInputEmail1" placeholder="Email" name="name" value="{{Request::old('name')}}">
  </div>
        
        <div class="form-group {{ $errors->has('price')? 
            ' has-error': '' }}">
    <label for="exampleInputEmail1">price</label>
    <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Email" name="price" value="{{Request::old('price')}}">
  </div>
<button class="btn btn-primary">add</button>
        <br>
        
        </form>
@endsection
    