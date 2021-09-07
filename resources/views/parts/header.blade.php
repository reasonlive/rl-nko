<div class='header'>

	<div class='header-wrap f-row-ca'>
		<div class="logo">
			<a href="/">
				<img src="{{ asset('/img/logo.jpg') }}">
			</a>
		</div>
		<div class="description">
			<p>Мы дружная команда, которая всегда готова помочь детям в сложной ситуации, на поддержку и реабилитацию детей мы тратим огромные ресурсы, создаем различные программы помощи по развитию и активной жизнедеятельности ребенка</p>
		</div>
	</div>
	
	<p class='description-btn'> 
		Чтобы оставить заявку на реабилитацию , <b>заполните форму:</b> 
		<input type="button" value="Заполнить" onclick="openForm()">
	</p>

</div>

<script>
	function openForm(){
		document.getElementsByClassName('role-select')[0].style.display = 'block';
	}
</script>