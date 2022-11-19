        <header class="headerBar">
            <input type="image" src="Images/hamburger.png" alt="menu button" class="button" id="menuButton">
                Halifax Canoe and Kayak
            <input type="image" src="Images/paddle-white.png" alt="admin menue" class="button adminMenu" id="headerRight" >
        </header>
        <div id="headerGradient"></div>
        <nav id="toggleMenu">
            <ul>
                <li><a href="index.php?page=mainContent">Home</a></li>
                <li><a href="index.php?page=book">Book Trip</a></li>
                <li><a href="index.php?page=admin-add">About</a></li>
                <li><a href="index.php?page=admin-menu" id="admin_menu">Admin Menu</a></li>
            </ul>
        </nav>
            <form id="adminLogin" action="index.php?page=admin-menu" method="POST">
                <input type="text" name="username" id="username-field" value="<?php $username;?>" class="login-form-field" placeholder="Username" required>
                <input type="password" name="password" id="password-field" value="<?php $pword;?>" class="login-form-field" placeholder="Password" required>
                <input type="submit" name="login" value="Login" id="login-form-submit">
            </form>