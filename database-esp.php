<?php
   $conn = mysqli_connect("localhost", "id10464480_weatherbox", "kingkise", "id10464480_weatherbox");
    $device_name    =   $_GET['rank'];
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    $sql        =   "SELECT device_status FROM devices_status WHERE device_name='$device_name'";
    $result=mysqli_query($conn,$sql);
    
    if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {    
      echo  $row["device_status"];
}
}
    $conn->close();
?>
