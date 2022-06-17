<?php
    include('dbConnect.php');

    $Meno = $Priezvisko = $Vek = $Pribuzenstvo = $Pohlavie = $FarbaVlasov =  ''; 
    $errors = array('Meno'=>'', 'Priezvisko'=>'', 'Vek'=>'', 'Pribuzenstvo'=>'','Pohlavie'=>'','FarbaVlasov'=>'');  //ked sa php nastartuje tak nevyhodi hned error
    
    $post = isset($_POST['submit']) ? true : false;
    if($post){

          
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

        $id = intval($_POST['id']);

        $sqlSelect = "SELECT * FROM rodina WHERE id=$id";
        $sqlResult = mysqli_query($conn, $sqlSelect);
        $rodina = mysqli_fetch_all($sqlResult, MYSQLI_ASSOC);

        $Meno = $_POST['Meno'] ? mysqli_real_escape_string($conn, $_POST['Meno']) : $rodina[0]['Meno'];
        $Priezvisko = $_POST['Priezvisko'] ? mysqli_real_escape_string($conn, $_POST['Priezvisko']) : $rodina[0]['Priezvisko'];
        $Vek = $_POST['Vek'] ? mysqli_real_escape_string($conn, $_POST['Vek']) : $rodina[0]['Vek'];
        $Pribuzenstvo = $_POST['Pribuzenstvo'] ? mysqli_real_escape_string($conn, $_POST['Pribuzenstvo']) : $rodina[0]['Pribuzenstvo'];
        $Pohlavie = $_POST['Pohlavie'] ? mysqli_real_escape_string($conn, $_POST['Pohlavie']) : $rodina[0]['Pohlavie'];
        $FarbaVlasov = $_POST['FarbaVlasov'] ? mysqli_real_escape_string($conn, $_POST['FarbaVlasov']) : $rodina[0]['FarbaVlasov'];    
        // vytvorenie SQL
        $sql = "UPDATE rodina SET Meno='$Meno',
                                  Priezvisko='$Priezvisko',
                                  Vek='$Vek', 
                                  Pribuzenstvo='$Pribuzenstvo', 
                                  Pohlavie='$Pohlavie', 
                                  FarbaVlasov='$FarbaVlasov' 
                            WHERE id= $id";

        // ulozenie do DB
        if(mysqli_query($conn, $sql)){
            // success
            header('Location: vypisUdajov.php');
        } else {
            echo 'query error: ' . mysqli_error($conn);
        }  
      
    }
?>