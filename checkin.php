<?php
session_start();
$moods = ['Ecstatic', 'Excited', 'Happy', 'Cheerful','Serene','Relaxed', 'Content','Peaceful' ,'Fearful', 'Angry','Anxious','Frustrated', 'Discouraged', 'Melancholy', 'Bored', 'Apathetic'];
$errors = [];
if ($_SERVER['REQUEST_METHOD']=== "POST"){
    if (empty($_POST['moods'])){
        $errors[] = "please identify at least one mood";
    }
    if (empty(trim($_POST['journal'] ?? ''))){
        $errors[] = "Writting a little about how you are feeling is actually very helpfull";
    }
    if (empty($errors)){
        $_SESSION["moods"] = array_map('htmlspecialchars', $_POST['moods']);
        $_SESSION["journal"] = htmlspecialchars(trim($_POST['journal']));
        $_SESSION["checkin_time"] = date('F j, Y g:i A');
        header('Location: confirm.php');
        exit;
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check In | Breath Easy</title>
</head>
<body>
    <?php   include 'html/header.html'?>
    <main>
        <h1>Your Daily Check-in</h1>
        <?php if (!empty($errors)): ?>
            <div class="form-errors">
                <ul>
                    <?php foreach ($errors as $error): ?>
                        <li> <?php echo htmlspecialchars($error); ?></li>
                    <?php endforeach; ?>
                </ul>

            </div>
        <?php endif; ?>
        <!-- this is the form where the user inputs their daily feeling  -->
        <form action="checkin.php" method="POST">
            <fieldset>
                <legend>Which mood describes you best</legend>
                <!-- go in a loop through each mood and provide a chekin html structure -->
                <?php foreach ($moods as $mood):    ?>
                    <label class="mood-option">
                        <!-- multiple checkboxes share this name so use [] to collect all checked boxes into an array -->
                        <input type="checkbox" name="moods[]" 
                        value="<?php echo htmlspecialchars($mood); ?>">
                        <?php   echo htmlspecialchars($mood); ?>
                    </label>
                    <?php endforeach ?>
            </fieldset>
                    <!-- create a text area to write in a journal  -->
            <label for="journal">Describe how you are feeling</label>
            <textarea name="journal" id="journal" rows="10" ></textarea>
            <button type="submit">Check In</button>
        </form>
    </main>
    <?php   include 'html/footer.html'?>
</body>

</html>