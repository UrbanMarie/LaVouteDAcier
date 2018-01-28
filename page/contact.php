<?php include 'header.html';?>
<?php include 'nav.html';?>
<div class="container-fluid">

    <section>
        <div class="row">
            <div class="row">
                <div class="col-xs-1 col-md-2"></div>
                <div class="col-xs-10 col-md-8  align-content-md-center back-white rounded border-marron pad-fat marg-big text-center marron-text " >
                    <h2> UNE QUESTION</h2>
                    <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. elit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                        sunt in culpa qui officia deserunt mollit anim id est laborum."
                    </p>
                    <div class="form text-center">
                        <form role="form">
                            <br style="clear:both">
                            <div class="form-group">
                                <input type="text" class="form-control rounded form-contact" id="name" name="name" placeholder="Nom" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control rounded form-contact" id="email" name="email" placeholder="Email" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control rounded form-contact" id="subject" name="subject" placeholder="Sujet" required>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control rounded form-contact" type="textarea" id="message" placeholder="Message" maxlength="140" rows="7"></textarea>
                            </div>

                            <button type="button" id="submit" name="submit" class="btn pull-right marg-top-little">Envoyer</button>
                        </form>
                    </div>
                </div>
                <div class="col-xs-1 col-md-2"></div>
            </div>
        </div>
    </section>

    <section class="back-white ">
        <div class="row rounded marg-left-medium">
            <div class="col-md-6 crop-img text-center pad-bottom-fat" >
                <h2> NOUS REJOINDRE</h2>
                    <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                            Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                            sunt in culpa qui officia deserunt mollit anim id est laborum."
                    </p>
                <div class="crop-img crop-img-rect text-center" id="imgAume">
                    <img src="../aume.jpg" alt="header soudure" >
                </div>
            </div>
            <div class="col-md-6 text-center ">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d23166.983317246613!2d3.4521124803445384!3d43.4632503130213!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12b140fb2db8fb07%3A0x4078821166ace00!2s34530+Aumes!5e0!3m2!1sfr!2sfr!4v1512730365716" width="100%" height="100%"  frameborder="0" style="border:0" allowfullscreen id="mapgoogle"></iframe>
            </div>
        </div>
</section>

<?php include 'footer.html';?>

