@extends ('layouts.frontend')

@section ('content')

{{Form::open(['url'=>route('brands.store'),'class'=>'form'])}}

{{trans('web.full_name')}}:
<?php 
  $estil="";
  if($errors->first('name')){
    $estil="border-color:red";
  }
?>
{{Form::text('name','',['style'=>$estil])}} {!! $errors->first('name', '<p>:message </p>') !!}<br>  <!-- Canviar el missatge a lang validations.php -->



{{trans('web.logo')}}:
{{Form::text('logo','')}} <br>


<select name="country">
  @forelse ($countries as $country)
    <option value={{$country->id}}> {{$country->name}} </option>
  @empty
    {{trans('web.no_countries')}}
  @endforelse
</select> <br>  

<!-- <textarea name="text">{{old("text")}}</textarea> -->

    


{{Form::submit(trans('web.send'))}}

{{Form::close()}}

@endsection