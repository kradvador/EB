<?php ob_start();?>


<div class="row">

    <div class="col-lg-12">

        <?php

//        require ('model/form.php');


        $form = new form();
        $form->getform();



?>

<br/>
<br/>
<br/>
<br/>
<br/>


    </div>

</div>


<?php $content = ob_get_clean();?>

<?php include('views/layout.php');?>


