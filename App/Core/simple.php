<?php

        try {
            $db = new \PDO('mysql:host=localhost;dbname=class_student;charset=utf8', 'roma', 'longPassword');
        } catch (PDOExpection $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }  
        $slon = 'sl@gmail.com';
        $sql = 'SELECT email FROM Student WHERE email = :email';
        $email = $db->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $email->execute(array(':email' => $slon));
        $result = $email->fetchAll();
        echo empty($result);
