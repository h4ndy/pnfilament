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

    'accepted' => 'Bidang :attribute harus diterima.',
    'accepted_if' => 'Bidang :attribute harus diterima ketika :other adalah :value.',
    'active_url' => 'Bidang :attribute harus berupa URL yang valid.',
    'after' => 'Bidang :attribute harus berupa tanggal setelah :date.',
    'after_or_equal' => 'Bidang :attribute harus berupa tanggal setelah atau sama dengan :date.',
    'alpha' => 'Bidang :attribute hanya boleh berisi huruf.',
    'alpha_dash' => 'Bidang :attribute hanya boleh berisi huruf, angka, underscore, dan tanda hubung.',
    'alpha_num' => 'Bidang :attribute hanya boleh berisi huruf dan angka.',
    'any_of' => 'Bidang :attribute tidak valid.',
    'array' => 'Bidang :attribute harus berupa array.',
    'ascii' => 'Bidang :attribute hanya boleh berisi karakter ASCII tunggal.',
    'before' => 'Bidang :attribute harus berupa tanggal sebelum :date.',
    'before_or_equal' => 'Bidang :attribute harus berupa tanggal sebelum atau sama dengan :date.',
    'between' => [
        'array' => 'Bidang :attribute harus memiliki antara :min dan :max item.',
        'file' => 'Bidang :attribute harus memiliki ukuran antara :min dan :max kilobyte.',
        'numeric' => 'Bidang :attribute harus memiliki nilai antara :min dan :max.',
        'string' => 'Bidang :attribute harus memiliki panjang antara :min dan :max karakter.',
    ],
    'boolean' => 'Bidang :attribute harus berupa boolean.',
    'can' => 'Bidang :attribute mengandung nilai yang tidak sah.',
    'confirmed' => 'Konfirmasi bidang :attribute tidak cocok.',
    'contains' => 'Bidang :attribute tidak memiliki nilai yang diperlukan.',
    'current_password' => 'Kata sandi tidak benar.',
    'date' => 'Bidang :attribute harus berupa tanggal yang valid.',
    'date_equals' => 'Bidang :attribute harus berupa tanggal yang sama dengan :date.',
    'date_format' => 'Bidang :attribute harus berupa format :format.',
    'decimal' => 'Bidang :attribute harus memiliki :decimal tempat desimal.',
    'declined' => 'Bidang :attribute harus ditolak.',
    'declined_if' => 'Bidang :attribute harus ditolak ketika :other adalah :value.',
    'different' => 'Bidang :attribute dan :other harus berbeda.',
    'digits' => 'Bidang :attribute harus berupa angka yang memiliki :digits digit.',
    'digits_between' => 'Bidang :attribute harus berupa angka yang memiliki panjang antara :min dan :max digit.',
    'dimensions' => 'Bidang :attribute memiliki dimensi gambar yang tidak valid.',
    'distinct' => 'Bidang :attribute memiliki nilai yang duplikat.',
    'doesnt_contain' => 'Bidang :attribute tidak boleh mengandung nilai :values.',
    'doesnt_end_with' => 'Bidang :attribute tidak boleh diakhiri dengan nilai :values.',
    'doesnt_start_with' => 'Bidang :attribute tidak boleh diawali dengan nilai :values.',
    'email' => 'Bidang :attribute harus berupa alamat email yang valid.',
    'ends_with' => 'Bidang :attribute harus diakhiri dengan nilai :values.',
    'enum' => 'Nilai yang dipilih untuk bidang :attribute tidak valid.',
    'exists' => 'Nilai yang dipilih untuk bidang :attribute tidak valid.',
    'extensions' => 'Bidang :attribute harus memiliki salah satu ekstensi berikut: :values.',
    'file' => 'Bidang :attribute harus berupa file.',
    'filled' => 'Bidang :attribute harus memiliki nilai.',
    'gt' => [
        'array' => 'Bidang :attribute harus memiliki lebih dari :value item.',
        'file' => 'Bidang :attribute harus memiliki ukuran lebih dari :value kilobyte.',
        'numeric' => 'Bidang :attribute harus memiliki nilai lebih dari :value.',
        'string' => 'Bidang :attribute harus memiliki panjang lebih dari :value karakter.',
    ],
    'gte' => [
        'array' => 'Bidang :attribute harus memiliki setidak kurang dari :value item.',
        'file' => 'Bidang :attribute harus memiliki ukuran setidak kurang dari :value kilobyte.',
        'numeric' => 'Bidang :attribute harus memiliki nilai setidak kurang dari :value.',
        'string' => 'Bidang :attribute harus memiliki panjang setidak kurang dari :value karakter.',
    ],
    'hex_color' => 'Bidang :attribute harus berupa warna hexadecimal yang valid.',
    'image' => 'Bidang :attribute harus berupa gambar.',
    'in' => 'Nilai yang dipilih untuk bidang :attribute tidak valid.',
    'in_array' => 'Bidang :attribute harus ada dalam array :other.',
    'in_array_keys' => 'Bidang :attribute harus mengandung salah satu kunci berikut: :values.',
    'integer' => 'Bidang :attribute harus berupa angka integer.',
    'ip' => 'Bidang :attribute harus berupa alamat IP yang valid.',
    'ipv4' => 'Bidang :attribute harus berupa alamat IPv4 yang valid.',
    'ipv6' => 'Bidang :attribute harus berupa alamat IPv6 yang valid.',
    'json' => 'Bidang :attribute harus berupa string JSON yang valid.',
    'list' => 'Bidang :attribute harus berupa array yang berisi list.',
    'lowercase' => 'Bidang :attribute harus berupa huruf kecil.',
    'lt' => [
        'array' => 'Bidang :attribute harus memiliki kurang dari :value item.',
        'file' => 'Bidang :attribute harus memiliki ukuran kurang dari :value kilobyte.',
        'numeric' => 'Bidang :attribute harus memiliki nilai kurang dari :value.',
        'string' => 'Bidang :attribute harus memiliki panjang kurang dari :value karakter.',
    ],
    'lte' => [
        'array' => 'Bidang :attribute harus memiliki setidak lebih dari :value item.',
        'file' => 'Bidang :attribute harus memiliki ukuran setidak lebih dari :value kilobyte.',
        'numeric' => 'Bidang :attribute harus memiliki nilai setidak lebih dari :value.',
        'string' => 'Bidang :attribute harus memiliki panjang setidak lebih dari :value karakter.',
    ],
    'mac_address' => 'Bidang :attribute harus berupa alamat MAC yang valid.',
    'max' => [
        'array' => 'Bidang :attribute tidak boleh memiliki lebih dari :max item.',
        'file' => 'Bidang :attribute tidak boleh memiliki ukuran lebih dari :max kilobyte.',
        'numeric' => 'Bidang :attribute tidak boleh memiliki nilai lebih dari :max.',
        'string' => 'Bidang :attribute tidak boleh memiliki panjang lebih dari :max karakter.',
    ],
    'max_digits' => 'Bidang :attribute tidak boleh memiliki lebih dari :max digit.',
    'mimes' => 'Bidang :attribute harus berupa file dengan tipe: :values.',
    'mimetypes' => 'Bidang :attribute harus berupa file dengan tipe: :values.',
    'min' => [
        'array' => 'Bidang :attribute harus memiliki setidak kurang dari :min item.',
        'file' => 'Bidang :attribute harus memiliki ukuran setidak kurang dari :min kilobyte.',
        'numeric' => 'Bidang :attribute harus memiliki nilai setidak kurang dari :min.',
        'string' => 'Bidang :attribute harus memiliki panjang setidak kurang dari :min karakter.',
    ],
    'min_digits' => 'Bidang :attribute harus memiliki setidak kurang dari :min digit.',
    'missing' => 'Bidang :attribute harus tidak ada.',
    'missing_if' => 'Bidang :attribute harus tidak ada ketika :other adalah :value.',
    'missing_unless' => 'Bidang :attribute harus tidak ada kecuali :other adalah :value.',
    'missing_with' => 'Bidang :attribute harus tidak ada ketika :values ada.',
    'missing_with_all' => 'Bidang :attribute harus tidak ada ketika :values semua ada.',
    'multiple_of' => 'Bidang :attribute harus berupa bilangan yang dapat dibagi oleh :value.',
    'not_in' => 'Nilai yang dipilih untuk bidang :attribute tidak valid.',
    'not_regex' => 'Format bidang :attribute tidak valid.',
    'numeric' => 'Bidang :attribute harus berupa angka.',
    'password' => [
        'letters' => 'Bidang :attribute harus mengandung setidak kurang dari satu huruf.',
        'mixed' => 'Bidang :attribute harus mengandung setidak kurang dari satu huruf kecil dan satu huruf besar.',
        'numbers' => 'Bidang :attribute harus mengandung setidak kurang dari satu angka.',
        'symbols' => 'Bidang :attribute harus mengandung setidak kurang dari satu simbol.',

        ],
    'present' => 'Bidang :attribute harus ada.',
    'present_if' => 'Bidang :attribute harus ada ketika :other adalah :value.',
    'present_unless' => 'Bidang :attribute harus ada kecuali :other adalah :value.',
    'present_with' => 'Bidang :attribute harus ada ketika :values ada.',
    'present_with_all' => 'Bidang :attribute harus ada ketika :values semua ada.',
    'prohibited' => 'Bidang :attribute tidak boleh ada.',
    'prohibited_if' => 'Bidang :attribute tidak boleh ada ketika :other adalah :value.',
    'prohibited_if_accepted' => 'Bidang :attribute tidak boleh ada ketika :other diterima.',
    'prohibited_if_declined' => 'Bidang :attribute tidak boleh ada ketika :other ditolak.',
    'prohibited_unless' => 'Bidang :attribute tidak boleh ada kecuali :other ada dalam :values.',
    'prohibits' => 'Bidang :attribute melarang :other untuk hadir.',
    'regex' => 'Format bidang :attribute tidak valid.',
    'required' => 'Bidang :attribute harus diisi.',
    'required_array_keys' => 'Bidang :attribute harus mengandung entri untuk: :values.',
    'required_if' => 'Bidang :attribute harus diisi ketika :other adalah :value.',
    'required_if_accepted' => 'Bidang :attribute harus diisi ketika :other diterima.',
    'required_if_declined' => 'Bidang :attribute harus diisi ketika :other ditolak.',
    'required_unless' => 'Bidang :attribute harus diisi kecuali :other ada dalam :values.',
    'required_with' => 'Bidang :attribute harus diisi ketika :values ada.',
    'required_with_all' => 'Bidang :attribute harus diisi ketika :values semua ada.',
    'required_without' => 'Bidang :attribute harus diisi ketika :values tidak ada.',
    'required_without_all' => 'Bidang :attribute harus diisi ketika tidak ada :values sama sekali.',
    'same' => 'Bidang :attribute harus sama dengan :other.',
    'size' => [
        'array' => 'Bidang :attribute harus mengandung :size item.',
        'file' => 'Bidang :attribute harus berukuran :size kilobyte.',
        'numeric' => 'Bidang :attribute harus bernilai :size.',
        'string' => 'Bidang :attribute harus berpanjang :size karakter.',
    ],
    'starts_with' => 'Bidang :attribute harus diawali dengan salah satu dari berikut: :values.',
    'string' => 'Bidang :attribute harus berupa string.',
    'timezone' => 'Bidang :attribute harus berupa zona waktu yang valid.',
    'unique' => 'Bidang :attribute telah dipakai.',
    'uploaded' => 'Bidang :attribute gagal diunggah.',
    'uppercase' => 'Bidang :attribute harus berupa huruf besar.',
    'url' => 'Bidang :attribute harus berupa URL yang valid.',
    'ulid' => 'Bidang :attribute harus berupa ULID yang valid.',
    'uuid' => 'Bidang :attribute harus berupa UUID yang valid.',
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
