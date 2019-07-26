@extends ('layouts.frontend')

@section ('content')

{{Form::open(['url'=>route('categories.store'),'class'=>'form'])}}

{{trans('web.full_name')}}:
{{Form::text('nom','')}}<br>

{{trans('web.logo')}}:
{{Form::text('logo','')}} <br>

{{Form::submit('Enviar')}}

{{Form::close()}}

@endsection