<!DOCTYPE html>

<html lang="en">



<?php include('templates/navbar.php');  ?>


    <div class="parallax-first" style="background-image: url('img/art3.jpg')">
        <div class="intro-text">
            <h1 class="page-name rotate">Webové technológie <br>
            </h1>
            <h5 class="rotate" style="text-align: center; padding-top: 20px; font-size: 40px;">Erik Macejko</h5>
            <div style="text-align: center; padding-top: 20px;">

                <a class="rotate" href="#link"><img class="rotate" src="img/arrow.png" height="50px" alt=""></a>

            </div>
        </div>
    </div>

    <div class="text" style="height:auto;">
        <h1 style="text-align: center; padding-top:  50px;" id="link">1.krok</h1>
        <p class="text-p text-700px"> Lorem ipsum dolor sit amet consectetur adipisicing elit. Animi, pariatur harum? Dolorum inventore ipsum ex officiis, 
            at suscipit fugit doloremque. Necessitatibus obcaecati odio cumque aspernatur magnam nihil minus maiores officia!
            <a href="zmena.html">Zmena</a>.
        </p>
    </div>

    <div class="parallax-second" style="background-image: url('img/art1.jpg')">

    </div>
    <div class="text" style="height:auto;">
        <h1 style="text-align: center; padding-top:  50px;">2.krok</h1>
        <p class="text-p">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptate, itaque dicta obcaecati numquam doloribus illum, tempore libero, 
            recusandae cumque deleniti commodi officiis impedit molestiae sunt magni at! Debitis, facilis eveniet.
        </p>
    </div>

    <div class="parallax-third" style="background-image: url('img/art4.jpg')">

    </div>
    <div class="text" style="height:auto;">
        <h1 style="text-align: center; padding-top:  50px;">3.krok</h1>
        <p class="text-p"> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempore sint ipsum laborum a 
            facere necessitatibus sapiente exercitationem consequuntur? Asperiores, nostrum eaque. Ipsam iste quasi rerum vitae enim molestias cumque voluptatem.
        </p>
    </div>


    <div class="parallax-fourth" style="background-image: url('img/art2.jpg')">

    </div>
    <div class="text" style="height:auto;">
        <h1 style="text-align: center; padding-top:  50px;">4.krok</h1>
        <p class="text-p"> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempore sint ipsum laborum a 
            facere necessitatibus sapiente exercitationem consequuntur? Asperiores, nostrum eaque. Ipsam iste quasi rerum vitae enim molestias cumque voluptatem. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempore sint ipsum laborum a 
            facere necessitatibus sapiente exercitationem consequuntur? Asperiores, nostrum eaque. Ipsam iste quasi rerum vitae enim molestias cumque voluptatem. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempore sint ipsum laborum a 
            facere necessitatibus sapiente exercitationem consequuntur? Asperiores, nostrum eaque. Ipsam iste quasi rerum vitae enim molestias cumque voluptatem. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Tempore sint ipsum laborum a 
            facere necessitatibus sapiente exercitationem consequuntur? Asperiores, nostrum eaque. Ipsam iste quasi rerum vitae enim molestias cumque voluptatem.
        </p>
    </div>
    <div class="parallax-fifth" style="background-image: url('img/art5.jpg')">

        <div class="container-fluid" id="custom-container">
            <div class="d-flex flex-row justify-content-center align-items-center" id="buttons-custom">
                <button type="button " class="btn btn-success " onclick="resizeMyGallery() ">Zväčšiť</button>
                <button type="button " class="btn btn-danger " onclick="resetMyGallery() ">Zmenšiť</button>
            </div>
            <div class="d-flex flex-row justify-content-center align-items-center" style="height: 100px;">
                <div class="p-2">
                    <img src="img/bootstrapgallery.png" id="gallery-review" style="width: 500px;">
                </div>

            </div>


        </div>

    </div>


    <?php include('templates/footer.php');  ?>

</body>

</html>