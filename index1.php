
<html>
    <head>
        <title>Welcome to Contact Form Validation</title>

    <!-- Bootstrap LINK-->   
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--CSS-->
    <link rel="stylesheet"  type="text/css" href="style.css">

    <link href="https://fonts.googleapis.com/css?family=Squada+One&display=swap" rel="stylesheet"> 
    </head>

    <body>
      
        <form>
        <h2>Get in Touch</h2>
        <div id="error"></div>
            <div class="form-group">
              <label for="username">Username</label>
              <input type="text" class="form-control" id="user" aria-describedby="emailHelp" name="user" placeholder="Enter Username">
              <small class="form-text text-muted">We'll never share your Username with anyone else.</small>
            </div>
            <div class="form-group">
              <label>Password</label>
              <input type="password" class="form-control" id="pass" placeholder="Enter your password" name="pass">
            </div>
        
            <button type="submit" id="submit" value="Login" class="btn btn-primary center-block">Submit</button>
          </form>
        


<!-- Bootstrap LINK-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    
<script type="text/javascript">
$("form").submit(function(e) {
  e.preventDefault();
  var error = "";
  if($("#user").val() == "")
  {
    error+= "The user field is required<br>";
  }
  
  if($("#pass").val() == "")
  {
    error+= "The Password field is required<br>";
  }
  if(error!= "")
  {
    $("#error").html('<div class="alert alert-danger" roles="alert"><p><strong>There were error(s) in your form:</strong></p>' + error + '</div>');
  }
  else
  {
    $("form").html('<div class="alert alert-success" role="alert"><h4 class="alert-heading">Well done!</h4><p>Aww yeah, you successfully submitted the form. You will surely get the revert with 24-48 hours.</p><hr><p>Thanks for doing the Registration</p>' +'</div>');
   //   for doing the normal submission you can use this code as well  $("form").unbind("submit").submit();
  }
});
</script>


</body>
</html>