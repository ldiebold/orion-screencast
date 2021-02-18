<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class CreateSanctumTokenCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'sanctum:token';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create sanctum token for testing';

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
        throw_unless(app()->environment() === 'local', 'Command line tokens can only be set during local development');

        $plainTextToken = User::factory()->create()
            ->createToken('passport')
            ->plainTextToken;

        $this->line($plainTextToken);
    }
}
