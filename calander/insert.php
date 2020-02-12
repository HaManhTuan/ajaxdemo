<?php

//insert.php

$connect = new PDO('mysql:host=localhost;dbname=tuan', 'root', '');

if(isset($_POST["title"]))
{
 $query = "
 INSERT INTO booking 
 (tieude, batdau, ketthuc, chuthich) 
 VALUES (:title, :start_event, :end_event, :chuthich)
 ";
 $statement = $connect->prepare($query);
 $statement->execute(
  array(
   ':title'  => $_POST['title'],
   ':start_event' => $_POST['start'],
   ':end_event' => $_POST['end'],
   ':chuthich' => $_POST['chuthich']
  )
 );
}


?>