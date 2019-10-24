<?php
	return [
		'(ru)?(kz)?(en)?(chi)?' => [
            'controller' => 'main',
            'action' => 'index',
        ],
        'sendmail' => [
            'controller' => 'mail',
            'action' => 'sendMail',
        ],
        'about(/ru)?(/kz)?(/en)?(/chi)?' => [
            'controller' => 'about',
            'action' => 'index',
        ],
        'products(/page/[0-9]+)?(/ru)?(/kz)?(/en)?(/chi)?' => [
            'controller' => 'products',
            'action' => 'index',
        ],
        'products/flour/[0-9]+(/ru)?(/kz)?(/en)?(/chi)?' => [
            'controller' => 'products',
            'action' => 'showOneProduct',
        ],
        'news(/page/[0-9]+)?(/ru)?(/kz)?(/en)?(/chi)??' => [
            'controller' => 'news',
            'action' => 'index',
        ],
        'news/show/[0-9]+(/ru)?(/kz)?(/en)?(/chi)?' => [
            'controller' => 'news',
            'action' => 'article',
        ],
        'contacts(/ru)?(/kz)?(/en)?(/chi)?' => [
            'controller' => 'contacts',
            'action' => 'index',
        ],
	];