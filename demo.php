<?php
require('./getseat.php');

$getSeat = new getSeat('153401040229','153401040229','2017-12-26','1300','1700','100457480');
//学号、密码、选座日期、开始时间（用四个数字表示，建议整点）、结束时间、座位id
$getSeat->run();