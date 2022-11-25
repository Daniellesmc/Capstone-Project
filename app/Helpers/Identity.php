<?php
declare(strict_types=1);

namespace App\Helpers;

use Ramsey\Uuid\Uuid;

final class Identity
{
    /**
     * This is always the length of the id generated
     *
     * @var int
     */

    public static $staticLength = 32;

    /**
     * @return string
     */
    public static function createId(): string
    {
        $uId = (string)Uuid::uuid4();
        return preg_replace('/[^A-Za-z0-9]/', '', $uId);
    }

    public static function validateId(string $id): bool
    {
        $lengthMatch = strlen($id) === self::$staticLength;

        // Check if it only has numbers and letters
        $alphaNumericMatch = preg_match('/[^A-Za-z0-9]/', $id);
        if ($lengthMatch || $alphaNumericMatch) {
            return true;
        }

        return false;
    }
}
