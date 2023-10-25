<?php
$current_page_name = 'news';
include '../inc/header.php';

$news = $recents = $newserr = $recenterr = null;
if (!isset($_GET['news'])) {
    $newserr = $recenterr = 'Invalid header parameter.';
} else {
    include '../inc/dbh.php';
    $sql = 'SELECT * FROM news_list WHERE id = ? LIMIT 1';
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql))
        $newserr = mysqli_stmt_error($stmt);
    else {
        mysqli_stmt_bind_param($stmt, "i", $_GET['news']);
        if (!empty(mysqli_stmt_error($stmt)))
            $newserr = mysqli_stmt_error($stmt);
        else {
            mysqli_stmt_execute($stmt);
            if (!empty(mysqli_stmt_error($stmt)))
                $newserr = mysqli_stmt_error($stmt);
            else {
                $result = mysqli_stmt_get_result($stmt);
                $news = mysqli_fetch_assoc($result);
            }
        }
    }
    
    $sql = 'SELECT * FROM news_list WHERE id != ? ORDER BY publish_date DESC LIMIT 3';
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql))
        $recenterr = mysqli_stmt_error($stmt);
    else {
        mysqli_stmt_bind_param($stmt, "i", $_GET['news']);
        if (!empty(mysqli_stmt_error($stmt)))
            $recenterr = mysqli_stmt_error($stmt);
        else {
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

    <!-- news page starts here -->
    <div id="homeHeader parallax-window">
        <div id="innerHomeBranding">
            <div class="overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-12 text">
                            <h1 class="">
                                <?php echo ($news ? $news['title'] : 'News not found!'); ?>
                            </h1>
                            <p>
                            <?php if ($news) {?>
                                <i class="fa fa-user pr-2"></i> <?php echo $news['publisher']; ?> <i class="fa fa-calendar px-2"></i><?php echo date_format(date_create($news['publish_date']), 'jS M Y'); ?>
                                <?php }?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="" id="newsContent">
      <div class="container py-5">
        <div class="row news" id="newsRow">
            <div class="col-12 col-lg-8 mb-5 mb-lg-0">
                <div class="<?php if (!$news) echo 'text-center';?>">
                <?php if ($news) {?>
                    <div class="text-justify mb-5 content">
                        <?php echo $news['content'] ?>
                    </div>
                <?php } else {?>
                    <h2 class="pb-2">&#128557 Sorry!</h2>
                    <p>No news found!</p>
                    <?php } ?>
                    <a class="btn btn-primary" href="index.php">Return to news page</a>
                </div>
            </div>

            <div class="col-12 col-lg-4">
                <div id="recentNews">
                    <h6 class="title"><i class="fa fa-th pr-3"></i> Recent News</h6>
                    <div class="rnews mb-3">
                        <?php
                        if ($recents) {
                            foreach($recents as $news) {
                                echo
                                '<div class="card mt-3 p-3">
                                    <h5 class="card-title">
                                        <a href="?news='.$news['id'].'">'.$news['title'].'</a>
                                    </h5>
                                    <p class="card-text content text-justify">'.substr($news['content'], 0, 65)."... ".'<a href="?news='.$news['id'].'">Read more</a></p>
                                    <h6><i class="fa fa-calendar pr-2"></i>'.date_format(date_create($news['publish_date']), 'jS M Y').'</h6>
                                </div>';
                            }
                        } else {
                            echo
                                '<div class="card mt-3 p-3">
                                    <h5 class="card-title">
                                    &#128557 No news found!
                                    </h5>
                                </div>';
                        }
                        ?>
                    </div>
                    <a class="btn btn-outline-primary d-block my-0" href="index.php">Return to news page</a>
                </div>
            </div>
        </div>
      </div>
    </div>
    <!-- blog page ends here -->

<?php
include '../inc/footer.php';
?>
