<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\DB;

class MenusTableSeeder extends Seeder
{
    private $menuId = null;
    private $dropdownId = array();
    private $dropdown = false;
    private $sequence = 1;
    private $joinData = array();
    private $adminRole = null;
   // private $userRole = null;
    private $subFolder = '';
    private $studentRole  = null;
    private $coachRole  = null;

    public function join($roles, $menusId){
        $roles = explode(',', $roles);
        foreach($roles as $role){
            array_push($this->joinData, array('role_name' => $role, 'menus_id' => $menusId));
        }
    }

    /*
        Function assigns menu elements to roles
        Must by use on end of this seeder
    */
    public function joinAllByTransaction(){
        DB::beginTransaction();
        foreach($this->joinData as $data){
            DB::table('menu_role')->insert([
                'role_name' => $data['role_name'],
                'menus_id' => $data['menus_id'],
            ]);
        }
        DB::commit();
    }

    public function insertLink($roles, $name, $href, $icon = null){
        $href = $this->subFolder . $href;
        if($this->dropdown === false){
            DB::table('menus')->insert([
                'slug' => 'link',
                'name' => $name,
                'icon' => $icon,
                'href' => $href,
                'menu_id' => $this->menuId,
                'sequence' => $this->sequence
            ]);
        }else{
            DB::table('menus')->insert([
                'slug' => 'link',
                'name' => $name,
                'icon' => $icon,
                'href' => $href,
                'menu_id' => $this->menuId,
                'parent_id' => $this->dropdownId[count($this->dropdownId) - 1],
                'sequence' => $this->sequence
            ]);
        }
        $this->sequence++;
        $lastId = DB::getPdo()->lastInsertId();
        $this->join($roles, $lastId);
        $permission = Permission::where('name', '=', $name)->get();
        if(empty($permission)){
            $permission = Permission::create(['name' => 'visit ' . $name]);
        }
        $roles = explode(',', $roles);

        if(in_array('admin', $roles)){
            $this->adminRole->givePermissionTo($permission);
        }
        return $lastId;
    }

    public function insertTitle($roles, $name){
        DB::table('menus')->insert([
            'slug' => 'title',
            'name' => $name,
            'menu_id' => $this->menuId,
            'sequence' => $this->sequence
        ]);
        $this->sequence++;
        $lastId = DB::getPdo()->lastInsertId();
        $this->join($roles, $lastId);
        return $lastId;
    }

    public function beginDropdown($roles, $name, $icon = ''){
        if(count($this->dropdownId)){
            $parentId = $this->dropdownId[count($this->dropdownId) - 1];
        }else{
            $parentId = null;
        }
        DB::table('menus')->insert([
            'slug' => 'dropdown',
            'name' => $name,
            'icon' => $icon,
            'menu_id' => $this->menuId,
            'sequence' => $this->sequence,
            'parent_id' => $parentId
        ]);
        $lastId = DB::getPdo()->lastInsertId();
        array_push($this->dropdownId, $lastId);
        $this->dropdown = true;
        $this->sequence++;
        $this->join($roles, $lastId);
        return $lastId;
    }

    public function endDropdown(){
        $this->dropdown = false;
        array_pop( $this->dropdownId );
    }

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* Get roles */
        $this->adminRole = Role::where('name' , '=' , 'admin' )->first();
        $this->studentRole = Role::where('name', '=', 'coach' )->first();
        $this->coachRole = Role::where('name', '=', 'student' )->first();
        /* Create Sidebar menu */
        DB::table('menulist')->insert([
            'name' => 'sidebar menu'
        ]);
        $this->menuId = DB::getPdo()->lastInsertId();  //set menuId
        $this->insertLink('admin', 'لوحة التحكم', '/admin', 'cil-speedometer');

        $this->beginDropdown('admin', 'الاعدادات', 'cil-cog');
            $this->insertLink('admin', 'تعديل القائمة',               'admin/menu/menu');
            $this->insertLink('admin', 'تعديل الاعدادات القائمة ',      'admin/menu/element');
            $this->insertLink('admin', 'تعديل المهام',              'admin/roles');
            $this->insertLink('admin', 'الصور',                   'admin/media');
        $this->endDropdown();

        $this->insertLink('admin', ' الاعضاء المسجلين (الجدد)', 'admin/users','cil-people');
        $this->insertLink('admin', 'المدربين',         'admin/coaches','cil-address-book');
        $this->insertLink('admin', 'المتناظرين',         'admin/students','cil-contact');
        $this->insertLink('admin', 'الملاحظات',                   'admin/notes','cil-notes');
        $this->insertLink('admin', 'اعضاء النادي',         'admin/members','cil-address-book');

        $this->beginDropdown('admin', 'ادارة المحتوى', 'cil-newspaper');
            $this->insertLink('admin', 'اخر الاخبار',               'admin/news');
            $this->insertLink('admin', 'الصفحة الرئيسية',               'admin/homepageContent');
            $this->insertLink('admin', 'من نحن',               'admin/abouts');
            $this->insertLink('admin', 'الاسئلة الشائعه',               'admin/faqs');
        $this->endDropdown();

        $this->insertLink('admin', 'رسائل الاستفسار',                   'admin/mail','cil-envelope-closed');
        $this->insertLink('admin', 'الفعاليات',                   'admin/events','cil-school');
        $this->insertLink('admin', 'المسجلين في الفعاليات',                   'admin/eventsUsers','cil-people');


        $this->joinAllByTransaction(); ///   <===== Must by use on end of this seeder
    }
}
