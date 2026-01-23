<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class ContactSubmission extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'email',
        'phone',
        'subject',
        'message',
        'status',
        'ip_address',
        'user_agent',
        'read_at'
    ];

    protected $casts = [
        'read_at' => 'datetime',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];

    // Status constants
    const STATUS_NEW = 'new';
    const STATUS_READ = 'read';
    const STATUS_REPLIED = 'replied';

    // Scopes
    public function scopeNew($query)
    {
        return $query->where('status', self::STATUS_NEW);
    }

    public function scopeRead($query)
    {
        return $query->where('status', self::STATUS_READ);
    }

    public function scopeReplied($query)
    {
        return $query->where('status', self::STATUS_REPLIED);
    }

    // Accessors
    protected function isNew(): Attribute
    {
        return Attribute::make(
            get: fn () => $this->status === self::STATUS_NEW,
        );
    }

    protected function isRead(): Attribute
    {
        return Attribute::make(
            get: fn () => $this->status === self::STATUS_READ,
        );
    }

    protected function isReplied(): Attribute
    {
        return Attribute::make(
            get: fn () => $this->status === self::STATUS_REPLIED,
        );
    }

    // Methods
    public function markAsRead()
    {
        $this->update([
            'status' => self::STATUS_READ,
            'read_at' => now()
        ]);
    }

    public function markAsReplied()
    {
        $this->update([
            'status' => self::STATUS_REPLIED
        ]);
    }

    public function getStatusBadgeClass()
    {
        return match($this->status) {
            self::STATUS_NEW => 'bg-green-100 text-green-800',
            self::STATUS_READ => 'bg-blue-100 text-blue-800',
            self::STATUS_REPLIED => 'bg-gray-100 text-gray-800',
            default => 'bg-gray-100 text-gray-800'
        };
    }
}
