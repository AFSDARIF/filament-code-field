<?php

namespace Afsdarif\FilamentCodeField;

use Afsdarif\FilamentCodeField\Concerns\Autocompletion;
use Afsdarif\FilamentCodeField\Concerns\ControlsHeight;
use Afsdarif\FilamentCodeField\Concerns\HasDisplayMode;
use Afsdarif\FilamentCodeField\Concerns\LineNumbers;
use Afsdarif\FilamentCodeField\Concerns\ProgrammingLanguages;
use Filament\Forms\Components\Concerns;
use Filament\Forms\Components\Contracts;
use Filament\Forms\Components\Field;

class CodeField extends Field implements Contracts\CanBeLengthConstrained
{
    use Autocompletion;
    use Concerns\CanBeLengthConstrained;
    use ControlsHeight;
    use HasDisplayMode;
    use LineNumbers;
    use ProgrammingLanguages;

    const PHP = 'php';

    const JS = 'javascript';

    const JSON = 'json';

    const HTML = 'html';

    const CSS = 'css';

    const XML = 'xml';

    const SQL = 'sql';

    protected string $view = 'filament-code-field::code-field';
}
