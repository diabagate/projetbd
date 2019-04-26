<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Construction</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="css/style.css" rel="stylesheet">
</head>
<body>

<form method="POST" action="traitement/tr_inscription.php">

  <div class="container contact" id="cont">
  <div class="row">
    <div class="col-md-3">
      <div class="contact-info">
        
        <h2>Nouveau Projet</h2>
        <h4>inscrivez-vous pour la réalisation <br>de votre projet</h4>
      </div>
    </div>
    <div class="col-md-9">
      <div class="contact-form">
        <div class="form-group">
          <label class="control-label col-sm-2" for="name">Nom:</label>
          <div class="col-sm-10">          
          <input type="text" class="form-control" id="fname" placeholder="Entrer votre nom" name="nom">
          </div>
        </div>
       
        <div class="form-group">
          <label class="control-label col-sm-2" for="email">E-mail:</label>
          <div class="col-sm-10">          
          <input type="text" class="form-control" id="lname" placeholder="Entrer votre E-mail" name="email">
          </div>
        </div>


<div class="form-group">
          <label class="control-label col-sm-2" for="lname">Localité:</label>
          <div class="col-sm-10">          
          <input type="text" class="form-control" id="lname" placeholder="Entrer votre code hopital" name="localite">
          </div>
        </div>

    <div class="form-group">
          <select name="choix">  
            <option value="" disabled>votre choix</option>
            <option value="construction">construction</option>
            <option value="traveaux public">traveaux public</option>
            <option value="rénovation">rénovation</option>
            <option value="design interieur">design interieur</option>

          </select>
        </div>
          <div class="form-group shadow-textarea">
          <label class="control-label col-sm-2" for="lname">message:</label>
          <textarea class="form-control z-depth-1" id="exampleFormControlTextarea6" rows="3" placeholder="votre message" name="message"></textarea>
          <div class="col-sm-10">         
          </div>
        </div>

       <div class="form-group">
          <label class="control-label col-sm-2" for="lname">Mot de passe:</label>
          <div class="col-sm-10">          
          <input type="password" class="form-control" id="lname" placeholder="Entrer un mot de passe" name="password">
          </div>
        </div>

     
        <div class="form-group">        
          <div class="col-sm-offset-2 col-sm-10">
          <button type="submit" class="btn btn-default">Enregistrer</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

</form>




<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
</body>
</html>