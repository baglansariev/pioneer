<?php
	return [
		'' => [
            'controller' => 'main',
            'action' => 'index',
        ],
        'about' => [
            'controller' => 'about',
            'action' => 'index',
        ],
        'products(/page/[0-9]+)?(/flour/[0-9]+)?' => [
            'controller' => 'products',
            'action' => 'index',
        ],
        'news(/page/[0-9]+)?(/[a-zA-Z]*-*[a-zA-Z]*-*[0-9]*-*)*' => [
            'controller' => 'news',
            'action' => 'index',
        ],
        'contacts' => [
            'controller' => 'contacts',
            'action' => 'index',
        ],
	];