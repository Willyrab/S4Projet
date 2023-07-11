<div class="col-xl-6 col-lg-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Nouveau plat</h4>
        </div>
        <div class="card-body">
            <div class="basic-form">
                <form action="platController/ajouter" method="post" enctype="multipart/form-data">
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Nom</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="nom">
                        </div>
                    </div>
                    <fieldset class="mb-3">
                        <div class="row">
                            <label class="col-form-label col-sm-3 pt-0">Menu</label>
                            <div class="col-sm-9">
                                <?php foreach ($menu as $m) { ?>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="idMenu" value="<?php echo $m->id; ?>" checked>
                                        <label class="form-check-label">
                                            <?php echo $m->nom; ?>
                                        </label>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </fieldset>
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Ingredients</label>
                        <div class="col-sm-9">
                            <div class="mb-3">
                                <textarea class="form-control" rows="10" id="comment" name="ingredients"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <div class="input-group mb-3">
                            <div class="form-file">
                                <input type="file" class="form-file-input form-control" name="photo">
                            </div>
                            <span class="input-group-text search_icon">Upload</span>
                        </div>
                    </div>
                    <table class="table table-responsive-md-5">
                        <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Quantite</th>
                                <th>Unite</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php for ($i = 0; $i < count($nutriments); $i++) { ?>
                                <tr>
                                    <td>
                                        <?php echo $nutriments[$i]->nom; ?>
                                    </td>
                                    <td>
                                        <input type="hidden" name="nutriments[]" class="form-control" value="<?php echo $nutriments[$i]->id; ?>">
                                        <input type="number" name="quantite[]" class="form-control" value="0" />
                                    </td>
                                    <td>
                                        <?php echo $nutriments[$i]->notation; ?>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    <button type="submit" class="btn btn-primary">Ajouter</button>
                </form>
            </div>
        </div>
    </div>
</div>