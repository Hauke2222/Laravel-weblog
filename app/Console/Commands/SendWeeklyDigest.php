<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Mail\WeeklyBlogDigest;
use Illuminate\Support\Facades\Mail;

class SendWeeklyDigest extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'mail:sendWeeklyDigest';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Sends the weekly digest';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        Mail::to('newuser@example.com')->send(new WeeklyBlogDigest());
    }
}
