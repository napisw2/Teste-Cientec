<?php

require "../models/User.php";

class UserController {
    
    public function findByNIS($nis) {
        return User::findByNIS($nis);
    }

    public function insert($name) {
        $user = new User();
        $nis = $user->generateNIS();
        $user->setName($name);
        $user->setNIS($nis);

        $inserted = $user->save();
        return ["inserted" => $inserted, "nis" => $nis];
    }
}

?>