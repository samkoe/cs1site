<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Project 8</title>

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

<h1>Project 8: Piet Mondrian Picture</h1>
<h2>Preliminary</h2>
<ul>
  <li><strong>Due Date:</strong> TBD no later than midnight.</li>
  <li>This is a partner assignment.</li>
  <li>To avoid losing 15 points, you must complete this assignment with a classmate and you must both individually submit the same solution to the CS GDrive.</li>
  <li>To avoid losing 5 points, explain your contribution to the solution in the CS GDrive comment box when you upload the solution.</li>
</ul>

<h2>Piet Mondrian Picture - 100 points</h2>
<p><a href="http://en.wikipedia.org/wiki/Piet_Mondrian">Piet Mondrian</a> was a Dutch artist who liked to place rectangles of various shapes and colors on a canvas. Here is one such <a href="http://www.piet-mondrian.org/composition-with-red-yellow-and-blue.jsp">example</a>. For Assignment 6, you are going to write a Python program that randomly generates Mondrian-like art.</p>

<p>The user should be asked to enter (1) the number of rectangles that should be drawn, (2) the maximum width of a rectangle in pixels and (3) the maximum height of a rectangle in pixels. The Python program, running in IDLE, should then draw the appropriate number of rectangles where each rectangle is randomly colored, randomly positioned and randomly sized. Here is a <a href="http://www.cs.montana.edu/paxton/classes/joy-and-beauty/assignments/hw6/random_art.png"></a>{drawing} that might result if the user requests 200 rectangles with a maximum width of 100 pixels and a maximum height of 100 pixels.</p>

<h3>Requirements and Grading</h3>
<p></p>
<ul>
  <li>20 points - The user is prompted to enter (1) the number of rectangles, (2) the maximum width of a rectangle in pixels and (3) the maximum height of a rectangle in pixels (10 points). The program may assume that the user will enter non-negative integers. However, if the user enters a width or height that is less than 10 pixels, use 10 as the value for that dimension (10 points). Hint - use the <strong>max</strong> function (find this in the Python documentation).</li>
  <li>20 points - The following items are determined randomly: the x and y coordinates of the upper left corner of the rectangle (5 points), the width and height of the rectangle (5 points) and the color of the rectangle (10 points).</li>
  <li>20 points - The correct number of rectangles are drawn (5 points), all rectangles appear at least partially in IDLE's Python Turtle Graphics window (5 points) and a rectangle can appear anywhere in IDLE's Python Turtle Graphics window (10 points).</li>
  <li>10 points - The background color of IDLE's Python Turtle Graphics window is black.</li>
  <li>10 points - Two or more user-defined functions are used appropriately. In particular, there should be a function that draws a single rectangle.</li>
  <li>10 points - The turtle draws quickly (4 points), no turtle is visible once the drawing is complete (3 points), and the exitonclick() function is used correctly (3 points).</li>
  <li>10 points - The Python solution is easy to understand and does not contain unnecessary code. (Remember to put an appropriate comment at the top of the Python solution. The comment should include both your name and your partner's name.)</li>
</ul>

<h3>Helpful Hint</h3>
<p>Take a look at the <strong>random</strong> module and the <strong>turtle</strong> module in Python's <a href="http://docs.python.org/3/py-modindex.html">online documentation</a> to see what functionality is possible.
</p>

<h3>Submission</h3>
<p>Place the solution in a file named <strong>Mondrian.py</strong> and submit it to the CS GDrive no later than midnight on TBD. Late submissions receive no credit, but partial credit can be earned by making an ontime submission.</p>

  <?php include($_SERVER["DOCUMENT_ROOT"] . "/includes/footer.html"); ?>

</body>
</html>
