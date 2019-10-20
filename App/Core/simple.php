<?php
$json = file_get_contents(__DIR__ . '/Environment.json');
$json_data = json_decode($json, true);
$db = $json_data['db'];

        try {
            $db = new \PDO("mysql:host={$db['host']};dbname={$db['dbname']};charset={$db['charset']}", "{$db['user']}", "{$db['password']}");
        } catch (PDOExpection $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }  
        $slon = 'slon@gmail.com';
        $sql = 'SELECT email FROM student WHERE email = :email';
        $email = $db->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
        $email->execute(array(':email' => $slon));
        $result = $email->fetchAll();
        print_r($result);
