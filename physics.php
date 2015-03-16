<?php $pageTitle="Arrow Physics" ; include( 'inc/header.php'); ?>

<div class="container">

            <div class="question">
                <div id="question">What is the <b>force</b> and <b>energy</b> of an arrow being shot?</div>
            <a href="#physicsintro"><div class="arrow-down"></div></a>

            </div>



    <div id="physicsintro">


            <div class="video">

                <video width="380" controls>
                  <source src="_assets/arrow.mp4" type="video/mp4">
                Your browser does not support the video tag.
                </video>

            </div>

            <div class="givens">

                <h1 class="black">Givens</h1>

                <ul>
                    <br>initial velocity/speed: 0 m/s
                    <br>acceleration (a): -9.8m/s^2
                    <br>horizontal displacement (x): 4.6 m
                    <br>arrow mass (g): 1542 g
                    <br>vertical displacement (y): 1.45m
                </ul>

                <br> The derivable units are <b>final velocity, string tension, and the force necessary to shoot through the water bottle</b>.

            </div>


    </div>

    <div class="parabolic">

        <div class="paratext">
            <h1>Parabolic and Projectile Motion</h1> A projectile is anything launched, either vertically or horizontally, and is subject just to the force of gravity. The arrow is an example of projectile motion in which it is traveling horizontally in a stretched parabola motion, as shown in the image below.

        </div>

    </div>

    <div class="force">

        <div class="forcetext">

            <h1 class="black">Force</h1> <br>You can determine the force of the string (string tension). According to Newton’s 2nd law: if you know the mass and acceleration of an object, you can determine its force. This statement forms into the equation:

            <h3>F=MA</h3> If you plug in the givens shown above into the formula from Newton’s 2nd law, you can derive the force that the arrow has while traveling after being shot.

        </div>

        <img src="_assets/force%20diagram.png">

    </div>



    <div class="velocity">


        <h1>Velocity</h1> By observing the video and knowing the measurements of the arrow, the distance, and its speed, one can derive the velocity by dividing the distance by the time. This is represented using the equation:

        <br><h3>V = x / t With v=velocity, x=distance, and t = time.</h3>


    </div>


    <div class="energy">

        <div class="energytext">

            <h1>Energy</h1>

            When the arrow is in the process of being shot, it is entirely comprised of elastic (or spring energy). Elastic energy (Us) is potential energy triggered by either a spring or other elastic system, such as a rubber band. In this case, the elastic energy is provided by the bow’s string.

        <p>After the arrow is shot and traveling through midair, it only contains gravitational (Ug) and kinetic energy (Uk). As the name suggests, gravitational energy is provided by the gravitational field of earth, while kinetic energy is just the energy of any item in motion. This is all shown in the LOL diagram below:</p>


        <img src="_assets/lol.png"> From this diagram, one can derive the equation Us = Ug + Uk By knowing previous energy equations, you can transform this basic equation into:

        <h3>1/2kx^2 = 1/2mv^2 + mgh</h3>

    </div>

</div>

<?php include( 'inc/footer.php'); ?>
