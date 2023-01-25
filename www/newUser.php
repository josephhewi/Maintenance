<!DOCTYPE HTML>
<head>
  <title>Add New User</title>
  <link rel="stylesheet" href="./styles/default.css">
</head>
<body>
  <?php
    $fname = $lname = $uname = $pwd = "";
    $fnameErr = $lnameErr = $unameErr = $pwdErr = "";
  
  if (empty($_POST["fname"])) {
    $nameErr = "First name is required";
  } else {
    $fname = test_input($_POST["first name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$fname)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["lname"])) {
    $nameErr = "Last name is required";
  } else {
    $lname = test_input($_POST["last name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$lname)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["uname"])) {
    $nameErr = "User name is required";
  } else {
    $uname = test_input($_POST["user name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$uname)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["pwd"])) {
    $pwdErr = "Password is required";
  } else {
    $pwd = test_input($_POST["password"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$pwd)) {
      $pwdErr = "Only letters and white space allowed";
    }
  }
  
  ?>
  <header>
  </header>
  <div>
    <form method="post">
      <label for="fname">First Name: </label><input type="text" id="fname" name="fname" value="<?php echo $fname;?>"><br/>
      <label for="lname">Last Name: </label><input type="text" id="lname" name="lname" value="<?php echo $lname;?>"><br/>
      <label for="uname">User Name: </label><input type="text" id="uname" name="uname" value="<?php echo $uname;?>"><br/>
      <label for="pwd">Password: </label><input type="password" id="pwd" name="pwd" value="<?php echo $pwd;?>"><br/>
      <input type="submit"/>
    </form>
  </div>
  <footer>
  </footer>
</body>
</html>
