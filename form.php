
<html>
<head>
<title>SMK NEGERI WONGSOREJO</title>
<link rel="stylesheet" type="text/css" href="css/style22.css"/>
</head>
<body>
<div id="bodybelakang">
	<div id="header"><center><img src="IMG/1.png" width="900" height="250" alt="" /></center></div>
    <div id="menu"> <a href="http://localhost/UTS/home.php">HOME</a> &nbsp; &nbsp; &nbsp; &nbsp; <a href="http://localhost/UTS/about.php">TENTANG SEKOLAH</a> &nbsp; &nbsp; &nbsp; &nbsp; <a href="http://localhost/adva/index.php">FORM PENDAFTARAN</a> &nbsp; &nbsp; &nbsp; &nbsp; <a href="http://localhost/UTS/gallery.php">GALLERY</a> &nbsp; &nbsp; &nbsp; &nbsp; <a href="http://localhost/UTS/contact.php">CONTACTS</a> &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp;<a href="http://localhost/adva/index.php?page=login">ADMIN</a> </div>
  <div id="sidebar">
    <h1>Form Pendaftaran</h1>
  </div><br>
  <div id="main">
	<center><h2>Isikan Data Anda di bawah ini dengan Lengkap!</h2></center>
		<div class="panel panel-widget forms-panel">
        
        <div class="form-body">
            <hr>
            <br>
        	<form class="form-horizontal" action="" method="post">
            	<div class="form-group">
                	<label for="focusedinput" class="col-sm-2 control-label">NISN</label>
                    <div class="col-sm-8">
                    	<input name="nisn" type="text" class="form-control1" id="focusedinput" onkeypress="return isNumberKey(event);" size="15" maxlength="15" placeholder="NISN">
                    </div>
                </div>
            	<div class="form-group">
                	<label for="focusedinput" class="col-sm-2 control-label">Nama</label>
                    <div class="col-sm-8">
                    	<input name="nama" type="text" class="form-control1" id="focusedinput" size="30" maxlength="30" placeholder="Nama">
                    </div>
                </div>
                <div class="form-group">
                	<label for="checkbox" class="col-sm-2 control-label">Jenis Kelamin</label>
                    <div class="col-sm-8">
                    	<div class="radio block"><input name="gender" type="radio" value="L" checked>Laki-Laki</div>
                    	<div class="radio block"><input name="gender" type="radio" value="P">Perempuan</div>
                    </div>
                </div>
            	<div class="form-group">
                	<label for="focusedinput" class="col-sm-2 control-label">Tempat Lahir</label>
                    <div class="col-sm-8">
                    	<input name="tmp_lahir" type="text" class="form-control1" id="focusedinput" size="30" maxlength="30" placeholder="Tmp. Lahir">
                    </div>
                </div>
            	<div class="form-group">
                	<label for="focusedinput" class="col-sm-2 control-label">Tanggal Lahir</label>
                    <div class="col-sm-8">
                    	<input name="tgl_lahir" type="text" id="datepicker" size="15" maxlength="10" placeholder="Tgl. Lahir">
                    </div>
                </div>
                <div class="form-group">
                	<label for="checkbox" class="col-sm-2 control-label">Agama</label>
                    <div class="col-sm-8">
                    	<div class="radio block"><input name="agama" type="radio" value="Islam" checked>Islam</div>
                    	<div class="radio block"><input name="agama" type="radio" value="Kristen">Kristen</div>
                    	<div class="radio block"><input name="agama" type="radio" value="Katolik">Katolik</div>
                    	<div class="radio block"><input name="agama" type="radio" value="Budha">Budha</div>
                    	<div class="radio block"><input name="agama" type="radio" value="Hindu">Hindu</div>
                    	<div class="radio block"><input name="agama" type="radio" value="Dll">Dll</div>
                    </div>
                </div>
            	<div class="form-group">
                	<label for="focusedinput" class="col-sm-2 control-label">Alamat</label>
                    <div class="col-sm-8"><textarea name="alamat" cols="" rows="" class="form-control_2" id="alamat"></textarea>
                    </div>
                </div>
            	<div class="form-group">
                	<label for="focusedinput" class="col-sm-2 control-label">No. Telp</label>
                    <div class="col-sm-8">
                    	<input name="hp" type="text" class="form-control1" id="focusedinput" size="15" maxlength="15" placeholder="No. Telp/HP">
                    </div>
                </div>
            	<div class="form-group">
                	<label for="focusedinput" class="col-sm-2 control-label">SMP Asal</label>
                    <div class="col-sm-8">
                    	<input name="smp" type="text" class="form-control1" id="focusedinput" size="30" maxlength="30" placeholder="SMP Asal">
                    </div>
                </div>
            	<div class="form-group">
                	<label for="focusedinput" class="col-sm-2 control-label">Nilai UN</label>
                    <div class="col-sm-8">
						<table class="table table-bordered">
							<tr>
								<td><input name="mtk" type="text" class="form-control1_clone" id="mtk" onkeyup="checkDec(this);sum();" size=3 maxlength="4" placeholder = "MTK"></td>
								<td><input name="bin" type="text" class="form-control1_clone" id="bin" onkeyup="checkDec(this);sum();" size=3 maxlength="4" placeholder = "BIN"></td>
								<td><input name="big" type="text" class="form-control1_clone" id="big" onkeyup="checkDec(this);sum();" size=3 maxlength="4" placeholder = "BIG"></td>
								<td><input name="ipa" type="text" class="form-control1_clone" id="ipa" onkeyup="checkDec(this);sum();" size=3 maxlength="4" placeholder = "IPA"></td>
							  <td><input name="total" type="text" class="form-control1_clone1" disabled="disabled" id="total" size=3 maxlength="4" placeholder = "0.00"></td>
							<tr>
						</table>
                    </div>
                </div>
            	<div class="form-group">
                	<label for="focusedinput" class="col-sm-2 control-label">Pilihan Jurusan</label>
                    <div class="col-sm-8">
                    <?php
					$qry = $database->jurusan($con);
					$qry2 = $database->jurusan($con);
					?>
                    	<select name="jurusan1" id="jurusan1" class="form-control1">
							<option value="0">Jurusan 1</option>
							<?php
                            while($j1 = mysqli_fetch_array($qry))
                            {
                                echo "<option value=$j1[0]>$j1[1]</option>";
                            }
                            ?>
						</select>
                        <br><br>
                    	<select name="jurusan2" id="jurusan2" class="form-control1">
							<option value="0">Jurusan 2</option>
                            <?php
                            while($j2 = mysqli_fetch_array($qry2))
                            {
                                echo "<option value=$j2[0]>$j2[1]</option>";
                            }
                            ?>

						</select>
                    </div>
                </div>
                <div class="forms" align="center">
                	<br><br>
                	<button type="submit" name="daftar" value="daftar" class="btn btn-default">Daftar</button>
                </div>
            </form>
        </div>
    </div>
  
  </div>
  <div id="footer"> Desain Tugas by ABDUL NASIR - 1114101169 - TEKNIK INFORMATIKA S1 MALAM - STIKOM PGRI BANYUWANGI</div>
</div>
</html>
