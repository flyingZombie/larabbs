<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\User;

class SyncUserActivedAt extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'larabbs:sync-user-actived-at';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Sync the last actived time from Redis to datebase';

    // /**
    //  * Create a new command instance.
    //  *
    //  * @return void
    //  */
    // public function __construct()
    // {
    //     //parent::__construct();

    // }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle(User $user)
    {
        $user->SyncUserActivedAt();
        $this->info("Sync successfully!");
    }
}
