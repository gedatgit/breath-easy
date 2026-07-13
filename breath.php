<?php 
$techniques = [
    [
        "id" => "box",
        "title" => "Box Breathing (Square Breathing)",
        "best_for" => "Focus, stress relief, and centering the mind.",
        "how" => "Inhale through your nose for a count of four. Hold for four seconds. Exhale slowly for four seconds. Hold empty for four seconds."
    ],
    [
        "id" => "pursed",
        "title" => "Pursed Lip Breathing",
        "best_for" => "Relieving shortness of breath.",
        "how" => "Inhale slowly through your nose for two seconds. Purse your lips and exhale slowly through your mouth for four seconds or more."                    
    ],
    [
        "id" => "478",
        "title" => "4-7-8 Breathing",
        "best_for" => "Reducing anxiety and falling asleep.",
        "how" => "Inhale slowly through your nose for four seconds. Hold your breath for seven seconds. Exhale completely through your mouth for eight seconds."
    ],
]; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Guided Breathing | Breath Easy</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php include "html/header.html"; ?>
    <main class="breath-page">
        <h1>Guided Breathing</h1>
        <p><strong>Pick one method and follow the panda.</strong></p>
        <div class="breathing-selector">
            <input type="radio" name="technique" id="tech-box" checked>
            <input type="radio" name="technique" id="tech-pursed">
            <input type="radio" name="technique" id="tech-478">

            <div class="technique-tabs">
                <label for="tech-box">Box Breathing</label>
                <label for="tech-pursed">Pursed Lip Breathing</label>
                <label for="tech-478">4-7-8 Breathing</label>
            </div>
            <div class="technique-descriptions">
                <?php   foreach($techniques as $tech): ?>
                    <div class="technique-desc" id="desc-<?php echo htmlspecialchars($tech['id']); ?>">
                        <p><strong>Best for: </strong><?php echo htmlspecialchars($tech['best_for']);?> </p>
                        <p><?php echo htmlspecialchars($tech['how']); ?></p>
                    </div>
                <?php endforeach; ?>
            </div>

            <div class="breathing-circle-wrap">
                
                <div class="breathing-circle">
                    
                    <div class="phase-labels box-labels">
                        <span class="phase-text" id="lbl-box-inhale">Inhale</span>
                        <span class="phase-text" id="lbl-box-hold1">Hold</span>
                        <span class="phase-text" id="lbl-box-exhale">Exhale</span>
                        <span class="phase-text" id="lbl-box-hold2">Hold</span>
                    </div>
                    <div class="phase-labels pursed-labels">
                        <span class="phase-text" id="lbl-p-inhale">Inhale</span>
                        <span class="phase-text" id="lbl-p-exhale">Exhale</span>
                    </div>
                    <div class="phase-labels labels-478">
                        <span class="phase-text" id="lbl-478-inhale">Inhale</span>
                        <span class="phase-text" id="lbl-478-hold">Hold</span>
                        <span class="phase-text" id="lbl-478-exhale">Exhale</span>
                    </div>
                    <img src="assets/panda.png" class="breathing-backdrop" alt="">
                    
                </div>
                
            </div>
            



            
        </div>

    </main>
    <?php include "html/footer.html"?>
    
</body>
</html>