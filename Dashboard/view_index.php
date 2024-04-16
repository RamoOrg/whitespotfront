<?php
include '../config/configDB.php';
include '../config/configURL.php';
include('../function.php');

$data = getContact();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header('location:http://localhost/car-service/index.php');
    exit;
}
?>
<?php
include '../layout/header.php';
?>


<div class="page-body">

            <div class="col-xl-6 xl-100">
                <div class="card">
                    <div class="card-header">
                        <h5>Contact Information</h5>
                        <div class="card-header-right">
                            <ul class="list-unstyled card-option">
                                <li><i class="icofont icofont-simple-left"></i></li>
                                <li><i class="view-html fa fa-code"></i></li>
                                <li><i class="icofont icofont-maximize full-card"></i></li>
                                <li><i class="icofont icofont-minus minimize-card"></i></li>
                                <li><i class="icofont icofont-refresh reload-card"></i></li>
                                <li><i class="icofont icofont-error close-card"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="user-status table-responsive latest-order-table">
                        <table class="table table-bordernone">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Contact</th>
                                        <th scope="col">Address</th>
                                        <th scope="col">Message</th>
                                        आईडी
                                    </tr>
                                </thead>
                                <?php
                                  foreach ($data as $key => $row) {
                                 ?>
                                <tbody>
                                <td> <?php echo $row->id; ?></td>
                                <td> <?php echo $row->your_name; ?></td>
                                <td> <?php echo $row->contact_no; ?></td>
                                <td> <?php echo $row->address; ?></td>
                                <td> <?php echo $row->message; ?></td>
                                <td>
                               
                                </td>
                                </tbody>
                                <?php
                                 }
                                 ?>
                            </table>
                            <a href="view_index.php" class="btn btn-primary">View All Detail</a>
                        </div>
                      
<?php
include '../layout/footer.php';
?>
