<!DOCTYPE html>

<html lang="en">



<?php include('templates/navbar.php');  ?>

    <section class="gallery min-vh-100" style="background-image: url('img/gallery.jpg')">
        <div class="container-lg">
            <div class="row gy-4 row-cols-1 row-cols-sm-2 row-cols-md-3">
                <div class="col">
                    <img src="img/f1-mercedes.jpg" alt="" class="gallery-item">
                </div>
                <div class="col">
                    <img src="img/f1-redbull.jpg" alt="" class="gallery-item">
                </div>
                <div class="col">
                    <img src="img/f1-mclaren.jpg" alt="" class="gallery-item">
                </div>
                <div class="col">
                    <img src="img/f1-bmw.jpg" alt="" class="gallery-item">
                </div>
                <div class="col">
                    <img src="img/f1-renault.jpg" alt="" class="gallery-item">
                </div>
                <div class="col">
                    <img src="img/f1-jordan.jpg" alt="" class="gallery-item">
                </div>
                <div class="col">
                    <img src="img/f1-williams.jpg" alt="" class="gallery-item">
                </div>
                <div class="col">
                    <img src="img/f1-ferrari.jpg" alt="" class="gallery-item">
                </div>
                <div class="col">
                    <img src="img/f1-astonmartin.jpg" alt="" class="gallery-item">
                </div>
            </div>
        </div>
    </section>



    <!-- Modal -->
    <div class="modal fade" id="gallery-modal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-body">
                    <img src="" class="modal-img" alt="">
                </div>

            </div>
        </div>
    </div>

     <!-- JS import -->
     <script src="js/modal.js "></script>
    <script src="js/cssLoad.js "></script>
    <script src="js/hamburger.js "></script>
    <script src="js/doubleImg.js "></script>

    <?php include('templates/footer.php');  ?>

   

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>