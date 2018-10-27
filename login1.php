<?php
require_once "pdo.php";

// p' OR '1' = '1

if ( isset($_POST['email']) && isset($_POST['password'])  ) {
    echo("<p>Handling POST data...</p>\n");
    $e = $_POST['email'];
    $p = $_POST['password'];

    $sql = "SELECT name FROM users
       WHERE email = '$e'
       AND password = '$p'";

    echo "<p>$sql</p>\n";

    $stmt = $pdo->query($sql);
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    var_dump($row);
    echo "-->\n";
    if ( $row === FALSE ) {
       echo "<h1>Login incorrect.</h1>\n";
    } else {
       echo "<p>Login success.</p>\n";
    }
}
?>
<p>Y NIKHITHA</p>
<p>Please Login</p>
<form method="post">
<p>Email:
<input type="text" size="40" name="email" pattern="[a-z][A-Z][0-9]"></p>
<p>Password:
<input type="text" size="40" name="password" pattern="[a-z][A-Z][0-9]"></p>
<p><input type="submit" value="Login"/>
<a href="<?php echo($_SERVER['PHP_SELF']);?>">Refresh</a></p>
</form>
<p>
Check out this
<a href="http://xkcd.com/327/" target="_blank">XKCD comic that is relevant</a>.
