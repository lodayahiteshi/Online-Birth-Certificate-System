<?php
include './database_connect.php';
if (!empty($_GET['aadhar_id'])) {
    if (isset($_GET['aadhar_id'])) {
        $id = $_GET['aadhar_id'];
        $sql = "SELECT * FROM other_info WHERE id= $id";
        $result = mysqli_query($con, $sql);
        $file = mysqli_fetch_assoc($result);
        $fileName = $file['aadharproof'];
        $filePath = '../aadharproof/' . $file['aadharproof'];

        if (file_exists($filePath)) {
            //define header
            header("Cache-Control: public");
            header("Content-Description: File Transfer");
            header("Content-Disposition: attachment; filename=$fileName");
            header("Content-Type: application/pdf");
            header("Content-Transfer-Encoding: binary");

            //read file 
            readfile($filePath);
            exit;
        } else {
            echo "file not exit";
        }
    }
}
if (!empty($_GET['aff_id'])) {
    if (isset($_GET['aff_id'])) {
        $id = $_GET['aff_id'];
        $sql = "SELECT * FROM other_info WHERE id= $id";
        $result = mysqli_query($con, $sql);
        $file = mysqli_fetch_assoc($result);
        $fileName = $file['affproof'];
        $filePath = '../affproof/' . $file['affproof'];

        if (file_exists($filePath)) {
            //define header
            header("Cache-Control: public");
            header("Content-Description: File Transfer");
            header("Content-Disposition: attachment; filename=$fileName");
            header("Content-Type: application/pdf");
            header("Content-Transfer-Encoding: binary");

            //read file 
            readfile($filePath);
            exit;
        } else {
            echo "file not exit";
        }
    }
}
?>


<!-- <html> -->