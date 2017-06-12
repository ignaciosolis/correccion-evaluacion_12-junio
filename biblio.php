<?php include('header.php');?>
    <!-- Set your background image for this header on the line below. -->
    <?php
$json = file_get_contents('data/biblio.json');
$datos = json_decode($json,true);
$todos = count($datos);
?>

    <header class="intro-header" style="background-image: url('img/portada_02.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="page-heading">
                        <h1>Bibliografía</h1>
                        <hr class="small">
                        <span class="subheading">Travestismos y Religiosidad</span>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <!-- Main Content -->
    <div class="container">
    <div class="row">
      <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
    </div>

    <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">

    <h3>Tengo <?php echo($todos);?> referencias bibliográficas, que son:</h3>

    <?php for($n = 0; $n < $todos; $n++){?>
      <div class="post-preview">
          <p><?php echo($datos[$n]["autor"]);?> (<?php echo($datos[$n]["year"]);?>). <?php echo($datos[$n]["titulo"]);?>. <?php echo($datos[$n]["ciudad"]);?>:<?php echo($datos[$n]["editorial"]);?>
          </p>
      </div>
    <?php }; ?>


                </div>
            </div>
        </div>

    <hr>

 <?php include('footer.php');?>
