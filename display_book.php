<?php

include("database.php");
$db=$conn;
// fetch query
function fetch_data(){
 global $db;
  $query="SELECT DISTINCT Title,Author,PublishYear,Genre,Pages,NumberofCopies FROM book";
  $exec=mysqli_query($db, $query);
  if(mysqli_num_rows($exec)>0){
    $row= mysqli_fetch_all($exec, MYSQLI_ASSOC);
    return $row;  
        
  }else{
    return $row=[];
  }
}
$fetchData= fetch_data();
show_data($fetchData);

function show_data($fetchData){
 echo '<table border="1">
        <tr>
            <th>Title</th>
            <th>Author</th>
            <th>PublishYear</th>
            <th>Genre</th>
            <th>Pages</th>
            <th>NumberofCopies</th>
        </tr>';

 if(count($fetchData)>0){
      $sn=1;
      foreach($fetchData as $data){ 

  echo "<tr>
          <td>".$data['Title']."</td>
          <td>".$data['Author']."</td>
          <td>".$data['PublishYear']."</td>
          <td>".$data['Genre']."</td>
          <td>".$data['Pages']."</td>
          <td>".$data['NumberofCopies']."</td>
   </tr>";
       
  $sn++; 
     }
}else{
     
  echo "<tr>
        <td colspan='7'>No Data Found</td>
       </tr>"; 
}
  echo "</table>";
}

?>