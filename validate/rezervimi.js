function validateForm() {
    var email = document.getElementsByName("email")[0].value;
    var password = document.getElementsByName("password")[0].value;
    var cell = document.getElementsByName("cell")[0].value;
    var date = document.getElementsByName("date")[0].value;

    if (email.trim() === "" || password.trim() === "" || cell.trim() === "" || date.trim() === "") {
      alert("Please fill in all the required fields.");
      return false;
    }

    return true;
  }