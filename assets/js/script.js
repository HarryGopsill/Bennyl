// Modal 1

// Get the modal
var modal1 = document.getElementById('myModal1');

// Get the button that opens the modal
var btn1 = document.getElementById("myBtn1");

// Get the <span> element that closes the modal
var span1 = document.getElementsByClassName("close")[0];



// When the user clicks the button, open the modal
btn1.onclick = function() {
  modal1.style.display = "block";
}


// Modal 2

// Get the modal
var modal2 = document.getElementById('myModal2');

// Get the button that opens the modal
var btn2 = document.getElementById("myBtn2");

// Get the <span> element that closes the modal
var closeBtn = document.querySelectorAll('.close');



// When the user clicks the button, open the modal
btn2.onclick = function() {
  modal2.style.display = "block";
}


// Loop checking for all the Close buttons
for (var i = 0; i < closeBtn.length; i++) {
  closeBtn[i].addEventListener('click', function(e){
    e.preventDefault();
    modal1.style.display = "none";
    modal2.style.display = "none";
  });
}

