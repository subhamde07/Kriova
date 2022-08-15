<?php
$connect = mysqli_connect("localhost", "root", "", "Kriova");

//collect post variables
if (isset($_POST['submit'])) {
    $EmployeeId = $_POST['EmployeeId'];
    $EmployeeName = $_POST['EmployeeName'];
    $DateOfBirth = $_POST['DateOfBirth'];
    $Email = $_POST['Email'];
    $PhoneNumber = $_POST['PhoneNumber'];
    $Street = $_POST['Street'];
    $City = $_POST['City'];
    $State = $_POST['State'];
    $Country = $_POST['Country'];
    $Pincode = $_POST['Pincode'];

    $query = "INSERT INTO Employee_database (EmployeeId,EmployeeName,DateOfBirth,Email,PhoneNumber,Street,City,State,Country,Pincode)VALUES('$EmployeeId', '$EmployeeName','$DateOfBirth','$Email', '$PhoneNumber','$Street','$City','$State','$Country','$Pincode')";
    $result = mysqli_query($connect, $query);

    //echo $sql;

    //execute the query
    if ($result) {

        echo "<script>alert('Successfully inserted')</script>";
    } else {
        echo "<script>alert('failed to insert')</script>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!----======== CSS ======== -->
    <link rel="stylesheet" href="emp_data.css">

    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
</head>

<body>
    <div class="container">
        <header>Registration</header>
        <form action="#" class="" id="" method="post">
            <div class="details personal">
                <span class="title">Personal Details</span>
                <div class="fields">
                    <div class="input-field">
                        <label>ID Number</label>
                        <input type="number" placeholder="Enter ID number" name="EmployeeId" required>
                    </div>
                    <div class="input-field">
                        <label>Full Name</label>
                        <input type="text" placeholder="Enter your name" name="EmployeeName" required>
                    </div>

                    <div class="input-field">
                        <label>Date of Birth</label>
                        <input type="date" placeholder="Enter birth date" name="DateOfBirth" required>
                    </div>

                    <div class="input-field">
                        <label>Email</label>
                        <input type="text" placeholder="Enter your email" name="Email" required>
                    </div>

                    <div class="input-field">
                        <label>Mobile Number</label>
                        <input type="number" placeholder="Enter mobile number" name="PhoneNumber" required>
                    </div>
                </div>

                <div class="details address">
                    <span class="title">Address Details</span>

                    <div class="fields">
                        <div class="input-field">
                            <label>Street Address</label>
                            <input type="text" placeholder="Enter your street" name="Street" required>
                        </div>

                        <div class="input-field">
                            <label>City</label>
                            <input type="text" placeholder="Enter your city" name="City" required>
                        </div>

                        <div class="input-field">
                            <label>State</label>
                            <input type="text" placeholder="Enter your state" name="State" required>
                        </div>

                        <div class="input-field">
                            <label>Country</label>
                            <input type="text" placeholder="Enter your country" name="Country" required>
                        </div>

                        <div class="input-field">
                            <label>Pin Code</label>
                            <input type="number" placeholder="Enter pin code" name="Pincode" required>
                        </div>
                    </div>
                </div>
                <div class="buttons">
                    <button class="sumbit" name="submit">
                        <span class="btnText">Submit</span>
                        <i class="uil uil-navigator"></i>
                    </button>
                    <a href="../../../index.html" class="" id="">Back to Home</a>
                </div>
        </form>
    </div>

    <script src="script.js"></script>
</body>

</html>