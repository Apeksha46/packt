<?php

namespace App\Validators;

use App\Validators\Validator;

class BookValidator extends Validator
{
    /**
     * Rules for client creation and updation.
     *
     * @var array
     */
    protected $rules;

    /**
     * Messages for Client registration
     *
     * @var array
     */
    protected $messages = [];

    public function __construct($validationFor = 'add')
    {

        $this->rules = [
            'title' => 'required|Max:200',
            'author' => 'required',
            'genre' => 'required',
            'isbn' => 'required',
            'published' => 'required',
            'publisher' => 'required',
            'description' => 'required',

        ];


    }

    public function getRules() {
        return $this->rules;
    }
}
