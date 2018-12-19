<html>
<head>
<link rel="stylesheet" type="text/css" href="semantic/dist/semantic.min.css">
  <script
    src="https://code.jquery.com/jquery-3.1.1.min.js"
    integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
    crossorigin="anonymous"></script>
  <script src="semantic/dist/semantic.min.js"></script>
<title> </title>

</head>
<body>

    <?php
        $user=$_SESSION['user'];
        if(!isset($user)){
    ?>

    <div class="item">
        <a class="ui primary button" href="login">
            <i class="sign in icon"></i> Login
        </a>
    </div>
    <?php } else { ?>
       <!-- <div class="item button" onclick="location.href='logout' -->
       <div class="item button">
        <div class="ui header">
               
        <div class="ui dropdown">
        <i class="user circle icon"></i>
        <?php 
                    echo $_SESSION['user'] 
                    ?>
  <i class="dropdown icon"></i>
  <div class="menu">
    <div class="item">Edit Profile</div> 
    <div class="item button" onclick="location.href='logout'">
      
      Logout
    </div>
    
  </div>
</div>
        </div>
        </div>
    <?php
        }
    ?>
    <script>
$('.ui.dropdown').dropdown();
</script>
</body>
<html>