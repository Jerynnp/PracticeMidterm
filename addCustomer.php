<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        function back(){
            alert("บันทึกข้อมูลเรียบร้อย");
            window.location.href = "index.php"
        }
    </script>

</head>
<body>
<?php 
        $servername = "localhost";
        $uname = "root" ;
        $pw = "";
        $dbname = "webapp";
    
        $conn = new mysqli($servername, $uname, $pw, $dbname);

        if($conn){
            if(isset($_POST["UName"]) && isset($_POST["UMail"])){
                $uname = $_POST["UName"];
                $umail = $_POST["UMail"];
                $time = strval(date("Y-m-d", time()));

                $sql = "INSERT INTO customers(name, email, date_register) VALUES ('$uname', '$umail', '$time')";
                if(mysqli_query($conn, $sql)){
                    echo "<script>type='text/javascript'>back();</script>";
                }
            }
        }
        ?>   
</body>
</html>