<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylea.css">

<script type="text/javascript">

function validate()
{
  var error="";
  var sname = document.getElementById( "name_of_user" );
  if( sname.value == "" )
  {
    error = " You Have To Write Your Name. ";
    document.getElementById( "error_para" ).innerHTML = error;
    return false;
  }


  var error="";
  var country = document.getElementById( "country" );
  if( country.value == "" )
  {
    error = " You Have To Write Your country. ";
    document.getElementById( "error_para" ).innerHTML = error;
    return false;
  }


  var error="";
  var ace = document.getElementById( "ace1" );
  var ace = document.getElementById( "ace2" );
  if (ace1.checked == false || ace2.checked == false)
  {
    error = " Please Select Both Checkboxes. ";
    document.getElementById( "error_para" ).innerHTML = error;
    return false;
  
  }


 else
 {
  return true;
 }
}



</script>  
</head>
<body>  

<?php                // php variables
$sname = $gender = $comment = $country = "";
?>
<div class = "container">
<h2>Registration Form</h2>

<form method="post" target="_top" onsubmit="return validate();" action="claim.php" >  

<div>
  <b>Name </b><input type="text" name="name" placeholder="jonh dere" id="name_of_user">
  <br><br>
</div> 
  <b>Gender</b>
  <div class = "cont">
    <input type="radio" name="gender" value="female">Female<br>
    <input type="radio" name="gender" value="male">Male<br>
    <label>leave blank if dont want to mention.</label>
    </div>
    <br><br>
    <label for="country"><b>Country</b></label>
    <div class = "cont">
    
    <select id="country" name="country">
        <option value="">Select Country</option>  
        <option value="india">India</option>
        <option value="canada">Canada</option>
        <option value="usa">USA</option>
     </select><br><br>
  </div>
  <br><br>
  <b>Description</b>
  <div class = "cont">
   <textarea name="comment" rows="3" cols="40" placeholder="Write 250 words only..."></textarea>
  <br><br>
  </div>

  
    <input type="checkbox" id="ace1" name="ace" value="laptop">
    <label for="ace1"> I have a laptop.</label><br>
    <input type="checkbox" id="ace2" name="ace" value="internet">
    <label for="ace1"> I have a good Internet connection.</label><br>
  
  <input type="submit" class = "btn" name="submit" value="Submit"> 
  
</form>
<hr>
<p id="error_para" ></p>
</div> 
</body>
</html>