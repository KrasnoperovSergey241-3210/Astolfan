<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lecture 2</title>
    <link rel='stylesheet' href="style.css">
</head>
<body>
    <section>
    <h1>Welcome to Time & Date!</h1>
    <ul>
        <li class='inline-block'>
            <p class='bold-style'>
                Present year:
            </p>
            <p>
                <?php echo date("Y"); ?>
            </p>
        </li>
        <li class='inline-block'>
            <p class='bold-style'>
                Present month:
            </p>
            <p>
                <?php echo date("F"); ?>
            </p>
        </li>
        <li class='inline-block'>
            <p class='bold-style'>
                Present date:
            </p>
            <p>
                <?php echo date("jS"); ?>
            </p>
        </li>
        <li class='inline-block'>
            <p class='bold-style'>
                Day of the week:
            </p>
            <p>
                <?php echo date("l"); ?>
            </p>
        </li>
        <li class='inline-block'>
            <p class='bold-style'>
                Current time:
            </p>
            <p>
                <?php echo date("h:i:s"); ?>
            </p>
        </li>
    </ul>
</section>
</body>
</html>