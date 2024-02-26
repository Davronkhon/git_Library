<?php
if(isset($_GET['save']))
{
    require_once('connection.php');
    $title = "";
    $author = "";
    $year = "";
    $categories = "";
    $pages = "";
    $img = "";
    $src = "";
    $created_at = "";
    $created_by = "";
    $updated_at = "";
    $updated_by = "";
    $type = "";
    $discription = "";

    if(isset($_GET['$title']) && !empty($_GET['$title'])) $title = $_GET['$title'];
    if(isset($_GET['author']) && !empty($_GET['$author'])) $author = $_GET['$author'];
    if(isset($_GET['year']) && !empty($_GET['$year'])) $year = $_GET['$year'];
    if(isset($_GET['categories']) && !empty($_GET['$categories'])) $year = $_GET['$categories'];
    if(isset($_GET['pages']) && !empty($_GET['$pages'])) $year = $_GET['$pages'];
    if(isset($_GET['img']) && !empty($_GET['$img'])) $year = $_GET['$img'];
    if(isset($_GET['src']) && !empty($_GET['$src'])) $year = $_GET['$src'];
    if(isset($_GET['$created_at']) && !empty($_GET['$created_at'])) $created_at = $_GET['$created_at']; 
    if(isset($_GET['$created_by']) && !empty($_GET['$created_by'])) $created_by = $_GET['$created_by'];
    if(isset($_GET['$updated_at']) && !empty($_GET['$updated_at'])) $updated_at = $_GET['$updated_at'];
    if(isset($_GET['$updated_by']) && !empty($_GET['$updated_by'])) $updated_by = $_GET['$updated_by'];
    if(isset($_GET['$type']) && !empty($_GET['$type'])) $type = $_GET['$type'];
    if(isset($_GET['$discription']) && !empty($_GET['$discription'])) $discription = $_GET['$discriptions'];

    echo $title."<br>";
    echo $author."<br>";
    echo $year."<br>";
    echo $categories."<br>";
    echo $pages."<br>";
    echo $img."<br>";
    echo $src."<br>";
    echo $created_at."<br>";
    echo $created_by."<br>";
    echo $updated_at."<br>";
    echo $updated_by."<br>";
    echo $type."<br>";
    echo $discription."<br>";

    $query = " INSERT INTO books (title,author,`year`,categories_id,pages,img,src,created_at,created_by_id,updated_at,updated_by_id,type_id,discription)
    VALUES ('$title','$author','$year','$categories','$pages','$img','$src','$created_at','$created_by','$updated_at','$updated_by','$type','$diacription');";

    echo $query;
    mysqli_query($conn,$query);
    ?>
    <script>
        alert("Успешно добавлен !");
    </script>
    <?php
}
?>