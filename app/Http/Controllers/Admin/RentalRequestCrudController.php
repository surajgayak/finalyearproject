<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\RentalRequestRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class RentalRequestCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class RentalRequestCrudController extends CrudController
{
    use \Backpack\CRUD\app\Http\Controllers\Operations\ListOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\CreateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\UpdateOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\DeleteOperation;
    use \Backpack\CRUD\app\Http\Controllers\Operations\ShowOperation;

    /**
     * Configure the CrudPanel object. Apply settings to all operations.
     * 
     * @return void
     */
    public function setup()
    {
        $this->crud->setModel(\App\Models\RentalRequest::class);
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/rental-request');
        $this->crud->setEntityNameStrings('rental request', 'rental requests');
    }

    /**
     * Define what happens when the List operation is loaded.
     * 
     * @see  https://backpackforlaravel.com/docs/crud-operation-list-entries
     * @return void
     */
    protected function setupListOperation()
    {
        
        $this->crud->column('id');
        $this->crud->column('username');
        $this->crud->column('email');
        $this->crud->column('contact');
        $this->crud->column('carname');
        $this->crud->column('model');
        $this->crud->addColumn([
            'name'=>'carphoto',
            'label'=>'Carphoto',
            'type'=>'image',
            'prefix' => 'storage/',
            // image from a different disk (like s3 bucket)
            // 'disk'   => 'disk-name', 
            // optional width/height if 25px is not ok with you
            'height' => '100px',
            'width'  => '100px',
            
        ]);

        $this->crud->addColumn([
            'name'=>'bluebookphoto',
            'label'=>'Bluebookphoto',
            'type'=>'image',
            'prefix' => 'storage/',
            // image from a different disk (like s3 bucket)
            // 'disk'   => 'disk-name', 
            // optional width/height if 25px is not ok with you
            'height' => '100px',
            'width'  => '100px',
            
        ]);


        /**
         * Columns can be defined using the fluent syntax or array syntax:
         * - CRUD::column('price')->type('number');
         * - CRUD::addColumn(['name' => 'price', 'type' => 'number']); 
         */
    }

    public function setupShowOperation()
    {
        $this->setupListOperation();
        $this->crud->removeColumn('carphoto');
        $this->crud->removeColumn('bluebook');
        $this->crud->addColumn([
            'name'      => 'image', // The db column ndriverPame
            'label'     => 'carphoto', // Table column heading
            'type'      => 'image',
            'prefix' => 'storage/',
            // image from a different disk (like s3 bucket)
            // 'disk'   => 'disk-name', 
            // optional width/height if 25px is not ok with you
            'height' => '100px',
            'width'  => '100px',
        ]);
        $this->crud->addColumn([
            'name'      => 'image', // The db column ndriverPame
            'label'     => 'bluebookphoto', // Table column heading
            'type'      => 'image',
            'prefix' => 'storage/',
            // image from a different disk (like s3 bucket)
            // 'disk'   => 'disk-name', 
            // optional width/height if 25px is not ok with you
            'height' => '100px',
            'width'  => '100px',
        ]);
    }
    /**
     * Define what happens when the Create operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */
    protected function setupCreateOperation()
    {
        $this->crud->setValidation(RentalRequestRequest::class);
        
        $this->crud->field('username');
        $this->crud->field('email');
        $this->crud->field('contact');
        $this->crud->field('carname');
        $this->crud->field('model');
        $this->crud->addField([   // Upload
            'name'      => 'carphoto',
            'label'     => 'Carphoto',
            'type'      => 'upload',
            'upload'    => true,
        ]);
        $this->crud->addField([   // Upload
            'name'      => 'bluebookphoto',
            'label'     => 'Bluebook',
            'type'      => 'upload',
            'upload'    => true,
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
}