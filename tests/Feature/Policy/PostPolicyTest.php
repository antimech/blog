<?php

namespace Tests\Feature\Policy;

use App\Models\Post;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PostPolicyTest extends TestCase
{
    public function test_user_can_update_their_own_post(): void
    {
        $user = User::factory()->create();

        $posts = Post::factory()
            ->count(1)
            ->for($user, 'author')
            ->create();
        $post = $posts->first();

        $response = $this->actingAs($user)
            ->patch(
                route('posts.update', $post),
                [
                    'title' => 'New title',
                    'body' => $post->body
                ]
            );

        $response->assertRedirect(route('posts.show', $post));
    }

    public function test_user_can_not_update_someone_else_post()
    {
        $user1 = User::factory()->create();
        $user2 = User::factory()->create();

        $posts = Post::factory()
            ->count(1)
            ->for($user1, 'author')
            ->create();
        $post = $posts->first();

        $response = $this->actingAs($user2)
            ->patch(
                route('posts.update', $post),
                [
                    'title' => 'New title',
                    'body' => $post->body
                ]
            );

        $response->assertForbidden();
    }

    public function test_user_can_delete_their_own_post(): void
    {
        $user = User::factory()->create();

        $posts = Post::factory()
            ->count(1)
            ->for($user, 'author')
            ->create();
        $post = $posts->first();

        $response = $this->actingAs($user)
            ->delete(route('posts.destroy', $post));

        $response->assertRedirect(route('posts.index'));
    }

    public function test_user_can_not_delete_someone_else_post()
    {
        $user1 = User::factory()->create();
        $user2 = User::factory()->create();

        $posts = Post::factory()
            ->count(1)
            ->for($user1, 'author')
            ->create();
        $post = $posts->first();

        $response = $this->actingAs($user2)
            ->patch(route('posts.destroy', $post));

        $response->assertForbidden();
    }
}
