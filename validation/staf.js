function validateForm() {
    // Get form input values
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;

    // Perform validation
    if (email.trim() === "" || password.trim() === "") {
      // Display error message
      alert("Please fill in all the required fields.");
      return false; // Prevent form submission
    }

    return true; // Allow form submission
  }