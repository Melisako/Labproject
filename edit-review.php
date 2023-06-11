<?php
session_start();
include "menagdb.php";

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $id = $_POST['id'];
  $name = trim($_POST['name']);
  $rating = $_POST['rating'];
  $comment = $_POST['comment'];

  // Validate input
  if (empty($name) || empty($rating) || empty($comment)) {
    echo "Invalid input";
    exit;
  }

  // Sanitize user input
  $name = htmlspecialchars($name, ENT_QUOTES, 'UTF-8');
  $comment = htmlspecialchars($comment, ENT_QUOTES, 'UTF-8');

  // Update the review in the database
  $stmt = $pdo->prepare("UPDATE review SET name=?, rating=?, comment=? WHERE id=?");
  $stmt->execute([$name, $rating, $comment, $id]);

  echo "Review updated successfully";
  header('Location: dashboard.php');
  exit;
}

// Get the review to edit
$id = $_GET['id'];
$stmt = $pdo->prepare("SELECT * FROM review WHERE id=?");
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
  <!-- Your HTML content here -->

  <div class="review-container">
    <form method="post" action="edit-review.php">
      <input type="hidden" name="id" value="<?php echo $review['id']; ?>">
      <label for="name">Name:</label>
      <input type="text" name="name" value="<?php echo $review['name']; ?>" required><br><br>
      <label for="rating">Rating:</label>
      <select name="rating" required>
        <option value="">Select rating</option>
        <option value="1" <?php if ($review['rating'] == 1) echo 'selected'; ?>>1 star</option>
        <option value="2" <?php if ($review['rating'] == 2) echo 'selected'; ?>>2 stars</option>
        <option value="3" <?php if ($review['rating'] == 3) echo 'selected'; ?>>3 stars</option>
        <option value="4" <?php if ($review['rating'] == 4) echo 'selected'; ?>>4 stars</option>
        <option value="5" <?php if ($review['rating'] == 5) echo 'selected'; ?>>5 stars</option>
      </select><br><br>
      <label for="comment">Comment:</label>
      <textarea name="comment" required><?php echo $review['comment']; ?></textarea><br>
      <input type="submit" value="Submit">
    </form>
  </div>
</body>
</html>


