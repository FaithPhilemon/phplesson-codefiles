<?php 
    //TASK: Create a dropdown-box to display list of years from 1923 - 2023
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dropdown box</title>
</head>
<body>
    <form action="">
        <label>Years:</label>
        <select>
            <option value="">Select year</option>
            <?php 
                for($year = 1923; $year <= 2023; $year++){
                    echo "<option>$year</option>";
                }
            ?>
        </select>
    </form>
</body>
</html>