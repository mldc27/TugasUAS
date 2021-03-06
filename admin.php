<?php
session_start();
if(empty($_SESSION['username'])) header("location:index.php?page=login");
?>

<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin</title>

<!-- CSS -->
<link href="style/css/transdmin.css" rel="stylesheet" type="text/css" media="screen" />
<!--[if IE 6]><link rel="stylesheet" type="text/css" media="screen" href="style/css/ie6.css" /><![endif]-->
<!--[if IE 7]><link rel="stylesheet" type="text/css" media="screen" href="style/css/ie7.css" /><![endif]-->
<link href="css/table.css" rel="stylesheet" type="text/css" media="screen" />

<!-- JavaScripts-->
<script type="text/javascript" src="style/js/jquery.js"></script>
<script type="text/javascript" src="style/js/jNice.js"></script>

</head>

<body>
	<div id="wrapper">
    	<!-- h1 tag stays for the logo, you can use the a tag for linking the index page -->
    	<h1><a href="#"><span>Welcome</span></a></h1>
        
        <!-- You can name the links with lowercase, they will be transformed to uppercase by CSS, we prefered to name them with uppercase to have the same effect with disabled stylesheet -->
        <ul id="mainNav">
        	<li><a href="?page=admin">HOME</a></li> <!-- Use the "active" class for the active menu item  -->
        	<li><a href="?page=admin&ganti=ganti">GANTI PASSWORD</a></li>
			<li><a href="?page=print">PRINT</a></li>
			<li><a href="?page=excel">EXCEL</a></li>
        	<li><a href="?page=logout">LOGOUT</a></li>
        </ul>
        <!-- // #end mainNav -->
		
		<div id="containerHolder">
        
