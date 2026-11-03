<?php 

return [ 
    'required' => 'Bu alan zorunludur.',
    'max-amount' => 'Girebileceğiniz en yüksek tutar 5000\'dir.',
    'min-amount' => 'Bağış için minimum tutar 1.00 Euro\'dur.',

    'custom' => [

        'attribute-name' => [
            'rule-name' => 'özel-mesaj',
        ],
        'name' => [
            'required' => 'Bu alan zorunludur', 
            'string' => 'Şifre en az 8 karakter uzunluğunda olmalıdır',
        ], 
        'email' => [ 
            'required' => 'Bu alan zorunludur', 
            'unique' => 'Bu e-posta ile zaten bir hesap var.', 
            'exists' => 'Bu e-posta ile bir kullanıcı bulunamadı.'
        ], 
        'email_campaing' => [ 
            'required' => 'Bu alan zorunludur',
            'unique' => 'Bu e-posta ile zaten bir talep yapılmış. Sorunuz varsa lütfen bizimle iletişime geçin.', 
        ],
        'password' => [
            'confirmed' => 'Şifreler eşleşmiyor!',
            'required' => 'Bu alan zorunludur',
            'min' => [
                'string' => 'Şifre en az 8 karakter olmalıdır'
            ]
        ], 
        'current_password' => [
            'required' => 'Bu alan zorunludur'
        ]
    ],
];
