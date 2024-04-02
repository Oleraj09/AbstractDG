<?php
    include "query.php";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Abstract :: Admin Panel!!</title>
    <link rel="stylesheet" href="./assets/css/admin.css">
    <!-- Bootstrap 5 CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <!-- Data Table CSS -->
    <link rel='stylesheet' href='https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap5.min.css'>
    <!-- Font Awesome CSS -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css'>
</head>
<body>
    <div class="admin">
        <div class="container-fluid p-5">
            <div class="row">
                <div class="col-lg-4">
                    <ul>
                        <li><a href="admin.php">Manage Team Member</a></li>
                        <li><a href="capabilities.php" class="active">Manage Capabilities</a></li>
                        <li><a href="index.php">Exit Admin Panel</a></li>
                    </ul>
                </div>
                <div class="col-lg-8">
                    <div class="table-list">
                        <div class="d-flex pb-2 justify-content-between">
                            <div class="heading">Manage Capabilities : </div>
                            <a href="capabilityadd.php">
                                <button type="button" class="btn btn-primary text-white">
                                    <strong>ADD ITEMS</strong>
                                </button>
                            </a>
                        </div>
                        <hr>
                        <table id="example2" class="table table-striped" style="width:100%">
                            <thead>
                                <tr class="text-center">
                                    <th>Serial</th>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                    if($item>0){
                                        $i=0;
                                        while($data = $iconx->fetch_assoc()){ 
                                            $i++;
                                ?>
                                <tr class="text-center">
                                    <td># <?= $i ?></td>
                                    <td><img style="height:30px;width:30px;border-radius:50%;" src="./<?= $data['icon'] ?>" alt=""></td>
                                    <td><?= $data['name'] ?></td>
                                    <td>
                                        <a href="capabilityadd.php?page=cap&id=<?= $data['id'] ?>" class="bg-primary rounded-pill py-0 m-2 px-3">Edit</a>
                                        <a href="?page=cap&type=delete&id=<?= $data['id'] ?>" class="bg-danger rounded-pill py-0 m-2 px-3">Delete</a>
                                    </td>
                                </tr>
                                <?php
                                        }
                                    }else{?>
                                        <tr>
                                            <td colspan="4" class="text-center px-2">No Data has been Found!!</td>
                                        </tr>
                                        <?php
                                    }
                                ?>
                            </tbody>
                            <tfoot>
                                <tr class="text-center">
                                    <th>Serial</th>
                                    <th>Photo</th>
                                    <th>Name</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jQuery -->
    <script src='https://code.jquery.com/jquery-3.7.0.js'></script>
    <!-- Data Table JS -->
    <script src='https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js'></script>
    <script src='https://cdn.datatables.net/responsive/2.1.0/js/dataTables.responsive.min.js'></script>
    <script src='https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap5.min.js'></script>
    <script>
    $(document).ready(function() {
        $('#example2').DataTable({
            "columnDefs": [{
                "orderable": false,
                "targets": 3
            }],
            scrollX: true,
            language: {
                'paginate': {
                    'previous': '<span class="fa fa-chevron-left"></span>',
                    'next': '<span class="fa fa-chevron-right"></span>'
                },
                "lengthMenu": 'Display <select class="form-control input-sm">' +
                    '<option value="10">10</option>' +
                    '<option value="20">20</option>' +
                    '<option value="30">30</option>' +
                    '<option value="40">40</option>' +
                    '<option value="50">50</option>' +
                    '<option value="-1">All</option>' +
                    '</select> results'
            }
        })
    });
    </script>
</body>

</html>