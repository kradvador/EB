<?php
/**
 * Created by PhpStorm.
 * User: leboe
 * Date: 05/04/2019
 * Time: 08:59
 */


class form extends database
{
    public function getform() {

        if(isset($_POST['submit'])){

            $targetDir = "img/uploads/";
            $allowTypes = array('jpg','png','jpeg','gif');

            $statusMsg = $errorMsg = $SQLPhoto1 = $SQLPhoto2 = $errorUpload = $errorUploadType = '';

            // File upload configuration for the single file, main photo
            if(!empty($_FILES['file']['name'])){
                    // File upload path
                    $fileName = basename($_POST['nom'] . '-' . $_FILES['file']['name']);
                    $targetFilePath = $targetDir . $fileName;

                    // Check whether file type is valid
                    $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
                    if(in_array($fileType, $allowTypes)){
                        // Upload file to server
                        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
                            // Image db insert sql
                            $SQLPhoto1 = "$fileName";
                        }else{
                            $errorUpload .= $_FILES['file']['name'].', ';
                        }
                    }else{
                        $errorUploadType .= $_FILES['file']['name'].', ';
                    }



            }else{
                $statusMsg = 'Merci de choisir un fichier.';
            }

            // Display status message
            echo $statusMsg;


            // File upload configuration for the multiple files secondary pictures

            if(!empty(array_filter($_FILES['files']['name']))){
                foreach($_FILES['files']['name'] as $key=>$val){
                    // File upload path
                    $fileName = basename($_POST['nom'] . '-' . $_FILES['files']['name'][$key]);
                    $targetFilePath = $targetDir . $fileName;

                    // Check whether file type is valid
                    $fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
                    if(in_array($fileType, $allowTypes)){
                        // Upload file to server
                        if(move_uploaded_file($_FILES["files"]["tmp_name"][$key], $targetFilePath)){
                            // Image db insert sql
                            $SQLPhoto2 .= ("$fileName" . ",");
                        }else{
                            $errorUpload .= $_FILES['files']['name'][$key].', ';
                        }
                    }else{
                        $errorUploadType .= $_FILES['files']['name'][$key].', ';
                    }

                }


            }else{
                $statusMsg = 'Merci de choisir un fichier.';
            }

            // Display status message
            echo $statusMsg;

        }



            new database();
            $db=$this->getDb();

            $SQLPhoto1 = trim($SQLPhoto1,',');
            $SQLPhoto2 = trim($SQLPhoto2,',');
            $nom = $db->quote($_POST['nom']);
            $description = $db->quote($_POST['description']);
            $date = $db->quote($_POST['date']);
            $adopte = $db->quote($_POST['adopte']);
            $disparu = $db->quote($_POST['disparu']);

            // Insert image file name into database

            $query="INSERT INTO animaux(nom, description, photo1, photo2, adopte, disparu, naissance) 
                VALUES ($nom,$description,'$SQLPhoto1','$SQLPhoto2',$adopte,$disparu,$date)";
            $req=$db->prepare($query);
            $req->bindParam(':description', $description, PDO::PARAM_STR);
            $req->execute();

            //var_dump($description);

        print_r($req->errorCode());
        print_r($req->errorInfo());

        header('location:valid');


    }
}