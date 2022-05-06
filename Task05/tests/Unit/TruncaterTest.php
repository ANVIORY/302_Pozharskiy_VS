<?php

namespace Pozharskiy\Tests;
use \PHPUnit\Framework\TestCase;
use Pozharskiy\Task05\Truncater;

class TruncaterTest extends TestCasep
{
    
    /** @test */
    public function Reduction()
    {
        $truncater = new Truncater();
        $this->assertSame('Длинн...', $truncater->truncate('Длинный текст', ['length' => 5 ]));
        $this->assertSame('...', $truncater->truncate(''));
        $this->assertSame('Пожарский Валентин Сергеевич...', $truncater->truncate('Пожарский Валентин Сергеевич'));
        $this->assertSame('Пожарский Вале...', $truncater->truncate('Пожарский Валентин Сергеевич', ['length' => 10]));
        $this->assertSame('Пожарский Валентин Сергеевич...', $truncater->truncate('Пожарский Валентин Сергеевич', ['length' => 50]));
        $this->assertSame('Пожарский Валентин Сергеевич...', $truncater->truncate('Пожарский Валентин Сергеевич', ['length' => -10]));
        $this->assertSame('Пожарский Вале*', $truncater->truncate('Пожарский Валентин Сергеевич', ['length' => 10, 'separator' => '*']));
        $this->assertSame('Пожарский Валентин Сергеевич*', $truncater->truncate('Пожарский Валентин Сергеевич', ['separator' => '*']));
    }
}
