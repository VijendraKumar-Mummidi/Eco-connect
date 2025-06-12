<?php
include('connect.php');

if (isset($_POST['comment'])) {
if (isset($_POST['comment_msg']) && $_POST['comment_msg'] != '') {
$comment = $_POST['comment_msg'];
$id = $_POST['article_id'];
$sql = "INSERT INTO `comment`(`article_id`,`comment`) VALUES ($id,'$comment')";
if (mysqli_query($conn, $sql)) {
$cmt_msg = " <div class='alert success' style='color:#53ff53'>Your Comment is submitted.</div>";
} else {
$cmt_msg = "<div class='alert error' style='color:red'>Failed While commenting</div>";
}
}
}
?>
<div class="container">

    <div class="row ">
        <?php
        $sql = "SELECT * FROM `article` order by`created_at` desc ";
        
        $result = mysqli_query($conn, $sql) or die($conn);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_array($result)) {
                $article_id = $row['id'];
                $sql1 = "SELECT * FROM `comment` WHERE `article_id`=$article_id AND `status`='APPROVED' ORDER BY `created_at` DESC;";
                ?>
                <div class="col-lg-4 md-2 sm-1 wow animate__fadeInDown" data-wow-duration="1s">
                    <div class="card mb-5">

                        <embed src="./upload/<?= $row['img_path'] ?>" class="img-responsive" alt="blog-img"
                               style="box-shadow:10px 10px 10px #5bc0de" width="500px" height="220px">
                        <div class="card-body">
                            <h2><?= $row['title'] ?></h2>
                            <p style="color:white;"><?= $row['description'] ?></p>

                            <form class="navbar-form navbar-right" action="" method="post" name="Comment"
                                  id="CmmHere">
                                <div class="form-group">
                                    <label>
                                        <input type="hidden" name="article_id" value="<?= $row['id'] ?>">
                                        <input type="text" name="comment_msg" class="form-control"
                                               placeholder="Comment">
                                        <button type="submit" name="comment" class="btn btn-default">Comment here
                                        </button>
                                    </label>
                                </div>
                            </form>


                        </div>
                    </div>
                    <br><br><br><br><br><br><br><br><br><br><br>
                </div>
                <?php
            }
        }
        ?>

    </div><!-- .col-md-12 close -->
</div><!-- .row close -->
<!--containerclose-->

