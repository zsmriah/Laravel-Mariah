<?php
// Database connection details
$servername = "localhost"; // or your server address
$username = "root"; // replace with your database username
$password = ""; // replace with your database password
$dbname = "database"; // replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Query to select data from the users table
$sql = "SELECT fullname,
objective,
collge,
email,
phone,
linkedin, 
sd1, 
sd2, 
sd3,
i1, 
i2, 
i3, 
skill1,
skill2, 
skill3 FROM myinformation;";
$result = mysqli_query($conn, $sql);
$resultCheck = mysqli_num_rows($result);


$fullname = '';
$objective = '';
$collge = '';
$email = '';
$phone = '';
$linkedin = ''; 
$sd1 = ''; 
$sd2 = ''; 
$sd3 = '';
$i1 = ''; 
$i2 = ''; 
$i3 = ''; 
$skill1 = '';
$skill2 = ''; 
$skill3 = '';

// Check if there are results
if ($resultCheck > 0) {
// Loop through each row and append to the output string
    while($row = mysqli_fetch_assoc($result)) {
        $fullname = $row['fullname'];
        $objective = $row['objective'];
        $collge = $row['collge'];
        $email = $row['email'];
        $phone = $row['phone'];
        $linkedin = $row['linkedin']; 
        $sd1 = $row['sd1']; 
        $sd2 = $row['sd2']; 
        $sd3 = $row['sd3'];
        $i1 = $row['i1']; 
        $i2 = $row['i2']; 
        $i3 = $row['i3']; 
        $skill1 = $row['skill1'];
        $skill2 = $row['skill2']; 
        $skill3 = $row['skill3'];
    }
} else {
    $fullname = "No results found.";
}

// close connection
$conn->close();
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resume</title>

    <style>
       
body {
    font-family: Arial, sans-serif;
    line-height: 1.6;
    margin: 20px;
    background-color: #f4f4f4;
    color: #333;
}
.container {
    max-width: 800px;
    margin: auto;
    background: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}
h1, h2, h3 {
    color: #007bff;
}
h1 {
    border-bottom: 2px solid #007bff;
    padding-bottom: 10px;
}
section {
    margin-bottom: 20px;
}
ul {
    list-style-type: none;
    padding: 0;
}
li {
    margin: 5px 0;
}

    </style>
</head>

<body>
    
<div class="container">
    <h1><?php echo $fullname; ?></h1>
    <p>Email: <?php echo $objective; ?> | Phone: <?php echo $collge; ?> | LinkedIn: <?php echo $email; ?></p>

    <section>
        <h2>Objective</h2>
        <p>Motivated professional seeking a challenging position to leverage skills in project management and software development.</p>
    </section>

    <section>
        <h2>Education</h2>
        <h3>Bachelor of Science in Information Technology</h3>
        <p><?php echo $linkedin; ?></p>
    </section>

    <section>
        <h2>Experience</h2>
        <h3>Software Developer</h3>
        <p>Example Company, City, State | June 2020 - Present</p>
        <ul>
            <li><?php echo $sd2; ?></li>
            <li><?php echo $sd3; ?></li>
        </ul>

        <h3>Intern</h3>
        <p>Another Company, City, State | Summer 2019</p>
        <ul>
            <li><?php echo $i2; ?></li>
            <li><?php echo $i3; ?></li>
        </ul>
    </section>

    <section>
        <h2>Skills</h2>
        <ul>
            <li>Programming Languages: <?php echo $skill1; ?></li>
            <li>Web Technologies: <?php echo $skill2; ?></li>
            <li>Tools: <?php echo $skill3; ?></li>
        </ul>
    </section>


</div>
</body>

</html>