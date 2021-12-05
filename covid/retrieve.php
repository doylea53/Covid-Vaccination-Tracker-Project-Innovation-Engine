<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Retrieve</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='retrieve.css'>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>

    <nav>
        <ul>
            <li><a href="input.html">Input Data</a></li>
            <li><a href="main.php">Main Page</a></li>
            <li><a href="index.html">Log Out</a></li>
            <li><a href="test.html">test</a></li>
        </ul>
    </nav>

    <div id="patientInfo">
        <form id="patientInfoForm">
            <p>Please submit the patient's first and last name</p>
            <label for="fName">First Name:</label>
            <input type="text" id="fName" name="fName" required><br>
            <label for="lName">Last Name:</label>
            <input type="text" id="lName" name="lName" required><br>
            <button type="button" class="submit" onclick="confirm()">Submit</button>   
        </form>
    </div>
    
    <div id="retrieved">
        <button type="button" class="submit" onclick="update()">Update</button>
          <p>First Name: <?php echo $_SESSION['fName']; ?></p>
        <p>Middle Name: <?php echo $_SESSION['mName']; ?></p>
        <p>Last Name: <?php echo $_SESSION['lName']; ?></p>
        <p>Date of Birth: <?php echo $_SESSION['dob']; ?></p>
        <p>Gender: <?php echo $_SESSION['gender']; ?></p>
        <p>Race: <?php echo $_SESSION['race']; ?></p>
        <p>Ethnicity: <?php echo $_SESSION['ethnicity']; ?></p>
        <p>Street Name: <?php echo $_SESSION['street']; ?></p>
        <p>State: <?php echo $_SESSION['state']; ?></p>
        <p>Zipcode: <?php echo $_SESSION['zip']; ?></p>
        <p>Vaccine Manufacturer: <?php echo $_SESSION['vaccine']; ?></p>
        <p>Lot Number: <?php echo $_SESSION['lot']; ?></p>
        <p>Dose Number: <?php echo $_SESSION['doseNumber']; ?></p>
        <p>Primary Insurance Holder: <?php echo $_SESSION['pih']; ?></p>
        <p>Insurer: <?php echo $_SESSION['insurer']; ?></p>
        <p>ID Number: <?php echo $_SESSION['pid']; ?></p>
        <p>Date of First Vaccination: <?php echo $_SESSION['vDate1']; ?></p>
        <p>Date of Second Vaccination: <?php echo $_SESSION['vDate2']; ?></p>
        <p>Injected Arm: <?php echo $_SESSION['arm']; ?></p>
        <p>Denied Vaccine?: <?php echo $_SESSION['denied']; ?></p>
        <p>Side Effects?: <?php echo $_SESSION['notes']; ?></p>


    </div>
    <script>
        function update() {
            window.location.href="update.html";
        }


        function confirm() {
            if (document.getElementById("fName").value=="" || document.getElementById("lName").value=="") {
                document.getElementById("fName").style.backgroundColor="#FFCCCC";
                document.getElementById("lName").style.backgroundColor="#FFCCCC";
                alert("Invalid first and last name.");
            } else {
                document.getElementById("fName").style.backgroundColor="";
                document.getElementById("lName").style.backgroundColor="";

                $.post("grab.php", $('form').serialize(), function (data) {
                    document.getElementById("retrieved").style.visibility="visible";
                    });
            }
        
            
        }
    </script>
</body>
</html>