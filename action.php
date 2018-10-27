<?php
include 'konek.php';
$username = $_POST['USERNAME'];
$password = $_POST['PASSWORD'];
$level = $_POST['LEVEL'];
$fullname = $_POST['FULLNAME'];
if(!empty(trim($username)) && !empty(trim($password)) && !empty(trim($level)) && !empty(trim($fullname))){
    $sql_insert="INSERT INTO user (username, password, level, fullname) VALUES ('$username','$password','$level', '$fullname')";
    mysqli_query($link,$sql_insert)or die(mysqli_error($link));
    
    echo '<script>
    alert("Data Berhasil Disimpan");
    location="index.php?"
    </script>';
}
else {
    echo '<script>
    alert("Tidak Boleh Kosong");
    location="login.php?"
    </script>';
}
?>