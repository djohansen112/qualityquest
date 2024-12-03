<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

// truncate the text and return the truncated body

// function truncate(string $text, int $length = 20): string {
//     if (strlen($text) <= $length) {
//         return $text;
//     }
//     $text = substr($text, 0, $length);
//     $text = substr($text, 0, strrpos($text, " "));
//     $text .= "...";
//     return $text;
// }

    //export truncatedBody = $text
}


