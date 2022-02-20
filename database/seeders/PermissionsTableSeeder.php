<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'title' => 'permission_show',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'title' => 'role_show',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'title' => 'user_show',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
            ],
            [
                'id'    => 17,
                'title' => 'setting_access',
            ],
            [
                'id'    => 18,
                'title' => 'record_management_access',
            ],
            [
                'id'    => 19,
                'title' => 'com_country_create',
            ],
            [
                'id'    => 20,
                'title' => 'com_country_edit',
            ],
            [
                'id'    => 21,
                'title' => 'com_country_show',
            ],
            [
                'id'    => 22,
                'title' => 'com_country_delete',
            ],
            [
                'id'    => 23,
                'title' => 'com_country_access',
            ],
            [
                'id'    => 24,
                'title' => 'com_governorate_create',
            ],
            [
                'id'    => 25,
                'title' => 'com_governorate_edit',
            ],
            [
                'id'    => 26,
                'title' => 'com_governorate_show',
            ],
            [
                'id'    => 27,
                'title' => 'com_governorate_delete',
            ],
            [
                'id'    => 28,
                'title' => 'com_governorate_access',
            ],
            [
                'id'    => 29,
                'title' => 'com_city_create',
            ],
            [
                'id'    => 30,
                'title' => 'com_city_edit',
            ],
            [
                'id'    => 31,
                'title' => 'com_city_show',
            ],
            [
                'id'    => 32,
                'title' => 'com_city_delete',
            ],
            [
                'id'    => 33,
                'title' => 'com_city_access',
            ],
            [
                'id'    => 34,
                'title' => 'com_district_create',
            ],
            [
                'id'    => 35,
                'title' => 'com_district_edit',
            ],
            [
                'id'    => 36,
                'title' => 'com_district_show',
            ],
            [
                'id'    => 37,
                'title' => 'com_district_delete',
            ],
            [
                'id'    => 38,
                'title' => 'com_district_access',
            ],
            [
                'id'    => 39,
                'title' => 'com_needed_doc_create',
            ],
            [
                'id'    => 40,
                'title' => 'com_needed_doc_edit',
            ],
            [
                'id'    => 41,
                'title' => 'com_needed_doc_show',
            ],
            [
                'id'    => 42,
                'title' => 'com_needed_doc_delete',
            ],
            [
                'id'    => 43,
                'title' => 'com_needed_doc_access',
            ],
            [
                'id'    => 44,
                'title' => 'com_currency_create',
            ],
            [
                'id'    => 45,
                'title' => 'com_currency_edit',
            ],
            [
                'id'    => 46,
                'title' => 'com_currency_show',
            ],
            [
                'id'    => 47,
                'title' => 'com_currency_delete',
            ],
            [
                'id'    => 48,
                'title' => 'com_currency_access',
            ],
            [
                'id'    => 49,
                'title' => 'com_work_class_create',
            ],
            [
                'id'    => 50,
                'title' => 'com_work_class_edit',
            ],
            [
                'id'    => 51,
                'title' => 'com_work_class_show',
            ],
            [
                'id'    => 52,
                'title' => 'com_work_class_delete',
            ],
            [
                'id'    => 53,
                'title' => 'com_work_class_access',
            ],
            [
                'id'    => 54,
                'title' => 'crec_reg_request_create',
            ],
            [
                'id'    => 55,
                'title' => 'crec_reg_request_edit',
            ],
            [
                'id'    => 56,
                'title' => 'crec_reg_request_show',
            ],
            [
                'id'    => 57,
                'title' => 'crec_reg_request_delete',
            ],
            [
                'id'    => 58,
                'title' => 'crec_reg_request_access',
            ],
            [
                'id'    => 59,
                'title' => 'crec_reg_person_create',
            ],
            [
                'id'    => 60,
                'title' => 'crec_reg_person_edit',
            ],
            [
                'id'    => 61,
                'title' => 'crec_reg_person_show',
            ],
            [
                'id'    => 62,
                'title' => 'crec_reg_person_delete',
            ],
            [
                'id'    => 63,
                'title' => 'crec_reg_person_access',
            ],
            [
                'id'    => 64,
                'title' => 'crec_reg_branch_create',
            ],
            [
                'id'    => 65,
                'title' => 'crec_reg_branch_edit',
            ],
            [
                'id'    => 66,
                'title' => 'crec_reg_branch_show',
            ],
            [
                'id'    => 67,
                'title' => 'crec_reg_branch_delete',
            ],
            [
                'id'    => 68,
                'title' => 'crec_reg_branch_access',
            ],
            [
                'id'    => 69,
                'title' => 'crec_reg_delegate_create',
            ],
            [
                'id'    => 70,
                'title' => 'crec_reg_delegate_edit',
            ],
            [
                'id'    => 71,
                'title' => 'crec_reg_delegate_show',
            ],
            [
                'id'    => 72,
                'title' => 'crec_reg_delegate_delete',
            ],
            [
                'id'    => 73,
                'title' => 'crec_reg_delegate_access',
            ],
            [
                'id'    => 74,
                'title' => 'crec_reg_doc_create',
            ],
            [
                'id'    => 75,
                'title' => 'crec_reg_doc_edit',
            ],
            [
                'id'    => 76,
                'title' => 'crec_reg_doc_show',
            ],
            [
                'id'    => 77,
                'title' => 'crec_reg_doc_delete',
            ],
            [
                'id'    => 78,
                'title' => 'crec_reg_doc_access',
            ],
            [
                'id'    => 79,
                'title' => 'person_type_create',
            ],
            [
                'id'    => 80,
                'title' => 'person_type_edit',
            ],
            [
                'id'    => 81,
                'title' => 'person_type_show',
            ],
            [
                'id'    => 82,
                'title' => 'person_type_delete',
            ],
            [
                'id'    => 83,
                'title' => 'person_type_access',
            ],
            [
                'id'    => 84,
                'title' => 'com_service_create',
            ],
            [
                'id'    => 85,
                'title' => 'com_service_edit',
            ],
            [
                'id'    => 86,
                'title' => 'com_service_show',
            ],
            [
                'id'    => 87,
                'title' => 'com_service_delete',
            ],
            [
                'id'    => 88,
                'title' => 'com_service_access',
            ],
            [
                'id'    => 89,
                'title' => 'fee_class_create',
            ],
            [
                'id'    => 90,
                'title' => 'fee_class_edit',
            ],
            [
                'id'    => 91,
                'title' => 'fee_class_show',
            ],
            [
                'id'    => 92,
                'title' => 'fee_class_delete',
            ],
            [
                'id'    => 93,
                'title' => 'fee_class_access',
            ],
            [
                'id'    => 94,
                'title' => 'fee_type_create',
            ],
            [
                'id'    => 95,
                'title' => 'fee_type_edit',
            ],
            [
                'id'    => 96,
                'title' => 'fee_type_show',
            ],
            [
                'id'    => 97,
                'title' => 'fee_type_delete',
            ],
            [
                'id'    => 98,
                'title' => 'fee_type_access',
            ],
            [
                'id'    => 99,
                'title' => 'service_needed_fee_create',
            ],
            [
                'id'    => 100,
                'title' => 'service_needed_fee_edit',
            ],
            [
                'id'    => 101,
                'title' => 'service_needed_fee_show',
            ],
            [
                'id'    => 102,
                'title' => 'service_needed_fee_delete',
            ],
            [
                'id'    => 103,
                'title' => 'service_needed_fee_access',
            ],
            [
                'id'    => 104,
                'title' => 'crec_reg_fee_create',
            ],
            [
                'id'    => 105,
                'title' => 'crec_reg_fee_edit',
            ],
            [
                'id'    => 106,
                'title' => 'crec_reg_fee_show',
            ],
            [
                'id'    => 107,
                'title' => 'crec_reg_fee_delete',
            ],
            [
                'id'    => 108,
                'title' => 'crec_reg_fee_access',
            ],
            [
                'id'    => 109,
                'title' => 'com_account_create',
            ],
            [
                'id'    => 110,
                'title' => 'com_account_edit',
            ],
            [
                'id'    => 111,
                'title' => 'com_account_show',
            ],
            [
                'id'    => 112,
                'title' => 'com_account_delete',
            ],
            [
                'id'    => 113,
                'title' => 'com_account_access',
            ],
            [
                'id'    => 114,
                'title' => 'profile_password_edit',
            ],
            [
                'id'    => 115,
                'title' => 'crec_setting_access',
            ],
            [
                'id'    => 116,
                'title' => 'crec_setting_create',
            ],
            [
                'id'    => 117,
                'title' => 'crec_setting_edit',
            ],
            [
                'id'    => 118,
                'title' => 'crec_setting_show',
            ],
            [
                'id'    => 119,
                'title' => 'crec_setting_delete',
            ],
        ];

        Permission::insert($permissions);
    }
}
