<?php session_start(); ?>
        
        <!-- NAV-BAR-STARTS-HERE -->

        <nav class="side-bar close">
            <header>
                <div class="logo-name flex">
                    <span class="logo flex">
                        <!-- <img src="img/logo2a.jpg" alt="Logo"> -->
                        <span class="u"><?php echo "_";?> H</span><span class="z">F</span><span class="s">A</span>
                    </span>
                    <span class="flex">
                        
                        <span class="text hidden-text">HouseFinderApp</span>
                        <div class="toggleIcon flex closedIcon"><i class="fa fa-angle-left icon"></i></div>
                    </span>
                   
                </div>

                <div class="menu-bar flex">
                    <div class="menu-links">
                        <ul>
                            <!-- <li class="search-box flex">
                           
                                    <i class="fa fa fa-search"></i>
                                    <input type="search" name="search-bar" id="search-bar" placeholder="Search...">
                             
                            </li> -->
                           
                            <li class="nav-links flex">
                                <a href="accueil_admin.php " >
                                    <i class="bx bx-home"></i>
                                    <span class="text hidden-text menu">Accueil</span>
                               </a> 
                            </li>

                            <li class="nav-links flex">
                                <a href="parcelle.php">
                                    <i class="bx bx-cart"></i>
                                    <span class=" text hidden-text menu">Nos parcelles</span>
                               </a> 
                            </li>
                            <li class="nav-links flex">
                                <a href="appart.php">
                                    <i class="bx bx-store-alt"></i>
                                    <span class=" text hidden-text menu">Nos appartements</span>
                               </a> 
                            </li>
                            <li class="nav-links flex">
                                <a href="parcelle_action.php">
                                    <i class="bx bx-user"></i>
                                    <span class=" text hidden-text menu">Action sur parcelle</span>
                               </a> 
                            </li>
                            <li class="nav-links flex">
                                <a href="appart_action.php">
                                    <i class="bx bx-user"></i>
                                    <span class=" text hidden-text menu">Action sur appartement</span>
                               </a> 
                            </li>
                            

                            <li class="nav-links flex">
                                <a href="contrat.php">
                                    <i class="bx bx-laptop"></i>
                                    <span class=" text hidden-text menu">contrat</span>
                               </a> 
                            </li>
                        </ul>
                    </div>

                    <div class="bottom-menu">
                        <li class="logout">
                            <a href="deconnect.php">
                                <i class="bx bx-log-out"></i>
                                <span class=" text hidden-text menu">Logout</span>
                           </a> 
                        </li>

                        <li class="settings">
                            <a href="#">
                                <i class="bx bx-cog"></i>
                                <span class=" text hidden-text menu">Parametres</span>
                           </a> 
                        </li>
                    </div>
                </div>
            </header>
        </nav>

        <!-- NAV-BAR-ENDS-HERE -->

        <div class="main">
             <!-- TOP-BAR STARTS HERE -->
            <div class="top-bar flex">
                <div class="date-time-tile flex">
                    <div class="date"></div>
                    <div class="app-title"> <span class="s">H</span>ouse <span class="s">F</span>inder <span class="s">A</span>pp</div>
                </div>
                
                
                <div class="user-info"> 
                    <div class="picture"></div>
                    <div class="name-role-notifications flex">
                        <div class="notifications flex"> <i class="bx bx-bell"> </i> <span class="notifications-count flex">7</span></div>
                        <div class="name-role-picture flex">
                            <div class="picture flex"><img src="img/cvimg.JPG" alt=""></div>
                            <div class="name-role flex">
                                <span class="name"><?php echo $_SESSION['nom']?></span>
                                <div class="role-description flex"><span class="role"><a href="acount.php">Administration </a><i class="fa fas fa-angle-down discription"></i></span></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
            <!-- TOP-BAR ENDS HERE -->
            
        </div>
    
        

        