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
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <?php   include 'html/header.html'?>
        <section class="affirmation-carousel">
            <h2 class="daily-affirmation-title">Daily Affirmation</h2>
            <div class="carousel">
                <input type="radio" name="affirmation" id="af-1">
                <input type="radio" name="affirmation" id="af-2">
                <input type="radio" name="affirmation" id="af-3">
                <input type="radio" name="affirmation" id="af-4">
                <input type="radio" name="affirmation" id="af-5" checked>
                <input type="radio" name="affirmation" id="af-6">
                <input type="radio" name="affirmation" id="af-7">
                <input type="radio" name="affirmation" id="af-8">
                <input type="radio" name="affirmation" id="af-9">

                
                <div class="slides-window">
                    <div class="slides-track">
                        <p class="slide">I am capable of handling any challenges that come my way.</p>
                        <p class="slide">I love and accept myself exactly as I am.</p>
                        <p class="slide">Today is filled with endless possibilities and opportunities.</p>
                        <p class="slide">I am in control of my own thoughts, feelings, and actions.</p>
                        <p class="slide">I choose to let go of fear and embrace confidence.</p>
                        <p class="slide">My potential is limitless, and I am growing every day.</p>
                        <p class="slide">I am deserving of love, joy, and success.</p>
                        <p class="slide">I am grateful for all the good things in my life.</p>
                        <p class="slide">I trust myself to make the best decisions for my future.</p>

                    </div>

                </div>
                <div class="carousel-nav">
                    <label for="af-1" aria-label="Affirmation 1"></label>
                    <label for="af-2" aria-label="Affirmation 2"></label>
                    <label for="af-3" aria-label="Affirmation 3"></label>
                    <label for="af-4" aria-label="Affirmation 4"></label>
                    <label for="af-5" aria-label="Affirmation 5"></label>
                    <label for="af-6" aria-label="Affirmation 6"></label>
                    <label for="af-7" aria-label="Affirmation 7"></label>
                    <label for="af-8" aria-label="Affirmation 8"></label>
                    <label for="af-9" aria-label="Affirmation 9"></label>
                </div>
            </div>

        </section>
    <main>
        <!-- <h1>This is Breath Easy</h1> -->
 
        <p>Take a moment and check in with how you are at the moment</p>
        <section class="daily-tip">
            <h2>Tip of the day</h2>
            <p><?php echo htmlspecialchars($tip); ?></p>
        </section>

    </main>
    <?php   include 'html/footer.html'?>
</body>
</html>