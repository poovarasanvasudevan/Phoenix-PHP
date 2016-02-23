<?php

namespace App\Console\Commands;

use App\User;
use Illuminate\Console\Command;

class GetRolesForUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'phoenix:getroles';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'List all the roles for the user';

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
     * @return mixed
     */
    public function handle()
    {
        //
        $abyasiid = $this->ask("Enter abyasi Id ?");
        $user = User::where('abyasiid', $abyasiid)->get();
        if ($user->count() == 1) {
            $user = $user->first();
            $roles = $user->getRoles();
            $this->info("Role assigned to " . $user->name);
            $this->info("==================================");
            $data = "";
            for($i=1;$i<=sizeof($roles);$i++){
                $data = $data . $roles[$i] . "\n";
            }

            $this->info($data);
        } else {
            $this->error("No such user...");
        }
    }
}
