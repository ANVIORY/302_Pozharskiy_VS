<?php

namespace Pozharskiy\Task05;

function runTest()
{
    $truncater = new Truncater();
    echo $truncater->truncate('Длинный текст', ['length' => 5 ]) . PHP_EOL;
    echo $truncater->truncate('') . PHP_EOL;
    echo $truncater->truncate('Пожарский Валентин Сергеевич') . PHP_EOL;
    echo $truncater->truncate('Пожарский Валентин Сергеевич', ['length' => 10]) . PHP_EOL;
    echo $truncater->truncate('Пожарский Валентин Сергеевич', ['length' => 50]) . PHP_EOL;
    echo $truncater->truncate('Пожарский Валентин Сергеевич', ['length' => -10]) . PHP_EOL;
    echo $truncater->truncate('Пожарский Валентин Сергеевич', ['length' => 10, 'separator' => '*']) . PHP_EOL;
    echo $truncater->truncate('Пожарский Валентин Сергеевич', ['separator' => '*']) . PHP_EOL;
}