<?php if(!empty($_GET['ganti']))
{
?>
<div class="panel panel-widget forms-panel">
    <div class="form-body">
        <hr>
        <br>
        <form class="form-horizontal" action="" method="post">
            <div class="form-group">
                <label for="focusedinput" class="col-sm-2 control-label">Password Lama</label>
                <div class="col-sm-8">
                    <input name="pl" type="password" class="form-control1" size="15" maxlength="15" placeholder="">
                </div>
            </div>
            <div class="form-group">
                <label for="focusedinput" class="col-sm-2 control-label">Password Baru</label>
                <div class="col-sm-8">
                    <input name="pb" type="password" class="form-control1" size="15" maxlength="15" placeholder="">
                </div>
            </div>
            <div class="form-group">
                <label for="focusedinput" class="col-sm-2 control-label">Confirm Password</label>
                <div class="col-sm-8">
                    <input name="cp" type="password" class="form-control1" size="15" maxlength="15" placeholder="">
                </div>
            </div>
            <div class="forms" align="center">
                <input name="update_pass" type="submit" value="Update Password" class="btn btn-default">
            </div>
        </form>
    </div>
</div>
<?php
}
elseif((isset($_GET['no'])) || (isset($_GET['det'])))
{
?>
	<div class="panel panel-widget forms-panel">
        <div class="form-body">
            <hr>
            <br>
        	<form class="form-horizontal" action="" method="post">
            	<div class="form-group">
                	<label for="focusedinput" class="col-sm-2 control-label">NISN</label>
                    <div class="col-sm-8">
                    	<input name="nisn" type="text" class="form-control1" id="focusedinput" onkeypress="return isNumberKey(event);" value="<?php echo $nisn; ?>" size="15" maxlength="15" placeholder="NISN">
                      <input name="no_pendaftaran" type="hidden" id="no_pendaftaran" value="<?php echo $no_pendaftaran; ?>">
                    </div>
                </div>
            	<div class="form-group">
                	<label for="focusedinput" class="col-sm-2 control-label">Nama</label>
                    <div class="col-sm-8">
                    	<input name="nama" type="text" class="form-control1" id="focusedinput" value="<?php echo $nama; ?>" size="30" maxlength="30" placeholder="Nama">
                    </div>
                </div>
                <div class="form-group">
                	<label for="checkbox" class="col-sm-2 control-label">Jenis Kelamin</label>
                    <div class="col-sm-8">
                    	<div class="radio block"><input name="gender" type="radio" value="L" <?php echo $pi; ?>>Laki-Laki</div>
                    	<div class="radio block"><input name="gender" type="radio" value="P" <?php echo $pa; ?>>Perempuan</div>
                    </div>
                </div>
            	<div class="form-group">
                	<label for="focusedinput" class="col-sm-2 control-label">Tempat Lahir</label>
                    <div class="col-sm-8">
                    	<input name="tmp_lahir" type="text" class="form-control1" id="focusedinput" value="<?php echo $tmp_lahir; ?>" size="30" maxlength="30" placeholder="Tmp. Lahir">
                    </div>
                </div>
            	<div class="form-group">
                	<label for="focusedinput" class="col-sm-2 control-label">Tanggal Lahir</label>
                    <div class="col-sm-8">
                    	<input name="tgl_lahir" type="text" id="datepicker" value="<?php echo $tgl_lahir; ?>" size="15" maxlength="10" placeholder="Tgl. Lahir">
                    </div>
                </div>
                <div class="form-group">
                	<label for="checkbox" class="col-sm-2 control-label">Agama</label>
                    <div class="col-sm-8">
                    	<div class="radio block"><input name="agama" type="radio" value="Islam" <?php if($agama=="Islam") echo "checked"; ?>>Islam</div>
                    	<div class="radio block"><input name="agama" type="radio" value="Kristen" <?php if($agama=="Kristen") echo "checked"; ?>>Kristen</div>
                    	<div class="radio block"><input name="agama" type="radio" value="Katolik" <?php if($agama=="Katolik") echo "checked"; ?>>Katolik</div>
                    	<div class="radio block"><input name="agama" type="radio" value="Budha" <?php if($agama=="Budha") echo "checked"; ?>>Budha</div>
                    	<div class="radio block"><input name="agama" type="radio" value="Hindu" <?php if($agama=="Hindu") echo "checked"; ?>>Hindu</div>
                    	<div class="radio block"><input name="agama" type="radio" value="Dll" <?php if($agama=="Dll") echo "checked"; ?>>Dll</div>
                    </div>
                </div>
            	<div class="form-group">
                	<label for="focusedinput" class="col-sm-2 control-label">Alamat</label>
                    <div class="col-sm-8"><textarea name="alamat" cols="" rows="" class="form-control_2" id="alamat"><?php echo $alamat; ?></textarea>
                    </div>
                </div>
            	<div class="form-group">
                	<label for="focusedinput" class="col-sm-2 control-label">No. Telp</label>
                    <div class="col-sm-8">
                    	<input name="hp" type="text" class="form-control1" id="focusedinput" value="<?php echo $hp; ?>" size="15" maxlength="15" placeholder="No. Telp/HP">
                    </div>
                </div>
            	<div class="form-group">
                	<label for="focusedinput" class="col-sm-2 control-label">SMP Asal</label>
                    <div class="col-sm-8">
                    	<input name="smp" type="text" class="form-control1" id="focusedinput" value="<?php echo $smp; ?>" size="30" maxlength="30" placeholder="SMP Asal">
                    </div>
                </div>
            	<div class="form-group">
                	<label for="focusedinput" class="col-sm-2 control-label">Nilai UN</label>
                    <div class="col-sm-8">
						<table class="table table-bordered">
							<tr>
								<td><input name="mtk" type="text" class="form-control1_clone" id="mtk" onkeyup="checkDec(this);sum();" value="<?php echo $mtk; ?>" size=3 maxlength="4" placeholder = "MTK"></td>
								<td><input name="bin" type="text" class="form-control1_clone" id="bin" onkeyup="checkDec(this);sum();" value="<?php echo $bin; ?>" size=3 maxlength="4" placeholder = "BIN"></td>
								<td><input name="big" type="text" class="form-control1_clone" id="big" onkeyup="checkDec(this);sum();" value="<?php echo $big; ?>" size=3 maxlength="4" placeholder = "BIG"></td>
								<td><input name="ipa" type="text" class="form-control1_clone" id="ipa" onkeyup="checkDec(this);sum();" value="<?php echo $ipa; ?>" size=3 maxlength="4" placeholder = "IPA"></td>
							  <td><input name="total" type="text" disabled="disabled" class="form-control1_clone1" id="total" value="<?php echo $total; ?>" size=3 maxlength="4" placeholder = "0.00"></td>
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
								if($jurusan1==$j1[0]) $ckd = "selected";
								else $ckd = "";
                                echo "<option value=$j1[0] $ckd>$j1[1]</option>";
                            }
                            ?>
					  </select>
                        <br><br>
                    	<select name="jurusan2" id="jurusan2" class="form-control1">
							<option value="0">Jurusan 2</option>
                            <?php
                            while($j2 = mysqli_fetch_array($qry2))
                            {
								if($jurusan2==$j2[0]) $ckd2 = "selected";
								else $ckd2 = "";
                                echo "<option value=$j2[0] $ckd2>$j2[1]</option>";
                            }
                            ?>

						</select>
                    </div>
                </div>
                <div class="forms" align="center">
                	<br><br>
                    <?php
                    	if(!($_GET['det']))
						{
							if($_GET['no']) $nm =  "Update";
							else  $nm =  "Daftar";
					?>
                	<button type="submit" name="<?php echo $nm; ?>" value="<?php echo $nm; ?>" class="btn btn-default"><?php echo $nm; ?></button>
                    <?php } else { ?>
                    <a href="?page=admin">Kembali</a>
                    <?php } ?>
                </div>
            </form>
        </div>
    </div>
