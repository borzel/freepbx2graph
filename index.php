<?php

header("Content-type: image/png");
passthru("./freepbx2graph |  unflatten -c 8 |  dot -Tpng:cairo");

?>
