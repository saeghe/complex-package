<?php

namespace Saeghe\ComplexPackage\Controllers;

use Saeghe\ComplexPackage\Models\User;
use function Saeghe\ComplexPackage\Helpers\helper1;
use function Saeghe\ComplexPackage\Helpers\helper2;

class HomeController extends Controller
{
    public function __invoke()
    {
        $user = new User();
        helper1();
        helper2();
    }
}
