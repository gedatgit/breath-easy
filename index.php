<?php
$tips = [
    "Spend some time in nature today. Whether it’s taking a walk, smelling the flowers, or sitting by a tree, nature can make you feel calmer.",
    "Find some time to move your body today in whatever way feels right for you.",
    "Do your best to drink at least 64 ounces of water today to stay hydrated.",
    "Look for a community event to attend",
    "Make a list of your strengths! If this feels hard, try asking people close to you what they think your top 3 strengths are.",
    "Write a letter to yourself to celebrate all the actions you’ve taken this month to support mental health.",
    "Name one thing you're grateful for right now."

];
$tip = $tips[date('N') -1]
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Breath Easy</title>
    <link rel="stylesheet" href="/css/styles.css">
</head>
<body>
    <?php   include 'html/header.html'?>
    <main>
        <h1>This is Breath Easy</h1>
        <p>Take a moment and check in with how you are at the moment</p>
        <section class="daily-tip">
            <h2>Tip of the day</h2>
            <p><?php echo htmlspecialchars($tip); ?></p>
        </section>
    </main>
    <?php   include 'html/footer.html'?>
</body>
</html>