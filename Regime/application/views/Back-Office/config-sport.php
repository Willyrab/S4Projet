<div class="col-xl-8 col-xxl-10 col-lg-10">
    <div class="card">
        <div class="card-header border-0 pb-0">
            <h4 class="card-title">Timeline activites sportive</h4>
        </div>
        <div class="card-body">
            <form action="<?php echo base_url(); ?>Back-Office/sportActivityController/creer" method="post">
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
                <div class="row">
                    <table class="table table-responsive-md">
                        <thead>
                            <tr>
                                <th>Jour</th>
                                <th>Activites</th>
                                <th>Description</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php for ($i = 0; $i < count($jours); $i++) { ?>
                                <tr>
                                    <td><?php echo $jours[$i]->nom; ?></td>
                                    <td>
                                        <select id="inputState" class="default-select form-control" name="sports[]">
                                            <option selected>Choose...</option>
                                            <?php for ($j = 0; $j < count($sports); $j++) { ?>
                                                <option value="<?php echo $sports[$j]->id; ?>"><?php echo $sports[$j]->nom; ?></option>
                                            <?php } ?>
                                        </select>
                                    </td>
                                    <td><input type="text" class="form-control" name="description[]" value=""></td>
                                    <input type="hidden" name="jour[]" value="<?php echo ($i + 1); ?>">
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <button type="submit" class="btn btn-primary">Ajouter au regime</button>
            </form>
        </div>
    </div>
</div>