@php

use App\Models\Template;

$template = Template::find(20);

foreach ($template->fields as $field) {

var_dump($field->name);
}

@endphp

<h1>Here</h1>
