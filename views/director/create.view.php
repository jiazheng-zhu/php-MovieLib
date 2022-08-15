<?php require 'views/partials/header.view.php' ?>




<div class="container" style="margin-top:20px">

    <div style="width: 50%; margin: 0 auto;">
        <h1>Insert new <?=$data['table'] ?></h1>
        <form action="/index.php/<?=$data['table'] ?>/create" method="post">
            <?php
                $i=0;
                foreach ($data['attribute']  as $datum){
                    if($datum !="id"){?>
                    <div class="form-group">
                        <label for="title"><?=$data['label'][ $i]?></label>
                        <input type="text" class="form-control" id="title" name="<?=$datum  ?>" value="">
                    </div>
            <?php        }
                    $i++;
                }
            ?>
            <div>
                <button class="btn btn-primary">Save</button>
                <button type="reset" class="btn btn-warning">Reset</button>
            </div>
        </form>
    </div>
</div>

<?php require 'views/partials/footer.view.php' ?>
