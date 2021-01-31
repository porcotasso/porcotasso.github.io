
// home summary logo
// const logoMark = document.getElementById('js-logoMark');
// function showElementAnimation() {
// var scrollY = window.pageYOffset;
// logoMark.style.left = scrollY/2 - 100;
// logoMark.style.top = scrollY/4 - 120;
// logoMark.style.opacity = 0.3 - scrollY/2000;
// }
// showElementAnimation();
// window.addEventListener('scroll', showElementAnimation);



// toggle tag and relatedList by clicking tag
const tag = Array.from(document.getElementsByClassName('js-tag'));
function inactiveTag(){
	//inactive an active tag
	document.getElementsByClassName('active-tag')[0].classList.remove('active-tag');
}
function inactiveRelatedList(){
	//inactive relatedList
	document.getElementsByClassName('active-list')[0].classList.remove('active-list');
}
tag.forEach((value, index) => {
	tag[index].addEventListener('click', () => {
		let activeTag = document.getElementsByClassName('active-tag');
		if(activeTag.length !== 0){
			//not first click
			if(tag[index].classList.contains('active-tag') == true){
			//click same tag - inactive clicked tag and relatedList
			tag[index].classList.remove('active-tag');
			inactiveRelatedList();
			} else {
				//click different tag - inactive different tag and relatedList
				inactiveTag();
				inactiveRelatedList();
				//active clicked tag and relatedList
				tag[index].classList.add('active-tag');
				document.getElementById(tag[index].getAttribute('name')).classList.add('active-list');
			}
		} else {
			//first click - active clicked tag and relatedList
			tag[index].classList.add('active-tag');
			document.getElementById(tag[index].getAttribute('name')).classList.add('active-list');
		}
	}, false);
});
// close button action
const relatedClose = Array.from(document.getElementsByClassName('js-relatedClose'));
relatedClose.forEach((value, index) => {
	relatedClose[index].addEventListener('click', () => {
		inactiveRelatedList();
		inactiveTag();
	}, false)
});


//popup
const popupTrigger = Array.from(document.getElementsByClassName('js-popupTrigger'));
const closePopup = document.getElementById('js-closePopup');
popupTrigger.forEach((value, index) => {
	popupTrigger[index].addEventListener('click', () => {
		let popup = Array.from(document.getElementsByClassName('js-popup'));
		let activeTrigger = popupTrigger[index].classList.contains('is-active');


		console.log(activeTrigger);
		// closePopup.classList.add('is-active');
		if(activeTrigger != true){
			//click active trigger
			// console.log('click active trigger');
			// popup[0].remove();
			// popupTrigger[index].classList.add('is-active');
			// closePopup.classList.remove('is-active');
			 if(popup[0] != undefined) {
				console.log('there is anotger active click');

			 } else {
				console.log('first click');
				popupTrigger[index].classList.add('is-active');
			 }
			// popup[0].remove();
			// activeTrigger.classList.remove('is-active');
			// popupTrigger[index].classList.add('is-active');
			// popupTrigger[index].parentNode.parentNode.insertAdjacentHTML('afterend', '<div class="popupTxt js-popup">' + popupTrigger[index].getAttribute("data-popup") + '</div>');
			// closePopup.classList.remove('is-active');
			// console.log('already clicked');

		} else {
			popupTrigger[index].classList.remove('is-active');
			// popupTrigger[index].parentNode.parentNode.insertAdjacentHTML('afterend', '<div class="popupTxt js-popup">' + popupTrigger[index].getAttribute("data-popup") + '</div>');
		}

		// if(popup[0] != undefined){
		// 	popup[0].remove();
		// };
		// console.log(popupTrigger[index]);
		// if(popupTrigger[index].classList.contains('is-active') == true){
		// 	popup[0].remove();
		// 	console.log('aaaaa');
		// 	popupTrigger[index].classList.remove('is-active');
		// } else {
		// popupTrigger[index].classList.add('is-active');
		// popupTrigger[index].parentNode.parentNode.insertAdjacentHTML('afterend', '<div class="popupTxt js-popup">' + popupTrigger[index].getAttribute("data-popup") + '</div>');
		// }
	}, false)
});
closePopup.addEventListener('click', () => {
	let popup = Array.from(document.getElementsByClassName('js-popup'));
	if(popup[0] != undefined){
		popup[0].remove();
		closePopup.classList.remove('is-active');
	};
});