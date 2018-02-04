<html>

<head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-red.min.css">
        <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
        <style>
             .this {
                align-items: center;
  
                        }
                        a{text-decoration:none;}
                      
       
        .mdl-button--file {
            right: 0;
        }
        .mdl-button--file {
input {

height: 100%;
right: 0;
opacity: 10;
position: relative;
top: 10;
width: 300px;
z-index: 4;
}
}
.mdl-textfield--file {
.mdl-textfield__input {
box-sizing: border-box;
width: calc(100% - 32px);
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
<li class="mdl-menu__item"><a href="employer_action.php">home</a></li>
<li class="mdl-menu__item mdl-menu__item--full-bleed-divider"><a href="logout.php">Log out</a></li>

</ul></br></br>
<div class="mdl-layout-spacer"></div>
    <div class="mdl-grid">
      <div class="mdl-layout-spacer"></div>
      <div class="mdl-cell mdl-cell--7-col">
      <div class="mdl-tabs__panel" id="help-panel">
      <!--extra logic here-->
      <!-- Floating Multiline Textfield -->
<form action="employer_file_upload.php" method = "POST">
<div class="mdl-textfield mdl-js-textfield">
    <textarea class="mdl-textfield__input" type="text" rows= "" id="sample5" name = "title" ></textarea>
    <label class="mdl-textfield__label" for="sample5">Order Title</label>
  </div></br>
  <div class="mdl-textfield mdl-js-textfield">
    <textarea class="mdl-textfield__input" type="text" rows= "3" id="sample5" name = "description" ></textarea>
    <label class="mdl-textfield__label" for="sample5">Order Details (maximum 10,000 words)</label>
  </div></br>
  <div class="mdl-textfield mdl-js-textfield">
                      <!--<textarea class="mdl-selectfield mdl-js-selectfield" type="text" rows= "1" id="sample5" name="country" required maxlength="20"></textarea>-->
                      <label class="mdl-selectfield__label" for="sample5">Format</label>
                      <select class="mdl-textfield__input" id="professsion1" name="format" required>
                            <option value=""></option>
                            <option>APA</option>
                          <option>MLA</option>
                          <option>HARVARD-</option>
                          <option>CHICAGO</option>
                          <option>TURABIAN</option>
                          <option>IEEE</option>
                          <option>SISTO2</option>
                          <option>GB7714</option>
                          <option>GOST-Name Sort</option>
                          <option>GOST-Title Sort</option>
                          <option>ISO 690 First Element and Date</option>
                          <option>ISO 690 Numerical Reference</option>
                          <option>Fanya venye unajifeel</option>
                          
                          </select>
                      
                     
                    </div><br>
                    <div class="mdl-textfield mdl-js-textfield">
                      <!--<textarea class="mdl-selectfield mdl-js-selectfield" type="text" rows= "1" id="sample5" name="country" required maxlength="20"></textarea>-->
                      <label class="mdl-selectfield__label" for="sample5">Payement nature</label>
                      <select class="mdl-textfield__input" id="professsion1" name="terms" required>
                            <option value=""></option>
                            <option>POA</option>
                          <option>TWO-WEEK-PAY-TERMS</option>
                          
                          </select>
                      
                     
</div>

                    </br>
                    <div class="mdl-textfield mdl-js-textfield">
                      <textarea class="mdl-textfield__input" type="text" rows= "1" id="sample5" name="deadline" required maxlength="40" ></textarea>
                      <label class="mdl-textfield__label" for="sample5">Order deadline</label>
                     
</div></br>
                    <div class="mdl-textfield mdl-js-textfield">
                      <textarea class="mdl-textfield__input" type="text" rows= "1" id="sample5" name="pages" required maxlength="40" ></textarea>
                      <label class="mdl-textfield__label" for="sample5">Number of Pages</label>
                     
                    </div></br>
                    <div>Upload relevant order files</div>
                    <div>
                    <input type = "file" name = "file"></br>
                    </div>
                   <!-- <div class="mdl-textfield mdl-js-textfield mdl-textfield--file">
                    <input class="mdl-textfield__input" placeholder="Order File" type="text" id="uploadFile" readonly/>
                    <div class="mdl-button mdl-button--primary mdl-button--icon mdl-button--file">
                      <i class="material-icons">a</i><input type="file" name="file" id="uploadBtn">
                    </div>
                  </div>-->
</br>  </br>    
                                  <div>
                                  <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">
                            Upload
                          </button></div>
                        </br>
</form>

      
      </div>
      </div>
    </div>

    </div>
      </div>
    </div>
        
</div>

</body>
</html>