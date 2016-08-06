<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Project 1</title>

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

<h1>Project 1: Cloning a Filesystem</h1>
<h2>Preliminary</h2>
  <ul>
    <li><strong>Due Date:</strong>  Friday, September 23 by midnight</li>
    <li>This assignment must be completed <em>with one (and only one) other classmate</em>. Knowing how to effectively collaborate with others is a highly valued skill in the computing industry. If you choose to complete this assignment without a partner, 20 points will be deducted.</li>
  </ul>
<hr>

<h2>Google Profile - 20 pts</h2>
<ul>
  <li>Add a recognizable photo or sketch to your Google for Education account. <strong>(10 points)</strong> </li>
  <li>Add some additional information to your Google profile. <strong>(10 points)</strong></li>
</ul>
<hr>

<h2>Cloning a Filesystem - 80 points</h2>
<h3>Purpose</h3>
<p>The purpose of this assignment is practice using the command line and nano editor to manipulate files and the filesystem.</p>
<p>This entire project must be completed <em>from the command line</em>. You may not use the file cabinet GUI.</p>

<h3>Assignment</h3>
<p><strong>Part One</strong></p>
<p>Convert the following outline into a filesystem in your root directory. Add text to files when indicated:</p>

<pre>
I. Geography

  A. Continents
    1. North_America
    2. South_America
    3. Europe
    4. Africa
    5. Asia
    6. Australia
    7. Anarctica 

  B. Oceans
    1. Atlantic_Ocean
      --text:  "The Atlantic Ocean provides some of the world's most heavily traveled sea routes."
    2. Pacific_Ocean
      --text:  "The Pacific Ocean is the largest of the world's five oceans."
    3. Indian_Ocean
      --text:  "The Indian Ocean endangered marine species include the dugong, seals, turtles, and whales."
    4. Arctic_Ocean
      --text:  "The Arctic Ocean is the smallest of the world's five oceans."
    5. Southern_Ocean
      --text:  "The Southern Ocean is deep:  4,000-5,000 meters over most of its extent."

  C. Hemispheres
    1. Northern
    2. Southern
    3. Western
    4. Eastern
</pre>

<p><strong>Part Two</strong></p>
<p>When you have cloned the above filesystem, do the following:</p>
<ol>
  <li>Move the North_America directory, the Europe directory, and the Asia directory to the Northern directory.</li>
  <li>Move the Africa directory, Australia directory and Antarctica directory to the Southern directory.</li>
  <li>Copy the Africa directory to the Northern directory (since it lies in both hemispheres).</li>
  <li>Delete the Western directory and Eastern directory.</li>
  <li>Delete the Continents directory.</li>
</ol>

<h3>Submission</h3>
<p>This project must be completed no later than 5:00 PM on Friday, September 23rd.</p>
<p>Since late submissions receive no credit, you should submit whatever you have (even if it is not completely finished) by the deadline above. Partial credit for ontime submissions can be earned.</p>
<p><strong>Note:</strong> Both partners must have the identical filesystem to receive full credit.</p>

  <hr>

  <?php include($_SERVER["DOCUMENT_ROOT"] . "/includes/footer.html"); ?>

</body>
</html>
