<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Project 7</title>

<!-- Bootstrap -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  <link rel="stylesheet" href="/css/style.css" type="text/css" />
  <link rel="icon" href=/images/griffin.png type="image/x-icon" />
</head>

<?php include($_SERVER["DOCUMENT_ROOT"] . "/includes/header.html"); ?>
<?php include($_SERVER["DOCUMENT_ROOT"] . "/includes/nav.html"); ?>

<body>
<!-------------------------------------------------->
<!--             EDIT BELOW THIS LINE             -->
<!-------------------------------------------------->

<h1>Project 7: Minecraft Drawing</h1>
<h2>Preliminary</h2>
<ul>
  <li><strong>Due Date:</strong>  TBD by midnight</li>
  <li>You must complete this assignment individually.</li>
</ul>
<hr>

<h2>Minecraft Drawing - 100 points</h2>
<p>In this assignment, you will continue your foray into the world of Python Turtle Graphics. Instead of creating a single Minecraft tile as in Assignment 3, you will use Python <strong>functions</strong> to create two or more types of Minecraft tiles. Once the tile functions are created, you should use them to create an elaborate Minecraft drawing.</p>

<p>Use Python Turtle Graphics to design and draw a complex object that might appear in the game of Minecraft. Here is a drawing of a <a href="http://www.cs.montana.edu/paxton/classes/joy-and-beauty/assignments/hw5/castle.png">castle</a> that could potentially earn all 100 points.</p>

<h3>Requirements and Grading</h3>
<ul>
  <li>20 points - There are at least two types of tiles in the drawing. In the sample castle drawing, one type of tile is a square and the other is a flag.</li>
  <li>20 points - Each tile is defined in a function. The function should draw the tile in a square that is 20 pixels wide and 20 pixels tall.</li>
  <li>20 points - Each function should be general. For example, the square tiles in the castle drawing are produced by calling a function with this information: the turtle that should be used to draw the tile, the x and y coordinates of the upper left corner of the tile, and the color to use.</li>
  <li>20 points - The Python solution is easy to understand and does not contain unnecessary code. (Remember to put an appropriate comment at the top of the Python solution.)</li>
  <li>20 points - The drawing looks good and would impress your friends.</li>
</ul>

<h3>Submission</h3>
<p>Place the solution in a file named <strong>MinecraftDrawing.py</strong> and submit it to the CS GDrive no later than midnight on TBD. Late submissions receive no credit, but partial credit can be earned by making an ontime submission.

</p>

<h3>MSU Fall 2014 Student Solutions</h3>
<p>Check out these <a href="http://www.cs.montana.edu/paxton/classes/joy-and-beauty/assignments/hw5/Fall2014Solutions.pptx">solutions</a> to see what is possible.</p>
<hr>

  <?php include($_SERVER["DOCUMENT_ROOT"] . "/includes/footer.html"); ?>

</body>
</html>
