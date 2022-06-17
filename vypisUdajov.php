<?php 

    include('dbConnect.php');

//query pre vsetkych ucastnikov

$sql = 'SELECT * FROM rodina ';

// query, kt. zobrazi vysledok SELECTu $sql

$result = mysqli_query($conn, $sql);

//fetch trhe resulting rows as an array
$rodina = mysqli_fetch_all($result, MYSQLI_ASSOC);

//free result from memory
mysqli_free_result($result);

//close the connection to Mysql

mysqli_close($conn);    

?>


<!DOCTYPE html>

<html lang="en">

<?php include('templates/navbar.php');  ?>

<div class="div-for-table" style="background-image: url('img/art4.jpg');">

    <table class="db-table"  id="myTable">
        <thead>        
            <tr style="padding: 18px;">      
                  
                <th>Meno</th>
                <th>Vek</th>
                <th>Príbuzenstvo</th>
                <th>Pohlavie</th>
                <th>Farba vlasov</th>  
                <th></th>          
            </tr>              
        </thead>
        <tbody>       
            <?php  foreach($rodina as $rodina){  ?>
                <tr>  
                    <td>
                        <?php  echo htmlspecialchars($rodina['Meno']);   ?>
                        <?php  echo htmlspecialchars($rodina['Priezvisko']);  ?>
                    </td>
                    
                    <td>
                        <?php  echo htmlspecialchars($rodina['Vek']);  ?>
                    </td>
                    <td>
                        <?php  echo htmlspecialchars($rodina['Pribuzenstvo']);  ?>
                    </td>
                    <td>
                    <?php  echo htmlspecialchars($rodina['Pohlavie']);  ?>
                    </td>
                    <td>
                        <?php  echo htmlspecialchars($rodina['FarbaVlasov']);  ?>
                    </td>

                    <td>
                        <a href="updateDB.php?edit=<?php echo $rodina['id'];?> "><button style="color:white;" type="button" class="btn ">Upraviť</button> </a>  
                    </td>
                </tr>
            <?php  }  ?>

          
        </tbody>
    </table>

</div>

<?php include('templates/footer.php');  ?>

<script>
/**
 * Sorts a HTML table.
 * 
 * @param {HTMLTableElement} table The table to sort
 * @param {number} column The index of the column to sort
 * @param {boolean} asc Determines if the sorting will be in ascending
 */
function sortTableByColumn(table, column, asc = true) {
    const dirModifier = asc ? 1 : -1;
    const tBody = table.tBodies[0];
    const rows = Array.from(tBody.querySelectorAll("tr"));

    // Sort each row
    const sortedRows = rows.sort((a, b) => {
        const aColText = a.querySelector(`td:nth-child(${ column + 1 })`).textContent.trim();
        const bColText = b.querySelector(`td:nth-child(${ column + 1 })`).textContent.trim();

        return aColText > bColText ? (1 * dirModifier) : (-1 * dirModifier);
    });

    // Remove all existing TRs from the table
    while (tBody.firstChild) {
        tBody.removeChild(tBody.firstChild);
    }

    // Re-add the newly sorted rows
    tBody.append(...sortedRows);

    // Remember how the column is currently sorted
    table.querySelectorAll("th").forEach(th => th.classList.remove("th-sort-asc", "th-sort-desc"));
    table.querySelector(`th:nth-child(${ column + 1})`).classList.toggle("th-sort-asc", asc);
    table.querySelector(`th:nth-child(${ column + 1})`).classList.toggle("th-sort-desc", !asc);
}

document.querySelectorAll(".db-table th").forEach(headerCell => {
    headerCell.addEventListener("click", () => {
        const tableElement = headerCell.parentElement.parentElement.parentElement;
        const headerIndex = Array.prototype.indexOf.call(headerCell.parentElement.children, headerCell);
        const currentIsAscending = headerCell.classList.contains("th-sort-asc");

        sortTableByColumn(tableElement, headerIndex, !currentIsAscending);
    });
});



</script>

</body>
</html>