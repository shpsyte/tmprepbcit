<?php

/*
after the following section
the $page variable has as its value
the name of the page
eg: if script filename is 'partners.php'
then $page = 'partners'
*/

$scriptname = explode('/', $_SERVER["SCRIPT_NAME"]);
$page = ereg_replace(".php$", "", trim($scriptname[count($scriptname) - 1]));



// check wich page we are on 
// display an appropriate version of each navigation element

if ($page == "partners")
{
    // display the label as blanked out
    echo '<p class="navcurrent">Partners</p>';
} else
{
    // display a functioning hyperlink
    echo '<p><a href="partners.php">Partners</a></p>';
}

if ($page == "stuff")
{
    // display the label as blanked out
    echo '<p class="navcurrent">Stuff</p>';
} else
{
    // display a functioning hyperlink
    echo '<p><a href="stuff.php">Stuff</a></p>';
}

if ($page == "contact")
{
    // display the label as blanked out
    echo '<p class="navcurrent">Contact</p>';
} else
{
    // display a functioning hyperlink
    echo '<p><a href="contact.php">Contact</a></p>';
}



if ($page == "thanks")
{
    // display the label as blanked out
    echo '<p class="navcurrent">Thanks</p>';
} else
{
    // display a functioning hyperlink
    echo '<p><a href="thanks.php">Thanks</a></p>';
}


if ($page == "index")
{
    // display the label as blanked out
    echo '<p class="navcurrent">Home</p>';
} else
{
    // display a functioning hyperlink
    echo '<p><a href="index.php">Home</a></p>';
}


if ($page == "about")
{
    // display the label as blanked out
    echo '<p class="navcurrent">About</p>';
} else
{
    // display a functioning hyperlink
    echo '<p><a href="about.php">About</a></p>';
}





?>
