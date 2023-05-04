<?php

namespace App\Providers;

use App\Participant;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Queue;
use Illuminate\Queue\Events\JobProcessed;
use Illuminate\Queue\Events\JobProcessing;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Queue::before(function (JobProcessing $event) {
            // dd($event);
            // $event->connectionName
            // $event->job
            // dd($event->job->payload());
        });
 
        Queue::after(function (JobProcessed $event) {
            // $event->connectionName
            // $event->job
            $payload = json_decode( $event->job->getRawBody() );
            $data = unserialize( $payload->data->command );

            $participant=Participant::where('id',$data->data['id'])->first();
            $participant->is_sent=1;
            $participant->save();
            // $event->job->payload()
       
            // dd($event->job->payload()["data"]["command"]);
            // session()->flash('participant-sent-email', 'Successfully sent email to a');
            return redirect()->route('participant.index');

        });
    }
}
