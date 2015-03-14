<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>

   
    <?php
    $array_js_need = array( "docs" ) ;
//    if (array_search( $start_url , $array_js_need) > 0   ) {  
    if ( $start_url === "dashboard" ) {  
    ?>
    <!-- Morris Charts JavaScript -->
    <script src="<?= RESOURCES_FOLDER ;?>bower_components/raphael/raphael-min.js"></script>
    <script src="<?= RESOURCES_FOLDER ;?>bower_components/morrisjs/morris.min.js"></script>
    <script src="<?= JS_FOLDER ;?>morris-data.js"></script>
    <?php
    }
    ?>
    <!-- Custom Theme JavaScript -->
    <script src="<?= JS_FOLDER ;?>sb-admin-2.js"></script>
    
    <p style="text-align: center"><strong>&copy; 2015</strong></p>
</body>

</html>