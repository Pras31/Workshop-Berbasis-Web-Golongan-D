<?php
    try {
        $dbh = new PDO("mysql:host=localhost; dbname=pdo_1", "root", "");
        $dbh -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo "Berhasil terhubung ke dalam database";    
    } catch (PDOException $e) {
        echo $e->getMessage();
    }  
?>