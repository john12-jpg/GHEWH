<!DOCTYPE html>
<html>
<head>
    <title>Word & Char Counter</title>
    <style>
        body { display: flex; 
               justify-content: center; 
               align-items: center; height: 100vh; 
               font-family: sans-serif; 
               background: #f4f4f4; 
            }
        .box { background: white; 
               padding: 20px; 
               border-radius: 10px; 
               box-shadow: 0 4px 10px rgba(0,0,0,0.1); 
               text-align: center; 
            }
        textarea { width: 350px; 
                   height: 150px; 
                   margin-bottom: 10px; 
                }
    </style>
</head>
<body>

<div class="box">
    <h2>Text Analyzer</h2>
    <p>Enter your text below to count words and characters:</p>
    <form method="POST">
        <textarea name="text"><?php if(isset($_POST['count'])) echo htmlspecialchars($_POST['text']); ?></textarea>
        <br>
        <button type="submit" name="count">Count</button>
        <button type="submit" name="clear">Clear</button>
    </form>

    <?php
    if (isset($_POST['count']) && !empty($_POST['text'])) {
        $input = $_POST['text'];
        $words = str_word_count($input);
        $chars = strlen($input);

        echo "<p>Words: <b>$words</b> | Characters: <b>$chars</b></p>";
    }
    ?>
</div>

</body>
</html>