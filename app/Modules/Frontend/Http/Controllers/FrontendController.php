<?php

namespace App\Modules\Frontend\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Modules;
use App\Models\Category;
use App\Models\CategoryValue;
use App\Models\SubCategory;
use App\Models\SubCategoryValue;
use App\Models\FurtherSubCategory;
use App\Models\FurtherSubCategoryValue;
use App\Models\InputField;
use Illuminate\Support\Facades\Mail;
use App\Models\Newsletter;

class FrontendController extends Controller
{
    public function home()
    {
        return 'Frontend Home';
    }
}