<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class ComingSoonController extends BaseController
{
    public function index()
    {
        return view('coming_soon'); // Afișează template-ul din "app/Views/coming_soon.php"
    }
}
