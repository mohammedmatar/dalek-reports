<?php
$data = array(
 array('Name'=>'محمد مطر', 'Empid'=>11, 'Salary'=>101),
 array('Name'=>'شعشبونة', 'Empid'=>1, 'Salary'=>102),
 array('Name'=>'جحمنة', 'Empid'=>21, 'Salary'=>103) );
             
 
 $results = array(
                    "Mohammed Matar" => 1,
                            "iTotalRecords" => count($data),
                            "iTotalDisplayRecords" => count($data),
                              "aaData"=>$data);
// while($row = $result->fetch_array(MYSQLI_ASSOC)){
//   $results["data"][] = $row ;
// }
echo json_encode($results);