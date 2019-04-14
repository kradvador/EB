<?php ob_start();?>




        <?php

        $tm = new taskManager();
        $chats = $tm->getCat();

        ?>

        <?php  for($i=0;$i<sizeof($chats);$i++): ?>

        <?php $photos2 = explode(',',$chats[$i]['photo2']); ?>

            <div class="row global_chat">

                <div class="col-lg-3">

                    <span class="titre_col">Nom :</span>
                    <?php echo($chats[$i]['nom']); ?>
                    <br/>
                    <img src="img/uploads/<?php echo($chats[$i]['photo1']);?>" alt="" class="img-responsive">

                </div>

                <div class="col-lg-7 description">

                    <span class="titre_col">Description :</span>
                    <br/>
                    <?php echo($chats[$i]['description']);?>

                    <div class="row">

                        <div class="col-lg-12 img_secondaire">

                            <?php for ($j=0;$j<sizeof($photos2);$j++): ?>

                                <img src="img/uploads/<?php echo($photos2[$j]);?>" alt="" class="img-responsive photo2">

                            <?php  endfor;?>

                        </div>

                    </div>

                </div>

                <div class="col-lg-2">
                    <span class="titre_col">Date de naissance :</span>
                    <br/>
                    <?php echo($chats[$i]['naissance']);?>
                </div>

            </div>



            <hr/>

        <?php endfor;?>

<br/>
<br/>
<br/>



<?php $content = ob_get_clean();?>

<?php include('views/layout.php');?>


