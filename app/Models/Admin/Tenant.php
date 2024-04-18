<?php

namespace App\Models\Admin;

use App\Models\Restaurant\RestroRole;
use App\Models\Restaurant\RestroUser;
use Stancl\Tenancy\Contracts\TenantWithDatabase;
use Stancl\Tenancy\Database\Concerns\HasDomains;
use Stancl\Tenancy\Database\Concerns\HasDatabase;
use Stancl\Tenancy\Database\Models\Tenant as BaseTenant;

class Tenant extends BaseTenant implements TenantWithDatabase
{
    use HasDatabase, HasDomains;

    // protected $appends = ['restro_admins','restro_admins_array'];

    protected $casts = [
        'created_at' => 'datetime:m/d/Y h:i A',
        'updated_at' => 'datetime:m/d/Y h:i A',
    ];
    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }
    public function getDomainLinksAttribute()
    {
        $domains = [];
        foreach ($this->domains as $domain) {
            if ($domain->active==1) {
                $domains[] = $domain->domain_type == "sub-domain" ? $domain->domain.".".env('CENTRAL_DOMAIN') : $domain->domain;
            }
        }
        return $domains;
    }

    public function getRestroAdminsAttribute()
    {
        return $this->run(function () {
            return RestroUser::with('roles')->get();
        });
    }

    public function getRestroAdminsArrayAttribute()
    {
        return $this->run(function () {
            return RestroUser::with('roles')->get()->toArray();
        });
    }

    public function getRestroRolesAttribute()
    {
        return $this->run(function () {
            return RestroRole::all();
        });
    }
}
