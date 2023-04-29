const submit_btn = document.querySelector("#submit-btn");
const btn_o1 = document.querySelector(".btn--1");
const btn_o2 = document.querySelector(".btn--2");
let userName = document.querySelector("#name");
let email = document.querySelector("#email");
let loc_btn = document.querySelector("#loc-btn");
let worker = new Worker("./worker.js");
submit_btn.addEventListener("click", (e) => {
  localStorage.setItem("name", userName.value);
  localStorage.setItem("email", email.value);
});
btn_o1.addEventListener("click", () => {
  if (document.body.style.background !== "green") {
    document.body.style.background = "green";
  } else {
    document.body.style.background = "blue";
  }
});
btn_o2.addEventListener("click", () => {
  worker.postMessage("");
});

worker.onmessage = function (message) {
  alert(message.data);
};
loc_btn.addEventListener("click", () => {
  navigator.geolocation.getCurrentPosition(showLoc, showErr);
});

function showLoc(e) {
  var long = e.coords.longitude;
  var lat = e.coords.latitude;
  location.assign("http://maps.google.com/maps?q" + lat + ",+" + long);
}
function showErr(x) {
  switch (x.code) {
    case 0:
      console.log(x.message);
      break;
    case 1:
      console.log(x.message);
      break;
    case 2:
      console.log(x.message);
      break;
    case 3:
      console.log("no time");
      break;
  }
}
