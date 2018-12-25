<?php 


require('../php/logic.php');

if(isset($_POST["daftar"])){
     
        if(daftar($_POST)>0){
            echo "<script>
            
                alert('berhasil daftar');
            
                    </script>";
        }else{
          
            echo mysqli_error($conn);
        };

};

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <table>
        <form action="" method="post">
        
        <tr>
            <td>nama</td>
            <td><div class="form-group">
              <input type="text" class="form-control" name="nama" id="" aria-describedby="helpId" placeholder="">
              <small id="helpId" class="form-text text-muted">Help text</small>
            </div></td>
        </tr>
        <tr>
            <td>email</td>
            <td><div class="form-group">
              
              <input type="email" class="form-control" name="email" id="" aria-describedby="helpId" placeholder="">
              <small id="helpId" class="form-text text-muted">Help text</small>
            </div></td>
        </tr>
         <tr>
            <td>password</td>
            <td><div class="form-group">
              <label for=""></label>
              <input type="password" class="form-control" name="password" id="" aria-describedby="helpId" placeholder="">
              <small id="helpId" class="form-text text-muted">Help text</small>
            </div>
            </td>
        </tr>
         <tr>
            <td>cek password</td>
            <td><div class="form-group">
              
              <input type="password" class="form-control" name="password1" id="" aria-describedby="helpId" placeholder="">
              <small id="helpId" class="form-text text-muted">Help text</small>
            </div>
            </td>
        </tr>

        <tr>
            
            <td>alamat sekarang</td>
            <td><div class="form-group">
              
              <input type="text" class="form-control" name="alamat_1" id="" aria-describedby="helpId" placeholder="">
              <small id="helpId" class="form-text text-muted">Help text</small>
            </div></td>
        
        </tr>

        <tr>
            
            <td>alamat asli</td>
            <td><div class="form-group">
              
              <input type="text" class="form-control" name="alamat_2" id="" aria-describedby="helpId" placeholder="">
              <small id="helpId" class="form-text text-muted">Help text</small>
            </div></td>
        
        </tr>

        <tr>
            
            <td>kota</td>
            <td><div class="form-group">
              
              <input type="text" class="form-control" name="kota" id="" aria-describedby="helpId" placeholder="">
              <small id="helpId" class="form-text text-muted">Help text</small>
            </div></td>
        
        </tr>

        <tr>
            
            <td>negara</td>
            <td><div class="form-group">
              
              <input type="text" class="form-control" name="negara" id="" aria-describedby="helpId" placeholder="">
              <small id="helpId" class="form-text text-muted">Help text</small>
            </div></td>
        
        </tr>

        <tr>
        
        <td>kode pos</td>
        <td><div class="form-group">
          
          <input type="text" class="form-control" name="kode_pos" id="" aria-describedby="helpId" placeholder="">
          <small id="helpId" class="form-text text-muted">Help text</small>
        </div></td>
        
        </tr>
        
        <input name="daftar" id="" class="btn btn-primary" type="submit" value="daftar">
        
        </form>

    </table>
</body>
</html>