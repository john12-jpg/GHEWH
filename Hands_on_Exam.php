<!DOCTYPE html >
<html >
<head>
    <title>Hands on Exam</title>

    <style>
        .container {
            padding: 20px;
            border: 1px solid black;
            width: 350px;
            margin: auto;  
            margin-top: 50px;
        }
    </style>
</head>
<body>
    
    <?php
        echo "<h1 align='center'>Electrical Billing System</h1>";
    ?>

    <div class="container">
    <form method="post">
        Customer Name: <br>
        <input type="text" name="customerName"> <br><br>

        Monthly Consumption (kWh): <br>
        <input type="number" name="consumption"> <br><br>
        
        Rate per kWh: <br>
        <input type="number" name= "ratePerKwh"> <br><br>
        
        Senior Citizen:<br>
        <input type="checkbox" name="isSenior"> Yes<br><br>
        
        <input type="submit" name="submit" value="Compute Bill">
    </form>
    </div>

    <?php
        if (isset($_POST['submit'])) {
            $customerName = isset($_POST['customerName']) ? $_POST['customerName'] : "";
            $consumption = ($_POST['consumption']);
            $ratePerKwh = ($_POST['ratePerKwh']);
            $isSenior = isset($_POST['isSenior']);

            $totalBill = $consumption * $ratePerKwh;

            if ($consumption < 50) {
                $totalBill = $totalBill + 100;
            }

            $discountApplied = "No";

            if ($isSenior && $consumption >= 100) {
                $totalBill = $totalBill - ($totalBill * 0.30);
                $discountApplied = "Yes";
            }
            if ($isSenior && $consumption < 100) {
                $totalBill = $totalBill - ($totalBill * 0.20);
                $discountApplied = "Yes";
            }

            if ($totalBill >= 1500) {
                $usageStatus = "High Usage";
            } else {
                $usageStatus = "Normal Usage";
            }
            echo "<div class='container'>";
            echo "<h2 align='center'>Billing Summary</h2>";
            echo "Customer Name: $customerName <br>";
            echo "Monthly Consumption: $consumption kWh <br>";
            echo "Rate per kWh: $ratePerKwh <br>";
            echo "Total Bill Amount: ₱$totalBill <br>";
            echo "Discount Applied: $discountApplied <br>";
            echo "Usage Status: $usageStatus <br>";
            echo "</div>";
        }
    ?>
</body>
</html>