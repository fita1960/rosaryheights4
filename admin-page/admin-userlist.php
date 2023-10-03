<?php
    include_once 'admin-header.php';
    include_once '../includes/connect.inc.php';
?>

<div class="main">
    <div class="container p-5">
        <table id="example" class="table table-striped" style="width:100%">
                <thead>
                    <tr>
                        <th>User ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email Adress</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                  
                    <tr>
                        <td><?php echo $rows['user_id']; ?></td>
                        <td><?php echo $rows['user_fname']; ?></td>
                        <td><?php echo $rows['user_lname']; ?></td>
                        <td><?php echo $rows['user_email']; ?></td>
                    </tr>
                    
        </table>
    </div>
</div>

<?php
    include_once "../scripts.php";
?>