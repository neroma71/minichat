<?php
require("utils/connexion.php");
 $req = $db->query('SELECT * FROM users');
 $pseudos = $req->fetchAll();
 foreach($pseudos as $pseudo):
 ?>
    <p><?php echo $pseudo['pseudo']; ?></p>
<?php endforeach;?>