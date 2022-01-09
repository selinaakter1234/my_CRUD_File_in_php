<?php
session_start();
 require_once('../header.php');
 require_once('../db.php');
 require_once('navbar.php');
$login_email= $_SESSION['email'];
$get_query = "SELECT user_name,phone,password FROM users WHERE email= '$login_email'";
$db_result = mysqli_query($db_connect,$get_query);
$after_assoc = mysqli_fetch_assoc($db_result);


 if(!isset($_SESSION['user_status'])){
  header('location: ../login.php');
}
?>

 <section>
     <div class="container">
         <div class="row">
             <div class="col-lg-6 m-auto">
                 <div class="card-header bg-primary mt-4">
                     <h5 class="title text-capitalize text-white text-center "> edit your profile</h5>
                 </div>
                <div class="card-body">
                
                <form action="" method="POST">

                        <div class="row">
                            <div class="col">
                                <label for="inputName">Name</label>
                                <input type="name" class="form-control" id="inputName" placeholder="Name" name="name" value="<?=$after_assoc['user_name'] ?>">

                                <label for="phone14">phone</label>
                                <input type="text" class="form-control" id="phone14" placeholder="phone" name="phone" value="<?=$after_assoc['phone'] ?>">

                                <label for="inputPassword4">Password</label>
                                <input type="password" class="form-control" id="inputPassword4" placeholder="Password" name="password">
                            </div>
                       </div>
                            <div>
                                <button type="submit" class="btn btn-primary mt-3">update</button>
                            </div>

                    </form>
                    

                </div>
             </div>
         </div>
     </div>
 </section>

<?php
require_once('../footer.php');
?>