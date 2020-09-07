
/**
 * Necesario
 */

function openForm() {
	document.getElementById("myForm").style.display = "block";
}

function SubmitHide() {
	document.getElementById("btnBack").style.display = "none";
	
	document.getElementById("comment").style.display = "none";
	document.getElementById("gender").style.display = "none";
	document.getElementById("submit").style.display = "none";
}

function next() {
	document.getElementById("name").style.display = "none";
	document.getElementById("email").style.display = "none";
	document.getElementById("website").style.display = "none";
	
	
	document.getElementById("comment").style.display = "block";
	document.getElementById("gender").style.display = "block";
	
	document.getElementById("close").style.display = "none";
	document.getElementById("btnBack").style.display = "block";
	document.getElementById("btnNext").style.display = "none";
	document.getElementById("submit").style.display = "block";
}

function back() {
	document.getElementById("name").style.display = "block";
	document.getElementById("email").style.display = "block";
	document.getElementById("website").style.display = "block";
	
	
	document.getElementById("comment").style.display = "none";
	document.getElementById("gender").style.display = "none";
	
	document.getElementById("close").style.display = "block";
	document.getElementById("btnBack").style.display = "none";
	document.getElementById("btnNext").style.display = "block";
	document.getElementById("submit").style.display = "none";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}


//openForm();
SubmitHide();





