<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class AppendNewCommentCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'comment:add-new {user_id} {comment_body}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'append new comment ';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $userId = $this->argument('user_id');
        $comment = $this->argument('comment_body');
        $user = User::find($userId);
        if (empty($user)){
            $this->error("no user such as {$userId}");
            return false;
        }
        $user->comments .="\n".$comment;
        $user->save();
        $this->info("OK");
    }
}
