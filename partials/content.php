<div class="content-wrapper">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Панель приборов</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Дом</a></li>
            <li class="breadcrumb-item active">Панель управления v1</li>
          </ol>
        </div>
        <?php  
          if (isset($_GET['pages']) && !empty($_GET['pages']))
          {
            $page = $_GET['pages'];
            if ($page==1)
            {
              require_once("registrateBook.php");
            }
          }
        ?>
      </div>
    </div>
  </div>
  <section class="content">
    <div class="container-fluid"></div>
  </section>
</div>