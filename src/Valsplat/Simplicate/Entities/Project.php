<?php

namespace Valsplat\Simplicate\Entities;

use Valsplat\Simplicate\Actions;
use Valsplat\Simplicate\Entity;

class Project extends Entity
{
    use Actions\Getable;
    use Actions\Listable;
    use Actions\Storable;
    use Actions\Deletable;

    protected $fillable = [
        'id',
        'client_id',
        'name',
        'code',
        'is_active',
        'is_billable',
        'is_fixed_fee',
        'bill_by',
        'hourly_rate',
        'budget',
        'budget_by',
        'notify_when_over_budget',
        'over_budget_notification_percentage',
        'over_budget_notification_date',
        'show_budget_to_all',
        'cost_budget',
        'cost_budget_include_expenses',
        'fee',
        'notes',
        'starts_on',
        'ends_on'
    ];

    protected $endpoint = 'projects/project/';
    // protected $namespace = '';
}
