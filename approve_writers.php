<html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-red.min.css">
        <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
        <style>
        a{text-decoration:none;}
        table{font-size:13px;}
             .this {
	            align-items: center;
  
                        }
                        tr:nth-child(even) {background: #CCC}
                        tr:nth-child(odd) {background: #FFF}
        </style>
</head>
<body>
     <!-- Left aligned menu below button -->
<button id="demo-menu-lower-left"
class="mdl-button mdl-js-button mdl-button--icon">
<i class="material-icons">more_vert</i>
</button>

<ul class="mdl-menu mdl-menu--bottom-left mdl-js-menu mdl-js-ripple-effect"
for="demo-menu-lower-left">
<li class="mdl-menu__item"><a href="index.php">home</a></li>
<li class="mdl-menu__item mdl-menu__item--full-bleed-divider"><a href="logout.php">Log out</a></li>

</ul></br></br>

</body>
</html>
<?php
//$var=$_POST["options"];
//making string comparisons in one of the crunkiest formats..hahah
//if($var==="university"){
   // echo" CURRENT CATEGORY: $var";
    
echo "<table style='border: solid 0px black;'align='center' >";
  echo "<tr><th>Time |</th><th>writer |</th><th>Owner |</th><th>Terms |</th><th>Title |</th><th>Format|</th></th><th>File|</th>|</th><th>Approve</th></tr>";

class TableRows extends RecursiveIteratorIterator { 
     function __construct($it) { 
         parent::__construct($it, self::LEAVES_ONLY); 
     }

     function current() {
         return "<td style='width: 150px; border: 0px solid black;'>" . parent::current(). "</td>";
     }

     function beginChildren() { 
         echo "<tr>"; 
     } 

     function endChildren() { 
         echo "</tr>" . "\n";
     } 
} 

//config information here


//include("zebakiConfig.php");

try {
     $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     $stmt = $conn->prepare("SELECT log_time,user_name,session_variable,pay,title,format,file1, approve_status FROM writer_waitingapproval"); 
     $stmt->execute();

     // set the resulting array to associative
     $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 

     foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) { 
         echo $v;
     }
}
catch(PDOException $e) {
     echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";
 


    
//}

?>