<?php
}
else
{
?>
<h3>Daftar Pendaftar</h3>

<form action="" method="post">
<p>Search : <input name="keyword" type="text" id="keyword"> by <select name="tbl" id="tbl">
  <option value="nisn">NISN</option>
  <option value="nama">Nama</option>
</select><input name="cari" type="submit" value="Cari" id="cari"></p>
</form>
<h3>_______________________________________________________________________________________</h3>
<table>



	<tr>
  
		<th>No. Pendaftar</th>
		<th>NISN</th>
		<th>Nama</th>
		<th>Jenis Kelamin</th>
		<th>Tempat Lahir</th>
		<th>Tanggal Lahir</th>
		<th>Pil. Jurusan 1</th>
		<th>Pil. Jurusan 2</th>
		<th>Option</th>
	</tr>
	<?php
		$no = 1;
		$data = $database->tampil($keyword, $tbl, $con);
		foreach($data as $value)
		{
	?>
	<tr>
		<td><?php echo $value[0]; ?></td>
		<td><?php echo $value[1]; ?></td>
		<td><?php echo $value[2]; ?></td>
		<td><?php echo $value[3]; ?></td>
		<td><?php echo $value[4]; ?></td>
		<td><?php echo $value[5]; ?></td>
		<td><?php echo $value[11]; ?></td>
		<td><?php echo $value[12]; ?></td>
		<td>
        	
			<a href="?page=admin&no=<?php echo $value[0]; ?>" onclick="return confirm('Apakah Anda Yakin ?')"><img src="./images/edit.png" width = "20"></a> | 
			<a href="?page=admin&delete=<?php echo $value[0]; ?>" onclick="return confirm('Apakah Anda Yakin ?')"><img src="./images/delete.png" width = "20"></a>
		</td>
	</tr>
	<?php
		}
	?>
	</div>
	
</table>
<?php } ?>
        		
        <!-- // #containerHolder -->
        </div>
        <p id="footer">Feel free to use and customize it. <a href="#">Credit is appreciated.</a></p>
		</div>
</div>
    <!-- // #wrapper -->
</body>
</html>


