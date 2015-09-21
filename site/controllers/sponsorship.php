<?php

return function($site, $pages, $page) {

    $form = uniform(
        'sponsorship-form',
        [
            'required' =>[
                'org' => '',
                'name' => '',
                'phone' => '',
                '_from' => 'email',
                'description' => '',
                'involvement' => '',
                'marketing' => '',
                'donations' => '',
            ],
            'validate' => [
            ],
            'actions' => [
                [
                    '_action' => 'html-email',
                    'to'      => (string) $site->sponsorship_email(),
                    'sender'  => 'no-reply@ugwhite.com',
                    'subject' => $site->title()->html() . ' - message from the contact form',
                    'snippet' => 'uniform-email-table',
                ]
            ]
        ]
    );

    return compact('form');

};
