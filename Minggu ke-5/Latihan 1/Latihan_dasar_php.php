<!Doctype html>
<html>
<head>
	<title>Kalkulator PHP Dasar</title>
</head>
<body>
<?php
if (isset($_POST["submit"])){
	$bil1 = $_POST["bil1"];
	$bil2 = $_POST["bil2"];
	$operator = $_POST["operator"];

	if($operator == "+"){
		$hasil = $bil1+$bil2;
	}elseif($operator == "-"){
		$hasil = $bil1-$bil2;
	}elseif($operator == "x"){
		$hasil = $bil1*$bil2;
	}elseif($operator == "/"){
		$hasil = $bil1/$bil2;
	}else{
		echo "Silahkan pilih operator yang diinginkan";
	}	
}
?>
<div class="kalkulator">
        <h2 class="judul">KALKULATOR</h2>
	<form action="" method="post">
		<table>
			<tr>
				<td colspan="2"><input type="text" name="bil1" placeholder="Masukan Bilangan Pertama"></td>
			</tr>
			<tr>
				<td colspan="2"><input type="text" name="bil2" placeholder="Masukan Bilangan Kedua"></td>
			</tr>
			<tr>
				<td colspan="2">
					<select name="operator">
						<option>- Pilih Operasi -</option>
						<option value="+">+ (tambah)</option>
						<option value="-">- (kurang)</option>
						<option value="x">x (kali)</option>
						<option value="/">/ (bagi)</option>
					</select>
				</td>
			</tr>
			<tr>
				<td><input type="reset" name="reset" value="Hapus">
			<input type="submit" name="submit" value="Hitung"></td>
			</tr>
      <tr>
	    <?php if(isset($_POST["submit"])){ ?>
		  <td colspan="2"><input type="text" name="hasil" value="<?php echo $hasil ?>"></td>
	    <?php } ?>
      </tr>
	</form>
</body>
</html>