<?php
require("utils/connexion.php");

$req = $db->query('SELECT * FROM messages');
$req->execute();
$messages = $req->fetchAll();

foreach($messages as $message){
    $req = $db->prepare('SELECT * FROM users WHERE id_users = :id_users');
    $req->execute([
       ':id_users' => $message['id_users'],
    ]);
    $user = $req->fetch();
    
?>

<div class="message"><h4><?php echo htmlspecialchars($user['pseudo']); ?> : </h4>
<p class="date"><?php echo htmlspecialchars($message['created_at']); ?></p>
<p> <?php echo htmlspecialchars($message['message']); ?></p>
</message>



<?php } ?>

