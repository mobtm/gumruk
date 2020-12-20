<!---------------------USERS------------------------->

Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->id('post_id');
            $table->string('username');
            $table->string('password');
            $table->string('position');
            $table->string('fullname');
            $table->string('phone');
            $table->string('type');
            $table->timestamps();
        });

<!---------------------REGISTRATION------------------------->

Schema::create('registration', function (Blueprint $table) {
            $table->id();
            $table->bigUnsignedInteger('post_id');
            $table->boolean('type');

            $table->int('vehicle_country_id');
            $table->string('vehicle_type');
            $table->string('vehicle_model');
            $table->string('vehicle_number');
            $table->string('license_number');
            $table->string('cmr');
            $table->string('invoice');
            $table->string('sender');
            $table->string('receiver');
            $table->date('date');
            $table->date('date');
            $table->int('country_to_id');
            $table->int('from_country_id');
            $table->int('transport_type_id');
            $table->timestamps();
        });

<!------------------------------------- ALL HELPER TABLES ------------------------------------->

<!---------------------GOODS------------------------->

Schema::create('goods', function (Blueprint $table) {
            $table->id();
            $table->id('reg_id');
            $table->string('title');
            $table->string('gng_code');
            $table->string('weight');
            $table->int('area');
            $table->timestamps();
        });

<!---------------------DRIVERS------------------------->

Schema::create('drivers', function (Blueprint $table) {
            $table->id();
            $table->id('reg_id');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('patronymic');
            $table->string('birth_country_id');
            $table->datetime('dob');
            $table->string('passport_number');
            $table->timestamps();
        });

<!---------------------POINTS------------------------->

Schema::create('points', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('code');
            $table->timestamps();
        });

<!---------------------COUNTRIES------------------------->

Schema::create('countries', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('code');
            $table->timestamps();
        });

<!---------------------DISINFECTION_TYPES------------------------->

Schema::create('disinfection_types', function (Blueprint $table) {
            $table->id();
            $table->string('title')
            $table->timestamps();
        });

<!---------------------GNG_CODES------------------------->

Schema::create('gng_codes', function (Blueprint $table) {
            $table->id();
            $table->string('title')
            $table->string('code')
            $table->timestamps();
        });
<!---------------------------------------------------------------------------------------->

<!---------------------PAYMENTS------------------------->

Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->id('reg_id');
            $table->string('type');
            $table->string('title');
            $table->string('amount');
            $table->enum('currency', ['tmt', 'usd']);
            $table->boolean('paid');
            $table->string('reciept_number');
            $table->timestamps();
        });

<!---------------------DISINFECTION------------------------->

Schema::create('disinfection', function (Blueprint $table) {
            $table->id();
            $table->id('reg_id');
            $table->string('disinfection_type_id');
            $table->string('disinfection_chemical_id');
            $table->string('veterinary_fullname');
            $table->string('disinfector_fullname');
            $table->string('notes')->nullable();
            $table->timestamps();
        });

<!---------------------SANITAR_CHECK------------------------->

Schema::create('sanitar_check', function (Blueprint $table) {
            $table->id();
            $table->id('reg_id');
            $table->string('sanitar_chemicals_id');
            $table->string('notes')->nullable();
            $table->timestamps();
        });

<!---------------------RENTGEN------------------------->

Schema::create('rentgen', function (Blueprint $table) {
            $table->id();
            $table->id('reg_id');
            $table->date('date');
            $table->string('document_number');
            $table->string('document_number');
            $table->int('checked_area');
            $table->date('check_date');
            $table->string('check_result');
            $table->string('check_duty');
            $table->timestamps();
        });

<!---------------------CAR_CHECK------------------------->

Schema::create('car_check', function (Blueprint $table) {
            $table->id();
            $table->id('reg_id');
            $table->string('registration_number');
            $table->date('exit_date');
            $table->string('destination');
            $table->int('exit_point_id');
            $table->string('insurance_number');
            $table->date('expire_date');
            $table->string('license_number');
            $table->string('vehicle_height');
            $table->string('vehicle_weight');
            $table->string('vehicle_timing');
            $table->boolean('loaded');
            $table->timestamps();
        });

<!---------------------QUARANTINE------------------------->

Schema::create('quarantine', function (Blueprint $table) {
            $table->id();
            $table->id('reg_id');
            $table->int('good_id');
            $table->string('good_volume');
            $table->string('ikr_number');
            $table->string('registered_by');
            $table->string('vehicle_volume');
            $table->string('chemical_name');
            $table->string('chemical_required_amount');
            $table->string('chemical_spent_amount');
            $table->string('disinfection_spent_time');
            $table->string('ventilation_spent_time'); 

            <!--------CYKYS-------->
            $table->string('fito_certificate_number'); 
            $table->timestamps();
        });

<!---------------------VETERINARY------------------------->

Schema::create('veterinary', function (Blueprint $table) {
            $table->id();
            $table->id('reg_id');
            $table->string('veterinary_reg_number');
            $table->date('veterinary_reg_date');
            $table->string('permission_number');
            $table->date('permission_date');
            $table->string('assurance_number'); 

            <!--------CYKYS-------->
            $table->date('certificate_date');
            $table->string('certificate_number');
            $table->date('assurance_date');
            $table->string('assurance_number');
            $table->date('lab_analysis_date');
            $table->string('lab_analysis_number');
            
            $table->string('final_analysis_number');
            $table->date('final_analysis_date');
            $table->string('analysis_point');            
            $table->timestamps();
        });

<!---------------------TRANSPORT------------------------->

Schema::create('transport', function (Blueprint $table) {
            $table->id();
            $table->id('reg_id');
            $table->enum('type', ['turkmenistan', 'foreign']);
            $table->string('vehicle_owner');
            $table->string('license_number');
            $table->string('license_type');
            $table->string('roadmap_number');
            $table->string('patent_number');
            $table->date('return_date');
            $table->boolean('loaded');
            
            $table->date('entry_date');
            $table->string('license_addition_number');
            $table->string('insurance_number');
            $table->string('cmr_number');
            $table->timestamps();
        });