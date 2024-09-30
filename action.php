<?php
    require_once 'db.php';
    $db = new Database();

    if(isset($_POST['action']) && $_POST['action'] == "view"){
        $output = '';
        $data = $db->read();
        if($db->totalRowCount()>0){
            $output .= '<table class="table table-striped table-sm table-bordered">
                            <thead>
                                <tr>
                                    <th class="text-center">Id</th>
                                    <th class="text-center">Username</th>
                                    <th class="text-center">Name</th>
                                    <th class="text-center">Email</th>
                                    <th class="text-center">Phone</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <tbody>';
            foreach($data as $row){
                    $output .= '<tr class="text-center text-secondary">
                                    <td class="text-center">'.$row['id'].'</td>
                                    <td>'.$row['username'].'</td>
                                    <td>'.$row['name'].'</td>
                                    <td>'.$row['email'].'</td>
                                    <td>'.$row['phone'].'</td>
                                    <td class="text-center">
                                        <a href="#" title="ViewDetails" class="text-success infoBtn" id="'.$row['id'].'"><i class="fa fa-info-circle fa-lg"></i></a>&nbsp;
                                        <a href="#" title="Edit" class="text-primary editBtn" data-bs-toggle="modal" data-bs-target="#editModal" id="'.$row['id'].'"><i class="fa fa-edit fa-lg"></i></a>&nbsp;
                                        <a href="#" title="Delete" class="text-danger deleteBtn" id="'.$row['id'].'"><i class="fa fa-trash fa-lg"></i></a>
                                    </td>
                                </tr>';
            }
            $output .= '    </tbody>
                        </table>';
            echo $output;
        }
        else{
            echo '<h3 class="text-center text-secondary mt-5"> No users founnd in database</h3>';
        }
    }
    if(isset($_POST['action']) && $_POST['action'] == "insert"){
        $username = $_POST['username'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];

        $db->insert($username, $name, $email, $phone);
    }
    if(isset($_POST['edit_id'])){
        $id = $_POST['edit_id'];
        $row = $db->getUserById($id);
        echo json_encode($row);
    }
    if(isset($_POST['action']) && $_POST['action'] == "update"){
        $id = $_POST['id'];
        $username = $_POST['username'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];

        $db->update($id, $username, $name, $email, $phone);
    }
    if(isset($_POST['delete_id'])){
        $id = $_POST['delete_id'];
        $db->delete($id);
    }
?>