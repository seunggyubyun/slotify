<div id="navBarContainer">
    <nav class="navBar">

        <span role="link" tabindex = "0" onclick="openPage('index.php')" class="logo">
            <img src="assets/images/icons/logo.png">
        </span>

         <div class="group">

             <div class="navItem">
                 <span role="link" tabindex = "0" onclick="openPage('search.php')" class="navItemLink">Search
                     <img src="assets/images/icons/search.png" class="icon" alt="search">
                 </span>
             </div>

         </div>

         <div class="group">
             <div class="navItem">
                 <span role="link" tabindex = "0" onclick="openPage('browse.php')">Browse</span>
             </div>

             <div class="navItem">
                 <span role="link" tabindex = "0" onclick="openPage('yourMusic.php')">Your music</span>
             </div>

             <div class="navItem">
                 <span role="link" tabindex = "0" onclick="openPage('settings.php')"><?php echo $userLoggedIn->getFirstAndLastName(); ?></span>
             </div>
         </div>
    </nav>

</div>
