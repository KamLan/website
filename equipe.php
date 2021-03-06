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
    <link rel="stylesheet" href="css/sweetalert2.css">
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
                <li class="active"><a href="equipe.php">Equipe médicale</a></li>
                <li class=""><a href="cabinet.php">Cabinet</a></li>
                <li class=""><a href="contact.php">Contact</a></li>
                <li class=""><a href="access.php">Accès</a></li>
                <li class=""><a href="information.php">Informations</a></li>
              </ul>
            </div>
          </div>
        </nav>
      </section>

    </header>

    <!-- Equipe medicale block -->

    <div class="container equipe">
      <h2 class="pagetitle"><strong><img src="img/team.png" alt="" />&Eacute;QUIPE MEDICALE</strong></h2><br>
      <div class="row">
        <div class="col-sm-6">
          <a href="" onclick="Display(0); return false;">
            <p><strong>Docteur Gérard BARRAL</strong></p>
            <img src="img/GB.jpg" class="img-responsive" style="width:100%" alt="Image">
          </a>
        </div>

        <div class="col-sm-6">
          <a href="" onclick="Display(1); return false;">
            <p><strong>Docteur Franck JACQUOT</strong></p>
            <img src="img/FJ.jpg" class="img-responsive" style="width:100%" alt="Image">
          </a>
        </div>

        <div class="col-sm-6">
          <a href="" onclick="Display(2); return false;">
            <p><strong>Docteur Irina HERGHEA</strong></p>

            <img src="img/IH.jpg" class="img-responsive" style="width:100%" alt="Image">
          </a>
            <div class="ContenuCache" style="display:none;" id="3">

            </div>
        </div>
        <div class="col-sm-6">
          <a href="" onclick="Display(3); return false;">
            <p><strong>Marlène BARRAL Sage-femme</strong></p>
            <img src="img/MB.jpg" class="img-responsive" style="width:100%" alt="Image">
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
                "Gynécologue Obstétricien <br>"+
                "Inscrit au Tableau du Conseil Départemental de l'Ordre des Médecins du Rhône n'69/6573 depuis 1983 <br>"+
                "Membre du Collège Français d'Echographie Foetale section dépistage <br>"+
                "Adhérent au réseau périnatal Aurore <br>"+
                "Membre suppléant du Conseil Départemental de l'Ordre des Medecins du Rhône <br>"+
                "<h2>Activité</h2>"+
                  "Suivi de grossesse normale et pathologique <br>"+
                  "Gynécologie médicale et contraception <br>"+
                  "Echographie obstétricale avec agrément pour le depistage de la trisomie 21 <br>"+
                  "Echographie gynécologique <br>"+
                  "Colposcopie <br>"+
                  "Obstétrique sur le plateau technique du <a style='color: #E55C5C;' href='http://hopital-ste-foy.fr/pole-naissance/index.html'> CH de Sainte-Foy-Lès-Lyon :</a> césarienne programmée - cerclage - curetage - amniocentèse...<br>" +
                  ""+
                "<h2>Diplômes</h2>"+
                  "Diplômé de la Faculté de Médecine de Lyon. <br>"+
                  "Docteur en Médecine. <br>"+
                  "Ancien interne des HRS de Lyon. <br>"+
                  "Ancien Praticien Hospitalier à temps partiel. <br>"+
                  "Praticien attaché à l'Hôpital de Sainte-Foy-Lès-Lyon. <br>"+
                  "CES d'obstétrique et de gynécologie médicale. <br>"+
                  "CES de biologie de la reproduction. <br>"+
                  "DIU d'échographie générale. <br>"+
                  "DIU de médecine prénatale et foetale. <br>"+
                  "DIU de colposcopie et pathologie cervico-vaginale. <br>"+
                "<h2>Honoraires</h2>"+
                  "Médecin conventionné à honoraires libres secteur 2. <br><br>"+
                      "<ul><li>CS: 60€</li> "+
                      "<li>Echo 1er Trimestre: 100€</li> "+
                      "<li>Echo 2ème Trimestre 130€</li>"+
                      "<li>Echo 3ème Trimestre 120€</li>"+
                      "<li>Echo Gynécologique 70-80€</li>"+
                      "<li>Pose Stérilet: 70€</Li>"+
                      "<li>Colposcopie: 70€</li></ul> <br>"+
                  "Praticien adhérent à une association de gestion agréée. <br>"+
                  "Moyens de paiement acceptés: Chèque et Carte Bancaire. <br>",
              width: 900,
              animation: true,
              showCloseButton: true
            })
            break;
          case 1:
            swal({
              title: 'Dr Franck JACQUOT',
              html:
              "Chirurgien Gynécologue au CHU Lyon-Sud <br>"+
              "Inscrit au Tableau du Conseil Départemental de l'Ordre des Médecins du Rhône n'10630 depuis 12/1991 <br>"+
              "<h2>Activité</h2> "+
              "<h3>Cabinet :</h3>"+
                  "Gynécologie chirurgicale et médicale <br>"+
                  "Urogynécologie <br>"+
                  "Cancérologie gynécologique <br>"+
                  "Sénologie <br>"+
                  "Echographie Gynécologique (2D et 3D) <br>"+
                  "Gynécologie Médicale et contraception <br>"+
                  "Colposcopie <br>"+
                  "Suivi de grossesse <br>"+
                  "Echographie Obstétricale avec agrément pour le depistage de la trisomie 21 <br>"+
              "<h3>Centre Hospitalier Lyon-Sud</h3>"+
                  "Chirurgie Gynécologique vaginale et coelioscopique<br>"+
                  "Cancérologie Mammaire <br>"+
                  "Consultation Spécialisée : <br><br>"+
                   "<ul><li>Statique Pelvienne</li> "+
                   "<li>Fuites Urinaires Féminines</li>"+
                   "<li>Pelvi Périnéologie </li></ul><br>"+
                   "Bilan Uro-dynamique<br>"+
                   "Echographie Pelvienne 2D, 3D et Ultrasonographique <br>"+
                   "Laser vaginal et vulvaire <br>"+
                "<h2>Diplômes</h2> "+
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
                "<h2>Honoraires</h2>"+
                "Médecin conventionné à honoraires libres secteur 2. <br>"+
                  "<ul><li>CS: 60€</li>  "+
                  "<li>Echo 1er Trimestre: 100€</li> "+
                  "<li>Echo 2ème Trimestre 130€</li>"+
                  "<li>Echo 3ème Trimestre 120€</li>"+
                  "<li>Echo Gynécologique 70-80€</li> "+
                  "<li>Pose Stérilet: 70€</Li>"+
                  "<li>Colposcopie: 70€</li></ul> <br> "+
                  "Praticien adhérent à une association de gestion agréée. <br>"+
                  "Moyens de paiement acceptés: Chèque et Carte Bancaire.",
              width: 900,
              animation: true,
              showCloseButton: true
            })
            break;
          case 2:
            swal({
              title: 'Dr Irina HERGHEA',
              html:
              "Chirurgien Gynécologue Obstétricien à l'Hôpital de Sainte-Foy-Lès-Lyon <br>"+
              "Inscrit au Tableau du Conseil Départemental de l'Ordre des Médecins du Rhône n'21025 depuis 04/2009 <br>"+
                "<h2>Activité</h2> "+
                "<h3>Cabinet :</h3>"+
                  "Gynécologie chirurgicale <br>"+
                  "Urogynécologie <br>"+
                  "Sénologie <br>"+
                  "Suivi de grossesse normale et pathologique <br>"+
                  "Gynécologie médicale et contraception <br>"+
                  "Echographie Obstétricale avec agrément pour le depistage de la trisomie 21 <br>"+
                  "Echographie gynécologique <br>"+
                  "Colposcopie <br>"+
                "<h3>Centre Hospitalier Sainte-Foy-Lès-Lyon</h3>"+
                  "Accouchements voie basse et césariennes <br>"+
                  "Chirurgie gynécologique: <br><br>"+
                  "<ul><li>Coelioscopie </li>"+
                  "<li>Chirurgie vaginale </li>"+
                  "<li>Cure prolapsus et incontinence urinaire </li>"+
                  "<li>Hystérectomie </li>"+
                  "<li>Myomectomie </li>"+
                  "<li>Chirurgie bénigne du sein </li>"+
                  "<li>Stérilisation </li>"+
                  "<li>Conisation </li>"+
                  "<li>Hystéroscopie </li></ul><br>"+
                "<h2>Diplômes</h2> "+
                "Ancien assistant des Hôpitaux de Lyon. <br>"+
                "Praticien Hospitalier à temps partiel depuis 2011 <br>"+
                "<br>"+
                "DES de Gynécologie Obstétrique <br>"+
                "DIU d'Echographie Gyneco-obstétricale. <br>"+
                "DIU Coelioscopie Gynécologique. <br>"+
                "DIU de Chirurgie Vaginale. <br>"+
                "DIU Assistance médicale à la procréation. <br>"+
                "DIU Colposcopie et pathologies cervico-vaginale. <br>"+
                "<h2>Honoraires</h2>"+
                "Médecin conventionné à honoraires libres secteur 2. <br>"+
                  "<ul><li>CS: 60€</li>"+
                  "<li>Echo 1er Trimestre: 100€</li> "+
                  "<li>Echo 2ème Trimestre 130€</li>"+
                  "<li>Echo 3ème Trimestre 120€</li>"+
                  "<li>Echo Gynécologique 70-80€</li> "+
                  "<li>Pose Stérilet: 70€</Li>"+
                  "<li>Colposcopie: 70€</li></ul> <br>"+
                  "Praticien adhérent à une association de gestion agréée. <br>"+
                  "Moyens de paiement acceptés: Chèque et Carte Bancaire.",
              width: 900,
              animation: true,
              showCloseButton: true
            })
            break;
          case 3:
            swal({
              title: 'Marlène BARRAL',
              html:
              "Sage-femme <br>" +
              "Inscrite au Tableau du Conseil Départemental de l'Ordre des Sage-femmes du Rhône <br> " +
                "<h2>Activité</h2> "+
                  "<h3>Grossesses</h3>"+
                    "Suivi des grossesses physiologiques <br>" +
                    "Entretien prénatal<br>"+
                    "Préparation à la naissance et à la parentalité (classique, yoga, sophrologique) sur le plateau technique du <a style='color: #E55C5C;' href='http://hopital-ste-foy.fr/pole-naissance/index.html#3,0'>CH de Sainte-Foy-Lès-Lyon</a> <br>"+
                    "Suivi à domicile des grossesses pathologiques sur prescription médicale <br>" +
                    "Visite à domicile après retour de la maternité<br>"+
                  "<h3>Gynécologie</h3>"+
                    "Suivi de prévention<br>"+
                    "Contraception<br>"+
                  "<h3>Rééducation périnéale</h3>"+
                    "Du post-partum et uro-gynécologique<br>" +
                    "Manuelle et avec sonde vaginale (biofeedback et électrosimulation)"+
                  "<h3>Sexologie</h3>"+
                    "Dysfonctions sexuelles de la femme : <br><br>"+
                        "<ul> <li> Troubles du désir, de l'excitation ou du plaisir </li>"+
                        "<li> Vaginisme </li>"+
                        "<li> Dyspareunies </li> </ul><br>"+
                "<h2>Diplômes</h2> "+
                "Diplômée de la Faculté de Médecine et Maïeutique de Lyon-Sud <br>" +
                "DU de périnéologie <br>"+
                "DIU de Sexologie en cours de validation<br>" +
                "<h2>Honoraires</h2> "+
                  "Sage femme conventionnée <br>"+
                  "<br><ul><li>Consultation: 23€</li> "+
                  "<li>Entretien prénatal: 42€</li> "+
                  "<li>Séance de rééducation périnéale: 19.60€</li> </ul><br>"+
                  "Adhérente à une association de gestion agréée. <br>"+
                  "Moyens de paiement acceptés: Chèque et espèces",
              width: 900,
              animation: true,
              showCloseButton: true
            })
            break;
          default:
            break;
        }
      }
    </script>

    <?php
      include 'footer.php';
     ?>
