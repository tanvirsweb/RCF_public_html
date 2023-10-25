<?php
$current_page_name = 'news';
include '../inc/header.php';
?>

    <!-- news page starts here -->
    <div id="homeHeader parallax-window">
        <div id="innerHomeBranding">
            <div class="overlay">
                <div class="container">
                    <div class="row">
                        <div class="col-12 text">
                            <h1 class="">
                                News
                            </h1>
                            <p>
                              News related to our organization
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="" id="newsSection">
      <div class="container py-5">
        <div class="row news" id="newsRow">
        <?php
          //Current page check
          if(!isset($_GET['page'])){
            $current_page = 1;
          }
          else{
            $current_page = $_GET['page'];
          }

          //LIMIT Numbers for the query to fetch data.
          $page_start_limit = ($current_page-1)*$result_per_page;
          $sql = 'SELECT COUNT(id) AS n FROM news_list';
          $result = mysqli_query($conn, $sql);
          $row = mysqli_fetch_assoc($result);
          $result_check_count = $row ? $row['n'] : 0;
          $sql = 'SELECT * FROM news_list WHERE is_deleted = 0 ORDER BY publish_date DESC LIMIT '.$page_start_limit.', '.$result_per_page;
          $result = mysqli_query($conn, $sql);
          while ($row = mysqli_fetch_assoc($result)) {


         ?>
        <div class="col-12 col-md-6 col-lg-4 singleNews pb-5">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">
                <a href="read.php?news=<?php echo $row['id']; ?>"><?php echo $row['title']; ?></a>
              </h5>
              <p class="card-text content"><?php $n = strlen($row['title']) > 30 ? 150 : 220; echo substr($row['content'], 0, $n); ?>...</p>
              <div>
                <i class="fa fa-user pr-2"></i> <?php echo $row['publisher']; ?>
              </div>
              <div>
                <i class="fa fa-calendar pr-2"></i> <?php echo date_format(date_create($row['publish_date']), 'jS M Y') ?>
              </div>
              <div class="card-foot">
                <a class="btn btn-primary" href="read.php?news=<?php echo $row['id']; ?>">Read more</a>
              </div>
            </div>
          </div>
        </div>
         <?php
          }
         ?>
        </div>

        <div class="col-12 mx-auto">
            <nav aria-label="Page navigation">
                <ul class="pagination justify-content-center">

                    <?php
                    //total pagination page count determination
                    $num_of_pages = ceil($result_check_count / $result_per_page);

                    //Previous link with condition of disabled link
                    if($current_page <= 1){
                      echo '
                      <li class="page-item disabled">
                      <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                        <span class="sr-only">Previous</span>
                      </a>
                      </li>
                    ';
                    }else{
                      echo '
                      <li class="page-item">
                        <a class="page-link" href="index.php?page='.($current_page-1).'" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                        <span class="sr-only">Previous</span>
                      </a>
                      </li>
                      ';
                    }

                    //initial valu of start and end page count for pagination
                    $pageStart = 1;
                    $pageEnd = $num_of_pages;

                    //Pagination Start ... echo for huge number of pages and determaining the start page count
                    if($num_of_pages>5 && $current_page > 3){
                      echo '<li class="px-1 text-secondary">. . .</li>';
                      $pageStart = $current_page - 2;
                    }

                    //Determining the end page count
                    if($num_of_pages>5 && $current_page < $num_of_pages - 2){
                      $pageEnd = $current_page +2 ;
                    }

                    //pagination links
                    for($page = $pageStart; $page <= $pageEnd ; $page++){

                      //Condition for current page active link
                      if($current_page == $page){
                        echo '<li class="page-item active"><a class="page-link" href="index.php?page='.$page.'">'.$page.'</a></li>';
                      }
                      else{
                        echo '<li class="page-item"><a class="page-link" href="index.php?page='.$page.'">'.$page.'</a></li>';
                      }
                    }

                    //Pagination End ... echo for huge number of pages
                    if($num_of_pages>5 && $current_page < $num_of_pages - 2){
                      echo '<li class="px-1 text-secondary">. . .</li>';

                    }

                    //Next Link of pagination [conditions for disabled link]
                    if($current_page >= $num_of_pages){
                      echo '
                      <li class="page-item disabled">
                      <a class="page-link" href="#" aria-label="Next">
                      <span aria-hidden="true">&raquo;</span>
                      <span class="sr-only">Next</span>
                    </a>
                      </li>
                    ';
                    }else{
                      echo '
                      <li class="page-item">
                        <a class="page-link" href="index.php?page='.($current_page+1).'" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                        <span class="sr-only">Next</span>
                      </a>
                      </li>
                      ';
                    }
                ?>
                </ul>
            </nav>
        </div>
      </div>
    </div>
    <!-- news page ends here -->

    <?php
include '../inc/footer.php';
?>
