<?php

return [
    'userManagement' => [
        'title'          => 'المستخدمين',
        'title_singular' => 'المستخدمين',
    ],
    'permission' => [
        'title'          => 'الصلاحيات',
        'title_singular' => 'الصلاحية',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => ' ',
            'title'             => 'Title',
            'title_helper'      => ' ',
            'created_at'        => 'Created at',
            'created_at_helper' => ' ',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => ' ',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => ' ',
        ],
    ],
    'role' => [
        'title'          => 'المجموعات',
        'title_singular' => 'مجموعة',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'title'              => 'Title',
            'title_helper'       => ' ',
            'permissions'        => 'Permissions',
            'permissions_helper' => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
        ],
    ],
    'user' => [
        'title'          => 'المستخدمين',
        'title_singular' => 'مستخدم',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => ' ',
            'name'                     => 'الاسم',
            'name_helper'              => ' ',
            'email'                    => 'البريد الالكتروني',
            'email_helper'             => ' ',
            'email_verified_at'        => 'التحقق من البريد الإلكتروني',
            'email_verified_at_helper' => ' ',
            'password'                 => 'كلمه السر',
            'password_helper'          => ' ',
            'roles'                    => 'الأدوار',
            'roles_helper'             => ' ',
            'remember_token'           => 'تذكر الرمز',
            'remember_token_helper'    => ' ',
            'created_at'               => 'Created at',
            'created_at_helper'        => ' ',
            'updated_at'               => 'Updated at',
            'updated_at_helper'        => ' ',
            'deleted_at'               => 'Deleted at',
            'deleted_at_helper'        => ' ',
        ],
    ],
    'setting' => [
        'title'          => 'الإعدادات',
        'title_singular' => 'الإعدادات',
    ],
    'recordManagement' => [
        'title'          => 'إدارة السجلات',
        'title_singular' => 'إدارة السجلات',
    ],
    'comCountry' => [
        'title'          => 'الدول',
        'title_singular' => 'الدول',
        'fields'         => [
            'id'                        => 'ID',
            'id_helper'                 => ' ',
            'country_tel_prefix'        => 'بادئة هاتف البلد',
            'country_tel_prefix_helper' => ' ',
            'iso_3'                     => 'Iso 3',
            'iso_3_helper'              => ' ',
            'iso_num'                   => 'Iso Num',
            'iso_num_helper'            => ' ',
            'country_is_valid'          => 'Country Is Valid',
            'country_is_valid_helper'   => ' ',
            'country_name_a'            => 'اسم الدولة بالعربي',
            'country_name_a_helper'     => ' ',
            'country_name_l'            => 'اسم الدولة بالانجليزي',
            'country_name_l_helper'     => ' ',
            'nationality_a'             => 'الجنسية بالعربي',
            'nationality_a_helper'      => ' ',
            'nationality_l'             => 'الجنسية بالانجليزي',
            'nationality_l_helper'      => ' ',
            'created_at'                => 'Created at',
            'created_at_helper'         => ' ',
            'updated_at'                => 'Updated at',
            'updated_at_helper'         => ' ',
            'deleted_at'                => 'Deleted at',
            'deleted_at_helper'         => ' ',
        ],
    ],
    'comGovernorate' => [
        'title'          => 'المحافظات',
        'title_singular' => 'المحافظات',
        'fields'         => [
            'id'                        => 'ID',
            'id_helper'                 => ' ',
            'governorate_name_a'        => 'اسم المحافظة بالعربي',
            'governorate_name_a_helper' => ' ',
            'governorate_name_l'        => 'اسم المحافظة بالانجليزي',
            'governorate_name_l_helper' => ' ',
            'created_at'                => 'Created at',
            'created_at_helper'         => ' ',
            'updated_at'                => 'Updated at',
            'updated_at_helper'         => ' ',
            'deleted_at'                => 'Deleted at',
            'deleted_at_helper'         => ' ',
            'country'                   => 'الدولة',
            'country_helper'            => ' ',
        ],
    ],
    'comCity' => [
        'title'          => 'المدن',
        'title_singular' => 'المدن',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'city_name_a'        => 'اسم المدينة بالعربي',
            'city_name_a_helper' => ' ',
            'city_name_l'        => 'اسم المدينة بالانجليزي',
            'city_name_l_helper' => ' ',
            'city_name_h'        => 'City Name H',
            'city_name_h_helper' => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
            'governorate'        => 'محافظة',
            'governorate_helper' => ' ',
        ],
    ],

    'comSettings' => [
        'title'          => 'إعدادات',
        'title_singular' => 'إعدادات',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'prefix_folder'        => 'بادئة المجلد',
            'prefix_folder_helper' => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
        ],
    ],


    'comDistrict' => [
        'title'          => 'الأحياء',
        'title_singular' => 'الأحياء',
        'fields'         => [
            'id'                     => 'ID',
            'id_helper'              => ' ',
            'city'                   => 'مدينة',
            'city_helper'            => ' ',
            'district_name_a'        => 'اسم الحي بالعربي',
            'district_name_a_helper' => ' ',
            'district_name_l'        => 'اسم الحي بالانجليزي',
            'district_name_l_helper' => ' ',
            'created_at'             => 'Created at',
            'created_at_helper'      => ' ',
            'updated_at'             => 'Updated at',
            'updated_at_helper'      => ' ',
            'deleted_at'             => 'Deleted at',
            'deleted_at_helper'      => ' ',
        ],
    ],

    'comNeededDoc' => [
        'title'          => 'المستندات المطلوبة',
        'title_singular' => 'المستندات المطلوبة',
        'fields'         => [
            'id'                            => 'ID',
            'id_helper'                     => ' ',
            'created_at'                    => 'Created at',
            'created_at_helper'             => ' ',
            'updated_at'                    => 'Updated at',
            'updated_at_helper'             => ' ',
            'deleted_at'                    => 'Deleted at',
            'deleted_at_helper'             => ' ',
           // 'needed_doc_name_a'             => 'Needed Doc Name A',
            'code'                          => 'كود المستندات المطلوبة',
            'code_helper'                   => ' ',
            'needed_doc_name_a'             => 'اسم المستندات المطلوبة بالعربي',
            'needed_doc_name_a_helper'      => ' ',
            'needed_doc_name_l'             => 'اسم المستندات المطلوبة بالانجليزي',
            'needed_doc_name_l_helper'      => ' ',
            'needed_doc_is_required'        => 'المستندات المطلوبة هل مطلوبة',
            'needed_doc_is_required_helper' => ' ',
        ],
    ],

    'comCurrency' => [
        'title'          => 'Com Currencies',
        'title_singular' => 'Com Currency',
        'fields'         => [
            'id'                     => 'ID',
            'id_helper'              => ' ',
            'currency_symbol'        => 'رمز العملة',
            'currency_symbol_helper' => ' ',
            'currency_name_a'        => 'اسم العملة بالعربي',
            'currency_name_a_helper' => ' ',
            'currency_name_l'        => 'اسم العملة بالانجليزي',
            'currency_name_l_helper' => ' ',
            'created_at'             => 'Created at',
            'created_at_helper'      => ' ',
            'updated_at'             => 'Updated at',
            'updated_at_helper'      => ' ',
            'deleted_at'             => 'Deleted at',
            'deleted_at_helper'      => ' ',
        ],
    ],

    'crecRegRequest' => [
        'title'          => 'طلبات جديدة ',
        'title_singular' => 'طلبات جديدة',
      //  'title_singular' => 'Crec Reg Request',
        'fields'         => [
            'id'                          => 'ID',
            'id_helper'                   => ' ',
            'crec_code'                   => 'كود الطلب',
            'crec_code_helper'            => ' ',
            'crec_appl_no'                => 'رقم الهوية',
            'crec_appl_no_helper'         => ' ',
            'crec_appl_date'              => 'تاريخ الطلب',
            'crec_appl_date_helper'       => ' ',
            'crec_register_no'            => 'رقم التسجيل',
            'crec_register_no_helper'     => ' ',
            'crec_comp_name_a'            => 'اسم شركة بالعربي',
            'crec_comp_name_a_helper'     => ' ',
            'crec_comp_name_l'            => 'اسم شركة بالانجليزي',
            'crec_comp_name_l_helper'     => ' ',
            'crec_comp_name_h'            => 'Crec Comp Name H',
            'crec_comp_name_h_helper'     => ' ',
            'created_at'                  => 'Created at',
            'created_at_helper'           => ' ',
            'updated_at'                  => 'Updated at',
            'updated_at_helper'           => ' ',
            'deleted_at'                  => 'Deleted at',
            'deleted_at_helper'           => ' ',
            'crec_start_date'             => 'تاريخ بدء الطلب',
            'crec_start_date_helper'      => ' ',
            'crec_brand_name'             => 'اسم العلامة التجارية',
            'crec_brand_name_helper'      => ' ',
            'country'                     => 'دولة',
            'country_helper'              => ' ',
            'governorate'                 => 'محافظة',
            'governorate_helper'          => ' ',
            'city'                        => 'City',
            'city_helper'                 => ' ',
            'crec_address_a'              => 'العنوان بالعربي',
            'crec_address_a_helper'       => ' ',
            'crec_address_l'              => 'العنوان بالانجليزي',
            'crec_address_l_helper'       => ' ',
            'crec_street'                 => 'الشارع',
            'crec_street_helper'          => ' ',
            'crec_bldg_no'                => 'رقم المبنى',
            'crec_bldg_no_helper'         => ' ',
            'crec_tel_no'                 => 'رقم التلفون',
            'crec_tel_no_helper'          => ' ',
            'crec_fax_no'                 => 'رقم الفاكس',
            'crec_fax_no_helper'          => ' ',
            'crec_mobile_no'              => 'رقم الموبايل',
            'crec_mobile_no_helper'       => ' ',
            'crec_po_box'                 => 'Crec Po Box',
            'crec_po_box_helper'          => ' ',
            'crec_email'                  => 'الايميل',
            'crec_email_helper'           => ' ',
            'crec_website'                => 'الموقع الكتروني',
            'crec_website_helper'         => ' ',
            'crec_applicant_id_no'        => 'رقم معرف مقدم الطلب',
            'crec_applicant_id_no_helper' => ' ',
            'crec_applicant_name'         => 'اسم مقدم الطلب',
            'crec_applicant_name_helper'  => ' ',
            'crec_end_date'               => 'تاريخ انتهاء الطلب',
            'crec_end_date_helper'        => ' ',
            'crec_notes'                  => 'ملاحظات',
            'crec_notes_helper'           => ' ',
            'crec_work_name'              => 'Crec Work Name',
            'crec_work_name_helper'       => ' ',
            'crec_work_class'             => 'Crec Work Class',
            'crec_work_class_helper'      => ' ',
            'service'                     => 'الخدمة',
            'status'                     => 'الحالة',
            'service_helper'              => ' ',
        ],
    ],

    'comWorkClass' => [
        'title'          => 'فئة العمل',
        'title_singular' => 'فئة العمل',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => ' ',
            'work_class_desc_a'        => 'وصف فئة العمل بالعربي',
            'work_class_desc_a_helper' => ' ',
            'work_class_desc_l'        => 'وصف فئة العمل بالانجليزي',
            'work_class_desc_l_helper' => ' ',
            'created_at'               => 'Created at',
            'created_at_helper'        => ' ',
            'updated_at'               => 'Updated at',
            'updated_at_helper'        => ' ',
            'deleted_at'               => 'Deleted at',
            'deleted_at_helper'        => ' ',
        ],
    ],

