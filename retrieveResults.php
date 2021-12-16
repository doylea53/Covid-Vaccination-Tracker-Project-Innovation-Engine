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
    <link rel='stylesheet' type='text/css' media='screen' href='retrieveResults.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='https://pro.fontawesome.com/releases/v5.12.0/css/all.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='https://cdn.jsdelivr.net/npm/hack-font@3/build/web/hack.css'>
   <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
   <script src="jquery.js"></script>
</head>
<body>

    <nav>
        <ul>
            <li><a href="input.html">Input Data</a></li>
            <li><a href="main.php">Main Page</a></li>
            <li><a href="retrieve.php">Retrieve Data</a></li>
            <li><a href="index.html">Log Out</a></li>
        </ul>
    </nav>
    <div id='retrieved'>
        <button type="button" id="submit" class="submit" onclick="update()">Update</button>
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
		<p>Total Doses: <?php echo $_SESSION['maxDose']; ?></p>
        <p>Primary Insurance Holder: <?php echo $_SESSION['pih']; ?></p>
        <p>Insurer: <?php echo $_SESSION['insurer']; ?></p>
        <p>ID Number: <?php echo $_SESSION['pid']; ?></p>
        <p>Vaccination Date: <?php echo $_SESSION['vacDate']; ?></p>
        <p>Injected Arm: <?php echo $_SESSION['arm']; ?></p>
        <p>Denied Vaccine?: <?php echo $_SESSION['denied']; ?></p>
        <p>Side Effects?: <?php echo $_SESSION['notes']; ?></p>


    </div>
    <script>
        function update() {
            window.location.href="update.php";
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
            return false;
        
            
        }
    </script>
</body>
</html>
