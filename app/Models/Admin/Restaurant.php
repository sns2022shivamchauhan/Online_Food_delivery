<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    use HasFactory;
    protected $guarded = [];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'created_at' => 'datetime:m/d/Y h:i A',
        'updated_at' => 'datetime:m/d/Y h:i A',
    ];

    public function tenant()
    {
        return $this->hasOne(Tenant::class,'data->restaurant_id','id');
    }

    public function getDomainLinksAttribute()
    {
        $domains = [];
        foreach ($this->tenant->domains as $key => $domain) {
            if ($domain->active==1) {
                $domains[] = $domain->domain_type == "sub-domain" ? $domain->domain.".".env('CENTRAL_DOMAIN') : $domain->domain;
            }
        }
        return $domains;
    }

    public function getDomainsAttribute()
    {
        return $this->tenant->domains;
    }

}
