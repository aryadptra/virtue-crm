<?php

namespace App\Http\Controllers;

use App\Interfaces\CategoryRepositoryInterface;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    private CategoryRepositoryInterface $categoryRepository;

    public function __construct(CategoryRepositoryInterface $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }
}
