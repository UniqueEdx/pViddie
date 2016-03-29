<?php 
/*      jetScholar.com           
*   Author : MJZ                
*   File   : banner.php         
*   Dir    : public             
*   created: 03/02/16           
*   Amended: 12/02/16 07:36     
*   Using Sublime Text			
*/

?>


    <div id="nav">
        <a href="https://www.jetscholar.com">
            <img src="images/jetScholar_logo.png" class="logo"/>
        </a>
        <a href="logout.php" class="nav_links">Sign Out</a>      
        <a href="help.php" class="nav_links">Help</a>
        <a href="mastermind.php" id="mastermind_link">Become a MasterMind</a>
        <a href="profile.php?user=<?php echo $user->data()->firstname;?>" id="mastermind_link"><?php echo $user->data()->firstname; ?></a>
    </div>
