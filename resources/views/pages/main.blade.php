@extends('layout')

@section('content')

	@if(session('success'))
		<div class='notice'>{{ session('success') }}</div>
	@elseif(session('failure'))
		<div class='notice'>{{ session('failure') }}</div>
	@endif
		

	<div class="main f-col-c">
	    @include('parts.header')
	    <div class='form-container'>
	    	@include('forms.role-select')
	    	@include('forms.child')
	    	@include('forms.parent')
	    </div>
	    
	    @include('parts.footer', ['act' => 'Login', 'url' => '/login'])
	</div>
@endsection

