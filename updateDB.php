<!DOCTYPE html>

<html lang="en">

<?php include('templates/navbar.php');  ?>


<section class="input-formular" style=" background-image: url('img/art4.jpg');">

<div class="form-style" style="overflow: auto;">
    
    <form action="updateDBScript.php" method="POST">
        <div>
            <div class="h4">
                <h4 style="padding: 20px;">Úprava údajov</h4>
            </div>

            <div style="display: block;"> 
                <input type="hidden" name= "id" value= "<?php echo $_GET['edit']?>" >          
                <input class="insertInfo" type="text" name= "Meno" placeholder="Meno" value= "<?php echo $Meno ?? '' ?>" >      
            </div> 

            <div style="display: block;">
                <input class="insertInfo" type="text" name= "Priezvisko" placeholder="Priezvisko" value= "<?php echo $Priezvisko  ?? '' ?>"  >               
            </div> 

            <div style="display: block;">
                <input class="insertInfo" type="text" name= "Vek" placeholder="Vek" value= "<?php echo $Vek ?? '' ?>" >
            </div>

            <div style="display: block;">
                <input class="insertInfo" type="text" name= "Pribuzenstvo" placeholder="Príbuzenstvo" value= "<?php echo $Pribuzenstvo ?? '' ?>">             
            </div>
            
            <div style="display: block;">
                <input class="insertInfo" type="text" name= "Pohlavie" placeholder="Pohlavie" value= "<?php echo $Pohlavie ?? '' ?>" >             
            </div>

            <div style="display: block;">
                <input class="insertInfo" type="text" name= "FarbaVlasov" placeholder="Farba vlasov"  value= "<?php echo $FarbaVlasov ?? '' ?>">         
            </div>
           
            <div style="display: flex; margin-top: 15px; justify-content: center;">
                <input type="submit" name="submit" value="Upraviť údaje" type="text" name="" id="inputToDB">       
            </div>  
                 
        <div>
  
   </form>   
   <div>
</section>



<?php include('templates/footer.php');  ?>