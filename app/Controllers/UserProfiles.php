<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\UserProfile;




class UserProfiles extends BaseController
{
   
    public function userProfile()
    {
        
        $userProfile = new UserProfile();

        
        
        $selectUser = $userProfile->findAll();

        // $relatedJobs = $this->db->query("SELECT * FROM jobs WHERE id != '$id' AND category = '$singleJob[category]' ORDER BY id DESC LIMIT 5")
        // ->getResult();


        return view('profile', compact('selectUser'));
    }

}
