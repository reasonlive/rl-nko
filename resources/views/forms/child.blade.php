<form 
	style="display:none"
	class="form f-col-c child-form" 
	action="{{ route('orders.store') }}" 
	method="POST">
		
	@csrf
	@method('POST')
	<div class='block-child'>

		<fieldset>
			<div class="f-row-c">
				<input placeholder="ваше имя" name="child_name"/>
				<input  placeholder="ваш возраст" name="child_age"/>
			</div>

			<div class="f-row-c"> 
				Ваш Пол: 
				<label ><input type="radio" class="radio sex" value='child-m' name="child_m" id='child-m'/>M</label>
				<label ><input type="radio" class="radio sex" value='child-w' name="child_w" id='child-w'/>Ж</label>
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
					<input type='text' placeholder="электронная почта" type="email" name="email"/>
					<input type='text' placeholder="номер телефона" type="tel" name="phone"/>
				</div>	
			</div>
		</fieldset>

		<div class="f-row-c"><input type='submit' value="Отправить" /></div>

	</div>
</form>

<script src="{{ asset('js/sexSwitcher.js') }}"></script>
