<?php require 'views/partials/header.view.php' ?>


<div class="container" style="margin-top:20px">

    <div style="margin-bottom: 20px;">
        <a href="/index.php/<?=$data['table'] ?>/create" class="btn btn-primary "> Insert new <?=$data['table'] ?></a>
    </div>
    <table class="table table-stripped">
        <tr>
            <?php foreach ($data['label'] as $field ) {?>
            <th><?= ucwords($field)?></th>
            <?php } ?>
            <th>Action</th>
        </tr>
    <?php foreach ($data['data'] as $row) {?>
        <tr>
                <?php foreach ($data['attribute'] as $datum){ ?>
                    <?php if(is_array($datum)) {?>
                        <td >
                        <?php foreach ($datum as $item){ ?>
                            <?= $row->{$item}  ?>
                        <?php } ?>
                        </td>
                    <?php }else{?>
                        <td><?=$row->{$datum} ?></td>
                    <?php }?>
                <?php }?>
            <td>
                <a href="/index.php/<?=$data['table'] ?>/show?id=<?=  $row->id ?>" class="btn btn-success btn-sm">Show</a>|
                <a href="/index.php/<?=$data['table'] ?>/edit?id=<?=  $row->id ?>" class="btn btn-primary btn-sm">Edit</a> |
                <a href="/index.php/<?=$data['table'] ?>/delete?id=<?= $row->id ?>" class="btn btn-danger btn-sm">Delete</a>
            </td>
        </tr>
        <?php }?>
    </table>
</div>

<?php require 'views/partials/footer.view.php' ?>
