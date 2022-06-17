<?php
    
    
    include('dbConnect.php');

    $RodneCislo = $Meno = $Priezvisko = $Vek = $Pribuzenstvo = $Pohlavie = $FarbaVlasov =  ''; 
   $errors = array('RodneCislo' =>'', 'Meno'=>'', 'Priezvisko'=>'',  'Vek'=>'', 'Pribuzenstvo'=>'','Pohlavie'=>'','FarbaVlasov'=>'');  //ked sa php nastartuje tak nevyhodi hned error
    
    if(isset($_POST['submit'])){

    // skontroluj RodneCislo
     if(empty($_POST['RodneCislo'])) {
        $errors['RodneCislo'] = 'Toto je povinné pole';
    }else {
        $RodneCislo = $_POST['RodneCislo'];
        if(!preg_match("/^[0-9]+$/" , $RodneCislo)){
            $errors['RodneCislo'] = 'Nesprávny formát.';
        }
    }

    //skontroluje ci sa tam nachadza to dane RodneCislo, ak ano nedovoli vytvorit uzivatela
    $check_duplicate = "SELECT RodneCislo FROM rodina WHERE RodneCislo=$RodneCislo";   
    $result = mysqli_query($conn, $check_duplicate);
   
        if(mysqli_num_rows($result) > 0){
            $errors['RodneCislo'] = 'Uživateľ s týmto rodným číslom už existuje';
        }
       
    // skontroluj Meno
    if(empty($_POST['Meno'])) {
        $errors['Meno'] = 'Toto je povinné pole';
    }else {
        $Meno = $_POST['Meno'];
        if(!preg_match('/^[ľščťžýáíéúôäňa-zA-Z\s]+$/', $Meno)){
            $errors['Meno'] = 'Meno môže obsahovať len veľké a malé písmena';
        }
    }

    // skontroluj Priezvisko
    if(empty($_POST['Priezvisko'])) {
        $errors['Priezvisko'] = 'Toto je povinné pole';
    }else {
        $Priezvisko = $_POST['Priezvisko'];
        if(!preg_match('/^[ľščťžýáíéúôäňa-zA-Z\s]+$/' , $Priezvisko)){
            $errors['Priezvisko'] = 'Priezvisko môže obsahovať len veľké a malé písmena';
        }
    }

    // skontroluj Vek
    if(empty($_POST['Vek'])) {
        $errors['Vek'] = 'Toto je povinné pole';
    }else {
        $Vek = $_POST['Vek'];
        if(!preg_match("/^[0-9]+$/", $Vek)){
            $errors['Vek'] = 'Vek môže obsahovať len číslice v rozsahu 0 až 121';
        }
    }

    // skontroluj Pribuzenstvo
    if(empty($_POST['Pribuzenstvo'])) {
        $errors['Pribuzenstvo'] = 'Toto je povinné pole';
    }else {
        $Pribuzenstvo = $_POST['Pribuzenstvo'];
        if(!preg_match('/^[ľščťžýáíéúôäňa-zA-z\s]+$/', $Pribuzenstvo)){
            $errors['Pribuzenstvo'] = 'Príbuzenstvo môže obsahovať len veľké a malé písmena';
        }
    }

    // skontroluj Pohlavie
    if(empty($_POST['Pohlavie'])) {
        $errors['Pohlavie'] = 'Toto je povinné pole';
    }else {
        $Pohlavie = $_POST['Pohlavie'];
        if(!preg_match('/^[ľščťžýáíéúôäňa-zA-z\s]+$/', $Pohlavie)){
            $errors['Pohlavie'] = 'Pohlavie môže obsahovať len veľké a malé písmena';
        }
    }

    // skontroluj FarbaVlasov
    if(empty($_POST['FarbaVlasov'])) {
        $errors['FarbaVlasov'] = 'Toto je povinné pole';
    }else {
        $FarbaVlasov = $_POST['FarbaVlasov'];
        if(!preg_match('/^[ľščťžýáíéúôäňa-zA-z\s]+$/', $FarbaVlasov)){
            $errors['FarbaVlasov'] = 'Farba vlasov môže obsahovať len veľké a malé písmena';
        }
    }

    if(array_filter($errors)){
       // echo 'Chyba vo formulary';
    }else{

        $RodneCislo = mysqli_real_escape_string($conn, $_POST['RodneCislo']);     
        $Meno = mysqli_real_escape_string($conn, $_POST['Meno']);
        $Priezvisko = mysqli_real_escape_string($conn, $_POST['Priezvisko']);
        $Vek = mysqli_real_escape_string($conn, $_POST['Vek']);
        $Pribuzenstvo = mysqli_real_escape_string($conn, $_POST['Pribuzenstvo']);
        $Pohlavie = mysqli_real_escape_string($conn, $_POST['Pohlavie']);
        $FarbaVlasov = mysqli_real_escape_string($conn, $_POST['FarbaVlasov']);        

        // vytvorenie SQL
        $sql = "INSERT INTO rodina(RodneCislo, Meno,Priezvisko,Vek,Pribuzenstvo, Pohlavie, FarbaVlasov) VALUES('$RodneCislo', '$Meno', '$Priezvisko', '$Vek', '$Pribuzenstvo', '$Pohlavie', '$FarbaVlasov')";

        // ulozenie do DB
        if(mysqli_query($conn, $sql)){
            // success
            header('Location: vypisUdajov.php');
        } else {
            echo 'query error: ' . mysqli_error($conn);
        }      
    }
 
    }
