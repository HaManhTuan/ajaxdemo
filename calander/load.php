<?php

//load.php

$connect = new PDO('mysql:host=localhost;dbname=tuan', 'root', '');

$data = array();

$query = "SELECT * FROM booking ORDER BY id";

$statement = $connect->prepare($query);

$statement->execute();

$result = $statement->fetchAll();

foreach($result as $row)
{
 $data[] = array(
  'id'         => $row["id"],
  'title'      => $row["chuthich"],
  'start'      => $row["batdau"],
  'end'        => $row["ketthuc"],
  'chuthich'   => $row["chuthich"]
 );
}

echo json_encode($data);

?>