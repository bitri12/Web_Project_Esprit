<?php
$page_titre = "Events";
 include './includes/header.php';?>

  <div class="card container">
    <div class="card-body text-center">
      <?php
       $i = NombreEventsActif();
       if($i == 0){
       ?>
        <div class="alert alert-danger">
          <h2> Aucun Evenement n'est en cours </h2>
        </div>
    <?php } else {?>
      <div class="card-title text-center">
        <h1> Evennements</h1>
      </div>
      <div class="card-body">
        <table class="table">
          <thead>
           <tr>
             <th scope="col"> </th>
             <th scope="col">Description</th>
             <th scope="col">Date de l'evenement</th>
             <th scope="col">Nombre de participant</th>
             <th scope="col"> </th>
           </tr>
         </thead>
         <tbody>
           <?php
           $selection = $bdd->query('SELECT * FROM event WHERE isComplete = 0');
           while($A = $selection->fetch()) {
             ?>
             <tr>
               <td><img src="<?php echo $A['image']?>"></td>
               <td><?php echo $A['description'];?></td>
               <td><?php echo date('H:i:s d/m/y', strtotime($A['datetime'])); ?></td>
               <td><?php echo $A['participant'];?> / <?php echo $A['maxParticipant'];?> </td>
               <td><a type="button" href="evenement.php?idEvent=<?php echo $A['id'];?>" class="btn btn-warning">En savoir plus</a></td>
             </tr>
           <?php } ?>
         </tbody>
        </table>
      </div>
    <?php } ?>
    </div>
  </div>



<?php include './includes/footer.php';?>
