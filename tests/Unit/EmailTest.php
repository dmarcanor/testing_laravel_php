<?php

namespace Tests\Unit;

use App\Helpers\Email;
use PHPUnit\Framework\TestCase;

class EmailTest extends TestCase
{

    public function test_email()
    {
        $result = Email::validate('d@admin.com');

        $this->assertTrue($result);
    }

    public function test_not_validate_email()
    {
        $result = validate_email('test');

        $this->assertFalse($result);
    }
}
