<div class="col-xl-6 col-lg-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Ajout regime</h4>
        </div>
        <div class="card-body">
            <div class="basic-form">
                <form action="dietController/creer" method="post">
                    <div class="row">
                        <div class="mb-3 col-md-6">
                            <label class="form-label">Variation Min.</label>
                            <input type="number" class="form-control" name="variationMin">
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label">Variation Max.</label>
                            <input type="number" class="form-control" name="variationMax">
                        </div>
                        <div class="mb-3 col-md-6">
                            <label class="form-label">Duree en jours</label>
                            <input type="number" class="form-control" name="duree">
                        </div>
                        <div class="mb-3 col-md-6">
                            <label>Prix par semaine</label>
                            <input type="number" class="form-control" name="prix">
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-md-4">
                            <label class="form-label">Objectif</label>
                            <select id="inputState" class="default-select form-control wide" name="idObjectif">
                                <option selected>Choose...</option>
                                <?php for ($i = 0; $i < count($objectifs); $i++) { ?>
                                    <option value="<?php echo $objectifs[$i]->id; ?>"><?php echo $objectifs[$i]->nom; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Creer</button>
                </form>
            </div>
        </div>
    </div>
</div>