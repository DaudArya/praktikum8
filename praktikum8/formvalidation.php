<!DOCTYPE html>
<head>
<link 
href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" 
rel="stylesheet" 
integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" 
crossorigin="anonymous">
</head>
<!-- Perintah dalam <head> adalah perintah untuk melakukan koneksi ke bootstrap versi 5.1.3 
    beserta dengan plugin integrity dan crossorigin untuk menyambungkan hasil coding dengan library CSS bootstrap-->
<style>
    .warning{color:#FF000;}
    /*Memberikan warna pada popup warning ketika ada kesalahan dalam input*/ 
</style>
<body>
    <?php
    $error_nama="";
    $error_email="";
    $error_web="";
    $error_pesan="";
    $error_telp="";

    $nama="";
    $email="";
    $web="";
    $pesan="";
    $telp="";
// pengecekan untuk fiel yang masih kosong disetiap isian, jika field ada yanng masih kosong maka akan menampilkan warning ketika submit data
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(empty($_POST["nama"]))
        {
            $error_nama = "Nama tidak boleh kosong";//Menampilkan error jika inputan itus username kosong
        }else{
            $nama = cek_input($_POST["nama"]);
            if(!preg_match("/^[a-zA-Z ]*$/",$nama))
            {
                $error_nama = "inputan hanya boleh huruf dan spasi"; //Menampilkan error jika inputan itus username hanya bisa diisi oleh huruf dan spasi
            }
        }
        if(empty($_POST["email"]))
        {
            $error_email = "Email tidak boleh kosong"; //Menampilkan error jika inputan email kosong
        }
        else{
            $email = cek_input($_POST["email"]);
            if(!filter_var($email, FILTER_VALIDATE_EMAIL))
            {
                $error_email="Format Email Invalid"; //Menampilkan error jika inputan email tidak berbentuk format email 
            }
        }
        if(empty($_POST["pesan"])){
            $error_pesan = "Pesan tidak boleh kosong"; //Menampilkan error jika inputan itus pesan kosong
        }else
        {
            $pesan = cek_input($_POST["pesan"]);
        }
        if (empty($_POST["web"])){
            $error_web = "website tidak boleh kosong"; //Menampilkan error jika inputan itus website kosong
        }
        else
        {
            $web = cek_input ($_POST["web"]);
            if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$web))
            {
                $error_web = "URL tidak valid"; // Menampilkan error jika URL tidak valid
            }
        }
        if (empty($_POST["telp"]))
        {
            $error_telp = "Telp tidak boleh kosong"; // Menampilkan error jika inputan telepon kosong
        }
        else 
        {
            $telp = cek_input ($_POST["telp"]); 
            if (!is_numeric($telp)) // Memastikan inputan yang dimasukkan berupa angka saja
            {
                $error_telp = 'Nomor HP hanya boleh angka'; // Menampilkan error jika inputan yang dimasukkan selain angka
            }
	    }

    }
    
    function cek_input($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    // fungsi cek_input berfungsi mengecek apakah data yang diinput memenuhi tiga pengecekan yang ada didalam fungsi tersebut
    ?>
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <!-- Header -->
                <div class="card-header">
			        Contoh Validasi Form dengan PHP
		        </div>

		    <div class="card-body">
	        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 

            <!-- menampilkan field form name -->
            <div class="form-group row">
			    <label for="nama" class="col-sm-2 col-form-label"> Nama </label>
			    <div class="col-sm-10">
				    <input type="text" name="nama" class="form-control <?php echo($error_nama !="" ? "is-invalid" : ""); ?>" 
				        id="nama" placeholder="nama" value="<?php echo $nama; ?>"><span class="warning"><?php echo $error_nama; ?></span>
			    </div>
		    </div>

            <!-- menampilkan field isian email  -->
            <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="text" name="email" class="form-control <?php echo($error_email !="" ? "is-invalid" : ""); ?>" id="email"
                    placeholder="email" value="<?php echo $email; ?>"> <span class="warning"><?php echo $error_email; ?></span>
                </div>
            </div>

            <!-- menampilkan field web  -->
            <div class="form-group row">
                <label for="web" class="col-sm-2 col-form-label">Website</label>
                <div class="col-sm-10">
                    <input type="text" name="web" class="form-control <?php echo($error_web !="" ? "is-invalid" : ""); ?>" id="web"
                    placeholder="web" value="<?php echo $web; ?>"> <span class="warning"><?php echo $error_web; ?></span>
                </div>
            </div>

            <!-- menampilkan field nomor telpon  -->
            <div class="form-group row">
                <label for="telp" class="col-sm-2 col-form-label">Telp</label>
                <div class="col-sm-10">
                    <input type="text" name="telp" class="form-control <?php echo($error_telp !="" ? "is-invalid" : ""); ?>" id="telp"
                    placeholder="telp" value="<?php echo $telp; ?>"> <span class="warning"><?php echo $error_telp; ?></span>
                </div>
            </div>

            <!-- menampilkan field pesan  -->
            <div class="form-group row">
                <label for="pesan" class="pesan">Pesan</label>
                <div class="col-sm-10">
                    <textarea name="pesan" class="form-control <?php echo($error_pesan !="" ? "is-invalid" : ""); ?>"><?php echo $pesan; ?></textarea><span class="warning"><?php echo $error_pesan; ?></span>
                </div>
            </div>

            <br>
            <div class="form-group row">
                <div class="col-sm-10">
                    <button class="btn btn-primary" type="submit">Sign In</button>
                    <!-- tombol button submit data   -->
                </div>
            </div>
        </form>
    </div>
</div>
</div>
</div>
<?php
// menampilkan hasil dari inputan 
echo "<h2>Your Input</h2>";
echo "Nama = " .$nama;
echo "<br>";
echo "Email = " .$email;
echo "<br>";
echo "Website = " .$web;
echo "<br>";
echo "Nomor Telfon = " .$telp;
echo "<br>";
echo "Pesan = " .$pesan;
?> 
</body>
</html>