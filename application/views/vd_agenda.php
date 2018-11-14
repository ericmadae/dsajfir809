 
  <?php foreach ($berita as $row): ?>
    
           <div class="post_box pb_last">
            
                <h2><a href="#"><?= $row['judul_berita'] ?></a></h2>    
                <div class="news_meta">Posted on <a href="#">Collection</a><?= $row['waktu_publish'] ?> <a href="#">Photos</a>, <a href="#">Photography</a>, <a href="#">Free Stuff</a></div>
             <div class="image_wrapper"><a href="#"><img src="images/templatemo_image_03.jpg" alt="image 3" /></a></div>
             <p align="justify">
              
              <?= substr($row['isi_berita'], 0, 250); if (strlen($row['isi_berita'])>50) {
            echo '<br><br> baca selengkapnya....';  
            } ?>
              <a href="#" class="continue">Continue ...</a></p>
             <div class="cleaner"></div>
          </div>
  <?php endforeach ?>
        