
<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Main page</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>

    <!-- HTML and Javascript code written by Dan Bartels -->
    <!--<?php echo $_SESSION['Username']; ?>-->
</head>
<body>

<nav>
        <ul>
            <li><a href="input.html">Input Data</a></li>
            <li><a href="retrieve.html">Retrieve Data</a></li>
            <li><a href="index.html">Log Out</a></li>
            <li><a href="test.html">test</a></li>
        </ul>
    </nav>

    <!-- Container for choosing if you want to input or retrieve data -->
    <div id="choiceDiv">
        <p>Welcome <?php echo $_SESSION['Username']; ?>! How may we help you today?</p>
        <button type="button" onclick="inputData()">Input patient data</button>
        <button type="button" onclick="retrieveData()">Retrieve patient data</button>
    </div>

    <!-- Container for a FAQ -->
    <div id="faqDiv">
        <p>COVID and HIPAA FAQ</p>
        <p>__________________________</p>
        <dl>
            <dt><span class="qFirstLetter">Q.</span>What is COVID?</dt>
                <dd><span class="aFirstLetter">A.</span>Covid (or SARS-CoV-2) is a virus that causes respiratory issues. While most people only get mild symptoms and recover quickly, people with compromised immune systems and the elderly can get severerly ill.</dd>
            <dt><span class="qFirstLetter">Q.</span>How does COVID spread?</dt>
                <dd><span class="aFirstLetter">A.</span>COVID is spread by having an infected droplet or particle come in contact with a person's eyes, nose, or mouth.</dd>
            <dt><span class="qFirstLetter">Q.</span>What kind of ingredients are included in the vaccines?</dt>
               <dd><span class="aFirstLetter">A.</span>While ingredients differ based on the vaccine, a common trend is that none of them contain eggs, gelatin, latex, preservatives, metals, and manufactured products such as microelectronics. The main active ingredient of the Moderna and Pfizer vaccine is a Nucleoside-modified mRNA encoding the viral spike (S) glycoprotein of SARS-CoV-2, while the main active ingredient in the Johnson and Johnson vaccine is a Recombinant, replication-incompetent Ad26 vector, encoding a stabilized variant of the SARS-CoV-2 Spike (S) protein.</dd>
            <dt><span class="qFirstLetter">Q.</span>What are the side effects of a COVID vaccine?</dt>
               <dd><span class="aFirstLetter">A.</span>The side effects vary, but generally a patient will have swelling, soreness, and redness at the site of injection, and will feel tiredness, headaches, muscle pain, chills, fever, and nausea.</dd>
            <dt><span class="qFirstLetter">Q.</span>What is HIPAA?</dt>
                <dd><span class="aFirstLetter">A.</span>HIPAA, also known as the Health Insurance Portability and Accountability Act, is a set of rules and regulations to protect sensitive medical information.</dd>
            <dt><span class="qFirstLetter">Q.</span>What are some ways to remain HIPAA compliant?</dt>
                <dd><span class="aFirstLetter">A.</span>Some ways to remain HIPAA compliant include password protecting your work computer, keeping files from work off your personal computer, and making sure your computer is up to date on security software.</dd>
        </dl>
    </div>

    <!-- Script currently sends you to the next webpage to carry out your request -->
    <script>
        function inputData() {
            window.location.href="input.html"
        }

        function retrieveData() {
            window.location.href="retrieve.html"
        }
    </script>
</body>
</html>