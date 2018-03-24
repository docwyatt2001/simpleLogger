<?php
declare(strict_types=1);

namespace SimpleLogger;

/**
 * @coversDefaultClass SimpleLogger\File
 * @covers ::<protected>
 * @covers ::<private>
 */
class FileTest extends \PHPUnit\Framework\TestCase
{
    use BaseTestTrait;

    public function getLogger()
    {
        return new File('/dev/null');
    }
}