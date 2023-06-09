<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | such as the size rules. Feel free to tweak each of these messages.
    |
    */
    'validation_error' => 'البيانات المدخلة غير صحيحة.',
    'credentials' => 'خطأ في البيانات المدخلة',

    'accepted' => 'يجب قبول الحقل :attribute',
    'active_url' => 'الحقل :attribute لا يُمثّل رابطًا صحيحًا',
    'after' => 'يجب على الحقل :attribute أن يكون تاريخًا لاحقًا للتاريخ :date.',
    'after_or_equal' => 'الحقل :attribute يجب أن يكون تاريخاً لاحقاً أو مطابقاً للتاريخ :date.',
    'alpha' => 'يجب أن لا يحتوي الحقل :attribute سوى على حروف',
    'alpha_dash' => 'يجب أن لا يحتوي الحقل :attribute على حروف، أرقام ومطّات.',
    'alpha_num' => 'يجب أن يحتوي :attribute على حروفٍ وأرقامٍ فقط',
    'array' => 'يجب أن يكون الحقل :attribute ًمصفوفة',
    'before' => 'يجب على الحقل :attribute أن يكون تاريخًا سابقًا للتاريخ :date.',
    'before_or_equal' => 'الحقل :attribute يجب أن يكون تاريخا سابقا أو مطابقا للتاريخ :date',
    'between' => [
        'numeric' => 'يجب أن تكون قيمة :attribute بين :min و :max.',
        'file' => 'يجب أن يكون حجم الملف :attribute بين :min و :max كيلوبايت.',
        'string' => 'يجب أن يكون عدد حروف النّص :attribute بين :min و :max',
        'array' => 'يجب أن يحتوي :attribute على عدد من العناصر بين :min و :max',
    ],
    'boolean' => 'يجب أن تكون قيمة الحقل :attribute إما true أو false ',
    'confirmed' => 'حقل التأكيد غير مُطابق للحقل :attribute',
    'date' => 'الحقل :attribute ليس تاريخًا صحيحًا',
    'date_format' => 'لا يتوافق الحقل :attribute مع الشكل :format.',
    'different' => 'يجب أن يكون الحقلان :attribute و :other مُختلفان',
    'digits' => 'يجب أن يحتوي الحقل :attribute على :digits رقمًا/أرقام',
    'digits_between' => 'يجب أن يحتوي الحقل :attribute بين :min و :max رقمًا/أرقام ',
    'dimensions' => 'الـ :attribute يحتوي على أبعاد صورة غير صالحة.',
    'distinct' => 'للحقل :attribute قيمة مُكرّرة.',
    'email' => 'يجب أن يكون :attribute عنوان بريد إلكتروني صحيح البُنية',
    // The selected :attribute is invalid
    'enum' => 'الحقل :attribute ليس من القيم المسموح بها',
    'exists' => 'الحقل :attribute ليس صحيحا',
    'file' => 'الـ :attribute يجب أن يكون من ملفا.',
    'filled' => 'الحقل :attribute إجباري',
    'image' => 'يجب أن يكون الحقل :attribute صورةً',
    'in' => 'الحقل :attribute ليس صحيحا',
    'in_array' => 'الحقل :attribute غير موجود في :other.',
    'integer' => 'يجب أن يكون الحقل :attribute عددًا صحيحًا',
    'ip' => 'يجب أن يكون الحقل :attribute عنوان IP ذا بُنية صحيحة',
    'ipv4' => 'يجب أن يكون الحقل :attribute عنوان IPv4 ذا بنية صحيحة.',
    'ipv6' => 'يجب أن يكون الحقل :attribute عنوان IPv6 ذا بنية صحيحة.',
    'json' => 'يجب أن يكون الحقل :attribute نصا من نوع JSON.',
    'max' => [
        'numeric' => 'يجب أن تكون قيمة الحقل :attribute مساوية أو أصغر لـ :max.',
        'file' => 'يجب أن لا يتجاوز حجم الملف :attribute :max كيلوبايت',
        'string' => 'يجب أن لا يتجاوز طول النّص :attribute :max حروفٍ/حرفًا',
        'array' => 'يجب أن لا يحتوي الحقل :attribute على أكثر من :max عناصر/عنصر.',
    ],
    'mimes' => 'يجب أن يكون الحقل ملفًا من نوع : :values.',
    'mimetypes' => 'يجب أن يكون الحقل ملفًا من نوع : :values.',
    'min' => [
        'numeric' => 'يجب أن تكون قيمة الحقل :attribute مساوية أو أكبر لـ :min.',
        'file' => 'يجب أن يكون حجم الملف :attribute على الأقل :min كيلوبايت',
        'string' => 'يجب أن يكون طول النص :attribute على الأقل :min حروفٍ/حرفًا',
        'array' => 'يجب أن يحتوي الحقل :attribute على الأقل على :min عُنصرًا/عناصر',
    ],
    'not_in' => 'الحقل :attribute ليس صحيحًا',
    'numeric' => 'يجب على الحقل :attribute أن يكون رقمًا',
    'present' => 'يجب تقديم الحقل :attribute',
    'regex' => 'صيغة الحقل :attribute .غير صحيحة',
    'required' => 'الحقل :attribute مطلوب.',
    'required_if' => 'الحقل :attribute مطلوب في حال ما إذا كان :other يساوي :value.',
    'required_unless' => 'الحقل :attribute مطلوب في حال ما لم يكن :other يساوي :values.',
    'required_with' => 'الحقل :attribute إذا توفّر :values.',
    'required_with_all' => 'الحقل :attribute إذا توفّر :values.',
    'required_without' => 'الحقل :attribute إذا لم يتوفّر :values.',
    'required_without_all' => 'الحقل :attribute إذا لم يتوفّر :values.',
    'same' => 'يجب أن يتطابق الحقل :attribute مع :other',
    'size' => [
        'numeric' => 'يجب أن تكون قيمة الحقل :attribute مساوية لـ :size',
        'file' => 'يجب أن يكون حجم الملف :attribute :size كيلوبايت',
        'string' => 'يجب أن يحتوي النص :attribute على :size حروفٍ/حرفًا بالظبط',
        'array' => 'يجب أن يحتوي الحقل :attribute على :size عنصرٍ/عناصر بالظبط',
    ],
    'string' => 'يجب أن يكون الحقل :attribute نصآ.',
    'timezone' => 'يجب أن يكون :attribute نطاقًا زمنيًا صحيحًا',
    'unique' => 'قيمة الحقل :attribute مُستخدمة من قبل',
    'uploaded' => 'فشل في تحميل الـ :attribute',
    'url' => 'صيغة الرابط :attribute غير صحيحة',

    'not_found' => 'السجل غير موجود',
    'can_not_change_status' => 'لا يمكن تغيير حالة المسؤول',
    'end_date_not_exceeding_one_year' => 'التاريخ النهائي للحجب يجب أن يكون أكبر من تاريخ بدء الحجب ولا يجب أن يتجاوز عامًا واحدًا.',
    'if_not_exists_in_array' => ':attribute غير صحيح، لابد أن يكون واحدة من القيم التالية [',
    'not_all_filled' => ':attribute غير صحيح، لابد أن يكون جميع القيم [',

    'max_words' => 'الوصف المختصر يجب أن يحتوي بحد أقصى على :max_words كلمة',
    'creator_not_allowed' => 'العملية غير مسموحة للمنشئ',
    'gt' => [
        "array" => "يجب أن يحتوي حقل :attribute على أكثر من :value عناصر/عنصر.",
        "file" => "يجب أن يكون حجم ملف حقل :attribute أكبر من :value كيلوبايت.",
        "numeric" => "يجب أن تكون قيمة حقل :attribute أكبر من :value.",
        "string" => "يجب أن يكون طول نّص حقل :attribute أكثر من :value حروفٍ/حرفًا.",
    ],
    'gte' => [
        "array" => "يجب أن يحتوي حقل :attribute على الأقل على :value عُنصرًا/عناصر.",
        "file" => "يجب أن يكون حجم ملف حقل :attribute على الأقل :value كيلوبايت.",
        "numeric" => "يجب أن تكون قيمة حقل :attribute مساوية أو أكبر من :value.",
        "string" => "يجب أن يكون طول نص حقل :attribute على الأقل :value حروفٍ/حرفًا.",
    ],



    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
        'code' => [
            'unique' => 'هذا الكود مستخدم من قبل',
            'required' => 'الرجاء إدخال الكود',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

    'password' => [
        'mixed' => "يجب أن يحتوي حقل :attribute على حرف كبير وحرف صغير على الأقل.",
        'letters' => "يجب أن يحتوي حقل :attribute على حرف واحد على الأقل.",
        'symbols' => "يجب أن يحتوي حقل :attribute على رمز واحد على الأقل.",
        'numbers' => "يجب أن يحتوي حقل :attribute على رقم واحد على الأقل.",
        'uncompromised' => "حقل :attribute ظهر في بيانات مُسربة. الرجاء اختيار :attribute مختلف.",
    ],

    'attributes' => [
        'code' => 'الكود',
        'name' => 'الاسم',
        'username' => 'اسم المُستخدم',
        'email' => 'البريد الالكتروني',
        'first_name' => 'الاسم',
        'last_name' => 'اسم العائلة',
        'password' => 'كلمة المرور',
        'password_confirmation' => 'تأكيد كلمة المرور',
        'city' => 'المدينة',
        'country' => 'الدولة',
        'address' => 'العنوان',
        'phone' => 'الهاتف',
        'mobile' => 'الجوال',
        'age' => 'العمر',
        'gender' => 'النوع',
        'day' => 'اليوم',
        'month' => 'الشهر',
        'year' => 'السنة',
        'hour' => 'ساعة',
        'minute' => 'دقيقة',
        'second' => 'ثانية',
        'title' => 'اللقب',
        'title.ar' => 'العنوان بالعربية',
        'title.en' => 'العنوان بالانجليزية',
        'seo_title' => 'اللقب سيو',
        'content' => 'المُحتوى',
        'description' => 'الوصف',
        'seo_description' => 'الوصف سيو',
        'show_homepage' => 'عرض في الصفحة الرئيسية',
        'blog_category_id' => 'تصنيف المدونة',
        'excerpt' => 'المُلخص',
        'image' => 'الصورة',
        'date' => 'التاريخ',
        'time' => 'الوقت',
        'available' => 'مُتاح',
        'size' => 'الحجم',
        'type' => 'النوع',
        'status' => 'الحالة',
        'start_date' => 'تاريخ البداية',
        'end_date' => 'تاريخ النهاية',
        'start_time' => 'وقت البداية',
        'end_time' => 'وقت النهاية',
        'subject' => 'الموضوع',
        'message' => 'الرسالة',
        'details' => 'التفاصيل',
        'send_to' => 'إرسال إلى',
        'roles' => 'الصلاحيات',
        'permissions' => 'الصلاحيات',
        'verse_key_from' => 'من الآية مع السورة',
        'verse_key_to' => 'إلى الآية مع السورة',
        'sura_from' => 'من السورة',
        'sura_to' => 'إلى السورة',
        'verse_from' => 'من الآية',
        'verse_to' => 'إلى الآية',
        'verse_key' => 'الآية مع السورة',
        'sura' => 'السورة',
        'verse' => 'الآية',
        'juz' => 'الجزء',
        'hizb' => 'الحزب',
        'page' => 'الصفحة',
        'number' => 'الرقم',
        'number_in_sura' => 'الرقم في السورة',
        'juz_number' => 'رقم الجزء',
        'hizb_number' => 'رقم الحزب',
        'page_number' => 'رقم الصفحة',
        'verse_number' => 'رقم الآية',
    ],
];


