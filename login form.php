<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>

<br><h1 style = "color:white; font-size:30px">Login Page</h1><br>

<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button><hr>


<div id="id01" class="modal">
  
  <form class="modal-content animate" action="/action_page.php" method="post">
    <div class="imgcontainer">
    </div>

    <div class="container">
      <label style = "font-size:20px; color:white" for="uname"><b>Username</b></label>
      <input style = "font-size:15px" type="text" placeholder="Enter Username" name="uname" required> <br> <br>

      <label style = "font-size:20px; color:white" for="psw"><b>Password   </b></label>
      <input style = "font-size:15px" type="password" placeholder="Enter Password" name="psw" required> <br> <br>
        
      
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label><br><br>
    </div>

    <div class="container">
	<button type="submit"><a href="Main Calendar.html">Login</button>
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button><hr>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>
</html>
