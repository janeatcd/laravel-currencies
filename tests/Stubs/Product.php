<?php

namespace Phpsa\LaravelCurrencies\Tests\Stubs;

class Product extends \Illuminate\Database\Eloquent\Model
{
    public static $testCast = [];

    protected $guarded = [];

    protected $table = 'products';

    public function __construct(array $attributes = [])
    {
        $this->casts = static::$testCast;

        parent::__construct($attributes);
    }
}
