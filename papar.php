<!DOCTYPE html>
<html>
<head>
    <title>Cerita Saya</title>
</head>
<body>
    <?php

    $text=$_POST['message'];

    $wordcount=str_word_count($text);
    $alphabetcount=strlen($text);
    $reversed=strrev($text);
    ?>

    <p>Ayat ini mengandungi <?php echo $wordcount; ?> patah perkataan</p>
    <p>Ayat ini mengandungi <?php echo $alphabetcount; ?> huruf</p>
    <p>Ayat terbalik: <?php echo $reversed; ?></p>

</body>
</html>
