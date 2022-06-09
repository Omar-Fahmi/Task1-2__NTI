<?php


    function clean($input){

        $input = trim($input);
        $input = stripslashes($input);
        $input = strip_tags($input);


        return $input;
    }


    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $name = clean($_POST['name']);
        $email = clean($_POST['email']);
        $password = clean($_POST['password']);
        $gender = clean($_POST['gender']);
        $adress = clean($_POST['adress']);
        $URL = clean($_POST['URl']);
        $CV = clean($_POST['file']);
        

        $errors = [];

        #name validayion
        if (empty($name)) {
            $errors['name'] = 'This Field is required';
            
        }elseif (!preg_match("/^[a-zA-z]*$/", $name) ) {
            $errors['name'] = 'Name accepts only letters';
        }

        #email validation
        if (empty($email)) {
            $errors['email'] = 'Email is required';
            
        }elseif (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = "Invaild email adress";
        }

        #password validatio
        if (empty($password)) {
            $errors['password'] = 'This field is required';

        }elseif (strlen($password) < 6) {
            $errors['pasword'] = 'password mustn`t be less than 6 chars';
        
        }elseif (!preg_match ("/^[0-9]*$/", $password)) {
            $errors['password'] = 'password must be only numbers';
        }

        #adress validation
        if (empty($adress)) {
            $errors['adress'] = 'this field is required';
        
        }elseif (!strlen($adress) == 6) {
            $errors['adress'] = 'adress must be only 10 chars';
        }

        #gender validation
        if (empty($gender)) {
            $errors['gender'] = 'This field is required';
        
        }elseif (!preg_match("/Male/", $gender) && !preg_match ("/Female/", $gender)) {
            $errors['gender'] = 'gender must be male or female';
        }

        #url validation
        if (empty($URL)) {
            $errors['URL'] = 'This field is required';
            # code...
        }elseif (!filter_var($URL, FILTER_VALIDATE_URL)) {
            $errors['URL'] = 'Invalid URL';
        }elseif (!preg_match("/https://www.linkedin.com/")) {
            $errors['URL'] = 'It must be linkedin URL';
        }

        #ceck all erros
        if (count($errors) > 0) {

            foreach ($errors as $key => $value) {
                
                echo $key . ' : ' . $value . '<br>';
            }
        }
        
        
    if (!empty($_FILES['file']['name'])) {

        $tempName  = $_FILES['file']['tmp_name'];
        $fileName = $_FILES['file']['name'];
        $fileType = $_FILES['file']['type'];

        $extensionArray = explode('/', $fileType);
        $extension =  strtolower( end($extensionArray));

        $allowedExtensions = ['pdf']; 

        if (in_array($extension, $allowedExtensions)) {

            $finalName = uniqid() . time() . '.' . $extension;

            $disPath = 'C:/xampp/htdocs/group14/Task_day4/uploaded/' . $finalName;

            if (move_uploaded_file($tempName, $disPath)) {
                echo 'File Uploaded Successfully';
            } else {
                echo 'File Uploaded Failed';
            }
        } else {
            echo 'File Type Not Allowed';
        }
    } else {
        echo 'Please Select File';
    }

 
    }

?>