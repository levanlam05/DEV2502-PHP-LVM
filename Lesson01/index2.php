<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //xử lý dữ liệu khi submit form
        if (isset($_REQUEST["btnSubmit"])) { // khi người dùng nhấn vào submit
            //lấy dữ lieuej trên form bằng $_request
        $name= $_REQUEST["txtFullName"];
        $age = $_REQUEST["txtAge"];

        echo "<h1> _REQUEST </h1>";
        }
    ?>

    <h1> Làm việc với form</h1>
    <hr>
    <form name="myDorm " method="GET" action="">
        <p>Name:
            <input type="text" name="txtFullName" value="">
        <p> Age:
            <input type="number" name="txtAge" value="">
        <p>
            <input type="sybmit" value="Submit" name="btnSubmit">
        </p>
    </form>
    
</body>
</html>