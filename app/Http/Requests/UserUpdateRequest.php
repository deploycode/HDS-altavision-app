<?php

namespace altavisionApp\Http\Requests;

use altavisionApp\Http\Requests\Request;

class UserUpdateRequest extends Request
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
      return [
          'name'=>'required',
          'email'=>'required',
      ];
    }
}
