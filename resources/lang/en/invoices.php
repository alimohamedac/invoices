<?php

return [

    'modules' 				=> [
        'sections'    	=> [
            'sections'   	=> 'Taxonomies',
            'listOf'   		=> 'List Of Taxonomies',
            'addNew'   		=> 'Add New Taxonomy',
            'single'   		=> 'taxonomy',
        ],

        'users'  	 		=> [
            'control'  	 	=> 'Users',
            'listOf'   		=> 'List Of Users',
            'addNew'   		=> 'Add New User',
            'single'   		=> 'user',
            'profile'   	=> 'Profile Settings',
        ],

        'roles'  	 		=> [
            'control'  	 	=> 'Roles',
            'listOf'   		=> 'List Of Roles',
            'addNew'   		=> 'Add New Role',
            'single'   		=> 'role',
        ],

        'pages'  	 		=> [
            'name'  	 	=> 'Pages',
            'listOf'   		=> 'List Of Pages',
            'addNew'   		=> 'Add New Page',
            'single'   		=> 'page',
        ],

        'invoices'  	 		=> [
            'invoices'  	=> 'Invoices',
            'listOf'   		=> 'List Of Invoices',
            'addNew'   		=> 'Add New Invoice',
            'single'   		=> 'Invoice',
        ],

        'items'     		=> [
            'items'     	=> 'Items',
            'listOf'   		=> 'List Of Items',
            'addNew'   		=> 'Add New Item',
            'single'   		=> 'item',
        ],

        'settings'     	=> [
            'WebsiteControl'   	=> 'Website Control',
            'control'     	    => 'Settings',
            'websiteSettings'   => 'Website Settings',
            'single'   		    => 'Website',
        ],

        'reports'     	   => [
            'control'      => 'Reports',
            'listOf'       => 'List Of Reports',
            'single'   	   => 'Report',
            'view'   	   => 'View Report',
        ],
    ],

    'pages' 				=> [
        'site'     			=> 'Home',
        'dashboard'     	=> 'Dashboard',
        'editProfile'   	=> 'Edit Profile',
        'settings'   		=> 'Settings',
    ],

    'hints' 				=> [
        'paginationStatus'  => 'Showing :first to :last of :total entries',
    ],

    'attributes' => [
        'navBar'                => [
            'id'                => 'ID',
            'title'             => 'Title',
            'name'             	=> 'Name',
            'photo'             => 'Photo',
            'date'              => 'Date',
            'status'            => 'Status',
            'control'           => 'Control',
            'details'           => 'Details',
            'adverts'           => 'Adverts',
            'visits'            => 'Visits',
            'clicks'            => 'Clicks',
            'area'              => 'Advert Area',
            'totalVisits'       => 'Total Visits',
            'totalClicks'       => 'Total Clicks',
            'count'             => 'Items Count',
            'country'           => 'Country',
        ],

        'dashboard'             => [
            'statistics'        => [
                'topics'	    => 'Number Of Topics',
                'taxonomies'	=> 'Number Of Taxonomies',
                'users'			=> 'Registered Members',
                'viewDetails'	=> 'view more details',
            ],
            'widgets'           => [
                'calendar'		=> 'Calendar',
                'toDoList'		=> 'ToDo List',
                'filterDate'    => [
                    'from'      => 'From',
                    'to'        => 'To'
                ],

                'activityLog'   => [
                    'label'         => 'Activity Log',
                    'user'          => 'User',
                    'action'        => 'Action',
                    'date'          => 'Date',
                ],
            ],
        ],

        'taxonomies'            => [
            'slug'              => 'slug',
            'slugHint'          => 'type the taxonomy slug here',
            'title'             => 'Taxonomy Name',
            'titleHint'         => 'type the taxonomy name here',
            'parentTaxonomy'    => 'Parent Taxonomy',
            'noParentTaxonomy'  => 'without parent [Main Taxonomy]',
            'description'       => 'Description',
            'descriptionHint'   => 'type the taxonomy description here',
            'add'   			=> 'Add New Taxonomy',
            'update'   		=> 'Update The Taxonomy',
        ],

        'topics'                => [
            'taxonomies'         => 'Taxonomies',
            'taxonomiesHint'	 => 'Choose Advert Taxonomies',
        ],

        'users'            		=> [
            'name'              => 'Username',
            'nameHint'          => 'type the username here',
            'firstName'         => 'First Name',
            'firstNameHint'     => 'type the firstName here',
            'lastName'          => 'Last Name',
            'lastNameHint'      => 'type the lastName here',
            'email'    			=> 'Email',
            'emailHint'  		=> 'type the email address here',
            'password'	      	=> 'Password',
            'passwordHint'   	=> 'type the password here',
            'passwordConfirm'   => 'Confirm Password',
            'passwordConfirmHint'=> 'type the password again here',
            'bio'				=> 'Bio',
            'bioHint'			=> 'type some details about the user',
            'job'				=> 'Job',
            'jobHint'			=> 'type the user job',
            'gender'			=> [
                'gender'		=> 'Gender',
                'male'			=> 'Male',
                'female'		=> 'Female',
            ],
            'country'   		=> 'Country',
            'countryHint'   	=> 'type the user country',
            'city'   			=> 'City',
            'cityHint'   		=> 'type the user city',
            'address'   		=> 'Address',
            'addressHint'   	=> 'type the user address',
            'postalCode'   		=> 'Postal Code',
            'postalCodeHint'   	=> 'type the user area postal Code',
            'photo'   			=> 'Photo',
            'photoHint'   		=> 'choose photo for the user',
            'phoneNumber'   	=> 'Phone',
            'phoneNumberHint'   => 'type the user phone number',
            'dateOfBirth'   	=> 'date of birth',
            'dateOfBirthHint'   => 'type the user date of birth',
            'socialHint'   	    => 'Social Media Accounts',
            'facebookUrl'   	=> 'facebook url',
            'facebookUrlHint'   => 'https://facebook.com/username',
            'twitterUrl'   		=> 'twitter url',
            'twitterUrlHint'   	=> 'https://twitter.com/username',
            'instagramUrl'   	=> 'instagram url',
            'instagramUrlHint' => 'https://instagram.com/username',
            'webSiteUrl'   		=> 'website url',
            'webSiteUrlHint'   	=> 'http://yourWebsite.com',
            'siteTheme'   		=> 'Theme',
            'siteThemeHint'   	=> 'the site theme for the user',
            'siteLang'   		=> 'site language',
            'siteLangHint'   	=> 'specify the user browsing language',
            'roles'   		    => 'Roles',
            'rolesHint'   	    => 'choose if this is a user or admin ,..',
            'website'           => 'ًWebsite Name',
            'group'   		    => 'Group',
            'groups'   		    => [
                'users'             => 'Users',
            ],
            'groupHint'   	    => 'choose user group',
            'permissions'   	=> 'User Permissions',
            'isAdmin'   		=> 'Is Moderator?',
            'isAdminHint'   	=> 'can the user access Control Panel?',
            'rootAdmin'   		=> 'Is Super Administrator?',
            'rootAdminHint'   	=> 'is this user fully Administrator?',

            'addNow'   			=> 'Add User',
            'updateNow'   		=> 'Update The User',
        ],

        'roles'            		=> [
            'name'             	=> 'Role Name',
            'nameHint'         	=> 'type the role name here',
            'slug' 				=> 'Role Slug',
            'slugHint'       	=> 'type a unique slug for this role',
            'permissions'   	=> 'This Role Can',
            'permissionsType'   => [
                'all'			=> 'Control Everything',
                'custom'		=> 'Custom',
            ],
            'addNow'   			=> 'Add Role',
            'updateNow'   		=> 'Edit The Role',
        ],

        'settings'            => [
            'title'           	=> 'Website Name',
            'titleHint'         => 'Add Website Name Here',
            'username'           => 'Username',
            'usernameHint'       => 'Add Username',
            'webmasterMail'      => 'Email',
            'webmasterMailHint'  => 'type the email address',
            'phoneNumber'        => 'Phone',
            'phoneNumberHint'    => 'type phone number',
            'description'        => 'Description',
            'descriptionHint'    => 'Add Website Description Here',
            'logo'               => 'Logo',
            'cover'              => 'Cover',
            'watermark'          => 'Watermark',
            'relatedTaxonomies'  => 'Taxonomies',
            'taxonomiesHint'	 => 'choose related taxonomies',
            'relatedTags'        => 'Tags',
            'tagsHint'	         => 'type the tags',
            'plan'               => 'Plan',
            'address'            => 'Address',
            'addressHint'        => 'Add Address',
            'planHint'           => 'choose plan',
            'payment_period'     => 'Payment Period',
            'defaultShippingCompany'=> 'Shipping Company',
            'update'   			 => 'Update',
            'input'   			 => 'Input',
        ],

        'logs'                  => [
            'create'            => 'Added',
            'update'            => 'Updated',
            'delete'            => 'Deleted',
            'enabled'           => 'Enabled',
            'disabled'          => 'Disabled',
            'published'         => 'Published',
            'register'          => 'Registered',
            'pinned'            => 'pinned',
            'unpinned'          => 'unpinned',
            'sorted'            => 'Sorted',
        ],
    ],

    'status'                => [
        'enabled'           => 'Enabled',
        'disabled'          => 'Disabled',
        'waiting'         	=> 'Waiting',
    ],

    'alerts'                =>  [
        'addedToFavourites'         => 'Added to Favourites',
        'removedFromFavourites'     => 'Removed from Favourites',
    ],

];
