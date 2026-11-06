<?php
  $id =  isset($_GET["id"]) ? $_GET["id"] : "";
if ($id == "")
    echo "chua nhan duoc id. Hay chon product o 1";
else
    echo "Gia tri id: ". ($id);
?>
<p><a href="1.php">Tro lai 1</a></p> 