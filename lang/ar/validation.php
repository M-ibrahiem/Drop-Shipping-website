<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'يجب قبول :attribute.',
    'accepted_if' => 'يجب قبول :attribute عندما يكون :other هو :value.',
    'active_url' => 'يجب أن يكون :attribute عنوان URL صالحًا.',
    'after' => 'يجب أن يكون :attribute تاريخًا بعد :date.',
    'after_or_equal' => 'يجب أن يكون :attribute تاريخًا بعد أو يساوي :date.',
    'alpha' => 'يجب أن يحتوي :attribute على حروف فقط.',
    'alpha_dash' => 'يجب أن يحتوي :attribute على حروف، أرقام، شرطات، وشرطات سفلية.',
    'alpha_num' => 'يجب أن يحتوي :attribute على حروف وأرقام فقط.',
    'array' => 'يجب أن يكون :attribute مصفوفة.',
    'ascii' => 'يجب أن يحتوي :attribute على أحرف وأرقام أحادية البايت فقط.',
    'before' => 'يجب أن يكون :attribute تاريخًا قبل :date.',
    'before_or_equal' => 'يجب أن يكون :attribute تاريخًا قبل أو يساوي :date.',
    'between' => [
        'array' => 'يجب أن يكون :attribute بين :min و :max عنصرًا.',
        'file' => 'يجب أن يكون :attribute بين :min و :max كيلوبايت.',
        'numeric' => 'يجب أن يكون :attribute بين :min و :max.',
        'string' => 'يجب أن يكون :attribute بين :min و :max حرفًا.',
    ],
    'boolean' => 'يجب أن يكون :attribute صحيحًا أو خطأ.',
    'can' => 'يحتوي :attribute على قيمة غير مصرح بها.',
    'confirmed' => 'تأكيد :attribute غير متطابق.',
    'contains' => 'يحتوي :attribute على قيمة مطلوبة مفقودة.',
    'current_password' => 'كلمة المرور غير صحيحة.',
    'date' => 'يجب أن يكون :attribute تاريخًا صالحًا.',
    'date_equals' => 'يجب أن يكون :attribute تاريخًا يساوي :date.',
    'date_format' => 'يجب أن يتطابق :attribute مع الصيغة :format.',
    'decimal' => 'يجب أن يحتوي :attribute على :decimal منازل عشرية.',
    'declined' => 'يجب رفض :attribute.',
    'declined_if' => 'يجب رفض :attribute عندما يكون :other هو :value.',
    'different' => 'يجب أن يكون :attribute و :other مختلفين.',
    'digits' => 'يجب أن يكون :attribute :digits رقمًا.',
    'digits_between' => 'يجب أن يكون :attribute بين :min و :max رقمًا.',
    'dimensions' => 'يحتوي :attribute على أبعاد صورة غير صالحة.',
    'distinct' => 'يحتوي :attribute على قيمة مكررة.',
    'doesnt_end_with' => 'يجب أن لا ينتهي :attribute بأحد القيم التالية: :values.',
    'doesnt_start_with' => 'يجب أن لا يبدأ :attribute بأحد القيم التالية: :values.',
    'email' => 'يجب أن يكون :attribute عنوان بريد إلكتروني صالحًا.',
    'ends_with' => 'يجب أن ينتهي :attribute بأحد القيم التالية: :values.',
    'enum' => 'القيمة المختارة لـ :attribute غير صالحة.',
    'exists' => 'القيمة المختارة لـ :attribute غير صالحة.',
    'extensions' => 'يجب أن يحتوي :attribute على إحدى الامتدادات التالية: :values.',
    'file' => 'يجب أن يكون :attribute ملفًا.',
    'filled' => 'يجب أن يحتوي :attribute على قيمة.',
    'gt' => [
        'array' => 'يجب أن يحتوي :attribute على أكثر من :value عنصرًا.',
        'file' => 'يجب أن يكون :attribute أكبر من :value كيلوبايت.',
        'numeric' => 'يجب أن يكون :attribute أكبر من :value.',
        'string' => 'يجب أن يكون :attribute أكبر من :value حرفًا.',
    ],
    'gte' => [
        'array' => 'يجب أن يحتوي :attribute على :value عنصرًا أو أكثر.',
        'file' => 'يجب أن يكون :attribute أكبر من أو يساوي :value كيلوبايت.',
        'numeric' => 'يجب أن يكون :attribute أكبر من أو يساوي :value.',
        'string' => 'يجب أن يكون :attribute أكبر من أو يساوي :value حرفًا.',
    ],
    'hex_color' => 'يجب أن يكون :attribute لونًا سداسيًا صالحًا.',
    'image' => 'يجب أن يكون :attribute صورة.',
    'in' => 'القيمة المختارة لـ :attribute غير صالحة.',
    'in_array' => 'يجب أن يكون :attribute موجودًا في :other.',
    'integer' => 'يجب أن يكون :attribute عددًا صحيحًا.',
    'ip' => 'يجب أن يكون :attribute عنوان IP صالحًا.',
    'ipv4' => 'يجب أن يكون :attribute عنوان IPv4 صالحًا.',
    'ipv6' => 'يجب أن يكون :attribute عنوان IPv6 صالحًا.',
    'json' => 'يجب أن يكون :attribute نصًا بصيغة JSON.',
    'list' => 'يجب أن يكون :attribute قائمة.',
    'lowercase' => 'يجب أن يكون :attribute بحروف صغيرة.',
    'lt' => [
        'array' => 'يجب أن يحتوي :attribute على أقل من :value عنصرًا.',
        'file' => 'يجب أن يكون :attribute أقل من :value كيلوبايت.',
        'numeric' => 'يجب أن يكون :attribute أقل من :value.',
        'string' => 'يجب أن يكون :attribute أقل من :value حرفًا.',
    ],
    'lte' => [
        'array' => 'يجب أن لا يحتوي :attribute على أكثر من :value عنصرًا.',
        'file' => 'يجب أن يكون :attribute أقل من أو يساوي :value كيلوبايت.',
        'numeric' => 'يجب أن يكون :attribute أقل من أو يساوي :value.',
        'string' => 'يجب أن يكون :attribute أقل من أو يساوي :value حرفًا.',
    ],
    'mac_address' => 'يجب أن يكون :attribute عنوان MAC صالحًا.',
    'max' => [
        'array' => 'يجب أن لا يحتوي :attribute على أكثر من :max عنصرًا.',
        'file' => 'يجب أن لا يكون :attribute أكبر من :max كيلوبايت.',
        'numeric' => 'يجب أن لا يكون :attribute أكبر من :max.',
        'string' => 'يجب أن لا يكون :attribute أكبر من :max حرفًا.',
    ],
    'max_digits' => 'يجب أن لا يحتوي :attribute على أكثر من :max رقمًا.',
    'mimes' => 'يجب أن يكون :attribute ملفًا من النوع: :values.',
    'mimetypes' => 'يجب أن يكون :attribute ملفًا من النوع: :values.',
    'min' => [
        'array' => 'يجب أن يحتوي :attribute على الأقل :min عنصرًا.',
        'file' => 'يجب أن يكون :attribute على الأقل :min كيلوبايت.',
        'numeric' => 'يجب أن يكون :attribute على الأقل :min.',
        'string' => 'يجب أن يكون :attribute على الأقل :min حرفًا.',
    ],
    'min_digits' => 'يجب أن يحتوي :attribute على الأقل :min رقمًا.',
    'missing' => 'يجب أن يكون :attribute مفقودًا.',
    'missing_if' => 'يجب أن يكون :attribute مفقودًا عندما يكون :other هو :value.',
    'missing_unless' => 'يجب أن يكون :attribute مفقودًا ما لم يكن :other هو :value.',
    'missing_with' => 'يجب أن يكون :attribute مفقودًا عندما يكون :values موجودًا.',
    'missing_with_all' => 'يجب أن يكون :attribute مفقودًا عندما تكون :values موجودة.',
    'multiple_of' => 'يجب أن يكون :attribute من مضاعفات :value.',
    'not_in' => 'القيمة المختارة لـ :attribute غير صالحة.',
    'not_regex' => 'صيغة :attribute غير صالحة.',
    'numeric' => 'يجب أن يكون :attribute رقمًا.',
    'password' => [
        'letters' => 'يجب أن يحتوي :attribute على حرف واحد على الأقل.',
        'mixed' => 'يجب أن يحتوي :attribute على حرف كبير وحرف صغير على الأقل.',
        'numbers' => 'يجب أن يحتوي :attribute على رقم واحد على الأقل.',
        'symbols' => 'يجب أن يحتوي :attribute على رمز واحد على الأقل.',
        'uncompromised' => 'القيمة المقدمة لـ :attribute ظهرت في تسريب بيانات. يرجى اختيار قيمة مختلفة.',
    ],
    'present' => 'يجب أن يكون :attribute موجودًا.',
    'present_if' => 'يجب أن يكون :attribute موجودًا عندما يكون :other هو :value.',
    'present_unless' => 'يجب أن يكون :attribute موجودًا ما لم يكن :other هو :value.',
    'present_with' => 'يجب أن يكون :attribute موجودًا عندما يكون :values موجودًا.',
    'present_with_all' => 'يجب أن يكون :attribute موجودًا عندما تكون :values موجودة.',
    'prohibited' => 'يجب أن يكون :attribute محظورًا.',
    'prohibited_if' => 'يجب أن يكون :attribute محظورًا عندما يكون :other هو :value.',
    'prohibited_unless' => 'يجب أن يكون :attribute محظورًا ما لم يكن :other في :values.',
    'prohibits' => 'يجب أن يمنع :attribute وجود :other.',
    'regex' => 'صيغة :attribute غير صالحة.',
    'required' => 'يجب أن يكون :attribute مطلوبًا.',
    'required_array_keys' => 'يجب أن يحتوي :attribute على مدخلات لـ: :values.',
    'required_if' => 'يجب أن يكون :attribute مطلوبًا عندما يكون :other هو :value.',
    'required_if_accepted' => 'يجب أن يكون :attribute مطلوبًا عندما يتم قبول :other.',
    'required_if_declined' => 'يجب أن يكون :attribute مطلوبًا عندما يتم رفض :other.',
    'required_unless' => 'يجب أن يكون :attribute مطلوبًا ما لم يكن :other في :values.',
    'required_with' => 'يجب أن يكون :attribute مطلوبًا عندما يكون :values موجودًا.',
    'required_with_all' => 'يجب أن يكون :attribute مطلوبًا عندما تكون :values موجودة.',
    'required_without' => 'يجب أن يكون :attribute مطلوبًا عندما لا يكون :values موجودًا.',
    'required_without_all' => 'يجب أن يكون :attribute مطلوبًا عندما لا تكون أي من :values موجودة.',
    'same' => 'يجب أن يتطابق :attribute مع :other.',
    'size' => [
        'array' => 'يجب أن يحتوي :attribute على :size عناصر.',
        'file' => 'يجب أن يكون :attribute بحجم :size كيلوبايت.',
        'numeric' => 'يجب أن يكون :attribute بحجم :size.',
        'string' => 'يجب أن يكون :attribute بطول :size حرفًا.',
    ],
    'starts_with' => 'يجب أن يبدأ :attribute بأحد القيم التالية: :values.',
    'string' => 'يجب أن يكون :attribute نصًا.',
    'timezone' => 'يجب أن يكون :attribute منطقة زمنية صالحة.',
    'unique' => 'تم أخذ :attribute بالفعل.',
    'uploaded' => 'فشل في تحميل :attribute.',
    'uppercase' => 'يجب أن يكون :attribute بأحرف كبيرة.',
    'url' => 'يجب أن يكون :attribute عنوان URL صالحًا.',
    'ulid' => 'يجب أن يكون :attribute ULID صالحًا.',
    'uuid' => 'يجب أن يكون :attribute UUID صالحًا.',

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
            'rule-name' => 'رسالة مخصصة',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
