<?php $pageTitle="Home" ; include( 'inc/header.php'); ?>
<div class="container">

    <div class="introduction">

        <div class="introcontent">

            <h1>Introduction</h1>

                <br>Whether you know it or not, everything uses physics. Archery is a prime example of this: it uses projectile motion, parabolic motion, forces, energy, and more.

                <br><br><a href="physics.php"><button>Click here to get started!</button></a>

        </div>

        <img src="_assets/arrow.png">

        <a href="#contact"><div class="arrow-down"></div></a>

    </div>

    <div id="contact">

        <div class="contacttext">

            <?php

            if ($_SERVER["REQUEST_METHOD"] === "POST") {
                $name = $_POST["name"];
                $email = $_POST["email"];
                $message = $_POST["message"];
                $email_body = "";
                $email_body = $email_body . "Name: " . $name . "\n";
                $email_body = $email_body . "Email: " . $email . "\n";
                $email_body = $email_body . "Message: " . $message;
                header("Location: contact.php?status=thanks");
                exit;
            }

            ?>


            <h1>Contact</h1>

                <?php if (isset($_GET["status"]) AND $_GET["status"] === "thanks") { ?>
                    <p>Thanks for the email! I&rsquo;ll be in touch shortly</p>
                <?php } else { ?>

                    <p>Please leave any questions, comments or concerns here</p>

                    <form method="post" action="contact.php">

                    <table>
                        <tr>
                            <th>
                                <label for="name">Name</label>
                            </th>
                            <td>
                                <input type="text" name="name" id="name">
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="email">Email</label>
                            </th>
                            <td>
                                <input type="text" name="email" id="email">
                            </td>
                        </tr>
                        <tr>
                            <th>
                                <label for="message">Message</label>
                            </th>
                            <td>
                                <textarea name="message" id="message"></textarea>
                            </td>
                        </tr>
                    </table>
                    <input type="submit" value="Send">

                    </form>

            <?php } ?>

        </div>

    </div>

</div>


<?php include( 'inc/footer.php'); ?>
