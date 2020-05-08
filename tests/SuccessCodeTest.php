<?php

use PHPUnit\Framework\TestCase;
use CodingMatters\Http\StatusCode;

final class SuccessCodesTest extends TestCase
{
    /**
     * @test
     */
    public function code_is_200_when_response_is_ok()
    {
        $this->assertSame(200, StatusCode::OK);
    }

    /**
     * @test
     */
    public function code_is_201_when_response_is_created()
    {
        $this->assertSame(201, StatusCode::CREATED);
    }
}