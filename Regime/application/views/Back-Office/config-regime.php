<head>
    <meta charset="utf-8" />
</head>

<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Ajout de plat pour un regime</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <form action="<?php echo base_url(); ?>Back-Office/dietController/ajouterPlat" method="post">
                    <div class="row">
                        <div class="mb-3 col-md-4">
                            <label class="form-label">Regime</label>
                            <select id="inputState" class="default-select form-control wide" name="idRegime">
                                <option selected>Choose...</option>
                                <?php for ($i = 0; $i < count($regimes); $i++) { ?>
                                    <option value="<?php echo $regimes[$i]->id; ?>"><?php echo $regimes[$i]->nom; ?>
                                        entre <?php echo $regimes[$i]->poidsDebut; ?> et <?php echo $regimes[$i]->poidsFin ?> kg</option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <input type="hidden" name="idMenu" value="<?php echo $idMenu; ?>">
                    <input type="submit" value="Valider" class="btn btn-primary mb-5" />
                    <div class="row">
                        <p>Selectionner 7 plats: </p>
                        <p><span style="color: red;"><?php echo $message; ?></span></p>
                        <table class="table table-responsive-md">
                            <thead>
                                <tr>
                                    <th>&nbsp;</th>
                                    <th class="width50">
                                        <div class="custom-control custom-checkbox checkbox-success check-lg me-3">
                                            <input type="checkbox" name="idPlat" class="form-check-input" id="checkAll">
                                            <label class="custom-control-label" for="checkAll"></label>
                                        </div>
                                    </th>
                                    <th><strong>ID.</strong></th>
                                    <th><strong>Nom</strong></th>
                                    <th><strong>Ingredients</strong></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php for ($i = 0; $i < count($plats); $i++) { ?>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td>
                                            <div class="custom-control custom-checkbox checkbox-success check-lg me-3">
                                                <input type="checkbox" name="idPlat[]" value="<?php echo $plats[$i]->id; ?>" class="form-check-input" id="customCheckBox2">
                                                <label class="custom-control-label" for="customCheckBox2"></label>
                                            </div>
                                        </td>
                                        <td><?php echo ($i + 1); ?></td>
                                        <td><?php echo $plats[$i]->nom; ?></td>
                                        <td><?php echo $plats[$i]->ingredients; ?></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>