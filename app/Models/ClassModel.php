<?php

namespace App\Models;

class ClassModel extends Model
{
    public string|null $name = null;

    public int|null $year = null;

    protected static $table = 'classes';

    public function __construct(?string $name = null, ?int $year = null)
    {
        parent::__construct();
        if ($name) {
            $this->name = $name;
        }

        if ($year) {
            $this->year = $year;
        }

    }
}