?>



<!DOCTYPE html>
<html lang="en">



<?php include('templates/navbar.php');  ?>


<section class="input-formular" style=" background-image: url('img/art4.jpg');">

<div class="form-style" style="">
    
    <form action="insert.php" method="POST">
        <div>
            <div class="h4">
                <h4 style="padding: 20px;">Registračný formulár</h4>          
            </div>

            <div style="display: block;">
                <input class="insertInfo" type="text" name= "RodneCislo" minlength="9" maxlength="10" placeholder="RodneCislo" value= "<?php echo $RodneCislo ?>"  >               
            </div> 
            <span> <?php echo $errors['RodneCislo']; ?>  </span>                  
            
            <div style="display: block;">
                <input class="insertInfo" type="text" name= "Meno" placeholder="Meno" value= "<?php echo $Meno ?>" >      
            </div> 
            <span> <?php echo $errors['Meno']; ?>  </span>

            <div style="display: block;">
                <input class="insertInfo" type="text" name= "Priezvisko" placeholder="Priezvisko " value= "<?php echo $Priezvisko ?>"  >               
            </div> 
            <span> <?php echo $errors['Priezvisko']; ?>  </span>    

            <div style="display: block;">
                <input class="insertInfo" type="text" name= "Vek" min="0" max="121" placeholder="Vek" value= "<?php echo $Vek ?>" >
            </div>
            <span> <?php echo $errors['Vek']; ?>  </span> 

            <div style="display: block;">
                <input class="insertInfo" type="text" name= "Pribuzenstvo" placeholder="Príbuzenstvo" value= "<?php echo $Pribuzenstvo ?>">             
            </div>
            <span> <?php echo $errors['Pribuzenstvo']; ?>  </span>
            
            <div style="display: block;">
                <input class="insertInfo" type="text" name= "Pohlavie" placeholder="Pohlavie" value= "<?php echo $Pohlavie ?>" >             
            </div>
            <span> <?php echo $errors['Pohlavie']; ?>  </span>  

            <div style="display: block;">
                <input class="insertInfo" type="text" name= "FarbaVlasov" placeholder="Farba vlasov"  value= "<?php echo $FarbaVlasov ?>">         
            </div>
            <span> <?php echo $errors['FarbaVlasov']; ?>  </span>  
           
            <div style="display: flex; margin-top: 15px; justify-content: center;">
                <input type="submit" name="submit" value="Odoslať" type="text" name="" id="inputToDB">
               
            </div>  
                 
        <div>
  
   </form>   
   <div>
</section>



<?php include('templates/footer.php');  ?>

    
</body>
</html>