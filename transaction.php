<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get form data
    $Email = $_POST['Email'];
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
    // 3307 port on XAMPP
    $conn = new mysqli('localhost:3307', 'root', '', 'test');

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } else {

        // Prepare the SQL statement
        $stmt = $conn->prepare("INSERT INTO payment(Email, UpLoc, DoLoc, PDate, DoDate, PTime, PCard, Cnum, MY, CCV) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssssssss", $Email, $UpLoc, $DoLoc, $PDate, $DoDate, $PTime, $PCard, $Cnum, $MY, $CCV);

        // Execute the statement
        if ($stmt->execute()) {
            $note = "Import Successful";
        } else {
            $note = "Error: " . $stmt->error;
        }

        $stmt->close();
        $conn->close();

        // Echoing the note within a tab
        echo '<div class="tab">
              <div class="tab-content">' . $note . '</div>
          </div>';

        // Redirect to the login form after a delay
        header("Refresh: 3; url=car.php");
        exit();
    }
}
?>