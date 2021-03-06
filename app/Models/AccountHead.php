<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class AccountHead extends Model
{
    use HasFactory;

    protected $table = 'account_heads';

    public function transactions(): HasMany
    {
        return $this->hasMany(Transaction::class);
    }

    public function groups(): BelongsToMany
    {
        return $this->belongsToMany(Group::class);
    }

    public static function getTransactionsTotalAmount($transactions): int
    {
        $total_amount = 0;
        foreach ($transactions as $transaction) {
            $total_amount += $transaction->total_amount;
        }

        return $total_amount;
    }
}
