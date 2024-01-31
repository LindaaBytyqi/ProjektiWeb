<?php
    include 'headerc.php';
    ?>

</header>
   
    <section class="kontakti">
        <div class="container">
            <h2>Contact Us</h2>
            <div class="contact-wrapper">
                <div class="kontakt-form">
                    <h1>Send us messages</h1>
                    <div class="form-group">
                        <input type="text" id="Name" placeholder="Name...">
                        <label style="color:black" for="Name" id="nameError"></label>
                    </div>
                    <div class="form-group">
                        <input type="email" id="email" placeholder="Email...">
                        <label style="color:black" for="email" id="emailError"></label>
                    </div>
                    <div class="form-group">
                        <input type="number" id="phone" placeholder="Phone Number...">
                        <label style="color:black" for="Phone" id="phoneError"></label>
                    </div>
                    <div class="form-group">
                        <textarea name="message" id="message"  placeholder="Message..." style="font-family: 'Poppins', sans-serif;"></textarea>
                        <label style="color:black" for="message" id="messageError"></label>
                    </div>
                        <button type="submit" class="submitbtn" onclick="validimi()">Send message</button>
                </form>
                </div>
                <div class="kontakt-icon">
                    <img src="ccaa.png" class="fotoja">
                    <div class="shkrimi">
                        <h3>Hurry Up!</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>    
    
    <?php
    include 'footer.php';
    ?>
    
</body>
</html>