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
        "type" => "Guide",
        "title" => "Psych Central",
        "description" => "Psych Central has blogs with practice mental health applications that are searchable by disorder. These blogs provide education for living with the disorder, helpful stories, and resources to find support. ",
        "url" => "https://www.psychcentral.com/"
    ],
    [
        "type" => "Guide",
        "title" => "HelpGuide",
        "description" => "HelpGuide is a nonprofit organization dedicated to helping the public find information regarding mental health and resources.",
        "url" => "https://www.helpguide.org/"
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resources</title>
    <link rel="stylesheet" href="/css/style.css">
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
                    <a href="<?php echo htmlspecialchars($resource["url"]); ?>" target="_blank" rel="noopener noreferrer">Visit Website</a>
                </article>
            <?php endforeach; ?>

        </div>
    </main>
    <?php include "html/footer.html" ; ?>
    
</body>
</html>