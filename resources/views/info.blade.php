@extends('common')
@section('content')
<div id="home">
<div class="container">
<div class="row animate-in" data-anim-type="fade-in-up">
<div class="col-sm-6 col-sm-offset-3 col-md-6 col-md-offset-3 col-lg-8 col-lg-offset-2 scroll-me">
	  {!!Form::open(array('url'=>'search'))!!}
	  <span>Search By Category</span>
	  {!! Form::text('obj', Input::old('obj'),array('required','placeholder'=>'Eg: Maharashtra')) !!}
	  {!! Form::select('category', array('state' => 'State', 'name' => 'Name','city'=>'City','contact'=>'Contact')) !!}
	  <!-- <input class="field" name="agree" type="checkbox" value="1"> -->	

                    {!!Form::token()!!}

	
<button type="submit" class=" btn button-custom btn-custom-two">SEARCH </button>
{!!Form::close()!!}
</div>
</div>
</div>
</div>
@stop