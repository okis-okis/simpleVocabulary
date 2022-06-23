<?php

declare(strict_types = 1);

namespace App\Errors;

class VocabularyNotFoundException extends \Exception
{
    protected $message = "Vocabulary not found!";
}