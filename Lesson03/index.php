<?php
    session_start();
    echo"<h1> Đây là phiên làm việc của người dùng " . session_id();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>
<body>
    <?php
        // header
        include("fragment/header.php");
    ?>
    <section class="container border my-1">
        <div class="row">
            <?php
                require("fragment/nav-bar.");
            ?>
        </div>
    </section>
    <section>
        <?php
        // require("fragments/wrongfile.php")
        include("fragments/wrongfile.php");
        ?>
    </section>

    <?php
    include("fragments/footer.php");
    ?>
    <form action="" method="post">
        <button > Hủy session</button>
    </form>
</body>
</html>