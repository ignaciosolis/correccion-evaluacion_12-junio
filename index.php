<?php include('header.php');?>

    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('img/portada_01.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>Travestismo y Religiosidad</h1>
                        <hr class="small">
                        <span class="subheading">Visualidad de las acciones performáticas travestidas como disidencia sexual a través de la religiosidad popular en Latinoamérica</span>
                      <p>En un contexto político, social y cultural de clara ampliación de los derechos ciudadanos frente a un sistema impuesto de poder, como lo son los regímenes militares, las diversas identidades de género y sexuales adquieren una mayor presencia en las manifestaciones ligadas a la performatividad y el arte, no solo como objeto de representación sino también en tanto su carácter subversivo. Esta es una aproximación al corpus de la representación del performer-activista-individuo travestido en América Latina a partir del año 1975 hacia 1990, con un enfoque a aquellas manifestaciones contraculturales registradas por medio de fotografías, como una forma de lucha social y prácticas de desobediencia de género, haciendo hincapié en aquellas que se relacionan visualmente con la religiosidad popular enraizada en la cultura latinoamericana con el fin de criticar a las diversas ostentaciones de poder y sometimiento en la historia política del siglo XX. </p>
                     <hr>
                    </div>
                </div>
            </div>
        </div>
    </header>

 <?php
 $csv = array_map("str_getcsv", file('datos.csv'));
array_walk($csv, function(&$a) use ($csv) {$a = array_combine($csv[0], $a);});
array_shift($csv);
               ?>
               <?php for($a = 0; $a < $total = count($csv); $a++){?>
               <!--esto se va a repetir-->
               <div class="container">
                   <div class="row">
                       <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                 <div class="post-preview">
                     <a href="single.php?url=<?php print($a)?>">
                         <h2 class="post-title"><?php echo($csv[$a]["titulo"])?></h2>
                         <img src="<?php echo $csv[$a]["imagen"];?>" class="img-responsive">
                     </a>
                         <h5>Palabras clave: <small><?php echo $csv[$a]['etiquetas'];?> </h5>
                        <h4 class="post-subtitle"><?php echo($csv[$a]['texto-abreviado'])?></h4>


                 </div>
               </div>
             </div>
           </div>
 <?php };?>
<?php include('footer.php');?>
