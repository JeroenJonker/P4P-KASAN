      <footer class="site-footer">
          <?php
            ini_set('display_errors', 'On');
            error_reporting(E_ALL);
            $aQuestions = array(
                    'Wat is de hoofdstad van Nederland?',
                    'Welke taal spreken ze in Engeland?',
                    'Hoeveel is twee plus twee als getal?',
                    'Wat is het tegenovergestelde van warm?',
                    'Is zeewater zoet of zout?',
                    'Wat is de laatste maand van een jaar?',
                    'Hoeveel dagen zitten er in een jaar? (Geen schrikkeljaar)' );
            $aAnswers = array(
                    'amsterdam',
                    'engels',
                    4,
                    'koud',
                    'zout',
                    'december',
                    365 );

          $check1 = $check2 = $check3 = false;
          $captchaErr = $lnameErr = $nameErr = $emailErr = $telefoon = "";
          $name = $email = $telefoon = "";
          if ($_SERVER["REQUEST_METHOD"] == "POST")
          {
              /* voornaam */
              if (empty($_POST["firstname"]))
              {
                $nameErr = "*Firstname is required";
              } 
              else 
              {
                $name = test_input($_POST["firstname"]);
                // check if name only contains letters and whitespace
                if (!preg_match("/^[a-zA-Z ]*$/",$name)) 
                {
                  $nameErr = "Only letters and white space allowed"; 
                }
                  else 
                  {
                      $check1 = true;
                  }
              }
              
              /*achternaam */
              if (empty($_POST["lastname"]))
              {
                $lnameErr = "*Lastname is required";
              } 
              else 
              {
                $name = test_input($_POST["lastname"]);
                // check if name only contains letters and whitespace
                if (!preg_match("/^[a-zA-Z ]*$/",$name)) 
                {
                  $lnameErr = "Only letters and white space allowed"; 
                }
                  else 
                  {
                      $check1 = true;
                  }
              }
              
              /* email */
              if (empty($_POST["email"])) 
              {
                  $emailErr = "*Email is required";
              } 
              else 
              {
                $email = test_input($_POST["email"]);
                // check if e-mail address is well-formed
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
                {
                  $emailErr = "Invalid email format"; 
                }
                else 
                {
                      $check2 = true;
                }
              }
              $telefoon = test_input($_POST["telefoon"]);
                // check if name only contains letters and whitespace
              if (!preg_match("/^[0-9]*$/",$telefoon)) 
              {
                  $telefoonErr = "Only letters and white space allowed"; 
              }
              
              if(strtolower($_POST['answer']) == $aAnswers[$_SESSION['key']])
              {
                  $check3 = true;
              }
             else
              {
                 $captchaErr = "*Captcha niet juist ingevuld!";
              }
          
             if ($check1 == true && $check2 == true && $check3 == true)
             {
                $subject = "wp_mail function test";
                $to = "jeroenojonker@hotmail.nl";
                $message = "This is a test of the wp_mail function: wp_mail is working";
                $headers = "";
//                mail( $email, "Bevestiging aanvraag", $message, $headers );
//                mail( $to, "Aanvraag", "telefoon: ".$telefoon."email: ".$email, $headers );
             }
              echo $_POST['answer'];
              echo $aAnswers[$_SESSION['key']];
              echo $_SESSION['aantal'];
          }
          ?>
          <h2 class='contact-header'> Contact</h2>
          <div class='white-streep'></div>
          <?php if ($check1 == true && $check2 == true && $check3 == true)
                { 
                ?>   <h2 class='contact-header'> "Aanvraag is verstuurd!" </h2></br> <?php
                }?>
          
          <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
              <div id='contact-left'>
                <label class="left_label">Voornaam:</label><label class="left_label">Achternaam:</label></br>
              <?php if ($nameErr != "" || $lnameErr != "") { ?>
                        <label class="left_label error" ><?php echo $nameErr;?></label><label class="left_label error"><?php echo $lnameErr;?></label></br>
                          <?php } ?>
                <input class="inputbox" type="text" name="firstname">&nbsp<input class="inputbox" type="text" name="lastname"><br>
                <label class="left_label">Email:</label><label class="left_label">Telefoonnr:</label><br>
              <?php if ($emailErr != "") { ?>
                        <label class="left_label error"><?php echo $emailErr;?></label><span class="left_label error">&nbsp</span></br>
                <?php } ?>
                <input class="inputbox" type="text" name="email">&nbsp<input class="inputbox" type="text" name="telefoon"><br>
                <label class="label_center">CAPTCHA</label></br>
              <?php if ($captchaErr != "") { ?>
                        <label class="error"><?php echo $captchaErr;?></label></br>
                <?php } 
                if(!isset($_SESSION['aantal']))
                {
                    $_SESSION['aantal'] = 0;
                }
                $_SESSION['aantal'] = $_SESSION['aantal'] + 1;
                $_SESSION['key'] = array_rand($aQuestions);
                function test_input($data)
                {
                  $data = trim($data);
                  $data = stripslashes($data);
                  $data = htmlspecialchars($data);
                  return $data;
                }
                ?>
                <label><?php echo $aQuestions[$_SESSION['key']]; ?></label></br>
                <input class="inputbox" type="text" name="answer" />
              </div>
              <div id='contact-right'>
                  <label class="label_center">Description:</label><br>
                  <textarea class="inputbox" rows="6" cols="50">
                  </textarea><br>
                  <input id='button' type="submit" name="submit" value="Submit"/>  
            </div>
          </form>
<div class="contact-info">
            <div class="contact" id="contact">
                    <h2>Contact</h2>
                    <p>
                        Tel. +31(0) 638503227
                        Email: info@kasanevents.nl
                    </p>
                </div>
                <div class="contact" id="contact2">
                    <h2>Follow us</h2>
                    <a href="https://www.instagram.com/kasanevents/"><img class="logoinsta" src="<?php bloginfo('template_directory'); ?>/IMG/insta.png" alt="logo"/></a>
                    <a href="https://www.facebook.com/kasanevents/?fref=ts"><img class="logofb" src="<?php bloginfo('template_directory'); ?>/IMG/facebooklogo.png" alt="logo"/></a>
                </div>
                <div class="contact" id="contact3">
                    <h2>Jobs</h2>
                    <p>
                        Should you wish to join our team
                        Contact us at jobs@kasanevents.nl
                    </p>
            </div>
</div>
          <img class="footer-logo" src="<?php bloginfo('template_directory'); ?>/IMG/Logo KASAN Events text.png" alt="logo"/>
<div id='instagram-carroussel'></div>
      </footer>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/instafeed.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery-1.12.4.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/voorbeeld.js"></script>
    </body>
</html>