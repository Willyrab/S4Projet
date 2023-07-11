<div class="col-xl-6 col-lg-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Ajout Sport</h4>
        </div>
        <div class="card-body">
            <div class="basic-form">
                <form action="<?php echo base_url() ?>Back-Office/sportActivityController/ajouter" method="post">
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Nom de l' activite</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" name="nomSport">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Ajouter</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>