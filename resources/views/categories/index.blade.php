@extends ('layouts.frontend')

@section('content')
<a href="{{route('categories.create')}}">{{trans('web.add_category')}}</a>
<table>
  <tr>
    <th>{{trans('web.full_name')}}</th>
    <th>{{trans('web.logo')}}</th>
    <th>{{trans('web.actions')}}</th>
  </tr>
  @forelse($categories as $category)
  <tr>
    <td>{{$category->nom}}</td>
    <td>{{$category->logo}}</td>
    <td><a href="{{route('categories.show',$category->id)}}">{{trans('web.show')}}</a>
      |<a href="{{route('categories.edit',$category->id)}}">{{trans('web.modify')}}</a>
      |<a href="{{route('destroycategory',$category->id)}}">{{trans('web.delete')}}</a>
    </td>
  </tr>

  @empty
  <tr>
    <td colspan="3">{{trans('web.no_categories')}}</td>
  </tr>

  @endforelse 
  

@endsection