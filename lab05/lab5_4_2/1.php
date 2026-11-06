 <form action="1.php" method="get">
<input type="text" name="tx"> <br>
<input type="radio" name="rdb" value="gandung"> gan dung
<input type="radio" name="rdb" value="chinhxac"> chinh xac
<br>
<select name="loaisp">
<option name="tatca">tat ca</option>
<option name="loai1">loai 1</option>
<option name="loai2">loai 2</option>
<option name="loai3">loai 3</option>
</select>
<br>
<input type="submit" name="hien">
 </form>
<?php
$tensp = isset($_GET["tx"]) ? $_GET["tx"] : "";
$cachtim = isset($_GET["rdb"]) ? $_GET["rdb"] : "";
$loai = isset($_GET["loaisp"]) ? $_GET["loaisp"] : "";
echo "$tensp<br>";
echo "$cachtim<br>";
echo $loai;
