<?php

require('../includes/head.php');
$page = 'ei';
?>
<!--VIEWMASTER (PHOTOS & ARROWS)-->
<div id="viewmaster">
    <!--    MENU-->
    <?php require('../includes/menu.php'); ?>
    <div id="viewer">
        <div id="backbutton" onclick="back(1)" ><img style="display:none" id="backarrow" class="vertical-align" src="../icons/arrow_left.png" height="50px"/></div>
        <div id="main_content">
            <div>ENKELE IDEE&Euml;N</div>
            <div class="intro">
                “Enkele ideeën” are documented ‘in between moments‘. The series of photographs gives an insight into Jesse's world, where new things are invented and re-invented every day.
                “Enkele ideeën” is about the origin of ideas, what might be or has been. The photographs are no illustrations of events, but notes about small things, experiments and actions that can lead to a grand idea or a way of thinking. They are registrations of a moment, of which the importance cannot be predicted.
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