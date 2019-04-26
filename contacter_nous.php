<!DOCTYPE html>
<html lang="en">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Construction</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="css/mdb.min.css" rel="stylesheet">
 
</head>
<body>
<html lang="en" class="full-height">
<!--Main Navigation-->
<header>
  <html lang="en">
    <body>
 <div class="container">
 <!---heading---->
     <header class="heading">contactez-nous</header><hr></hr>
  <!---Form starting---->
  <form action="traitement/contact.php" method="POST">
     <div class="row ">
   <!--- For Name---->
         <div class="col-sm-12">
             <div class="row">
           <div class="col-xs-4"><br>
                     <label class="firstname">Nom :</label> </div>
             <div class="col-xs-8">
                 <input type="text" name="nom" placeholder="Enter votre nom" class="form-control ">
             </div>
          </div>
     </div>
     
         <div class="col-sm-12">
         <div class="row">
           <div class="col-xs-4"><br>
                     <label class="lastname">Email :</label></div>
        <div class ="col-xs-8">  
                 <input type="email" name="email" placeholder="Enter votre mail" class="form-control last">
                </div>
         </div>
     </div>
     <!-----For email---->
     <div class="col-sm-12">
         <div class="row">
          <div class="col-xs-4">
                 <label class="mail" >Message :</label></div>
           <div class="col-xs-8"  >  
                <input type="text" name="message"  placeholder="Enter votre message" class="form-control" >
             </div>
         </div>
     </div>
  
         
      </div>
      <div class="col-sm-12">
             <button class="btn btn-success" type="submit" value="envoyer">ennvoyer</button>
       </div>
     <!-----------For Phone number-------->
        
         
     </div>
   </div>  



  </form> 
     
</div>


<style type="text/css">
  

/*-----Background-----*/

body{
   background-image:url(image/im.10.jpg);
   background-repeat:no-repeat;
   background-size:cover;
   width:100%;
   height:100vh;
   overflow:auto;
   
}

/*-----for border----*/
.container{
  font-family:Roboto,sans-serif;
    background-color: white ;
    
     border-style: 1px solid grey;
     margin: 0 auto;
     text-align: center;
     opacity: 0.8;
     margin-top: 67px;
   box-shadow: 2px 5px 5px 0px #eee;
     max-width: 500px;
     padding-top: 10px;
     height: 363px;
     margin-top: 166px;
}
/*--- for label of first and last name---*/
.lastname{
   margin-left: 1px;
     font-family: sans-serif;
     font-size: 14px;
     color: white;
     margin-top: 10px;
}
.firstname{
   margin-left: 1px;
     font-family: sans-serif;
     font-size: 14px;
     color: white;
     margin-top: 5px;
}
#lname{
   margin-top:5px;
}
    

/*---for heading-----*/
.heading{
   text-decoration:bold;
   text-align : center;
   font-size:30px;
   color:#F96;
   padding-top:10px;
}
/*-------for email----------*/
  /*------label----*/
#email{
    margin-top: 5px;
}
/*-----------for Password--------*/
     /*-------label-----*/
.mail{
   margin-left: 44px;
     font-family: sans-serif;
     color: white;
     font-size: 14px;
     margin-top: 13px;
}
.pass{
   color: white;
     margin-top: 9px;
     font-size: 14px;
     font-family: sans-serif;
     margin-left: 6px;
     margin-top: 9px;
}
#password{
 margin-top: 6px;
}
/*------------for phone Number--------*/
      /*----------label--------*/
.pno{
   font-size: 18px;
     margin-left: -13px;
     margin-top: 10px;
     color: #ff9;
  
} 

/*--------------for Gender---------------*/
     /*--------------label---------*/
.gender {
   color: white;
     font-family: sans-serif;
     font-size: 14px;
     margin-left: 28px;
     margin-top: 8px;
}

     /*---------- for Input type--------*/
.col-xs-4.male{
   color: white;
     font-size: 13px;
     margin-top: 9px;
     padding-bottom: 16px;
}
.col-xs-4.female {
     color: white;
     font-size: 13px;
     margin-top: 9px;
     padding-bottom: 16px;
   padding-right: 95px;
} 
/*------------For submit button---------*/
.sbutton{
   color: white;
     font-size: 20px;
     border: 1px solid white;
     background-color: #080808;
     width: 32%;
     margin-left: 41%;
     margin-top: 16px;
   box-shadow: 0px 2px 2px 0px white;
       
   }
.btn.btn-warning:hover {
    box-shadow: 2px 1px 2px 3px #99ccff;
  background:#5900a6;
  color:#fff;
  transition: background-color 1.15s ease-in-out,border-color 1.15s ease-in-out,box-shadow 1.15s ease-in-out;
  
}  
    

</style>








    </body>
</html>
</header>
  <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <script type="text/javascript" src="js/script.js"></script>
</body>

</html>