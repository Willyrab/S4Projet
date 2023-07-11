<div class="card">
    <div class="card-header">
        <h4 class="card-title">Liste des codes</h4>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-responsive-md">
                <thead>
                    <tr>
                        <th class="width80"><strong>#</strong></th>
                        <th><strong>CODE</strong></th>
                        <th><strong>VALEUR</strong></th>
                        <th><strong>STATUS</strong></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php for ($i = 0; $i < count($codes); $i++) { ?>
                        <tr>
                            <td><strong><?php echo ($i + 1); ?></strong></td>
                            <td><?php echo $codes[$i]->code; ?></td>
                            <td><?php echo $codes[$i]->afficherValeur(); ?> Ar</td>
                            <td><?php echo $codes[$i]->afficherEtat(); ?></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>