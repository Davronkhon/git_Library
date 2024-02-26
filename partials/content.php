  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>

          </div><!-- /.col -->
          <?php
          
          if (isset($_GET['pages']) && !empty($_GET['pages']))
          {
            $page = $_GET['pages'];
            if ($page==1)
            {
                require_once("registrateStudent.php");
            } else if($page==2)
            {
                require_once("registrateTeacher.php");
            } else if($page==3)
            {
                require_once("registrateGrup.php");
            } else if($page==4)
            {
                require_once("registrateRaspisanie.php");
            } else if($page==5)
            {
                require_once("registrateBook.php");
            }
          }

          ?>
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
     <div class="container-fluid">

     </div>
    </section>
    <!-- /.content -->
  </div>