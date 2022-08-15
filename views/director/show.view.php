<?php require 'views/partials/header.view.php' ?>


<div class="container" style="margin-top:20px">

    <div style="margin-bottom: 20px;">
        <a href="/index.php/<?=$data['table'] ?>" class="btn btn-success">Back</a>
    </div>

    <table class="table">
        <tr>
            <th>Field Name</th>
            <th>Value</th>
        </tr>
        </tr>
        <?php foreach ($data['data'] as $row) {?>

            <?php
                $i=0;
                foreach ( $data['attribute'] as $datum){
                    if(is_array($datum)){
                        $str ="";
                        foreach ($datum as $value){
                            $str.= $row->{$value};
                        }
                        echo "<tr><td>".$data['label'][$i]."</td><td>". $str."</td></tr>";
                    }else{
                        echo "<tr><td>".$data['label'][$i]."</td><td>".$row->{ $datum}."</td></tr>";
                    }

                    $i++;
                }

            ?>

        <?php }?>
    </table>
</div>

<?php require 'views/partials/footer.view.php' ?>
