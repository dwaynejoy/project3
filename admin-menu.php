<?php
    // Start the session
    //session_start();
    $_SESSION["adminid"] = -1;
?>
<?php
    include 'connection.php';
    if(!empty($_POST['login'])){ // Fetching variables of the form which travels in URL
        $uname = $_POST['username'];
        $password = $_POST['password'];
        if(!empty($uname)){
            //select Query of SQL
            $sql = ("SELECT admin_ID FROM tbl_admin WHERE admin_User_Name = '{$uname}'  AND admin_Code = '{$password}'");
            $result = $conn -> query($sql);
            $row = $result -> fetch_array(MYSQLI_NUM);
            $_SESSION["adminid"] = $row[0];
           }
           else{
            $_SESSION["adminid"] = 0;
        }
    }
?>
<div class="container">
    <div class="mainContent">
        <?php
                if($_SESSION["adminid"] > 0){
                    echo "<section>
                    <h1>Admin-Menu</h1>
                    <hr>
                </section>
                <main>
                <p>
                <a class='inlineAnchor' href='index.php?page=admin-add'>Add Adventure</a></br>
                Edit Adventure</br?
                </p>
                ";
                }
                else{
                    echo "<section>
                    <h1>Invalid user name or password</h1>
                    <hr>
                </section>
                <main>";
                }
            ?>
        </main>
    </div>
</div>
