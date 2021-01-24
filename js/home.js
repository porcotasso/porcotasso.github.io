
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
let closePopup = document.getElementById('js-closePopup');
popupTrigger.forEach((value, index) => {
	popupTrigger[index].addEventListener('click', () => {
		let popup = Array.from(document.getElementsByClassName('js-popup'));
		closePopup.classList.add('is-active');
		// console.log(popup[0]);
		if(popup[0] != undefined){
			// console.log(popup[0]);
			popup[0].remove();
		};
		popupTrigger[index].insertAdjacentHTML('afterend', '<div class="popupTxt js-popup">' + popupTrigger[index].getAttribute("data") + '</div>');
	}, false)
});

closePopup.addEventListener('click', () => {
	let popup2 = Array.from(document.getElementsByClassName('js-popup'));
	if(popup2[0] != undefined){
		console.log(popup2[0]);
		popup2[0].remove();
		closePopup.classList.remove('is-active');
	};
});