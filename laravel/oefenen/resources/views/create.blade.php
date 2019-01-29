<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>create a new product</title>
</head>
<body>
@extends('layout')

@section('content')
        

    <h1>Create a new project</h1>

<form  method = "POST" action="/product">
    {{csrf_field()}}
    <div>
        <input type="text" name="productname" placeholder="productnaam">
    </div>
    <div>
        <input type="float" name="price" placeholder="prijs">
    </div>
<button type ="submit">Nieuw product</button>
</form>
@endsection

</body>
</html>