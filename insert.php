<?php
    include_once 'database.php';

    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $no_telp = $_POST["no_telp"];
    $kesan = $_POST["kesan"];

    $insert_db = mysqli_query($mysql, 'INSERT INTO pengunjung SET nama = "'.$nama.'", email = "'.$email.'", no_telp = "'.$no_telp.'", kesan = "'.$kesan.'"');

    header('Content-Type: application/json');
    if($insert_db){
        $response["success"] = true;
        $response["message"] = "Berhasil memasukkan data";
        $response["data"]["nama"] = $nama;
        $response["data"]["email"] = $email;
        $response["data"]["no_telp"] = $no_telp;
        $response["data"]["kesan"] = $kesan;
    
        echo json_encode($response);
    }else{
        $response["success"] = false;
        $response["message"] = "Gagal memasukkan data";

        echo json_encode($response);
    }