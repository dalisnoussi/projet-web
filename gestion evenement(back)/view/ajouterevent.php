<?php
require_once '../controller/eventC.php';
require_once '../Model/event.php';

if (isset($_POST['idevent']) && isset($_POST['nomevent']) && isset($_POST['lieuevent']) && isset($_POST['dateevent']) && isset($_POST['descripevent']))
{$eventsaisie= new event($_POST['idevent'],$_POST['nomevent'],$_POST['lieuevent'],$_POST['dateevent'],$_POST['descripevent']);
$eventc= new eventc();
$eventc->ajouterevent($eventsaisie);
header('Location:afficherListeevents.php');

}



?>

<!--

    <head>
        <title>Form Registration</title>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="ajouter_event.css">
    </head>


    <body>
    <form action="" method="POST">
        <div class="container">
            <h1 id="main-title">ajouter evenement</h1>
            <p id="subtitle">It only takes a minute!</p>
            <form action="">
                <div  class="placeholders">
                    <label id="name_event" for="text" class="">nom d'evenement</label>
                    <input required id="pl_first_name" type="text" name="firstname" placeholder="nom d'evenement">
                </div>

                <div  class="placeholders">
                    <label id="date_event" for="text" class="">date d'evenement</label>
                    <input required id="pl_username" type="date" name="username" maxlength="8" placeholder="date d'evenement">
                </div>

                <div  class="placeholders">
                    <label id="event_lieu" for="text" class="">lieu d'evenement</label>
                    <input required id="pl_email" type="text" name="lieu" placeholder="lieu d'evenement">
                </div>

                <div  class="placeholders">
                    <label id="id_event" for="text" class="">id d'evenement</label>
                    <input required id="pl_password" type="text" name="idevent" maxlength="8" placeholder="id d'evenement">
                </div>

                
                <br><br>
                <input id="a-submit" type="submit" name="add" value="ajouter l'evenement" />
                <input type="reset" value="reset" id="reset">
              

              </form> 

        </div>
    </body>

-->





























<form action="" method="POST">
<table border="2" align="center">      
      <tr>
 <td>
<label for="idevent">id d'evenement:
      </label>
</td>
<td>  <input type="text" id="idevent" name="idevent" > </td>
</tr>
<tr>
<td>
      <label for="nomevent">Nom d'evenement:
      </label>
      </td>
      <td>  <input type="text" id="nomevent" name="nomevent" > </td>
      </tr>

      <tr>
 <td>
      <label for="lieuevent">lieu d'evenement:
      </label>
      </td>
      <td>  <input type="text" id="lieuevent" name="lieuevent" > </td>
      </tr>
      <tr>



    <tr>
 <td>
      <label for="dateevent">date d'evenement:
    </label>
    </td>
    <td><input type="date" id="dateevent" name="dateevent" > </td>
    </tr>


    <tr>
 <td>
      <label for="descripevent">description  d'evenement:
    </label>
    </td>
    <td><input type="text" id="descripevent" name="descripevent" > </td>
    </tr>

    <td> <input type="submit" name="add" value="add" /> </td>
    <td><input type="reset" value="reset" id="reset"> </td>
</p>
</fieldset>
      </table>
</form>
