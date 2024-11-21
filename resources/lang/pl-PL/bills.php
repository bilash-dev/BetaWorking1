<?php

return [

    'bill_number'           => 'Numer rachunku',
    'bill_date'             => 'Data rachunku',
    'bill_amount'           => 'Kwota Faktury',
    'total_price'           => 'Całkowita cena',
    'due_date'              => 'Termin płatności',
    'order_number'          => 'Numer zamówienia',
    'bill_from'             => 'Rachunek od',

    'quantity'              => 'Ilość',
    'price'                 => 'Cena',
    'sub_total'             => 'Suma częściowa',
    'discount'              => 'Rabat',
    'item_discount'         => 'Rabat Liniowy',
    'tax_total'             => 'Suma podatku',
    'total'                 => 'Łącznie',

    'item_name'             => 'Nazwa produktu|Nazwy produktów',
    'recurring_bills'       => 'Rachunki cykliczne',

    'show_discount'         => ':discount% rabatu',
    'add_discount'          => 'Dodaj rabat',
    'discount_desc'         => 'sumy częściowej',

    'payment_made'          => 'Płatność dokonana',
    'payment_due'           => 'Termin płatności',
    'amount_due'            => 'Kwota do zapłaty',
    'paid'                  => 'Opłacone',
    'histories'             => 'Historia',
    'payments'              => 'Płatności',
    'add_payment'           => 'Dodaj płatność',
    'mark_paid'             => 'Oznacz jako zapłacone',
    'mark_received'         => 'Oznacz jako otrzymane',
    'mark_cancelled'        => 'Oznacz jako Anulowane',
    'download_pdf'          => 'Pobierz PDF',
    'send_mail'             => 'Wyślij e-mail',
    'create_bill'           => 'Utwórz fakturę',
    'receive_bill'          => 'Odbierz Fakturę',
    'make_payment'          => 'Dokonaj płatności',

    'form_description' => [
        'billing'           => 'Szczegóły płatności pojawiają się w Twoim rachunku. Data rachunku jest używana w panelu i raportach. Wybierz datę, kiedy spodziewasz się zapłacić jako termin płatności.',
    ],

    'messages' => [
        'draft'             => 'To jest <b>SZKIC</b> rachunku i zostanie odzwierciedlony na wykresach po jego wysłaniu.',

        'status' => [
            'created'       => 'Utworzono :date',
            'receive' => [
                'draft'     => 'Nie otrzymano',
                'received'  => 'Otrzymano :date',
            ],
            'paid' => [
                'await'     => 'Oczekuje na płatność',
            ],
        ],
    ],

];
