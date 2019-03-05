<?php
$con=file_get_contents('https://raw.githubusercontent.com/iGovPhil/igovphil.github.io/master/java-exam-01/uacs-agency.json');
$data=json_decode($con,true);
print("<table border-style=solid border=1><tr><th>UACS</th><th>Deparment</th><th>Agency</th></tr>");
foreach($data as $obj){
print("<tr><td>");
echo $obj["uacs"];
print("</td><td>");
echo $obj["department"];
print("</td><td>");
echo $obj["agency"];
print("</td></tr>");
}
print("</table>");
?>
