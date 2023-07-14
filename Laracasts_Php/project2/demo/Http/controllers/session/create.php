<?php

view('session/create.view.php',[
    'errors' => \Core\Session::get('errors')
]);