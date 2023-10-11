<?php

return [

    'modules' 				=> [
        'sections'    	=> [
            'sections'   	=> 'الأقسام',
            'listOf'   		=> 'قائمة الأقسام',
            'addNew'   		=> 'إضافة قسم جديد',
            'single'   		=> 'القسم',
        ],

        'users'  	 		=> [
            'control'  	 	=> 'الأعضاء والمشرفين',
            'listOf'   		=> 'قائمة الأعضاء والمشرفين',
            'addNew'   		=> 'إضافة مستخدم جديد',
            'single'   		=> 'العضو',
            'profile'   	=> 'إعدادات الحساب',
        ],

        'roles'  	 		=> [
            'control'  	 	=> 'الصلاحيات',
            'listOf'   		=> 'صلاحيات المجموعات',
            'addNew'   		=> 'إضافة صلاحية جديدة',
            'single'   		=> 'الصلاحية',
        ],

        'pages'  	 		=> [
            'name'  	 	=> 'الصفحات',
            'listOf'   		=> 'قائمة الصفحات',
            'addNew'   		=> 'إضافة صفحة جديدة',
            'single'   		=> 'الصفحة',
        ],

        'invoices'  	 		=> [
            'invoices'      => 'الفواتير',
            'listOf'   		=> 'قائمة الفواتير',
            'addNew'   		=> 'إضافة فاتورة جديدة',
            'single'   		=> 'الفاتورة',
        ],

        'items'     		=> [
            'items'     	=> 'المنتجات',
            'listOf'   		=> 'قائمة المنتجات',
            'addNew'   		=> 'إضافة منتج جديد',
            'single'   		=> 'المنتج',
        ],

        'settings'     	=> [
            'WebsiteControl'   	=> 'بيانات الموقع',
            'control'     	    => 'الإعدادات',
            'websiteSettings'   => 'إعدادات الموقع',
            'single'   		    => 'الموقع',
        ],

        'reports'     	     => [
            'control'     	    => 'التقارير',
            'listOf'   		    => 'قائمة التقارير',
            'single'   		    => 'التقرير',
            'view'   		    => 'الإطلاع على التقرير',
        ],
    ],

    'pages' 				=> [
        'site'     			=> 'الموقع',
        'dashboard'     	=> 'الرئيسية',
        'editProfile'   	=> 'تعديل ملفك الشخصي',
        'settings'   		=> 'الإعدادات',
    ],

    'hints' 				=> [
        'paginationStatus'  => 'عرض من :first إلى :last  من أصل :total  عنصر',
    ],

    'attributes' => [
        'navBar'                => [
            'id'                => '#',
            'icon'             	=> 'الصورة',
            'title'             => 'العنوان',
            'name'             	=> 'الاسم',
            'photo'             => 'الصورة',
            'date'              => 'التاريخ',
            'status'            => 'الحالة',
            'control'           => 'التحكم',
            'details'           => 'التفاصيل',
            'adverts'           => 'عدد الإعلانات',
            'visits'            => 'إجمالى مرات الظهور',
            'clicks'            => 'إجمالى النقرات',
            'area'              => 'المنطقة الإعلانية',
            'totalVisits'       => 'عدد مرات الظهور',
            'totalClicks'       => 'عدد النقرات',
            'count'             => 'عدد العناصر',
            'country'           => 'الدولة',
        ],

        'dashboard'             => [
            'statistics'        => [
                'topics'	    => 'عدد المواد',
                'taxonomies'	=> 'عدد التصنيفات',
                'users'			=> 'عدد الأعضاء المسجلين',
                'adverts'   	=> 'عدد الإعلانات',
                'viewDetails'	=> 'المزيد من التفاصيل',
            ],
            'widgets'           => [
                'calendar'		=> 'التقويم',
                'todoList'		=> 'قائمة المهام',
                'filterDate'    => [
                    'from'      => 'من',
                    'to'        => 'إلي'
                ],

                'activityLog'   => [
                    'label'         => 'سجل العمليات',
                    'user'          => 'المستخدم',
                    'action'        => 'الإجراء',
                    'date'          => 'الوقت',
                ],
            ],
        ],

        'taxonomies'            => [
            'slug'              => 'المعرّف',
            'slugHint'          => 'أدخل معرّف القسم هنا',
            'title'             => 'اسم القسم',
            'titleHint'         => 'أكتب اسم القسم هنا',
            'parentTaxonomy'    => 'القسم الأب',
            'noParentTaxonomy'  => 'بدون قسم أب [القسم رئيسي]',
            'description'       => 'وصف القسم',
            'descriptionHint'   => 'اكتب وصفاً مختصراً للقسم هنا',
            'add'   			=> 'إضافة قسم جديد',
            'update'   		=> 'تعديل القسم',
        ],

        'topics'                => [
            'taxonomies'         => 'التصنيفات',
            'taxonomiesHint'	 => 'اختر التصنيفات التي يظهر بها الإعلان',
        ],

        'users'            		=> [
            'name'              => 'اسم المستخدم',
            'nameHint'          => 'أكتب اسم المستخدم هنا',
            'firstName'         => 'الاسم الأول',
            'firstNameHint'     => 'أكتب الاسم الأول هنا',
            'lastName'          => 'اسم العائلة',
            'lastNameHint'      => 'أكتب اسم العائلة هنا',
            'email'    			=> 'البريد الإلكتروني',
            'emailHint'  		=> 'أكتب البريد الإلكتروني هنا',
            'password'	      	=> 'كلمة المرور',
            'passwordHint'   	=> 'اختر كلمة مرور صعبة التخمين',
            'passwordConfirm'   => 'تأكيد كلمة المرور',
            'passwordConfirmHint'=> 'أعد إدخال كلمة المرور مرة أخرى للتأكد أنك أدخلتها بشكل صحيح',
            'bio'				=> 'نبذة',
            'bioHint'			=> 'اكتب نبذه تعريفية قصيرة عن العضو',
            'job'				=> 'الوظيفة',
            'jobHint'			=> 'أكتب وظيفة العضو',
            'gender'			=> [
                'gender'		=> 'الجنس',
                'male'			=> 'ذكر',
                'female'		=> 'أنثى',
            ],

            'country'   		=> 'الدولة',
            'countryHint'   	=> 'اختر دولة العضو',
            'city'   			=> 'المدينة',
            'cityHint'   		=> 'اختر مدينة العضو',
            'address'   		=> 'العنوان',
            'addressHint'   	=> 'اكتب عنوان العضو',
            'postalCode'   		=> 'الرمز البريدي',
            'postalCodeHint'   	=> 'postal code',
            'photo'   			=> 'صورة العضو',
            'photoHint'   		=> 'اختر صورة للعضو',
            'phoneNumber'   	=> 'رقم الهاتف',
            'phoneNumberHint'   => 'أدخل رقم الهاتف',
            'dateOfBirth'   	=> 'تاريخ الميلاد',
            'dateOfBirthHint'   => 'أدخل تاريخ ميلاد العضو',
            'whatsappNumber'   	=> 'اكتب رقم الواتس',
            'socialHint'   	    => 'حسابات التواصل الإجتماعى',
            'facebookUrl'   	=> 'رابط حساب فيس بوك',
            'facebookUrlHint'   => 'https://facebook.com/username',
            'twitterUrl'   		=> 'رابط حساب تويتر',
            'twitterUrlHint'   	=> 'https://twitter.com/username',
            'instagramUrl'   	=> 'رابط حساب انستجرام',
            'instagramUrlHint'  => 'https://instagram.com/username',
            'webSiteUrl'   		=> 'رابط الموقع الشخصي',
            'webSiteUrlHint'   	=> 'http://yourWebsite.com',
            'siteTheme'   		=> 'ستايل الموقع',
            'siteThemeHint'   	=> 'اختر ستايل يتصفح به العضو الموقع',
            'siteLang'   		=> 'لغة الموقع',
            'siteLangHint'   	=> 'اختر اللغة الافتراضية لهذا العضو ليتصفح الموقع بها',
            'roles'   		    => 'الرتبة',
            'rolesHint'   	    => 'اختر رتبة العضو، مدير، أم عضو عادي، ..',
            'website'           => 'اسم الموقع',
            'group'   		    => 'المجموعة',
            'groups'   		    => [
                'users'             => 'المستخدمين',
            ],
            'groupHint'   	    => 'اختر المجموعة التابع لها العضو',
            'permissions'   	=> 'صلاحيات العضو',
            'isAdmin'   		=> 'حساب مشرف؟',
            'isAdminHint'   	=> 'فعّل هذا الخيار ليستطيع العضو دخول لوحة التحكم',
            'rootAdmin'   		=> 'مدير عام للموقع؟',
            'rootAdminHint'   	=> 'فعّل هذا الخيار لإعطاء العضو صلاحيات كاملة للتحكم بالموقع',

            'addNow'   			=> 'أضف العضو',
            'updateNow'   		=> 'تعديل العضو',
        ],

        'roles'            		=> [
            'name'             	=> 'اسم الصلاحية',
            'nameHint'         	=> 'اكتب اسم الصلاحية هنا',
            'slug' 				=> 'معرّف الصلاحية',
            'slugHint'       	=> 'اكتب معرّف فريد للصلاحية بالإنجليزية',
            'permissions'   	=> 'صاحب الصلاحية قادر على',
            'permissionsType'   => [
                'all'			=> 'التحكم في كل شيء',
                'custom'		=> 'تخصيص',
            ],
            'addNow'   			=> 'إضافة صلاحية',
            'updateNow'   		=> 'تعديل الصلاحية',
        ],

        'pages'            		=> [
            'title'             => 'العنوان',
            'titleHint'         => 'أضف العنوان',
            'cover'           	=> 'الغلاف',
            'description' 		=> 'الوصف',
            'descriptionHint' 	=> 'أضف وصف الصفحة',

            'isProtected'       => 'محمي من الحذف',
            'allowComments'     => 'تمكين التعليقات',
            'addNow'   		    => 'إضافة الصفحة',
            'updateNow'  	    => 'تعديل الصفحة',
        ],

        'settings'            => [
            'title'           	=> 'اسم الموقع',
            'titleHint'         => 'أضف اسم الموقع هنا',
            'username'           => 'Username',
            'usernameHint'       => 'Add Username',
            'webmasterMail'      => 'البريد الإلكترونى',
            'webmasterMailHint'  => 'أدخل البريد الإلكترونى',
            'phoneNumber'        => 'رقم الهاتف',
            'phoneNumberHint'    => 'أدخل رقم الهاتف',
            'description'        => 'الوصف',
            'descriptionHint'    => 'أكتب وصف الموقع هنا',
            'logo'               => 'لوجو الموقع',
            'cover'              => 'غلاف الموقع',
            'watermark'          => 'العلامة المائية',
            'relatedTaxonomies'  => 'التصنيفات',
            'taxonomiesHint'	 => 'اختر التصنيفات المتعلقة بالموقع',
            'relatedTags'        => 'الوسوم',
            'tagsHint'	         => 'أدخل الوسوم المرتبطه بالموقع',
            'plan'               => 'الخطة',
            'address'            => 'العنوان',
            'addressHint'        => 'أضف العنوان بالتفصيل',
            'planHint'           => 'اختر الخطة',
            'payment_period'     => 'فترة الدفع',
            'defaultShippingCompany'=> 'شركة الشحن',
            'update'   			 => 'حفظ التعديلات',
            'input'   			 => 'الحقل',
        ],

        'logs'                  => [
            'create'            => 'تمت الإضافة',
            'update'            => 'تم التعديل',
            'delete'            => 'تم الحذف',
            'enabled'           => 'تم التفعيل',
            'disabled'          => 'تم التعطيل',
            'published'         => 'تم النشر',
            'register'          => 'تم التسجيل',
            'pinned'            => 'تم التثبيت',
            'unpinned'          => 'تم إلغاء التثبيت',
            'sorted'            => 'تم إعادة الترتيب',
        ],
    ],

    'status'                => [
        'enabled'           => 'مفعل',
        'disabled'          => 'معطل',
        'waiting'         	=> 'بإنتظار التفعيل',
    ],

    'alerts'                 =>  [
        'addedToFavourites'         => 'تمت الإضافة إلى المفضلة',
        'removedFromFavourites'     => 'تمت الإزالة من المفضلة',
    ],

];
