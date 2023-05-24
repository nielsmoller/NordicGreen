<?php
      include_once 'header.php';
  ?>

<div class="main-container">
    <section class="contact-container">
        <div class="split-left">
            <p class="description">Du er velkommen til at kontakte os, hvis du vil høre mere om os, har spørgsmål eller kommentarer til vores produkter. </p>
            <form class="contact-form">
                <div class="user-data">
                    <div class="name">
                        <label for="name">Navn*</label><br>
                        <input type="text" id="name" name="name"><br><br>
                    </div>
        
                    <div class="email">
                        <label for="email">E-mail*</label><br>
                        <input type="text" id="email" name="email"><br><br>
                    </div>
                    
                    <div class="phone">
                        <label for="phone">Telefon*</label><br>
                        <input type="text" id="phone" name="phone"><br><br>
                    </div>
                </div>

                    <div class="file">
                        <label for="file">Vedhæft fil</label><br>
                        <input type="file" id="file" name="file"><br><br>
                    </div>
        
                    <div class="message">
                        <label for="message">Besked*</label><br>
                            <textarea id ="message" name="message" class="message" rows="6" style="resize: none;"></textarea><br><br>
                    </div>
        
                    <div class="accept">
                        <input type="checkbox" name="accept" value="accept"> Jeg acceptere cookie- og privatlivspolitik*<br><br>
                    </div>
                    
                    <div class="submit-button">
                        <button type="submit" name="submit">Send</button>
                    </div>  
            </form>

                <div class = "contact-info">
                    <p class="contact-info-heading">Kontakt information</p>
                    <p> Assensvej 217, 5250 Odense SV, Danmark</p>
                    <p> +45 65 96 29 27</p>
                    <p>info@nordicgreens.dk</p>
                    <p> CVR-nr. 29634521</p>
                </div>
        </div>

        <div class="split-right">
            <img src="img/contactimg.jpeg" alt="Billede af tomatranker">
        </div>
    </section>

</div>
    <?php
        include_once 'footer.php';
    ?>
</body>
</html>