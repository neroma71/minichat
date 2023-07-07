<?php
// setcookie('pseudo', $_POST['pseudo'], time() + 60 * 60 * 24);


    if(!empty($_POST['pseudo']) && !empty($_POST['message'])){

      // $pseudo = $_POST['pseudo'];
      // $message = $_POST['message'];

      require("../utils/connexion.php");

      $req=$db->prepare('SELECT * FROM users WHERE pseudo = :pseudo');
         
      $req->execute([
          'pseudo'=>$_POST['pseudo']
         ]);
      $user = $req->fetch();
      


        if($user){
         
          $id_users = $user['id_users'];

        }else{

        $req = $db->prepare('INSERT INTO users(pseudo) VALUE(:pseudo)');
        $req->execute([
          'pseudo'=>$_POST['pseudo']
        ]);
        $id_users = $db->lastInsertId();

        }
        
        $req = $db->prepare('INSERT INTO messages(message,id_users ,created_at) VALUE(?, ?,  NOW())');
        $req->execute(array($_POST['message'], $id_users));
       
    }
    header("location: ../index.php");

 if(isset($_POST['clear'])){
  require("../utils/connexion.php");

  $req = $db->prepare("DELETE FROM messages");
  $req->execute();

  $req = $db->prepare("DELETE FROM users");
  $req->execute();
}
header("location: ../index.php");

?>