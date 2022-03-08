

<nav class="navbar navbar-default">
  <div class="container">


    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

    <?php 

      if(isset($_SESSION["id"]) && ($_SESSION["password"])) {

    ?>

      <form class="navbar-form navbar-right" action="searchresults.php" method="POST">

        <div class="search-area">
          <div class="form-group">

            <div class="search-wrap">

              <label for="searchbox" class="sr-only">Search:</label>
              <input type="text" class="form-control" name="searchbox" id="searchbox" placeholder="Search member email here" required autocomplete="off">
              
              <div class="search-results hide"></div>

            </div>
            

          </div>
          <input type="submit" name="search" id="search-btn" value="Search" class="btn btn-default">

        </div>
        
             
        <a href="../allprofiles/profiles.php">View All Members</a>
      </form>

      <?php 

        } else {
          echo "<span class='not-logged'>Not logged in.</span>";
        }

      ?>

      


    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
