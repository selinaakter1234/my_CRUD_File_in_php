<?php
session_start();
require_once('../header.php');
require_once('navbar.php');
require_once('../db.php');


if (!isset($_SESSION['user_status'])) {
    header('location: ../login.php');
}
$get_query = "SELECT * FROM service_items";
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
                            service item add form
                        </h5>
                    </div>
                    <div class="card-body">
                        <form action="service_item_post.php" method="POST" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label lass="">heading</label>
                                <input type="text" class="form-control" name="service_item_head">
                            </div>
                            <div class="mb-3">
                                <label lass="">details</label>
                                <input type="text" class="form-control" name="service_item_detail">
                            </div>
                            <div class="mb-3">
                                <label lass="">image</label>
                                <input type="file" class="form-control" name="service_item_image">
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
                            service item details
                        </h5>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <th>service head</th>
                                <th>service details</th>
                                <th>service image</th>
                                <th>active</th>
                            </thead>


                            <tbody>
                                <?php
                                foreach ($from_db as $service):
                                ?>
                                <tr>
                                <td><?= $service['service_item_head'] ?></td>
                                <td><?= $service['service_item_detail'] ?></td>
                                
                                <td><img src="../<?= $service['image_location'] ?>" alt="" style="width: 100px;"></td>

                                
                                <td>
                                            <?php
                                            if ($service['active_status'] == 1) :
                                            ?>
                                                <span class="badge badge-sm bg-success">active</span>
                                            <?php
                                            else :
                                            ?>
                                                <span class="badge badge-sm bg-warning">de-active</span>
                                            <?php
                                            endif
                                            ?>

                                </td>



                                </tr>

                                <?php
                                endforeach
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
require_once '../footer.php';
?>