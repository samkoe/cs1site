<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <title>Project 3</title>

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

<h1>Project 3:  Dynamic Business Card</h1>

<h2>Preliminary</h2>
  <ul>
    <li><strong>Due Date:</strong>  Friday, October 7 by midnight</li>
    <li>This assignment must be completed <em>with one (and only one) other classmate</em>. Knowing how to effectively collaborate with others is a highly valued skill in the computing industry. If you choose to complete this assignment without a partner, 20 points will be deducted.</li>
  </ul>
<hr>

<h2>Dynamic Business Card - 100 points</h2>
  <h3>Purpose</h3>
  <p>Gringotts was extremely pleased with your business card solution. They would like you to modify that solution so that it works for any first name, last name and phone number. More specifically, your solution should ask the user to enter each of these three pieces of information separately. The program should then print the appropriate business card.</p>
  <p><strong>Note:</strong> It is a common task for a computer scientist to enhance the functionality of an existing program.</p>

<h3>Sample Transcript</h3>
  <p>The sample transcript below shows what might happen when the Petra Griffin runs your program. Information to the right of the prompt (>) is entered by the user.</p>

  <pre>
  Please enter your first name > Petra
  Please enter your last name > Griffin
  Please enter your telephone number > (406)-582-8165

  Here is your business card ...

  +------------------------------------------------+
  |    |                                           |
  |   -|          Griffin, Petra                   |
  |  --|          Securities and Investments       |
  | ---|          Gringotts Bank                   |
  | ---------                                      |
  |  -------      4 Diagon Alley                   |
  |               North Side                       |
  |               London, England 373737           |
  |                                                |
  | Work: (406)-582-8165 @: petra@gringotts.com    |
  +------------------------------------------------+
  </pre>

<h3>Assumptions</h3>
  <ul>
    <li>Assume the person's first name has no more than 10 characters.</li>
    <li>Assume the person's last name has no more than 10 characters.</li>
    <li>Assume the person's telephone number is entered in the format <em>(xxx)-xxx-xxxx</em> where x is a digit between 0 and 9.</li>
  </ul>

<h3>Required Python Comment</h3>
  <p>Place a Python comment at the top of your submission that is formatted as follows.</p>
  <pre>
  # -----------------------------------------+
  # Your name, your partner's name           |  <-- e.g. Genevieve Suwara, Luke Welna
  # CS 1, Project 2                          |
  # Last Updated: Month Day, Year            |  <-- e.g. September 10, 2015
  # -----------------------------------------|
  # A brief description of the assignment.   |  <-- can be more than 1 line
  # -----------------------------------------+
  </pre>

<h3>Grading</h3>
  <ul>
    <li>20 points - The user is prompted to enter their first name (4 points), last name (4 points) and telephone number (4 points) using the specified messages above (4 points) in the proper order (4 points).</li>
    <li>10 points - The <em>Here is your business card...</em> message appears with an empty line both before and after it.</li>
    <li>10 points - Except for the first name, last name and telephone number, the rest of the business card is identical to the one above.</li>
    <li>20 points - The user's first and last name appear inside the business card correctly (10 points) and the bar (|) to the right of the entire name appears in the proper column, provided the name is not too long (10 points).</li>
    <li>10 points - The user's e-mail address appears one space to the right of @: (5 points) and the bar to the right of the e-mail address appears in the proper column (5 points), provided the first name is not too long.</li>
    <li>10 points - The user's phone number appears inside the business card correctly.</li>
    <li>10 points - A Python comment appears at the top of the submission in the format specified above.</li>
    <li>10 points - Each partner must upload the partnership's solution to the Assignment 2 Dropbox individually. In the comment box, explain your contributions to the solution.</li>
  </ul>

<h3>Helpful Hint</h3>
  <p>Consider the following Python code:</p>

  <pre>
color1 = "blue"
color2 = "gold"

print(color1.ljust(10) + color2)
  </pre>

  <p>When run, the code above will produce</p>
  <pre>
blue      gold
  </pre>
  <p>The ljust(10) has the effect of printing the word "blue" at the far left (left justified) of a field of width 10.</p>
  <p>What happens if you replace ljust(10) with rjust(10)? With center(10)?</p>

<h3>Submission</h3>
  <p>Place the solution in a file named <strong>DynamicBusinessCard.py</strong> and submit it to the CS GDrive no later than midnight on Friday, October 7th.</p>
  <p><strong>Note:</strong> Both partners must upload the team solution individually and separately to Dropbox.</p>
<hr>

  <?php include($_SERVER["DOCUMENT_ROOT"] . "/includes/footer.html"); ?>

</body>
</html>
