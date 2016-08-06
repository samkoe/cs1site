<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Project 9</title>

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

<h1>Project 9: Manufactoria Simulation</h1>
<h2>Preliminary</h2>
  <ul>
    <li><strong>Due Date:</strong> TBD no later than midnight.</li>
    <li>You must complete this assignment individually.</li>
  </ul>
<hr>

<h2>Manufactoria Simulation - 100 points</h2>
<p>Check out the logic game <a href="http://pleasingfungus.com/Manufactoria/">Manufactoria</a> and see if you can solve the first three puzzles. Feel free to solve additional puzzles if you like!</p>
<p>For this assignment, we will use Python to simulate the game of Manufactoria to solve two different problems. Use <a href="/projects/manufactoria.py">Manufactoria.py</a> as the starting point. The strings to be simulated will consist of some combination of reds ("r") and blues ("b"). For example, the string "brrbb" represents the following sequence of colors: first blue, then red, then red, then blue and finally blue.</p>

<h3>Requirements and Grading</h3>
<ul>
  <li>40 points - The function three_or_more_blues is correct. The function should accept any string that contain three or more blues. For example, "brbrb" should be accepted but "rrbbrrr" should not be. For each incorrect answer, 10 points will be deducted.</li>
  <li>40 points - The function alternating_colors is correct. Let "x" be the starting symbol (either "r" or "b") and let "y" be the other color ("r" if "x" is "b" and "b" if "x" is "r"). The function should accept strings that conform to the following pattern: x, xy, xyx, xyxy, etc. For each incorrect answer, 10 points will be deducted.</li>
  <li>10 points - The Python solution is easy to understand and does not contain unnecessary code.</li>
  <li>10 points - Comments are used appropriately in the solution.</li>
</ul>

<h3>Submission</h3>
<p>Place the solution in a file named <strong>Manufactoria.py</strong> and submit it in the CS GDrive Dropbox no later than 11:59 p.m. on Friday, October 30th. Late submissions receive no credit, but partial credit can be earned by making an ontime submission.</p>
<hr>

  <?php include($_SERVER["DOCUMENT_ROOT"] . "/includes/footer.html"); ?>

</body>
</html>
