<?php

require_once "Connect.php";

// mendfinisikan variabel menjadi variabel yang kosong
$jnsp = $tglm = $nis = $npu = $paud = $tk = $skhu = $ijz = $hb = $ct = $nama = $gndr = $nisn = $nik = $tpl = $tl = $rlg = $bk = $almt = $kdp = $sttg = $trns = $hp= $mail= $kps = $nkps = $reg = $dad = $ybd = $std = $wd = $sd = $dd= $mom= $ybm = $stm = $wm= $sm= $mm= "";
$jnsp_er = $tglm_er = $nis_er = $npu_er = $paud_er = $tk_er = $skhu_er = $ijz_er = $hb_er = $ct_er = $nama_er = $gndr_er = $nisn_er = $nik_er = $tpl_er = $tl_er = $rlg_er = $bk_er = $almt_er = $kdp_er = $sttg_er = $trns_er = $hp_er = $mail_er= $kps_er = $nkps_er = $reg_er = $dad_er = $ybd_er = $std_er = $wd_er = $sd_er = $dd_er = $mom_er = $ybm_er = $stm_er = $wm_er = $sm_er = $mm_er = "";

function cek_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
    // Validasi Jenis Masuk siswa
    
        if(empty($_POST["jnsp"])){
            $jnsp_er = "pilihan harus di pilih";
        }else{
            $jnsp =cek_input($_POST["jnsp"]);
            $jnsp_er="";
        }
    

    // Validasi tanggal masuk sekolah siswa
    $input_tglm= trim($_POST["tglm"]);
    if(empty($input_tglm)){
        $tglm_er = "Silahkan Masukkan Tanggal Masuk Siswa";
    } else{
        $tglm = $input_tglm;
    }

    // Validasi Nomor Induk siswa
    $input_nis= trim($_POST["nis"]);
    if(empty($input_nis)){
        $nis_er= "Silahkan Masukkan Nomor Induk Siswa";
    } else{
        $nis = $input_nis;
    }

    // Validasi Nomor Peserta Ujian
    $input_npu= trim($_POST["npu"]);
    if(empty($input_npu)){
        $npu_er= "Silahkan Masukkan Nomor Induk Siswa";
    } else{
        $npu = $input_npu;
    }

    // Validasi Pernahkah besekolah di paud
    
        if(empty($_POST["paud"])){
            $paud_er = "pilihan harus di pilih";
        }else{
            $paud =cek_input($_POST["paud"]);
            $paud_er="";
        }
    

    // Validasi Pernahkah besekolah di TK
    
        if(empty($_POST["tk"])){
            $tk_er = "pilihan harus di pilih";
        }else{
            $tk =cek_input($_POST["tk"]);
            $tk_er="";
        }
    

    // Validasi isian SKHUN
    $input_skhu= trim($_POST["skhu"]);
    if(empty($input_skhu)){
        $skhu_er= "Silahkan Masukkan Keterangan SKHUN Siswa";
    } else{
        $skhu= $input_skhu;
    }

    // Validasi isian ijazah
    $input_ijz= trim($_POST["ijz"]);
    if(empty($input_ijz)){
        $ijz_er= "Silahkan Masukkan Keterangan Ijazah Siswa";
    } else{
        $ijz= $input_ijz;
    }

    // Validasi Hobi siswa
    $input_hb= trim($_POST["hb"]);
    if(empty($input_hb)){
        $hb_er= "Silahkan Masukkan Keterangan";
    } else{
        $hb = $input_hb;
    }

    // Validasi Cita cita siswa
    $input_ct= trim($_POST["ct"]);
    if(empty($input_ct)){
        $ct_er= "Silahkan Masukkan Keterangan";
    } else{
        $ct= $input_ct;
    }

    // Validasi nama siswa
    $input_nama = trim($_POST["nama"]);
    if(empty($input_nama)){
        $nama_er = "Silahkan Masukkan Nama Anda.";
    } elseif(!filter_var($input_nama, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $nama_er = "Tolong Masukkan Nama yang Benar.";
    } else{
        $nama = $input_nama;
    }

    // Validasi Gender
    
        if(empty($_POST["gndr"])){
            $gndr_er= "pilihan harus di pilih";
        }else{
            $gndr =cek_input($_POST["gndr"]);
            $gndr_er="";
        }
    

    // Validasi Nomor Induk siswa Nasional
    $input_nisn= trim($_POST["nisn"]);
    if(empty($input_nisn)){
        $nisn_er= "Silahkan Masukkan Nomor Induk Siswa Nasional";
    } else{
        $nisn = $input_nisn;
    }

    // Validasi Nomor Induk Kependudukan
    $input_nik= trim($_POST["nik"]);
    if(empty($input_nik)){
        $nik_er= "Silahkan Masukkan Nomor Induk Kependudukan Siswa";
    } else{
        $nik = $input_nik;
    }

    // Validasi Tempat Lahir
    $input_tpl= trim($_POST["tpl"]);
    if(empty($input_tpl)){
        $tpl_er= "Silahkan Masukkan Tempat lahir siswa";
    } else{
        $tpl = $input_tpl;
    }

    // Validasi tanggal Lahir
    $input_tl= trim($_POST["tl"]);
    if(empty($input_tl)){
        $tl_er= "Silahkan Masukkan Tempat lahir siswa";
    } else{
        $tl = $input_tl;
    }

    // Validasi Agama
    $input_rlg= trim($_POST["rlg"]);
    if(empty($input_rlg)){
        $rlg_er= "Silahkan Masukkan Agama siswa";
    } else{
        $rlg = $input_rlg;
    }
    
    // Validasi Kebutuhab khusus siswa
    $input_bk= trim($_POST["bk"]);
    if(empty($input_bk)){
        $bk_er= "Silahkan Masukkan Jenis Kebutuhan khusus Siswa";
    } else{
        $bk = $input_bk;
    }

    // Validasi Alamat Siswa
    $input_almt= trim($_POST["almt"]);
    if(empty($input_almt)){
        $almt_er= "Silahkan Masukkan Alamat Siswa";
    } else{
        $almt = $input_almt;
    }

    // Validasi Kode Pos
    $input_kdp= trim($_POST["kdp"]);
    if(empty($input_kdp)){
        $kdp_er= "Silahkan Masukkan Kode Pos";
    } else{
        $kdp = $input_kdp;
    }

    // Validasi Status Tinggal
    
        if(empty($_POST["sttg"])){
            $sttg_er = "pilihan harus di pilih";
        }else{
            $sttg =cek_input($_POST["sttg"]);
            $sttg_er="";
        }
    

    // Validasi Moda Transportasi Siswa
    $input_trns= trim($_POST["trns"]);
    if(empty($input_trns)){
        $trns_er= "Silahkan Masukkan Moda Transportasi Siswa";
    } else{
        $trns = $input_trns;
    }

    // Validasi Nomor Telepon
    $input_hp= trim($_POST["hp"]);
    if(empty($input_hp)){
        $hp_er= "Silahkan Masukkan Nomor Telepon Siswa";
    } else{
        $hp = $input_hp;
    }

    //validasi email siswa

    if(empty($_POST["mail"]))
    {
            $mail_er = "Email tidak boleh kosong"; //Menampilkan error jika inputan email kosong
        }
        else{
            $mail = cek_input($_POST["mail"]);
            if(!filter_var($mail, FILTER_VALIDATE_EMAIL))
            {
                $mail_er="Format Email Salah"; //Menampilkan error jika inputan email tidak berbentuk format email 
            }
    }

    // Validasi Status KPS
    
        if(empty($_POST["kps"])){
            $kps_er = "pilihan harus di pilih";
        }else{
            $kps =cek_input($_POST["kps"]);
            $kps_er="";
        }
    

    // Validasi nomor KPS
    $input_nkps= trim($_POST["nkps"]);

    // Validasi Kewarga negaraan
    $input_reg= trim($_POST["reg"]);
    if(empty($input_reg)){
        $reg_er= "Silahkan Masukkan Kewarganegaraan Siswa";
    } else{
        $reg = $input_reg;
    }

    // Validasi nama Ayah
    $input_dad = trim($_POST["dad"]);
    if(empty($input_dad)){
        $dad_er = "Silahkan Masukkan Nama Ayah.";
    } elseif(!filter_var($input_dad, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        $dad_er = "Tolong Masukkan Nama yang Benar.";
    } else{
        $dad = $input_dad;
    }

    // Validasi Tanggal lahir Ayah
    $input_ybd= trim($_POST["ybd"]);
    if(empty($input_ybd)){
        $ybd_er= "Silahkan Masukkan Tanggal lahir ayah";
    } else{
        $ybd = $input_ybd;
    }


    // Validasi Pendidikan Ayah
    
        if(empty($_POST["std"])){
            $std_er = "pilihan harus di pilih";
        }else{
            $std =cek_input($_POST["std"]);
            $std_er="";
        }
    

    // Validasi Pekerjaan Ayah
    $input_wd= trim($_POST["wd"]);
    if(empty($input_wd)){
        $wd_er= "Silahkan Masukkan Pekerjaan Ayah";
    } else{
        $wd = $input_wd;
    }

    // Validasi Gaji Ayah
    $input_sd= trim($_POST["sd"]);
    if(empty($input_sd)){
        $sd_er= "Silahkan Masukkan Keterangan Gaji Ayah";
    } else{
        $sd = $input_sd;
    }

    // Validasi Ayah Berkebutuhan Khusus
    $input_dd= trim($_POST["dd"]);
    if(empty($input_dd)){
        $dd_er= "Silahkan Masukkan Keterangan";
    } else{
        $dd = $input_dd;
    }


        // Validasi nama Ibu
        $input_mom = trim($_POST["mom"]);
        if(empty($input_mom)){
            $mom_er = "Silahkan Masukkan Nama Ibu.";
        } elseif(!filter_var($input_mom, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
            $mom_er = "Tolong Masukkan Nama yang Benar.";
        } else{
            $mom = $input_mom;
        }
    
        // Validasi Tanggal lahir Ibu
        $input_ybm= trim($_POST["ybm"]);
        if(empty($input_ybm)){
            $ybm_er= "Silahkan Masukkan Tanggal lahir Ibu";
        } else{
            $ybm = $input_ybm;
        }
    
    
        // Validasi Pendidikan Ibu
        
            if(empty($_POST["stm"])){
                $stm_er = "pilihan harus di pilih";
            }else{
                $stm =cek_input($_POST["stm"]);
                $stm_er="";
            }
        
    
        // Validasi Pekerjaan Ibu
        $input_wm= trim($_POST["wm"]);
        if(empty($input_wm)){
            $wm_er= "Silahkan Masukkan Pekerjaan Ibu";
        } else{
            $wm = $input_wm;
        }
    
        // Validasi Gaji Ibu
        $input_sm= trim($_POST["sm"]);
        if(empty($input_sm)){
            $sm_er= "Silahkan Masukkan Keterangan Gaji Ibu";
        } else{
            $sm = $input_sm;
        }
    
        // Validasi Ibu Berkebutuhan Khusus
        $input_mm= trim($_POST["mm"]);
        if(empty($input_mm)){
            $mm_er= "Silahkan Masukkan Keterangan";
        } else{
            $mm = $input_mm;
        }

        
    // menjalankan pengecekan apakah ada data yang kosong
    if(empty($jnsp_er) && empty($tglm_er) && empty($nis_er) && empty($npu_er) && empty($paud_er) && empty($tk_er) && empty($skhu_er) && empty($ijz_er) && empty($hb_er) && empty($ct_er) && empty($nama_er) && empty($gndr_er) && empty($nisn_er) && empty($nik_er) && empty($tpl_er) && empty($tl_er) && empty($rlg_er) && empty($bk_er) && empty($almt_er) && empty($kdp_er) && empty($sttg_er) && empty($trns_er) && empty($hp_er) && empty($mail_er) && empty($kps_er) && empty($nkps_er) && empty($reg_er) && empty($dad_er) && empty($ybd_er) && empty($std_er) && empty($wd_er) && empty($sd_er) && empty($dd_er) && empty($mom_er) && empty($ybm_er) && empty($stm_er) && empty($wm_er) && empty($sm_er) && empty($mm_er) ){
//$jnsp_er = $tglm_er = $nis_er = $npu_er = $paud_er = $tk_er = $skhu_er = $ijz_er = $hb_er = $ct_er =
//$nama_er = $gndr_er = $nisn_er = $nik_er = $tpl_er = $tl_er = $rlg_er = $bk_er = $almt_er = $kdp_er = $sttg_er = $trns_er = $hp_er = $mail_er= $kps_er = $nkps_er = $reg_er = $dad_er = $ybd_er = $std_er = $wd_er = $sd_er = $dd_er = $mom_er = $ybm_er = $stm_er = $wm_er = $sm_er = $mm_er = "";
        // Query insert data
        $sql = "INSERT INTO siswa (jnsp, tglm, nis, npu, paud, tk, skhu, ijz, hb, ct, nama, gndr, nisn, nik, tpl, tl, rlg, bk, almt, kdp, sttg, trns, hp, mail, kps, nkps, reg, dad, ybd, std ,wd ,sd ,dd, mom, ybm, stm, wm, sm, mm) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?, ?, ?, ?, ?, ?, ?, ?, ?)";

        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sssssssssssssssssssssssssssssssssssssss", $param_jnsp , $param_tglm , $param_nis , $param_npu , $param_paud , $param_tk , $param_skhu , $param_ijz , $param_hb , $param_ct , $param_nama , $param_gndr , $param_nisn , $param_nik , $param_tpl , $param_tl , $param_rlg , $param_bk , $param_almt , $param_kdp , $param_sttg , $param_trns , $param_hp , $param_mail , $param_kps , $param_nkps , $param_reg , $param_dad , $param_ybd , $param_std , $param_wd , $param_sd , $param_dd , $param_mom , $param_ybm , $param_stm , $param_wm , $param_sm , $param_mm);

            // Set parameters
            $param_jnsp = $jnsp;
            $param_tglm = $tglm;
            $param_nis = $nis;
            $param_npu = $npu;
            $param_paud = $paud;
            $param_tk = $tk;
            $param_skhu = $skhu;
            $param_ijz = $ijz;
            $param_hb = $hb;
            $param_ct = $ct;
            $param_nama = $nama;
            $param_gndr = $gndr;
            $param_nisn = $nisn;
            $param_nik = $nik;
            $param_tpl = $tpl;
            $param_tl = $tl;
            $param_rlg = $rlg;
            $param_bk = $bk;
            $param_almt = $almt;
            $param_kdp = $kdp;
            $param_sttg = $sttg;
            $param_trns = $trns;
            $param_hp = $hp;
            $param_mail = $mail;
            $param_kps = $kps;
            $param_nkps = $nkps;
            $param_reg = $reg;
            $param_dad = $dad;
            $param_ybd = $ybd;
            $param_std = $std;
            $param_wd = $wd;
            $param_sd = $sd;
            $param_dd = $dd;
            $param_mom = $mom;
            $param_ybm = $ybm;
            $param_stm = $stm;
            $param_wm = $wm;
            $param_sm = $sm;
            $param_mm = $mm;

            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records created successfully. Redirect to landing page
                header("location: Apps.php");
                exit();
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }

        // Close statement
        mysqli_stmt_close($stmt);
    }

    // Close connection
    mysqli_close($link);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Formulir Registrasi Siswa Baru</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Registrasi Data Siswa</h2>
                    </div>
                    <p>Silahkan Mengisi Formulir registrasi dibawah ini.</p>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <!-- field isian jenis pendafftaran siswa -->
                        <!-- Radio Button Jenis Penerimaan -->
                        <div class="form-group <?php echo (!empty($jnsp_er)) ? 'has-error' : ''; ?>">
                        <label>Jenis Pendataran siswa</label>
                        <select name="jnsp" class="form-control">
                        <option value="Siswa Baru" <?php echo $jnsp == "Siswa Baru" ? "selected" : "" ?>>Siswa Baru</option>
                        <option value="Pindahan" <?php echo $jnsp == "Pindahan" ? "selected" : "" ?>>Pindahan</option>
                        </select>
                            <span class="help-block"><?php echo $tglm_er;?></span>
                        </div>
                        <!-- field isian jenis tanggal masuk siswa -->
                        <div class="form-group <?php echo (!empty($tglm_er)) ? 'has-error' : ''; ?>">
                            <label>Tanggal Masuk Siswa </label>
                            <h5> format pengisian : (DD-MM-YYYY) </h5>
                            <input type="text" name="tglm" class="form-control" value="<?php echo $tglm; ?>">
                            <span class="help-block"><?php echo $tglm_er;?></span>
                        </div>
                        <!-- field isian NIS siswa -->
                        <div class="form-group <?php echo (!empty($nis_er)) ? 'has-error' : ''; ?>">
                            <label>Nomor Induk Siswa </label>
                            <input type="text" name="nis" class="form-control" value="<?php echo $nis; ?>">
                            <span class="help-block"><?php echo $nis_er;?></span>
                        </div>
                        <!-- field isian NPU siswa -->
                        <div class="form-group <?php echo (!empty($npu_er)) ? 'has-error' : ''; ?>">
                            <label>Nomor Peserta Ujian </label>
                            <input type="text" name="npu" class="form-control" value="<?php echo $npu; ?>">
                            <span class="help-block"><?php echo $npu_er;?></span>
                        </div>
                        <!-- field isian Paud siswa -->
                        <!-- Radio Button PAUD -->
                        <div class="form-group <?php echo (!empty($paud_er)) ? 'has-error' : ''; ?>">
						<label>Apakah Pernah Paud?</label>
                        <br>
                        <label class="radio-inline">
                        <input type="radio" name="paud" value="Pernah">Pernah </label>
                        <br>
                        <label class="radio-inline">
                        <input type="radio" name="paud" value="Tidak">Tidak</label>
                        <br>
						<span class="warning"><?php echo $paud_er; ?></span>
						</div>
					
                        <!-- field isian TK siswa -->
                        <!-- Radio Button TK -->
                        <div class="form-group <?php echo (!empty($tk_er)) ? 'has-error' : ''; ?>">
						<label>Apakah Pernah di Taman Kanak-kanak?</label>
                        <br>
                        <label class="radio-inline">
                        <input type="radio" name="tk" value="Pernah">Pernah </label>
                        <br>
                        <label class="radio-inline">
                        <input type="radio" name="tk" value="Tidak">Tidak</label>
                        <br>
						<span class="warning"><?php echo $tk_er; ?></span>
						</div>

                        <!-- field isian SKHUN siswa -->
                        <div class="form-group <?php echo (!empty($skhu_er)) ? 'has-error' : ''; ?>">
                            <label>Nomor SKHUN Siswa Sebelumnya </label>
                            <input type="text" name="skhu" class="form-control" value="<?php echo $skhu; ?>">
                            <span class="help-block"><?php echo $skhu_er;?></span>
                        </div>
                        <!-- field isian Ijazah siswa -->
                        <div class="form-group <?php echo (!empty($ijz_er)) ? 'has-error' : ''; ?>">
                            <label>Nomor Ijazah Siswa Sebelumnya </label>
                            <input type="text" name="ijz" class="form-control" value="<?php echo $ijz; ?>">
                            <span class="help-block"><?php echo $ijz_er;?></span>
                        </div>
                        <!-- field isian Hobby siswa -->
                        <div class="form-group <?php echo (!empty($hb_er)) ? 'has-error' : ''; ?>">
                            <label>Hobby Siswa </label>
                            <input type="text" name="hb" class="form-control" value="<?php echo $hb; ?>">
                            <span class="help-block"><?php echo $hb_er;?></span>
                        </div>
                        <!-- field isian Cita-Cita siswa -->
                        <div class="form-group <?php echo (!empty($ct_er)) ? 'has-error' : ''; ?>">
                            <label>Cita-cita Siswa </label>
                            <input type="text" name="ct" class="form-control" value="<?php echo $ct; ?>">
                            <span class="help-block"><?php echo $ct_er;?></span>
                        </div>
                        <div class="page-header">
                        <h2>Data Personal Siswa</h2>
                    </div>
                        <!-- field isian Nama siswa -->
                        <div class="form-group <?php echo (!empty($nama_er)) ? 'has-error' : ''; ?>">
                            <label>Nama Siswa </label>
                            <input type="text" name="nama" class="form-control" value="<?php echo $nama; ?>">
                            <span class="help-block"><?php echo $nama_er;?></span>
                        </div>
                        <!-- field isian Gender siswa -->
                        <div class="form-group <?php echo (!empty($gndr_er)) ? 'has-error' : ''; ?>">
						<label>Gender</label>
                        <br>
                        <label class="radio-inline">
                        <input type="radio" name="gndr" value="Pria">Pria </label>
                        <br>
                        <label class="radio-inline">
                        <input type="radio" name="gndr" value="Wanita">Wanita</label>
                        <br>
						<span class="warning"><?php echo $gndr_er; ?></span>
						</div>

                        <!-- field isian NISN siswa -->
                        <div class="form-group <?php echo (!empty($nisn_er)) ? 'has-error' : ''; ?>">
                            <label>Nomor Induk Siswa Nasional </label>
                            <input type="text" name="nisn" class="form-control" value="<?php echo $nisn; ?>">
                            <span class="help-block"><?php echo $nisn_er;?></span>
                        </div>

                        <!-- field isian NIK siswa -->
                        <div class="form-group <?php echo (!empty($nik_er)) ? 'has-error' : ''; ?>">
                            <label>Nomor Induk Kependudukan </label>
                            <input type="text" name="nik" class="form-control" value="<?php echo $nik; ?>">
                            <span class="help-block"><?php echo $nik_er;?></span>
                        </div>

                        <!-- field isian Tempat lahir siswa -->
                        <div class="form-group <?php echo (!empty($tpl_er)) ? 'has-error' : ''; ?>">
                            <label>Tempat Lahir </label>
                            <input type="text" name="tpl" class="form-control" value="<?php echo $tpl; ?>">
                            <span class="help-block"><?php echo $tpl_er;?></span>
                        </div>
                        <!-- field isian jenis tanggal Lahir siswa -->
                        <div class="form-group <?php echo (!empty($tl_er)) ? 'has-error' : ''; ?>">
                            <label>Tanggal Lahir </label>
                            <h5> format pengisian : (DD-MM-YYYY) </h5>
                            <input type="text" name="tl" class="form-control" value="<?php echo $tl; ?>">
                            <span class="help-block"><?php echo $tl_er;?></span>
                        </div>
                        <!-- field isian Agama siswa -->
                        <div class="form-group <?php echo (!empty($rlg_er)) ? 'has-error' : ''; ?>">
                            <label>Agama </label>
                            <input type="text" name="rlg" class="form-control" value="<?php echo $rlg; ?>">
                            <span class="help-block"><?php echo $rlg_er;?></span>
                        </div>
                        <!-- field isian Kebutuhan Khusus siswa -->
                        <div class="form-group <?php echo (!empty($bk_er)) ? 'has-error' : ''; ?>">
                            <label>Apakah Siswa Berkebutuhan Khusus? </label>
                            <input type="text" name="bk" class="form-control" value="<?php echo $bk; ?>">
                            <span class="help-block"><?php echo $bk_er;?></span>
                        </div>
                        <!-- field isian Alamat siswa -->
                        <div class="form-group <?php echo (!empty($almt_er)) ? 'has-error' : ''; ?>">
                            <label>Alamat</label>
                            <textarea name="almt" class="form-control"><?php echo $almt; ?></textarea>
                            <span class="help-block"><?php echo $almt_er;?></span>
                        </div>
                        <!-- field isian KodePos -->
                        <div class="form-group <?php echo (!empty($kdp_er)) ? 'has-error' : ''; ?>">
                            <label>Kode Pos</label>
                            <input type="text" name="kdp" class="form-control" value="<?php echo $kdp; ?>">
                            <span class="help-block"><?php echo $kdp_er;?></span>
                        </div>
                        <!-- field isian Tnggal Bersama-->
                            <!--<label>Tinggal Bersama ?</label>
                            <h5>- Bersama orang tua</h5>
                            <h5> - Wali</h5>
                            <h5> - Kos </h5>
                            <h5> - Asrama</h5>
                            <h5> - Panti Asuhan</h5>
                            <h5> - Pesantren</h5>
                            <h5> - Lainnya</h5>-->
                            <div class="form-group <?php echo (!empty($sttg_er)) ? 'has-error' : ''; ?>">
						<label>Tinggal Bersama</label>
                        <br>
                        <label class="radio-inline">
                        <input type="radio" name="sttg" value="Orang Tua">Orang Tua </label>
                        <br>
                        <label class="radio-inline">
                        <input type="radio" name="sttg" value="Kost">Kost </label>
                        <br>
                        <label class="radio-inline">
                        <input type="radio" name="sttg" value="Asrama">Asrama</label>
                        <br>
                        <label class="radio-inline">
                        <input type="radio" name="sttg" value="PantiAsuhan">Panti Asuhan</label>
                        <br>
                        <label class="radio-inline">
                        <input type="radio" name="sttg" value="Pesantren">Pesantren</label>
                        <br>
                        <label class="radio-inline">
                        <input type="radio" name="sttg" value="Lainya">Lainnya </label>
                        <br>
                        
						<span class="warning"><?php echo $sttg_er; ?></span>
						</div>
                            
                        <!-- field isian Transportasi -->
                        <div class="form-group <?php echo (!empty($trns_er)) ? 'has-error' : ''; ?>">
                            <label>Moda Transportasi</label>
                            <input type="text" name="trns" class="form-control" value="<?php echo $trns; ?>">
                            <span class="help-block"><?php echo $trns_er;?></span>
                        </div>
                        <!-- field isian Nomor Telepon -->
                        <div class="form-group <?php echo (!empty($hp_er)) ? 'has-error' : ''; ?>">
                            <label>Nomor Telepon</label>
                            <input type="text" name="hp" class="form-control" value="<?php echo $hp; ?>">
                            <span class="help-block"><?php echo $hp_er;?></span>
                        </div>
                        <!-- field isian E-mail -->
                        <div class="form-group <?php echo (!empty($mail_er)) ? 'has-error' : ''; ?>">
                            <label>E-mail</label>
                            <input type="text" name="mail" class="form-control" value="<?php echo $mail; ?>">
                            <span class="help-block"><?php echo $mail_er;?></span>
                        </div>

                        <!-- field isian kps -->
                        <div class="form-group <?php echo (!empty($kps_er)) ? 'has-error' : ''; ?>">
						<label>Apakah Memiliki KPS</label>
                        <br>
                        <label class="radio-inline">
                        <input type="radio" name="kps" value="Punya">Ya</label>
                        <br>
                        <label class="radio-inline">
                        <input type="radio" name="kps" value="Tidak">Tidak</label>
                        <br>
						<span class="warning"><?php echo $kps_er; ?></span>
						</div>
                        
                        <!-- field isian nomor kps -->
                        <div class="form-group <?php echo (!empty($nkps_er)) ? 'has-error' : ''; ?>">
                            <label>Nomor KPS (Jika Ada)</label>
                            <input type="text" name="nkps" class="form-control" value="<?php echo $nkps; ?>">
                            <span class="help-block"><?php echo $nkps_er;?></span>
                        </div>
                         <!-- field isian Kewarganegaraan -->
                         <div class="form-group <?php echo (!empty($reg_er)) ? 'has-error' : ''; ?>">
                            <label>Kewarganegaraan</label>
                            <input type="text" name="reg" class="form-control" value="<?php echo $reg; ?>">
                            <span class="help-block"><?php echo $reg_er;?></span>
                        </div>
                        <div class="page-header">
                        <h2>Data Ayah Kandung</h2>
                    </div>
                    <!-- field isian Nama -->
                    <div class="form-group <?php echo (!empty($dad_er)) ? 'has-error' : ''; ?>">
                            <label>Nama Ayah</label>
                            <input type="text" name="dad" class="form-control" value="<?php echo $dad; ?>">
                            <span class="help-block"><?php echo $dad_er;?></span>
                        </div>
                    <!-- field isian jenis tanggal Lahir -->
                    <div class="form-group <?php echo (!empty($ybd_er)) ? 'has-error' : ''; ?>">
                            <label>Tanggal Lahir </label>
                            <h5> format pengisian : (DD-MM-YYYY) </h5>
                            <input type="text" name="ybd" class="form-control" value="<?php echo $ybd; ?>">
                            <span class="help-block"><?php echo $ybd_er;?></span>
                    </div>
                    <!-- field isian Pendidikan -->
                    <div class="form-group <?php echo (!empty($std_er)) ? 'has-error' : ''; ?>">
                    <label>Pendidikan Ayah</label>
                        <br>
                        <label class="radio-inline">
                        <input type="radio" name="std" value="TidakBersekolah" checked>Tidak Bersekolah </label>
                        <br>
                        <label class="radio-inline">
                        <input type="radio" name="std" value="PutusSD">Putus SD</label>
                        <br>
                        <label class="radio-inline">
                        <input type="radio" name="std" value="SD" >SD Sederajat</label>
                        <br>
                        <label class="radio-inline">
                        <input type="radio" name="std" value="SMP">SMP Sederajat</label>
                        <br>
                        <label class="radio-inline">
                        <input type="radio" name="std" value="SMA" >SMA Sederajat</label>
                        <br>
                        <label class="radio-inline">
                        <input type="radio" name="std" value="D1">D1</label>
                        <label class="radio-inline">
                        <input type="radio" name="std" value="D2">D2</label>
                        <label class="radio-inline">
                        <input type="radio" name="std" value="D3">D3</label>
                        <label class="radio-inline">
                        <input type="radio" name="std" value="D4/S1">D4/S1</label>
                        <label class="radio-inline">
                        <input type="radio" name="std" value="S2">S2</label>
                        <label class="radio-inline">
                        <input type="radio" name="std" value="S3">S3</label>
                        <br>

						<span class="warning"><?php echo $std_er; ?></span>
						</div>
                    
                        <!-- field isian Pekerjaan -->
                    <div class="form-group <?php echo (!empty($wd_er)) ? 'has-error' : ''; ?>">
                            <label>Pekerjaan</label>
                            <input type="text" name="wd" class="form-control" value="<?php echo $wd; ?>">
                            <span class="help-block"><?php echo $wd_er;?></span>
                        </div>
                        <!-- field isian Gaji -->
                    <div class="form-group <?php echo (!empty($sd_er)) ? 'has-error' : ''; ?>">
                    <label>Pendapatan</label>
                    <select name="sd" class="form-control">
                    <option value="< Rp.500.000" <?php echo $sd == "< Rp.500.000" ? "selected" : "" ?>>Kurang Dari Rp.500.000</option>
                    <option value="Rp.500.000 - Rp.999.999" <?php echo $sd == "Rp.500.000 - Rp.999.999" ? "selected" : "" ?>>Rp.500.000 - Rp.999.999</option>
                    <option value="Rp.1.000.000 - Rp.1.999.999" <?php echo $sd == "Rp.1.000.000 - Rp.1.999.999" ? "selected" : "" ?>>Rp.1.000.000 - Rp.1.999.999</option>
                    <option value="Rp.2.000.000 - Rp.4.999.999" <?php echo $sd == "Rp.2.000.000 - Rp.4.999.999" ? "selected" : "" ?>>Rp.2.000.000 - Rp.4.999.999</option>
                    <option value="Rp.5.000.000 - Rp.20.000.000" <?php echo $sd == "Rp.5.000.000 - Rp.20.000.000" ? "selected" : "" ?>>Rp.5.000.000 - Rp.20.000.000</option>
                    <option value=">Rp.20.000.000" <?php echo $sd == ">Rp.20.000.000" ? "selected" : "" ?>>Lebih dari Rp.20.000.000</option>
                    <option value="Tidak Berpenghasilan" <?php echo $sd == "Tidak Berpenghasilan" ? "selected" : "" ?>>Tidak Berpenghasilan</option>
                    </select>
                            <span class="help-block"><?php echo $sd_er;?></span>
                        </div>
                        <!-- field isian Ayah Berkebutuhan Khusus -->
                    <div class="form-group <?php echo (!empty($dd_er)) ? 'has-error' : ''; ?>">
                            <label>Apakah Ayah Berkebutuhan Khusus?</label>
                            <input type="text" name="dd" class="form-control" value="<?php echo $dd; ?>">
                            <span class="help-block"><?php echo $dd_er;?></span>
                        </div>
                        <div class="page-header">
                        <h2>Data Ibu Kandung</h2>
                    </div>
                    <!-- field isian Nama -->
                    <div class="form-group <?php echo (!empty($mom_er)) ? 'has-error' : ''; ?>">
                            <label>Nama Ibu</label>
                            <input type="text" name="mom" class="form-control" value="<?php echo $mom; ?>">
                            <span class="help-block"><?php echo $mom_er;?></span>
                        </div>
                    <!-- field isian jenis tanggal Lahir -->
                    <div class="form-group <?php echo (!empty($ybm_er)) ? 'has-error' : ''; ?>">
                            <label>Tanggal Lahir </label>
                            <h5> format pengisian : (DD-MM-YYYY) </h5>
                            <input type="text" name="ybm" class="form-control" value="<?php echo $ybm; ?>">
                            <span class="help-block"><?php echo $ybm_er;?></span>
                    </div>
                    <!-- field isian Pendidikan -->
                    <div class="form-group <?php echo (!empty($stm_er)) ? 'has-error' : ''; ?>">
                    <label>Pendidikan Ibu</label>
                        <br>
                        <label class="radio-inline">
                        <input type="radio" name="stm" value="TidakBersekolah" checked>Tidak Bersekolah </label>
                        <br>
                        <label class="radio-inline">
                        <input type="radio" name="stm" value="PutusSD">Putus SD</label>
                        <br>
                        <label class="radio-inline">
                        <input type="radio" name="stm" value="SD" >SD Sederajat</label>
                        <br>
                        <label class="radio-inline">
                        <input type="radio" name="stm" value="SMP">SMP Sederajat</label>
                        <br>
                        <label class="radio-inline">
                        <input type="radio" name="stm" value="SMA" >SMA Sederajat</label>
                        <br>
                        <label class="radio-inline">
                        <input type="radio" name="stm" value="D1">D1</label>
                        <label class="radio-inline">
                        <input type="radio" name="stm" value="D2">D2</label>
                        <label class="radio-inline">
                        <input type="radio" name="stm" value="D3">D3</label>
                        <label class="radio-inline">
                        <input type="radio" name="stm" value="D4/S1">D4/S1</label>
                        <label class="radio-inline">
                        <input type="radio" name="stm" value="S2">S2</label>
                        <label class="radio-inline">
                        <input type="radio" name="stm" value="S3">S3</label>
                        <br>

						<span class="warning"><?php echo $stm_er; ?></span>
						</div>
                        <!-- field isian Pekerjaan -->
                    <div class="form-group <?php echo (!empty($wm_er)) ? 'has-error' : ''; ?>">
                            <label>Pekerjaan</label>
                            <input type="text" name="wm" class="form-control" value="<?php echo $wm; ?>">
                            <span class="help-block"><?php echo $wm_er;?></span>
                        </div>
                        <!-- field isian Gaji -->
                    <div class="form-group <?php echo (!empty($sm_er)) ? 'has-error' : ''; ?>">
                    <label>Pendapatan</label>
                    <select name="sm" class="form-control">
                    <option value="< Rp.500.000" <?php echo $sm == "< Rp.500.000" ? "selected" : "" ?>>Kurang Dari Rp.500.000</option>
                    <option value="Rp.500.000 - Rp.999.999" <?php echo $sm == "Rp.500.000 - Rp.999.999" ? "selected" : "" ?>>Rp.500.000 - Rp.999.999</option>
                    <option value="Rp.1.000.000 - Rp.1.999.999" <?php echo $sm == "Rp.1.000.000 - Rp.1.999.999" ? "selected" : "" ?>>Rp.1.000.000 - Rp.1.999.999</option>
                    <option value="Rp.2.000.000 - Rp.4.999.999" <?php echo $sm == "Rp.2.000.000 - Rp.4.999.999" ? "selected" : "" ?>>Rp.2.000.000 - Rp.4.999.999</option>
                    <option value="Rp.5.000.000 - Rp.20.000.000" <?php echo $sm == "Rp.5.000.000 - Rp.20.000.000" ? "selected" : "" ?>>Rp.5.000.000 - Rp.20.000.000</option>
                    <option value=">Rp.20.000.000" <?php echo $sm == ">Rp.20.000.000" ? "selected" : "" ?>>Lebih dari Rp.20.000.000</option>
                    <option value="Tidak Berpenghasilan" <?php echo $sm == "Tidak Berpenghasilan" ? "selected" : "" ?>>Tidak Berpenghasilan</option>
                    </select>
                        </div>
                        <!-- field isian Ayah Berkebutuhan Khusus -->
                    <div class="form-group <?php echo (!empty($mm_er)) ? 'has-error' : ''; ?>">
                            <label>Apakah Ibu Berkebutuhan Khusus?</label>
                            <input type="text" name="mm" class="form-control" value="<?php echo $mm; ?>">
                            <span class="help-block"><?php echo $mm_er;?></span>
                        </div>

                        <input type="submit" class="btn btn-primary" value="Submit">
                        <a href="Apps.php" class="btn btn-default">Cancel</a>
                        <br></br>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>