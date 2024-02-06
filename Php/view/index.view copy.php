
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <?php include "view/_partials/header.view.php";?>
    <section class="container">
        <ul>
            <form action="form">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="vardas...">

                </div>

            </form>
            <form action="form">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="pavarde...">

                </div>

            </form>
            <form action="form">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="el. pastas...">

                </div>

            </form>
        </ul>
      
    </section>
</body>
</html>
