<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $paragraph="Can't wait to start backend";
    //WORD PASSED
    $word= $_GET['word'];
    // NEW WORD VARIABLE WILL RAPLACE WORD(the string we change,with what, name of new change)
    $newWord = str_replace($word, "***", "newWord")
    ?>
    
    <!--PARAGRAPH-->
    <h1>Finally here</h1>
    <?php echo $paragraph?>
     
    <br/>
    <!--PARAGRAPH LENGHT-->
    <?php echo strlen($paragraph)?>
    
    <br/>
    <!--PRINT WORD PASSED-->
    <?php echo $word?>
    
    <br/>
    <!--PRINT SUBSTITUTE WORD-->
    <?php echo $newWord?>
    
    <br/>
    <!--PRINT SUBSTITUTE WORD LENGHT-->
    <?php echo strlen($newWord)?>


</body>
</html>