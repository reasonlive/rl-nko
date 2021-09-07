@extends('layout')

@section('title', 'admin-panel')


@section('content')
	<center><h2>Админка</h2></center>
	<div class="admin-panel">
		<div><a href="{{ route('admin.orders') }}">Все заявки</a></div>
		<div class='orders f-col-c'>
			@includeWhen($showOrders, 'order', ['orders' => $orders])
		</div>
	</div>
    @include('parts/footer', ['act' => 'Logout', 'url' => '/logout'])
@endsection




