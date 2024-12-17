<?php return array (
  0 => 
  array (
    'GET' => 
    array (
      '/api/v1/Activities/upcoming' => 'route3',
      '/api/v1/Activities' => 'route4',
      '/api/v1/Timeline' => 'route5',
      '/api/v1/Timeline/busyRanges' => 'route6',
      '/api/v1/' => 'route15',
      '/api/v1/App/user' => 'route16',
      '/api/v1/App/about' => 'route18',
      '/api/v1/Metadata' => 'route19',
      '/api/v1/I18n' => 'route20',
      '/api/v1/Settings' => 'route21',
      '/api/v1/Stream' => 'route24',
      '/api/v1/GlobalStream' => 'route25',
      '/api/v1/GlobalSearch' => 'route26',
      '/api/v1/Admin/jobs' => 'route37',
      '/api/v1/CurrencyRate' => 'route43',
      '/api/v1/Email/inbox/notReadCounts' => 'route75',
      '/api/v1/Email/insertFieldData' => 'route76',
      '/api/v1/EmailAddress/search' => 'route77',
      '/api/v1/Oidc/authorizationData' => 'route87',
    ),
    'POST' => 
    array (
      '/api/v1/App/destroyAuthToken' => 'route17',
      '/api/v1/Admin/rebuild' => 'route35',
      '/api/v1/Admin/clearCache' => 'route36',
      '/api/v1/Action' => 'route45',
      '/api/v1/MassAction' => 'route46',
      '/api/v1/Export' => 'route49',
      '/api/v1/Import' => 'route52',
      '/api/v1/Import/file' => 'route53',
      '/api/v1/Attachment/fromImageUrl' => 'route62',
      '/api/v1/Email/importEml' => 'route66',
      '/api/v1/Email/sendTest' => 'route67',
      '/api/v1/Email/inbox/read' => 'route68',
      '/api/v1/Email/inbox/important' => 'route70',
      '/api/v1/Email/inbox/inTrash' => 'route72',
      '/api/v1/UserSecurity/apiKey/generate' => 'route80',
      '/api/v1/UserSecurity/password/recovery' => 'route82',
      '/api/v1/UserSecurity/password/generate' => 'route83',
      '/api/v1/User/passwordChangeRequest' => 'route84',
      '/api/v1/User/changePasswordByRequest' => 'route85',
      '/api/v1/Oidc/backchannelLogout' => 'route88',
    ),
    'PATCH' => 
    array (
      '/api/v1/Settings' => 'route22',
    ),
    'PUT' => 
    array (
      '/api/v1/Settings' => 'route23',
      '/api/v1/CurrencyRate' => 'route44',
      '/api/v1/Kanban/order' => 'route58',
      '/api/v1/UserSecurity/password' => 'route81',
    ),
    'DELETE' => 
    array (
      '/api/v1/Email/inbox/read' => 'route69',
      '/api/v1/Email/inbox/important' => 'route71',
      '/api/v1/Email/inbox/inTrash' => 'route73',
    ),
  ),
  1 => 
  array (
    'GET' => 
    array (
      0 => 
      array (
        'regex' => '~^(?|/api/v1/Activities/([^/]+)/([^/]+)/composeEmailAddressList|/api/v1/Activities/([^/]+)/([^/]+)/([^/]+)|/api/v1/Activities/([^/]+)/([^/]+)/([^/]+)/list/([^/]+)|/api/v1/Meeting/([^/]+)/attendees()()()()|/api/v1/Call/([^/]+)/attendees()()()()()|/api/v1/TargetList/([^/]+)/optedOut()()()()()()|/api/v1/([^/]+)/action/([^/]+)()()()()()()|/api/v1/([^/]+)/layout/([^/]+)()()()()()()()|/api/v1/Admin/fieldManager/([^/]+)/([^/]+)()()()()()()()()|/api/v1/MassAction/([^/]+)/status()()()()()()()()()()|/api/v1/Export/([^/]+)/status()()()()()()()()()()())$~',
        'routeMap' => 
        array (
          3 => 
          array (
            0 => 'route0',
            1 => 
            array (
              'parentType' => 'parentType',
              'id' => 'id',
            ),
          ),
          4 => 
          array (
            0 => 'route1',
            1 => 
            array (
              'parentType' => 'parentType',
              'id' => 'id',
              'type' => 'type',
            ),
          ),
          5 => 
          array (
            0 => 'route2',
            1 => 
            array (
              'parentType' => 'parentType',
              'id' => 'id',
              'type' => 'type',
              'targetType' => 'targetType',
            ),
          ),
          6 => 
          array (
            0 => 'route7',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          7 => 
          array (
            0 => 'route8',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          8 => 
          array (
            0 => 'route10',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          9 => 
          array (
            0 => 'route31',
            1 => 
            array (
              'controller' => 'controller',
              'action' => 'action',
            ),
          ),
          10 => 
          array (
            0 => 'route32',
            1 => 
            array (
              'controller' => 'controller',
              'name' => 'name',
            ),
          ),
          11 => 
          array (
            0 => 'route38',
            1 => 
            array (
              'scope' => 'scope',
              'name' => 'name',
            ),
          ),
          12 => 
          array (
            0 => 'route47',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          13 => 
          array (
            0 => 'route50',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
        ),
      ),
      1 => 
      array (
        'regex' => '~^(?|/api/v1/Kanban/([^/]+)|/api/v1/Attachment/file/([^/]+)()|/api/v1/User/([^/]+)/stream/own()()|/api/v1/User/([^/]+)/acl()()()|/api/v1/([^/]+)/([^/]+)()()()|/api/v1/([^/]+)()()()()()|/api/v1/([^/]+)/([^/]+)/followers()()()()()|/api/v1/([^/]+)/([^/]+)/stream()()()()()()|/api/v1/([^/]+)/([^/]+)/posts()()()()()()()|/api/v1/([^/]+)/([^/]+)/updateStream()()()()()()()()|/api/v1/([^/]+)/([^/]+)/([^/]+)()()()()()()()())$~',
        'routeMap' => 
        array (
          2 => 
          array (
            0 => 'route59',
            1 => 
            array (
              'entityType' => 'entityType',
            ),
          ),
          3 => 
          array (
            0 => 'route60',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          4 => 
          array (
            0 => 'route78',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          5 => 
          array (
            0 => 'route79',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          6 => 
          array (
            0 => 'route89',
            1 => 
            array (
              'controller' => 'controller',
              'id' => 'id',
            ),
          ),
          7 => 
          array (
            0 => 'route90',
            1 => 
            array (
              'controller' => 'controller',
            ),
          ),
          8 => 
          array (
            0 => 'route95',
            1 => 
            array (
              'entityType' => 'entityType',
              'id' => 'id',
            ),
          ),
          9 => 
          array (
            0 => 'route98',
            1 => 
            array (
              'controller' => 'controller',
              'id' => 'id',
            ),
          ),
          10 => 
          array (
            0 => 'route99',
            1 => 
            array (
              'controller' => 'controller',
              'id' => 'id',
            ),
          ),
          11 => 
          array (
            0 => 'route100',
            1 => 
            array (
              'controller' => 'controller',
              'id' => 'id',
            ),
          ),
          12 => 
          array (
            0 => 'route107',
            1 => 
            array (
              'controller' => 'controller',
              'id' => 'id',
              'link' => 'link',
            ),
          ),
        ),
      ),
    ),
    'POST' => 
    array (
      0 => 
      array (
        'regex' => '~^(?|/api/v1/Campaign/([^/]+)/generateMailMerge|/api/v1/Campaign/unsubscribe/([^/]+)()|/api/v1/Campaign/unsubscribe/([^/]+)/([^/]+)()|/api/v1/LeadCapture/([^/]+)()()()|/api/v1/([^/]+)/action/([^/]+)()()()|/api/v1/Admin/fieldManager/([^/]+)()()()()()|/api/v1/MassAction/([^/]+)/subscribe()()()()()()|/api/v1/Export/([^/]+)/subscribe()()()()()()()|/api/v1/Import/([^/]+)/revert()()()()()()()()|/api/v1/Import/([^/]+)/removeDuplicates()()()()()()()()()|/api/v1/Import/([^/]+)/unmarkDuplicates()()()()()()()()()())$~',
        'routeMap' => 
        array (
          2 => 
          array (
            0 => 'route9',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          3 => 
          array (
            0 => 'route11',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          4 => 
          array (
            0 => 'route13',
            1 => 
            array (
              'emailAddress' => 'emailAddress',
              'hash' => 'hash',
            ),
          ),
          5 => 
          array (
            0 => 'route27',
            1 => 
            array (
              'apiKey' => 'apiKey',
            ),
          ),
          6 => 
          array (
            0 => 'route29',
            1 => 
            array (
              'controller' => 'controller',
              'action' => 'action',
            ),
          ),
          7 => 
          array (
            0 => 'route39',
            1 => 
            array (
              'scope' => 'scope',
            ),
          ),
          8 => 
          array (
            0 => 'route48',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          9 => 
          array (
            0 => 'route51',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          10 => 
          array (
            0 => 'route54',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          11 => 
          array (
            0 => 'route55',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          12 => 
          array (
            0 => 'route56',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
        ),
      ),
      1 => 
      array (
        'regex' => '~^(?|/api/v1/Import/([^/]+)/exportErrors|/api/v1/Attachment/chunk/([^/]+)()|/api/v1/Attachment/copy/([^/]+)()()|/api/v1/EmailTemplate/([^/]+)/prepare()()()|/api/v1/Email/([^/]+)/attachments/copy()()()()|/api/v1/Email/inbox/folders/([^/]+)()()()()()|/api/v1/([^/]+)()()()()()()|/api/v1/([^/]+)/([^/]+)/followers()()()()()()|/api/v1/([^/]+)/([^/]+)/pin()()()()()()()|/api/v1/([^/]+)/([^/]+)/([^/]+)()()()()()()())$~',
        'routeMap' => 
        array (
          2 => 
          array (
            0 => 'route57',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          3 => 
          array (
            0 => 'route61',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          4 => 
          array (
            0 => 'route63',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          5 => 
          array (
            0 => 'route64',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          6 => 
          array (
            0 => 'route65',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          7 => 
          array (
            0 => 'route74',
            1 => 
            array (
              'folderId' => 'folderId',
            ),
          ),
          8 => 
          array (
            0 => 'route91',
            1 => 
            array (
              'controller' => 'controller',
            ),
          ),
          9 => 
          array (
            0 => 'route96',
            1 => 
            array (
              'entityType' => 'entityType',
              'id' => 'id',
            ),
          ),
          10 => 
          array (
            0 => 'route103',
            1 => 
            array (
              'Note' => 'Note',
              'id' => 'id',
            ),
          ),
          11 => 
          array (
            0 => 'route108',
            1 => 
            array (
              'controller' => 'controller',
              'id' => 'id',
              'link' => 'link',
            ),
          ),
        ),
      ),
    ),
    'DELETE' => 
    array (
      0 => 
      array (
        'regex' => '~^(?|/api/v1/Campaign/unsubscribe/([^/]+)|/api/v1/Campaign/unsubscribe/([^/]+)/([^/]+)|/api/v1/Admin/fieldManager/([^/]+)/([^/]+)()|/api/v1/([^/]+)/([^/]+)()()|/api/v1/([^/]+)/([^/]+)/followers()()()|/api/v1/([^/]+)/([^/]+)/subscription()()()()|/api/v1/([^/]+)/([^/]+)/pin()()()()()|/api/v1/([^/]+)/([^/]+)/starSubscription()()()()()()|/api/v1/([^/]+)/([^/]+)/([^/]+)()()()()()())$~',
        'routeMap' => 
        array (
          2 => 
          array (
            0 => 'route12',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          3 => 
          array (
            0 => 'route14',
            1 => 
            array (
              'emailAddress' => 'emailAddress',
              'hash' => 'hash',
            ),
          ),
          4 => 
          array (
            0 => 'route42',
            1 => 
            array (
              'scope' => 'scope',
              'name' => 'name',
            ),
          ),
          5 => 
          array (
            0 => 'route94',
            1 => 
            array (
              'controller' => 'controller',
              'id' => 'id',
            ),
          ),
          6 => 
          array (
            0 => 'route97',
            1 => 
            array (
              'entityType' => 'entityType',
              'id' => 'id',
            ),
          ),
          7 => 
          array (
            0 => 'route102',
            1 => 
            array (
              'controller' => 'controller',
              'id' => 'id',
            ),
          ),
          8 => 
          array (
            0 => 'route104',
            1 => 
            array (
              'Note' => 'Note',
              'id' => 'id',
            ),
          ),
          9 => 
          array (
            0 => 'route106',
            1 => 
            array (
              'entityType' => 'entityType',
              'id' => 'id',
            ),
          ),
          10 => 
          array (
            0 => 'route109',
            1 => 
            array (
              'controller' => 'controller',
              'id' => 'id',
              'link' => 'link',
            ),
          ),
        ),
      ),
    ),
    'OPTIONS' => 
    array (
      0 => 
      array (
        'regex' => '~^(?|/api/v1/LeadCapture/([^/]+))$~',
        'routeMap' => 
        array (
          2 => 
          array (
            0 => 'route28',
            1 => 
            array (
              'apiKey' => 'apiKey',
            ),
          ),
        ),
      ),
    ),
    'PUT' => 
    array (
      0 => 
      array (
        'regex' => '~^(?|/api/v1/([^/]+)/action/([^/]+)|/api/v1/([^/]+)/layout/([^/]+)()|/api/v1/([^/]+)/layout/([^/]+)/([^/]+)()|/api/v1/Admin/fieldManager/([^/]+)/([^/]+)()()()|/api/v1/Team/([^/]+)/userPosition()()()()()|/api/v1/([^/]+)/([^/]+)()()()()()|/api/v1/([^/]+)/([^/]+)/subscription()()()()()()|/api/v1/([^/]+)/([^/]+)/starSubscription()()()()()()())$~',
        'routeMap' => 
        array (
          3 => 
          array (
            0 => 'route30',
            1 => 
            array (
              'controller' => 'controller',
              'action' => 'action',
            ),
          ),
          4 => 
          array (
            0 => 'route33',
            1 => 
            array (
              'controller' => 'controller',
              'name' => 'name',
            ),
          ),
          5 => 
          array (
            0 => 'route34',
            1 => 
            array (
              'controller' => 'controller',
              'name' => 'name',
              'setId' => 'setId',
            ),
          ),
          6 => 
          array (
            0 => 'route40',
            1 => 
            array (
              'scope' => 'scope',
              'name' => 'name',
            ),
          ),
          7 => 
          array (
            0 => 'route86',
            1 => 
            array (
              'id' => 'id',
            ),
          ),
          8 => 
          array (
            0 => 'route92',
            1 => 
            array (
              'controller' => 'controller',
              'id' => 'id',
            ),
          ),
          9 => 
          array (
            0 => 'route101',
            1 => 
            array (
              'controller' => 'controller',
              'id' => 'id',
            ),
          ),
          10 => 
          array (
            0 => 'route105',
            1 => 
            array (
              'entityType' => 'entityType',
              'id' => 'id',
            ),
          ),
        ),
      ),
    ),
    'PATCH' => 
    array (
      0 => 
      array (
        'regex' => '~^(?|/api/v1/Admin/fieldManager/([^/]+)/([^/]+)|/api/v1/([^/]+)/([^/]+)())$~',
        'routeMap' => 
        array (
          3 => 
          array (
            0 => 'route41',
            1 => 
            array (
              'scope' => 'scope',
              'name' => 'name',
            ),
          ),
          4 => 
          array (
            0 => 'route93',
            1 => 
            array (
              'controller' => 'controller',
              'id' => 'id',
            ),
          ),
        ),
      ),
    ),
  ),
);