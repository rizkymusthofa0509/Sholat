<form action="" method="POST">
	<select name="wilayah">
		<option>Bandung</option>
		<option>Jakarta</option>
		<option>Indramayu</option>
		<option>Surabaya</option>
	</select>
	<input type="submit" name="kirim" value="Cek">
</form>
<?php
	if (isset($_POST['kirim'])){
		$wilayah = $_POST['wilayah'];
		$res = json_decode(file_get_contents("https://time.siswadi.com/pray/".$wilayah));
		echo "Fajr : ".$res->data->Fajr."<br>";
		echo "Dzuhur : ".$res->data->Dhuhr."<br>";
		echo "Asr : ".$res->data->Asr."<br>";
		echo "Maghrib : ".$res->data->Maghrib."<br>";
		echo "Isha : ".$res->data->Isha."<br>";

		echo "<br><br>";
		echo "Parameter Lokasi    : ".$res->location->address."<br>";
		echo "Parameter Latitude  : ".$res->location->latitude."<br>";
		echo "Parameter Longitude : ".$res->location->longitude."<br>";
	}else{
		echo "Tidak ada data";
	}
?>
<?php
?>
