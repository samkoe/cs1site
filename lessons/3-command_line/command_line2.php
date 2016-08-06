<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Command Line 2</title>

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

<h1>Introduction to the Command Line 2</h1>
<h3>Prep for Class</h3>

  <input type="checkbox" class="task-list-item-checkbox">
   Visit <a href="http://linuxcommand.com/index.php">LinuxCommand.org</a> and read the page titled <a href="http://linuxcommand.org/lc3_lts0050.php">"Manipulating Files"</a>.
  <br>

  <input type="checkbox" class="task-list-item-checkbox">
   Write down any and all questions you have about what you read.
  <br>

<h3>Check Your Understanding</h3>
<p><strong>Answer these questions after you complete the section above.</strong></p>
<ol>
  <li>Explain the function of the following commands:  <code>cp</code>, <code>mv</code>, <code>rm</code>, and <code>mkdir</code>.</li>
  <li>What does <code>*</code> do in Linux?  What will the command <code>rm *.txt</code> do?</li>
  <li>What does the command <code>cp recursion?? /code</code> do?
  <li>Why do we need to be careful using <code>cp</code>, <code>mv</code>, and <code>rm</code>? What do you think "silently overwritten" means?</li>
</ol>

<h3>Class Activity (10 minutes)</h3>
<p>Discuss the commands <code>touch</code> and <code>nano</code>. Then construct a sample filesystem of sophomore boys and girls using the commands from last night's reading.</p>

<hr>
  <?php include($_SERVER["DOCUMENT_ROOT"] . "/includes/footer.html"); ?>

</body>
</html>
