<?php require_once 'conn.php'; require_once './statusCode.php'; $statusCode = $_POST['statusCode']; if (isset($statusCode) && isValidStatusCode($statusCode)){ $endpoint = "SELECT * FROM system_config WHERE id = '3306'";  $result = $conn->query($endpoint); if ($conn->error) {   die("FALSE：" . $conn->error);   } $res = $result -> fetch_all(MYSQLI_ASSOC); header("Content-Type: application/json; charset=utf-8");  echo json_encode([ "errno" => 0,  "info" => $res[0], ]); $conn->close();   }else{header('Content-Type: application/json'); echo json_encode([ 'errno' => 1, 'message' => '无权访问！！！' ]);} ?>  