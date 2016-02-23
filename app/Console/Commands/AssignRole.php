<?php

namespace App\Console\Commands;

use App\User;
use Illuminate\Console\Command;

class AssignRole extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'phoenix:assignrole';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Assign Roles to the User';

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


        $user = User::where('abyasiid',$abyasiid)->get();

        if($user->count() == 1) {
            $user = $user->first();
            $this->info("Name : ".$user->name);
            $this->info("Email : ".$user->email);
            $role = $this->ask("Enter role slug or Id ?");

            $user->assignRole($role);
            $this->info("Role assigned Succesfully...");
        } else {
            $this->error("No such user...");
        }
    }
}
