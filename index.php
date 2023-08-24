<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
        padding: 5px;
        }
    </style>
</head>
<body>
    <form method="POST" action="addCustomer.php"> 
    <fieldset>
        <legend>เพิ่มข้อมูลลูกค้า</legend>
        <label for="UName">ชื่อ:</label>
        <input type="text" name="UName"><br><br>
        <label for="UMail">ชื่อ:</label>
        <input type="text" name="UMail"><br><br>
        <input type="submit" value="submit">
    </fieldset>
    </form>
    <h3>ตารางรายชื่อลูกค้า</h3>
    <table border=1>
    <tr>
        <th>หมายเลข</th>
        <th>ชื่อลูกค้า</th> 
        <th>อีเมล</th>
        <th>วันที่ใช้บริการล่าสุด</th> 
    </tr>
    <?php 
        $servername = "localhost";
        $uname = "root" ;
        $pw = "";
        $dbname = "webapp";
    
        $conn = new mysqli($servername, $uname, $pw, $dbname);
    
        $sql = "SELECT * FROM customers";
        $result = mysqli_query($conn, $sql);
        while($r= mysqli_fetch_assoc($result)){
            echo "<tr>". "<td>". $r["id"]. "</td>". "<td>". $r["name"]. "</td>". "<td>". $r["email"]. "</td>". "<td>". $r["date_register"]. "</td>". "</tr>";
        }
    ?>
    </table>
</body>
</html>