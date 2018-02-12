<?php include 'header.html';?>
<?php include 'nav.php';?>
<div class="container-fluid">

    <section>
        <div class="row back-white">
                <div class=" col-md-6  pad-fat text-center " >
                    <h2> UNE QUESTION ?</h2>
                    <p> Envoyez nous vos demandes, nous vous établieront un devis.
                    </p>
                    <div class="form text-center">
                        <script>




                        </script>

                        <form name="formulaire" role="form" id="Form" method="post" enctype="text/plain" action="">
                            <div class="form-group">
                                <input type="text" class="form-control rounded form-contact" id="name" name="Nom" placeholder="Nom" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control rounded form-contact" id="email" name="Email" placeholder="Email" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control rounded form-contact" id="subject" name="Sujet" placeholder="Sujet" required>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control rounded form-contact" type="textarea" id="message" name="Message" placeholder="Message" maxlength="140" rows="7"></textarea>
                            </div>

                            <input type="reset" class="btn pull-right marg-top-little marg-little" value="Effacer">
                            <input type="submit" name="submit" onclick="get_subject()" class="btn pull-right marg-top-little" value="Envoyer">
                        </form>


                    </div>
                </div>


                    <div class="col-md-6 pad-fat text-center ">
                        <h2 class="pad-top-big"> NOUS REJOINDRE</h2>
                        <p> A l'embranchement prendre a droite. Suivre le chemin, jusqu'au portail de l'entrée du domaine.</p>
                        <iframe  class="pad-top-medium" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d639.2429313186892!2d3.4684288367676332!3d43.472452255746944!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNDPCsDI4JzIwLjYiTiAzwrAyOCcwNC42IkU!5e1!3m2!1sfr!2sfr!4v1517420336323" width="600" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>

                        <div>
                            <div class="row text-center">
                                <div class="col-md-6" >
                                    <div>
                                        <span class="title-foot small-caps">Adresse</span><br/>
                                        <span>Mas Chabert </span><br/> <span>34500 AUMES</span><br/>
                                    </div>
                                </div>

                                <div class="col-md-6 text-center">
                                    <span class="title-foot small-caps">Contact</span><br/>
                                    <span class="small-caps let-space-little ">Christope Benet  06.30.33.28.62</span><br/>
                                    <span  class="small-caps let-space-little ">Maxime Urbano  06.30.33.28.62</span>
                                </div>
                            </div>
                    </div>



            </div>
        </div>
    </section>


<?php include 'footer.html';?>

