@extends('layouts.frontend')


@section('content')
<h1>{{trans("web.catalog")}}</h1>
@forelse($products as $product)
<h3><a href="{{route ('detallcataleg',$product->id)}}"> {{$product->name}}</a></h3>

@empty
{{trans("web.no_products")}}
@endforelse
@endsection