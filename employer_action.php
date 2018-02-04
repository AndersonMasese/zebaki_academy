<?php
session_start();
?>
<html>

<head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-red.min.css">
        <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
        <style>
             a{text-decoration:none;}
             .this {
	            align-items: center;
  
                        }
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
<li class="mdl-menu__item"><a href="my_writer.html">Switch to writer</a></li>
<li class="mdl-menu__item mdl-menu__item--full-bleed-divider"><a href="logout.html">Log out</a></li>

</ul></br></br>
<div class="mdl-layout-spacer"></div>
    <div class="mdl-grid">
      <div class="mdl-layout-spacer"></div>
      <div class="mdl-cell mdl-cell--7-col">
      <div class="mdl-tabs__panel" id="help-panel">
      <!--extra logic here-->
      <table class="mdl-data-table mdl-js-data-table mdl-shadow--2dp">
  <thead>
    <tr>
      <th class="mdl-data-table__cell--non-numeric">Action</th>
      
      
      
    </tr>
  </thead>
  <tbody>
    <tr>
      <td class="mdl-data-table__cell--non-numeric"><a href="employer_upload_task.php" >Upload task</a>
</td>


      
      
    </tr>
    
    <tr>
      <td class="mdl-data-table__cell--non-numeric"><a href="employer_myongoing_orders.php" >Orders being done</a></td>
      
      
    </tr>
    <tr>
      <td class="mdl-data-table__cell--non-numeric"><a href="employer_completed_orders.php" >My completed orders</a></td>
      
      
    </tr>
    
   
  </tbody>
</table>
      
      </div>
      </div>
    </div>

    </div>
      </div>
    </div>
        
</div>

</body>
</html>