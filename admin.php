<?php 
require('database.php');
 
   $db=Database::connect();
   $req=$db->prepare('SELECT  `nom`, `email`, `localite`, `choix`, `message`  FROM `bd_utilisateur` ');
   $req->execute( array( ));

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Construction</title>
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/mdb.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
</head>
<body>

   <nav class="navbar navbar-fixed-top" id="navbarfixe">
  <div class="container-fluid">
    
    <ul class="nav navbar-nav navbar-right" id="lien-inscription">
      <li><a href="deconnection.php" data-toggle="modal"><span class="glyphicon glyphicon-log-in"></span> Se déconnecter</a></li>
    </ul>
  </div>
</nav>

 
    <div class="alert alert-warning alert-dismissible" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    </div>

        <h1 class="text-logo" style="margin-top: 300px;"></span> Système d'administration <span class="glyphicon glyphicon-wrench"></h1>
        <div class="container admin">
            <div class="row">
                <table class="table table-striped table-bordered">
              
                  <thead>
                    <tr>
                      <th>Nom</th>
                      <th>email</th>
                      <th>localite</th>
                      <th>choix</th>
                      <th>message</th>
                      <th>action</th>
                    </tr>
                  </thead>
            <?php while ($item=$req->fetch() ) {
              # code...
             ?>
                  <tbody>
                
                      <tr>
                            <td><?php echo $item['nom']?></td>
                            <td><?php echo $item['email']?></td>
                            <td><?php echo $item['localite']?></td>
                            <td><?php echo $item['choix']?></td>
                            <td><?php echo $item['message']?></td>
                            
                                                        <td width=300>
                         
                            <a class="btn btn-primary" href="#"><span class="glyphicon glyphicon-pencil"></span> Modifier</a>
                        
                            <a class="btn btn-danger" href="supprime.php?id = <?php echo $item['id'] ?> "><span class="glyphicon glyphicon-remove"></span> Supprimer</a>
                            </td>
                     </tr>
                  
                  </tbody>
                 
                      <?php }?>
                 
                </table>
            </div>
        </div>

  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
</body>

</html>




 
