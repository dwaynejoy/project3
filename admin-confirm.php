<?php // Start the session
    $_SESSION['insertstatus'] = -1
?>
<?php
    include 'connection.php';
    if(isset($_POST['submit'])){ // Fetching variables of the form
        $heading = $_POST['heading'];
        $tripDate = $_POST['tripDate'];
        $duration = $_POST['duration'];
        $summary = $_POST['summary'];
        if($heading !=''){
            //Insert Query of SQL
            $query = "INSERT INTO tbl_trips(trips_Heading, trips_Trip_Date, trips_Duration, trips_Summary, trips_Active, trips_Create_Date, trips_Create_Admin) 
            values ('$heading', '$tripDate', '$duration', '$summary', 1, NOW(), 1)";
            $ver = mysqli_query($conn, $query);
            if(!$ver){
               $_Session['insertstauts'] = 0;
               die();     
            }else{
                $_Session['insertstauts'] = 1;
            }
        }
    }
?>
<div class="container">
    <div class="mainContent">
        <section>
            <h1>
                Admin - Confirm
            </h1>
            <hr>
        </section>
        <main>
        <?php
                if($_SESSION['insertstaus'] = 1){
                    echo "<p><h2>Data has added succesfully to DB</h2></p>";
                    echo "<p><a class='inlineAnchor' href='index.php?page=all-adventures'><h3>View All Adventures</h3></a></p>";
                }else{
                    echo "<p><h2>There was an error adding data to the DB</h2></p>";
                }
            ?>
        </main>
    </div>
    <footer>
    </footer>
</div>