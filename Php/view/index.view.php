
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
        <?php if(isset($_get['register'])):?>
    <section>
        <h2>produktu katalogas</h2>
        <ul>
            <?php foreach($users as $group =>$userData):?>
                <li><?= $group;?>
                     <ul>
                <?php foreach($userData as $userId =>$user):?>
                    <?php if(strlen($user['firstName']) >=6):?>
                <li>
                    <?= $user['firstName'].' '. $user['lastName'];?>
                </li>
                <?php endif;?>
            <?php endforeach;?>
            </ul>
            </li>
                <?php endforeach;?>
        </ul>
    </section>
    <ul>
        <?php foreach($_GET as $key=>$value): ?>
            <?php if($key!=='register'):?>
                <li><?php echo htmlspecialchars($value)?></li>
            <?php endif;?>
            <?php endforeach;?>
            
    </ul>
    <?php endif;?>
    <section class="container">
        <ul>
            <form action="form" method="post">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="vardas...">

                </div>

            
       
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="pavarde...">

                </div>

           
            
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="el. pastas...">

                </div>
                <div class="form-group">
                    <select name="destination">
                        <?php foreach($destinations as $destination);?>
                        <option value="<?$destination;?>"></option>
                    </select>
                    <input type="text" >

                </div>
                <div class="form-group">
                    <button class="btn btn-primary" type="submit">registruokis</button>
                </div>
            </form>
        </ul>
      
    </section>
</body>
</html>