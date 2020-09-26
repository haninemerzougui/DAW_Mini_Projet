//swiper script
var swiper = new Swiper(".swiper-container", {
  slidesPerView: 3,
  spaceBetween: 30,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
});

// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.querySelector(".myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal

// When the user clicks on <span> (x), close the modal
span.onclick = function () {
  modal.style.display = "none";
};

// When the user clicks anywhere outside of the modal, close it
window.addEventListener("click", function (event) {
  const thisElement = event.target;
  var ownerName = document.getElementById("ownerName");
  var ownerPhone = document.getElementById("ownerPhone");
  var ownerEmail = document.getElementById("ownerEmail");
  var ownerWilaya = document.getElementById("ownerWilaya");
  if (thisElement.className == "ShowModal") {
    var http = new XMLHttpRequest();
    var url = "/hanine/getuser.php";
    var params = `id=${thisElement.id}`;
    http.open("POST", url, true);

    //Send the proper header information along with the request
    http.setRequestHeader("Content-type", "application/x-www-form-urlencoded");

    http.onreadystatechange = function () {
      //Call a function when the state changes.
      if (http.readyState == 4 && http.status == 200) {
        const result = JSON.parse(http.response);
        ownerName.innerText = result.fullName;
        ownerPhone.innerText = result.numberPhone;
        ownerEmail.innerText = result.email;
        ownerWilaya.innerText = result.wilaya;
      }
    };
    http.send(params);
    modal.style.display = "block";
    modal.style.position = "fixed";
  }
});

console.log("connect");
