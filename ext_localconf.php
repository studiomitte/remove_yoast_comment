<?php

(static function () {

    $GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_pagerenderer.php']['render-postProcess'][]
        =\StudioMitte\RemoveYoastComment\CommentRemoval::class . '->render';
})();
