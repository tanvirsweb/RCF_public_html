<?php
$current_page_name = 'blogs';
include '../inc/header.php';

$blog = $recents = $blogerr = $recenterr = null;
if (!isset($_GET['blog'])) {
    $blogerr = $recenterr = 'Invalid blog id';
} else {
    include '../inc/dbh.php';
    $sql = 'SELECT * FROM blog_list WHERE id = ? LIMIT 1';
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        $blogerr = mysqli_stmt_error($stmt);
    } else {
        mysqli_stmt_bind_param($stmt, "i", $_GET['blog']);
        if (!empty(mysqli_stmt_error($stmt))) {
            $blogerr = mysqli_stmt_error($stmt);
        } else {
            mysqli_stmt_execute($stmt);
            if (!empty(mysqli_stmt_error($stmt)))
                $blogerr = mysqli_stmt_error($stmt);
            else {
                $result = mysqli_stmt_get_result($stmt);
                $blog = mysqli_fetch_assoc($result);
            }
        }
    }
    
    $sql = 'SELECT * FROM blog_list WHERE id != ? ORDER BY publish_date DESC LIMIT 3';
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql))
        $recenterr = mysqli_stmt_error($stmt);
    else {
        mysqli_stmt_bind_param($stmt, "i", $_GET['blog']);
        if (!empty(mysqli_stmt_error($stmt))) {
            $recenterr = mysqli_stmt_error($stmt);
        } else {
            mysqli_stmt_execute($stmt);
            if (!empty(mysqli_stmt_error($stmt)))
                $recenterr = mysqli_stmt_error($stmt);
            else {
                $result = mysqli_stmt_get_result($stmt);
                $recents = mysqli_fetch_all($result, MYSQLI_ASSOC);
            }
        }
    }
    
}

?>

<!-- blog page starts here -->
<!-- <div id="homeHeader parallax-window">
        <div id="innerHomeBranding" class="read">
            <img src="<?php echo BASE_URL.'/'.($blog ? $blog['img'] : 'assets/img/blogs/blog_default.jpeg'); ?>" id="readImage" />
        </div>
    </div> -->

<div class="pt-5" id="blogContent">
    <div class="container py-5">
        <div class="row blog" id="blogRow">
            <div class="col-12 col-lg-8 mb-5 mb-lg-0">
                <div class="<?php if(!$blog) echo 'text-center'; ?>">
                    <?php if ($blog) { $first_space = strpos($blog['content'], " ");
                         ?>
                    <div class="text" id="blogDetail">
                        <h6 class="">
                            <span class="pr-2"><i class="fa fa-user pr-2"></i> <?php echo $blog['publisher']; ?></span>
                            <span class="pr-2"><i class="fa fa-id-card pr-2"></i>
                                <?php echo $blog['publisher_details']; ?></span>
                            <span class="pr-2"><i
                                    class="fa fa-calendar pr-2"></i><?php echo date_format(date_create($blog['publish_date']), 'jS M Y'); ?></span>
                        </h6>
                        <h4 class="mt-3">
                            <?php echo $blog['title']; ?>
                        </h4>
                    </div>
                    <div class="text-justify mt-3 mb-5" id="content">
                        <?php echo $blog['content']; ?>
                    </div>
                    <?php } else { ?>
                    <h2 class="pb-2">&#128557 Sorry!</h2>
                    <p>No blogs found!</p>
                    <?php } ?>
                    <a class="btn btn-primary" href="index.php">Return to blog page</a>
                </div>
            </div>

            <div class="col-12 col-lg-4">
                <div id="recentBlogs">
                    <h6 class="title"><i class="fa fa-th pr-3"></i> Recent Blogs</h6>
                    <div class="blogs mb-3">
                        <?php
                            if ($recents) {
                                foreach($recents as $blog) {
                                    echo
                                    '<div class="card mt-3 p-3">
                                        <h5 class="card-title">
                                            <a href="?blog='.$blog['id'].'">'.$blog['title'].'</a>
                                        </h5>
                                        <h6><i class="fa fa-calendar pr-2"></i>'.date_format(date_create($blog['publish_date']), 'jS M Y').'</h6>
                                    </div>';
                                }
                            } else {
                                echo
                                '<div class="card mt-3 p-3">
                                    <h5 class="card-title">
                                    &#128557 No blogs found!
                                    </h5>
                                </div>';
                            }
                        ?>
                    </div>
                    <a class="btn btn-outline-primary d-block my-0" href="index.php">Return to blog page</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- blog page ends here -->

<?php
include '../inc/footer.php';
?>