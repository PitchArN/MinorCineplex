var seat = document.querySelector("seat");

// Seat click event
seat.addEventListener("click", changeSelected());

seat.onclick = function () {
     if (seat.className == "seat") {
       // read less
       document.querySelector('seat').classList.add("seat selected");
     } else {
       //read more
       seat.className = "seat";
     }
  };