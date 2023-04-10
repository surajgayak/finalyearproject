<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\BookingRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;

/**
 * Class BookingCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class BookingCrudController extends CrudController
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
        $this->crud->setModel(\App\Models\Booking::class);
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/booking');
        $this->crud->setEntityNameStrings('booking', 'bookings');
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
        $this->crud->column('name');
        $this->crud->column('user');
        $this->crud->column('user_email');
        $this->crud->column('date');
        $this->crud->column('dropdate');
        $this->crud->column('time');
        $this->crud->column('location');
        $this->crud->column('status');
        // $this->crud->addColumn([
        //     'name' => 'fullname',
        //     'label' => 'Select_driver',
        //     'type' => 'select',
        //     'attribute' => 'fullname',
        //     'entity' => 'driversignup',
        //     'model' => "App\Models\Driversignup",
        // ]);
        $this->crud->addColumn([
            'name' => 'fullname',
            'label' => 'Driver Name',
            'type' => 'select',
            'attribute' => 'fullname',
            'entity' => 'driversignup',
            'model' => "App\Models\Driversignup"
        ]);

        $this->crud->addColumn([
            'name'      => 'image', // The db column name
            'label'     => 'Image', // Table column heading
            'type'      => 'image',
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

    /**
     * Define what happens when the Create operation is loaded.
     * 
     * @see https://backpackforlaravel.com/docs/crud-operation-create
     * @return void
     */


    protected function setupCreateOperation()
    {
        $this->crud->setValidation(BookingRequest::class);

        $this->crud->addField([
            'name' => 'name'
        ]);


        $this->crud->addField([
            'name' => 'date'
        ]);

        $this->crud->addField([
            'name' => 'time'
        ]);

        $this->crud->addField([
            'name' => 'location'
        ]);


        $this->crud->addField([
            'name' => 'user_id'
        ]);


        $this->crud->addField([
            'name' => 'image',
            'type' => 'upload'
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
