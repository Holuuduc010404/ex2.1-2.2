<?php
if(!isset($investment)){ $investment = ''; }
if(!isset($interest_rate)){ $interest_rate = ''; }
if(!isset($years)){ $years = ''; }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="main.css">
    <title>Document</title>
</head>
<body>
    <main>
        <h1>Future Value Calculator</h1>
        <?php if (!empty($error_message)){ ?>
        <p class="error"><?php echo htmlspecialchars($error_message); ?></p><?php } ?>
        <form action="display_results.php" method="post">
            <div id="data">
                <label for="">Investment Amount:</label>
                <input type="text" name="investment" value="<?php echo htmlspecialchars($investment); ?>">
                <br>
                <label for="">Yearly Interest Rate:</label>
                <input type="text" name="interest_rate" value="<?php echo htmlspecialchars($interest_rate); ?>">
                <br>
                <label for="">Number of years:</label>
                <input type="text" name="years" value="<?php echo htmlspecialchars($years); ?>">
                <br>
            </div>
            <div id="button">
                <label for="">&nbsp;</label>
                <input type="submit" value="Calculate"><br>
            </div>
        </form>
    </main>
</body>
</html>