<?php
require '../config.php';

class eventc{
function afficherevent(){
$requete="select * from evenements";
$config= config::getConnexion();
try{
$query=$config->prepare($requete);
$query->execute();
$result=$query->fetchAll();
return $result;
}catch (PDOException $e)


{
$e->getMesssage();
}


}



function geteventbyid($id){
    $requete="select * from evenements where idevent=:id ";
    $config= config::getConnexion();
    try{
    $query=$config->prepare($requete);
    $query->execute(
  [ 
    'id'=>$id
  ]
    );
    $result=$query->fetch();
    return $result;
    }catch (PDOException $e)
    {
    $e->getMesssage();
    }
}











 function ajouterevent($event) { 
  
     $config= config::getConnexion();

  try{
    $query=$config->prepare(
   'INSERT INTO evenements(idevent,nomevent,lieuevent,dateevent,descripevent)
    VALUES(:idevent,:nomevent,:lieuevent,:dateevent,:descripevent)');

  $query->execute([ 
    'idevent'=>$event->getidevent(),
    'nomevent'=>$event->getnomevent(),
    'lieuevent'=>$event->getlieuevent(),
    'dateevent'=>$event->getdateevent(),
    'descripevent'=>$event->getdescripevent(),
  ]); 
  }catch(PDOException $e){
    $e->getMessage();
  }
 }











 function supprimerevent($id){
   
    $config  = config::getConnexion();

   try{
    $querry=$config->prepare(
  'DELETE FROM evenements WHERE idevent =:id
  ');

  $querry->execute([ 
    'id'=>$id

  ]); 
    }catch(PDOException $e){
    $e->getMessage();
  }}




 function modifierevent($event){

    $config= config::getConnexion();
    
   try{
    $query=$config->prepare(
   'UPDATE evenements SET nomevent=:nomevent,lieuevent=:lieuevent,dateevent=:dateevent,descripevent=:descripevent
    where idevent=:idevent');

   $query->execute([ 
    'idevent'=>$event->getidevent(),
    'nomevent'=>$event->getnomevent(),
    'lieuevent'=>$event->getlieuevent(),
    'dateevent'=>$event->getdateevent(),
    'descripevent'=>$event->getdescripevent(),
   ]); 
   }catch(PDOException $e){
    $e->getMessage();
  }}

}
?>