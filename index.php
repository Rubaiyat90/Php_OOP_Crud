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
    <div class="modal" id="addModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Add New user</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body px-4">
                    <form action="" method="post" id="form-data">
                        <div class="form-group">
                            <input type="text" class="form-control" name="username" placeholder="username" required><br>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" placeholder="name" required><br>
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" placeholder="email" required><br>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="phone" placeholder="phone" required><br>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" class="form-control" name="insert" id="insert" value="Add User">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h4 class="text-center font-weight-normal my-3">Index</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addModal"><i class="fa fa-calendar-plus-o"></i>&nbsp;Add user</button>
            </div> 
        </div>
        <hr class="my-1">
        <div class="row">
            <div class="table-responsive" id="showUser">
                <div class="col-lg-12">           
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    <script> 
        $(document).ready(function(){
            showAllUsers();
            function showAllUsers(){
                $.ajax({
                    url: "action.php",
                    type: "POST",
                    data: {action:"view"},
                    success:function(response){
                        $("#showUser").html(response);
                        $("table").DataTable();
                    }
                });
            }
            $("#insert").click(function(e){
                e.preventDefault();
                if($("#form-data")[0].checkValidity()){
                    $.ajax({
                        url: "action.php",
                        type: "POST",
                        data: $("#form-data").serialize()+"&action=insert",
                        success:function(response){
                            Swal.fire({
                                title: 'Users Added Successfulyy',
                                icon: 'success'
                            })
                            $("#form-data")[0].reset();
                            showAllUsers();
                        }
                    });
                }
            });
        });
    </script>
</body>
</html>