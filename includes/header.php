<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
    <title><?php echo "Portfolio-{$title}"; ?></title>
    <?php echo "<link rel='stylesheet' href='$css_style'>" ?>
</head>

<body>
    <div class="container side">
        <nav class="navbar bg-light ">
            <div class="container-fluid">
                <div class="navbar-brand">
                    <?php echo "<a href='$index' class='navbar-brand'>CONference</a>" ?>
                    <!-- <a href="index.php" class="navbar-brand">CONference</a> -->
                </div>
                <ul class="navbar-nav me-auto ">
                    <li class="nav-item">
                        <?php echo " <a href='$nav' class='nav-link'> Registered</a>" ?>
                        <!-- <a href="pages/registered.php">Registered</a> -->
                    </li>
                </ul>
            </div>
        </nav>
        <h1 class="text-center text-capitalize fs-2 fw-normal lh-lg"><?php echo $def_header ?></h1>