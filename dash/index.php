
  <?php
  session_start();
  if((isset($_SESSION['logadmin']) && $_SESSION['logadmin']==true))
  {
  
  include('includesadmin/header.php');

  ?>
  <body>
  
    <nav
      class="navbar navbar-expand-lg  fixed-top"
    >
    <!-- navbar-dark bg-mattBlackLight  -->
      <button class="navbar-toggler sideMenuToggler" type="button">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="#"><i class="material-icons icon">
      dashboard  
                </i>dashboard</a>
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item dropdown">
            <a
              class="nav-link dropdown-toggle p-0"
              href="#"
              id="navbarDropdown"
              role="button"
              data-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >
              <i class="material-icons icon">
                person
              </i>
              <span class="text">Account</span>
            </a>
            <div
              class="dropdown-menu dropdown-menu-right"
              aria-labelledby="navbarDropdown"
            >
              
              <a class="dropdown-item" href="#">hi :) <?php print_r($_SESSION['username']);?></a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="logout.php">Logout</a>

            </div>
          </li>
        </ul>
      </div>
    </nav>
    <div class="wrapper d-flex">
      <div class="sideMenu bg-mattBlackLight">
        <div class="sidebar">
          <ul class="navbar-nav">
           
            <li class="nav-item">
              <a href="?page=addemplo" class="nav-link px-2">
                <i class="material-icons icon">
                  person
                </i>
                <span class="text">employe</span>
              </a>
            </li>
            <li class="nav-item">
              <a href="?page=adddepartment" class="nav-link px-2">
              <i class="material-icons icon">local_pizza</i>
                <span class="text">departement</span></a
              >
            </li>
            <li class="nav-item">
              <a href="?page=responsable" class="nav-link px-2">
                <i class="material-icons icon">
                person_add
                </i>
                <span class="text">responsable</span>
              </a>
            </li>
            <li class="nav-item">
              <a href="?page=alldepartement" class="nav-link px-2">
                <i class="material-icons icon">
                attachment 
                </i>
                <span class="text">alldepartement</span>
              </a>
            </li>
            
            <li class="nav-item">
              <a href="#" class="nav-link px-2 sideMenuToggler">
                <i class="material-icons icon expandView ">
                  view_list
                </i>
                <span class="text">Resize</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
      
      <div class="content">
        <main>
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-12 my-3">
                <div class="bg-mattBlackLight px-3 py-3">
                <?php
                  if(@$_GET['page']){
                      $url = $_GET['page'] . ".php";
                      if(is_file($url)){
                          include( $url);
                      }else{
                          echo 'page not found';
                      }
                  }else{
                      include('addemplo.php');
                  }
                  ?>
                  </div>
                </div>
              </div>
            
        </main>
      </div>
    </div>
 <?php
 include('includesadmin/footer.php');
}
else{
  echo '404';
}
 ?>