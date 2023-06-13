<?php

namespace Tests\Unit;

use App\Models\User;
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_that_true_is_true(): void
    {
        $this->assertTrue(true);
        $user = User::create([
            "nom"=>'idris'
        ]);
        $user->save();
        $this->assertEquals(1,User::all()->count());
    }
}
