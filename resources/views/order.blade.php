@foreach($orders as $order)
<div class="order">
	
	<div class="info f-row">
		<div class="personal-info f-col">
			<p>Родитель:</p>
			<div class="personal ">
				<p>имя: {{ $order['parent_name'] }}</p>
				<p>пол: {{ $order['parent_sex'] ? 'мужчина' : 'женщина' }} </p>
				<p>возраст: {{ $order['parent_age'] }} </p>
			</div>
		</div>
		<div class="personal-info f-col">
			<p>Ребенок:</p>
			<div class="personal ">
				<p>имя: {{ $order['child_name'] }}</p>
				<p>пол: {{ $order['child_sex'] ? 'мальчик' : 'девочка' }} </p>
				<p>возраст: {{ $order['child_age'] }} </p>
			</div>
		</div>
		
		<div class="contacts">
			<div class="date">дата: {{ $order['created_at'] }}</div>
			<p>почта: {{ $order['email'] }}</p>
			<p>телефон: {{ $order['phone'] }}</p>

		</div>
	</div>
	<div class="issue">
			{{ $order['issue'] }}
	</div>
</div>
@endforeach