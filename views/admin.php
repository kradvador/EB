<?php ob_start();?>


<div class="row">
        <div class="col-lg-12">
            <h1>Page d'administration</h1>
        </div>
    </div>

    <div class="row">
        <form method="post" action="form" enctype="multipart/form-data">
            <div class="form-group">
                <label for="nom">Nom de l'animal</label>
                <input type="text" class="form-control" id="nom" placeholder="Nom de l'animal" name="nom" required>
            </div>
            <div class="form-group">
                <label for="description">Texte de description</label>
                <textarea type="text" class="form-control" id="description" placeholder="Description de l'animal" rows="6" name="description" required></textarea>
            </div>
            <div class="form-group">
                <label for="date" class="col-2 col-form-label">Date de naissance</label>
                <div class="col-10">
                    <input class="form-control" type="date" id="date" name="date" required>
                </div>
            </div>
            <div class="form-group">
                <label for="selectadopte">Adopté ?</label>
                <select id="selectadopte" class="form-control" name="adopte">
                    <option value="oui">Oui</option>
                    <option value="non" selected>Non</option>
                </select>
            </div>
            <div class="form-group">
                <label for="selectdisparu">Disparu ?</label>
                <select id="selectdisparu" class="form-control" name="disparu">
                    <option value="oui">Oui</option>
                    <option value="non" selected>Non</option>
                </select>
            </div>
            <div class="form-group">
                <label class="custom-file">
                    Photo principale
                    <input type="hidden" name="MAX_FILE_SIZE" value="300000" />
                    <input type="file" id="photo1" class="custom-file-input" name="file">
<!--                    <span class="custom-file-control"></span>-->
                </label>
            </div>
            <div class="form-group">
                <label class="custom-file">
                    Photos annexes
                    <input type="hidden" name="MAX_FILE_SIZE" value="300000" />
                    <input type="file" id="photo2" class="custom-file-input" name="files[]" multiple>
<!--                    <span class="custom-file-control"></span>-->
                </label>
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Ajouter</button>
        </form>
        <br/>
        <br/>
        <br/>
    </div>


<?php $content = ob_get_clean();?>

<?php include('views/layout.php');?>