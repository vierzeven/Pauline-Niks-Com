<?php

require('../includes/head.php');
$page = 'iajass';
?>
<!--VIEWMASTER (PHOTOS & ARROWS)-->
<div id="viewmaster">
    <!--    MENU-->
    <?php require('../includes/menu.php'); ?>
    <div id="viewer">
        <div id="backbutton" onclick="back(1)" ><img style="display:none" id="backarrow" class="vertical-align" src="../icons/arrow_left.png" height="50px"/></div>
        <div id="main_content">
            <div>I AM JUST A SCENIC SPOT</div>
            <div class="intro">
                In her most recent project “I am just a scenic spot” Pauline wants to make the observer doubt reality. The project is about copied architecture in China. The photographs are taken with the same aesthetic standards used in postcards. The landmark seems to be the only subject of importance in the photo. In this way she totally denies any context in which the landmarks might be situated. By presenting them like this on postcards Pauline creates a new identity for these landmarks that is totally convincing. This new identity is reinforced by the way in which she displays them: in a postcard mill. A postcard as evidence of the existence of a place or as a way for people to show to their family that they really visited the place. Pauline uses the same evidence that is always associated with photography and the way we accept it, as a representation of reality.
            </div>
            <div class="intro"><a href="../pages/<?php echo $page; ?>.php">==></a></div>
        </div>
        <div id="nextbutton" onclick="next(1)" ><img style="display:none" id="nextarrow" class="vertical-align" src="../icons/arrow_right.png" height="50px"/></div>
    </div>
    <div id="text"></div>
</div>
</body>
<script src="../javascript/afm_viewer.js"></script>
</html>