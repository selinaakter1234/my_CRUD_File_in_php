<?php
session_start();
require_once('../header.php');
require_once('navbar.php');
require_once('../db.php');


if (!isset($_SESSION['user_status'])) {
    header('location: ../login.php');
}

$get_query = "SELECT * FROM banners";
$from_db = mysqli_query($db_connect, $get_query);

?>

<section>

    <div class="container">
        <div class="row">
            <div class="col-lg-3 m-auto">
                <div class="card mt-3">
                    <div class="card-header bg-success text-white text-center">
                        <h4>Add banner </h4>
                    </div>
                    <div class="card-body">
                        <form action="banner_post.php" method="POST" enctype="multipart/form-data">
                            <div class="mb-3">
                                <label class="form-label text-capitalize text-primary">banner sub title</label>
                                <input type="text" name="banner_sub_title" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label text-capitalize text-primary">banner title</label>
                                <input type="text" name="banner_title" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label text-capitalize text-primary">banner detail</label>
                                <input type="text" name="banner_detail" class="form-control">
                            </div>
                            <div class="mb-3">
                                <label class="form-label text-capitalize text-primary">banner image</label>
                                <input type="file" name="banner_image" class="form-control">
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="form-control btn btn-primary">add banner</button>
                            </div>
                        </form>


                    </div>
                </div>
            </div>
            <!-- banner column -->
            <div class="col-lg-9 ">
                <div class="card mt-3">
                    <div class="card-header bg-success text-white text-center">
                        <h4>Banner details </h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-borderd">
                            <thead>
                                <th>banner sub title </th>
                                <th>banner title</th>
                                <th>banner detail</th>
                                <th>image location</th>
                                <th>active status</th>
                                <th>action</th>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($from_db as $banner) :
                                ?>

                                    <tr>
                                        <td><?= $banner['banner_sub_title'] ?></td>
                                        <td><?= $banner['banner_title'] ?></td>
                                        <td><?= $banner['banner_detail'] ?></td>

                                        <td>
                                            <img src="../<?= $banner['image_location'] ?>" alt="" style="width=100px;">

                                        </td>

                                        <td>
                                            <?php
                                            if ($banner['active_status'] == 1) :
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

                                        <td>
                                            <div class="btn-group" role="group" aria-label="basic example">
                                                <button type="button" class="btn btn-sm btn-warning">make active</button>
                                                <button type="button" class="btn btn-sm btn-info">edit</button>
                                                <button type="button" class="btn btn-sm btn-primary">delete</button>


                                            </div>



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
require_once('../footer.php');
?>