<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Project 2</title>

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

<h1>Project 2:  Simple Business Card</h1>
<h2>Preliminary</h2>
<ul>
  <li><strong>Due Date:</strong>  Friday, Sept 23 by midnight</li>
  <li>This assignment must be completed <em>individually</em>.</li>
</ul>
<hr>

<h2>Simple Business Card - 100 points</h2>
<h3>Purpose</h3>
<p>The purpose of this assignment is write a simple Python program that produces a business card.</p>

<h3>Background</h3>
<p>Imagine you have landed a great summer job, working at a private investment bank. You have an office and all the accoutrements in it that you'd ever desire. Your desk, comfy adjustable pleated leather office chair, sticky notes and pens are in one convenient location...but something is missing from the lot. Your boss wants you to meet with a client today and you'd love to give the client a copy of your contact information, but where did your business cards go?</p>

<p>Fortunately, you recently finished a course with the odd sounding name of <strong>The Joy and Beauty of Computing</strong> that provided you with the skills to make one yourself. You decide to design a business card that includes your company logo, name, address, phone number and corporate email, just in case this client wants to reach you. You don't remember exactly what it's supposed to look like, but luckily you borrow a spare from a coworker and try to make a design that looks exactly like hers:
</p>

<pre>
+------------------------------------------------+
|    |                                           |
|   -|          Granger, Hermione                |
|  --|          Securities and Investments       |
| ---|          Gringotts Bank                   |
| ---------                                      |
|  -------      4 Diagon Alley                   |
|               North Side                       |
|               London, England 373737           |
|                                                |
| Work: (242)-262-2992 @: hermione@gringotts.com |
+------------------------------------------------+
</pre>

<h3>Assignment</h3>
<p>Assume that you work for the same company as Hermione. Write a Python program that produces a business card for you with the following characteristics:</p>
<ul>
  <li>10 points - Your first and last name is on the card.</li>
  <li>10 points - Your phone number is on the card.</li>
  <li>10 points - Your e-mail address is on the card. Assume this address is your-first-name@parasail.com.</li>
  <li>30 points - Everything else about your business card matches the card above. For each difference, 10 points will be deducted.</li>
  <li>20 points - The Python program you submit runs properly.</li>
</ul>

<h3>Submission</h3>
<p>Place the solution in a file named <strong>BusinessCard.py</strong> and submit it to the CS GDrive no later than midnight on Friday, September 23rd.</p>
<p><strong>Note:</strong> Since late submissions receive no credit, you should submit whatever you have (even if it is not completely finished) by the deadline above. Partial credit for ontime submissions can be earned.</p>

  <hr>
  <?php include($_SERVER["DOCUMENT_ROOT"] . "/includes/footer.html"); ?>

</body>
</html>
