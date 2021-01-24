
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
const popup = Array.from(document.getElementsByClassName('js-popup'));
popup.forEach((value, index) => {
	popup[index].addEventListener('click', () => {
		console.log('aa');
		popup[index].nextElementSibling.style.display = 'block';
	}, false)
});