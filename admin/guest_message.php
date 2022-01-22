<?php
session_start();
require_once('../header.php');
require_once('navbar.php');
require_once('../db.php');


if (!isset($_SESSION['user_status'])) {
    header('location: ../login.php');
}

$get_query = "SELECT * FROM guest_messages";
$from_db = mysqli_query($db_connect, $get_query);
// $after_assoc = mysqli_fetch_assoc($from_db);
// print_r($after_assoc);
?>

<section>

 <div class="container">
        <div class="row">
            <div class="col-lg-8 m-auto">
                <div class="card mt-3">
                    <div class="card-header bg-success text-white text-center">
                        <h4>All guest messages </h4>
                    </div>
                    <div class="card-body">
                <table class="table table-success table-bordered table-striped">
                    <thead>
                     <tr>
                         
                         <th scope="col">guest name</th>
                         <th scope="col">guest email</th>
                         <th scope="col">guest  message</th>
                         <th scope="col">action</th>
                      </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach($from_db AS $messages){
                        ?>
                         <tr class=" <?php
                         if($messages['read_status']==1){
                             echo "text-primary";
                         }
                         else{
                             echo "text-dark";
                         }

                         ?>">
                         
                            <td> <?=$messages['guest_name']?> </td>
                            <td> <?=$messages['guest_email']?> </td>
                            <td> <?=$messages['guest_message']?> </td>
                            <td> 
                                <?php
                                 if($messages['read_status']==1):
                                ?> 

                                   <a href="message_status.php?message_id= <?=$messages['id']?>"class="btn btn-sm btn-warning"> mark as read</a>
                               <?php
                               else:
                               ?> 

                                   <a href="guest_message_delete.php?message_id= <?=$messages['id']?>"class="btn btn-sm btn-danger"> delete</a>
                               
                               <?php
                                 endif
                               ?> 

                            </td>
                        
                         </tr>

                        <?php
                        }
                        ?>  
                    </tbody>

                </table>

                    </div>
                </div>
           </div>
        </div>
   </div>

</section>



<?php
require_once('../footer.php');
?>