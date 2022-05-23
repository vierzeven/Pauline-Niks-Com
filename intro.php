<?php

$page = isset($_GET['page']) ? $_GET['page'] : 'overzichten';

switch ($page) {
    case 'afm':         $number_of_pics = 11; $project = 1; $path = 'images/afm/A_FREE_MAN_0';                    break;
    case 'ei':          $number_of_pics = 17; $project = 2; $path = 'images/ei/ENKELE IDEEEN_0';                  break;
    case 'iajass':      $number_of_pics = 24; $project = 3; $path = 'images/iajass/I_AM_JUST_A_SCENIC_SPOT_0';    break;
    case 'overzichten': $number_of_pics = 3;  $project = 4; $path = 'images/overzichten/overzichten0';            break;
    case 'twgnb':       $number_of_pics = 43; $project = 5; $path = 'images/twgnb/TWGNB0';                        break;
    default: header('Location: index.php?page=overzichten');
}

require('head.php');
require('menu.php');
?>

<div id="main_content">
    <div id="introtext"></div>
    <div id="intro_arrow">
        <a href="index.php?page=<?php echo $page; ?>">
            <!-- <img src="icons/continue.jpg" alt="Continue to the photos..."> -->
            <p>&#8594;</p>
        </a>
    </div>

</div>

<?php
include ('footer.html');
?>


</body>

<script src="functions.js"></script>

<script>
    // When page has finished loading, call next() function to load picture plus text
    document.addEventListener('DOMContentLoaded', function() {
        intro(<?php echo $project; ?>)
    }, false);
</script>

</html>




