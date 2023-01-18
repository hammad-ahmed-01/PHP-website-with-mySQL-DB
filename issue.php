<?php

include("database.php");
$db=$conn;
// fetch query
function fetch_data(){
 global $db;
  $query="SELECT * FROM issuebook";
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
            <th>UserID</th>
            <th>BookID</th>
            <th>IssueDate</th>
            <th>ReturnDate</th>
            <th>IssueLimit</th>
        </tr>';

 if(count($fetchData)>0){
      $sn=1;
      foreach($fetchData as $data){ 

  echo "<tr>
          <td>".$data['UserID']."</td>
          <td>".$data['BookID']."</td>
          <td>".$data['IssueDate']."</td>
          <td>".$data['ReturnDate']."</td>
          <td>".$data['IssueLimit']."</td>
   </tr>";
       
  $sn++; 
     }
}else{
     
  echo "<tr>
        <td colspan='9'>No Data Found</td>
       </tr>"; 
}
  echo "</table>";
}

?>