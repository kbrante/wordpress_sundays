<div class="row monFooter">
    <div class="col-md-3">

        <ul>
            <li>Quick links</li>
            <li>About us</li>
            <li>Blog</li>
            <li>Careers</li>
        </ul>
    </div>
    <div class="col-md-3">

        <ul>
            <li><a href="index_contact.html">Contact us</a></li>
            <li>@californiatheme</li>
            <li>support@smallvictories.co</li>
            <li>+1 917 (123) 4567</li>
        </ul>
    </div>
    <div class="col-md-3">

        <ul>
            <li>Newletter</li>
            <li><form class="" action="#" method="post">
                <input type="email" name="email" value="" placeholder="Your email">
                <button type="submit" name="form">OK</button>
                <?php
                if (isset($_POST["email"])) {
                    echo "<p>votre email a été enregistré</p>";
                    $wpdb->insert(
                	'wp-email',
                	array(
                		'email' =>  $_POST["email"]
                	)
                );

                }

                 ?>
            </form></li>
        </ul>
    </div>
    <div class="col-md-3">

        <ul>
            <li>Follow us</li>
            <li>Pinterest</li>
            <li>Instagram</li>
            <li>Vimeo</li>
        </ul>
    </div>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.min.js"
integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" charset="utf-8"></script>
</body>
