function validateForm() {
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    var cell = document.getElementById("cell").value;
    var date = document.getElementById("date").value;
  
    // Validate email
    var emailRegex = /\S+@\S+\.\S+/;
    if (!emailRegex.test(email)) {
      alert("Invalid email address");
      return false;
    }
  
    // Validate password
    if (password.length < 8) {
      alert("Password must be at least 8 characters long");
      return false;
    }
  
    // Validate phone number
    var cellRegex = /^[+]*[(]{0,1}[0-9]{1,4}[)]{0,1}[-\s\./0-9]*$/;
    if (!cellRegex.test(cell)) {
      alert("Invalid phone number");
      return false;
    }
  
    // Validate date
    var currentDate = new Date();
    var selectedDate = new Date(date);
    if (selectedDate > currentDate) {
      alert("Selected date is in the future");
      return false;
    }
  
    return true;
  }