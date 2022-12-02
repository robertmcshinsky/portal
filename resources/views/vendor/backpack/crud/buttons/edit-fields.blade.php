@php

use App\Models\Template;

$template = Template::all();
@endphp


@if ($crud->hasAccess('list'))
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">
        Edit Fields
    </button>
@endif

<html>
    <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" data-backdrop="false" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">{{$template[0]['name']}}</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    @include('edit_template')

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div>
</html>



