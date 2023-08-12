const hamburger = document.querySelector('.header .nav-bar .nav-list .hamburger');
const mobile_menu = document.querySelector('.header .nav-bar .nav-list ul');
const menu_item = document.querySelectorAll('.header .nav-bar .nav-list ul li a');
const header = document.querySelector('.header.container');

hamburger.addEventListener('click', () => {
	hamburger.classList.toggle('active');
	mobile_menu.classList.toggle('active');
});

document.addEventListener('scroll', () => {
	var scroll_position = window.scrollY;
	if (scroll_position > 250) {
		header.style.backgroundColor = '#29323c';
	} else {
		header.style.backgroundColor = 'transparent';
	}
});

var typed = new Typed(".typing",{
	strings: ["Designer","Web Devolper","Student"],
	typeSpeed: 100,
	backSpeed:60,
	loop: true
})

menu_item.forEach((item) => {
	item.addEventListener('click', () => {
		hamburger.classList.toggle('active');
		mobile_menu.classList.toggle('active');
	});
});

var fnameError = document.getElementById('fname-error');
var lnameError = document.getElementById('lname-error');
var mailError = document.getElementById('mail-error');
var phoneError = document.getElementById('phone-error');
var textError = document.getElementById('text-error');

function validateName() {
	var name = document.getElementById('cont-fname').value;
	var fnameError = document.getElementById('fname-error');
  
	if (name.trim().length === 0) {
	  fnameError.innerHTML = 'Name is required';
	  return false;
	}
  
	if (!name.match(/^[A-Za-z]+$/)) {
	  fnameError.innerHTML = 'Invalid First Name. ';
	  return false;
	}
  
	fnameError.innerHTML = '<i class="fas fa-check-circle"></i>';
	return true;
  }
  
  function validateLastName() {
	var lname = document.getElementById('cont-lname').value;
	var lnameError = document.getElementById('lname-error');
  
	if (lname.trim().length === 0) {
	  lnameError.innerHTML = 'Last Name is required';
	  return false;
	}
  
	if (!lname.match(/^[A-Za-z]+$/)) {
	  lnameError.innerHTML = 'Invalid Last Name';
	  return false;
	}
  
	lnameError.innerHTML = '<i class="fas fa-check-circle"></i>';
	return true;
  }
  
  function validateEmail() {
	var email = document.getElementById('cont-email').value;
	var mailError = document.getElementById('mail-error');
  
	if (email.trim().length === 0) {
	  mailError.innerHTML = 'Email is required';
	  return false;
	}
  
	// Regular expression to validate email format
	var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
	if (!email.match(emailRegex)) {
	  mailError.innerHTML = 'Invalid Email';
	  return false;
	}
  
	mailError.innerHTML = '<i class="fas fa-check-circle"></i>';
	return true;
  }
  
  function validateMobile() {
	var mobile = document.getElementById('cont-mobile').value;
	var phoneError = document.getElementById('phone-error');
  
	if (mobile.trim().length === 0) {
	  phoneError.innerHTML = 'Mobile is required';
	  return false;
	}
  
	// Regular expression to validate mobile number (10 digits)
	var mobileRegex = /^\d{10}$/;
	if (!mobile.match(mobileRegex)) {
	  phoneError.innerHTML = 'Mobile number must be 10 digits';
	  return false;
	}
  
	phoneError.innerHTML = '<i class="fas fa-check-circle"></i>';
	return true;
  }
  
  function validateMessage() {
	var message = document.getElementById('cont-message').value;
	var textError = document.getElementById('text-error');
  
	if (message.trim().length === 0) {
	  textError.innerHTML = 'Message is required';
	  return false;
	}
  
	if (message.trim().split(/\s+/).length > 500) {
	  textError.innerHTML = 'Message should be limited to 500 words';
	  return false;
	}
  
	textError.innerHTML = '<i class="fas fa-check-circle"></i>';
	return true;
  }

  document.addEventListener("DOMContentLoaded", function () {
	function toggleSubmitButton() {
		const submitBtn = document.querySelector('.submit-btn input[type="submit"]');
		const isValid = validateName() && validateLastName() && validateEmail() && validateMobile() && validateMessage();
	
		submitBtn.disabled = !isValid;
	  }

	  document.getElementById('cont-fname').addEventListener('keyup', toggleSubmitButton);
  document.getElementById('cont-lname').addEventListener('keyup', toggleSubmitButton);
  document.getElementById('cont-email').addEventListener('keyup', toggleSubmitButton);
  document.getElementById('cont-mobile').addEventListener('keyup', toggleSubmitButton);
  document.getElementById('cont-message').addEventListener('keyup', toggleSubmitButton);
  toggleSubmitButton();
});
  
  document.getElementById('contact-form').addEventListener('submit', function(event) {
	if (!validateName() || !validateLastName() || !validateEmail() || !validateMobile() || !validateMessage()) {
	  event.preventDefault();
	}
  });
  


  