<?php

namespace YuriyMartini\Subscriptions\Contracts;

use Illuminate\Database\Eloquent\Collection;

interface Service extends Model
{
    public function getPlans(): Collection;
}
