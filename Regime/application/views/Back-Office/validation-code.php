<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Demande de recharge</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-responsive-md">
                    <thead>
                        <tr>
                            <th class="width80"><strong>#</strong></th>
                            <th><strong>DATE</strong></th>
                            <th><strong>UTILISATEUR</strong></th>
                            <th><strong>CODE</strong></th>
                            <th><strong>MONTANT</strong></th>
                            <th><strong>STATUS</strong></th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php for ($i = 0; $i < count($demandes); $i++) { ?>
                            <tr>
                                <td><strong><?php echo ($i + 1); ?></strong></td>
                                <td><?php echo $demandes[$i]->date; ?></td>
                                <td><?php echo $demandes[$i]->utilisateur; ?></td>
                                <td><?php echo $demandes[$i]->code; ?></td>
                                <td><?php echo $demandes[$i]->afficherValeur(); ?></td>
                                <td><?php echo $demandes[$i]->afficherEtat(); ?></td>
                                <td>
                                    <div class="dropdown">
                                        <button type="button" class="btn btn-default light sharp" data-bs-toggle="dropdown">
                                            <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24" />
                                                    <circle fill="#000000" cx="5" cy="12" r="2" />
                                                    <circle fill="#000000" cx="12" cy="12" r="2" />
                                                    <circle fill="#000000" cx="19" cy="12" r="2" />
                                                </g>
                                            </svg>
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="validerRecharge/<?php echo $demandes[$i]->id; ?>/<?php echo $demandes[$i]->idUtilisateur; ?>/<?php echo $demandes[$i]->valeur; ?>">Valider</a>
                                            <a class="dropdown-item" href="refuserRecharge/<?php echo $demandes[$i]->id; ?>">Refuser</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>