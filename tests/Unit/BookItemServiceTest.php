<?php

namespace App\Tests\Unit;

use App\Service\BookItemService;
use App\Tests\Traits\AddressTrait;
use App\Tests\Traits\AuthorTrait;
use App\Tests\Traits\BookItemTrait;
use App\Tests\Traits\BookTrait;
use App\Tests\Traits\PublishingHouseTrait;
use App\Tests\Traits\SubjectCategoryTrait;
use PHPUnit\Framework\TestCase;

class BookItemServiceTest extends TestCase
{
    use BookItemTrait;
    use BookTrait;
    use AuthorTrait;
    use SubjectCategoryTrait;
    use PublishingHouseTrait;
    use AddressTrait;
    protected BookItemService $bookItemService;

    protected function setUp(): void
    {
        $this->bookItemService = new BookItemService();
    }

    public function testAddBookItem(): void
    {
        $author = $this->createAuthor();
        $subjectCategory = $this->createSubjectCategory();
        $book = $this->createBook($author, $subjectCategory);
        $address = $this->createAddress();
        $publishingHouse = $this->createPublishingHouse($address);
        $bookItem = $this->createBookItem($book, $publishingHouse);

        $response = $this->bookItemService->addBookItem($bookItem);

        $this->assertIsArray($response);
        $this->assertArrayHasKey('success', $response);
        $this->assertTrue($response['success']);
    }
}
