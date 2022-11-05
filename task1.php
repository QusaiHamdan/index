<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class="container bg-dark text-white p-3 my-3 rounded">
        <div class="container bg-success text-light text-center align-items-center p-2 mt-3 rounded fw-bolder mx-auto d-block">
            <p class="my-auto mx-auto d-block">The Time Now Is <br> <?php @date_timezone_set('Asian/Amman'); echo date('h:i:s A');  ?></p>
        </div>
        <h1>Nesting Button Groups & Dropdown Menus</h1>
        <p class="p-2">Nest button groups to create dropdown menus (you will learn more about dropdowns in a later chapter):</p>
        <div class="container mt-3 text-center">
        <?php
                        if($_SERVER["REQUEST_METHOD"] == 'GET' ){
                            $result = $_REQUEST['result'];
                            echo "<h3 style='color:#fff;'>";
                            echo $result;
                            echo "</h3>";
                        }
                    ?>
            <div class="btn-group">
                <div class="btn-group">
                    <button type="button" class="btn btn-outline-warning dropdown-toggle" data-bs-toggle="dropdown">Apple</button>
                        <div class="dropdown-menu">
                            <a href="#" class="dropdown-item">Watch</a>
                            <a href="#" class="dropdown-item">Iphone</a>
                            <a href="#" class="dropdown-item">Ipad</a>
                            <a href="#" class="dropdown-item">Ipod</a>
                            <a href="#" class="dropdown-item">MacOS</a>
                        </div>
                </div>
                    <div class="btn-group">
                        <button type="button" class="btn btn-outline-warning dropdown-toggle" data-bs-toggle="dropdown">Samsung</button>
                            <div class="dropdown-menu">
                                <a href="#" class="dropdown-item">Watch</a>
                                <a href="#" class="dropdown-item">SmartPhone</a>
                                <a href="#" class="dropdown-item">Tablet</a>
                            </div>
                    </div>
                        <div class="btn-group">
                            <button type="button" class="btn btn-outline-warning dropdown-toggle" data-bs-toggle="dropdown">Sony</button>
                                <div class="dropdown-menu">
                                    <a href="#" class="dropdown-item">Tablet</a>
                                    <a href="#" class="dropdown-item">SmartPhone</a>
                                </div>
                        </div>
            </div>
        </div>
</body>
</html>