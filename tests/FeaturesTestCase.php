<?php

use Illuminate\Foundation\Testing\DatabaseTransactions;

/**
 * Created by PhpStorm.
 * User: castro
 * Date: 31/08/2018
 * Time: 01:19
 */
class FeaturesTestCase extends TestCase
{

    use DatabaseTransactions;

    public function seeErrors(array $fields)
    {

        foreach ($fields as $name => $errors) {
            foreach (array($errors) as $message) {

                $this->seeInElement(
                    "#field_{$name}.has-error .help-block", $message);
            }
        }

    }
}