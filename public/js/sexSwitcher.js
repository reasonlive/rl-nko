const sexChecks = document.querySelectorAll('.sex');
sexChecks.forEach = [].forEach;

function reswitch(e){
	
	switch(e.target.value)
	{
		case 'child-m': document.getElementById('child-w').checked = false;break;
		case 'child-w': document.getElementById('child-m').checked = false;break;
		case 'parent-w': document.getElementById('parent-m').checked = false;break;
		case 'parent-m': document.getElementById('parent-w').checked = false;break;
		case 'parent-child-w': document.getElementById('parent-child-m').checked = false;break;
		case 'parent-child-m': document.getElementById('parent-child-w').checked = false;break;
	}
}


sexChecks.forEach(elem => elem.onchange = reswitch)