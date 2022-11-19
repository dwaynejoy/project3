<div class="container">
    <section>
        <div class="hero-image"></div>
            <div class="heroText">Come Experience<br> Canada</div>
        <h1>
            Upcoming Adventures
        </h1>
        <hr>
    </section>
    <main>
        <?php
            $query = "SELECT trips_Heading, trips_Trip_Date, trips_Duration, trips_Summary FROM tbl_trips";
            $result = mysqli_query($conn, $query); 
            while ($row1 = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                echo " <p>
                <ul class='contentBlurb'>
                    <li>
                        <h2>".$row1['trips_Heading']."</h2>
                    </li>
                    <li>
                        Date: ".$row1['trips_Trip_Date']."
                    </li>
                    <li>
                        Duration: ".$row1['trips_Duration']." days
                    </li>
                    <br>
                    <li>
                        <h3>Summary</h3>
                    </li>
                    <li>
                        ".$row1['trips_Summary']."
                    </li>
                </ul>
            </p>";
            }
        ?>
    </main>
    <footer>
    </footer>
</div>