var name = document.getElementById("name");

name.addEventListener("input", function (event) {
  if (name.validity.typeMismatch) {
    email.setCustomValidity("I need your name silly");
  } else {
    email.setCustomValidity("");
  }
});

var email = document.getElementById("email");

email.addEventListener("input", function (event) {
  if (email.validity.typeMismatch) {
    email.setCustomValidity("And your email too!");
  } else {
    email.setCustomValidity("");
  }
});

// var form = document.getElementById('feedform')
// form.addEventListener('submit'

// var button = document.querySelector("button"





function validateForm() {
    var name = document.forms["form"]["required"].value;
    if (x == "") {
      alert("Name must be filled out");
      return false;
    }
  }

  function validateForm() {
    var email = document.forms["form"]["email"].value;
    if (x == "") {
      alert("Email required");
      return false;
    }
  }

