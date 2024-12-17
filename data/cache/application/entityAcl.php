<?php
return (object) [
  'AppLogRecord' => (object) [
    'fields' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [
        0 => 'createdAt',
        1 => 'message',
        2 => 'level',
        3 => 'code',
        4 => 'exceptionClass',
        5 => 'file',
        6 => 'line',
        7 => 'requestMethod',
        8 => 'requestResourcePath',
        9 => 'requestUrl'
      ],
      'nonAdminReadOnly' => []
    ],
    'attributes' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [
        0 => 'createdAt',
        1 => 'message',
        2 => 'level',
        3 => 'code',
        4 => 'exceptionClass',
        5 => 'file',
        6 => 'line',
        7 => 'requestMethod',
        8 => 'requestResourcePath',
        9 => 'requestUrl'
      ],
      'nonAdminReadOnly' => []
    ],
    'links' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [],
      'nonAdminReadOnly' => []
    ]
  ],
  'Attachment' => (object) [
    'fields' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [
        0 => 'source',
        1 => 'createdAt',
        2 => 'createdBy',
        3 => 'storage'
      ],
      'nonAdminReadOnly' => []
    ],
    'attributes' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [
        0 => 'sourceId',
        1 => 'sourceName',
        2 => 'createdAt',
        3 => 'createdById',
        4 => 'createdByName',
        5 => 'storage'
      ],
      'nonAdminReadOnly' => []
    ],
    'links' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [],
      'nonAdminReadOnly' => []
    ]
  ],
  'AuthLogRecord' => (object) [
    'fields' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [
        0 => 'username',
        1 => 'portal',
        2 => 'user',
        3 => 'authToken',
        4 => 'ipAddress',
        5 => 'createdAt',
        6 => 'isDenied',
        7 => 'denialReason',
        8 => 'requestTime',
        9 => 'requestUrl',
        10 => 'requestMethod',
        11 => 'authTokenIsActive'
      ],
      'nonAdminReadOnly' => []
    ],
    'attributes' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [
        0 => 'username',
        1 => 'portalId',
        2 => 'portalName',
        3 => 'userId',
        4 => 'userName',
        5 => 'authTokenId',
        6 => 'authTokenName',
        7 => 'ipAddress',
        8 => 'createdAt',
        9 => 'isDenied',
        10 => 'denialReason',
        11 => 'requestTime',
        12 => 'requestUrl',
        13 => 'requestMethod',
        14 => 'authTokenIsActive'
      ],
      'nonAdminReadOnly' => []
    ],
    'links' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [],
      'nonAdminReadOnly' => []
    ]
  ],
  'AuthToken' => (object) [
    'fields' => (object) [
      'forbidden' => [
        0 => 'token',
        1 => 'hash',
        2 => 'secret'
      ],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [
        0 => 'token',
        1 => 'hash',
        2 => 'secret',
        3 => 'user',
        4 => 'portal',
        5 => 'ipAddress',
        6 => 'lastAccess',
        7 => 'createdAt',
        8 => 'modifiedAt'
      ],
      'nonAdminReadOnly' => []
    ],
    'attributes' => (object) [
      'forbidden' => [
        0 => 'token',
        1 => 'hash',
        2 => 'secret'
      ],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [
        0 => 'token',
        1 => 'hash',
        2 => 'secret',
        3 => 'userId',
        4 => 'userName',
        5 => 'portalId',
        6 => 'portalName',
        7 => 'ipAddress',
        8 => 'lastAccess',
        9 => 'createdAt',
        10 => 'modifiedAt'
      ],
      'nonAdminReadOnly' => []
    ],
    'links' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [],
      'nonAdminReadOnly' => []
    ]
  ],
  'AuthenticationProvider' => (object) [
    'fields' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [
        0 => 'oidcAuthorizationRedirectUri'
      ],
      'nonAdminReadOnly' => []
    ],
    'attributes' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [
        0 => 'oidcAuthorizationRedirectUri'
      ],
      'nonAdminReadOnly' => []
    ],
    'links' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [],
      'nonAdminReadOnly' => []
    ]
  ],
  'DashboardTemplate' => (object) [
    'fields' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [
        0 => 'createdAt',
        1 => 'modifiedAt',
        2 => 'createdBy',
        3 => 'modifiedBy'
      ],
      'nonAdminReadOnly' => []
    ],
    'attributes' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [
        0 => 'createdAt',
        1 => 'modifiedAt',
        2 => 'createdById',
        3 => 'createdByName',
        4 => 'modifiedById',
        5 => 'modifiedByName'
      ],
      'nonAdminReadOnly' => []
    ],
    'links' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [],
      'nonAdminReadOnly' => []
    ]
  ],
  'Email' => (object) [
    'fields' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [
        0 => 'fromName',
        1 => 'fromAddress',
        2 => 'replyToName',
        3 => 'replyToAddress',
        4 => 'addressNameMap',
        5 => 'isRead',
        6 => 'isNotRead',
        7 => 'isReplied',
        8 => 'isNotReplied',
        9 => 'isImportant',
        10 => 'inTrash',
        11 => 'inArchive',
        12 => 'folderId',
        13 => 'isUsers',
        14 => 'isUsersSent',
        15 => 'folder',
        16 => 'folderString',
        17 => 'nameHash',
        18 => 'typeHash',
        19 => 'idHash',
        20 => 'messageId',
        21 => 'messageIdInternal',
        22 => 'hasAttachment',
        23 => 'deliveryDate',
        24 => 'createdAt',
        25 => 'modifiedAt',
        26 => 'createdBy',
        27 => 'sentBy',
        28 => 'modifiedBy',
        29 => 'replies',
        30 => 'isSystem',
        31 => 'users',
        32 => 'assignedUsers',
        33 => 'inboundEmails',
        34 => 'emailAccounts',
        35 => 'icsContents',
        36 => 'icsEventData',
        37 => 'icsEventUid',
        38 => 'icsEventDateStart',
        39 => 'createdEvent',
        40 => 'account',
        41 => 'tasks',
        42 => 'icsEventDateStartDate'
      ],
      'nonAdminReadOnly' => []
    ],
    'attributes' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [
        0 => 'fromName',
        1 => 'fromAddress',
        2 => 'replyToName',
        3 => 'replyToAddress',
        4 => 'addressNameMap',
        5 => 'isRead',
        6 => 'isNotRead',
        7 => 'isReplied',
        8 => 'isNotReplied',
        9 => 'isImportant',
        10 => 'inTrash',
        11 => 'inArchive',
        12 => 'folderId',
        13 => 'isUsers',
        14 => 'isUsersSent',
        15 => 'folderId',
        16 => 'folderName',
        17 => 'folderStringId',
        18 => 'folderStringName',
        19 => 'nameHash',
        20 => 'typeHash',
        21 => 'idHash',
        22 => 'messageId',
        23 => 'messageIdInternal',
        24 => 'hasAttachment',
        25 => 'deliveryDate',
        26 => 'createdAt',
        27 => 'modifiedAt',
        28 => 'createdById',
        29 => 'createdByName',
        30 => 'sentById',
        31 => 'sentByName',
        32 => 'modifiedById',
        33 => 'modifiedByName',
        34 => 'repliesIds',
        35 => 'repliesNames',
        36 => 'isSystem',
        37 => 'usersIds',
        38 => 'usersNames',
        39 => 'assignedUsersIds',
        40 => 'assignedUsersNames',
        41 => 'inboundEmailsIds',
        42 => 'inboundEmailsNames',
        43 => 'emailAccountsIds',
        44 => 'emailAccountsNames',
        45 => 'icsContents',
        46 => 'icsEventData',
        47 => 'icsEventUid',
        48 => 'icsEventDateStart',
        49 => 'icsEventDateStartDate',
        50 => 'createdEventId',
        51 => 'createdEventType',
        52 => 'createdEventName',
        53 => 'accountId',
        54 => 'accountName',
        55 => 'tasksIds',
        56 => 'tasksNames',
        57 => 'icsEventDateStartDate'
      ],
      'nonAdminReadOnly' => []
    ],
    'links' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [
        0 => 'users'
      ],
      'readOnly' => [
        0 => 'tasks'
      ],
      'nonAdminReadOnly' => []
    ]
  ],
  'EmailAccount' => (object) [
    'fields' => (object) [
      'forbidden' => [
        0 => 'imapHandler',
        1 => 'smtpHandler'
      ],
      'internal' => [
        0 => 'password',
        1 => 'smtpPassword'
      ],
      'onlyAdmin' => [],
      'readOnly' => [
        0 => 'fetchData',
        1 => 'createdAt',
        2 => 'modifiedAt',
        3 => 'connectedAt',
        4 => 'imapHandler',
        5 => 'smtpHandler',
        6 => 'createdBy',
        7 => 'modifiedBy'
      ],
      'nonAdminReadOnly' => []
    ],
    'attributes' => (object) [
      'forbidden' => [
        0 => 'imapHandler',
        1 => 'smtpHandler'
      ],
      'internal' => [
        0 => 'password',
        1 => 'smtpPassword'
      ],
      'onlyAdmin' => [],
      'readOnly' => [
        0 => 'fetchData',
        1 => 'createdAt',
        2 => 'modifiedAt',
        3 => 'connectedAt',
        4 => 'imapHandler',
        5 => 'smtpHandler',
        6 => 'createdById',
        7 => 'createdByName',
        8 => 'modifiedById',
        9 => 'modifiedByName'
      ],
      'nonAdminReadOnly' => []
    ],
    'links' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [],
      'nonAdminReadOnly' => []
    ]
  ],
  'EmailFilter' => (object) [
    'fields' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [
        0 => 'createdAt',
        1 => 'modifiedAt',
        2 => 'createdBy',
        3 => 'modifiedBy'
      ],
      'nonAdminReadOnly' => []
    ],
    'attributes' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [
        0 => 'createdAt',
        1 => 'modifiedAt',
        2 => 'createdById',
        3 => 'createdByName',
        4 => 'modifiedById',
        5 => 'modifiedByName'
      ],
      'nonAdminReadOnly' => []
    ],
    'links' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [],
      'nonAdminReadOnly' => []
    ]
  ],
  'EmailFolder' => (object) [
    'fields' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [
        0 => 'assignedUser',
        1 => 'createdAt',
        2 => 'modifiedAt',
        3 => 'createdBy',
        4 => 'modifiedBy'
      ],
      'nonAdminReadOnly' => []
    ],
    'attributes' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [
        0 => 'assignedUserId',
        1 => 'assignedUserName',
        2 => 'createdAt',
        3 => 'modifiedAt',
        4 => 'createdById',
        5 => 'createdByName',
        6 => 'modifiedById',
        7 => 'modifiedByName'
      ],
      'nonAdminReadOnly' => []
    ],
    'links' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [],
      'nonAdminReadOnly' => []
    ]
  ],
  'EmailTemplate' => (object) [
    'fields' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [
        0 => 'createdAt',
        1 => 'modifiedAt',
        2 => 'createdBy',
        3 => 'modifiedBy'
      ],
      'nonAdminReadOnly' => []
    ],
    'attributes' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [
        0 => 'createdAt',
        1 => 'modifiedAt',
        2 => 'createdById',
        3 => 'createdByName',
        4 => 'modifiedById',
        5 => 'modifiedByName'
      ],
      'nonAdminReadOnly' => []
    ],
    'links' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [],
      'nonAdminReadOnly' => []
    ]
  ],
  'EmailTemplateCategory' => (object) [
    'fields' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [
        0 => 'createdAt',
        1 => 'modifiedAt',
        2 => 'createdBy',
        3 => 'modifiedBy'
      ],
      'nonAdminReadOnly' => []
    ],
    'attributes' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [
        0 => 'createdAt',
        1 => 'modifiedAt',
        2 => 'createdById',
        3 => 'createdByName',
        4 => 'modifiedById',
        5 => 'modifiedByName'
      ],
      'nonAdminReadOnly' => []
    ],
    'links' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [],
      'nonAdminReadOnly' => []
    ]
  ],
  'Export' => (object) [
    'fields' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [
        0 => 'createdAt'
      ],
      'nonAdminReadOnly' => []
    ],
    'attributes' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [
        0 => 'createdAt'
      ],
      'nonAdminReadOnly' => []
    ],
    'links' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [],
      'nonAdminReadOnly' => []
    ]
  ],
  'Extension' => (object) [
    'fields' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [
        0 => 'createdAt',
        1 => 'createdBy'
      ],
      'nonAdminReadOnly' => []
    ],
    'attributes' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [
        0 => 'createdAt',
        1 => 'createdById',
        2 => 'createdByName'
      ],
      'nonAdminReadOnly' => []
    ],
    'links' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [],
      'nonAdminReadOnly' => []
    ]
  ],
  'GroupEmailFolder' => (object) [
    'fields' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [
        0 => 'createdAt',
        1 => 'modifiedAt',
        2 => 'createdBy',
        3 => 'modifiedBy'
      ],
      'nonAdminReadOnly' => []
    ],
    'attributes' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [
        0 => 'createdAt',
        1 => 'modifiedAt',
        2 => 'createdById',
        3 => 'createdByName',
        4 => 'modifiedById',
        5 => 'modifiedByName'
      ],
      'nonAdminReadOnly' => []
    ],
    'links' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [],
      'nonAdminReadOnly' => []
    ]
  ],
  'Import' => (object) [
    'fields' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [
        0 => 'entityType',
        1 => 'status',
        2 => 'file',
        3 => 'importedCount',
        4 => 'duplicateCount',
        5 => 'updatedCount',
        6 => 'lastIndex',
        7 => 'params',
        8 => 'attributeList',
        9 => 'createdAt',
        10 => 'createdBy'
      ],
      'nonAdminReadOnly' => []
    ],
    'attributes' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [
        0 => 'entityType',
        1 => 'status',
        2 => 'fileId',
        3 => 'fileName',
        4 => 'importedCount',
        5 => 'duplicateCount',
        6 => 'updatedCount',
        7 => 'lastIndex',
        8 => 'params',
        9 => 'attributeList',
        10 => 'createdAt',
        11 => 'createdById',
        12 => 'createdByName'
      ],
      'nonAdminReadOnly' => []
    ],
    'links' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [
        0 => 'errors'
      ],
      'nonAdminReadOnly' => []
    ]
  ],
  'ImportError' => (object) [
    'fields' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [
        0 => 'import',
        1 => 'rowIndex',
        2 => 'exportRowIndex',
        3 => 'lineNumber',
        4 => 'exportLineNumber',
        5 => 'type',
        6 => 'validationFailures',
        7 => 'row'
      ],
      'nonAdminReadOnly' => []
    ],
    'attributes' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [
        0 => 'importId',
        1 => 'importName',
        2 => 'rowIndex',
        3 => 'exportRowIndex',
        4 => 'lineNumber',
        5 => 'exportLineNumber',
        6 => 'type',
        7 => 'validationFailures',
        8 => 'row'
      ],
      'nonAdminReadOnly' => []
    ],
    'links' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [],
      'nonAdminReadOnly' => []
    ]
  ],
  'InboundEmail' => (object) [
    'fields' => (object) [
      'forbidden' => [],
      'internal' => [
        0 => 'password',
        1 => 'smtpPassword',
        2 => 'imapHandler',
        3 => 'smtpHandler'
      ],
      'onlyAdmin' => [],
      'readOnly' => [
        0 => 'fetchData',
        1 => 'isSystem',
        2 => 'connectedAt',
        3 => 'imapHandler',
        4 => 'smtpHandler',
        5 => 'createdAt',
        6 => 'modifiedAt',
        7 => 'createdBy',
        8 => 'modifiedBy'
      ],
      'nonAdminReadOnly' => []
    ],
    'attributes' => (object) [
      'forbidden' => [],
      'internal' => [
        0 => 'password',
        1 => 'smtpPassword',
        2 => 'imapHandler',
        3 => 'smtpHandler'
      ],
      'onlyAdmin' => [],
      'readOnly' => [
        0 => 'fetchData',
        1 => 'isSystem',
        2 => 'connectedAt',
        3 => 'imapHandler',
        4 => 'smtpHandler',
        5 => 'createdAt',
        6 => 'modifiedAt',
        7 => 'createdById',
        8 => 'createdByName',
        9 => 'modifiedById',
        10 => 'modifiedByName'
      ],
      'nonAdminReadOnly' => []
    ],
    'links' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [],
      'nonAdminReadOnly' => []
    ]
  ],
  'Job' => (object) [
    'fields' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [
        0 => 'number',
        1 => 'createdAt',
        2 => 'modifiedAt'
      ],
      'nonAdminReadOnly' => []
    ],
    'attributes' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [
        0 => 'number',
        1 => 'createdAt',
        2 => 'modifiedAt'
      ],
      'nonAdminReadOnly' => []
    ],
    'links' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [],
      'nonAdminReadOnly' => []
    ]
  ],
  'LayoutSet' => (object) [
    'fields' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [
        0 => 'createdAt',
        1 => 'modifiedAt'
      ],
      'nonAdminReadOnly' => []
    ],
    'attributes' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [
        0 => 'createdAt',
        1 => 'modifiedAt'
      ],
      'nonAdminReadOnly' => []
    ],
    'links' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [],
      'nonAdminReadOnly' => []
    ]
  ],
  'LeadCapture' => (object) [
    'fields' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [
        0 => 'apiKey',
        1 => 'exampleRequestUrl',
        2 => 'exampleRequestMethod',
        3 => 'exampleRequestPayload',
        4 => 'exampleRequestHeaders',
        5 => 'createdAt',
        6 => 'modifiedAt',
        7 => 'createdBy',
        8 => 'modifiedBy'
      ],
      'nonAdminReadOnly' => []
    ],
    'attributes' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [
        0 => 'apiKey',
        1 => 'exampleRequestUrl',
        2 => 'exampleRequestMethod',
        3 => 'exampleRequestPayload',
        4 => 'exampleRequestHeaders',
        5 => 'createdAt',
        6 => 'modifiedAt',
        7 => 'createdById',
        8 => 'createdByName',
        9 => 'modifiedById',
        10 => 'modifiedByName'
      ],
      'nonAdminReadOnly' => []
    ],
    'links' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [],
      'nonAdminReadOnly' => []
    ]
  ],
  'LeadCaptureLogRecord' => (object) [
    'fields' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [
        0 => 'number',
        1 => 'createdAt'
      ],
      'nonAdminReadOnly' => []
    ],
    'attributes' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [
        0 => 'number',
        1 => 'createdAt'
      ],
      'nonAdminReadOnly' => []
    ],
    'links' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [],
      'nonAdminReadOnly' => []
    ]
  ],
  'MassAction' => (object) [
    'fields' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [
        0 => 'createdAt'
      ],
      'nonAdminReadOnly' => []
    ],
    'attributes' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [
        0 => 'createdAt'
      ],
      'nonAdminReadOnly' => []
    ],
    'links' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [],
      'nonAdminReadOnly' => []
    ]
  ],
  'Note' => (object) [
    'fields' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [
        0 => 'data',
        1 => 'type',
        2 => 'related',
        3 => 'number',
        4 => 'notifiedUserIdList',
        5 => 'isPinned',
        6 => 'createdAt',
        7 => 'modifiedAt',
        8 => 'createdBy',
        9 => 'modifiedBy'
      ],
      'nonAdminReadOnly' => []
    ],
    'attributes' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [
        0 => 'data',
        1 => 'type',
        2 => 'relatedId',
        3 => 'relatedType',
        4 => 'relatedName',
        5 => 'number',
        6 => 'notifiedUserIdList',
        7 => 'isPinned',
        8 => 'createdAt',
        9 => 'modifiedAt',
        10 => 'createdById',
        11 => 'createdByName',
        12 => 'modifiedById',
        13 => 'modifiedByName'
      ],
      'nonAdminReadOnly' => []
    ],
    'links' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [
        0 => 'teams',
        1 => 'users'
      ],
      'nonAdminReadOnly' => []
    ]
  ],
  'Notification' => (object) [
    'fields' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [
        0 => 'createdAt',
        1 => 'related',
        2 => 'relatedParent'
      ],
      'nonAdminReadOnly' => []
    ],
    'attributes' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [
        0 => 'createdAt',
        1 => 'relatedId',
        2 => 'relatedType',
        3 => 'relatedName',
        4 => 'relatedParentId',
        5 => 'relatedParentType',
        6 => 'relatedParentName'
      ],
      'nonAdminReadOnly' => []
    ],
    'links' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [],
      'nonAdminReadOnly' => []
    ]
  ],
  'PasswordChangeRequest' => (object) [
    'fields' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [
        0 => 'user',
        1 => 'createdAt'
      ],
      'nonAdminReadOnly' => []
    ],
    'attributes' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [
        0 => 'userId',
        1 => 'userName',
        2 => 'createdAt'
      ],
      'nonAdminReadOnly' => []
    ],
    'links' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [],
      'nonAdminReadOnly' => []
    ]
  ],
  'Portal' => (object) [
    'fields' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [
        0 => 'url',
        1 => 'modifiedAt',
        2 => 'modifiedBy',
        3 => 'createdAt',
        4 => 'createdBy'
      ],
      'nonAdminReadOnly' => []
    ],
    'attributes' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [
        0 => 'url',
        1 => 'modifiedAt',
        2 => 'modifiedById',
        3 => 'modifiedByName',
        4 => 'createdAt',
        5 => 'createdById',
        6 => 'createdByName'
      ],
      'nonAdminReadOnly' => []
    ],
    'links' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [],
      'nonAdminReadOnly' => []
    ]
  ],
  'PortalRole' => (object) [
    'fields' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [
        0 => 'createdAt',
        1 => 'modifiedAt'
      ],
      'nonAdminReadOnly' => []
    ],
    'attributes' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [
        0 => 'createdAt',
        1 => 'modifiedAt'
      ],
      'nonAdminReadOnly' => []
    ],
    'links' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [],
      'nonAdminReadOnly' => []
    ]
  ],
  'Role' => (object) [
    'fields' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [
        0 => 'createdAt',
        1 => 'modifiedAt'
      ],
      'nonAdminReadOnly' => []
    ],
    'attributes' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [
        0 => 'createdAt',
        1 => 'modifiedAt'
      ],
      'nonAdminReadOnly' => []
    ],
    'links' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [],
      'nonAdminReadOnly' => []
    ]
  ],
  'ScheduledJob' => (object) [
    'fields' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [
        0 => 'lastRun',
        1 => 'createdAt',
        2 => 'modifiedAt',
        3 => 'createdBy',
        4 => 'modifiedBy',
        5 => 'isInternal'
      ],
      'nonAdminReadOnly' => []
    ],
    'attributes' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [
        0 => 'lastRun',
        1 => 'createdAt',
        2 => 'modifiedAt',
        3 => 'createdById',
        4 => 'createdByName',
        5 => 'modifiedById',
        6 => 'modifiedByName',
        7 => 'isInternal'
      ],
      'nonAdminReadOnly' => []
    ],
    'links' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [],
      'nonAdminReadOnly' => []
    ]
  ],
  'ScheduledJobLogRecord' => (object) [
    'fields' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [
        0 => 'name',
        1 => 'status',
        2 => 'executionTime',
        3 => 'createdAt'
      ],
      'nonAdminReadOnly' => []
    ],
    'attributes' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [
        0 => 'name',
        1 => 'status',
        2 => 'executionTime',
        3 => 'createdAt'
      ],
      'nonAdminReadOnly' => []
    ],
    'links' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [],
      'nonAdminReadOnly' => []
    ]
  ],
  'Settings' => (object) [
    'fields' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [
        0 => 'addressPreview',
        1 => 'addressPreviewStreet',
        2 => 'addressPreviewCity',
        3 => 'addressPreviewState',
        4 => 'addressPreviewCountry',
        5 => 'addressPreviewPostalCode',
        6 => 'addressPreviewMap'
      ],
      'nonAdminReadOnly' => []
    ],
    'attributes' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [
        0 => 'addressPreviewStreet',
        1 => 'addressPreviewCity',
        2 => 'addressPreviewState',
        3 => 'addressPreviewCountry',
        4 => 'addressPreviewPostalCode',
        5 => 'addressPreviewStreet',
        6 => 'addressPreviewCity',
        7 => 'addressPreviewState',
        8 => 'addressPreviewCountry',
        9 => 'addressPreviewPostalCode',
        10 => 'addressPreviewMap'
      ],
      'nonAdminReadOnly' => []
    ],
    'links' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [],
      'nonAdminReadOnly' => []
    ]
  ],
  'Sms' => (object) [
    'fields' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [
        0 => 'createdAt',
        1 => 'modifiedAt',
        2 => 'createdBy',
        3 => 'modifiedBy',
        4 => 'replied',
        5 => 'replies'
      ],
      'nonAdminReadOnly' => []
    ],
    'attributes' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [
        0 => 'createdAt',
        1 => 'modifiedAt',
        2 => 'createdById',
        3 => 'createdByName',
        4 => 'modifiedById',
        5 => 'modifiedByName',
        6 => 'repliedId',
        7 => 'repliedName',
        8 => 'repliesIds',
        9 => 'repliesNames'
      ],
      'nonAdminReadOnly' => []
    ],
    'links' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [],
      'nonAdminReadOnly' => []
    ]
  ],
  'Team' => (object) [
    'fields' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [
        0 => 'createdAt',
        1 => 'modifiedAt'
      ],
      'nonAdminReadOnly' => []
    ],
    'attributes' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [
        0 => 'createdAt',
        1 => 'modifiedAt'
      ],
      'nonAdminReadOnly' => []
    ],
    'links' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [],
      'nonAdminReadOnly' => []
    ]
  ],
  'Template' => (object) [
    'fields' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [
        0 => 'createdAt',
        1 => 'modifiedAt',
        2 => 'createdBy',
        3 => 'modifiedBy'
      ],
      'nonAdminReadOnly' => []
    ],
    'attributes' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [
        0 => 'createdAt',
        1 => 'modifiedAt',
        2 => 'createdById',
        3 => 'createdByName',
        4 => 'modifiedById',
        5 => 'modifiedByName'
      ],
      'nonAdminReadOnly' => []
    ],
    'links' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [],
      'nonAdminReadOnly' => []
    ]
  ],
  'TwoFactorCode' => (object) [
    'fields' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [
        0 => 'createdAt'
      ],
      'nonAdminReadOnly' => []
    ],
    'attributes' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [
        0 => 'createdAt'
      ],
      'nonAdminReadOnly' => []
    ],
    'links' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [],
      'nonAdminReadOnly' => []
    ]
  ],
  'UniqueId' => (object) [
    'fields' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [
        0 => 'createdAt',
        1 => 'createdBy'
      ],
      'nonAdminReadOnly' => []
    ],
    'attributes' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [
        0 => 'createdAt',
        1 => 'createdById',
        2 => 'createdByName'
      ],
      'nonAdminReadOnly' => []
    ],
    'links' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [],
      'nonAdminReadOnly' => []
    ]
  ],
  'User' => (object) [
    'fields' => (object) [
      'forbidden' => [
        0 => 'authLogRecordId',
        1 => 'userData',
        2 => 'deleteId'
      ],
      'internal' => [
        0 => 'password',
        1 => 'passwordConfirm'
      ],
      'onlyAdmin' => [
        0 => 'authMethod',
        1 => 'apiKey',
        2 => 'secretKey',
        3 => 'layoutSet',
        4 => 'auth2FA'
      ],
      'readOnly' => [
        0 => 'apiKey',
        1 => 'secretKey',
        2 => 'position',
        3 => 'account',
        4 => 'portal',
        5 => 'createdAt',
        6 => 'modifiedAt',
        7 => 'createdBy',
        8 => 'auth2FA',
        9 => 'lastAccess',
        10 => 'emailAddressList',
        11 => 'userEmailAddressList',
        12 => 'excludeFromReplyEmailAddressList',
        13 => 'deleteId',
        14 => 'targetListIsOptedOut'
      ],
      'nonAdminReadOnly' => [
        0 => 'userName',
        1 => 'type',
        2 => 'password',
        3 => 'passwordConfirm',
        4 => 'apiKey',
        5 => 'isActive',
        6 => 'emailAddress',
        7 => 'defaultTeam',
        8 => 'teams',
        9 => 'roles',
        10 => 'portals',
        11 => 'portalRoles',
        12 => 'contact',
        13 => 'accounts',
        14 => 'workingTimeCalendar'
      ]
    ],
    'attributes' => (object) [
      'forbidden' => [
        0 => 'authLogRecordId',
        1 => 'userDataId',
        2 => 'userDataName',
        3 => 'deleteId'
      ],
      'internal' => [
        0 => 'password',
        1 => 'passwordConfirm'
      ],
      'onlyAdmin' => [
        0 => 'authMethod',
        1 => 'apiKey',
        2 => 'secretKey',
        3 => 'layoutSetId',
        4 => 'layoutSetName',
        5 => 'auth2FA'
      ],
      'readOnly' => [
        0 => 'apiKey',
        1 => 'secretKey',
        2 => 'position',
        3 => 'accountId',
        4 => 'accountName',
        5 => 'portalId',
        6 => 'portalName',
        7 => 'createdAt',
        8 => 'modifiedAt',
        9 => 'createdById',
        10 => 'createdByName',
        11 => 'auth2FA',
        12 => 'lastAccess',
        13 => 'emailAddressList',
        14 => 'userEmailAddressList',
        15 => 'excludeFromReplyEmailAddressList',
        16 => 'deleteId',
        17 => 'targetListIsOptedOut'
      ],
      'nonAdminReadOnly' => [
        0 => 'userName',
        1 => 'type',
        2 => 'password',
        3 => 'passwordConfirm',
        4 => 'apiKey',
        5 => 'isActive',
        6 => 'emailAddressIsOptedOut',
        7 => 'emailAddressIsInvalid',
        8 => 'emailAddress',
        9 => 'emailAddressData',
        10 => 'defaultTeamId',
        11 => 'defaultTeamName',
        12 => 'teamsIds',
        13 => 'teamsColumns',
        14 => 'teamsNames',
        15 => 'rolesIds',
        16 => 'rolesNames',
        17 => 'portalsIds',
        18 => 'portalsNames',
        19 => 'portalRolesIds',
        20 => 'portalRolesNames',
        21 => 'contactId',
        22 => 'contactName',
        23 => 'accountsIds',
        24 => 'accountsNames',
        25 => 'workingTimeCalendarId',
        26 => 'workingTimeCalendarName'
      ]
    ],
    'links' => (object) [
      'forbidden' => [
        0 => 'userData'
      ],
      'internal' => [],
      'onlyAdmin' => [
        0 => 'defaultTeam',
        1 => 'roles',
        2 => 'portalRoles',
        3 => 'dashboardTemplate',
        4 => 'accounts'
      ],
      'readOnly' => [],
      'nonAdminReadOnly' => [
        0 => 'teams',
        1 => 'workingTimeRanges'
      ]
    ]
  ],
  'Webhook' => (object) [
    'fields' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [
        0 => 'user'
      ],
      'readOnly' => [
        0 => 'entityType',
        1 => 'type',
        2 => 'field',
        3 => 'secretKey',
        4 => 'createdAt',
        5 => 'modifiedAt',
        6 => 'createdBy',
        7 => 'modifiedBy'
      ],
      'nonAdminReadOnly' => []
    ],
    'attributes' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [
        0 => 'userId',
        1 => 'userName'
      ],
      'readOnly' => [
        0 => 'entityType',
        1 => 'type',
        2 => 'field',
        3 => 'secretKey',
        4 => 'createdAt',
        5 => 'modifiedAt',
        6 => 'createdById',
        7 => 'createdByName',
        8 => 'modifiedById',
        9 => 'modifiedByName'
      ],
      'nonAdminReadOnly' => []
    ],
    'links' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [],
      'nonAdminReadOnly' => []
    ]
  ],
  'WebhookEventQueueItem' => (object) [
    'fields' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [
        0 => 'createdAt'
      ],
      'nonAdminReadOnly' => []
    ],
    'attributes' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [
        0 => 'createdAt'
      ],
      'nonAdminReadOnly' => []
    ],
    'links' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [],
      'nonAdminReadOnly' => []
    ]
  ],
  'WorkingTimeCalendar' => (object) [
    'fields' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [
        0 => 'teams',
        1 => 'createdAt',
        2 => 'modifiedAt',
        3 => 'createdBy',
        4 => 'modifiedBy'
      ],
      'nonAdminReadOnly' => []
    ],
    'attributes' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [
        0 => 'teamsIds',
        1 => 'teamsNames',
        2 => 'createdAt',
        3 => 'modifiedAt',
        4 => 'createdById',
        5 => 'createdByName',
        6 => 'modifiedById',
        7 => 'modifiedByName'
      ],
      'nonAdminReadOnly' => []
    ],
    'links' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [
        0 => 'teams'
      ],
      'nonAdminReadOnly' => []
    ]
  ],
  'WorkingTimeRange' => (object) [
    'fields' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [
        0 => 'createdAt',
        1 => 'modifiedAt',
        2 => 'createdBy',
        3 => 'modifiedBy'
      ],
      'nonAdminReadOnly' => []
    ],
    'attributes' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [
        0 => 'createdAt',
        1 => 'modifiedAt',
        2 => 'createdById',
        3 => 'createdByName',
        4 => 'modifiedById',
        5 => 'modifiedByName'
      ],
      'nonAdminReadOnly' => []
    ],
    'links' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [],
      'nonAdminReadOnly' => []
    ]
  ],
  'Account' => (object) [
    'fields' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [
        0 => 'createdAt',
        1 => 'modifiedAt',
        2 => 'createdBy',
        3 => 'modifiedBy',
        4 => 'originalLead',
        5 => 'targetListIsOptedOut',
        6 => 'billingAddressMap',
        7 => 'shippingAddressMap'
      ],
      'nonAdminReadOnly' => []
    ],
    'attributes' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [
        0 => 'createdAt',
        1 => 'modifiedAt',
        2 => 'createdById',
        3 => 'createdByName',
        4 => 'modifiedById',
        5 => 'modifiedByName',
        6 => 'originalLeadId',
        7 => 'originalLeadName',
        8 => 'targetListIsOptedOut',
        9 => 'billingAddressMap',
        10 => 'shippingAddressMap'
      ],
      'nonAdminReadOnly' => []
    ],
    'links' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [],
      'nonAdminReadOnly' => []
    ]
  ],
  'Call' => (object) [
    'fields' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [
        0 => 'account',
        1 => 'createdAt',
        2 => 'modifiedAt',
        3 => 'createdBy',
        4 => 'modifiedBy'
      ],
      'nonAdminReadOnly' => []
    ],
    'attributes' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [
        0 => 'accountId',
        1 => 'accountName',
        2 => 'createdAt',
        3 => 'modifiedAt',
        4 => 'createdById',
        5 => 'createdByName',
        6 => 'modifiedById',
        7 => 'modifiedByName'
      ],
      'nonAdminReadOnly' => []
    ],
    'links' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [],
      'nonAdminReadOnly' => []
    ]
  ],
  'Campaign' => (object) [
    'fields' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [
        0 => 'createdAt',
        1 => 'modifiedAt',
        2 => 'createdBy',
        3 => 'modifiedBy',
        4 => 'sentCount',
        5 => 'openedCount',
        6 => 'clickedCount',
        7 => 'optedInCount',
        8 => 'optedOutCount',
        9 => 'bouncedCount',
        10 => 'hardBouncedCount',
        11 => 'softBouncedCount',
        12 => 'leadCreatedCount',
        13 => 'openedPercentage',
        14 => 'clickedPercentage',
        15 => 'optedOutPercentage',
        16 => 'bouncedPercentage',
        17 => 'revenue',
        18 => 'revenueCurrency',
        19 => 'revenueConverted',
        20 => 'budgetConverted'
      ],
      'nonAdminReadOnly' => []
    ],
    'attributes' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [
        0 => 'createdAt',
        1 => 'modifiedAt',
        2 => 'createdById',
        3 => 'createdByName',
        4 => 'modifiedById',
        5 => 'modifiedByName',
        6 => 'sentCount',
        7 => 'openedCount',
        8 => 'clickedCount',
        9 => 'optedInCount',
        10 => 'optedOutCount',
        11 => 'bouncedCount',
        12 => 'hardBouncedCount',
        13 => 'softBouncedCount',
        14 => 'leadCreatedCount',
        15 => 'openedPercentage',
        16 => 'clickedPercentage',
        17 => 'optedOutPercentage',
        18 => 'bouncedPercentage',
        19 => 'revenueCurrency',
        20 => 'revenue',
        21 => 'revenueCurrency',
        22 => 'revenueConverted',
        23 => 'budgetConverted'
      ],
      'nonAdminReadOnly' => []
    ],
    'links' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [],
      'nonAdminReadOnly' => []
    ]
  ],
  'CampaignLogRecord' => (object) [
    'fields' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [
        0 => 'createdAt',
        1 => 'createdBy'
      ],
      'nonAdminReadOnly' => []
    ],
    'attributes' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [
        0 => 'createdAt',
        1 => 'createdById',
        2 => 'createdByName'
      ],
      'nonAdminReadOnly' => []
    ],
    'links' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [],
      'nonAdminReadOnly' => []
    ]
  ],
  'CampaignTrackingUrl' => (object) [
    'fields' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [
        0 => 'urlToUse',
        1 => 'modifiedAt',
        2 => 'modifiedBy',
        3 => 'createdAt',
        4 => 'createdBy'
      ],
      'nonAdminReadOnly' => []
    ],
    'attributes' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [
        0 => 'urlToUse',
        1 => 'modifiedAt',
        2 => 'modifiedById',
        3 => 'modifiedByName',
        4 => 'createdAt',
        5 => 'createdById',
        6 => 'createdByName'
      ],
      'nonAdminReadOnly' => []
    ],
    'links' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [],
      'nonAdminReadOnly' => []
    ]
  ],
  'Case' => (object) [
    'fields' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [
        0 => 'inboundEmail',
        1 => 'createdAt',
        2 => 'modifiedAt',
        3 => 'createdBy',
        4 => 'modifiedBy'
      ],
      'nonAdminReadOnly' => []
    ],
    'attributes' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [
        0 => 'inboundEmailId',
        1 => 'inboundEmailName',
        2 => 'createdAt',
        3 => 'modifiedAt',
        4 => 'createdById',
        5 => 'createdByName',
        6 => 'modifiedById',
        7 => 'modifiedByName'
      ],
      'nonAdminReadOnly' => []
    ],
    'links' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [
        0 => 'inboundEmail'
      ],
      'nonAdminReadOnly' => []
    ]
  ],
  'Contact' => (object) [
    'fields' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [
        0 => 'accountType',
        1 => 'createdAt',
        2 => 'modifiedAt',
        3 => 'createdBy',
        4 => 'modifiedBy',
        5 => 'portalUser',
        6 => 'hasPortalUser',
        7 => 'originalLead',
        8 => 'targetListIsOptedOut',
        9 => 'addressMap'
      ],
      'nonAdminReadOnly' => []
    ],
    'attributes' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [
        0 => 'accountType',
        1 => 'createdAt',
        2 => 'modifiedAt',
        3 => 'createdById',
        4 => 'createdByName',
        5 => 'modifiedById',
        6 => 'modifiedByName',
        7 => 'portalUserId',
        8 => 'portalUserName',
        9 => 'hasPortalUser',
        10 => 'originalLeadId',
        11 => 'originalLeadName',
        12 => 'targetListIsOptedOut',
        13 => 'addressMap'
      ],
      'nonAdminReadOnly' => []
    ],
    'links' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [],
      'nonAdminReadOnly' => []
    ]
  ],
  'Document' => (object) [
    'fields' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [
        0 => 'createdAt',
        1 => 'modifiedAt',
        2 => 'createdBy',
        3 => 'modifiedBy'
      ],
      'nonAdminReadOnly' => []
    ],
    'attributes' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [
        0 => 'createdAt',
        1 => 'modifiedAt',
        2 => 'createdById',
        3 => 'createdByName',
        4 => 'modifiedById',
        5 => 'modifiedByName'
      ],
      'nonAdminReadOnly' => []
    ],
    'links' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [],
      'nonAdminReadOnly' => []
    ]
  ],
  'DocumentFolder' => (object) [
    'fields' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [
        0 => 'createdAt',
        1 => 'modifiedAt',
        2 => 'createdBy',
        3 => 'modifiedBy'
      ],
      'nonAdminReadOnly' => []
    ],
    'attributes' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [
        0 => 'createdAt',
        1 => 'modifiedAt',
        2 => 'createdById',
        3 => 'createdByName',
        4 => 'modifiedById',
        5 => 'modifiedByName'
      ],
      'nonAdminReadOnly' => []
    ],
    'links' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [],
      'nonAdminReadOnly' => []
    ]
  ],
  'EmailQueueItem' => (object) [
    'fields' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [
        0 => 'massEmail',
        1 => 'status',
        2 => 'attemptCount',
        3 => 'target',
        4 => 'createdAt',
        5 => 'sentAt',
        6 => 'emailAddress'
      ],
      'nonAdminReadOnly' => []
    ],
    'attributes' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [
        0 => 'massEmailId',
        1 => 'massEmailName',
        2 => 'status',
        3 => 'attemptCount',
        4 => 'targetId',
        5 => 'targetType',
        6 => 'targetName',
        7 => 'createdAt',
        8 => 'sentAt',
        9 => 'emailAddress'
      ],
      'nonAdminReadOnly' => []
    ],
    'links' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [],
      'nonAdminReadOnly' => []
    ]
  ],
  'KnowledgeBaseArticle' => (object) [
    'fields' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [
        0 => 'order',
        1 => 'createdAt',
        2 => 'modifiedAt',
        3 => 'createdBy',
        4 => 'modifiedBy'
      ],
      'nonAdminReadOnly' => []
    ],
    'attributes' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [
        0 => 'order',
        1 => 'createdAt',
        2 => 'modifiedAt',
        3 => 'createdById',
        4 => 'createdByName',
        5 => 'modifiedById',
        6 => 'modifiedByName'
      ],
      'nonAdminReadOnly' => []
    ],
    'links' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [],
      'nonAdminReadOnly' => []
    ]
  ],
  'KnowledgeBaseCategory' => (object) [
    'fields' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [
        0 => 'createdAt',
        1 => 'modifiedAt',
        2 => 'createdBy',
        3 => 'modifiedBy'
      ],
      'nonAdminReadOnly' => []
    ],
    'attributes' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [
        0 => 'createdAt',
        1 => 'modifiedAt',
        2 => 'createdById',
        3 => 'createdByName',
        4 => 'modifiedById',
        5 => 'modifiedByName'
      ],
      'nonAdminReadOnly' => []
    ],
    'links' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [],
      'nonAdminReadOnly' => []
    ]
  ],
  'Lead' => (object) [
    'fields' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [
        0 => 'opportunityAmountConverted',
        1 => 'convertedAt',
        2 => 'createdAt',
        3 => 'modifiedAt',
        4 => 'createdBy',
        5 => 'modifiedBy',
        6 => 'targetListIsOptedOut',
        7 => 'addressMap'
      ],
      'nonAdminReadOnly' => []
    ],
    'attributes' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [
        0 => 'opportunityAmountConverted',
        1 => 'convertedAt',
        2 => 'createdAt',
        3 => 'modifiedAt',
        4 => 'createdById',
        5 => 'createdByName',
        6 => 'modifiedById',
        7 => 'modifiedByName',
        8 => 'targetListIsOptedOut',
        9 => 'addressMap'
      ],
      'nonAdminReadOnly' => []
    ],
    'links' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [],
      'nonAdminReadOnly' => []
    ]
  ],
  'MassEmail' => (object) [
    'fields' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [
        0 => 'createdAt',
        1 => 'modifiedAt',
        2 => 'createdBy',
        3 => 'modifiedBy'
      ],
      'nonAdminReadOnly' => []
    ],
    'attributes' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [
        0 => 'createdAt',
        1 => 'modifiedAt',
        2 => 'createdById',
        3 => 'createdByName',
        4 => 'modifiedById',
        5 => 'modifiedByName'
      ],
      'nonAdminReadOnly' => []
    ],
    'links' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [],
      'nonAdminReadOnly' => []
    ]
  ],
  'Meeting' => (object) [
    'fields' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [
        0 => 'account',
        1 => 'createdAt',
        2 => 'modifiedAt',
        3 => 'createdBy',
        4 => 'modifiedBy'
      ],
      'nonAdminReadOnly' => []
    ],
    'attributes' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [
        0 => 'accountId',
        1 => 'accountName',
        2 => 'createdAt',
        3 => 'modifiedAt',
        4 => 'createdById',
        5 => 'createdByName',
        6 => 'modifiedById',
        7 => 'modifiedByName'
      ],
      'nonAdminReadOnly' => []
    ],
    'links' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [],
      'nonAdminReadOnly' => []
    ]
  ],
  'Opportunity' => (object) [
    'fields' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [
        0 => 'amountConverted',
        1 => 'amountWeightedConverted',
        2 => 'originalLead',
        3 => 'createdAt',
        4 => 'modifiedAt',
        5 => 'createdBy',
        6 => 'modifiedBy'
      ],
      'nonAdminReadOnly' => []
    ],
    'attributes' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [
        0 => 'amountConverted',
        1 => 'amountWeightedConverted',
        2 => 'originalLeadId',
        3 => 'originalLeadName',
        4 => 'createdAt',
        5 => 'modifiedAt',
        6 => 'createdById',
        7 => 'createdByName',
        8 => 'modifiedById',
        9 => 'modifiedByName'
      ],
      'nonAdminReadOnly' => []
    ],
    'links' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [],
      'nonAdminReadOnly' => []
    ]
  ],
  'Target' => (object) [
    'fields' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [
        0 => 'createdAt',
        1 => 'modifiedAt',
        2 => 'createdBy',
        3 => 'modifiedBy',
        4 => 'addressMap'
      ],
      'nonAdminReadOnly' => []
    ],
    'attributes' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [
        0 => 'createdAt',
        1 => 'modifiedAt',
        2 => 'createdById',
        3 => 'createdByName',
        4 => 'modifiedById',
        5 => 'modifiedByName',
        6 => 'addressMap'
      ],
      'nonAdminReadOnly' => []
    ],
    'links' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [],
      'nonAdminReadOnly' => []
    ]
  ],
  'TargetList' => (object) [
    'fields' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [
        0 => 'entryCount',
        1 => 'optedOutCount',
        2 => 'createdAt',
        3 => 'modifiedAt',
        4 => 'createdBy',
        5 => 'modifiedBy',
        6 => 'targetStatus',
        7 => 'isOptedOut'
      ],
      'nonAdminReadOnly' => []
    ],
    'attributes' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [
        0 => 'entryCount',
        1 => 'optedOutCount',
        2 => 'createdAt',
        3 => 'modifiedAt',
        4 => 'createdById',
        5 => 'createdByName',
        6 => 'modifiedById',
        7 => 'modifiedByName',
        8 => 'targetStatus',
        9 => 'isOptedOut'
      ],
      'nonAdminReadOnly' => []
    ],
    'links' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [],
      'nonAdminReadOnly' => []
    ]
  ],
  'Task' => (object) [
    'fields' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [
        0 => 'dateCompleted',
        1 => 'isOverdue',
        2 => 'account',
        3 => 'contact',
        4 => 'createdAt',
        5 => 'modifiedAt',
        6 => 'createdBy',
        7 => 'modifiedBy'
      ],
      'nonAdminReadOnly' => []
    ],
    'attributes' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [
        0 => 'dateCompleted',
        1 => 'isOverdue',
        2 => 'accountId',
        3 => 'accountName',
        4 => 'contactId',
        5 => 'contactName',
        6 => 'createdAt',
        7 => 'modifiedAt',
        8 => 'createdById',
        9 => 'createdByName',
        10 => 'modifiedById',
        11 => 'modifiedByName'
      ],
      'nonAdminReadOnly' => []
    ],
    'links' => (object) [
      'forbidden' => [],
      'internal' => [],
      'onlyAdmin' => [],
      'readOnly' => [],
      'nonAdminReadOnly' => []
    ]
  ]
];
