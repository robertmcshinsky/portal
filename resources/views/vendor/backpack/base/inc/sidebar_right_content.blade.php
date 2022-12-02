@extends(backpack_view('blank'))

@php
    $widgets['before_content'][] = [
        'type'    => 'edit_template',
        'wrapper' => ['class' => 'col-sm-12'],
        'content' => 'This text will be in a div with the class "<i>well</i>".',
    ];


@endphp

@section('content')
    <p>Your custom HTML can live here</p>
@endsection
