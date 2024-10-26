<?php

function readJSONDataFromFile($filename)
{
  if (file_exists($filename)) {
    $data = file_get_contents($filename);
    return json_decode($data, true);
  }
  return array();
}

function writeJSONDataToFile($data, $filename)
{
  $data = json_encode($data, JSON_PRETTY_PRINT);
  file_put_contents($filename, $data);
}

$filename = "data.json";
$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $data = isset($_POST['data']) ? $_POST['data'] : "";
  $decodedData = json_decode($data, true);

  if (json_last_error() == JSON_ERROR_NONE) {
    writeJSONDataToFile($decodedData, $filename);
    $message = "Data successfully saved!";
  } else {
    $message = "Invalid JSON data!";
  }
} else {
  $dataArray = readJSONDataFromFile($filename);
  $data = json_encode($dataArray, JSON_PRETTY_PRINT);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>JSON Data Editor</title>
</head>

<body>
  <h1>JSON Data Editor</h1>
  <?php if ($message)
    echo "<p>$message</p>"; ?>
  <form method="post" action="">
    <textarea name="data" rows="20" cols="50"><?php echo htmlspecialchars($data); ?></textarea>
    <br><br>
    <input type="submit" value="Save JSON Data">
  </form>
</body>

</html>