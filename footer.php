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
          $nameErr = $emailErr = $telefoon = "";
          $name = $email = $telefoon = "";
          if ($_SERVER["REQUEST_METHOD"] == "POST")
          {
              if (empty($_POST["name"]))
              {
                $nameErr = "Name is required";
              } 
              else 
              {
                $name = test_input($_POST["name"]);
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
              if (empty($_POST["email"])) 
              {
                  $emailErr = "Email is required";
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
                  $content[] = '<p>Je hebt het juiste antwoord ingevuld.<p>';
              }
             else
              {
                  $content[] = '<p>Captcha niet juist ingevuld!</p>';
              }
          
             if ($check1 == true && $check2 == true && $check3 == true)
             {
                $subject = "wp_mail function test";
                $to = "jeroenojonker@hotmail.nl";
                $message = "This is a test of the wp_mail function: wp_mail is working";
                $headers = "";
//                mail( $email, "Bevestiging aanvraag", $message, $headers );
//                mail( $to, "Aanvraag", "telefoon: ".$telefoon."email: ".$email, $headers );

              echo "yes";
             }
          }
            $_SESSION['key'] = array_rand($aQuestions);
            function test_input($data)
            {
              $data = trim($data);
              $data = stripslashes($data);
              $data = htmlspecialchars($data);
              return $data;
            }
          ?>
          <h2 id='contact-header'> Contact</h2>
          <div class='white-streep'></div>
          
          <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
              <div id='contact-left'>
                <span class="error">* <?php echo $nameErr;?></span>
                Naam:<br>
                <input type="text" name="name"><br>
                <span class="error">* <?php echo $emailErr;?></span>
                Email:<br>
                <input type="text" name="email"><br>
                Telefoon:<br>
                <input type="text" name="telefoon"><br>
                <label class="field"><?php echo $aQuestions[$_SESSION['key']]; ?></label><br>
                <input type="text" name="answer" />
              </div>
              <div id='contact-right'>
                Description:<br>
                  <textarea rows="6" cols="50">
                </textarea><br>
                <input id='button' type="submit" name="submit" value="Submit">  
            </div>
          </form>
          <?php
        if(isset($errors))
        {
            echo '<ul>';
            foreach($errors as $error);
            {
                echo '<li>'.$error.'</li>';
            }
            echo '</ul>';
        }
        elseif(isset($content))
        {
            foreach($content as $line)
            {
                echo $line;
            }
        }
          ?>
          <img class="footer-logo" src="<?php bloginfo('template_directory'); ?>/IMG/Logo KASAN Events text.png" alt="logo"/>
      </footer>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery-1.12.4.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/voorbeeld.js"></script>
    </body>
</html>