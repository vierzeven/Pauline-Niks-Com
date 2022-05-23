<?php

require('../includes/head.php');
$page = 'twgnb';
?>
<!--VIEWMASTER (PHOTOS & ARROWS)-->
<div id="viewmaster">
    <!--    MENU-->
    <?php require('../includes/menu.php'); ?>
    <div id="viewer">
        <div id="backbutton" onclick="back(1)" ><img style="display:none" id="backarrow" class="vertical-align" src="../icons/arrow_left.png" height="50px"/></div>
        <div id="main_content">
            <div>THAT'S WHEN GOOD NEIGHBOURS BECOME...</div>
            <div class="intro">
                In the neighbourhood where I live the doors stay closed. Everybody seems to be comfortable with their life inside four walls. I really had to get used to this habit. This anonymous life in the city is miles away from the social cohesion in the village where I grew up. I decided to go and visit my neighbours. In contrast with the grey facades on the outside, in the living rooms the most vivid stories appeared.            </div>
            <div class="intro"><a href="../pages/<?php echo $page; ?>.php">==></a></div>
        </div>
        <div id="nextbutton" onclick="next(1)" ><img style="display:none" id="nextarrow" class="vertical-align" src="../icons/arrow_right.png" height="50px"/></div>
    </div>
    <div id="text"></div>
</div>
</body>
<script src="../javascript/afm_viewer.js"></script>
</html>