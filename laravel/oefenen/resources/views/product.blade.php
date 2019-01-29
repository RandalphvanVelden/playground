
<!DOCTYPE html>
<html lang="en">
<head>
    
    <title></title>
</head>
<body>
@extends('layout')

@section('content')

    <h1>Producten</h1>
    <table class="table table-striped">
  <thead>
    <tr>
      <th>Produkt</th>
      <th>prijs</th>
    </tr>
  </thead>
  <tbody>
       @foreach ($products as $product)
    <tr>
      <td>{{$product->productname}}</td>
      <td>{{$product->price}}</td>
    </tr>
      @endforeach
  </tbody>
</table>   
    @endsection

</body>
</html>
    
    
