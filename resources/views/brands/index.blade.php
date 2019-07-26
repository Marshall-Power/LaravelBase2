@extends('layouts.frontend')

@section('content')
<a href="{{route('brands.create')}}">{{trans('web.add_brand')}}</a>
<table>
  <tr>
    <th>{{trans('web.full_name')}}</th>
    <th>{{trans('web.logo')}}</th>
    <th>{{trans('web.country')}}</th>
    <th>Options</th>
  </tr>
  @forelse($brands as $brand)
  <tr>
    <td>{{$brand->name}}</td>
    <td><img src='{{$brand->logo}}' class="img" style="height:50px"></td>
    <td>{{$brand->country->name}}</td>
    <td><a href="{{route('brands.show',$brand->id)}}">{{trans('web.show')}}</a>
      |<a href="{{route('brands.edit',$brand->id)}}">{{trans('web.modify')}}</a>
      |<a href="{{route('destroybrand',$brand->id)}}">{{trans('web.delete')}}</a>
    </td>
  </tr>

  @empty
  <tr>
    <td colspan="3">{{trans('web.no_brands')}}</td>
  </tr>
  @endforelse

@endsection