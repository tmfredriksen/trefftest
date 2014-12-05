<!DOCTYPE html>
{in
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>
    <table
{foreach key=key from=$treffliste item=treff}
	
        <li>{$treff.Treffnavn}</li>   
        <hr/>
{/foreach}
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

   
  </head>
  <body>
    <h1>Hello, world!</h1>

   
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
