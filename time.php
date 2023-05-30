<?php
require_once 'header.php';
?>
<!-- Note that by  we are present inside body with div class container since we include header and footer -->
<div class="mt-5">
   <h3>Clock</h3>
   <div class="date text-center mt-40">
      <h1 id="currentDate" class="w-70" style="font-family: monospace !important;">Today : ---</h1>
      <h1 id="currentDay" class="w-70" style="font-family: monospace !important;"> ------ </h1>
   </div>
   <div class="timearea text-center mt-100">
      <h1 id="currentTime" class="w-70">--::--</h1>
      <audio src="music/clock.wav" autoplay loop></audio>
   </div>
</div>

<script src="js/time.js?v<?php echo rand(); ?>"></script>


<?php
require_once 'footer.php';
?>