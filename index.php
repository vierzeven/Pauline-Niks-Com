<?php

$page = isset($_GET['page']) ? $_GET['page'] : 'overzichten';

switch ($page) {
    case 'afm':         $number_of_pics = 11; $project = 1; $path = 'images/afm/A_FREE_MAN_0';                    break;
    case 'ei':          $number_of_pics = 17; $project = 2; $path = 'images/ei/ENKELE IDEEEN_0';                  break;
    case 'iajass':      $number_of_pics = 20; $project = 3; $path = 'images/iajass/I_AM_JUST_A_SCENIC_SPOT_0';    break;
    case 'overzichten': $number_of_pics = 3;  $project = 4; $path = 'images/overzichten/overzichten0';            break;
    case 'twgnb':       $number_of_pics = 43; $project = 5; $path = 'images/twgnb/TWGNB0';                        break;
    default: header('Location: index.php?page=overzichten');
}

require('head.php');
require('menu.php');
?>

<div id="project_title"></div>

<div id="arrows">
    <div id="backbutton" onclick="back(<?php echo $number_of_pics . ',' . $project; ?>)" >
        <img id="backarrow" class="vertical-align" src="icons/arrow_left.png" />
    </div>

    <div id="nextbutton" onclick="next(<?php echo $number_of_pics . ',' . $project; ?>)" >
        <img id="nextarrow" class="vertical-align" src="icons/arrow_right.png" />
    </div>
</div>

<div id="main_content">
    <img id="content" class="0" src="<?php echo $path; ?>00.jpg" />
</div>

<div id="text"></div>

<?php include ('footer.html'); ?>

</body>

<script src="functions.js"></script>

<script>
    // Add swipe functionality
    //let current_photo = document.getElementById('content');
    //let startx, endx;
    //current_photo.addEventListener('touchstart', function(startevent) {
    //    startx = startevent.touches[0].clientX;
    //
    //}, true);
    //current_photo.addEventListener('touchmove', function(moveevent) {
    //    endx = event.changedTouches[0].clientX;
    //
    //}, true);
    //current_photo.addEventListener('touchend', function(endevent) {
    //    event.preventDefault();
    //    event.stopPropagation();
    //    endx = event.changedTouches[0].clientX;
    //    let verschil = startx - endx;
    //    if (verschil > 100) {
    //        next(<?php //echo $number_of_pics . ',' . $project; ?>//);
    //    } else if (verschil < -100) {
    //        back(<?php //echo $number_of_pics . ',' . $project; ?>//)
    //    }
    //}, true);
</script>

<script>
    // function fixImageSize() {
    //     let content = document.getElementById('content');
    //     let main_content = document.getElementById('main_content');
    //     let original_width = content.clientWidth;
    //
    //     if (content.clientWidth < main_content.clientWidth) {
    //         content.style.width = main_content.clientWidth + "px";
    //     }
    //
    //     if (content.clientHeight > main_content.clientHeight) {
    //         content.style.width = original_width + "px";
    //         content.style.height = main_content.clientHeight + "px";
    //     }
    // }

    // When page has finished loading, call next() function to load picture plus text
    document.addEventListener('DOMContentLoaded', function() {
        next(<?php echo $number_of_pics . ',' . $project; ?>)
    }, false);
</script>


</html>