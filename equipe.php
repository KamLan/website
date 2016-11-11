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
    <script src="js/es6-promise.auto.min.js"></script>
    <script src="js/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="css/sweetalert2.min.css">
  </head>

  <body>

    <!-- Header -->

    <header>
      <div class="jumbotron topband">
        <div class="container">
          <div class="row">
            <div class="col-sm-8">
              <h2>
                <strong>
                  Cabinet de gynecologie, obstétrique et échographie
                </strong>
              </h2>
              <h3>
                Dr Gérard <strong>BARRAL</strong>, Dr Franck <strong>JACQUOT</strong>, Dr Irina <strong>HERGHEA</strong>, <br> Marlène <strong>BARRAL</strong> Sage-femme
              </h3>
            </div>
            <div class="col-sm-4">
              <h3>
                12 chemin de la croix Pivort, 69110, br <strong>Sainte-Foy-Lès-Lyon</strong>
              </h3>
              <h3>
                <strong>Tel:</strong> 04.78.59.80.51
              </h3>
            </div>
          </div>
        </div>
      </div>

      <!-- responsive navbar -->

      <nav class="navbar navbar-inverse">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">
              <i class="fa fa-medkit fa-lg" aria-hidden="true"></i>
            </a>
          </div>
          <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
              <li class=""><a href="index.php">Accueil</a></li>
              <li class=""><a href="contact.php">Contact</a></li>
              <li class=""><a href="cabinet.php">Cabinet</a></li>
              <li class="active"><a href="equipe.php">Equipe médicale</a></li>
              <li class=""><a href="information.php">Informations</a></li>
            </ul>

          </div>
        </div>
      </nav>
    </header>

    <!-- Equipe medicale block -->

    <div class="container">
      <h3><strong><img src="img/team.png" alt="" />EQUIPE MEDICALE</strong></h3><br>
      <div class="row">
        <div class="col-sm-6">
          <a href="" onclick="Display(0); return false;">
            <p><strong>Docteur Gérard BARRAL</strong></p>
            <img src="img/person.jpg" class="img-responsive" style="width:100%" alt="Image">
          </a>
        </div>

        <div class="col-sm-6">
          <a href="" onclick="Display(1); return false;">
            <p>Docteur Franck JACQUOT</p>
            <img src="img/person.jpg" class="img-responsive" style="width:100%" alt="Image">
          </a>
        </div>

        <div class="col-sm-6">
          <a href="" onclick="Display(2); return false;">
            <p>Docteur Irina HERGHEA</p>

            <img src="img/person.jpg" class="img-responsive" style="width:100%" alt="Image">
          </a>
            <div class="ContenuCache" style="display:none;" id="3">

            </div>
        </div>
        <div class="col-sm-6">
          <a href="" onclick="Display(3); return false;">
            <p>Marlène BARRAL</p>
            <img src="img/person.jpg" class="img-responsive" style="width:100%" alt="Image">
          </a>
        </div>
      </div>
    </div><br>

    <script language="javascript" type="text/javascript">
      function Display(x) {
        switch (x) {
          case 0:
            swal({
              title: 'Dr Gérard BARRAL',
              html:
                "<h2>Diplômes</h2> "+
                  "Inscrit au Tableau du Conseil Départemental de l'Ordre des Médecins du Rhône n'... depuis .... <br>"+
                  "Diplômé de la Faculté de Médecine de Lyon. <br>"+
                  "Docteur en Médecine. <br>"+
                  "Ancien interne des HRS de Lyon. <br>"+
                  "Ancien Praticien Hospitalier à temps partiel. <br>"+
                  "CES d'obstétrique et de gynécologie médicale. <br>"+
                  "CES de biologie de la reproduction. <br>"+
                  "DIU d'échographie générale. <br>"+
                  "DIU de médecine foetale. <br>"+
                  "DIU de colposcopie et pathologie cervico-vaginale. <br>"+
                  "Praticien attaché à l'Hôpital de Sainte-Foy-Lès-Lyon. <br>"+
                  "Membre du CFEF section dépistage <br>"+
                  "Agrément Réseau Périnatal AURORE n' <br>"+
                "<h2>Activité</h2> "+
                  "<strong>Obstétrique:</strong> suivi de grossesse avec actes : Césarienne prophylactique, curetage, cerclage, PLA.... faits sur le plateau technique de l'Hôpital de "+
                  '<a href="//hopital-ste-foy.fr/pole-naissance/index.html#3,0">Sainte-Foy-Lès-Lyon.</a> <br>'+
                  "<strong>Gynécologie médicale :</strong> <br>"+
                  "<strong>Echographie obstétricale et gynécologique</strong>"+
                "<h2>Honoraires</h2>"+
                      "Médecin conventionné à honoraires libres secteur 2. <br>"+
                      "CS: <br>"+
                      "Echo 1er Trimestre <br>"+
                      "Echo 2ème Trimestre <br>"+
                      "Echo 3ème Trimestre <br>"+
                      "Echo Gynéco <br>"+
                      "Pose Stérilet <br>"+
                      "Colposcopie <br>"+
                      "Praticien adhérrent à une association de gestion agréée. <br>"+
                      "Moyens de paiement acceptés: Chèque, Carte Bancaire, Espèces.",
              width: 900,
              imageUrl: 'https://unsplash.it/400/200',
              imageWidth: 400,
              imageHeight: 200,
              animation: true,
              showCloseButton: true,
            })
            break;
          case 1:
            swal({
              title: 'Dr Franck JACQUOT',
              html:
                "<h2>Diplômes</h2> "+
                "Inscrit au Tableau du Conseil Départemental de l'Ordre des Médecins du Rhône n'10630 depuis 12/1991 <br>"+
                "Docteur en Médecine de la Faculté de Médecine de Lyon-Sud. <br>"+
                "Ancien interne des Hôpitaux de Lyon. <br>"+
                "Ancien assistant des Hôpitaux de Lyon. <br>"+
                "Chef de Clinique de la Faculté de Lyon. <br>"+
                "DES de Gynéco-obstétrique. <br>"+
                "DIU de Médecine Prénatale et Foetale. <br>"+
                "DIU de Sénologie. <br>"+
                "DIU d'Echographie Gyneco-obstétricale. <br>"+
                "DIU de Périnéologie. <br>"+
                "Praticien Hospitalier temps partiel depuis 1997. <br>"+
                "Chirurgien Gynécologique au CHU Lyon-Sud depuis Novembre 2009. <br>"+
                "<h2>Activité</h2> "+
                "<h3>Cabinet :</h3>"+
                    "Gynécologie chirurgicale <br>"+
                    "Urogynécologie <br>"+
                    "Sénologie <br>"+
                    "Echographie Gynécologique (2D et 3D) <br>"+
                    "Gynécologie Médicale <br>"+
                    "Suivi de grossesse <br>"+
                    "Echographie Obstétricale <br>"+
                "<h3>Centre Hospitalier Lyon-Sud</h3>"+
                    "Chirurgie Gynécologique <br>"+
                    "Chirurgie Mammaire <br>"+
                    "Chirurgie Périnéale <br>"+
                    "Consultation Spécialisée de: <br>"+
                     "- Statique Pelvienne <br>"+
                     "- Fuites Urinaires Féminines <br>"+
                     "- Pelvi Périnéologie <br>"+
                     "Bilan Uro-dynamique"+
                     "Echographie Pelvienne 3D et Ultrasonographique"+
                     "Laser vaginal et vulvaire <br>"+
              "<h2>Honoraires :</h2>"+
                  "Médecin conventionné à honoraires libres secteur 2. <br>"+
                  "CS: 60€<br>"+
                  "Echo 1er Trimestre 100€<br>"+
                  "Echo 2ème Trimestre 130€<br>"+
                  "Echo 3ème Trimestre 120€<br>"+
                  "Echo Pelvienne 70-80€ <br>"+
                  "Praticien adhérrent à une association de gestion agréée. <br>"+
                  "Moyens de paiement acceptés: Chèque, Carte Bancaire <br>",
              width: 900,
              imageUrl: 'https://unsplash.it/400/200',
              imageWidth: 400,
              imageHeight: 200,
              animation: true,
              showCloseButton: true,
            })
            break;
          case 2:
            swal({
              title: 'Dr Irina HERGHEA',
              html:
                "<h2>Diplômes</h2> "+

                "<h2>Activité</h2> ",

              width: 900,
              imageUrl: 'https://unsplash.it/400/200',
              imageWidth: 400,
              imageHeight: 200,
              animation: true,
              showCloseButton: true,
            })
            break;
          case 3:
            swal({
              title: 'Marlène BARRAL',
              html:
                "<h2>Diplômes</h2> "+
                "Inscrite au Tableau du Conseil Départemental de l'Ordre du Rhône n' <br> " +
                "Diplômée de la Faculté de Maïeutique de Lyon <br>" +
                "Sage Femme <br>" +
                "DIU de rééducation périnéale <br>" +
                "DIU de Sexologie en cours <br>" +
                "<h2>Activité</h2> "+
                "Suivi de la grossesse normale <br>" +
                "Suivi gynécologique de prévention et de contraception <br>" +
                "Entretien du quatrième mois de grossesse <br>" +
                "Rééducation périnéale <br>" +
                "Cours de préparation à l'accouchement (traditionnelle, sophrologie, yoga) <br>" +
                "Suivi à domicile de grossesses pathologiques sur prescription médicale <br>" +
                "Sortie précoce de maternité <br>" +
                "Suivi post-natal de la mère et l'enfant à domicile <br>" +
                "Dysfonction sexuelle <br>" +
                "Accès à la salle de préparation à l'accouchement du Centre Hospitalier de Sainte-Foy-Lès-Lyon <br>",
              width: 900,
              imageUrl: 'https://unsplash.it/400/200',
              imageWidth: 400,
              imageHeight: 200,
              animation: true,
              showCloseButton: true,
            })
            break;
          default:
            break;
        }
      }
    </script>

  </body>
</html>
