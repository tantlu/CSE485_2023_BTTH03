<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php require_once $_SERVER['DOCUMENT_ROOT'].'/CSE485_2023_BTTH02/views/layout/header.php';    
?>
     <main class="container-fluid mt-3">
        <h3 class="text-center text-uppercase mb-3 text-primary">Các thể loại bài hát</h3>
        <div class="row">
            <?php
                foreach($categories as $category){ ?>
                
                        <h5 class="card-title text-center">
                            <a href= "category.php?controller=category&action=detail&id=<?= $category->getId()?>" class="text-decoration-none">
                                <?= $category->getName()?></a>
                        </h5>

                <?php }?>
        </div>
    </main>
</body>
</html>