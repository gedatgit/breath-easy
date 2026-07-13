<?php
session_start();
// a statements that guards against someone trying to reach this pae without checking in 
if (empty($_SESSION["moods"]) || empty($_SESSION["journal"])){
    header("Location: checkin.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirm</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!-- include header  -->
     <?php include "html/header.html" ; ?>
     <main>
        <h1>Good Job with taking a moment to check in</h1>
        <section class="checkin-summary">
            <p class="checkin-time">
                <?php echo htmlspecialchars($_SESSION["checkin_time"]); ?>
            </p>
            <h2>Your Mood</h2>
            <ul class="mood-tags">
                <?php   foreach($_SESSION["moods"] as $mood): ?>
                    <li class="mood-tag">
                        <?php echo htmlspecialchars($mood); ?>
                    </li>
                <?php endforeach; ?>
            </ul>
            <h2>Your Journal Entry</h2>
            <p class="journal-entry">
                <!-- add new line breaks and using nlbr  -->
                <?php echo nl2br(htmlspecialchars($_SESSION["journal"])); ?>
            </p>
        </section>
     </main>
     <?php include "html/footer.html"; ?>
</body>
</html>