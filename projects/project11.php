<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Project 11</title>

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

<!-- ---------------------------------------------- -->
<!--             EDIT BELOW THIS LINE             -->
<!-- ---------------------------------------------- -->

<h1>Project 11: Recursive Trees</h1>
<h2>Preliminary</h2>
<ul>
  <li><strong>Due Date:</strong> TBD no later than midnight</li>
  <li>This is a partner assignment.</li>
  <li>To avoid losing 15 points, you must complete this assignment with a classmate and you must both individually submit the same solution to the CS GDrive.</li>
  <li>To avoid losing 5 points, explain your contribution to the solution in the CS GDrive comment box when you upload the solution.</li>
</ul>
<hr>

<h3>Recursive Trees - 100 points</h3>
<p>Take a look at the following Python drawings of trees:</p>
<ul>
  <li>A <a href="/images/tree1.png">tree</a> of order 1.</li>
  <li>A <a href="/images/tree2.png">tree</a> of order 2.</li>
  <li>A <a href="/images/tree3.png">tree</a> of order 3.</li>
  <li>A <a href="/images/tree4.png">tree</a> of order 4.</li>
  <li>A <a href="/images/tree5.png">tree</a> of order 5.</li>
</ul>
<p>Can you predict what a tree of order 6 might look like?</p>

<h3>Requirements and Grading</h3>
<ul>
  <li>10 points - When the user runs the program, he or she will be prompted to enter the order of the tree to print (an integer between 1 and 6) and the tree will then be printed. The tree should grow upwards. A higher branch should be shorter than a lower branch. The entire tree should fit on the screen. The branching factor of the tree should be 2. You do not need to exactly match the trees above.</li>
  <li>30 points - Each tree is printed using recursion.</li>
  <li>30 points - Trees of order 1, 2, 3, 4, 5 and 6 all print correctly. 5 points for each order.</li>
  <li>20 points - Enhance the standard assignment to make the trees look even more natural. Place a comment at the top of your file describing the enhancement.</li>
    <ul>
    <li>For example, angles for the branches could vary.</li>
    <li>For example, green leaves could be drawn at the end of each branch.</li>
    <li>For example, the branching factor could vary.</li>
    <li>For example, the widths of the branches could vary.</li>
    </ul>
  <li>10 points - The Python code is properly commented, easy to understand and doesn't contain significant redundancies.</li>
</ul>

<h3>Submission</h3>
<p>Place the solution in a file named <strong>Tree.py</strong> and submit it to the CS GDrive no later than midnight on TBD. Late submissions receive no credit, but partial credit can be earned by making an on time submission.</p>

<hr>

  <?php include($_SERVER["DOCUMENT_ROOT"] . "/includes/footer.html"); ?>

</body>
</html>
