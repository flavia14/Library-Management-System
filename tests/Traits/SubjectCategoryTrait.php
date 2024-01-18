<?php

namespace App\Tests\Traits;

use App\Entity\SubjectCategory;

trait SubjectCategoryTrait
{
    public function createSubjectCategory(string $name = 'DRAMA', string $description = 'Description'): SubjectCategory
    {
        $subjectCategory = new SubjectCategory();

        $subjectCategory->setName($name)
            ->setDescription($description);

        return $subjectCategory;
    }
}