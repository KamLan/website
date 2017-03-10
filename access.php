<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cabinet de gynécologie</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/Mystyle.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <script src="js/parallax.js"></script>
  </head>

  <body>

    <!-- Header -->

    <header>
      <div class="jumbotron topband">
        <div class="">
          <div class="row" style="margin:0px;">
            <div class="col-sm-9">
              <h2>
                <strong>
                  Cabinet de gynécologie, obstétrique et échographie
                </strong>
              </h2>
              <h3>
                <span class="titredoc"><strong>D</strong>r Gérard <strong>BARRAL</strong>,</span>
                <span class="titredoc"><strong>D</strong>r Franck <strong>JACQUOT</strong>,</span>
                <span><strong>D</strong>r Irina <strong>HERGHEA</strong>,</span>
                <br> Marlène <strong>BARRAL</strong> Sage-femme
              </h3>
            </div>
            <div class="col-sm-3 blockadresse">
              <h3>
                12 chemin de la Croix Pivort,<br><strong>69110, Sainte-Foy-Lès-Lyon</strong>
              </h3>
              <h3>
                <strong>Tel:</strong> 04.78.59.82.51
              </h3>
            </div>
          </div>
        </div>
      </div>

      <!-- responsive navbar -->
      <section>
        <nav class="navbar navbar-inverse">
          <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="index.php">
                <i class="fa fa-medkit fa-lg" aria-hidden="true"></i>
              </a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
              <ul class="nav navbar-nav">
                <li class=""><a href="index.php">Accueil</a></li>
                <li class=""><a href="equipe.php">Equipe médicale</a></li>
                <li class=""><a href="cabinet.php">Cabinet</a></li>
                <li class=""><a href="contact.php">Contact</a></li>
                <li class="active"><a href="access.php">Accès</a></li>
                <li class=""><a href="information.php">Informations</a></li>
              </ul>
            </div>
          </div>
        </nav>
      </section>

    </header>
    <!-- Contact block -->

        <div class="container backback col-sm-12">
          <div class="row">
            <div class="col-sm-12">
            <div class="col-sm-12">
                <div class="panel-heading">
                  <h2 class="pagetitle"><strong> <strong><img src="img/maps-and-flags.png" alt="" /> ACC&Egrave;S :</strong></h2>
                </div>
                <div class="panel-body col-sm-6 col-xs-12">
                  <h3>Adresse</h3>
                  <p>
                    12 chemin de la Croix Pivort, 69110, Sainte-Foy-Lès-Lyon.
                  </p>
                  <p>
                    Cabinet au premier étage sans ascenseur.<br> Parking privatif à l'arrière du bâtiment (entrée devant la clinique vétérinaire).
                  </p>
                  <h3>Lignes de Bus</h3>
                  <p>
                    <img src="img\school-bus.png" alt="" /> Ligne C19 arrêt Sainte-Foy Centre<br>
                    <img src="img\school-bus.png" alt="" /> Ligne C17 arrêt sainte-Foy Centre
                  </p>
                </div>
                <div class="panel-body col-sm-6 col-xs-12">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2784.9509877228866!2d4.801712315573599!3d45.732077723549814!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f4ebdde053f789%3A0x249166d3c241cf69!2s12+Chemin+de+la+Croix+Pivort%2C+69110+Sainte-Foy-l%C3%A8s-Lyon!5e0!3m2!1sfr!2sfr!4v1477481884890" width="500" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
          </div>
        </div><br><br>
      </div>


      <?php
        include 'footer.php';
       ?>
