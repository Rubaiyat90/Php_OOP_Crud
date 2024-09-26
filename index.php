<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.7/css/dataTables.bootstrap5.css">
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><i class="fa fa-android"></i>Home</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
            </li>
        </ul>
        </div>
    </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h4 class="text-center font-weight-normal my-3">Index</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <button type="button" class="btn btn-primary"><i class="fa fa-calendar-plus-o"></i>&nbsp;Add user</button>
            </div> 
        </div>
        <hr class="my-1">
        <div class="row">
            <div class="table-responsive" id="showUser">
            <div class="col-lg-12">
                <table class="table table-striped table-sm table-bordered">
                    <thead>
                        <tr class="text-center">
                            <th>Id</th>
                            <th>Username</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php for($i=1;$i<100;$i++): ?>
                            <tr class="text-center text-secondary">
                                <td><?= $i ?></td>
                                <td>User <?= $i ?></td>
                                <td>Name <?= $i ?></td>
                                <td>rrhimel<?= $i ?>@gmail.com</td>
                                <td>01641022335</td>
                                <td>
                                    <a href="#" title="ViewDetails" class="text-success"><i class="fa fa-info-circle fa-lg"></i></a>&nbsp;
                                    <a href="#" title="Edit" class="text-primary"><i class="fa fa-edit fa-lg"></i></a>&nbsp;
                                    <a href="#" title="Delete" class="text-danger"><i class="fa fa-trash fa-lg"></i></a>
                                </td>
                            </tr>
                        <?php endfor; ?>
                    </tbody>
                </table>
            </div>
            </div>
        </div>
    </div>
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.datatables.net/2.1.7/js/dataTables.js"></script>
    <script src="https://cdn.datatables.net/2.1.7/js/dataTables.bootstrap5.js"></script>
    <script> 
        new DataTable('table');
    </script>
</body>
</html>