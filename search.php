<?php

$connect = new PDO("mysql:host=localhost;dbname=jobportal", "root", "");

$output = '';

$query = '';

if(isset($_POST["query"]))
{
 $search = str_replace(",", "|", $_POST["query"]);
 $query = "
 SELECT * FROM new_job_post 
 WHERE jobtitle REGEXP '".$search."' 
 OR location REGEXP '".$search."' 
 OR jobtype REGEXP '".$search."' 
 ";
}
else
{
 $query = "
 SELECT * FROM new_job_post ORDER BY id_jobpost Desc
 ";
}

$statement = $connect->prepare($query);
$statement->execute();

while($row = $statement->fetch(PDO::FETCH_ASSOC))
{
 $data[] = $row;
}

echo json_encode($data);

?>