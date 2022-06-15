<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Group extends Model
{
    use HasFactory;

    protected $table = 'groups';

    public function account_heads(): BelongsToMany
    {
        return $this->belongsToMany(AccountHead::class);
    }

    public function children(): HasMany
    {
        return $this->hasMany(__CLASS__, 'parent_id');
    }

    public function parent(): BelongsTo
    {
        return $this->belongsTo(__CLASS__, 'parent_id');
    }

    public static function getGroupTotalAmount($account_heads = [], $subgroup = []): int
    {
        $total_amount = 0;
        if (count($account_heads) > 0){
            foreach ($account_heads as $account_head) {
                $total_amount += AccountHead::getTransactionsTotalAmount($account_head->transactions);
            }
        }

        if (count($subgroup) > 0){
            foreach ($subgroup as $group) {
                $total_amount += self::getGroupTotalAmount($group->account_heads, $group->children);
            }
        }

        return $total_amount;
    }
}
