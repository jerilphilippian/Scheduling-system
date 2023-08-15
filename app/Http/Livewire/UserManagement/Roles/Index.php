<?php

namespace App\Http\Livewire\UserManagement\Roles;

use App\Models\Roles;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class Index extends Component
{
    protected $listeners = ['addRoles'=>'openRolesModal','editRoles'=>'editRolesModal'];
    public $isaddModalOpen = false;
    public $isEditModalOpen = false;

    public $permission_name;
    public $is_active;
    public $restrictionsUpdate;

    public $restrictions = [
        "user_management" => [
            "description" => 'User Management',
            'section' => [
                'roles' => [
                    'role_create' => ['status' => false, 'description' => 'Role - Create'],
                    'role_edit' => ['status' => false, 'description' => 'Role - Edit'],
                    'role_view' => ['status' => false, 'description' => 'Role - View'],
                ],
                'users' => [
                    'user_create' => ['status' => false, 'description' => 'User - Create'],
                    'user_edit' => ['status' => false, 'description' => 'User - Edit'],
                    'user_view' => ['status' => false, 'description' => 'User - View'],
                ],
                'departments' => [
                    'department_create' => ['status' => false, 'description' => 'Department - Create'],
                    'department_edit' => ['status' => false, 'description' => 'Department - Edit'],
                    'department_view' => ['status' => false, 'description' => 'Department - View'],
                ]
            ]
        ],
        "event_management" => [
            "description" => 'Event Management',
            'section' => [
                'events' => [
                    'event_create' => ['status' => false, 'description' => 'Events - Create'],
                    'event_edit' => ['status' => false, 'description' => 'Events - Edit'],
                    'event_view' => ['status' => false, 'description' => 'Events - View'],
                ],
                'my-events' => [
                    'myevent_create' => ['status' => false, 'description' => 'My Events - Create'],
                    'myevent_edit' => ['status' => false, 'description' => 'My Events - Edit'],
                    'myevent_view' => ['status' => false, 'description' => 'My Events - View'],
                ],
                'invitations' => [
                    'invitation_create' => ['status' => false, 'description' => 'Invitations - Create'],
                    'invitation_edit' => ['status' => false, 'description' => 'Invitations - Edit'],
                    'invitation_view' => ['status' => false, 'description' => 'Invitations - View'],
                ]
            ]
        ]
    ];

    public $role_id;

    protected $rules = [
        'permission_name' => 'required'
    ];
    public function openRolesModal(){
        $this->reset();
        $this->isaddModalOpen = true;
    }
    public function saveRoles(){
        $this->validate();
        try {
            DB::beginTransaction();
            $roles = new Roles();
            $roles->permission_name = $this->permission_name;
            $roles->restrictions = $this->restrictions;

            if($roles->save()){
                DB::commit();
                $this->resetModalForm();
            }else{
                DB::rollBack();
            }
        } catch (\Throwable $th) {
            DB::rollBack();
        }
    }

    public function updateRoles(){
        $this->validate();
        try {
            $this->validate();
            DB::beginTransaction();
            $roles = Roles::find($this->role_id);
            $roles->permission_name = $this->permission_name;
            $roles->restrictions = $this->restrictions;

            if($roles->save()){
                DB::commit();
                $this->resetModalForm();
            }else{
                DB::rollBack();
            }
        } catch (\Throwable $th) {
            DB::rollBack();
        }
    }
    public function editRolesModal($id){
        $this->isEditModalOpen = true;
        $roles = Roles::find($id);
        $this->permission_name = $roles->permission_name;
        $this->restrictionsUpdate = $roles->restrictions;
        $this->role_id = $roles->id;
    }

    public function resetModalForm (){
        $this->reset();
        $this->emit('refreshDatatable');
    }

    public function render()
    {
        return view('livewire.user-management.roles.index');
    }
}
