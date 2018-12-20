

 
    <?php while($row = mysqli_fetch_assoc($result)) : ?>

 


<div class="card">
            <img class="card-img-top img" src="img/<?php echo $row["gambar"];?>" alt="">
            <div class="card-body">
              <h4 class="card-title"><?= $row["judul"];?></h4>
             <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@fat">Dafatar</button>
              <p class="card-text"><?= $row["deskripsi"];?></p>
            </div>
          </div>




  
 <?php endwhile; ?>

 
            <!-- <div class="card">
            <img class="card-img-top" src="img/ob2-180x100.png" alt="">
            <div class="card-body">
              <h4 class="card-title">Title</h4>
              <p class="card-text">Text</p>
            </div>
          </div>  -->