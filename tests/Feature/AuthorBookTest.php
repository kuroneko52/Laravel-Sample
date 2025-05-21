<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Author;
use App\Models\Book;

class AuthorBookTest extends TestCase
{
    use RefreshDatabase;

    #[\PHPUnit\Framework\Attributes\Test]
    public function it_can_create_an_author()
    {
        $authorData = ['name' => 'John Doe'];

        $response = $this->post('/authors', $authorData);

        $response->assertStatus(302);
        $this->assertDatabaseHas('authors', $authorData);
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function it_can_create_a_book_with_an_author()
    {
        $author = Author::create(['name' => 'John Doe']);
        $bookData = ['title' => 'Sample Book', 'author_id' => $author->id];

        $response = $this->post('/books', $bookData);

        $response->assertStatus(302);
        $this->assertDatabaseHas('books', $bookData);
    }

    #[\PHPUnit\Framework\Attributes\Test]
    public function it_can_list_authors_and_books()
    {
        $author = Author::create(['name' => 'John Doe']);
        Book::create(['title' => 'Sample Book', 'author_id' => $author->id]);

        $response = $this->get('/authors');

        $response->assertStatus(200);
        $response->assertSee('John Doe');
        $response->assertSee('Sample Book');
    }
}
