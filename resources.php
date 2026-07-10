<?php
$resources = [
    [
        "type" => "Crisis Line",
        "title" => "988 Suicide & Crisis Lifeline",
        "description" => "Free, confidential support available 24/7 for anyone in emotional distress.",
        "url" => "https://988lifeline.org"
    ],
    [
        "type" => "Crisis Line",
        "title" => "Crisis Text Line",
        "description" => "Text HOME to 741741 to connect with a crisis counselor anytime.",
        "url" => "https://www.crisistextline.org"
    ],
    [
        "type" => "Guide",
        "title" => "NAMI Mental Health Basics",
        "description" => "Clear, accessible information on mental health conditions and support options.",
        "url" => "https://www.nami.org"
    ],
    [
        "type" => "Guide",
        "title" => "Insight Timer",
        "description" => "A library of free guided meditations with tracks from psychologists, sprirtual leaders and mindfulness teachers",
        "url" => "https://www.insighttimer.com/"
    ],
    [
        "type" => "Podcast",
        "title" => "The Positive Psychology Podcast",
        "description" => "for nuggets of positivity and happiness psychology",
        "url" => "https://www.podcasts.apple.com/us/podcast/the-positive-psychology-podcast-bringing-the/id912190084"
    ],
    [
        "type" => "Podcast",
        "title" => "This Podcast is Self Care",
        "description" => "Learn About Self Care",
        "url" => "https://www.thispodcastisselfcare.libsyn.com/"
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resources</title>
    <link rel="stylesheet" href="/css/styles.css">
</head>
<body>
    <?php include "html/header.html" ; ?>
    <main>
        <h1>Resources</h1>
        <div class="resource-list">
            <?php foreach($resources as $resource): ?>
                <article class="resource-card">
                    <span class="rsource-type"><?php echo htmlspecialchars($resource["type"]); ?></span>
                    <h2><?php echo htmlspecialchars($resource["title"]); ?></h2>
                    <p><?php echo htmlspecialchars($resource["description"]); ?></p>
                    <a href="<?php htmlspecialchars($resource["url"]); ?>" target="_blank" rel="noopener noreferrer">Visit Website</a>
                </article>
            <?php endforeach; ?>

        </div>
    </main>
    <?php include "html/footer.html" ; ?>
    
</body>
</html>