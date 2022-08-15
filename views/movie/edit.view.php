<?php require 'views/partials/header.view.php' ?>




<div class="container" style="margin-top:20px">
    <div style="width: 50%; margin: 0 auto;">
        <h1>Insert new <?=$data['table'] ?></h1>
        <form action="/index.php/<?=$data['table'] ?>/edit" method="post">
            <?php foreach ($data['data'] as $row) {?>

            <input type="hidden" value="<?= $row->id ?>" name="id">
            <div class="form-group">
                <label for="title"><?=$data['label'][1]?></label>
                <input type="text" class="form-control" id="title" name="movie_name" value="<?=$row->movie_name ?>">
            </div>
            <div class="form-group">
                <label for="title"><?=$data['label'][2]?></label>
                <?php

                ?>
                <select name="director_id" id="author_id" class="form-control">
                <?php foreach ($data['director'] as $datum){
                        echo "<option value='" . $datum->id ."' ".( ($row->director_id === $datum->id) ?   " selected='selected' " :"") ." >".$datum->name." " .$datum->lastname."</option>";
                } ?>
                </select>
            </div>
            <div class="form-group">
                <label for="title"><?=$data['label'][3]?></label>
                <input type="text" class="form-control" id="title" name="year" value="<?=$row->year?>">
            </div>


            <?php }?>

            <div>
                <button class="btn btn-primary">Save</button>
                <button type="reset" class="btn btn-warning">Reset</button>
            </div>
        </form>
    </div>
</div>

<?php require 'views/partials/footer.view.php' ?>
