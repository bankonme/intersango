<?php
require '../../util.php';

$query = "
    UPDATE requests
    SET status='PROCES'
    WHERE
        req_type='WITHDR'
        AND status='VERIFY'
        AND curr_type='GBP'
    ";
do_query($query);

