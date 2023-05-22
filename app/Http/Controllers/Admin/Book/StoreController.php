<?php

namespace App\Http\Controllers\Admin\Book;

use App\Http\Requests\Admin\Book\StoreRequest;
use Illuminate\Support\Facades\Auth;


class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request)
    {

        $data = $request->validated();
        $this->service->store($data);

        return redirect()->route('admin.book');
    }
}
