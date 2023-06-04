
function validateForm() {
  
    var email = document.getElementsByName("email")[0].value;
    var cell = document.getElementsByName("cell")[0].value;
    var date = document.getElementsByName("date")[0].value;
    var guests = document.getElementsByName("guests")[0].value;

    if (email.trim() === "" || cell.trim() === "" || date.trim() === "" || guests.trim()=== "") {
      alert("Please fill in all the required fields.");
      return false;
    }

    return true;
  }
  