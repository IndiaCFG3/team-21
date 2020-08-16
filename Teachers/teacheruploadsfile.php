<<<<<<< HEAD
<?php  
include('preincludes/dbh.php');
include('preincludes/session.php');

$id=$_SESSION['id'];
$links=$_POST['link'];
$title=$_POST['title'];

        $query="insert into `links`(classid,link,title) values('$id','$links','$title')";
        $result=mysqli_query($link,$query);
=======
<?php  
include('preincludes/dbh.php');
include('preincludes/session.php');

$id=$_SESSION['id'];
$links=$_POST['link'];
$title=$_POST['title'];

        $query="insert into `links`(classid,link,title) values('$id','$links','$title')";
        $result=mysqli_query($link,$query);
>>>>>>> ea97da44255d48dde39b35e4664b56039315b4a5
?>