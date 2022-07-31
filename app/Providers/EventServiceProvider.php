<?php

namespace App\Providers;

use App\Models\Presence;
use Illuminate\Support\Facades\Event;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function remake($id)
    {
        Presence::create([
            'teacher_id' => $id,
            'date' => date("d/m/y"),
            'time_in' => date('H:i:s'),
            'is_late' => false,
            'note' => 'Tepat waktu'
        ]);
    }
    public function boot()
    {
        //
    }
}
