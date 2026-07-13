<?php
session_start();
$moods = ['Ecstatic', 'Excited', 'Happy', 'Cheerful','Serene','Relaxed', 'Content','Peaceful' ,'Fearful', 'Angry','Anxious','Frustrated', 'Bored', 'Apathetic', 'Melancholy', 'Discouraged'];
$errors = [];
if ($_SERVER['REQUEST_METHOD']=== "POST"){
    if (empty($_POST['moods'])){
        $errors[] = "Please identify at least one mood";
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
    <link rel="stylesheet" href="css/style.css">
    <title>Check In | Breath Easy</title>
</head>
<body>
    <?php   include 'html/header.html'?>
    <main>
        <h1>Your Daily Check-in</h1>
        <p>Select how you are feeling and write a journal</p>
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
            
                
            <div class="mood-circle-wrap">    
                <!-- go in a loop through each mood and provide a chekin html structure -->
                <?php
                $total = count($moods);
                foreach ($moods as $i => $mood):    
                    $angle = ($i/ $total) *360;
                ?>
                    <label class="mood-option" style="--angle: <?php echo $angle;?>deg;">
                        <!-- multiple checkboxes share this name so use [] to collect all checked boxes into an array -->
                        <input type="checkbox" name="moods[]" 
                        value="<?php echo htmlspecialchars($mood); ?>">
                        <?php   echo htmlspecialchars($mood); ?>
                    </label>
                <?php endforeach; ?>

                <div class="journal-center">
                    <label for="journal"></label>
                    <textarea name="journal" id="journal" rows="10" placeholder="JOURNAL                       📝                      Write a little about how you are feeling              🖊                           ⌨" required ></textarea>  
                      
                </div>
                
                

            </div>
            <button class="checkin-submit" type="submit">Submit</button>
                    <!-- create a text area to write in a journal  -->
            
        </form>
    </main>
    <?php   include 'html/footer.html';?>
</body>

</html>