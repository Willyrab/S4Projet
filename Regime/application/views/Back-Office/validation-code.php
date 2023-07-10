<head>
    <link href="<?php echo base_url(); ?>assets/vendor/datatables/css/jquery.dataTables.min.css" rel="stylesheet">
</head>
<div class="col-12">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Demande de rechargement</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table id="example5" class="display min-w850">
                    <thead>
                        <tr>
                            <th>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="form-check-input" id="checkAll" required="">
                                    <label class="custom-control-label" for="checkAll"></label>
                                </div>
                            </th>
                            <th>Order ID</th>
                            <th>Date Check in</th>
                            <th>Name</th>
                            <th>Assgined</th>
                            <th>Disease</th>
                            <th>Status</th>
                            <th>Table no</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="form-check-input" id="customCheckBox2" required="">
                                    <label class="custom-control-label" for="customCheckBox2"></label>
                                </div>
                            </td>
                            <td>#P-00001</td>
                            <td>26/02/2020, 12:42 AM</td>
                            <td>Tiger Nixon</td>
                            <td>Dr. Cedric</td>
                            <td>Cold & Flu</td>
                            <td>
                                <span class="badge light badge-danger">
                                    <i class="fa fa-circle text-danger me-1"></i>
                                    New Patient
                                </span>
                            </td>
                            <td>AB-001</td>
                            <td>
                                <div class="dropdown ms-auto text-end">
                                    <div class="btn-link" data-bs-toggle="dropdown">
                                        <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24"></rect>
                                                <circle fill="#000000" cx="5" cy="12" r="2"></circle>
                                                <circle fill="#000000" cx="12" cy="12" r="2"></circle>
                                                <circle fill="#000000" cx="19" cy="12" r="2"></circle>
                                            </g>
                                        </svg>
                                    </div>
                                    <div class="dropdown-menu dropdown-menu-end">
                                        <a class="dropdown-item" href="#">Accept Patient</a>
                                        <a class="dropdown-item" href="#">Reject Order</a>
                                        <a class="dropdown-item" href="#">View Details</a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<script src="<?php echo base_url(); ?>assets/vendor/datatables/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/plugins-init/datatables.init.js"></script>