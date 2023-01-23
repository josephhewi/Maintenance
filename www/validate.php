<!DOCTYPE html>
<html>
<head>
</head>
<body>
<header>
</header>
  <form method="post" action="submit.php"> 
    <label for="username">Username:</label> 
    <input type="text" id="username" name="username"> <br> 
    <label for="password">Password:</label> <input type="password" id="password" name="password"> <br> 
    <input type="submit" value="Submit"> 
  </form>
  <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $username = $_POST['username'];
      $password = $_POST['password'];

      // Validate the username and password
      if (empty($username) || empty($password)) {
        echo "Username and password are required.";
      } else {
        // Connect to the database
        $conn = mysqli_connect('hostname', 'username', 'password', 'database');

        // Check if the username and password match a record in the database
        $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
        $result = mysqli_query($conn, $query);
        if (mysqli_num_rows($result) == 1) {
          // Start a session and redirect the user to the dashboard
          session_start();
          $_SESSION['username'] = $username;
          header('Location: dashboard.php');
        } else {
          echo "Invalid username or password.";
        }
      }
    }
  ?>

<footer>
</footer>
</html>
