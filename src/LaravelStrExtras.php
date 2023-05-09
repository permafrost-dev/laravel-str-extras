<?php

namespace PermafrostDev\LaravelStrExtras;

use Illuminate\Support\Str;

/**
 * @method static string insert(string $subject, string $insert, int $position)
 * @method static string insertAfter(string $subject, string $insert, string $search)
 * @method static string insertAfterMatch(string $subject, string $pattern, string $insert)
 */
class LaravelStrExtras
{
    public static function __callStatic(string $name, array $arguments)
    {
        return (new static())->$name(...$arguments);
    }

    /**
     * Insert a substring at a given position in the string.
     *
     * @param  string  $subject
     * @param  string  $insert
     * @param  int  $position
     * @return string
     */
    public function insert($subject, $insert, $position)
    {
        $start = Str::substr($subject, 0, $position);
        $end = Str::substr($subject, $position, Str::length($subject));

        return $start.$insert.$end;
    }

    /**
     * Insert a substring after the first occurrence of a given value in the string.
     *
     * @param  string  $subject
     * @param  string  $pattern
     * @param  string  $insert
     * @return string
     */
    public function insertAfterMatch($subject, $pattern, $insert)
    {
        $match = Str::match($pattern, $subject);

        if (empty($match)) {
            return $subject;
        }

        return $this->insert($subject, $insert, strlen($match));
    }

    /**
     * Insert a substring after the first occurrence of a given substring in a string.
     *
     * @param  string  $subject
     * @param  string  $find
     * @param  string  $insert
     * @return string
     */
    public function insertAfter($subject, $find, $insert)
    {
        if (! Str::contains($subject, $find)) {
            return $subject;
        }

        $before = Str::before($subject, $find);
        $after = Str::after($subject, $find);

        return $before.$find.$insert.$after;
    }
}
