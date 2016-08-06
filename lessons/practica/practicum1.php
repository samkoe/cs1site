<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Practicum 1</title>

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

<h1>Practicum 1</h1>

<h3>Components</h3>
  <ul>
    <li>The three question exam will be based on the Python materials that we have covered to date. The assignments should help to reinforce your understanding.</li>
    <li>One question will require you to understand and identify the components of a Raspberry Pi board.</li>
    <li>One question will require you to understand how to build and edit a Linux filesystem.</li>
    <li>One question will require you to understand how to write a Python program that receives user input to calculate a given formula correctly. </li>
    <li>You may bring one 8.5 inch by 11 inch sheet of double-sided notes.</li>
    <li>You may use a Raspberry Pi to develop your answers. You may only use the internet to access the interactive Python textbook, the online Python documentation or previous Python programs that you (or you and your partner) wrote for this course.</li>
    <li>To be successful on the exam, strive to <strong>understand</strong> the Python material and be able to use it to solve small problems.</li>
  </ul>

<h3>In-Class Activity:  Practice Practicum</h3>
  <p>An ungraded practice practicum will be given during class. Solutions will be covered the following day.</p>

  <p><strong>Additional Question:</strong> Write a python program that asks the user to enter his/her name and a field width. The program should then print a plus sign (+), followed by the person's name centered in the field width specified, followed by another plus sign (+). A sample run of the program appears below. The user enters the name (Anne) and the field width (20). Match the format exactly.</p>

  <pre>
Enter your name: Anne
Enter the field width: 20

+        Anne        +
  </pre>

  <hr>
  <?php include($_SERVER["DOCUMENT_ROOT"] . "/includes/footer.html"); ?>

</body>
</html>
