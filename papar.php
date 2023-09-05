<!DOCTYPE html>
<html>
<head>
    <title>Paparan</title>
</head>
<body>
    <?php
        if (isset($_POST['message'])) 
        {
            $input_string = $_POST['message'];

            $sentences = preg_split('/[.!?]|( )+/', $input_string, -1, PREG_SPLIT_NO_EMPTY);
            $sentence_count = count($sentences);
            echo "<p>Ayat ini mengandungi $sentence_count perkataan</p>";

            $letter_count = strlen(preg_replace('/[^a-zA-Z]/', '', $input_string));
            echo "<p>Ayat ini mengandungi $letter_count huruf</p>";

            $reversed_string = strrev($input_string);
            echo "<p>Ayat terbalik: $reversed_string</p>";
        } 
        else 
        {
            echo "<p>Tiada input</p>";
        }
    ?>

</body>
</html>