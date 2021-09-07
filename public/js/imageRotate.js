;(function(){

	let timer = 5000; //Interval of showing an image in milliseconds
	let iter = [1,2,3,4,5,6]; //names of images

	const bodyStyle = document.body.style;

	function setImage(name){
		let hasIm;
		if(hasIm = document.querySelector('.back-image'))
			hasIm.remove()

		let im = document.createElement('img');

		im.className = 'back-image';
		im.src = `img/${name}.jpg`;
		im.style.position = 'absolute';
		im.style.left = 0;
		im.style.top = 0;
		im.style.width = '100%';
		im.style.height = 'auto';
		im.style.zIndex = -1;
		im.style.opacity = 1;

		document.body.prepend(im);
	}

	

	async function start(){

		for (let i of iter)
		{
			setImage(i);
			await new Promise(res=> setTimeout(() => res(), timer));
			if(i !== 6)
			document.querySelector('.back-image').remove();
		}
		
	}

	setInterval(() => start(),timer * iter.length)

	start()	

}())