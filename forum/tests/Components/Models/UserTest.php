<?php

namespace Tests\Components\Models;

use App\User;
use Tests\TestCase;
use App\Models\Reply;
use App\Models\Thread;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class UserTest extends TestCase
{
    use DatabaseMigrations;

    /** @test */
    public function it_can_find_by_username()
    {
        $this->createUser(['username' => 'admin']);

        $this->assertInstanceOf(User::class, User::findByUsername('admins'));
    }

    /** @test */
    public function it_can_find_by_email_address()
    {
        $this->createUser(['email' => 'nma-apps@spms.min-saude.pt']);

        $this->assertInstanceOf(User::class, User::findByEmailAddress('nma-apps@spms.min-saude.pt'));
    }

    /** @test */
    public function it_can_return_the_amount_of_solutions_that_were_given()
    {
        $user = factory(User::class)->create();
        $this->seedTwoSolutionReplies($user);

        $this->assertEquals(2, $user->countSolutions());
    }

    private function seedTwoSolutionReplies(User $user)
    {
        $thread = factory(Thread::class)->create();
        $reply = factory(Reply::class)->create(['replyable_id' => $thread->id(), 'author_id' => $user->id()]);
        $thread->markSolution($reply);

        $thread = factory(Thread::class)->create();
        $reply = factory(Reply::class)->create(['replyable_id' => $thread->id(), 'author_id' => $user->id()]);
        $thread->markSolution($reply);
    }
}
