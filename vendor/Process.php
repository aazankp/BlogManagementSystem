<?php
require_once("Database.php");
$database = new Database();
session_start();

if (isset($_REQUEST['action']) && $_REQUEST['action'] == "Admin_Posts") { ?>
    <div class="text fw-bold">Posts</div>
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12 col-md-6 col-md-3">
                <!-- general form elements -->
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h5 class="card-title">Add Posts</h5>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form method="POST" id="post_data" enctype="multipart/form-data">
                        <div class="card-body">
                            <div class='row'>
                                <div class="col-md-4">
                                    <label class="fw-bold mb-1">Image</label>
                                    <input class="form-control" type="file" name="img">
                                </div>
                                <div class="col-md-4">
                                    <label class="fw-bold mb-1">Description</label>
                                    <input type="text" class="form-control" name="description" placeholder="Description">
                                </div>
                                <div class="col-md-4">
                                    <label class="fw-bold mb-1">Date</label>
                                    <input class="form-control" type="date" name="date">
                                </div>
                            </div>

                            <div class='row mt-2'>
                                <div class="col-md-4">
                                    <label class="fw-bold mb-1">Category</label>
                                    <select class="form-control" name="category">
                                        <option value="">Select Category</option>
                                        <option value="Student News">Student News</option>
                                        <option value="Seminars and Workshops News">Seminars and Workshops News</option>
                                        <option value="Affiliated Campus News">Affiliated Campus News</option>
                                        <option value="Notices - Circulars - Announcements News">Notices - Circulars -
                                            Announcements News</option>
                                        <option value="Scholarships News">Scholarships News</option>
                                        <option value="STAGS Events and News">STAGS Events and News</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label class="fw-bold mb-1">Status</label>
                                    <select class="form-control" name="status">
                                        <option value="">Select Status</option>
                                        <option value="Active">Active</option>
                                        <option value="In-Active">In-Active</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-success" name="submit">Submit Data</button>
                        </div>
                    </form>
                </div>
                <!-- /.card -->
            </div>
        </div>

        <div class="row mt-5">
            <!-- left column -->
            <div class="col-md-12 col-md-6 col-md-3">
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h5 class="card-title">View Posts</h5>
                    </div>
                    <div class="card-body">
                        <table id="view_posts" class="table table-striped" style="width:100%">
                            <thead>
                                <tr>
                                    <th>S.No</th>
                                    <th>Image</th>
                                    <th>Description</th>
                                    <th>Date</th>
                                    <th>Category</th>
                                    <th>Status</th>
                                    <th>Update</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $sno = 1;
                                $result = $database->fetch_posts();
                                while ($row = mysqli_fetch_assoc($result)) {
                                    $post_id = $row['id'];
                                    ?>
                                    <tr>
                                        <td>
                                            <?php echo $sno++; ?>
                                        </td>
                                        <td>
                                            <?php echo "<img src='" . $row['image'] . "' style='width: 100px; height: 40px;'>"; ?>
                                        </td>
                                        <td>
                                            <?php echo $row['description']; ?>
                                        </td>
                                        <td>
                                            <?php echo $row['date']; ?>
                                        </td>
                                        <td>
                                            <?php echo $row['category']; ?>
                                        </td>
                                        <td>
                                            <?php echo $row['status']; ?>
                                        </td>
                                        <td><button type="button" class="btn btn-success post_update"
                                                value="<?php echo $post_id; ?>">Update</button></td>
                                        <td><button type="button" class="btn btn-danger post_delete"
                                                value="<?php echo $post_id; ?>">Delete</button></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- /.card -->
            </div>
        </div>
    </div>

    <?php
}

elseif (isset($_REQUEST['action']) && $_REQUEST['action'] == "Login") {
    $username = $_REQUEST['username'];
    $password = $_REQUEST['password'];
    if ($username && $password !== "") {
        $result = $database->fetch_signup($username, $password);
        $count = mysqli_num_rows($result);
        if ($count>0) {
            $user = $_SESSION['username'] = $username;
            if (isset($_REQUEST['remember'])) {
                date_default_timezone_set('Asia/Karachi');
                setcookie('user', $user, time() + (86400 * 30), '/');
            }
            if ($user) {
                echo 1;
            }
        }else{
            echo 0;
        }
    }
}

elseif (isset($_REQUEST['action']) && $_REQUEST['action'] == "Admin_Posts_Data") {
    $desc = $_REQUEST['description'];
    $date = $_REQUEST['date'];
    $category = $_REQUEST['category'];
    $status = $_REQUEST['status'];
    $dir = "../Images";
    if (!is_dir($dir)) {
        mkdir($dir);
    }
    $img_name = $dir . "/" . rand(00000, 99999) . "_" . $_FILES['img']['name'];
    $img_tmp = $_FILES['img']['tmp_name'];
    if ($desc && $date && $category && $status !== "") {
        move_uploaded_file($img_tmp, $img_name);
        $result = $database->add_posts($img_name, $desc, $date, $category, $status);
        if ($result) {
            echo 1;
        } else {
            echo 0;
        }

    } else {
        echo "Please Fill Empty Fields!";
    }
}

elseif (isset($_REQUEST['action']) && $_REQUEST['action'] == "Admin_Posts_Update") {
    $post_id = $_REQUEST['post_id'];
    $result = $database->fetch_post_by_id($post_id);
    $row = mysqli_fetch_assoc($result);
    ?>
    <div class="text fw-bold">Posts</div>
    <div class="container-fluid">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12 col-md-6 col-md-3">
                <!-- general form elements -->
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h5 class="card-title">Add Posts</h5>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form method="POST" id="post_data_update" enctype="multipart/form-data">
                        <div class="card-body">
                            <div class="row mb-4">
                                <div class="col-md-12 col-md-6 col-md-3 text-center">
                                    <img src="../<?php echo $row['image']; ?>" style="width: 50%; height: 220px;" name="image">
                                </div>
                            </div>
                            <input type="hidden" value="<?php echo $post_id; ?>" name="post_id">
                            <input type="hidden" value="<?php echo $row['image']; ?>" name="upd_image">
                            <div class='row'>
                                <div class="col-md-4">
                                    <label class="fw-bold mb-1" id="upd_image">Image</label>
                                    <input class="form-control" type="file" name="img">
                                </div>
                                <div class="col-md-4">
                                    <label class="fw-bold mb-1">Description</label>
                                    <input type="text" class="form-control" name="description" placeholder="Description"
                                        value="<?php echo $row['description']; ?>">
                                </div>
                                <div class="col-md-4">
                                    <label class="fw-bold mb-1">Date</label>
                                    <input class="form-control" type="date" name="date" value="<?php echo $row['date']; ?>">
                                </div>
                            </div>
                            <div class='row mt-2'>
                                <div class="col-md-4">
                                    <label class="fw-bold mb-1">Category</label>
                                    <select class="form-control" name="category" value="<?php echo $row['category']; ?>">
                                        <option <?php echo ($row['category'] == "Student News") ? ("selected") : (""); ?>
                                            value="Student News">Student News</option>
                                        <option <?php echo ($row['category'] == "Seminars and Workshops News") ? ("selected") : (""); ?> value="Seminars and Workshops News">Seminars and Workshops News
                                        </option>
                                        <option <?php echo ($row['category'] == "Affiliated Campus News") ? ("selected") : (""); ?> value="Affiliated Campus News">Affiliated Campus News</option>
                                        <option <?php echo ($row['category'] == "Notices - Circulars - Announcements News") ? ("selected") : (""); ?> value="Notices - Circulars - Announcements News">Notices
                                            - Circulars -
                                            Announcements News</option>
                                        <option <?php echo ($row['category'] == "Scholarships News") ? ("selected") : (""); ?>
                                            value="Scholarships News">Scholarships News</option>
                                        <option <?php echo ($row['category'] == "STAGS Events and News") ? ("selected") : (""); ?> value="STAGS Events and News">STAGS Events and News</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label class="fw-bold mb-1">Status</label>
                                    <select class="form-control" name="status" value="<?php echo $row['status']; ?>">
                                        <option <?php echo ($row['status'] == "Active") ? ("selected") : (""); ?> value="Active">Active</option>
                                        <option <?php echo ($row['status'] == "In-Active") ? ("selected") : (""); ?> value="In-Active">In-Active</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-success" name="submit">Submit Data</button>
                        </div>
                    </form>
                </div>
                <!-- /.card -->
            </div>
        </div>

        <?php
}

elseif (isset($_REQUEST['action']) && $_REQUEST['action'] == "Admin_Posts_Update_Data") {
    $post_id = htmlspecialchars($_REQUEST['post_id'], true);
    $upd_img = htmlspecialchars($_REQUEST['upd_image'], true);
    $desc = htmlspecialchars($_REQUEST['description'], true);
    $date = htmlspecialchars($_REQUEST['date'], true);
    $category = htmlspecialchars($_REQUEST['category'], true);
    $status = htmlspecialchars($_REQUEST['status'], true);
    $dir = "../Images";
    if (!is_dir($dir)) {
        mkdir($dir);
    }
    $Flag = false;
    if (isset($_FILES['img']) && $_FILES['img']['name'] !== "") {
        $img_name = $dir . "/" . rand(00000, 99999) . "_" . $_FILES['img']['name'];
        $img_tmp = $_FILES['img']['tmp_name'];
        if (move_uploaded_file($img_tmp, $img_name)) {
            $Flag = true;
            if (file_exists($upd_img)) {
                unlink($upd_img);
            }
        } else {
            die('Data can not added to Server!');
        }
    } else {
        $img_name = $upd_img;
        $Flag = true;
    }
    if ($Flag == true) {
        if ($desc && $date && $category && $status !== "") {
            $result = $database->update_post($post_id, $img_name, $desc, $date, $category, $status);
            if ($result) {
                echo 1;
            } else {
                echo "Post record can not Added in Table";
            }
        } else {
            echo "Fill Empty Fields";
        }
    }
} 

elseif (isset($_REQUEST['action']) && $_REQUEST['action'] == 'Delete_Post') {
    $post_id = $_REQUEST["post_id"];
    $result = $database->fetch_post_by_id($post_id);
    $row = mysqli_fetch_assoc($result);
    $img_name = $row['image'];
    $delete = $database->Delete_post($post_id);
    if (file_exists($img_name)) {
        unlink($img_name);
    }
}

?>