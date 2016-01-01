<?php

use Laracasts\Integrated\Extensions\Goutte as IntegrationTest;

class ExampleTest extends IntegrationTest
{
    protected $baseUrl = 'http://localhost/modul-307/Tag%205/Use%20Case%202/01%20Framework/index.php';

    /**
     * @test
     */
    public function verify_title_exists()
    {
        $this->visit('/');
    }

}
