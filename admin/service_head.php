<?php
session_start();
require_once('../header.php');
require_once('navbar.php');
require_once('../db.php');


if (!isset($_SESSION['user_status'])) {
    header('location: ../login.php');
}
$get_query = "SELECT * FROM service_heads";
$from_db = mysqli_query($db_connect, $get_query);
$after_Assoc = mysqli_fetch_assoc($from_db);

?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="card mt-4">
                    <div class="card-header">
                        <h5 class="card-title text-success text-capitalize text-center">
                            service heading add form
                        </h5>
                    </div>
                    <div class="card-body">
                        <form action="service_head_post.php" method="POST">
                            <div class="mb-3">
                                <label lass="">black heading</label>
                                <input type="text" class="form-control" name="black_head">
                            </div>
                            <div class="mb-3">
                                <label lass="">green heading</label>
                                <input type="text" class="form-control" name="green_head">
                            </div>
                            <div class="mb-3">
                                <label lass="">sub heading</label>
                                <input type="text" class="form-control" name="service_sub_head">
                            </div>
                            <div class="mb-3">
                                <button class="btn-success text-white border-0 rounded">add</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="card mt-4">
                    <div class="card-header">
                        <h5 class="card-title text-success text-capitalize text-center">
                            service heading details
                        </h5>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <th>black head</th>
                                <th>green head</th>
                                <th>sub head</th>
                            </thead>
                            <tbody>
                                <td><?= $after_Assoc['black_head'] ?></td>
                                <td><?= $after_Assoc['green_head'] ?></td>
                                <td><?= $after_Assoc['service_sub_head'] ?></td>
                               
                            </tbody>
                        </table>


                    </div>
                </div>


            </div>
        </div>
    </div>
</section>












<?php
require_once '../footer.php';
?>