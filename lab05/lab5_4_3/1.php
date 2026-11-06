
<?php
if (isset($_POST['submit'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];
    $repassword = $_POST['repassword'];
    $gender = isset($_POST['gender']) ? $_POST['gender'] : "";
    $hobby = isset($_POST['hobby']) ? $_POST['hobby'] : [];
    $province = $_POST['province'];

    $image = $_FILES['image']['name'];

    // Kiem tra du lieu
    if ($username == "" || $password == "" ||
        $repassword == "" || $gender == "" ||
        $province == "") {

        echo "Vui long nhap day du cac thong tin bat buoc!";
    }
    else if ($password != $repassword) {

        echo "Mat khau va nhap lai mat khau khong trung nhau!";
    }
    else if ($image != "") {

        $duoi = strtolower(pathinfo($image, PATHINFO_EXTENSION));

        if (!in_array($duoi, ["jpg", "png", "bmp", "gif"])) {
            echo "Hinh anh khong hop le! Chi chap nhan jpg, png, bmp, gif.";
        }
        else {
            echo "<h3>THONG TIN THANH VIEN</h3>";
            echo "Ten dang nhap: " . htmlspecialchars($username) . "<br>";
            echo "Mat khau: " . htmlspecialchars($password) . "<br>";
            echo "Gioi tinh: " . htmlspecialchars($gender) . "<br>";
            echo "So thich: " . htmlspecialchars(implode(", ", $hobby)) . "<br>";
            echo "Tinh: " . htmlspecialchars($province) . "<br>";
            echo "Hinh anh: " . htmlspecialchars($image) . "<br>";
        }
    }
    else {

        echo "<h3>THONG TIN THANH VIEN</h3>";
        echo "Ten dang nhap: " . htmlspecialchars($username) . "<br>";
        echo "Mat khau: " . htmlspecialchars($password) . "<br>";
        echo "Gioi tinh: " . htmlspecialchars($gender) . "<br>";
        echo "So thich: " . htmlspecialchars(implode(", ", $hobby)) . "<br>";
        echo "Tinh: " . htmlspecialchars($province) . "<br>";
        echo "Hinh anh: Khong co<br>";
    }
}
?>

<h2>DANG KY THANH VIEN</h2>

<form method="POST" enctype="multipart/form-data">

    Ten dang nhap (*):
    <input type="text" name="username">
    <br><br>

    Mat khau (*):
    <input type="password" name="password">
    <br><br>

    Nhap lai mat khau (*):
    <input type="password" name="repassword">
    <br><br>

    Gioi tinh (*):
    <input type="radio" name="gender" value="Nam"> Nam
    <input type="radio" name="gender" value="Nu"> Nu
    <br><br>

    So thich:
    <input type="checkbox" name="hobby[]" value="The thao"> The thao
    <input type="checkbox" name="hobby[]" value="Du lich"> Du lich
    <input type="checkbox" name="hobby[]" value="Am nhac"> Am nhac
    <input type="checkbox" name="hobby[]" value="Doc sach"> Doc sach
    <br><br>

    Hinh anh:
    <input type="file" name="image">
    <br><br>

    Tinh (*):
    <select name="province">
        <option value="">-- Chon tinh --</option>
        <option value="Ha Noi">Ha Noi</option>
        <option value="TP.HCM">TP.HCM</option>
        <option value="Da Nang">Da Nang</option>
        <option value="Can Tho">Can Tho</option>
        <option value="Dong Nai">Dong Nai</option>
    </select>
    <br><br>

    <input type="submit" name="submit" value="Submit">
    <input type="reset" value="Reset">

</form>
