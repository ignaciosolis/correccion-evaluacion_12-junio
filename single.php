<?php include("header.php");?>
<?php
 $csv = array_map("str_getcsv", file('datos.csv'));
array_walk($csv, function(&$a) use ($csv) {$a = array_combine($csv[0], $a);});
array_shift($csv);
$la_url = $_GET['url'];
?>

<header class="intro-header" style="background-image: url('<?php echo $csv[$la_url]["imagen"];?>')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="site-heading">
                    <h1 class="article"><?php echo($csv[$la_url]["titulo"])?></h1>
                    <hr class="small">
                    <span class="subheading">Visualidad de las acciones performáticas travestidas como disidencia sexual a través de la religiosidad popular en Latinoamérica.</span>
                </div>
            </div>
        </div>
    </div>
</header>

<div class="container">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
            <div class="site-heading">
                <hr class="small">
                <h7><?php echo $csv[$la_url]['texto-abreviado'];?> </h7>
                <h5>Palabras clave: <small><?php echo $csv[$la_url]['etiquetas'];?> </h5>

            </div>
        </div>
    </div>
</div>
</header>


    <!-- Post Content -->
    <article>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">

                  <p><?php echo($csv[$la_url]["texto-completo"])?></p>
                  <h6>Link: <a href="<?php echo $csv[$la_url]['link-fuente'];?>"><?php echo $csv[$la_url]['link-fuente'];?></a></h6>

              </div>
            </div>
        </div>
    </article>
    <hr>

<?php include("footer.php");?>
