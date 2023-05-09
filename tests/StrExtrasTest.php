<?php

use Illuminate\Support\Str;
use function PHPUnit\Framework\assertSame;

test('can insert strings', function () {
    $initial = 'HelloWorld';

    assertSame('HelloWorld', Str::insert($initial, '', 0));
    assertSame('Hello World', Str::insert($initial, ' ', 5));
    assertSame('Hello--World', Str::insert($initial, '--', 5));
});

test('can insert strings after a match', function () {
    $initial = 'HelloWorld';

    assertSame('HelloWorld', Str::insertAfterMatch($initial, '/(Missing)/', '@@'));
    assertSame('Hello World', Str::insertAfterMatch($initial, '/(Hello)/', ' '));
    assertSame('H-elloWorld', Str::insertAfterMatch($initial, '/^(H)/', '-'));
    assertSame('HelloWorld--', Str::insertAfterMatch($initial, '/(.+World)$/', '--'));
});

test('can insert strings after a substring', function () {
    $initial = 'HelloWorld';

    assertSame('HelloWorld', Str::insertAfter($initial, 'Missing', '@@@'));
    assertSame('Hello World', Str::insertAfter($initial, 'Hello', ' '));
    assertSame('H-elloWorld', Str::insertAfter($initial, 'H', '-'));
    assertSame('HelloWorld--', Str::insertAfter($initial, 'World', '--'));
});
