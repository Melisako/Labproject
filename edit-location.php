<?php
session_start();
include "menagdb.php";

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $id = $_POST['id'];
  $name = trim($_POST['Name']);
  $comment = $_POST['Message'];

  // Validate input
  if (empty($name) || empty($comment)) {
    echo "Invalid input";
    exit;
  }

  // Sanitize user input
  $name = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');

  // Update the review in the database
  $stmt = $pdo->prepare("UPDATE lokacioni SET name=?, comment=? WHERE id=?");
  $stmt->execute([$name, $comment, $id]);

  echo "Review updated successfully";
  header('Location: admin-dashboard.php');
  exit;
}

// Get the review to edit
$id = $_GET['id'];
$stmt = $pdo->prepare("SELECT * FROM lokacioni WHERE id=?");
$stmt->execute([$id]);
$review = $stmt->fetch(PDO::FETCH_ASSOC);

// Close the database connection
$pdo = null;
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Edit Review</title>
  <style>
    /* Your CSS styles here */
  </style>
</head>
<body>
  <!-- Display the form -->
  <div class="form-container">
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
      <input type="hidden" name="id" value="<?php echo $review['id']; ?>">
      <label for="Name" style="font-size: 23px; padding-left:100px;">Name:</label>
      <input class="w3-input w3-padding-16" type="text" placeholder="Name" required name="Name" value="<?php echo $review['name']; ?>">
      <br><br>
      <label for="Message" style="font-size: 23px; padding-left:100px;">Message \ Special requirements:</label>
      <input class="w3-input w3-padding-16" type="text" placeholder="Message \ Special requirements" required name="Message" value="<?php echo $review['comment']; ?>">
      <br><br>
      <button class="w3-button w3-light-grey w3-section" type="submit">SEND MESSAGE</button>
    </form>
  </div>
</body>
</html>
