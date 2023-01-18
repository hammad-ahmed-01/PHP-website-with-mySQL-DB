<?php
include("new.php");

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "library";

$variable=$_POST["book"]; 

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $sql = "UPDATE book SET NumberofIssues = NumberofIssues + 1 WHERE Title  = '".$variable."' LIMIT 1;";

  // Prepare statement
  $stmt = $conn->prepare($sql);

  // execute the query
  $stmt->execute();

  // echo a message to say the UPDATE succeeded
  echo $stmt->rowCount() . " row UPDATED";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

echo "<br>";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $sql = "UPDATE user SET UserIssue = UserIssue + 1 WHERE UserID = '1';";

  // Prepare statement
  $stmt = $conn->prepare($sql);

  // execute the query
  $stmt->execute();

  // echo a message to say the UPDATE succeeded
  echo $stmt->rowCount() . " row UPDATED";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}

echo "<br>";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $sql = "INSERT INTO issuebook 
  SELECT (SELECT IssueID FROM issuebook ORDER BY IssueID DESC LIMIT 1) + 1, UserID, BookID,'2022-12-30',NULL,5 FROM book, user 
  WHERE TITLE = '".$variable."' LIMIT 1;";

  // Prepare statement
  $stmt = $conn->prepare($sql);

  // execute the query
  $stmt->execute();

  // echo a message to say the UPDATE succeeded
  echo $stmt->rowCount() . " row ADDED";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}



$conn = null;
?>