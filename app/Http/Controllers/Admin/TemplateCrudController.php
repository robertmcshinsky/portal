<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\TemplateRequest;
use App\Models\Field;
use App\Models\Template;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class TemplateCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class TemplateCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CloneOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\BulkCloneOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\BulkDeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\InlineCreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\FetchOperation;



    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     *
     * @return void
     */
    public function setup()
    {
        CRUD::setModel(\App\Models\Template::class);
        CRUD::setRoute(config('backpack.base.route_prefix') . '/templates');
        CRUD::setEntityNameStrings('template', 'templates');

        $this->crud->enableDetailsRow();
        $this->crud->setDetailsRowView('test');
    }


    private function getFieldsData() {
        return [
            [
                'name' => 'image',
                'label' => 'image',
                'type' => 'image',
                'crop' => true,
                'aspect_ratio' => 1
            ]
        ];
    }
    /**
     * Define what happens when the List operation is loaded.
     *
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        CRUD::column('name');
        CRUD::column('fields')->type('relationship');
        $this->crud->set('show.setFromDb', false);
        $this->crud->addColumns($this->getFieldsData());

        //$this->crud->addButtonFromView('line','edit-fields','edit-fields','beginning');
        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']);
         */
    }

    /**
     * Define what happens when the Create operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        CRUD::setValidation(TemplateRequest::class);

        CRUD::field('name');
        //CRUD::field('fields')->type('checklist')->tab('Fields');
        CRUD::addField([   // Checklist
            'label'     => 'Fields',
            'type'      => 'checklist',
            'name'      => 'fields',
            'attribute' => 'name',
            'model'     => "App\Models\Field",
            'pivot'     => true,
            'ajax' => true,
            'inline_create' => [ 'entity' => 'fields'],
            'tab' => 'Fields'
            // 'number_of_columns' => 3,
        ]);
        CRUD::addField([
            'name' => 'image',
            'label' => 'Image',
            'type' => 'upload',
            'upload' => true,
            'disk' => 'uploads'
        ]);

        /**
         * Fields can be defined using the fluent syntax or array syntax:
         * - CRUD::field('price')->type('number');
         * - CRUD::addField(['name' => 'price', 'type' => 'number']));
         */
    }

    /**
     * Define what happens when the Update operation is loaded.
     *
     * @see https://backpackforlaravel.com/docs/crud-operation-update
     * @return void
     */
    protected function setupUpdateOperation()
    {
        $this->setupCreateOperation();
    }

//    public function edit_fields($id) {
//        return Template::find($id);
//    }

    public function fetchFields() {
        return $this->fetch(Field::class);
    }

}
