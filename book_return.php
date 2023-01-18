<?php
include("new.php");

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "library";

$variable=$_POST["return"]; 

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $sql = "UPDATE issuebook SET ReturnDate = '2022-12-30' WHERE UserID = '1' AND BookID = (SELECT BookID FROM book WHERE book.title = '".$variable."' LIMIT 1)";

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

  $sql = "UPDATE Fine INNER JOIN issuebook ON Fine.UserID = issuebook.UserID AND Fine.BookID = issuebook.BookID
SET amount =
CASE
WHEN fine.UserID BETWEEN 1 AND 10 AND DATEDIFF(returndate, issuedate) > 7 THEN 500
WHEN fine.UserID BETWEEN 11 AND 20 AND DATEDIFF(returndate, issuedate) > 14 THEN 1000
END";

  // Prepare statement
  $stmt = $conn->prepare($sql);

  // execute the query
  $stmt->execute();

  // echo a message to say the UPDATE succeeded
  echo $stmt->rowCount() . " row UPDATED";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage();
}


$conn = null;
?>