//    'crecRegPerson' => [
//        'title'          => 'Crec Reg Persons',
//        'title_singular' => 'Crec Reg Person',
//        'fields'         => [
//            'id'                        => 'ID',
//            'id_helper'                 => ' ',
//            'crec_reg_request'          => 'Crec Reg Request',
//            'crec_reg_request_helper'   => ' ',
//            'person_id_no'              => 'Person Id No',
//            'person_id_no_helper'       => ' ',
//            'person_type'               => 'Person Type',
//            'person_type_helper'        => ' ',
//            'person_name_a'             => 'Person Name A',
//            'person_name_a_helper'      => ' ',
//            'person_name_l'             => 'Person Name L',
//            'person_name_l_helper'      => ' ',
//            'person_birth_date'         => 'Person Birth Date',
//            'person_birth_date_helper'  => ' ',
//            'person_birth_place'        => 'Person Birth Place',
//            'person_birth_place_helper' => ' ',
//            'person_gender'             => 'Person Gender',
//            'person_gender_helper'      => ' ',
//            'person_nationality'        => 'Person Nationality',
//            'person_nationality_helper' => ' ',
//            'country'                   => 'Country',
//            'country_helper'            => ' ',
//            'governorate'               => 'Governorate',
//            'governorate_helper'        => ' ',
//            'city'                      => 'City',
//            'city_helper'               => ' ',
//            'person_address_a'          => 'Person Address A',
//            'person_address_a_helper'   => ' ',
//            'person_address_l'          => 'Person Address L',
//            'person_address_l_helper'   => ' ',
//            'person_street'             => 'Person Street',
//            'person_street_helper'      => ' ',
//            'person_bldg_no'            => 'Person Bldg No',
//            'person_bldg_no_helper'     => ' ',
//            'person_tel_no'             => 'Person Tel No',
//            'person_tel_no_helper'      => ' ',
//            'person_fax_no'             => 'Person Fax No',
//            'person_fax_no_helper'      => ' ',
//            'person_mobile_no'          => 'Person Mobile No',
//            'person_mobile_no_helper'   => ' ',
//            'person_po_box'             => 'Person Po Box',
//            'person_po_box_helper'      => ' ',
//            'created_at'                => 'Created at',
//            'created_at_helper'         => ' ',
//            'updated_at'                => 'Updated at',
//            'updated_at_helper'         => ' ',
//            'deleted_at'                => 'Deleted at',
//            'deleted_at_helper'         => ' ',
//            'person_email'              => 'Person Email',
//            'person_email_helper'       => ' ',
//            'person_notes'              => 'Person Notes',
//            'person_notes_helper'       => ' ',
//            'deleg_address_a'           => 'Deleg Address A',
//            'deleg_address_a_helper'    => ' ',
//            'deleg_address_l'           => 'Deleg Address L',
//            'deleg_address_l_helper'    => ' ',
//            'deleg_street'              => 'Deleg Street',
//            'deleg_street_helper'       => ' ',
//            'deleg_bldg_no'             => 'Deleg Bldg No',
//            'deleg_bldg_no_helper'      => ' ',
//            'deleg_tel_no'              => 'Deleg Tel No',
//            'deleg_tel_no_helper'       => ' ',
//            'deleg_fax_no'              => 'Deleg Fax No',
//            'deleg_fax_no_helper'       => ' ',
//            'deleg_mobile_no'           => 'Deleg Mobile No',
//            'deleg_mobile_no_helper'    => ' ',
//            'deleg_po_box'              => 'Deleg Po Box',
//            'deleg_po_box_helper'       => ' ',
//            'deleg_email'               => 'Deleg Email',
//            'deleg_email_helper'        => ' ',
//            'deleg_website'             => 'Deleg Website',
//            'deleg_website_helper'      => ' ',
//        ],
//    ],

    'crecRegPerson' => [
        'title'          => 'الأشخاص',
        'title_singular' => 'الأشخاص',
        'fields'         => [
            'id'                        => 'ID',
            'id_helper'                 => ' ',
            'crec_reg_request'          => 'طلب تسجيل',
            'crec_reg_request_helper'   => ' ',
            'person_id_no'              => 'رقم الهوية',
            'person_id_no_helper'       => ' ',
            'person_name_a'             => 'اسم الشخص بالعربي',
            'person_name_a_helper'      => ' ',
            'person_name_l'             => 'اسم الشخص بالانجليزي',
            'person_name_l_helper'      => ' ',
            'person_birth_date'         => 'تاريخ ميلاد الشخص',
            'person_birth_date_helper'  => ' ',
            'person_birth_place'        => 'مكان ولادة الشخص',
            'person_birth_place_helper' => ' ',
            'person_gender'             => 'جنس الشخص',
            'person_gender_helper'      => ' ',
            'person_nationality'        => 'جنسية الشخص',
            'person_nationality_helper' => ' ',
            'country'                   => 'دولة',
            'country_helper'            => ' ',
            'governorate'               => 'محافظة',
            'governorate_helper'        => ' ',
            'city'                      => 'مدينة',
            'city_helper'               => ' ',
            'person_address_a'          => 'عنوان الشخص بالعربي',
            'person_address_a_helper'   => ' ',
            'person_address_l'          => 'عنوان الشخص بالانجليزي',
            'person_address_l_helper'   => ' ',
            'person_street'             => 'شارع الشخص',
            'person_street_helper'      => ' ',
            'person_bldg_no'            => 'رقم مبنى الشخص',
            'person_bldg_no_helper'     => ' ',
            'person_tel_no'             => 'رقم هاتف الشخص',
            'person_tel_no_helper'      => ' ',
            'person_fax_no'             => 'Person Fax No',
            'person_fax_no_helper'      => ' ',
            'person_mobile_no'          => 'رقم هاتف الشخص',
            'person_mobile_no_helper'   => ' ',
            'person_po_box'             => 'Person Po Box',
            'person_po_box_helper'      => ' ',
            'created_at'                => 'Created at',
            'created_at_helper'         => ' ',
            'updated_at'                => 'Updated at',
            'updated_at_helper'         => ' ',
            'deleted_at'                => 'Deleted at',
            'deleted_at_helper'         => ' ',
            'person_email'              => 'البريد الإلكتروني للشخص',
            'person_email_helper'       => ' ',
            'person_notes'              => 'ملاحظات الشخص',
            'person_notes_helper'       => ' ',
            'person_type'               => 'نوع الشخص',
            'person_type_helper'        => ' ',
        ],
    ],

    'crecRegBranch' => [
        'title'          => 'Crec Reg Branches',
        'title_singular' => 'Crec Reg Branch',
        'fields'         => [
            'id'                           => 'ID',
            'id_helper'                    => ' ',
            'crec_reg_request'             => 'Crec Reg Request',
            'crec_reg_request_helper'      => ' ',
            'created_at'                   => 'Created at',
            'created_at_helper'            => ' ',
            'updated_at'                   => 'Updated at',
            'updated_at_helper'            => ' ',
            'deleted_at'                   => 'Deleted at',
            'deleted_at_helper'            => ' ',
            'branch_no'                    => 'Branch No',
            'branch_no_helper'             => ' ',
            'branch_brand_name'            => 'Branch Brand Name',
            'branch_brand_name_helper'     => ' ',
            'branch_open_date'             => 'Branch Open Date',
            'branch_open_date_helper'      => ' ',
            'country'                      => 'Country',
            'country_helper'               => ' ',
            'governorate'                  => 'Governorate',
            'governorate_helper'           => ' ',
            'city'                         => 'City',
            'city_helper'                  => ' ',
            'branch_address_a'             => 'Branch Address A',
            'branch_address_a_helper'      => ' ',
            'branch_address_l'             => 'Branch Address L',
            'branch_address_l_helper'      => ' ',
            'branch_street'                => 'Branch Street',
            'branch_street_helper'         => ' ',
            'branch_bldg_no'               => 'Branch Bldg No',
            'branch_bldg_no_helper'        => ' ',
            'branch_tel_no'                => 'Branch Tel No',
            'branch_tel_no_helper'         => ' ',
            'branch_fax_no'                => 'Branch Fax No',
            'branch_fax_no_helper'         => ' ',
            'branch_mobile_no'             => 'Branch Mobile No',
            'branch_mobile_no_helper'      => ' ',
            'branch_po_box'                => 'Branch Po Box',
            'branch_po_box_helper'         => ' ',
            'branch_email'                 => 'Branch Email',
            'branch_email_helper'          => ' ',
            'branch_website'               => 'Branch Website',
            'branch_website_helper'        => ' ',
            'branch_contact_person'        => 'Branch Contact Person',
            'branch_contact_person_helper' => ' ',
            'branch_work_class'            => 'Branch Work Class',
            'branch_work_class_helper'     => ' ',
        ],
    ],

    'crecRegDelegate' => [
        'title'          => 'Crec Reg Delegates',
        'title_singular' => 'Crec Reg Delegate',
        'fields'         => [
            'id'                      => 'ID',
            'id_helper'               => ' ',
            'crec_reg_request'        => 'Crec Reg Request',
            'crec_reg_request_helper' => ' ',
            'created_at'              => 'Created at',
            'created_at_helper'       => ' ',
            'updated_at'              => 'Updated at',
            'updated_at_helper'       => ' ',
            'deleted_at'              => 'Deleted at',
            'deleted_at_helper'       => ' ',
        ],
    ],

    'crecRegDoc' => [
        'title'          => 'مستندات التسجيل',
        'title_singular' => 'مستندات التسجيل',
        'fields'         => [
            'id'                      => 'ID',
            'id_helper'               => ' ',
            'crec_reg_request'        => 'طلب تسجيل',
            'crec_reg_request_helper' => ' ',
            'neededdoc'               => 'مستندات مطلوبة',
            'neededdoc_helper'        => ' ',
            'docs_date'               => 'تاريخ المستندات',
            'docs_date_helper'        => ' ',
            'docs_ref_code'           => 'كود مرجع المستندات',
            'docs_ref_code_helper'    => ' ',
            'doc_file'                => 'مستندات المطلوبة',
            'doc_file_helper'         => ' ',
            'created_at'              => 'Created at',
            'created_at_helper'       => ' ',
            'updated_at'              => 'Updated at',
            'updated_at_helper'       => ' ',
            'deleted_at'              => 'Deleted at',
            'deleted_at_helper'       => ' ',
        ],
    ],

    'personType' => [
        'title'          => 'نوع الشخص',
        'title_singular' => 'Person Type',
        'fields'         => [
            'id'                        => 'ID',
            'id_helper'                 => ' ',
            'person_type_name_a'        => 'اسم نوع الشخص بالعربي',
            'person_type_name_a_helper' => ' ',
            'person_type_name_l'        => 'اسم نوع الشخص بالانجليزي',
            'person_type_name_l_helper' => ' ',
            'is_active'                 => 'هل نشط',
            'is_active_helper'          => ' ',
            'created_at'                => 'Created at',
            'created_at_helper'         => ' ',
            'updated_at'                => 'Updated at',
            'updated_at_helper'         => ' ',
            'deleted_at'                => 'Deleted at',
            'deleted_at_helper'         => ' ',
        ],
    ],

    'receipts' => [
        'title'          => 'إيصال الدفع',
        'title_singular' => 'إيصال الدفع',
        'fields'         => [
            'id'                        => 'ID',
            'id_helper'                 => ' ',
            'receipt_date'              => 'تاريخ إبصال الدفع',
            'receipt_date_helper'       => ' ',
            'receipt_number'            => 'رقم إيصال الدفع',
            'receipt_number_helper'     => ' ',
            'created_at'                => 'Created at',
            'created_at_helper'         => ' ',
            'updated_at'                => 'Updated at',
            'updated_at_helper'         => ' ',
            'deleted_at'                => 'Deleted at',
            'deleted_at_helper'         => ' ',
        ],
    ],

    'comService' => [
        'title'          => 'خدمة',
        'title_singular' => 'خدمة',
        'fields'         => [
            'id'                    => 'ID',
            'id_helper'             => ' ',
            'service_name_a'        => 'اسم الخدمة بالعربي',
            'service_name_a_helper' => ' ',
            'service_name_l'        => 'اسم الخدمة بالانجليزي',
            'service_name_l_helper' => ' ',
            'created_at'            => 'Created at',
            'created_at_helper'     => ' ',
            'updated_at'            => 'Updated at',
            'updated_at_helper'     => ' ',
            'deleted_at'            => 'Deleted at',
            'deleted_at_helper'     => ' ',
            'account'               => 'حساب',
            'account_helper'        => ' ',
        ],
    ],
    'feeClass' => [
        'title'          => 'فئة الرسوم',
        'title_singular' => 'فئة الرسوم',
        'fields'         => [
            'id'                      => 'ID',
            'id_helper'               => ' ',
            'fee_class_name_a'        => 'اسم فئة الرسوم بالعربي',
            'fee_class_name_a_helper' => ' ',
            'fee_class_name_l'        => 'اسم فئة الرسوم بالانجليزي',
            'fee_class_name_l_helper' => ' ',
            'created_at'              => 'Created at',
            'created_at_helper'       => ' ',
            'updated_at'              => 'Updated at',
            'updated_at_helper'       => ' ',
            'deleted_at'              => 'Deleted at',
            'deleted_at_helper'       => ' ',
        ],
    ],
    'feeType' => [
        'title'          => 'نوع الرسوم',
        'title_singular' => 'نوع الرسوم',
        'fields'         => [
            'id'                     => 'ID',
            'id_helper'              => ' ',
            'fee_type_name_a'        => 'اسم نوع الرسوم بالعربي',
            'fee_type_name_a_helper' => ' ',
            'fee_type_name_l'        => 'اسم نوع الرسوم بالانجليزي',
            'fee_type_name_l_helper' => ' ',
            'fee_type_amt'           => 'نوع الرسوم',
            'fee_type_amt_helper'    => ' ',
            'total'                  => 'المجموع',
            'total_helper'           => ' ',
            'is_active'              => 'هل نشط',
            'is_active_helper'       => ' ',
            'created_at'             => 'Created at',
            'created_at_helper'      => ' ',
            'updated_at'             => 'Updated at',
            'updated_at_helper'      => ' ',
            'deleted_at'             => 'Deleted at',
            'deleted_at_helper'      => ' ',
            'fee_class'              => 'فئة الرسوم',
            'fee_class_helper'       => ' ',
            'currency'               => 'عملة',
            'currency_helper'        => ' ',
        ],
    ],
    'serviceNeededFee' => [
        'title'          => 'الرسوم المطلوبة للخدمة',
        'title_singular' => 'الرسوم المطلوبة للخدمة',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => ' ',
            'fee_type'           => 'نوع الرسوم',
            'fee_type_helper'    => ' ',
            'service'            => 'خدمة',
            'service_helper'     => ' ',
            'is_required'        => 'هل مطلوب',
            'is_required_helper' => ' ',
            'created_at'         => 'Created at',
            'created_at_helper'  => ' ',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => ' ',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => ' ',
            'notes'              => 'ملاحظات',
            'notes_helper'       => ' ',
        ],
    ],
    'crecRegFee' => [
        'title'          => 'رسوم تسجيل',
        'title_singular' => 'رسوم تسجيل',
        'fields'         => [
            'id'                      => 'ID',
            'id_helper'               => ' ',
            'crec_reg_request'        => 'طلب تسجيل',
            'crec_reg_request_helper' => ' ',
            'fee_type'                => 'نوع الرسوم',
            'fee_type_helper'         => ' ',
            'created_at'              => 'Created at',
            'created_at_helper'       => ' ',
            'updated_at'              => 'Updated at',
            'updated_at_helper'       => ' ',
            'deleted_at'              => 'Deleted at',
            'deleted_at_helper'       => ' ',
            'fee_type_amt'            => 'نوع الرسوم Amt',
            'fee_type_amt_helper'     => ' ',
            'fee_qty'                 => 'الرسوم الكمية',
            'fee_qty_helper'          => ' ',
        ],
    ],
    'comAccount' => [
        'title'          => 'الحساب',
        'title_singular' => 'الحساب',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => ' ',
            'account_code'             => 'كود الحساب',
            'account_code_helper'      => ' ',
            'account_name'             => 'إسم الحساب',
            'account_name_helper'      => ' ',
            'account_address_a'        => 'عنوان الحساب بالعربي',
            'account_address_a_helper' => ' ',
            'note'                     => 'ملاحظة',
            'note_helper'              => ' ',
            'created_at'               => 'Created at',
            'created_at_helper'        => ' ',
            'updated_at'               => 'Updated at',
            'updated_at_helper'        => ' ',
            'deleted_at'               => 'Deleted at',
            'deleted_at_helper'        => ' ',
        ],
    ],

];