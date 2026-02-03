<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Circle Radius Lab</title>
</head>
<body style="background: #fdfdfd; font-family: 'Segoe UI', sans-serif; display: flex; justify-content: center; align-items: center; min-height: 100vh; margin: 0;">

    <main style="background: white; padding: 40px; border-radius: 20px; box-shadow: 0 10px 30px rgba(0,0,0,0.05); text-align: center; border: 1px solid #eee; width: 350px;">
        <h2 style="color: #222;">Circle Calculator</h2>
        
        <form method="POST">
            <p style="font-size: 0.9em; color: #666;">Enter Area to Compute Radius:</p>
            <input type="number" name="area_input" step="any" required 
                   style="width: 80%; padding: 10px; border: 1px solid #ddd; border-radius: 8px;">
            <br><br>
            <button type="submit" name="calculate" 
                    style="background: #3498db; color: white; border: none; padding: 10px 25px; border-radius: 8px; cursor: pointer; font-weight: bold;">
                Calculate
            </button>
        </form>

        <?php
        if (isset($_POST['calculate'])) {
            define("PI_CONST", pi());
            $areaValue = (float)$_POST['area_input'];
            $calculatedRadius = sqrt($areaValue / PI_CONST);
            $roundedResult = round($calculatedRadius, 2);
            
            echo "<section style='margin-top: 30px; border-top: 1px solid #eee; padding-top: 20px;'>";
            echo '<svg width="150" height="150" viewBox="0 0 100 100">
                    <circle cx="50" cy="50" r="40" fill="#e1f5fe" stroke="#0288d1" stroke-width="2" />
                    <line x1="50" y1="50" x2="90" y2="50" stroke="#d32f2f" stroke-width="2" stroke-linecap="round" />
                    <circle cx="50" cy="50" r="2" fill="#222" />
                    <text x="60" y="45" fill="#d32f2f" font-size="8" font-weight="bold">r = ' . $roundedResult . '</text>
                  </svg>';

            echo "<p>Area: <strong>$areaValue</strong></p>";
            echo "<p style='color: #0288d1;'>Computed Radius: <strong>$roundedResult</strong></p>";
            echo "</section>";
        }
        ?>
    </main>

</body>
</html>