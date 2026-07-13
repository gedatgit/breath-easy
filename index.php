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
            <h2 class="daily-affirmation-title">Affirmations to say Every day</h2>
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
        <section class="daily-tip">
            <h2>Tip of the day</h2>
            <p><?php echo htmlspecialchars($tip); ?></p>
        </section>
        <section class="site-guide">
            <h2>Getting Started</h2>
            <p>Mental health is very important and one of the ways to improve our mental health is to be more connected with yourself. Breath Easy gives you a few simple ways to check in with yourself each day. A daily check-in helps you notice patterns in how you're feeling. Journaling gives those feelings somewhere to go. Guided breathing gives your body a moment to settle.</p>

            <div class="guide-links">
                <a href="/checkin.php" class="guide-link">
                    <h3>Check In</h3>
                    <p>Log your mood and write a quick journal entry.</p>
                </a>
                <a href="/breath.php" class="guide-link">
                    <h3>Breathe</h3>
                    <p>Follow a guided breathing exercise to help you relax.</p>
                </a>
                <a href="/resources.php" class="guide-link">
                    <h3>Resources</h3>
                    <p>Explore tools, guides, and support if you need more.</p>
                </a>
            </div>
        </section>        

    </main>
    <?php   include 'html/footer.html'?>
</body>
</html>