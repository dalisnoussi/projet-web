<?php
require_once '../controller/eventC.php';
require_once '../Model/event.php';

$eventV=new eventc();

if (isset($_POST['idevent']) && isset($_POST['nomevent']) && isset($_POST['lieuevent']) && isset($_POST['dateevent']) && isset($_POST['descripevent']))
{$eventsaisie= new event($_POST['idevent'],$_POST['nomevent'],$_POST['lieuevent'],$_POST['dateevent'],$_POST['descripevent']);

     $eventV->modifierevent($eventsaisie);
     header('Location:afficherListeevents.php');
}else 
{
    $a=$eventV->geteventbyid($_GET['idevent']);
}
?>



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

    <td> <input type="submit" name="modifier" value="modifier" /> </td>
    <td><input type="reset" value="reset" id="reset"> </td>
</p>
</fieldset>
      </table>
</form>