<?php

namespace App\Http\Controllers\Main\Author_menu;

use App\Http\Requests\Main\Author_menu\StoreRequest;


class StoreController extends BaseController
{
    public function __invoke(StoreRequest $request)
    {

        $data = $request->validated();
        $this->service->store($data);

        return redirect()->route('author');
    }
}
