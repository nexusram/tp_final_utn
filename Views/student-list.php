<main class="py-5">
     <section id="listado" class="mb-5">
          <div class="container">
               <h2 class="mb-4">Student List</h2>

               <table class="table bg-light" border="1">

                    <thead >

                         <th>StudentId</th>
                         <th>CareerId</th>
                         <th>FirstName</th>
                         <th>LastName</th>
                         <th>Dni</th>
                         <th>FileNumber</th>
                         <th>Gender</th>
                         <th>BirthDate</th>
                         <th>Email</th>
                         <th>PhoneNumber</th>
                    </thead>
                    <tbody >

                         <?php
                         foreach ($postulaciones as $student) : ?>
                         <tr>
                              <td> <?php echo $student->getStudentId() . '<br>'; ?></td>
                              <td><?php echo $student->getCareerId() . '<br>'; ?></td>
                              <td> <?php echo $student->getFirstName() . '<br>'; ?></td>
                              <td><?php echo $student->getLastName() . '<br>';  ?></td>
                              <td> <?php echo $student->getDni() . '<br>';  ?></td>
                              <td> <?php echo $student->getFileNumber() . '<br>';  ?></td>
                              <td><?php echo $student->getGender() . '<br>'; ?></td>
                              <td><?php echo $student->getBirthDate() . '<br>';  ?></td>
                              <td> <?php echo $student->getEmail() . '<br>'; ?></td>
                              <td> <?php echo $student->getPhoneNumber() . '<br>';  ?></td> </tr>
                         <?php endforeach; ?>


                    </tbody>
               </table>


               <?php
               /* 
          $id_company= $value->getId_company();
          if($_SESSION["email"]=="admin@gmail.com"){
?>
     <a class="btn btn-primary btn-block btn-lg" href=<?php echo FRONT_ROOT ?>Ofert\filtroListCompany?id_company=<?php echo $id_company ?> role="button">ver Ofertas</a>
<?php
          }
?>
          </div>
     </section>
     <?php

     if ($_SESSION["email"] == "admin@gmail.com") {
     ?>
           <a href=<?php echo FRONT_ROOT ?>Company\NavAdmin>return</a>
     <?php
     } else {
     ?>
          <a href=<?php echo FRONT_ROOT ?>Company\Nav>return</a>
     <?php
     }*/
               ?>


</main>