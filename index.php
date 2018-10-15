<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        echo print_r($_POST);
        session_start();


        if ($_POST) {

            $errors = array();

            
            //start validation
            if (empty($_POST['name'])) {
                $errors['name1']="Name is Empty";
            }
             if (empty($_POST['age']) || !filter_var($_POST['age'],FILTER_VALIDATE_INT)==TRUE) {
                $errors['age1']="Enter Valid age";
            }
             if (empty($_POST['email'])|| !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)==TRUE) {
                $errors['email1']="Enter Valid email";
            }
             if (empty($_POST['year'])|| !filter_var($_POST['year'],FILTER_VALIDATE_INT)==TRUE) {
                $errors['year1']="Enter valid year";
            }



            //check errors
            if (count($errors) == 0) {
                //redirect to the sucess page
                $_SESSION['name']=$_POST['name'];
                 $_SESSION['age']=$_POST['age'];
                   $_SESSION['email']=$_POST['email'];
                     $_SESSION['year']=$_POST['year'];
                 
                header("Location: sucess.php");
                exit();
            }
        }
        ?>


        <form method="post" target="">
            <div>
                <label for="name">Name</label>
                <input type="text" name="name" id="name" value="<?php if(isset($_POST['name'])) echo $_POST['name'] ?>">
                <?php if(isset($errors['name1'])) echo $errors['name1'];?>
            </div>

            <div>
                <label for="name">Age</label>
                <input type="text" name="age" id="age" value="<?php if(isset($_POST['age'])) echo $_POST['age'] ?>">
                <?php if(isset($errors['age1'])) echo $errors['age1'];?>
            </div>

            <div>
                <label for="name">Email</label>
                <input type="text" name="email" id="email" value="<?php if(isset($_POST['email'])) echo $_POST['email'] ?>">
                <?php if(isset($errors['email1'])) echo $errors['email1'];?>
            </div>

            <div>
                <label for="name">Year</label>
                <input type="text" name="year" id="year" value="<?php if(isset($_POST['year'])) echo $_POST['year'] ?>">
                <?php if(isset($errors['year1'])) echo $errors['year1'];?>
            </div>

            <input type="submit" name="submit">


        </form>
    </body>
</html>
