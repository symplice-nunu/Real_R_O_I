<?php
  
namespace Database\Seeders;
  
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
  
class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
           'role-list',
           'role-create',
           'role-edit',
           'role-delete',
           'users-list',
           'users-create',
           'users-edit',
           'users-delete',
           'product-list',
           'product-create',
           'product-edit',
           'product-delete',
           'contract-list',
           'contract-create',
           'contract-edit',
           'contract-delete',
           'payment-list',
        ];
     
        foreach ($permissions as $permission) {
             Permission::create(['name' => $permission]);
        }
    }
}