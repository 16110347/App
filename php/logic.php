<?php 

$conn = mysqli_connect("localhost","root","","E-vent");

//var_dump($conn);

// tampil data upload

$result = mysqli_query($conn,"SELECT * FROM upload_post ORDER BY id_upload DESC");

// while ($upload = mysqli_fetch_assoc($result)){

// var_dump($upload["judul"]);
//     }



//tambah user baru
function kirim($data){
    global $conn;
    $nama = htmlspecialchars($data['nama']);
    $email =htmlspecialchars($data['email']);
    $password =htmlspecialchars($data['password']);
    $alamat =htmlspecialchars($data['alamat_1']) ;
    $alamat2 = htmlspecialchars($data['alamat_2']);
    $negara =htmlspecialchars($data['negara']);
    $kota =htmlspecialchars($data['kota']);
    $kodePos =htmlspecialchars($data['kode_pos']);

    $query = "INSERT INTO User_Login
                VALUES
                ('','$nama','$email','$password','$alamat','$alamat2','$kota','$negara','$kodePos')";

    mysqli_query($conn,$query);
    return mysqli_affected_rows($conn);
};

//upload postingan
function posting($upload){


global $conn;


$judul = $upload['judul'];
$lokasi = $upload['location'];
$tanggal = $upload['tanggal'];
$kontak = $upload['kontak'];
$deskripsi = $upload['deskripsi'];

$gambar = gambar();
       if(!$gambar){
   
        return false;
   
    };

        $query= "INSERT INTO upload_post
        
                        VALUES   
('','$gambar','$judul','$lokasi','$tanggal','$kontak','$deskripsi')";

mysqli_query($conn,$query);

return mysqli_affected_rows($conn);


}


 
  //0755 adalah permision untuk folder dan 0644 permision untuk file
 

function gambar(){

    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmp = $_FILES['gambar']['tmp_name'];

    // pilih img
    if($error === 4){
        echo "<script>
        
                alert('Masukan Gambar dulu');
        
        </script>";
        return false;
    }

    $ekstensiGambarValid = ['jpg','jpeg','png'];
    $ekstensiGambar = explode('.',$namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));

    if(!in_array($ekstensiGambar,$ekstensiGambarValid)){
        
        echo "<script>
        
            alert('yang anda upload bukan gambar');
        
        
        </script>";

        return false;
    }

 if($ukuranFile > 1000000){

    echo "<script>
    
            alert('pilihan gambar terlalu besar');
    
    </script>";
    return false;
 }

 move_uploaded_file($tmp,'img/'.$namaFile);

 return $namaFile;

}


function cari($data){
    global $conn;
    $query = "SELECT * FROM upload_post WHERE judul = '$data'";
    $result =mysqli_query($conn,$query);

    return $row;
}

function daftar($data){
    global $conn;


    $user =  strtolower(stripslashes($data["nama"]));
    $email = $data["email"];
    $password = mysqli_real_escape_string( $conn, $data["password"]);
    $password2 = mysqli_real_escape_string( $conn, $data["password1"]);
    $alamat1 =strtolower(stripslashes($data["alamat_1"]));
    $alamat2 =strtolower(stripslashes($data["alamat_2"]));
    $kota =strtolower(stripslashes($data["kota"]));
    $negara =strtolower(stripslashes($data["negara"]));
    $kodepos =strtolower(stripslashes($data["kode_pos"]));


    $result= mysqli_query($conn,"SELECT nama FROM User_Login WHERE nama ='$user'");
   
    if(mysqli_fetch_assoc($result)){
        echo "<script>
        
        alert('konfirmasi tidak sesuai');
        
        </script>";

        return false;
    }
    
    
    
    if($password !== $password2){
        echo "<script>
        
            alert('konfirmasi tidak sesuai');
        
        </script>";

         return false;
    }

    $password = password_hash($password, PASSWORD_DEFAULT);
    
    mysqli_query($conn, "INSERT INTO User_Login VALUES
                        ('','$user','$email','$password','$alamat1','$alamat2','$kota','$negara','$kodepos')");
     
     return mysqli_affected_rows($conn);

}




//  img(){
//      $namaFile = $_FILES
//  }

?>

