<?php
include 'includes/navigation-bar.php';
?>

<!-------------------- Book Now -------------------->

<div class="booknow">
    <div class="container-box">
        <h2 class="titles">Book Now</h2>
        <h4>Send us a message and we will respond within 24 hours.</h4>
        <div class="row-data">
            <div class="column-2">
                <form action="">
                    <label for="name">Name</label><br><br>
                    <input type="text" id="name" name="name" value="John" size="60"><br><br>
                    <label for="email">Email</label><br><br>
                    <input type="email" id="email" name="email" value="john@gmail.com" size="60"><br><br>
                    <input class="submit" type="submit" value="Submit">
                </form>
            </div>
            <div class="column-2">
                <textarea name="message" rows="15" cols="60">Leave a message.</textarea><br><br>
            </div>
        </div>
        
    </div>
</div>
</div>
<hr>

<!-------------------- Footer -------------------->
<?php
include 'includes/footer.php';
?>