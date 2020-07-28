@extends('layouts.app')
@section('content')
<table>
<tr>
    <td>name</td>
    <td>price</td>
    <td>edit</td>
    <td>delet</td>
    </tr>

@foreach($product as $produc )
<tr>
    <td>
name:{{$produc->name}}</td>
    <td>
price:{{$produc->price}}</td>
    <td><a href="edit/{{$produc->id}}">edit</a></td>
    <td><a href="add/{{$produc->id}}">delete</a></td>
    </tr>


@endforeach
<a href="add">add Product</a>
</table>
@endsection