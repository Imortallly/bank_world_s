<?php
    $LOGIN =  $_GET['exampleInputEmail1'];
    $PASSWORD = $_GET['exampleInputPassword1'];

    $CLIENT = array(
        'user' => 'joaovitor.jgn@gmail.com',
        'password' => 'joaovitor16'
    );

    if ($LOGIN === $CLIENT['user'] && $PASSWORD === $CLIENT['password']) {
        echo "<span class='span'>Login sucefully</span>";
    } else {
        echo "<span class=inc-pass>Invalid username or password</span>";
    }
