<div class="container">
    <div class="mainContent">
        <section>
            <h1>
                Book a Trip
            </h1>
            <hr>
        </section>
        <main>
            <?php
                $query = "SELECT trips_ID, trips_Heading, trips_Trip_Date, trips_Duration, trips_Summary FROM tbl_trips ORDER BY Trips_Trip_Date ASC";
                $result = mysqli_query($conn, $query); 
                
            ?>
        <p>Just Some Quick Details</p>
        <form action="index.php?page=thank-you" method="POST" >
                <label for="email">Email</label>
                <input type="text" id="email" name="email" value="<?php $email;?>" placeholder="me@me.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required><br>
                <label for="location">Location</label>
                <select id="location" name="location" value="<?php $location;?>" required>
                    <option value="" selected disabled hidden>Select</option>
                    <?php
                        while (($row1 = mysqli_fetch_array ( $result, MYSQLI_ASSOC)) != null ) {
                            echo '<option value="'.$row1['trips_ID'].','.$row1['trips_Heading'].'">'.$row1['trips_Heading'].'</option>';
                        }
                    ?>
                </select><br>
                <label for="tripDate">Trip Date</label>
                <input type="date" id="tripDate" name="tripDate"  value="<?php $tripDate;?>" required><br>
                <input type="submit" name="submit" value="Submit">
        </form>
        </main>
    </div>
    <footer>
    </footer>
</div>