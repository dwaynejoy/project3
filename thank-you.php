<?php
    include 'connection.php';
    if(isset($_POST['submit'])){ // Fetching variables of the form
        $email1 = $_POST['email'];
        $result = $_POST['location'];
        $location_explode = explode (',', $result);
        $tripDate1 = $_POST['tripDate'];
        if($email1 !=''){
            //Insert Query of SQL
            $query = "INSERT INTO tbl_bookings (bookings_Email, bookings_Trip_Date, bookings_Date_Created, bookings_Trip_ID, bookings_Guest_ID) 
            values ('$email1', '$tripDate1', NOW(), '$location_explode[0]', 1)";
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
                <?php
                    if($_SESSION['insertstaus'] = 1){
                        echo "
                            <section>
                                <h1>
                                    Thank You
                                </h1>
                                <hr>
                            </section>
                            <main>
                                <p>";
                        echo "Thank you: " . $email1 . "</p>";
                        echo "We will contact you about the:<br>";
                        echo $location_explode[1] . " trip on the " . $tripDate1;
                    }else{
                        echo "<p><h2>There was an error adding data to the DB</h2></p>";
                    }
                ?>
            </main>
        </div>
    </div>