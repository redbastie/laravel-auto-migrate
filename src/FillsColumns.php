<?php

namespace Redbastie\LaravelAutoMigrate;

use Illuminate\Support\Facades\Schema;

trait FillsColumns
{
    public function getFillable()
    {
        return Schema::getColumnListing($this->getTable());
    }
}
