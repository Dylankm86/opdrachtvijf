@extends('layouts.app')

@section('content')
<h1>Dashboard</h1>

@foreach ($products as $product)
<p>{{ $product->Naam }}</p>
@endforeach
@endsection