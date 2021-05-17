<?php

namespace App\Controller;

use App\Model\UserManager;

class ConnectController
{
    public function inscription()
    {
        $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $userManager = new UserManager();
        $_SESSION['id'] = $userManager->insert($_POST);
        header('Location: /home/sessionStart');
        exit();
    }
}
