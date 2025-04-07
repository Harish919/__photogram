<?php

include '_libs/load.php';

?>


<head>
    <? load_template('_head'); ?>
</head>

<body>
    <? load_template('_darkmode'); ?>
    <header>
        <?php load_template('_header'); ?>
    </header>

    <main>
        <? load_template('_signup'); ?>
    </main>

    <? // load_template('_footer'); 
    ?>

    <script src="/app/assets/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>