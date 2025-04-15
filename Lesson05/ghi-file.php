<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ghi nội dung và file</title>
</head>
<body>
    <h1>Ghi nội dung vào file</h1>
    <?php
        $fileName = "ghi-file.txt";
        $file = fopen($fileName,"w");

        $noi_dung = "devmaster";
        fwrite($file, $noi_dung);

        $noi_dung = "Academy\n";
        fwrite($file, $noi_dung);
    ?>
    
    
</body>
</html>