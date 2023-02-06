<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\DriverRequest;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Backpack\CRUD\app\Library\CrudPanel\CrudPanelFacade as CRUD;
use Illuminate\Support\Facades\Hash;


/**
 * Class DriverCrudController
 * @package App\Http\Controllers\Admin
 * @property-read \Backpack\CRUD\app\Library\CrudPanel\CrudPanel $crud
 */
class DriverCrudController extends CrudController
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
        $this->crud->setModel(\App\Models\Driver::class);
        $this->crud->setRoute(config('backpack.base.route_prefix') . '/driver');
        $this->crud->setEntityNameStrings('driver', 'drivers');
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
        $this->crud->column('fullname');
        $this->crud->column('contact');
        $this->crud->column('email');
        $this->crud->column ('password');
        $this->crud->addColumn([
            'name'      => 'licence', // The db column name
            'label'     => 'Licence', // Table column heading
            'type'      => 'image',
            'prefix' => 'storage/',
          
            'height' => '50px',
            'width'  => '50px',
        ]);

      
        $this->crud->addColumn([
            'name'      => 'image', // The db column name
            'label'     => 'Image', // Table column heading
            'type'      => 'image',
            'prefix' => 'storage/',
            // image from a different disk (like s3 bucket)
            // 'disk'   => 'disk-name', 
            // optional width/height if 25px is not ok with you
            'height' => '50px',
            'width'  => '50px',
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
        $this->crud->removeColumn('licence');
        $this->crud->removeColumn('image');
        $this->crud->addColumn([
            'name'      => 'licence', // The db column name
            'label'     => 'Licence', // Table column heading
            'type'      => 'image',
            'prefix' => 'storage/',
            // image from a different disk (like s3 bucket)
            // 'disk'   => 'disk-name', 
            // optional width/height if 25px is not ok with you
            'height' => '50px',
            'width'  => '50px',
        ]);

       

        $this->crud->addColumn([
            'name'      => 'image', // The db column name
            'label'     => 'Image', // Table column heading
            'type'      => 'image',
            'prefix' => 'storage/',
            // image from a different disk (like s3 bucket)
            // 'disk'   => 'disk-name', 
            // optional width/height if 25px is not ok with you
            'height' => '50px',
            'width'  => '50px',
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
        $this->crud->setValidation(DriverRequest::class); 
        $this->crud->field('fullname');
        $this->crud->field('contact');
        $this->crud->field('email');
        $this->crud-> field('password');
        $this->crud->addField([   // Upload
            'name'      => 'image',
            'label'     => 'Image',
            'type'      => 'upload',
            'upload'    => true,
        ]);
        $this->crud-> addField([   // Upload
            'name'      => 'licence',
            'label'     => 'Licence',
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