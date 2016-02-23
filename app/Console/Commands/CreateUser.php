<?php

namespace App\Console\Commands;

use App\User;
use Illuminate\Console\Command;

class CreateUser extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'phoenix:createuser';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Creates new User';

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

        $abyasiId = $this->ask('What is your abyasi Id ?');         //$this->argument("abyasiid");
        $name = $this->ask('What is your name ?');                  //$this->argument("name");
        $email = $this->ask('What is your email ?');                // $this->argument("email");
        $password = $this->secret('Enter is your password (This is hidden) ?');//$this->argument("password");

        $user = new User();
        $user->name = $name;
        $user->email = $email;
        $user->password = md5($password);
        $user->abyasiid = $abyasiId;

        if ($user->save()) {
            $this->info("User created Succesfully...");
        } else {
            $this->error("failed to create user...");
        }
    }
}
