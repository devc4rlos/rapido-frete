<?php

namespace App\View\Components\Molecules;

use App\View\BaseComponent;
use Illuminate\Contracts\View\View;

class QuestionResponse extends BaseComponent
{
    public string $question;
    public string $response;
    public string $theme;

    public function __construct(
        string $class = '',
        string $question = '',
        string $response = '',
        string $theme = 'white',
    )
    {
        parent::__construct($class);
        $this->question = $question;
        $this->response = $response;
        $this->theme = $theme;
    }

    public function render(): View
    {
        return view('components.molecules.question-response');
    }
}
