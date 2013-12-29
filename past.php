<?php
include 'functions.php';
top();
echo '<center><div class="page-other">Please note: Newest are at the bottom.<pre>';
echo file_get_contents('log');
echo '</div></pre></center>';
footer();