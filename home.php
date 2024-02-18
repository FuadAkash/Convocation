<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "student_details";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $full_name = $_POST['full-name'];
    $father_name =$_POST['father-name'];
    $mother_name = $_POST['mother-name'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $degree_name = $_POST['degree-name'];
    $admission_session = $_POST['admission-session'];
    $reg_id = $_POST['reg-id'];
    $batch = $_POST['batch'];
    $passing_year = $_POST['passing-year'];
    $graduating_session = $_POST['graduating-session'];

    $sql = "INSERT INTO user_data (full_name, father_name, mother_name, dob, gender, degree_name, admission_session, reg_id, batch, passing_year, graduating_session)
            VALUES ('$full_name', '$father_name', '$mother_name', '$dob', '$gender', '$degree_name', '$admission_session', '$reg_id', '$batch', '$passing_year', '$graduating_session')";

    if ($conn->query($sql) === TRUE) {
        echo "Record added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BGC Trust University Bangladesh - Convocation Registration</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="box-outer">
    <header class="heading">
        <img src="uploads/logo.png" alt="BGC Trust University Logo" class="logo">
        <h1>Convocation Registration Form</h1>
    </header>
    <form id="registration-form" action="home.php" method="post">
        <div class="form-container">
            <section class="personal-info">
                <h2>Personal Information</h2>
                <label for="full-name">Name (As per SSC Certificate)*</label>
                <input type="text" id="full-name" name="full-name" class="input-control" required>
                <label for="father-name">Father's Name*</label>
                <input type="text" id="father-name" name="father-name" class="input-control" required>
                <label for="mother-name">Mother's Name*</label>
                <input type="text" id="mother-name" name="mother-name" class="input-control" required>
                <label for="dob">Date of Birth*</label>
                <input type="date" id="dob" name="dob" class="input-control" required>
                <label for="gender">Gender*</label>
                <select id="gender" name="gender" class="input-control">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="other">Other</option>
                </select>
            </section>
            <section class="degree-info">
                <h2>Degree Information</h2>
                <label for="degree-name">Name of Degree:</label>
                <input type="text" id="degree-name" name="degree-name" class="input-control">
                <label for="admission-session">Admission Session:</label>
                <input type="text" id="admission-session" name="admission-session" class="input-control">
                <label for="reg-id">Reg/ID No.:</label>
                <input type="text" id="reg-id" name="reg-id" class="input-control">
                <label for="batch">Batch:</label>
                <input type="text" id="batch" name="batch" class="input-control">
                <label for="passing-year">Year of Passing:</label>
                <input type="text" id="passing-year" name="passing-year" class="input-control">
                <label for="graduating-session">Graduating Session:</label>
                <input type="text" id="graduating-session" name="graduating-session" class="input-control">
            </section>
        </div>
        <div class="button-container">
            <button type="submit" class="button">Submit</button>
        </div>
    </form>
</div>
</body>
</html>
