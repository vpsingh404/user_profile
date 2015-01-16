
<ul class="header-menu horizontal-list">
    <li>
        <a class="header-menu-tab" href="#1"><span class="icon entypo-cog scnd-font-color"></span>Settings</a>
    </li>
    <li>
        <a class="header-menu-tab" href="update_profile_new.php"><span class="icon fontawesome-user scnd-font-color"></span>Account</a>
    </li>
    <!-- <li>
        <a class="header-menu-tab" href="#3"><span class="icon fontawesome-envelope scnd-font-color"></span>Messages</a>
        <a class="header-menu-number" href="#4">5</a>
    </li> -->
    <li>
        <a class="header-menu-tab" href="logout.php">Logout</a>
    </li>
</ul>
<div class="profile-menu">
    <p>Welcome to: <?php echo $_SESSION['session_user'] ?> <a href="#26"><span class="entypo-down-open scnd-font-color"></span></a></p>

    <div class="profile-picture small-profile-picture">
        <?php include 'call_user_img.php'  ?>
    </div>
</div>
<script src="../js/jquery-1.11.2.min.js"></script>