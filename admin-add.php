<div class="container">
    <div class="mainContent">
        <section>
            <h1>
                Admin - Add Addventure
            </h1>
            <hr>
        </section>
        <main>
        <p>Input details bout the trip</p>
        <form action="index.php?page=admin-confirm" method="POST">
                <label for="heading">Heading</label>
                <input type="text" id="heading" name="heading" value="<?php $heading;?>" placeholder="heading" required><br>
                <label for="tripDate">Trip Date</label>
                <input type="date" id="tripDate" name="tripDate"  value="<?php $tripDate;?>" required><br>
                <label for="duration">Duration</label>
                <input type="text" id="duration" name="duration"  value="<?php $duration;?>" required><br>
                <label for="summary">Summary</label>
                <input type="text" id="summary" name="summary"  value="<?php $summary;?>" required><br>
                <input type="submit" name="submit" value="Submit">
        </form>
        </main>
    </div>
</div>