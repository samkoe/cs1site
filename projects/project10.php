<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Project 10</title>

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

<h1>Project 10: Writing Music with Python</h1>
<h2>Preliminary</h2>
  <ul>
    <li><strong>Due Date:</strong> TBD no later than midnight</li>
    <li>This is a partner assignment.</li>
    <li>To avoid losing 15 points, you must complete this assignment with a classmate and you must both individually submit the same solution to the CS GDrive.</li>
    <li>To avoid losing 5 points, explain your contribution to the solution in the CS GDrive comment box when you upload the solution.</li>
  </ul>
<hr>

<h2>Python Music - 100 points</h2>
<p>A common task in the world of computer science is to take an existing program and modify it.</p>
<p>Before you undertake the tasks below, play with the program in the IDLE environment until you understand its functionality. Once you do, take a look at the underlying Python code to get a sense for how the program works. (You do not have to understand all of the code to do this assignment.)</p>

<h3>Window Users (use Python 3.5)</h3>
<ul>
  <li>Use <strong><a href="/projects/music.py">Music.py</a></strong> as a starting point.</li>
  <li>From the Windows start menu, run the <strong>Command Prompt</strong>.</li>
  <li>Type the following in the Command Prompt: <strong>python -m pip install pyaudio</strong></li>
  <li>Note: If the above command does not work, uninstall Python 3.5 and then reinstall it, being sure to check the box labeled <strong>Add Python 3.5 to PATH</strong>.</li>
</ul>

<h3>Mac Users (use Python 2.7)</h3>
<p>Use <a href="http://www.cs.montana.edu/paxton/classes/joy-and-beauty/assignments/hw8/Mac_Music.py">Mac_Music.py</a> as a starting point and ensure that <a href="http://people.csail.mit.edu/hubert/pyaudio/">PyAudio for Mac OS X</a> has been downloaded and installed.</p>
<ul>
  <li>Use the terminal to open idle for 2.7 by typing "idle" into an open terminal window. If this doesn't work, write the program in nano, but run it by typing <strong>python</strong> instead of <strong>python3</strong>.</li>
  <li>Use raw_input instead of input for taking input from the user.</li>
</ul>

<h3>Requirements and Grading</h3>
<ul>
  <li>30 points - Use the program to compose a recognizable song of your choosing that is at least five notes in length. At the very bottom of the supplied Python program, remove the multiline comments (""") and replace <strong>myEpicSong</strong> with your song (25 points). Add a comment there that contains the name of your song (5 points).</li>
  <li>30 points - Modify the program so that lowercase notes (e.g. 'a' or 'g#') work, whether they are directly entered by the user (20 points) or they are entered by hand into <strong>myEpicSong</strong> at the bottom of the program (10 points).</li>
  <li>40 points - Add a new option to the menu (10 points) that enables a user to change the beats per minute to any legal value in the range 60 through 200 (10 points). You may assume the user will enter an integer, but ask the user to keep going until a value in the range 60 through 200 is entered (10 points).</li>
</ul>

<h3>Submission</h3>
<p>Place the file (<strong>Music.py</strong> for Windows users and <strong>Mac_Music.py</strong> for Mac users) in the CS GDrive no later than midnight on TBD. Late submissions receive no credit, but partial credit can be earned by making an ontime submission.</p>
<hr>

  <?php include($_SERVER["DOCUMENT_ROOT"] . "/includes/footer.html"); ?>

</body>
</html>
