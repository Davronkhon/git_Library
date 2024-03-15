<?php
if(isset($_GET['save']))
{
    require_once('connection.php');
    $title = "";
    $author = "";
    $year = "";
    $category = "";
    $pages = "";
    $img = "";
    $src = "";
    $type = "";
    $discription = "";

    if(isset($_GET['title']) && !empty($_GET['title'])) $title = $_GET['title'];
    if(isset($_GET['author']) && !empty($_GET['author'])) $author = $_GET['author'];
    if(isset($_GET['year']) && !empty($_GET['year'])) $year = $_GET['year'];
    if(isset($_GET['category_id']) && !empty($_GET['category_id'])) $category = $_GET['category_id'];
    if(isset($_GET['pages']) && !empty($_GET['pages'])) $pages = $_GET['pages'];
    if(isset($_GET['img']) && !empty($_GET['img'])) $img = $_GET['img'];
    if(isset($_GET['src']) && !empty($_GET['src'])) $src = $_GET['src'];
    if(isset($_GET['type_id']) && !empty($_GET['type_id'])) $type = $_GET['type_id'];
    if(isset($_GET['discription']) && !empty($_GET['discription'])) $discription = $_GET['discription'];

    echo $title."<br>";
    echo $author."<br>";
    echo $year."<br>";
    echo $category."<br>";
    echo $pages."<br>";
    echo $img."<br>";
    echo $src."<br>";
    echo $type."<br>";
    echo $discription."<br>";

    $query = "INSERT INTO books (title,author,`year`,category_id,pages,img,src,type_id,discription)
    VALUES ('$title','$author','$year',$category,$pages,'$img','$src',$type,'$discription');";

    echo $query;
    mysqli_query($conn,$query);
    ?>
    <script>
        alert("Успешно добавлен !");
    </script>
    <?php
}
?>