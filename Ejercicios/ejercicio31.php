<?php
setcookie("check", 1, time() + 3600);

if (isset($_POST['submit']) && !isset($_COOKIE['voted'])) {
    setcookie("voted", 1, time() + 3600); 
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="ISO-8859-1">
    <title>Encuesta de Opinión</title>
</head>
<body>
    <h1>Encuesta</h1>
    <h3>¿Qué opinas de este curso de PHP?</h3>
    
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <input type="radio" name="reply" value="0" required> Excelente, he aprendido mucho.<br>
        <input type="radio" name="reply" value="1"> Más o menos, es muy complicado.<br>
        <input type="radio" name="reply" value="2"> ¡Bah! ¿Para qué quiero aprender PHP?<br><br>

        <?php
        if (!isset($_COOKIE['voted'])) {
        
            echo '<input name="submit" type="submit" value="¡Vota!">';
        } else {
            echo "<p>Gracias por tu voto.</p>\n";
        }
        ?>
    </form>

    <?php
    if (isset($_POST['submit']) && isset($_POST['reply']) && isset($_COOKIE['check']) && !isset($_COOKIE['voted'])) {
        $file = "results.txt";

        
        if (!file_exists($file)) {
            file_put_contents($file, "0,0,0"); 
        }

       
        $fp = fopen($file, "r+");

        if ($fp) {
            flock($fp, LOCK_EX); 

            $vote = fread($fp, filesize($file));
            $arr_vote = explode(",", $vote);

           
            $reply = intval($_POST['reply']);
            if ($reply >= 0 && $reply <= 2) {
                $arr_vote[$reply]++; 
            }

           
            rewind($fp);
            ftruncate($fp, 0);
            fwrite($fp, implode(",", $arr_vote));
            fflush($fp);
            flock($fp, LOCK_UN); 
            fclose($fp);
        }
    }
    ?>

    <p>[ <a href="results.php" target="_blank">Ver resultados de la encuesta</a> ]</p>
</body>
</html>

