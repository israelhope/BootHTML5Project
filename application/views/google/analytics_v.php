<?php if (!empty($SYS_gaAccount)): ?>
<script>
    var _gaq=[['_setAccount','<?= $SYS_gaAccount?>'],['_trackPageview']];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
    g.src='//www.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g,s)}(document,'script'));
</script>
<?php endif ?>