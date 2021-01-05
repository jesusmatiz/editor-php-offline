<?php

    $filename = $_POST["filename"];

    $fp = fopen($filename, "w+b") or die("Unable to open file!");   

    $textDefault = `<?php`;

    fwrite($fp, $textDefault);

    $editorCode = $_POST['input'];

    fwrite($fp, $editorCode);
    fclose($fp);