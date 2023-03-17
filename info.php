<?php
include 'koneksi.php';


$sql1 = "SELECT * FROM info";
$result1 = $conn->query($sql1);
$response['info'] = array();




  while($row1 = $result1->fetch_assoc()) {
    $data['keywords']=($row1['keywords']);
    $data['ytapi']=($row1['ytapi']);
    array_push($response["info"],$data);

  }
echo json_encode($response);


$conn->close();
?>