<html>
<head>
<link rel="shortcut icon" type="image/png" href="/logo.png">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/index.css" type="text/css">
</head>
<body style="background-color:black;">

<div class="topnav">
  <a class="active" href="index.php">Home</a>
  <a href="https://jacksoncraft859-ubiquitous-trout-wxwxwq7jr49hv4jw-3000.preview.app.github.dev/xterm">Xterm</a>
  <a href="https://github.com/jacksoncraft859/">Github</a>
</div>
<div id="banner" >
  <h1 style="color:ghostwhite; font-size:40px;">Project JSPC</h1>
  <br>
  <h5 style="color:ghostwhite;">By Jackson (aka. Jacksoncraft859) and Camden (aka. Hansolo267)</h5>
  <br>
</div>
<p style="color:ghostwhite;">This site is hosted by Github Codespaces.</p>
<hr>
<h1 style="color:ghostwhite;">Ignore</h1>
<form style="color:ghostwhite" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
        Login: <input type="text" name="fname">
        <input type="submit">
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST")
        {
            $str = $_POST['fname'];

            if (($str) == "Jackson: - Ir0n_pr1m3")
            {
              echo "String is empty";
            }
            elseif (($str) == "sudo skip login")
            {
              echo "sudo not implemented";
            }
            else
            {
    ?>
               <h1 style="color:ghostwhite">
                 <?php echo "Invalid Login Details" ?>
               </h1>
    <?php
            }
        }
    ?>

</body>
</html>
