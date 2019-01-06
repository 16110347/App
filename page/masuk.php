<?php 

            session_start();

            if(isset($_SESSION["login"])){
                header("Location: ../halaman.php");
            }

        require('../php/logic.php');

        if(isset($_POST["masuk"])){

            $username = $_POST["username"];
            $password = $_POST["password"];

        $result =  mysqli_query($conn,"SELECT * FROM User_Login WHERE nama ='$username'");

        if(mysqli_num_rows($result) === 1 ){

            $row = mysqli_fetch_assoc($result);
        if( password_verify($password, $row["password"])){ 

                $_SESSION["login"] = true;

                header("Location: ../halaman.php");
                
                exit;

        }
        }

            $error = true;

        }

    ?>


    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>login</title>
        <link rel="stylesheet" href="styleAll.css">
        <link rel="stylesheet" href="bootstrap.css">
    </head>
    <body class="opa" style=" background-image: url('img/bg 1.png');">


        <!-- <?php if (isset($error)) : ?>
                <pre>username dan password salah</pre>
        <?php endif; ?> -->
        
        <form action="" method="post">
        
       
       <div class="kotak_login">
		<h1 class="tulisan_login">LOGIN</h1>
		<form>
		
			<input type="text" name="username" class="form_login" placeholder="Username">
 <br>
			
			<input type="password" name="password" class="form_login" placeholder="Password">
 <br>
 <center>
			<input type="submit" class="tombol_login" value="masuk" name="masuk"><br>
            <a style="margin-top:10px; color:white;" href="daftar.php" >daftar</a>
 </center>
		</form>
		

	</div>
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
       
        <!-- <table>
        
        <tr>

            <td>username</td>
            <td>
                <div class="form-group" ">
                <input type="text" class="form_login"  name="username" id="" aria-describedby="helpId" placeholder="">
                <small id="helpId" class="form-text text-muted">Help text</small>
                </div>
            </td>

        </tr>

        <tr>

            <td>password</td>
        <td>
            <div class="form-group">
            <input type="password" class="form_login" name="password" id="" aria-describedby="helpId" placeholder="">
            <small id="helpId" class="form-text text-muted">Help text</small>
            </div>
        </td>

        </tr>
            
        <input name="masuk" id="" class="btn btn-primary" type="submit" value="masuk">   
        <a href="daftar.php" >daftar</a> 
        </table> -->
        
        
        
        </form>


    </body>
    </html>