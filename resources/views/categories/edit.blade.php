@extends ('layouts.frontend')

@section ('content')

{{Form::open(['url'=>route('categories.update',$category->id),'method'=>'PUT','class'=>'form'])}}

{{trans('web.full_name')}}:
{{Form::text('nom', $category->nom)}}<br>

{{trans('web.logo')}}:
{{Form::text('logo',$category->logo)}} <br>

{{Form::submit('Enviar')}}

{{Form::close()}}

@endsection