
	<div class='form f-col-c role-select' style="display:none">
		<div class="f-row-cb"> Я ребенок: <input type="radio" class="radio radio-child" /> </div>
		<div class="f-row-cb"> Я родитель (опекун): <input type="radio" class="radio radio-parent" /></div>
	</div>

<script>
	const isChild = document.querySelector('.radio-child');
	const isParent = document.querySelector('.radio-parent');

	//choose who want to fill out the form
	//children or parents
	function chooseRole(e){
		if(e.target.classList.contains('radio-child')){
			document.querySelector('.child-form').style.display = 'block';
		}
		if(e.target.classList.contains('radio-parent')){
			document.querySelector('.parent-form').style.display = 'block';
		}

		document.querySelector('.role-select').remove();
	}

	isChild.onchange = isParent.onchange = chooseRole;
</script>
