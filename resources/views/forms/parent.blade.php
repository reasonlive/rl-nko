
<form 
	style="display:none"
	class="form f-col-c parent-form" 
	action="{{ route('orders.store') }}" 
	method="POST">
		
	@csrf
	@method('POST')
	<div class='block-parent'>

		<fieldset>
		<div class="f-row-c">
			<input type='text' placeholder="ваше имя"  name="parent_name" id='parent-name'/>
			<input type='text' placeholder="ваш возраст" name="parent_age" id='parent-age'/>
		</div>

		<div class="f-row-c"> 
			Ваш Пол: 
			<label ><input type="radio" class="radio sex" value="parent-m" name="parent_m" id='parent-m'/>M</label>
			<label ><input type="radio" class="radio sex" value="parent-w" name="parent_w" id='parent-w'/>Ж</label>
		</div>
		</fieldset>

		<fieldset>
		<div class='f-row-c'>
			<input type='text' placeholder="имя ребенка" name="child_name" />
			<input type='text' placeholder="возраст ребенка" name="child_age" />
		</div>

		<div class="f-row-c"> 
			Пол ребенка: 
			<label><input type="radio" class="radio sex" value="parent-child-m" name="child_m" id='parent-child-m'/>M</label>
			<label><input type="radio" class="radio sex" value="parent-child-w" name="child_w" id='parent-child-w'/>Ж</label>
		</div>
		</fieldset>

		<div class='block-issue f-col-c'>
			<p>Опишите свою жизненную ситуацию:</p>
			<textarea name="issue" id="issue" cols="30" rows="10" style="resize:vertical;width:100%"></textarea>
		</div>

		<fieldset>
			<div class="client-contacts f-col-c">
				<p>Контакты для связи:</p>
				<div class='f-row-c'>
					<input  placeholder="электронная почта" type="email" name="email" />
					<input  placeholder="номер телефона" type="tel" name="phone" />
				</div>	
			</div>
		</fieldset>

		<div class="f-row-c" ><input type='submit' value="Отправить" /></div>

	</div>
</form>

<script src="{{ asset('js/sexSwitcher.js') }}"></script>