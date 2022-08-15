<?php require 'views/partials/header.view.php' ?>


<div class="container" style="margin-top:20px">


    <table class="table table-stripped">
        <tr>
            <?php foreach ($data['label'] as $field ) {?>
            <th><?= ucwords($field)?></th>
            <?php } ?>
            <th>Favorite</th>
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
                    <?php }elseif($datum =="favorite"){

                        if($row->favorite==1){
                            echo "<td><span class='glyphicon glyphicon-star' aria-hidden='true' ></span></td>";
                        }else{
                            echo "<td><span class='glyphicon glyphicon-star-empty lg' aria-hidden='true' ></span></td>";
                        }

                     }else{?>
                        <td><?=$row->{$datum} ?></td>
                    <?php }?>
                <?php }?>
            <td>
                <?php
                    if($row->favorite ==0){
                        echo " <form action='/index.php/myfavorite/edit' method='post'>";
                        echo "<input type='hidden' name='id' value='".$row->id."'>";
                        echo "<input type='hidden' name='favorite' value='1'>";
                        echo " <button class='btn btn-primary'>Like</button>";
                        echo "</form>";
                    }else{
                        echo " <form action='/index.php/myfavorite/edit' method='post'>";
                        echo "<input type='hidden' name='id' value='".$row->id."'>";
                        echo "<input type='hidden' name='favorite' value='0'>";
                        echo " <button class='btn btn-danger'>Cancel</button>";
                        echo "</form>";
                    }

                ?>

            </td>
        </tr>
        <?php }?>
    </table>
</div>

<?php require 'views/partials/footer.view.php' ?>
