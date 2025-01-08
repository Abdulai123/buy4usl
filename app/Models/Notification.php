<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    /** @use HasFactory<\Database\Factories\NotificationFactory> */
    use HasFactory;

    // Fillable attributes
    protected $fillable = [
        'user_id',
        'type',
        'title',
        'message',
        'is_read',
    ];

    // Notification types
    public static $notificationTypes = [
        'welcome',
        'order_created',
        'funds_deposited',
        'funds_withdrawn',
        'new_referral',
        'order_verified',
        'order_needs_action',
        'order_completed',
    ];

    // Welcome Notification
    public static function welcome($userId, $userName)
    {
        return self::createNotification(
            $userId,
            'welcome',
            'Welcome to Our Platform!',
            "Hi $userName, welcome to our platform! We're excited to have you here. Explore and enjoy!"
        );
    }

    // Methods for each notification type
    public static function orderCreated($userId, $orderId)
    {
        return self::createNotification($userId, 'order_created', 'Order Created', "Your order #$orderId has been created successfully.");
    }

    public static function fundsDeposited($userId, $amount)
    {
        return self::createNotification($userId, 'funds_deposited', 'Funds Deposited', "An amount of $amount has been deposited to your account.");
    }

    public static function fundsWithdrawn($userId, $amount)
    {
        return self::createNotification($userId, 'funds_withdrawn', 'Funds Withdrawn', "You have successfully withdrawn $amount from your account.");
    }

    public static function newReferral($userId, $referralName)
    {
        return self::createNotification($userId, 'new_referral', 'New Referral', "$referralName has joined using your referral link.");
    }

    public static function orderVerified($userId, $orderId)
    {
        return self::createNotification($userId, 'order_verified', 'Order Verified', "Your order #$orderId has been verified.");
    }

    public static function orderNeedsAction($userId, $orderId)
    {
        return self::createNotification($userId, 'order_needs_action', 'Order Needs Action', "Your order #$orderId requires further action.");
    }

    public static function orderCompleted($userId, $orderId)
    {
        return self::createNotification($userId, 'order_completed', 'Order Completed', "Your order #$orderId has been completed successfully.");
    }

    // Helper method to create a notification
    protected static function createNotification($userId, $type, $title, $message)
    {
        return self::create([
            'user_id' => $userId,
            'type' => $type,
            'title' => $title,
            'message' => $message,
        ]);
    }

    // Mark notification as read
    public function markAsRead()
    {
        $this->update(['is_read' => true]);
    }
}
