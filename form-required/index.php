<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>form required</title>
  <style>
    .error {
      color: #FF0000;
    }
  </style>
</head>

<body>

  <?php
  //define variable and set to empty value...
  
  $nameErr = $emailErr = $websiteErr = $genderErr = "";
  $name = $email = $website = $comments = $gender = "";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
      $nameErr = "Name Is Required";
    } else {
      $name = test_input($_POST["name"]);
      if (!preg_match("`/^[a-zA-Z-' ]*$/`", $name)) {
        $nameErr = "Only letters and white space allowed";
      }
    }

    if (empty($_POST["email"])) {
      $emailErr = "Email is required";
    } else {
      $email = test_input($_POST["email"]);
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailErr = "Invalid email format";
      }
    }

    if (empty($_POST["website"])) {
      $website = "";
    } else {
      $website = test_input($_POST["website"]);
      // check if URL address syntax is valid
      if (!preg_match("`/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i`", $website)) {
        $websiteErr = "Invalid URL";
      }
    }

    if (empty($_POST["comments"])) {
      $comments = "";
    } else {
      $comments = test_input($_POST["comments"]);
    }


    if (empty($_POST["gender"])) {
      $gender = "";
    } else {
      $gender = test_input($_POST["gender"]);
    }
  }

  function test_input($data)
  {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

  ?>


  <h2>php form validation example</h2>
  <p><span class="error">* requied filled</span></p>

  <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

    Name: <input type="text" name="name">
    <span class="error">* <?php echo $nameErr; ?> </span>

    <br><br>

    E-mail: <input type="text" name="email">
    <span class="error">* <?php echo $emailErr ?></span>

    <br><br>

    website: <input type="text" name="website">
    <span class="error"> <?php echo $websiteErr ?></span>

    <br><br>

    Comments: <textarea name="comments" rows="5" cols="40"></textarea>
    <br><br>

    Gender:
    <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">female
    <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">male
    <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">other
    <span class="error">* <?php echo $genderErr ?></span>

    <br><br>

    <input type="submit" name="submit" value="submit">
  </form>


  <?php
  echo "<h2>your input:</h2>";
  echo $name;
  echo "<br>";
  echo $email;
  echo "<br>";
  echo $website;
  echo "<br>";
  echo $comments;
  echo "<br>";
  echo $gender;
  echo "<br>"
    ?>

</body>

</html>