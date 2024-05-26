<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

trait Moderatable
{
    // Properti untuk status moderasi
    protected $moderationStatus = 'pending';

    // Method untuk menyetujui konten
    public function approve()
    {
        $this->moderationStatus = 'approved';
        $this->save();
        // Trigger event jika perlu
    }

    // Method untuk menolak konten
    public function reject()
    {
        $this->moderationStatus = 'rejected';
        $this->save();
        // Trigger event jika perlu
    }

    // Getter untuk status moderasi
    public function getModerationStatus()
    {
        return $this->moderationStatus;
    }

    // Setter untuk status moderasi
    public function setModerationStatus($status)
    {
        $this->moderationStatus = $status;
    }

    // Method untuk memeriksa apakah konten disetujui
    public function isApproved()
    {
        return $this->moderationStatus === 'approved';
    }

    // Method untuk memeriksa apakah konten ditolak
    public function isRejected()
    {
        return $this->moderationStatus === 'rejected';
    }

    // Method untuk memeriksa apakah konten masih dalam status pending
    public function isPending()
    {
        return $this->moderationStatus === 'pending';
    }
}
