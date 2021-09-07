@extends('layout')


@section('content')

	@if(isset($err))
		<div class='err-popup'>
			<div>Вы не являетесь администратором!</div>
			<div><a href="{{ url('/') }}">Перейти на главную</a></div>
		</div>	
	@endif

	<div>{{ session('error') }}</div>

	<form action="{{ action('AdminPageController@auth') }}" method="POST" class="form f-col-c">
		@csrf
		
		<p>Вход только для администрации</p>
		<input type="text" placeholder="email: mail@mail.ru" name="email">
		<input type="password" placeholder="password: admin" name="password"/>
		<input type="submit" value="Войти">
	</form>
@endsection