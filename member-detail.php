<?php
    $keyword = $_GET["keyword"];
    $conn = mysqli_connect("localhost", "root", "");
    if ($conn) 
    {
        mysqli_select_db($conn, "blueshop");
        mysqli_query($conn, "SET NAMES utf8");
    } 
    else 
    {
        echo mysql_errno();
    }
    $sql = "SELECT * FROM member WHERE username LIKE '%$keyword%'";
    $objQuery = mysqli_query($conn, $sql);
?>
<?php while($row = mysqli_fetch_array($objQuery)): ?>
    <img src='member_photo/<?=$row["username"]?>.jpg' width='100'><br>
    <b>ชื่อเล่น:</b> <?php echo $row["username"]?><br>
    <b>รหัสผ่าน:</b> <?php echo $row["password"]?><br>
    <b>ชื่อ:</b> <?php echo $row["name"]?><br>
    <b>ที่อยู่:</b> <?php echo $row["address"]?><br>
    <b>เบอร์โทร:</b> <?php echo $row["mobile"]?><br>
    <b>อีเมล์:</b> <?php echo $row["email"]?><br>
<?php endwhile;?>

