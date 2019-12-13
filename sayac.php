    <?php
    $myFile = "say.txt";
    $fh = fopen($myFile, 'r');
    $theData = fread($fh, filesize($myFile));
    fclose($fh);

    $theData = $theData + 1;

    $myFile = "say.txt";
    $fh = fopen($myFile, 'w') or die("can't open file");
    fwrite($fh, $theData);
    fclose($fh);

    header("https://drive.google.com/uc?export=download&confirm=V48W&id=1ZLlyGUG9aznopQPWHHcpf19hK3KSaQkL");
    ?>
