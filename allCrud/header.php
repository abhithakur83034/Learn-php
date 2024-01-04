<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CRUD Header</title>
    <style>
        /* Add custom styles here */

        /* Container styles */
        .container {
            padding-top: 20px;
            padding-bottom: 20px;
            background-color: #f8f9fa; /* Optional background color */
        }

        /* Header text style */
        .header-text {
            font-size: 24px;
            font-weight: bold;
        }

        /* Navigation links style */
        .nav-link {
            display: block;
            padding: 10px;
            text-align: center;
            color: #007bff; /* Link color */
            text-decoration: none;
        }

        .nav-link:hover {
            background-color: #007bff; /* Hover color */
            color: #fff; /* Text color on hover */
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-sm-6 header-text">PHP CRUD</div>
        <div class="col-sm-6">
            <div class="row">
                <div class="col-sm-6">
                    <a href="add.php" class="nav-link">ADD</a>
                </div>
                <div class="col-sm-6">
                    <a href="show.php" class="nav-link">SHOW</a>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
