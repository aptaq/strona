<!DOCTYPE html>
<html lang="pl" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css" type ="text/css"/>
    <title>Logowanie</title>
  </head>
  <body>
    <div class="logowanie">
    <form action = "zaloguj.php" method="post" clas="logowanie">
       <!-- Login: <br /> <input type="text" name="login"/><br/>
       Hasło: <br /> <input type="password" name="haslo"/><br/><br/>
       <input type="submit" value="Zaloguj sie"/><br/>
       <br> -->
       <label for="fname">First Name</label>
        <input type="text" id="fname" name="firstname" placeholder="Your name.."><br>
        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="lastname" placeholder="Your last name.."><br>
        <label for="country">Country</label>
        <select id="country" name="country">
          <option value="australia">Australia</option>
          <option value="canada">Canada</option>
          <option value="usa">USA</option>
        </select><br>
        <input type="submit" value="Submit">
     </form>
    </div>
  </body>
</html>
