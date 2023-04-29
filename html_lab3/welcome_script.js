const userName = document.querySelector("#name");
const email = document.querySelector("#email");
userName.textContent = localStorage.getItem("name");
email.textContent = localStorage.getItem("email");
