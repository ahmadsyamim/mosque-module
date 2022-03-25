<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMosquesTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::dropIfExists('mosques');
		Schema::create('mosques', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('name', 191);
			$table->string('image', 191)->nullable();
			$table->text('description', 65535)->nullable();
			$table->text('address', 65535)->nullable();
			$table->string('website', 191)->nullable();
			$table->string('prefectures', 191)->nullable();
			$table->string('city', 191)->nullable();
			$table->integer('country_id')->nullable();
			$table->integer('status')->nullable();
			$table->timestamps();
			$table->softDeletes();
		});

		Artisan::call('db:seed', [
			'--class' => '\\Modules\\Mosque\\Database\\Seeders\\MosquesTableSeeder',
			'--force' => true,
		]);

		//Setup
		$dataType = \DB::table('data_types')->where('name', 'mosques')->get()->first();
		if ($dataType) {
			$this->deleteBread($dataType->id);
		}
		$data_type_id = \DB::table('data_types')->insertGetId(  
			array (
                'name' => 'mosques',
                'slug' => 'mosques',
                'display_name_singular' => 'Mosque',
                'display_name_plural' => 'Mosques',
                'icon' => 'voyager-list',
                'model_name' => 'Modules\\Mosque\\Entities\\Mosque',
                'policy_name' => NULL,
                'controller' => NULL,
                'description' => NULL,
                'generate_permissions' => 1,
                'server_side' => 1,
                'details' => '{"order_column":null,"order_display_column":null,"order_direction":"asc","default_search_key":"name","scope":null}',
            ),         
        );

        \DB::table('data_rows')->insert(array (
            69 => 
            array (
                'data_type_id' => $data_type_id,
                'field' => 'id',
                'type' => 'text',
                'display_name' => 'Id',
                'required' => 1,
                'browse' => 0,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => '{}',
                'order' => 1,
            ),
            70 => 
            array (
                'data_type_id' => $data_type_id,
                'field' => 'name',
                'type' => 'text',
                'display_name' => 'Name',
                'required' => 1,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{}',
                'order' => 2,
            ),
            71 => 
            array (
                'data_type_id' => $data_type_id,
                'field' => 'image',
                'type' => 'image',
                'display_name' => 'Image',
                'required' => 0,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{}',
                'order' => 3,
            ),
            72 => 
            array (
                'data_type_id' => $data_type_id,
                'field' => 'description',
                'type' => 'text',
                'display_name' => 'Description',
                'required' => 0,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{}',
                'order' => 4,
            ),
            73 => 
            array (
                'data_type_id' => $data_type_id,
                'field' => 'address',
                'type' => 'text',
                'display_name' => 'Address',
                'required' => 0,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{}',
                'order' => 5,
            ),
            74 => 
            array (
                'data_type_id' => $data_type_id,
                'field' => 'website',
                'type' => 'text',
                'display_name' => 'Website',
                'required' => 0,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{}',
                'order' => 6,
            ),
            75 => 
            array (
                'data_type_id' => $data_type_id,
                'field' => 'prefectures',
                'type' => 'text',
                'display_name' => 'Prefectures',
                'required' => 0,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{}',
                'order' => 7,
            ),
            76 => 
            array (
                'data_type_id' => $data_type_id,
                'field' => 'city',
                'type' => 'text',
                'display_name' => 'City',
                'required' => 0,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{}',
                'order' => 8,
            ),
            77 => 
            array (
                'data_type_id' => $data_type_id,
                'field' => 'status',
                'type' => 'text',
                'display_name' => 'Status',
                'required' => 0,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 1,
                'delete' => 1,
                'details' => '{}',
                'order' => 9,
            ),
            78 => 
            array (
                'data_type_id' => $data_type_id,
                'field' => 'created_at',
                'type' => 'timestamp',
                'display_name' => 'Created At',
                'required' => 0,
                'browse' => 1,
                'read' => 1,
                'edit' => 1,
                'add' => 0,
                'delete' => 1,
                'details' => '{}',
                'order' => 10,
            ),
            79 => 
            array (
                'data_type_id' => $data_type_id,
                'field' => 'updated_at',
                'type' => 'timestamp',
                'display_name' => 'Updated At',
                'required' => 0,
                'browse' => 0,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => '{}',
                'order' => 11,
            ),
            80 => 
            array (
                'data_type_id' => $data_type_id,
                'field' => 'deleted_at',
                'type' => 'timestamp',
                'display_name' => 'Deleted At',
                'required' => 0,
                'browse' => 0,
                'read' => 0,
                'edit' => 0,
                'add' => 0,
                'delete' => 0,
                'details' => '{}',
                'order' => 12,
            ),
        ));

        \DB::table('menu_items')->insert(array (
			array (
                'menu_id' => 1,
                'title' => 'Mosques',
                'url' => '',
                'target' => '_self',
                'icon_class' => 'voyager-list',
                'color' => '#000000',
                'parent_id' => NULL,
                'order' => 2,
                'created_at' => '2019-11-17 22:28:46',
                'updated_at' => '2019-11-17 23:01:58',
                'route' => 'voyager.mosques.index',
                'parameters' => 'null',
            ),
			array (
                'menu_id' => 2,
                'title' => 'Mosque',
                'url' => '/mosques',
                'target' => '_self',
                'icon_class' => NULL,
                'color' => '#000000',
                'parent_id' => NULL,
                'order' => 2,
                'created_at' => '2019-11-20 01:37:50',
                'updated_at' => '2019-11-20 01:43:14',
                'route' => NULL,
                'parameters' => '',
            ),
        ));

        $permissions = array (
            56 => 
            array (
                'key' => 'browse_mosques',
                'table_name' => 'mosques',
                'created_at' => '2019-11-17 22:28:45',
                'updated_at' => '2019-11-17 22:28:45',
            ),
            57 => 
            array (
                'key' => 'read_mosques',
                'table_name' => 'mosques',
                'created_at' => '2019-11-17 22:28:45',
                'updated_at' => '2019-11-17 22:28:45',
            ),
            58 => 
            array (
                'key' => 'edit_mosques',
                'table_name' => 'mosques',
                'created_at' => '2019-11-17 22:28:46',
                'updated_at' => '2019-11-17 22:28:46',
            ),
            59 => 
            array (
                'key' => 'add_mosques',
                'table_name' => 'mosques',
                'created_at' => '2019-11-17 22:28:46',
                'updated_at' => '2019-11-17 22:28:46',
            ),
            60 => 
            array (
                'key' => 'delete_mosques',
                'table_name' => 'mosques',
                'created_at' => '2019-11-17 22:28:46',
                'updated_at' => '2019-11-17 22:28:46',
            ),
        );

        foreach ($permissions as $permission) {
            $permission_id = \DB::table('permissions')->insertGetId($permission);
            \DB::table('permission_role')->insert(array (
                array (
                    'permission_id' => $permission_id,
                    'role_id' => 1,
                )
            ));
        }
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		$dataType = \DB::table('data_types')->where('name', 'mosques')->get()->first();
		if ($dataType) {
			$this->deleteBread($dataType->id);
		}
		Schema::dropIfExists('mosques');
	}
	

    /**
     * Delete BREAD.
     *
     * @param Number $id BREAD data_type id.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function deleteBread($id)
    {
        //$this->authorize('browse_bread');

        /* @var \TCG\Voyager\Models\DataType $dataType */
        $dataType = Voyager::model('DataType')->find($id);

        // Delete Translations, if present
        if (is_bread_translatable($dataType)) {
            $dataType->deleteAttributeTranslations($dataType->getTranslatableAttributes());
        }

        $res = Voyager::model('DataType')->destroy($id);
        // $data = $res
        //     ? $this->alertSuccess(__('voyager::bread.success_remove_bread', ['datatype' => $dataType->name]))
        //     : $this->alertError(__('voyager::bread.error_updating_bread'));
        // if ($res) {
        //     event(new BreadDeleted($dataType, $data));
        // }

        if (!is_null($dataType)) {
            Voyager::model('Permission')->removeFrom($dataType->name);

            // Delete menu
			\DB::table('menu_items')->where('title', 'Mosque')->delete();
			\DB::table('menu_items')->where('title', 'Mosques')->delete();
        }

        return $res;
    }

}
;