<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

class EventUser extends Model
{
    use HasFactory;

    protected $table = 'event_user';

    protected $fillable = [
        'event_id',
        'user_id',
        'child_id',
        'phone_contact',
        'matriculado_centro',
        'directo_comedor',
        'necesidades_especiales',
        'quantity',
        'total_priice',
        'payment_id',
        'is_paid',
    ];

    public function event() {
        return $this->belongsTo(Event::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function child() {
        return $this->belongsTo(Child::class);
    }

    protected static function boot() {

        parent::boot();

        static::creating(function ($model) {
            $model->calculateTotalPrice();
        });

        static::updating(function ($model) {
            $model->calculateTotalPrice();
        });
    }

    public function calculateTotalPrice() {

        $event = Event::findOrFail($this->event_id);
        $price = $event->price_no_associated;

        if ( Associated::where('user_id', $this->user_id)->exists()) {
            $price = $event->price_associated;
        }

        $this->total_price = $this->quantity * $price;
    }
}
