<?php
try {
    require '../start.php';
    App::web()->route('index');
} catch (Exception $e) {
    echo json_encode(array('code'=>$e->getCode(), 'msg'=>$e->getMessage()));
}
