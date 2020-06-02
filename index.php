<?php
<<<<<<< HEAD
    $hands = array('rock','Scissor','paper');

    $hand = $hands[rand(0,2)];
=======
    $hands = array('0:グー','1:チョキ','2:パー');

    $hand = array_rand($hands);

>>>>>>> origin/master
    echo $hand;
