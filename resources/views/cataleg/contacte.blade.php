@extends ('layouts.frontend')

@section('content')
<h1>{{trans("web.contact_form")}}</h1>

<label for="nom">{{trans("web.full_name")}}:
<input type="text" name="nom" id="nom" value="{{Auth::user()->name}}"><br>
<label for="email">{{trans("web.email")}}:
<input type="text" name="email" id="email" value="{{Auth::user()->email}}"><br>
<label for="comment">{{trans("web.comment")}}:
<textarea name="comentari" name="comentari" id="comment"></textarea><br>
<button class="btn btn-info">{{trans("web.send")}}</button>


@endsection