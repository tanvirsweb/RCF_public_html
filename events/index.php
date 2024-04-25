<?php
$current_page_name = 'events';
include '../inc/header.php';


?>

<!-- events page starts here -->
<div id="homeHeader parallax-window" data-parallax="scroll" data-speed=".5" data-image-src="<?php echo BASE_URL; ?>/assets/img/test1.jpg">
  <div id="innerHomeBranding">
    <div class="overlay">
      <div class="container">
        <div class="row">
          <div class="col-12 text">
            <h1 class="">
              Our events
            </h1>
            <p>
              Events arranged by us related to career guideline, scholarship talk and so on
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="container">
  <div class="row">
    <div class="col-12 col-md-3 py-5">
      <!-- search form -->
      <div class="card card-body">
        <!-- <h4 class="title pt-3"> <i class="fa fa-list pr-2"></i> Search: </h4> -->
        <form method="GET">
          <div class="form-group pt-2">
            <label for="year">Select Year</label>
            <select name="year" class="custom-select" id="year">
              <option <?php if (isset($_GET['year']) && $_GET['year'] == 'all') {
                        echo 'selected';
                      } ?> value="all">All</option>
              <option <?php if (isset($_GET['year']) && $_GET['year'] == '2024') {
                        echo 'selected';
                      } ?> value="2024">2024</option>
              <option <?php if (isset($_GET['year']) && $_GET['year'] == '2023') {
                        echo 'selected';
                      } ?> value="2023">2023</option>
              <option <?php if (isset($_GET['year']) && $_GET['year'] == '2022') {
                        echo 'selected';
                      } ?> value="2022">2022</option>
              <option <?php if (isset($_GET['year']) && $_GET['year'] == '2021') {
                        echo 'selected';
                      } ?> value="2021">2021</option>
              <option <?php if (isset($_GET['year']) && $_GET['year'] == '2020') {
                        echo 'selected';
                      } ?> value="2020">2020</option>
              <option <?php if (isset($_GET['year']) && $_GET['year'] == '2019') {
                        echo 'selected';
                      } ?> value="2019">2019</option>
              <option <?php if (isset($_GET['year']) && $_GET['year'] == '2018') {
                        echo 'selected';
                      } ?> value="2018">2018</option>
              <option <?php if (isset($_GET['year']) && $_GET['year'] == '2017') {
                        echo 'selected';
                      } ?> value="2017">2017</option>
              <option <?php if (isset($_GET['year']) && $_GET['year'] == '2016') {
                        echo 'selected';
                      } ?> value="2016">2016</option>
              <option <?php if (isset($_GET['year']) && $_GET['year'] == '2015') {
                        echo 'selected';
                      } ?> value="2015">2015</option>
              <option <?php if (isset($_GET['year']) && $_GET['year'] == '2014') {
                        echo 'selected';
                      } ?> value="2014">2014</option>
            </select>
          </div>
          <!-- <div class="form-group pt-2">
                        <label for="category">Select Category</label>
                        <select name="category" class="custom-select" id="category">
                            <option <? php // if(isset($_GET['category']) && $_GET['category']== 'all') {echo 'selected';}
                                    ?>
                                value="all" default>All</option>
                            <option
                                <? php // if(isset($_GET['category']) && $_GET['category']== 'career') {echo 'selected';}
                                ?>
                                value="career">Career Fair</option>
                            <option
                                <? php // if(isset($_GET['category']) && $_GET['category']== 'higher_studies') {echo 'selected';}
                                ?>
                                value="higher_studies">Higher Studies</option>
                        </select>
                    </div> -->
          <input type="submit" class="form-control btn btn-primary" value="Search events">
        </form>

      </div>
      <!-- search form -->
    </div>

    <div class="col-12 col-md-9 mx-auto row px-0 py-5" id="eventCards">
      <?php
      //Current page check
      if (!isset($_GET['page'])) {
        $current_page = 1;
      } else {
        $current_page = $_GET['page'];
      }

      //LIMIT Numbers for the query to fetch data.
      $page_start_limit = ($current_page - 1) * $result_per_page;


      $sql = "";
      if (!isset($_GET['year']) && !isset($_GET['category'])) {
        //QUERY FOR BLANK $_GET PARAMS
        $sql = "SELECT * FROM event_list WHERE is_deleted = 0 ORDER BY event_date DESC LIMIT " . $page_start_limit . "," . $result_per_page . ";";
        //query for number of res
        $sqlCount = "SELECT * FROM event_list WHERE is_deleted = 0 ORDER BY event_date DESC;";
      } else {
        if ($_GET['year'] == 'all') {
          //   if ( all, all ) select * from events order by year ASC
          $sql = "SELECT * FROM event_list WHERE is_deleted = 0 ORDER BY event_date DESC LIMIT " . $page_start_limit . "," . $result_per_page . ";";
          //query for number of res
          $sqlCount = "SELECT * FROM event_list WHERE is_deleted = 0 ORDER BY event_date DESC;";
        } else if ($_GET['year'] != 'all') {
          //   else if ( 2020, all ) select * from event where year = 2020 order by id DESC
          $sql = "SELECT * FROM event_list WHERE year = '" . $_GET['year'] . "' AND is_deleted = 0 ORDER BY event_date DESC LIMIT " . $page_start_limit . "," . $result_per_page . ";";
          //query for number of res
          $sqlCount = "SELECT * FROM event_list WHERE year = '" . $_GET['year'] . "' AND is_deleted = 0 ORDER BY event_date DESC;";
        }



        // if($_GET['year'] == 'all' && $_GET['category'] == 'all'){
        //   //   if ( all, all ) select * from events order by year ASC
        //   $sql = "SELECT * FROM event_list WHERE is_deleted = 0 ORDER BY event_date DESC LIMIT ".$page_start_limit.",".$result_per_page.";";
        //   //query for number of res
        //   $sqlCount = "SELECT * FROM event_list WHERE is_deleted = 0 ORDER BY event_date DESC;";
        // }
        // else if($_GET['year'] != 'all' && $_GET['category'] == 'all'){
        //   //   else if ( 2020, all ) select * from event where year = 2020 order by id DESC
        //   $sql = "SELECT * FROM event_list WHERE year = '".$_GET['year']."' AND is_deleted = 0 ORDER BY event_date DESC LIMIT ".$page_start_limit.",".$result_per_page.";";
        //   //query for number of res
        //   $sqlCount = "SELECT * FROM event_list WHERE year = '".$_GET['year']."' AND is_deleted = 0 ORDER BY event_date DESC;";
        // }
        // else if($_GET['year'] == 'all' && $_GET['category'] != 'all'){
        //   //   else if( all, career ) select * from events where cat = career order by id DESC
        //   $sql = "SELECT * FROM event_list WHERE category = '".$_GET['category']."' AND is_deleted = 0 ORDER BY event_date DESC LIMIT ".$page_start_limit.",".$result_per_page.";";
        //   //query for number of res
        //   $sqlCount = "SELECT * FROM event_list WHERE category = '".$_GET['category']."' AND is_deleted = 0 ORDER BY event_date DESC;";
        // }
        // else if($_GET['year'] != 'all' && $_GET['category'] != 'all'){
        //   //   else if( 2020, career ) select * from events where year = 2020 AND cat = career order by id DESC
        //   $sql = "SELECT * FROM event_list WHERE year = ".$_GET['year']." AND category = '".$_GET['category']."' AND is_deleted = 0 ORDER BY event_date DESC LIMIT ".$page_start_limit.",".$result_per_page.";";
        //   //query for number of res
        //   $sqlCount = "SELECT * FROM event_list WHERE year = ".$_GET['year']." AND category = '".$_GET['category']."' AND is_deleted = 0 ORDER BY event_date DESC;";
        // }

      }
      $result = mysqli_query($conn, $sql);
      $resultCount = mysqli_query($conn, $sqlCount);
      $result_check = mysqli_num_rows($result);
      $result_check_count = mysqli_num_rows($resultCount);
      if ($result_check > 0) {
        while ($row = mysqli_fetch_assoc($result)) {


      ?>

          <!-- show event -->
          <div class="col-12 col-md-6 col-lg-4">
            <!-- single event start-->
            <div class="eachEvent">
              <div class="imgBx">
                <img src="<?php echo BASE_URL . '/' . $row['img']; ?>" alt="">
              </div>
              <div class="titleBx">
                <?php echo $row['event_name'] ?>
              </div>
            </div>
            <!-- single event END-->
          </div>

      <?php
        }
      }
      ?>
      <!-- show event END -->
    </div>

    <div class="col-12 mb-5 mx-auto">
      <nav aria-label="Page navigation">
        <ul class="pagination justify-content-center">

          <?php
          //Making the correct url with get params
          $linkStr = '';

          if (!isset($_GET['year'])) {
            $linkStr = '?year=all';
          } else {
            if ($_GET['year'] == 'all') {
              $linkStr = '?year=all';
            } else if ($_GET['year'] != 'all') {
              $linkStr = '?year=' . $_GET['year'];
            }
          }

          // if(!isset($_GET['category']) && !isset($_GET['year'])){
          //   $linkStr = '?category=all&year=all';
          // }
          // else {
          //   if($_GET['category'] == 'all' && $_GET['year'] =='all'){
          //     $linkStr = '?category=all&year=all';
          //   }
          //   else if($_GET['category'] != 'all' && $_GET['year'] =='all'){
          //     $linkStr = '?category='.$_GET['category'].'&year=all';
          //   }
          //   else if($_GET['category'] == 'all' && $_GET['year'] !='all'){
          //     $linkStr = '?year='.$_GET['year'].'&category=all';

          //   }
          //   else if($_GET['category'] != 'all' && $_GET['year'] !='all'){
          //     $linkStr = '?year='.$_GET['year'].'&category='.$_GET['category'];
          //   }
          // }

          //total pagination page count determination
          $num_of_pages = ceil($result_check_count / $result_per_page);

          //Previous link with condition of disabled link
          if ($current_page <= 1) {
            echo '
                      <li class="page-item disabled">
                      <a class="page-link" href="#" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                        <span class="sr-only">Previous</span>
                      </a>
                      </li>
                    ';
          } else {
            echo '
                      <li class="page-item">
                        <a class="page-link" href="index.php' . $linkStr . '&page=' . ($current_page - 1) . '" aria-label="Previous">
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
          if ($num_of_pages > 5 && $current_page > 3) {
            echo '<li class="px-1 text-secondary">. . .</li>';
            $pageStart = $current_page - 2;
          }

          //Determining the end page count
          if ($num_of_pages > 5 && $current_page < $num_of_pages - 2) {
            $pageEnd = $current_page + 2;
          }

          //pagination links
          for ($page = $pageStart; $page <= $pageEnd; $page++) {

            //Condition for current page active link
            if ($current_page == $page) {
              echo '<li class="page-item active"><a class="page-link" href="index.php' . $linkStr . '&page=' . $page . '">' . $page . '</a></li>';
            } else {
              echo '<li class="page-item"><a class="page-link" href="index.php' . $linkStr . '&page=' . $page . '">' . $page . '</a></li>';
            }
          }

          //Pagination End ... echo for huge number of pages
          if ($num_of_pages > 5 && $current_page < $num_of_pages - 2) {
            echo '<li class="px-1 text-secondary">. . .</li>';
          }

          //Next Link of pagination [conditions for disabled link]
          if ($current_page >= $num_of_pages) {
            echo '
                      <li class="page-item disabled">
                      <a class="page-link" href="#" aria-label="Next">
                      <span aria-hidden="true">&raquo;</span>
                      <span class="sr-only">Next</span>
                    </a>
                      </li>
                    ';
          } else {
            echo '
                      <li class="page-item">
                        <a class="page-link" href="index.php' . $linkStr . '&page=' . ($current_page + 1) . '" aria-label="Next">
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

<!-- events page ends here -->

<?php
include '../inc/footer.php';
?>