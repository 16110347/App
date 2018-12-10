<?php 

$conn = mysqli_connect("localhost","root","","E-vent");

//var_dump($conn);

function kirim($data){
    global $conn;
    $nama = $data['nama'];
    $email = $data['email'];
    $password = $data['password'];
    $alamat = $data['alamat_1'];
    $alamat2 = $data['alamat_2'];
    $negara = $data['negara'];
    $kota = $data['kota'];
    $kodePos = $data['kode_pos'];

    $query = "INSERT INTO User_Login
                VALUES
                ('','$nama','$email','$password','$alamat','$alamat2','$kota','$negara','$kodePos')";

    mysqli_query($conn,$query);
    return mysqli_affected_rows($conn);
};


function posting($upload){


global $conn;
$gambar = $upload['gambar'];
$judul = $upload['judul'];
$lokasi = $upload['location'];
$tanggal = $upload['tanggal'];
$kontak = $upload['kontak'];
$deskripsi = $upload['deskripsi'];

        $query= "INSERT INTO upload_post
        
                        VALUES   
('','$gambar','$judul','$lokasi','$tanggal','$kontak','$deskripsi')";

mysqli_query($conn,$query);

return mysqli_affected_rows($conn);


}


?>

