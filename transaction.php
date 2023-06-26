<?php

// Get form data
$emails = $_POST['emails'];
$UpLoc = $_POST['UpLoc'];
$DoLoc = $_POST['DoLoc'];
$PDate = $_POST['PDate'];
$DoDate = $_POST['DoDate'];
$PTime = $_POST['PTime'];
$PCard = $_POST['PCard'];
$Cnum = $_POST['Cnum'];
$MY = $_POST['MY'];
$CCV = $_POST['CCV'];


// Database connection
// 3307 port on XAMP
$conn = new mysqli('localhost:3307', 'root', '', 'test');

if ($conn->connect_error){
    die("Connection failed : " .$conn->connect_error);
} else {

    // Prepare the SQL statement
    $stmt = $conn->prepare("INSERT INTO payment(Email, UpLoc, DoLoc, PDate, DoDate, DoDate, PCard, Cnum, MY, CCV) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssssssss", $emails, $UpLoc, $DoLoc, $PDate, $DoDate, $PTime, $PCard, $Cnum, $MY, $CCV);

    // Execute the statement
    $stmt->execute();
    $note = "Payment Obtain";

    // Echoing the note within a tab
    echo '<div class="tab">
              <div class="tab-content">' . $note . '</div>
          </div>';

    $stmt->close();
    $conn->close();
    
    // Redirect to the login form after a delay
    header("Refresh: 3; url=test.html");
}

?>