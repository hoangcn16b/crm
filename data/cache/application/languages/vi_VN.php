<?php
return [
  'ActionHistoryRecord' => [
    'fields' => [
      'user' => 'Người dùng',
      'action' => 'Hành động',
      'createdAt' => 'Ngày',
      'userType' => 'User Type',
      'target' => 'Target',
      'targetType' => 'Target Type',
      'authToken' => 'Auth Token',
      'ipAddress' => 'IP Address',
      'authLogRecord' => 'Auth Log Record'
    ],
    'links' => [
      'authToken' => 'Auth Token',
      'authLogRecord' => 'Auth Log Record',
      'user' => 'Người dùng',
      'target' => 'Target'
    ],
    'presetFilters' => [
      'onlyMy' => 'Chỉ mình tôi'
    ],
    'options' => [
      'action' => [
        'read' => 'Đọc',
        'update' => 'Cập nhật',
        'delete' => 'Xóa',
        'create' => 'Tạo'
      ]
    ]
  ],
  'AddressCountry' => [
    'labels' => [
      'Create AddressCountry' => 'Create Address Country',
      'Populate' => 'Populate'
    ],
    'fields' => [
      'code' => 'Code',
      'isPreferred' => 'Is Preferred'
    ],
    'tooltips' => [
      'code' => 'ISO 3166-1 alpha-2 code.',
      'isPreferred' => 'Preferred counties appear first in the picklist.'
    ],
    'messages' => [
      'confirmPopulateDefaults' => 'All existing countries will be deleted, the default country list will be created. It won\'t be possible to revert the operation.

Are you sure?'
    ],
    'strings' => [
      'populateDefaults' => 'Populate with default country list'
    ]
  ],
  'Admin' => [
    'labels' => [
      'Enabled' => 'Cho phép',
      'Disabled' => 'Vô hiệu',
      'System' => 'Hệ thống',
      'Users' => 'Người dùng',
      'Email' => 'Email',
      'Messaging' => 'Messaging',
      'Data' => 'Dữ liệu',
      'Misc' => 'Misc',
      'Setup' => 'Setup',
      'Customization' => 'Tùy chỉnh',
      'Available Fields' => 'Trường hiện có',
      'Layout' => 'Giao diện',
      'Entity Manager' => 'Quản lý Entity',
      'Add Panel' => 'Thêm bảng điều khiển',
      'Add Field' => 'Thêm trường',
      'Settings' => 'Cài đặt',
      'Scheduled Jobs' => 'Công việc đã lên lịch',
      'Upgrade' => 'Nâng cấp',
      'Clear Cache' => 'Xóa Cache',
      'Rebuild' => 'Dựng lại',
      'Teams' => 'Đội nhóm',
      'Roles' => 'Vai trò',
      'Portal' => 'Cổng thông tin',
      'Portals' => 'Cổng thông tin',
      'Portal Roles' => 'Quyền truy cập cổng thông tin',
      'Portal Users' => 'Portal Users',
      'API Users' => 'API Users',
      'Outbound Emails' => 'Cấu hình thư đi',
      'Group Email Accounts' => 'Nhóm tài khoản email',
      'Personal Email Accounts' => 'Tài khoản email cá nhân',
      'Inbound Emails' => 'Cấu hình máy chủ nhận thư',
      'Email Templates' => 'Thư mẫu',
      'Import' => 'Nhập dữ liệu',
      'Layout Manager' => 'Quản lý giao diện',
      'User Interface' => 'Giao diện người dùng',
      'Auth Tokens' => 'Auth Tokens',
      'Auth Log' => 'Auth Log',
      'App Log' => 'App Log',
      'Authentication' => 'Xác thực',
      'Currency' => 'Tiền tệ',
      'Integrations' => 'Tích hợp',
      'Extensions' => 'Tiện ích mở rộng',
      'Webhooks' => 'Webhooks',
      'Dashboard Templates' => 'Dashboard Templates',
      'Upload' => 'Tải lên',
      'Installing...' => 'Đang cài đặt...',
      'Upgrading...' => 'Đang nâng cấp....',
      'Upgraded successfully' => 'Đã nâng cấp thành công',
      'Installed successfully' => 'Đã cài đặt thành công',
      'Ready for upgrade' => 'Sẵn sàng để nâng cấp',
      'Run Upgrade' => 'Chạy nâng cấp',
      'Install' => 'Cài đặt',
      'Ready for installation' => 'Sẵn sàng để cài đặt',
      'Uninstalling...' => 'Đang gỡ cài đặt...',
      'Uninstalled' => 'Đã gỡ cài đặt...',
      'Create Entity' => 'Tạo Entity',
      'Edit Entity' => 'Sửa Entity',
      'Create Link' => 'Tạo liên kết',
      'Edit Link' => 'Sửa liên kết',
      'Notifications' => 'Thông báo',
      'Jobs' => 'Công việc',
      'Job Settings' => 'Job Settings',
      'Reset to Default' => 'Khôi phục giá trị mặc định',
      'Email Filters' => 'Lọc thư',
      'Action History' => 'Lịch sử hoạt động',
      'Label Manager' => 'Quản lý nhãn ngôn ngữ',
      'Template Manager' => 'Template Manager',
      'Lead Capture' => 'Thu thập khách tiềm năng',
      'Attachments' => 'Đính kèm',
      'System Requirements' => 'Yêu cầu hệ thống',
      'PDF Templates' => 'Mẫu trang PDF',
      'PHP Settings' => 'Cài đặt PHP',
      'Database Settings' => 'Cài đặt cơ sở dữ liệu',
      'Permissions' => 'Quyền truy cập',
      'Email Addresses' => 'Email Addresses',
      'Phone Numbers' => 'Phone Numbers',
      'Layout Sets' => 'Layout Sets',
      'Working Time Calendars' => 'Working Time Calendars',
      'Group Email Folders' => 'Group Email Folders',
      'Authentication Providers' => 'Authentication Providers',
      'Address Countries' => 'Address Countries',
      'Success' => 'Thành công',
      'Fail' => 'Lỗi',
      'Configuration Instructions' => 'Configuration Instructions',
      'Formula Sandbox' => 'Formula Sandbox',
      'is recommended' => 'được khuyên dùng',
      'extension is missing' => 'tiện ích mở rộng bị thiếu'
    ],
    'layouts' => [
      'list' => 'Danh sách',
      'detail' => 'Chi tiết',
      'listSmall' => 'Danh sách (chế độ xem nhỏ)',
      'detailSmall' => 'Chi tiết (Chế độ xem nhỏ)',
      'detailPortal' => 'Detail (Portal)',
      'detailSmallPortal' => 'Detail (Small, Portal)',
      'listSmallPortal' => 'List (Small, Portal)',
      'listPortal' => 'List (Portal)',
      'relationshipsPortal' => 'Relationship Panels (Portal)',
      'filters' => 'Bộ lọc tìm kiếm',
      'massUpdate' => 'Cập nhật',
      'relationships' => 'Quan hệ',
      'defaultSidePanel' => 'Side Panel Fields',
      'bottomPanelsDetail' => 'Bottom Panels',
      'bottomPanelsEdit' => 'Bottom Panels (Edit)',
      'bottomPanelsDetailSmall' => 'Bottom Panels (Detail Small)',
      'bottomPanelsEditSmall' => 'Bottom Panels (Edit Small)',
      'sidePanelsDetail' => 'Side Panels (Detail)',
      'sidePanelsEdit' => 'Side Panels (Edit)',
      'sidePanelsDetailSmall' => 'Side Panels (Detail Small)',
      'sidePanelsEditSmall' => 'Side Panels (Edit Small)',
      'kanban' => 'Xem dạng tiến trình',
      'detailConvert' => 'Chuyển đổi khách hàng tiềm năng',
      'listForAccount' => 'List (for Account)',
      'listForContact' => 'List (for Contact)'
    ],
    'fieldTypes' => [
      'address' => 'Địa chỉ',
      'array' => 'Mảng',
      'foreign' => 'Khoá phụ',
      'duration' => 'Thời gian',
      'password' => 'Mật khẩu',
      'personName' => 'Tên gọi',
      'autoincrement' => 'Tự động tăng',
      'bool' => 'Bool',
      'currency' => 'Loại tiền tệ',
      'currencyConverted' => 'Currency (Converted)',
      'date' => 'Thời gian',
      'datetime' => 'Thời gian',
      'datetimeOptional' => 'Date/Date-Time',
      'email' => 'Thư điện tử',
      'enum' => 'Enum',
      'enumInt' => 'Enum Integer',
      'enumFloat' => 'Enum Float',
      'float' => 'Float',
      'int' => 'Int',
      'link' => 'Đường dẫn',
      'linkMultiple' => 'Đa đường dẫn',
      'linkParent' => 'Đường dẫn gốc',
      'linkOne' => 'Link One',
      'phone' => 'Điện thoại',
      'text' => 'Text',
      'url' => 'Đường dẫn',
      'urlMultiple' => 'Url Multiple',
      'varchar' => 'Varchar',
      'file' => 'Tập tin',
      'image' => 'Hình ảnh',
      'multiEnum' => 'Multi-Enum',
      'attachmentMultiple' => 'Nhiều tệp cùng đính kèm',
      'rangeInt' => 'Khoảng số nguyên',
      'rangeFloat' => 'Khoảng số thập phân',
      'rangeCurrency' => 'Khoảng tiền tệ',
      'wysiwyg' => 'Bộ gõ Wysiwyg',
      'map' => 'Bản đồ',
      'number' => 'Number (auto-increment)',
      'colorpicker' => 'Chọn màu sắc',
      'checklist' => 'Checklist',
      'barcode' => 'Barcode',
      'jsonArray' => 'Json Array',
      'jsonObject' => 'Json Object'
    ],
    'fields' => [
      'type' => 'Loại',
      'name' => 'Tên',
      'label' => 'Nhãn',
      'tooltipText' => 'Tooltip Text',
      'required' => 'Yêu cầu',
      'default' => 'Mặc định',
      'maxLength' => 'Chiều dài tối đa',
      'options' => 'Options (raw values, not translated)',
      'optionsReference' => 'Options Reference',
      'after' => 'Thay đổi (trường)',
      'before' => 'Before (field)',
      'link' => 'Đường dẫn',
      'field' => 'Trường',
      'min' => 'Tối thiểu',
      'max' => 'Tối đa',
      'translation' => 'Dịch',
      'previewSize' => 'Kích thước cũ',
      'listPreviewSize' => 'Preview Size in List View',
      'noEmptyString' => 'Empty string value is not allowed',
      'defaultType' => 'Loại mặc định',
      'seeMoreDisabled' => 'Không cho phép cắt chữ',
      'cutHeight' => 'Cut Height (px)',
      'entityList' => 'Danh sách Entity',
      'isSorted' => 'Đã sắp xếp (theo ký tự)',
      'audited' => 'Đã audit',
      'trim' => 'Cắt',
      'height' => 'Chiều cao (px)',
      'minHeight' => 'Chiều cao tối thiểu (px)',
      'provider' => 'Nhà cung cấp',
      'typeList' => 'Loại danh sách',
      'rows' => 'Số hàng của khung văn bản',
      'lengthOfCut' => 'Length of cut',
      'sourceList' => 'Danh sách nguồn dữ liệu',
      'prefix' => 'Prefix',
      'nextNumber' => 'Next Number',
      'padLength' => 'Pad Length',
      'disableFormatting' => 'Disable Formatting',
      'dynamicLogicVisible' => 'Conditions making field visible',
      'dynamicLogicReadOnly' => 'Conditions making field read-only',
      'dynamicLogicRequired' => 'Conditions making field required',
      'dynamicLogicOptions' => 'Conditional options',
      'dynamicLogicInvalid' => 'Conditions making field invalid',
      'probabilityMap' => 'Stage Probabilities (%)',
      'notActualOptions' => 'Not Actual Options',
      'activeOptions' => 'Active Options',
      'readOnly' => 'Chỉ đọc',
      'readOnlyAfterCreate' => 'Read-only After Create',
      'maxFileSize' => 'Kích thước file tối đa (Mb)',
      'isPersonalData' => 'Is Personal Data',
      'useIframe' => 'Sử dụng Iframe',
      'useNumericFormat' => 'Use Numeric Format',
      'strip' => 'Strip',
      'minuteStep' => 'Minutes Step',
      'inlineEditDisabled' => 'Disable Inline Edit',
      'allowCustomOptions' => 'Cho phép tùy chỉnh',
      'displayAsLabel' => 'Hiển thị như nhãn',
      'displayAsList' => 'Display as List',
      'labelType' => 'Label Type',
      'maxCount' => 'Max Item Count',
      'accept' => 'Chấp nhận',
      'viewMap' => 'View Map Button',
      'codeType' => 'Code Type',
      'lastChar' => 'Last Character',
      'onlyDefaultCurrency' => 'Only default currency',
      'decimal' => 'Decimal',
      'displayRawText' => 'Display raw text (no markdown)',
      'conversionDisabled' => 'Disable Conversion',
      'decimalPlaces' => 'Decimal Places',
      'pattern' => 'Pattern',
      'globalRestrictions' => 'Global Restrictions',
      'copyToClipboard' => 'Copy to clipboard button',
      'createButton' => 'Create Button',
      'autocompleteOnEmpty' => 'Autocomplete on empty input',
      'relateOnImport' => 'Relate on Import',
      'aclScope' => 'ACL Scope',
      'onlyAdmin' => 'Only for Admin'
    ],
    'strings' => [
      'rebuildRequired' => 'Rebuild is required'
    ],
    'messages' => [
      'cacheIsDisabled' => 'Cache is disabled, the application will run slow. Enable cache in the [settings](#Admin/settings).',
      'formulaFunctions' => 'More functions can be found in [documentation]({documentationUrl}).',
      'rebuildRequired' => 'You need to run rebuild from CLI.',
      'upgradeVersion' => 'EspoCRM will be upgraded to version **{version}**. Please be patient as this may take a while.',
      'upgradeDone' => 'EspoCRM has been upgraded to version **{version}**.',
      'upgradeBackup' => 'We recommend you to make backup of your EspoCRM files and data before upgrade.',
      'thousandSeparatorEqualsDecimalMark' => 'Dấu phân cách không thể giống nhau',
      'userHasNoEmailAddress' => 'Người dùng chưa có địa chỉ email',
      'selectEntityType' => 'Chọn loại ở menu bên trái',
      'selectUpgradePackage' => 'Chọn gói nâng cấp',
      'downloadUpgradePackage' => 'Download upgrade package(s) [here]({url}).',
      'selectLayout' => 'Chọn giao diện cần sửa bên trái',
      'selectExtensionPackage' => 'Chọn gói tiện ích mở rộng',
      'extensionInstalled' => 'Tiện ích mở rộng {name} {version} đã được cài đặt',
      'installExtension' => 'Tiện ích mở rộng {name} {version} đã sẵn sàn để cài đặt',
      'cronIsDisabled' => 'Cron is disabled, the application is not fully functional. Enable cron in the [settings](#Admin/settings).',
      'cronIsNotConfigured' => 'Scheduled jobs are not running.  Hence inbound emails, notifications and reminders are not working. Please follow the [instructions](https://www.espocrm.com/documentation/administration/server-configuration/#user-content-setup-a-crontab) to setup cron job.',
      'newVersionIsAvailable' => 'New EspoCRM version {latestVersion} is available. Please follow the [instructions](https://www.espocrm.com/documentation/administration/upgrading/) to upgrade your instance.',
      'newExtensionVersionIsAvailable' => 'New {extensionName} version {latestVersion} is available.',
      'uninstallConfirmation' => 'Are you sure you want to uninstall the extension?',
      'upgradeInfo' => 'Check the [documentation]({url}) about how to upgrade your EspoCRM instance.',
      'upgradeRecommendation' => 'This way of upgrading is not recommended. It\'s better to upgrade from CLI.'
    ],
    'descriptions' => [
      'settings' => 'Cài đặt hệ thống hoặc ứng dụng',
      'scheduledJob' => 'Công việc tự động tiến hành',
      'jobs' => 'Jobs execute tasks in the background.',
      'upgrade' => 'Nâng cấp hệ thống EspoCRM',
      'clearCache' => 'Xóa dữ liệu cache.',
      'rebuild' => 'Xóa dữ liệu và tải lại hệ thống',
      'users' => 'Quản lý người dùng.',
      'teams' => 'Quản lý nhóm.',
      'roles' => 'Quản lý vai trò.',
      'portals' => 'Quản lý cổng thông tin',
      'portalRoles' => 'Quyền truy cập trang Portal',
      'portalUsers' => 'Users of portal.',
      'outboundEmails' => 'Tùy chỉnh SMTP để gửi email.',
      'groupEmailAccounts' => 'Group IMAP email accounts. Email import and Email-to-Case.',
      'personalEmailAccounts' => 'Tài khoản Email',
      'emailTemplates' => 'Mẫu email gửi đi',
      'import' => 'Nhập dữ liệu từ tệp CSV',
      'layoutManager' => 'Tùy chỉnh bố cục (danh sách, chi tiết, chỉnh sửa, tìm kiếm, cập nhật hàng loạt).',
      'entityManager' => 'Create and edit custom entities. Manage fields and relationships.',
      'userInterface' => 'Chỉnh sửa giao diện.',
      'authTokens' => 'Kích hoạt quản lý phiên làm việc. Địa chỉ IP và ngày truy cập.',
      'authentication' => 'Cài đặt xác thực truy cập',
      'currency' => 'Cài đặt tiền tệ và tỷ giá',
      'extensions' => 'Cài đặt hoặc gỡ cài đặt tiện ích mở rộng',
      'integrations' => 'Kết nối với ứng dụng thứ 3',
      'notifications' => 'In-app and email notification settings.',
      'inboundEmails' => 'Nhóm tài khoản email IMAP. Nhập email và Email-to-Case.',
      'emailFilters' => 'Email messages that match the specified filter won\'t be imported.',
      'groupEmailFolders' => 'Email folders shared for teams.',
      'actionHistory' => 'Nhật ký hoạt động thành viên',
      'labelManager' => 'Customize application labels.',
      'templateManager' => 'Customize message templates.',
      'authLog' => 'Lịch sử đăng nhập',
      'appLog' => 'Application log.',
      'leadCapture' => 'API entry points for Web-to-Lead.',
      'attachments' => 'All file attachments stored in the system.',
      'systemRequirements' => 'Yêu cầu hệ thống cho EspoCRM',
      'apiUsers' => 'Separate users for integration purposes.',
      'webhooks' => 'Quản lý Webhooks',
      'authenticationProviders' => 'Additional authentication providers for portals.',
      'emailAddresses' => 'All email addresses stored in the system.',
      'phoneNumbers' => 'All phone numbers stored in the system.',
      'dashboardTemplates' => 'Deploy dashboards to users.',
      'layoutSets' => 'Collections of layouts that can be assigned to teams & portals.',
      'workingTimeCalendars' => 'Working schedule.',
      'jobsSettings' => 'Job processing settings. Jobs execute tasks in the background.',
      'sms' => 'SMS settings.',
      'pdfTemplates' => 'Templates for printing to PDF.',
      'formulaSandbox' => 'Write and test formula scripts.',
      'addressCountries' => 'Countries available for address fields.'
    ],
    'keywords' => [
      'settings' => 'system',
      'userInterface' => 'ui,theme,tabs,logo,dashboard',
      'authentication' => 'mật khẩu',
      'scheduledJob' => 'cron,jobs',
      'integrations' => 'google,maps,google maps',
      'authLog' => 'nhật ký,lịch sử',
      'authTokens' => 'history,access,log',
      'entityManager' => 'fields,relations,relationships',
      'templateManager' => 'thông báo',
      'jobs' => 'cron',
      'labelManager' => 'language,translation'
    ],
    'options' => [
      'previewSize' => [
        '' => 'Mặc định',
        'x-small' => 'Cực nhỏ',
        'small' => 'Nhỏ',
        'medium' => 'Trung bình',
        'large' => 'Lớn'
      ],
      'labelType' => [
        'state' => 'State',
        'regular' => 'Regular'
      ]
    ],
    'logicalOperators' => [
      'and' => 'VÀ',
      'or' => 'HOẶC',
      'not' => 'KHÔNG PHẢI'
    ],
    'systemRequirements' => [
      'requiredPhpVersion' => 'Phiên bản PHP',
      'requiredMysqlVersion' => 'Phiên bản MySQL',
      'requiredMariadbVersion' => 'phiên bản MariaDB',
      'requiredPostgresqlVersion' => 'PostgreSQL version',
      'host' => 'Tên máy chủ',
      'dbname' => 'Tên cơ sở dữ liệu',
      'user' => 'Tên đăng nhập',
      'writable' => 'Writable',
      'readable' => 'Readable'
    ],
    'templates' => [
      'twoFactorCode' => '2FA Code',
      'accessInfo' => 'Thông tin truy cập',
      'accessInfoPortal' => 'Access Info for Portals',
      'assignment' => 'Assignment',
      'mention' => 'Mention',
      'noteEmailReceived' => 'Note about Received Email',
      'notePost' => 'Note about Post',
      'notePostNoParent' => 'Note about Post (no Parent)',
      'noteStatus' => 'Note about Status Update',
      'passwordChangeLink' => 'Liên kết thay đổi mật khẩu',
      'invitation' => 'Invitation',
      'cancellation' => 'Cancellation',
      'reminder' => 'Nhắc nhở'
    ]
  ],
  'ApiUser' => [
    'labels' => [
      'Create ApiUser' => 'Create API User'
    ]
  ],
  'AppLogRecord' => [
    'fields' => [
      'message' => 'Message',
      'code' => 'Code',
      'level' => 'Level',
      'exceptionClass' => 'Exception Class',
      'file' => 'File',
      'line' => 'Line',
      'requestMethod' => 'Request Method',
      'requestResourcePath' => 'Request Resource Path'
    ],
    'presetFilters' => [
      'errors' => 'Errors'
    ]
  ],
  'Attachment' => [
    'fields' => [
      'role' => 'Role',
      'related' => 'Related',
      'file' => 'Tập tin',
      'type' => 'Loại',
      'field' => 'Trường',
      'sourceId' => 'Source ID',
      'storage' => 'Storage',
      'size' => 'Kích thước (bytes)',
      'isBeingUploaded' => 'Is Being Uploaded'
    ],
    'options' => [
      'role' => [
        'Attachment' => 'Đính kèm',
        'Inline Attachment' => 'Inline Attachment',
        'Import File' => 'Nhập tập tin vào',
        'Export File' => 'Xuất tập tin ra',
        'Mail Merge' => 'Gộp email',
        'Mass Pdf' => 'Mass Pdf'
      ]
    ],
    'insertFromSourceLabels' => [
      'Document' => 'Chèn tài liệu'
    ],
    'presetFilters' => [
      'orphan' => 'Orphan'
    ]
  ],
  'AuthLogRecord' => [
    'fields' => [
      'username' => 'Tên đăng nhập',
      'ipAddress' => 'Địa chỉ IP',
      'requestTime' => 'Thời gian yêu cầu kết nối',
      'createdAt' => 'Đã kết nối tại',
      'isDenied' => 'Is Denied',
      'denialReason' => 'Denial Reason',
      'portal' => 'Portal',
      'user' => 'User',
      'authToken' => 'Auth Token Created',
      'requestUrl' => 'Request URL',
      'requestMethod' => 'Request Method',
      'authTokenIsActive' => 'Auth Token is Active',
      'authenticationMethod' => 'Phương thức xác thực'
    ],
    'links' => [
      'authToken' => 'Auth Token Created',
      'user' => 'Người dùng',
      'portal' => 'Portal',
      'actionHistoryRecords' => 'Lịch sử hoạt động'
    ],
    'presetFilters' => [
      'denied' => 'Đã từ chối',
      'accepted' => 'Đã chấp thuận'
    ],
    'options' => [
      'denialReason' => [
        'CREDENTIALS' => 'Invalid credentials',
        'WRONG_CODE' => 'Wrong code',
        'INACTIVE_USER' => 'Inactive user',
        'IS_PORTAL_USER' => 'Portal user',
        'IS_NOT_PORTAL_USER' => 'Not a portal user',
        'USER_IS_NOT_IN_PORTAL' => 'User is not related to the portal',
        'IS_SYSTEM_USER' => 'Is system user',
        'FORBIDDEN' => 'Forbidden'
      ]
    ]
  ],
  'AuthToken' => [
    'fields' => [
      'user' => 'Người dùng',
      'ipAddress' => 'Địa chỉ IP',
      'lastAccess' => 'Thời gian truy cập cuối',
      'createdAt' => 'Thời gian đăng nhập',
      'isActive' => 'Được kích hoạt',
      'portal' => 'Portal'
    ],
    'links' => [
      'actionHistoryRecords' => 'Lịch sử hoạt động'
    ],
    'presetFilters' => [
      'active' => 'Kích hoạt',
      'inactive' => 'Chưa kích hoạt'
    ],
    'labels' => [
      'Set Inactive' => 'Set Inactive'
    ],
    'massActions' => [
      'setInactive' => 'Set Inactive'
    ]
  ],
  'AuthenticationProvider' => [
    'fields' => [
      'method' => 'Method'
    ],
    'labels' => [
      'Create AuthenticationProvider' => 'Create Provider'
    ]
  ],
  'Currency' => [
    'names' => [
      'AED' => 'United Arab Emirates Dirham',
      'AFN' => 'Afghan Afghani',
      'ALL' => 'Albanian Lek',
      'AMD' => 'Armenian Dram',
      'ANG' => 'Netherlands Antillean Guilder',
      'AOA' => 'Angolan Kwanza',
      'ARS' => 'Argentine Peso',
      'AUD' => 'Australian Dollar',
      'AWG' => 'Aruban Florin',
      'AZN' => 'Azerbaijani Manat',
      'BAM' => 'Bosnia-Herzegovina Convertible Mark',
      'BBD' => 'Barbadian Dollar',
      'BDT' => 'Bangladeshi Taka',
      'BGN' => 'Bulgarian Lev',
      'BHD' => 'Bahraini Dinar',
      'BIF' => 'Burundian Franc',
      'BMD' => 'Bermudan Dollar',
      'BND' => 'Brunei Dollar',
      'BOB' => 'Bolivian Boliviano',
      'BOV' => 'Bolivian Mvdol',
      'BRL' => 'Brazilian Real',
      'BSD' => 'Bahamian Dollar',
      'BTN' => 'Bhutanese Ngultrum',
      'BWP' => 'Botswanan Pula',
      'BYN' => 'Belarusian Ruble',
      'BZD' => 'Belize Dollar',
      'CAD' => 'Canadian Dollar',
      'CDF' => 'Congolese Franc',
      'CHE' => 'WIR Euro',
      'CHF' => 'Swiss Franc',
      'CHW' => 'WIR Franc',
      'CLF' => 'Chilean Unit of Account (UF)',
      'CLP' => 'Chilean Peso',
      'CNH' => 'Chinese Yuan (offshore)',
      'CNY' => 'Chinese Yuan',
      'COP' => 'Colombian Peso',
      'COU' => 'Colombian Real Value Unit',
      'CRC' => 'Costa Rican Colón',
      'CUC' => 'Cuban Convertible Peso',
      'CUP' => 'Cuban Peso',
      'CVE' => 'Cape Verdean Escudo',
      'CZK' => 'Czech Koruna',
      'DJF' => 'Djiboutian Franc',
      'DKK' => 'Danish Krone',
      'DOP' => 'Dominican Peso',
      'DZD' => 'Algerian Dinar',
      'EGP' => 'Egyptian Pound',
      'ERN' => 'Eritrean Nakfa',
      'ETB' => 'Ethiopian Birr',
      'EUR' => 'Euro',
      'FJD' => 'Fijian Dollar',
      'FKP' => 'Falkland Islands Pound',
      'GBP' => 'British Pound',
      'GEL' => 'Georgian Lari',
      'GHS' => 'Ghanaian Cedi',
      'GIP' => 'Gibraltar Pound',
      'GMD' => 'Gambian Dalasi',
      'GNF' => 'Guinean Franc',
      'GTQ' => 'Guatemalan Quetzal',
      'GYD' => 'Guyanaese Dollar',
      'HKD' => 'Hong Kong Dollar',
      'HNL' => 'Honduran Lempira',
      'HRK' => 'Croatian Kuna',
      'HTG' => 'Haitian Gourde',
      'HUF' => 'Hungarian Forint',
      'IDR' => 'Indonesian Rupiah',
      'ILS' => 'Israeli New Shekel',
      'INR' => 'Indian Rupee',
      'IQD' => 'Iraqi Dinar',
      'IRR' => 'Iranian Rial',
      'ISK' => 'Icelandic Króna',
      'JMD' => 'Jamaican Dollar',
      'JOD' => 'Jordanian Dinar',
      'JPY' => 'Japanese Yen',
      'KES' => 'Kenyan Shilling',
      'KGS' => 'Kyrgystani Som',
      'KHR' => 'Cambodian Riel',
      'KMF' => 'Comorian Franc',
      'KPW' => 'North Korean Won',
      'KRW' => 'South Korean Won',
      'KWD' => 'Kuwaiti Dinar',
      'KYD' => 'Cayman Islands Dollar',
      'KZT' => 'Kazakhstani Tenge',
      'LAK' => 'Laotian Kip',
      'LBP' => 'Lebanese Pound',
      'LKR' => 'Sri Lankan Rupee',
      'LRD' => 'Liberian Dollar',
      'LSL' => 'Lesotho Loti',
      'LYD' => 'Libyan Dinar',
      'MAD' => 'Moroccan Dirham',
      'MDL' => 'Moldovan Leu',
      'MGA' => 'Malagasy Ariary',
      'MKD' => 'Macedonian Denar',
      'MMK' => 'Myanmar Kyat',
      'MNT' => 'Mongolian Tugrik',
      'MOP' => 'Macanese Pataca',
      'MRO' => 'Mauritanian Ouguiya',
      'MUR' => 'Mauritian Rupee',
      'MWK' => 'Malawian Kwacha',
      'MXN' => 'Mexican Peso',
      'MXV' => 'Mexican Investment Unit',
      'MYR' => 'Malaysian Ringgit',
      'MZN' => 'Mozambican Metical',
      'NAD' => 'Namibian Dollar',
      'NGN' => 'Nigerian Naira',
      'NIO' => 'Nicaraguan Córdoba',
      'NOK' => 'Norwegian Krone',
      'NPR' => 'Nepalese Rupee',
      'NZD' => 'New Zealand Dollar',
      'OMR' => 'Omani Rial',
      'PAB' => 'Panamanian Balboa',
      'PEN' => 'Peruvian Sol',
      'PGK' => 'Papua New Guinean Kina',
      'PHP' => 'Philippine Piso',
      'PKR' => 'Pakistani Rupee',
      'PLN' => 'Polish Zloty',
      'PYG' => 'Paraguayan Guarani',
      'QAR' => 'Qatari Rial',
      'RON' => 'Romanian Leu',
      'RSD' => 'Serbian Dinar',
      'RUB' => 'Russian Ruble',
      'RWF' => 'Rwandan Franc',
      'SAR' => 'Saudi Riyal',
      'SBD' => 'Solomon Islands Dollar',
      'SCR' => 'Seychellois Rupee',
      'SDG' => 'Sudanese Pound',
      'SEK' => 'Swedish Krona',
      'SGD' => 'Singapore Dollar',
      'SHP' => 'St. Helena Pound',
      'SLL' => 'Sierra Leonean Leone',
      'SOS' => 'Somali Shilling',
      'SRD' => 'Surinamese Dollar',
      'SSP' => 'South Sudanese Pound',
      'STN' => 'São Tomé & Príncipe Dobra (2018)',
      'SYP' => 'Syrian Pound',
      'SZL' => 'Swazi Lilangeni',
      'SVC' => 'Salvadoran Colón',
      'THB' => 'Thai Baht',
      'TJS' => 'Tajikistani Somoni',
      'TND' => 'Tunisian Dinar',
      'TOP' => 'Tongan Paʻanga',
      'TRY' => 'Turkish Lira',
      'TTD' => 'Trinidad & Tobago Dollar',
      'TWD' => 'New Taiwan Dollar',
      'TZS' => 'Tanzanian Shilling',
      'UAH' => 'Ukrainian Hryvnia',
      'UGX' => 'Ugandan Shilling',
      'USD' => 'Đô la Mỹ',
      'USN' => 'US Dollar (Next day)',
      'UYI' => 'Uruguayan Peso (Indexed Units)',
      'UYU' => 'Uruguayan Peso',
      'UZS' => 'Uzbekistani Som',
      'VEF' => 'Venezuelan Bolívar',
      'VND' => 'Việt Nam đồng',
      'VUV' => 'Vanuatu Vatu',
      'WST' => 'Samoan Tala',
      'XAF' => 'Central African CFA Franc',
      'XCD' => 'East Caribbean Dollar',
      'XOF' => 'West African CFA Franc',
      'XPF' => 'CFP Franc',
      'YER' => 'Yemeni Rial',
      'ZAR' => 'South African Rand',
      'ZMW' => 'Zambian Kwacha',
      'ZWL' => 'Zimbabwe Dollar'
    ]
  ],
  'DashboardTemplate' => [
    'fields' => [
      'layout' => 'Bố cục',
      'append' => 'Append (don\'t remove user\'s tabs)'
    ],
    'links' => [],
    'labels' => [
      'Create DashboardTemplate' => 'Tạo template',
      'Deploy to Users' => 'Deploy to Users',
      'Deploy to Team' => 'Deploy to Team'
    ]
  ],
  'DashletOptions' => [
    'fields' => [
      'title' => 'Tiêu đề',
      'dateFrom' => 'Từ ngày',
      'dateTo' => 'Đến ngày',
      'autorefreshInterval' => 'Thời gian tự động tải lại',
      'displayRecords' => 'Số dòng hiển thị',
      'isDoubleHeight' => 'Cao 2x',
      'mode' => 'Mode',
      'enabledScopeList' => 'Những gì sẽ được hiển thị',
      'users' => 'Người dùng',
      'entityType' => 'Loại Entity ',
      'primaryFilter' => 'Primary Filter',
      'boolFilterList' => 'Additional Filters',
      'sortBy' => 'Order (field)',
      'sortDirection' => 'Order (direction)',
      'expandedLayout' => 'Bố cục',
      'skipOwn' => 'Don\'t show own records',
      'url' => 'URL',
      'dateFilter' => 'Date Filter',
      'text' => 'Text',
      'folder' => 'Folder',
      'team' => 'Đội nhóm',
      'futureDays' => 'Next X Days',
      'useLastStage' => 'Group by last reached stage'
    ],
    'options' => [
      'mode' => [
        'agendaWeek' => 'Tuần (agenda)',
        'basicWeek' => 'Tuần',
        'month' => 'Tháng',
        'basicDay' => 'Ngày',
        'agendaDay' => 'Ngày (agenda)',
        'timeline' => 'Dòng thời gian'
      ],
      'sortDirection' => [
        'asc' => 'Ascending',
        'desc' => 'Descending'
      ]
    ],
    'messages' => [
      'selectEntityType' => 'Select Entity Type in dashlet options.'
    ],
    'tooltips' => [
      'skipOwn' => 'Actions made by your user account won\'t be displayed.'
    ]
  ],
  'DynamicLogic' => [
    'labels' => [
      'Field' => 'Trường'
    ],
    'options' => [
      'operators' => [
        'equals' => 'BẰNG',
        'notEquals' => 'KHÔNG BẰNG',
        'greaterThan' => 'LỚN HƠN',
        'lessThan' => 'NHỎ HƠN',
        'greaterThanOrEquals' => 'Greater Than Or Equals',
        'lessThanOrEquals' => 'Less Than Or Equals',
        'in' => 'trong',
        'notIn' => 'không trong',
        'inPast' => 'Trong quá khứ',
        'inFuture' => 'Trong tương lai',
        'isToday' => 'Là hôm nay',
        'isTrue' => 'Là đúng',
        'isFalse' => 'Là sai',
        'isEmpty' => 'Bị bỏ trống',
        'isNotEmpty' => 'Không bị bỏ trống',
        'contains' => 'Có chứa',
        'notContains' => 'Không có chứa',
        'has' => 'Có chứa',
        'notHas' => 'Không có chứa',
        'startsWith' => 'Starts With',
        'endsWith' => 'Ends With',
        'matches' => 'Matches (reg exp)'
      ]
    ]
  ],
  'Email' => [
    'fields' => [
      'name' => 'Chủ đề',
      'parent' => 'Chủ',
      'status' => 'Tình trạng',
      'dateSent' => 'Ngày gửi',
      'from' => 'Từ',
      'to' => 'Tới',
      'cc' => 'CC',
      'bcc' => 'BCC',
      'replyTo' => 'Trả lời đến',
      'replyToString' => 'Trả lời đến (dạng chữ)',
      'personStringData' => 'Person String Data',
      'isHtml' => 'Chỉ Html',
      'body' => 'Nội dung',
      'bodyPlain' => 'Body (Plain)',
      'subject' => 'Chủ đề',
      'attachments' => 'Đính kèm',
      'selectTemplate' => 'Chọn mẫu',
      'fromEmailAddress' => 'Từ địa chỉ (liên kết)',
      'emailAddress' => 'Địa chỉ email',
      'deliveryDate' => 'Ngày giao',
      'account' => 'Tài khoản',
      'users' => 'Người dùng',
      'replied' => 'Đã trả lời',
      'replies' => 'Trả lời',
      'isRead' => 'Được đọc',
      'isNotRead' => 'Chưa được đọc',
      'isImportant' => 'Quan trọng',
      'isReplied' => 'Is Replied',
      'isNotReplied' => 'Is Not Replied',
      'isUsers' => 'Is User\'s',
      'isUsersSent' => 'Is User\'s Sent',
      'inTrash' => 'Trong thùng rác',
      'inArchive' => 'In Archive',
      'folder' => 'Thư mục',
      'inboundEmails' => 'Group Accounts',
      'emailAccounts' => 'Personal Accounts',
      'hasAttachment' => 'Has Attachment',
      'assignedUsers' => 'Assigned Users',
      'sentBy' => 'Gửi bởi',
      'toEmailAddresses' => 'To EmailAddresses',
      'ccEmailAddresses' => 'CC Email Addresses',
      'bccEmailAddresses' => 'BCC EmailAddresses',
      'replyToEmailAddresses' => 'Reply-To EmailAddresses',
      'messageId' => 'Message Id',
      'messageIdInternal' => 'Message Id (Internal)',
      'folderId' => 'ID thư mục',
      'folderString' => 'Folder',
      'fromName' => 'Từ tên',
      'fromString' => 'From String',
      'fromAddress' => 'Địa chỉ gửi',
      'replyToName' => 'Trả lời đến tên',
      'replyToAddress' => 'Trả lời đến địa chỉ',
      'isSystem' => 'Is System',
      'icsContents' => 'ICS Contents',
      'icsEventData' => 'ICS Event Data',
      'icsEventUid' => 'ICS Event UID',
      'createdEvent' => 'Created Event',
      'event' => 'Event',
      'icsEventDateStart' => 'ICS Event Date Start',
      'groupFolder' => 'Group Folder',
      'tasks' => 'Tasks'
    ],
    'links' => [
      'replied' => 'Đã trả lời',
      'replies' => 'Trả lời',
      'inboundEmails' => 'Group Accounts',
      'emailAccounts' => 'Personal Accounts',
      'assignedUsers' => 'Assigned Users',
      'sentBy' => 'Gửi bởi',
      'attachments' => 'Tệp đính kèm',
      'fromEmailAddress' => 'From Email Address',
      'toEmailAddresses' => 'To EmailAddresses',
      'ccEmailAddresses' => 'CC EmailAddresses',
      'bccEmailAddresses' => 'BCC EmailAddresses',
      'replyToEmailAddresses' => 'Reply-To EmailAddresses',
      'createdEvent' => 'Created Event',
      'groupFolder' => 'Group Folder'
    ],
    'options' => [
      'status' => [
        'Draft' => 'Bản nháp',
        'Sending' => 'Đang gửi',
        'Sent' => 'Gửi',
        'Archived' => 'Lưu trữ',
        'Received' => 'Đã nhận',
        'Failed' => 'Thất bại'
      ]
    ],
    'labels' => [
      'Create Email' => 'Email lưu trữ',
      'Archive Email' => 'Email lưu trữ',
      'Import EML' => 'Import EML',
      'Compose' => 'Soạn',
      'Reply' => 'Trả lời',
      'Reply to All' => 'Trả lời tất cả',
      'Forward' => 'Chuyển tiếp',
      'Insert Field' => 'Insert Field',
      'Original message' => 'Tin nhắn gốc',
      'Forwarded message' => 'Đã chuyển tiếp thư',
      'Email Accounts' => 'Tài khoản email cá nhân',
      'Inbound Emails' => 'Nhóm tài khoản email',
      'Email Templates' => 'Email mẫu',
      'Send Test Email' => 'Gửi email kiểm tra',
      'Send' => 'Gửi',
      'Email Address' => 'Địa chỉ email',
      'Mark Read' => 'Đánh dấu đã đọc',
      'Sending...' => 'Đang gửi...',
      'Save Draft' => 'Lưu nháp',
      'Mark all as read' => 'Đánh dấu tất cả đã đọc',
      'Show Plain Text' => 'Hiển thị văn bản thuần',
      'Mark as Important' => 'Đánh dấu quan trọng',
      'Unmark Importance' => 'Bỏ đánh dấu quan trọng',
      'Move to Trash' => 'Di chuyển đến thùng rác',
      'Retrieve from Trash' => 'Khôi phục từ thùng rác',
      'Move to Folder' => 'Move to Folder',
      'Moved to Archive' => 'Moved to Archive',
      'Filters' => 'Filters',
      'Folders' => 'Thư mục',
      'Group Folders' => 'Group Folders',
      'No Subject' => 'Không chủ đề',
      'View Users' => 'Xem thành viên',
      'Event' => 'Event',
      'View Attachments' => 'View Attachments',
      'Moved to Trash' => 'Moved to Trash',
      'Retrieved from Trash' => 'Retrieved from Trash',
      'Create Lead' => 'Chuyển khách hàng tiềm năng',
      'Create Contact' => 'Tạo khách hàng',
      'Add to Contact' => 'Thêm liên hệ',
      'Add to Lead' => 'Thêm Lead',
      'Create Task' => 'Tạo nhiệm vụ',
      'Create Case' => 'Create Case'
    ],
    'strings' => [
      'sendingFailed' => 'Gửi email lỗi'
    ],
    'messages' => [
      'alreadyImported' => 'The [email]({link}) already exists in the system.',
      'invalidCredentials' => 'Invalid credentials.',
      'unknownError' => 'Unknown error.',
      'recipientAddressRejected' => 'Recipient address rejected.',
      'noSmtpSetup' => 'SMTP is not configured: {link}',
      'testEmailSent' => 'Thư kiểm tra đã được gửi',
      'emailSent' => 'Thư đã được gửi',
      'savedAsDraft' => 'Đã lưu nháp',
      'sendConfirm' => 'Gửi thư này?',
      'removeSelectedRecordsConfirmation' => 'Are you sure you want to remove selected emails?

They will be removed for other users too.',
      'removeRecordConfirmation' => 'Are you sure you want to remove the email?

It will be removed for other users too.',
      'confirmInsertTemplate' => 'The email body will be lost. Are you sure you want to insert the template?'
    ],
    'presetFilters' => [
      'sent' => 'Đã gửi',
      'archived' => 'Lưu trữ',
      'inbox' => 'Hộp thư đến',
      'drafts' => 'Nháp',
      'trash' => 'Thùng rác',
      'archive' => 'Archive',
      'important' => 'Important'
    ],
    'actions' => [
      'moveToArchive' => 'Archive'
    ],
    'massActions' => [
      'markAsRead' => 'Đánh dấu đã đọc',
      'markAsNotRead' => 'Đánh dấu không đọc',
      'markAsImportant' => 'Đánh dấu quan trọng',
      'markAsNotImportant' => 'Ngưng đánh dấu quan trọng',
      'moveToTrash' => 'Di chuyển vào thùng rác',
      'moveToFolder' => 'Di chuyển đến thư mục',
      'moveToArchive' => 'Archive',
      'retrieveFromTrash' => 'Retrieve from Trash'
    ],
    'otherFields' => [
      'file' => 'File'
    ]
  ],
  'EmailAccount' => [
    'fields' => [
      'name' => 'Tên',
      'status' => 'Tình trạng',
      'host' => 'Host',
      'username' => 'Tên đăng nhập',
      'password' => 'Mật khẩu',
      'port' => 'Cổng (port)',
      'monitoredFolders' => 'Thư mục được theo dõi',
      'security' => 'Security',
      'fetchSince' => 'Fetch Since',
      'emailAddress' => 'Địa chỉ email',
      'sentFolder' => 'Thư mục gửi thư',
      'storeSentEmails' => 'Lưu email đã gửi',
      'keepFetchedEmailsUnread' => 'Giữ thư đã tải về dạng chưa đọc',
      'emailFolder' => 'Đặt tại thư mục',
      'connectedAt' => 'Connected At',
      'useImap' => 'Fetch Emails',
      'useSmtp' => 'Sử dụng SMTP',
      'smtpHost' => 'Máy chủ SMTP',
      'smtpPort' => 'Cổng SMTP',
      'smtpAuth' => 'Loại xác thực SMTP',
      'smtpSecurity' => 'Bảo mật SMTP',
      'smtpAuthMechanism' => 'SMTP Auth Mechanism',
      'smtpUsername' => 'Tên đăng nhập SMTP',
      'smtpPassword' => 'Mật khẩu SMTP'
    ],
    'links' => [
      'filters' => 'Lọc',
      'emails' => 'Email'
    ],
    'options' => [
      'status' => [
        'Active' => 'Kích hoạt',
        'Inactive' => 'Ngừng kích hoạt'
      ],
      'smtpAuthMechanism' => [
        'plain' => 'PLAIN',
        'login' => 'LOGIN',
        'crammd5' => 'CRAM-MD5'
      ]
    ],
    'labels' => [
      'Create EmailAccount' => 'Tạo tài khoản email',
      'IMAP' => 'IMAP',
      'Main' => 'Chính',
      'Test Connection' => 'Kiểm tra kết nối',
      'Send Test Email' => 'Gửi email thử',
      'SMTP' => 'SMTP'
    ],
    'presetFilters' => [
      'active' => 'Active'
    ],
    'messages' => [
      'couldNotConnectToImap' => 'Không thể kết nối đến máy chủ IMAP',
      'connectionIsOk' => 'Kế nối thành công',
      'imapNotConnected' => 'Could not connect to [IMAP account](#EmailAccount/view/{id}).'
    ],
    'tooltips' => [
      'useSmtp' => 'The ability to send emails.',
      'emailAddress' => 'The user record (assigned user) should have the same email address to be able to use this email account for sending.',
      'monitoredFolders' => 'Multiple folders should be separated by comma.

You can add a \'Sent\' folder to sync emails sent from an external email client.',
      'storeSentEmails' => 'Sent emails will be stored on the IMAP server. Email Address field should match the address emails will be sent from.'
    ]
  ],
  'EmailAddress' => [
    'labels' => [
      'Primary' => 'Chính',
      'Opted Out' => 'Chọn ra',
      'Invalid' => 'Không hợp lệ'
    ],
    'fields' => [
      'optOut' => 'Opted Out',
      'invalid' => 'Invalid'
    ],
    'presetFilters' => [
      'orphan' => 'Orphan'
    ]
  ],
  'EmailFilter' => [
    'fields' => [
      'from' => 'Từ',
      'to' => 'Đến',
      'subject' => 'Chủ đề',
      'bodyContains' => 'Nội dung',
      'bodyContainsAll' => 'Body Contains All',
      'action' => 'Hành động',
      'isGlobal' => 'Is Global',
      'emailFolder' => 'Thư mục',
      'groupEmailFolder' => 'Group Email Folder',
      'markAsRead' => 'Mark as Read'
    ],
    'links' => [
      'emailFolder' => 'Folder',
      'groupEmailFolder' => 'Group Email Folder'
    ],
    'labels' => [
      'Create EmailFilter' => 'Tạo bộ lọc thư',
      'Emails' => 'Emails'
    ],
    'options' => [
      'action' => [
        'None' => 'None',
        'Skip' => 'Đồng ý',
        'Move to Folder' => 'Đặt tại thư mục',
        'Move to Group Folder' => 'Put in Group Folder'
      ]
    ],
    'tooltips' => [
      'name' => 'Give the filter a descriptive name.',
      'subject' => 'Use a wildcard *: 

 * `text*` – starts with text,
 * `*text*` – contains text,
 * `*text` – ends with text.',
      'bodyContains' => 'Body of the email contains any of the specified words or phrases.',
      'bodyContainsAll' => 'An email body contains all specified words or phrases.',
      'from' => 'Email được gửi từ địa chỉ được chỉ định. Để trống nếu không cần thiết. Bạn có thể sử dụng ký tự đại diện *.',
      'to' => 'Email được gửi đến địa chỉ được chỉ định. Để trống nếu không cần thiết. Bạn có thể sử dụng ký tự đại diện *.',
      'isGlobal' => 'Applies this filter to all emails incoming to system.'
    ]
  ],
  'EmailFolder' => [
    'fields' => [
      'skipNotifications' => 'Bỏ qua thông báo'
    ],
    'labels' => [
      'Create EmailFolder' => 'Tạo thư mục',
      'Manage Folders' => 'Quản lý thư mục',
      'Emails' => 'Emails'
    ]
  ],
  'EmailTemplate' => [
    'fields' => [
      'name' => 'Tên',
      'status' => 'Tình trạng',
      'isHtml' => 'Chỉ Html',
      'body' => 'Nội dung',
      'subject' => 'Chủ đề',
      'attachments' => 'Đính kèm',
      'oneOff' => 'One-off',
      'category' => 'Chuyên mục',
      'insertField' => 'Placeholders'
    ],
    'links' => [],
    'labels' => [
      'Create EmailTemplate' => 'Tạo mẫu email',
      'Info' => 'Thông tin',
      'Available placeholders' => 'Available placeholders'
    ],
    'messages' => [
      'infoText' => 'Available placeholders:

{optOutUrl} &#8211; URL for an unsubscribe link;

{optOutLink} &#8211; an unsubscribe link.'
    ],
    'tooltips' => [
      'oneOff' => 'Check if you are going to use this template only once. E.g. for Mass Email.'
    ],
    'presetFilters' => [
      'actual' => 'Hiện thời'
    ],
    'placeholderTexts' => [
      'today' => 'Ngày hôm nay',
      'now' => 'Current date & time',
      'currentYear' => 'Năm hiện tại',
      'optOutUrl' => 'URL for an unsubscribe link',
      'optOutLink' => 'an unsubscribe link'
    ]
  ],
  'EmailTemplateCategory' => [
    'labels' => [
      'Create EmailTemplateCategory' => 'Tạo chuyên mục',
      'Manage Categories' => 'Manage Categories',
      'EmailTemplates' => 'Email Templates'
    ],
    'fields' => [
      'order' => 'Thứ tự',
      'childList' => 'Child List'
    ],
    'links' => [
      'emailTemplates' => 'Email Templates'
    ]
  ],
  'EntityManager' => [
    'labels' => [
      'Fields' => 'Trường',
      'Relationships' => 'Mối quan hệ',
      'Layouts' => 'Layouts',
      'Schedule' => 'Lên lịch',
      'Log' => 'Nhật ký',
      'Formula' => 'Công thức toán học'
    ],
    'fields' => [
      'name' => 'Tên',
      'type' => 'Loại',
      'labelSingular' => 'Label Singular',
      'labelPlural' => 'Label Plural',
      'stream' => 'Cập nhật thông tin',
      'label' => 'Nhãn',
      'linkType' => 'Loại liên kết',
      'entity' => 'Entity',
      'entityForeign' => 'Khóa phục cho Entity',
      'linkForeign' => 'Liên kết khóa phụ',
      'link' => 'Liên kết',
      'labelForeign' => 'Nhãn cho khóa phụ',
      'sortBy' => 'Sắp xếp mặc định (trường)',
      'sortDirection' => 'Sắp xếp theo mặc định (direction)',
      'relationName' => 'Middle Table Name',
      'linkMultipleField' => 'Liên kết đến nhiều trường',
      'linkMultipleFieldForeign' => 'Foreign Link Multiple Field',
      'disabled' => 'Tắt',
      'textFilterFields' => 'Text Filter Fields',
      'audited' => 'Audited',
      'auditedForeign' => 'Foreign Audited',
      'statusField' => 'Status Field',
      'beforeSaveCustomScript' => 'Before Save Custom Script',
      'beforeSaveApiScript' => 'API Before Save Script',
      'color' => 'Màu',
      'kanbanViewMode' => 'Chế độ xem tiến trình',
      'kanbanStatusIgnoreList' => 'Ignored groups in Kanban view',
      'iconClass' => 'Icon',
      'countDisabled' => 'Disable record count',
      'fullTextSearch' => 'Full-Text Search',
      'parentEntityTypeList' => 'Parent Entity Types',
      'foreignLinkEntityTypeList' => 'Foreign Links',
      'optimisticConcurrencyControl' => 'Optimistic concurrency control',
      'updateDuplicateCheck' => 'Duplicate check on update',
      'duplicateCheckFieldList' => 'Duplicate check fields',
      'stars' => 'Stars',
      'layout' => 'Layout',
      'selectFilter' => 'Select Filter',
      'author' => 'Author',
      'module' => 'Module',
      'version' => 'Version',
      'primaryFilters' => 'Primary Filters',
      'activityStatusList' => 'Activity Statuses',
      'historyStatusList' => 'History Statuses',
      'completedStatusList' => 'Completed Statuses',
      'canceledStatusList' => 'Canceled Statuses'
    ],
    'options' => [
      'type' => [
        '' => 'Trống',
        'Base' => 'Base',
        'Person' => 'Con người',
        'CategoryTree' => 'Cây thư mục',
        'Event' => 'Event',
        'BasePlus' => 'Base Plus',
        'Company' => 'Công ty'
      ],
      'linkType' => [
        'manyToMany' => 'Many-to-Many',
        'oneToMany' => 'One-to-Many',
        'manyToOne' => 'Many-to-One',
        'oneToOneRight' => 'One-to-One Right',
        'oneToOneLeft' => 'One-to-One Left',
        'parentToChildren' => 'Parent-to-Children',
        'childrenToParent' => 'Children-to-Parent'
      ],
      'sortDirection' => [
        'asc' => 'Tăng dần',
        'desc' => 'Giảm dần'
      ],
      'module' => [
        'Custom' => 'Custom'
      ]
    ],
    'messages' => [
      'urlHashCopiedToClipboard' => 'A URL fragment for the *{name}* filter is copied to the clipboard. You can add it to the navbar.',
      'confirmRemoveLink' => 'Are you sure you want to remove the *{link}* relationship?',
      'nameIsAlreadyUsed' => 'Name \'{name}\' is already used.',
      'nameIsNotAllowed' => 'Name \'{name}\' is not allowed.',
      'nameIsTooLong' => 'Name is too long.',
      'confirmRemove' => 'Are you sure you want to remove the entity type from the system?',
      'entityCreated' => 'Đã tạo Entity',
      'linkAlreadyExists' => 'Đường dẫn xung đột.',
      'linkConflict' => 'Tên xung đột: Liên kết hoặc trường đã tồn tại.',
      'beforeSaveCustomScript' => 'A script called every time before an entity is saved. Use for setting calculated fields.',
      'beforeSaveApiScript' => 'A script called on create and update API requests before an entity is saved. Use for custom validation and duplicate checking.'
    ],
    'tooltips' => [
      'duplicateCheckFieldList' => 'Which fields to check when performing checking for duplicates.',
      'updateDuplicateCheck' => 'Perform checking for duplicates when updating a record.',
      'optimisticConcurrencyControl' => 'Prevents writing conflicts.',
      'stars' => 'The ability to star records. Stars can be used by users to bookmark records.',
      'statusField' => 'Updates of this field are logged in stream.',
      'textFilterFields' => 'Fields used by text search.',
      'stream' => 'Whether entity has a Stream.',
      'disabled' => 'Check if you don\'t need this entity in your system.',
      'linkAudited' => 'Creating related record and linking with existing record will be logged in Stream.',
      'linkMultipleField' => 'Link Multiple field provides a handy way to edit relations. Don\'t use it if you can have a large number of related records.',
      'linkSelectFilter' => 'A primary filter to apply by default when selecting a record.',
      'entityType' => 'Base Plus - has Activities, History and Tasks panels.

Event - available in Calendar and Activities panel.',
      'countDisabled' => 'Total number won\'t be displayed on the list view. Can decrease loading time when the DB table is big.',
      'fullTextSearch' => 'Running rebuild is required.',
      'activityStatusList' => 'Status values determining that an activity record should be displayed in the Activity panel and considered as actual.',
      'historyStatusList' => 'Status values determining that an activity record should be displayed in the History panel.',
      'completedStatusList' => 'Status values determining that an activity is completed.',
      'canceledStatusList' => 'Status values determining that an activity is canceled and won\'t be taken into account in free/busy ranges.'
    ]
  ],
  'Export' => [
    'fields' => [
      'exportAllFields' => 'Xuất tất cả các trường',
      'fieldList' => 'Field List',
      'format' => 'Định dạng',
      'status' => 'Status',
      'xlsxLite' => 'Lite',
      'xlsxRecordLinks' => 'Record Links',
      'xlsxTitle' => 'Title'
    ],
    'options' => [
      'format' => [
        'csv' => 'CSV',
        'xlsx' => 'XLSX (Excel)'
      ],
      'status' => [
        'Pending' => 'Pending',
        'Running' => 'Running',
        'Success' => 'Success',
        'Failed' => 'Failed'
      ]
    ],
    'tooltips' => [
      'xlsxLite' => 'Consumes much less memory. Recommended if a big number of records is exported.',
      'xlsxTitle' => 'Print a title and current date in the header.'
    ],
    'messages' => [
      'exportProcessed' => 'Export has been processed. Download the [file]({url}).',
      'infoText' => 'The export is being processed in idle by cron. It can take some time to finish. Closing this modal dialog won\'t affect the execution process.'
    ]
  ],
  'Extension' => [
    'fields' => [
      'name' => 'Tên',
      'version' => 'Phiên bản',
      'description' => 'Mô tả',
      'isInstalled' => 'Đã cài đặt',
      'checkVersionUrl' => 'An URL for checking new versions'
    ],
    'labels' => [
      'Uninstall' => 'Gỡ cài đặt',
      'Install' => 'Cài đặt'
    ],
    'messages' => [
      'uninstalled' => 'Tiện ích mở rộng  {name} đã được gỡ cài đặt',
      'fileExceedsMaxUploadSize' => 'The file size exceeds the max upload size {maxSize}. Consider increasing `post_max_size` or install the extension via CLI.'
    ]
  ],
  'ExternalAccount' => [
    'labels' => [
      'Connect' => 'Kết nối',
      'Disconnect' => 'Ngắt kết nối',
      'Disconnected' => 'Đã ngắt kết nối',
      'Connected' => 'Đã kết nối'
    ],
    'help' => [],
    'messages' => [
      'externalAccountNoConnectDisabled' => 'External account for integration \'{integration}\' has been disabled due not being able to connect.'
    ]
  ],
  'FieldManager' => [
    'labels' => [
      'Dynamic Logic' => 'Dynamic Logic',
      'Name' => 'Tên',
      'Label' => 'Nhãn',
      'Type' => 'Loại'
    ],
    'options' => [
      'dateTimeDefault' => [
        '' => 'Trống',
        'javascript: return this.dateTime.getNow(1);' => 'Ngay bây giờ',
        'javascript: return this.dateTime.getNow(5);' => 'Ngay bây giờ (5 phút)',
        'javascript: return this.dateTime.getNow(15);' => 'Ngay bây giờ (15 phút)',
        'javascript: return this.dateTime.getNow(30);' => 'Ngay bây giờ (30 phút)',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(1, \'hours\', 15);' => '+1 giờ',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(2, \'hours\', 15);' => '+2 giờ',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(3, \'hours\', 15);' => '+3 giờ',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(4, \'hours\', 15);' => '+4 giờ',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(5, \'hours\', 15);' => '+5 giờ',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(6, \'hours\', 15);' => '+6 giờ',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(7, \'hours\', 15);' => '+7 giờ',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(8, \'hours\', 15);' => '+8 giờ',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(9, \'hours\', 15);' => '+9 giờ',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(10, \'hours\', 15);' => '+10 giờ',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(11, \'hours\', 15);' => '+11 giờ',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(12, \'hours\', 15);' => '+12 giờ',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(1, \'days\', 15);' => '+1 ngày',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(2, \'days\', 15);' => '+2 ngày',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(3, \'days\', 15);' => '+3 ngày',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(4, \'days\', 15);' => '+4 ngày',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(5, \'days\', 15);' => '+5 ngày',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(6, \'days\', 15);' => '+6 ngày',
        'javascript: return this.dateTime.getDateTimeShiftedFromNow(1, \'week\', 15);' => '+1 tuần'
      ],
      'dateDefault' => [
        '' => 'Trống',
        'javascript: return this.dateTime.getToday();' => 'Hôm nay',
        'javascript: return this.dateTime.getDateShiftedFromToday(1, \'days\');' => '+1 day',
        'javascript: return this.dateTime.getDateShiftedFromToday(2, \'days\');' => '+2 days',
        'javascript: return this.dateTime.getDateShiftedFromToday(3, \'days\');' => '+3 days',
        'javascript: return this.dateTime.getDateShiftedFromToday(4, \'days\');' => '+4 days',
        'javascript: return this.dateTime.getDateShiftedFromToday(5, \'days\');' => '+5 days',
        'javascript: return this.dateTime.getDateShiftedFromToday(6, \'days\');' => '+6 days',
        'javascript: return this.dateTime.getDateShiftedFromToday(7, \'days\');' => '+7 days',
        'javascript: return this.dateTime.getDateShiftedFromToday(8, \'days\');' => '+8 days',
        'javascript: return this.dateTime.getDateShiftedFromToday(9, \'days\');' => '+9 days',
        'javascript: return this.dateTime.getDateShiftedFromToday(10, \'days\');' => '+10 days',
        'javascript: return this.dateTime.getDateShiftedFromToday(1, \'weeks\');' => '+1 week',
        'javascript: return this.dateTime.getDateShiftedFromToday(2, \'weeks\');' => '+2 weeks',
        'javascript: return this.dateTime.getDateShiftedFromToday(3, \'weeks\');' => '+3 weeks',
        'javascript: return this.dateTime.getDateShiftedFromToday(1, \'months\');' => '+1 month',
        'javascript: return this.dateTime.getDateShiftedFromToday(2, \'months\');' => '+2 months',
        'javascript: return this.dateTime.getDateShiftedFromToday(3, \'months\');' => '+3 months',
        'javascript: return this.dateTime.getDateShiftedFromToday(4, \'months\');' => '+4 months',
        'javascript: return this.dateTime.getDateShiftedFromToday(5, \'months\');' => '+5 months',
        'javascript: return this.dateTime.getDateShiftedFromToday(6, \'months\');' => '+6 months',
        'javascript: return this.dateTime.getDateShiftedFromToday(7, \'months\');' => '+7 months',
        'javascript: return this.dateTime.getDateShiftedFromToday(8, \'months\');' => '+8 months',
        'javascript: return this.dateTime.getDateShiftedFromToday(9, \'months\');' => '+9 months',
        'javascript: return this.dateTime.getDateShiftedFromToday(10, \'months\');' => '+10 months',
        'javascript: return this.dateTime.getDateShiftedFromToday(11, \'months\');' => '+11 months',
        'javascript: return this.dateTime.getDateShiftedFromToday(1, \'year\');' => '+1 year'
      ],
      'barcodeType' => [
        'EAN13' => 'EAN-13',
        'EAN8' => 'EAN-8',
        'EAN5' => 'EAN-5',
        'EAN2' => 'EAN-2',
        'UPC' => 'UPC (A)',
        'UPCE' => 'UPC (E)',
        'pharmacode' => 'Pharmacode',
        'QRcode' => 'Mã QR'
      ],
      'globalRestrictions' => [
        'forbidden' => 'Forbidden',
        'internal' => 'Internal',
        'onlyAdmin' => 'Admin-only',
        'readOnly' => 'Read-only',
        'nonAdminReadOnly' => 'Non-admin read-only'
      ]
    ],
    'tooltips' => [
      'optionsReference' => 'Re-use options from another field.',
      'currencyDecimal' => 'Use the Decimal DB type. In the app, values will be represented as strings. Check this parameter if precision is required.',
      'cutHeight' => 'A text higher then a specified value will be cut with a \'show more\' button displayed.',
      'urlStrip' => 'Strip a protocol and a trailing slash.',
      'audited' => 'Updates will be logged in stream.',
      'required' => 'Field will be mandatory. Can\'t be left empty.',
      'default' => 'Value will be set by default upon creating.',
      'min' => 'Min acceptable value.',
      'max' => 'Max acceptable value.',
      'seeMoreDisabled' => 'If not checked then long texts will be shortened.',
      'lengthOfCut' => 'How long text can be before it will be cut.',
      'maxLength' => 'Max acceptable length of text.',
      'before' => 'The date value should be before the date value of the specified field.',
      'after' => 'The date value should be after the date value of the specified field.',
      'readOnly' => 'Field value can\'t be specified by user. But can be calculated by formula.',
      'readOnlyAfterCreate' => 'The field value can be specified when creating a new record. After that, the field becomes read-only. It can still be calculated by formula.',
      'fileAccept' => 'Which file types to accept. It\'s possible to add custom items.',
      'barcodeLastChar' => 'For EAN-13 type.',
      'maxFileSize' => 'If empty or 0 then no limit.',
      'conversionDisabled' => 'The currency conversion action won\'t be applied to this field.',
      'pattern' => 'A regular expression to check a field value against. Define an expression or select a predefined one.',
      'options' => 'A list of possible values and their labels.',
      'optionsArray' => 'A list of possible values and their labels. If empty, the field will allow entering custom values.',
      'maxCount' => 'Maximum number of items allowed to be selected.',
      'displayAsList' => 'Each item in a new line.',
      'optionsVarchar' => 'A list of autocomplete values.',
      'linkReadOnly' => 'Field value can\'t be specified by user. But can be calculated by formula.

It will also disable the ability to create a related record from relationship panels.',
      'relateOnImport' => 'When importing with this field, it will automatically relate a record with a matching foreign record. Use this functionality only if the foreign field is considered as unique.'
    ],
    'fieldParts' => [
      'address' => [
        'street' => 'Tên đường',
        'city' => 'Thành phố',
        'state' => 'State',
        'country' => 'Quốc gia',
        'postalCode' => 'Mã vùng',
        'map' => 'Bản đồ'
      ],
      'personName' => [
        'salutation' => 'Salutation',
        'first' => 'First',
        'middle' => 'Giữa',
        'last' => 'Last'
      ],
      'currency' => [
        'converted' => '(Đã chuyển)',
        'currency' => '(Tiền tệ)'
      ],
      'datetimeOptional' => [
        'date' => 'Ngày'
      ]
    ],
    'fieldInfo' => [
      'varchar' => 'A single-line text.',
      'enum' => 'Selectbox, only one value can be selected.',
      'text' => 'A multiline text with markdown support.',
      'date' => 'Date w/o time.',
      'datetime' => 'Date and time',
      'currency' => 'A currency value. A float number with a currency code.',
      'int' => 'A whole number.',
      'float' => 'A number with a decimal part.',
      'bool' => 'A checkbox. Two possible values: true and false.',
      'multiEnum' => 'A list of values, multiple values can be selected. The list is ordered.',
      'checklist' => 'A list of checkboxes.',
      'array' => 'A list of values, similar to Multi-Enum field.',
      'address' => 'An address with street, city, state, postal code and country.',
      'url' => 'For storing links.',
      'urlMultiple' => 'Multiple links.',
      'wysiwyg' => 'A text with HTML support.',
      'file' => 'For file uploading.',
      'image' => 'For image uploading.',
      'attachmentMultiple' => 'Allows to upload multiple files.',
      'number' => 'An auto-incrementing number of string type with a possible prefix and specific length.',
      'autoincrement' => 'A generated read-only auto-incrementing integer number.',
      'barcode' => 'A barcode. Can be printed to PDF.',
      'email' => 'A set of email addresses with their parameters: Opted-out, Invalid, Primary.',
      'phone' => 'A set of phone numbers with their parameters: Type, Opted-out, Invalid, Primary.',
      'foreign' => 'A field of a related record. Read-only.',
      'link' => 'A record related through Belongs-To (many-to-one or one-to-one) relationship.',
      'linkParent' => 'A record related through Belongs-To-Parent relationship. Can be of different entity types.',
      'linkMultiple' => 'A set of records related through Has-Many (many-to-many or one-to-many) relationship. Not all relationships have their link-multiple fields. Only those do, where Link-Multiple parameter(s) is enabled.'
    ],
    'messages' => [
      'confirmRemove' => 'Are you sure you want to remove the *{field}* field?

Field removal does not remove data from the database. Data from the database will be removed if you run hard rebuild.',
      'fieldNameIsNotAllowed' => 'Field name \'{field}\' is not allowed.',
      'fieldAlreadyExists' => 'Field \'{field}\' already exists in \'{entityType}\'.',
      'linkWithSameNameAlreadyExists' => 'Link with the name \'{field}\' already exists in \'{entityType}\'.'
    ]
  ],
  'Formula' => [
    'labels' => [
      'Check Syntax' => 'Check Syntax',
      'Run' => 'Run'
    ],
    'fields' => [
      'target' => 'Target',
      'targetType' => 'Target Type',
      'script' => 'Script',
      'output' => 'Output',
      'error' => 'Error'
    ],
    'messages' => [
      'runSuccess' => 'Executed successfully.',
      'runError' => 'Error.',
      'checkSyntaxSuccess' => 'Syntax is correct.',
      'checkSyntaxError' => 'Syntax error.',
      'emptyScript' => 'Script is empty.'
    ],
    'tooltips' => [
      'output' => 'Print values with the function `output\\printLine`.'
    ]
  ],
  'Global' => [
    'scopeNames' => [
      'Note' => 'Note',
      'Email' => 'Email',
      'User' => 'Người dùng',
      'Team' => 'Nhóm',
      'Role' => 'Vai trò',
      'EmailTemplate' => 'Mẫu email',
      'EmailTemplateCategory' => 'Email Template Categories',
      'EmailAccount' => 'Email người dùng cá nhân',
      'EmailAccountScope' => 'Email người dùng cá nhân',
      'OutboundEmail' => 'Cấu hình thư đi',
      'ScheduledJob' => 'Công việc đã lên lịch',
      'ExternalAccount' => 'Tài khoản bên ngoài',
      'Extension' => 'Tiện ích mở rộng',
      'Dashboard' => 'Tổng quan',
      'InboundEmail' => 'Email tới',
      'Stream' => 'Tôe',
      'Import' => 'Nhập',
      'ImportError' => 'Import Error',
      'Template' => 'Mẫu',
      'Job' => 'Công việc',
      'EmailFilter' => 'Lọc thư',
      'Portal' => 'Cổng thông tin',
      'PortalRole' => 'Quyền truy cập cổng thông tin',
      'Attachment' => 'Đính kèm',
      'EmailFolder' => 'Email Folder',
      'GroupEmailFolder' => 'Group Email Folder',
      'PortalUser' => 'Portal User',
      'ApiUser' => 'API User',
      'ScheduledJobLogRecord' => 'Scheduled Job Log Record',
      'PasswordChangeRequest' => 'Password Change Request',
      'ActionHistoryRecord' => 'Action History Record',
      'AuthToken' => 'Auth Token',
      'UniqueId' => 'Unique ID',
      'LastViewed' => 'Đã xem gần đây',
      'Settings' => 'Cài đặt',
      'FieldManager' => 'Quản lý trường',
      'Integration' => 'Integration',
      'LayoutManager' => 'Quản lý bố cục',
      'EntityManager' => 'Quản lý Entity',
      'Export' => 'Xuất ra',
      'DynamicLogic' => 'Dynamic Logic',
      'DashletOptions' => 'Dashlet Options',
      'Admin' => 'Quản trị viên',
      'Global' => 'Global',
      'Preferences' => 'Preferences',
      'EmailAddress' => 'Địa chỉ Email',
      'PhoneNumber' => 'Phone Number',
      'AppLogRecord' => 'App Log Record',
      'AuthLogRecord' => 'Auth Log Record',
      'AuthFailLogRecord' => 'Auth Fail Log Record',
      'LeadCapture' => 'Lead Capture Entry Point',
      'LeadCaptureLogRecord' => 'Lịch sử thu thập khách tiềm năng',
      'ArrayValue' => 'Array Value',
      'DashboardTemplate' => 'Dashboard Template',
      'Currency' => 'Currency',
      'LayoutSet' => 'Layout Set',
      'Webhook' => 'Webhook',
      'WebhookQueueItem' => 'Webhook Queue Item',
      'Mass Action' => 'Mass Action',
      'WorkingTimeCalendar' => 'Working Time Calendar',
      'WorkingTimeRange' => 'Working Time Exception',
      'AuthenticationProvider' => 'Authentication Provider',
      'GlobalStream' => 'Global Stream',
      'AddressCountry' => 'Address Country',
      'Account' => 'Tài khoản',
      'Contact' => 'Liên hệ',
      'Lead' => 'Chỉ dẫn',
      'Target' => 'Mục tiêu',
      'Opportunity' => 'Cơ hội',
      'Meeting' => 'Buổi gặp',
      'Calendar' => 'Lịch',
      'Call' => 'Gọi',
      'Task' => 'Nhiệm vụ',
      'Case' => 'Trường hợp',
      'Document' => 'Tài liệu',
      'DocumentFolder' => 'Document Folder',
      'Campaign' => 'Chiến dịch',
      'TargetList' => 'Danh sách mục tiêu',
      'MassEmail' => 'Mass Email',
      'EmailQueueItem' => 'Email Queue Item',
      'CampaignTrackingUrl' => 'Địa chỉ theo dõi',
      'Activities' => 'Hoạt động',
      'KnowledgeBaseArticle' => 'Knowledge Base Article',
      'KnowledgeBaseCategory' => 'Knowledge Base Category',
      'CampaignLogRecord' => 'Campaign Log Record'
    ],
    'scopeNamesPlural' => [
      'Note' => 'Notes',
      'Email' => 'Địa chỉ email',
      'User' => 'Người dùng',
      'Team' => 'Nhóm',
      'Role' => 'Vai trò',
      'EmailTemplate' => 'Mẫu email',
      'EmailTemplateCategory' => 'Email Template Categories',
      'EmailAccount' => 'Email cá nhân',
      'EmailAccountScope' => 'Email cá nhân',
      'OutboundEmail' => 'Cấu hình thư đi',
      'ScheduledJob' => 'Công việc đã lên lịch',
      'ExternalAccount' => 'Tài khoản bên ngoài',
      'Extension' => 'Tiện ích mở rộng',
      'Dashboard' => 'Tổng quan',
      'InboundEmail' => 'Email đã nhận',
      'EmailAddress' => 'Email Addresses',
      'PhoneNumber' => 'Số điện thoại',
      'Stream' => 'Thông tin cập nhật',
      'Import' => 'Nhập dữ liệu',
      'ImportError' => 'Import Errors',
      'Template' => 'Mẫu',
      'Job' => 'Công việc',
      'EmailFilter' => 'Lọc thư',
      'Portal' => 'Cổng thông tin',
      'PortalRole' => 'Quyền cổng thông tin',
      'Attachment' => 'Đính kèm',
      'EmailFolder' => 'Email Folders',
      'GroupEmailFolder' => 'Group Email Folders',
      'PortalUser' => 'Portal Users',
      'ApiUser' => 'API User',
      'ScheduledJobLogRecord' => 'Scheduled Job Log Records',
      'PasswordChangeRequest' => 'Yêu cầu thay đổi mật khẩu',
      'ActionHistoryRecord' => 'Lịch sử hoạt động',
      'AuthToken' => 'Auth Tokens',
      'UniqueId' => 'Unique IDs',
      'LastViewed' => 'Đã xem gần đây',
      'AppLogRecord' => 'App Log',
      'AuthLogRecord' => 'Auth Log',
      'AuthFailLogRecord' => 'Auth Fail Log',
      'LeadCapture' => 'Thu thập khách tiềm năng',
      'LeadCaptureLogRecord' => 'Nhật ký thu thập khách tiềm năng',
      'ArrayValue' => 'Array Values',
      'DashboardTemplate' => 'Dashboard Templates',
      'Currency' => 'Tiền tệ',
      'LayoutSet' => 'Layout Sets',
      'Webhook' => 'Webhooks',
      'WebhookQueueItem' => 'Webhook Queue Items',
      'WorkingTimeCalendar' => 'Working Time Calendars',
      'WorkingTimeRange' => 'Working Time Exceptions',
      'AuthenticationProvider' => 'Authentication Providers',
      'GlobalStream' => 'Global Stream',
      'AddressCountry' => 'Address Countries',
      'Account' => 'Tài khoản',
      'Contact' => 'Sổ liên lạc',
      'Lead' => 'Trưởng nhóm',
      'Target' => 'Mục tiêu',
      'Opportunity' => 'Cơ hội',
      'Meeting' => 'Hẹn gặp',
      'Calendar' => 'Lịch',
      'Call' => 'Cuộc gọi',
      'Task' => 'Nhiệm vụ',
      'Case' => 'Trường hợp',
      'Document' => 'Tài liệu',
      'DocumentFolder' => 'Document Folders',
      'Campaign' => 'Chiến dịch',
      'TargetList' => 'Danh sách mục tiêu',
      'MassEmail' => 'Mass Emails',
      'EmailQueueItem' => 'Email Queue Items',
      'CampaignTrackingUrl' => 'Địa chỉ theo dõi',
      'Activities' => 'Hoạt động',
      'KnowledgeBaseArticle' => 'Hướng dẫn sử dụng',
      'KnowledgeBaseCategory' => 'Knowledge Base Categories',
      'CampaignLogRecord' => 'Campaign Log Records'
    ],
    'labels' => [
      'Previous Page' => 'Previous Page',
      'Next Page' => 'Next Page',
      'First Page' => 'First Page',
      'Last Page' => 'Last Page',
      'Page' => 'Page',
      'Sort' => 'Sort',
      'Misc' => 'Khác',
      'Merge' => 'Gộp',
      'None' => 'Trống',
      'Home' => 'Trang chính',
      'by' => 'bởi',
      'Proceed' => 'Proceed',
      'Saved' => 'Đã lưu',
      'Error' => 'Lỗi',
      'Select' => 'Chọn',
      'Not valid' => 'Không phù hợp',
      'Please wait...' => 'Vui lòng đợi...',
      'Please wait' => 'Vui lòng đợi',
      'Attached' => 'Attached',
      'Loading...' => 'Đang tải...',
      'Uploading...' => 'Đang tải lên...',
      'Sending...' => 'Đang gửi...',
      'Merged' => 'Đã gộp lại',
      'Removed' => 'Đã xóa',
      'Posted' => 'Đã đăng',
      'Linked' => 'Đã liên kết',
      'Unlinked' => 'Đã bỏ liên kết',
      'Done' => 'Hoàn tất',
      'Access denied' => 'Từ chối truy cập',
      'Not found' => 'Không tìm thấy',
      'Access' => 'Truy cập',
      'Are you sure?' => 'Are you sure?',
      'Record has been removed' => 'bản ghi đã được xóa',
      'Wrong username/password' => 'Sai tên truy cập và mật khẩu',
      'Post cannot be empty' => 'Nội dung không được để trống',
      'Username can not be empty!' => 'Tên đăng nhập không được để trống!',
      'Cache is not enabled' => 'Chưa bật cache',
      'Cache has been cleared' => 'Cache đã được xóa',
      'Rebuild has been done' => 'Tải lại thành công',
      'Return to Application' => 'Return to Application',
      'Modified' => 'Đã sửa',
      'Created' => 'Đã tạo',
      'Create' => 'Tạo',
      'create' => 'tạo',
      'Overview' => 'Tổng quan',
      'Details' => 'Chi tiết',
      'Add Field' => 'Thêm trường',
      'Add Dashlet' => 'Thêm module',
      'Filter' => 'Lọc',
      'Edit Dashboard' => 'Sửa trang Tổng quan',
      'Add' => 'Thêm',
      'Add Item' => 'Thêm mục',
      'Reset' => 'Reset',
      'Menu' => 'Menu',
      'More' => 'Thêm nữa',
      'Search' => 'Tìm kiếm',
      'Only My' => 'Chỉ mình tôi',
      'Open' => 'Mở',
      'Admin' => 'Admin',
      'About' => 'Thông tin',
      'Refresh' => 'Tải lại',
      'Remove' => 'Xóa',
      'Restore' => 'Khôi phục',
      'Options' => 'Tùy chọn',
      'Username' => 'Tên đăng nhập',
      'Password' => 'Mật khẩu',
      'Login' => 'Đăng nhập',
      'Log Out' => 'Đăng xuất',
      'Log in' => 'Log in',
      'Log in as' => 'Log in as',
      'Sign in' => 'Sign in',
      'Preferences' => 'Tùy chỉnh',
      'State' => 'Thành phố',
      'Street' => 'Đường',
      'Country' => 'Quốc gia',
      'City' => 'Quận - huyện',
      'PostalCode' => 'Mã bưu điện',
      'Star' => 'Star',
      'Unstar' => 'Unstar',
      'Starred' => 'Starred',
      'Followed' => 'Đã theo dõi',
      'Follow' => 'Theo dõi',
      'Followers' => 'Người theo dõi',
      'Clear Local Cache' => 'Clear Local Cache',
      'Actions' => 'Hoạt động',
      'Delete' => 'Xóa',
      'Update' => 'Cập nhật',
      'Save' => 'Lưu',
      'Edit' => 'Sửa',
      'View' => 'Xem',
      'Cancel' => 'Bỏ qua',
      'Apply' => 'Áp dụng',
      'Unlink' => 'Xóa liên kết',
      'Mass Update' => 'Cập nhật',
      'Export' => 'Xuất',
      'No Data' => 'Không có dữ liệu',
      'No Access' => 'Không truy cập',
      'All' => 'Tất cả',
      'Active' => 'Đang hoạt động',
      'Inactive' => 'Chưa hoạt động',
      'Write your comment here' => 'Viết lời nhắn tại đây',
      'Post' => 'Gửi',
      'Stream' => 'Thông tin cập nhật',
      'Show more' => 'Xem thêm',
      'Dashlet Options' => 'Tùy chọn module',
      'Full Form' => 'Đầy đủ',
      'Insert' => 'Chèn',
      'Person' => 'Cá nhân',
      'First Name' => 'Tên',
      'Last Name' => 'Họ',
      'Middle Name' => 'Middle Name',
      'Original' => 'Gốc',
      'You' => 'Bạn',
      'you' => 'bạn',
      'change' => 'thay đổi',
      'Change' => 'Thay đổi',
      'Primary' => 'Chính',
      'Save Filter' => 'Lưu bộ lọc',
      'Remove Filter' => 'Remove Filter',
      'Ready' => 'Ready',
      'Administration' => 'Quản trị',
      'Run Import' => 'Bắt đầu nhập',
      'Duplicate' => 'Tạo bản sao',
      'Notifications' => 'Thông báo',
      'Mark all read' => 'Đánh dấu tất cả đã đọc',
      'See more' => 'Xem thêm',
      'Today' => 'Hôm nay',
      'Tomorrow' => 'Ngày mai',
      'Yesterday' => 'Hôm qua',
      'Submit' => 'Gửi',
      'Close' => 'Đóng',
      'Yes' => 'Đồng ý',
      'No' => 'Không đồng ý',
      'Select All Results' => 'Select All Results',
      'Value' => 'Giá trị',
      'Current version' => 'Phiên bản hiện tại',
      'List View' => 'Xem dạng danh sách',
      'Tree View' => 'Xem dạng cây thư mục',
      'Unlink All' => 'Hủy liên kết tất cả',
      'Total' => 'Tổng cộng',
      'Print' => 'Print',
      'Print to PDF' => 'In thành PDF',
      'Default' => 'Mặc định',
      'Number' => 'Số',
      'From' => 'Từ',
      'To' => 'Tới',
      'Create Post' => 'Tạo bài viết',
      'Previous Entry' => 'Entry Trước',
      'Next Entry' => 'Entry Kế tiếp',
      'View List' => 'Xem dạng danh sách',
      'Attach File' => 'Đính kèm tập tin',
      'Skip' => 'Bỏ qua',
      'Attribute' => 'Attribute',
      'Function' => 'Function',
      'Self-Assign' => 'Self-Assign',
      'Self-Assigned' => 'Self-Assigned',
      'Expand' => 'Expand',
      'Collapse' => 'Collapse',
      'New notifications' => 'Thông báo mới',
      'Manage Categories' => 'Manage Categories',
      'Manage Folders' => 'Quản lý thư mục',
      'Convert to' => 'Chuyển đổi sang',
      'View Personal Data' => 'View Personal Data',
      'Personal Data' => 'Personal Data',
      'Erase' => 'Xóa',
      'View Followers' => 'Xem người đã theo dõi',
      'Convert Currency' => 'Convert Currency',
      'View on Map' => 'Xem trên bản đồ',
      'Preview' => 'Preview',
      'Move Over' => 'Move Over',
      'Up' => 'Up',
      'Save & Continue Editing' => 'Save & Continue Editing',
      'Save & New' => 'Save & New',
      'Field' => 'Field',
      'Resolution' => 'Resolution',
      'Resolve Conflict' => 'Resolve Conflict',
      'Download' => 'Download',
      'Global Search' => 'Global Search',
      'Show Navigation Panel' => 'Show Navigation Panel',
      'Hide Navigation Panel' => 'Hide Navigation Panel',
      'Copy to Clipboard' => 'Copy to Clipboard',
      'Copied to clipboard' => 'Copied to clipboard',
      'Audit Log' => 'Audit Log',
      'View Audit Log' => 'View Audit Log',
      'Schedule' => 'Schedule',
      'Log' => 'Log',
      'Scheduler' => 'Người lập kế hoạch',
      'Create InboundEmail' => 'Tạo email đến',
      'Activities' => 'Hoạt động',
      'History' => 'Lịch sử',
      'Attendees' => 'Người dự',
      'Schedule Meeting' => 'Lên lịch hẹn',
      'Schedule Call' => 'Lên lịch gọi',
      'Compose Email' => 'Tạo email',
      'Log Meeting' => 'Nhật ký cuộc hẹn',
      'Log Call' => 'Ghi nhận cuộc gọi',
      'Archive Email' => 'Email lưu trữ',
      'Create Task' => 'Tạo nhiệm vụ',
      'Tasks' => 'Nhiệm vụ',
      'Merging...' => 'Đang gộp lại...',
      'Removing...' => 'Đang xóa...',
      'Unlinking...' => 'Đang bỏ liên kết...',
      'Posting...' => 'Đang gửi...',
      'Saving...' => 'Đang lưu...'
    ],
    'messages' => [
      'pleaseWait' => 'Xin chờ...',
      'loading' => 'Đang tải...',
      'saving' => 'Đang lưu...',
      'confirmLeaveOutMessage' => 'Bạn có muốn thoát khỏi trang này?',
      'notModified' => 'Bạn chưa sửa bản ghi',
      'duplicate' => 'Bản ghi được tạo bị trùng',
      'dropToAttach' => 'Drop to attach',
      'pageNumberIsOutOfBound' => 'Page number is out of bound',
      'fieldUrlExceedsMaxLength' => 'Encoded URL exceeds max length of {maxLength}',
      'fieldNotMatchingPattern' => '{field} does not match the pattern `{pattern}`',
      'fieldNotMatchingPattern$noBadCharacters' => '{field} contains not allowed characters',
      'fieldNotMatchingPattern$noAsciiSpecialCharacters' => '{field} should not contain ASCII special characters',
      'fieldNotMatchingPattern$latinLetters' => '{field} can contain only latin letters',
      'fieldNotMatchingPattern$latinLettersDigits' => '{field} can contain only latin letters and digits',
      'fieldNotMatchingPattern$latinLettersDigitsWhitespace' => '{field} can contain only latin letters, digits and whitespace',
      'fieldNotMatchingPattern$latinLettersWhitespace' => '{field} can contain only latin letters and whitespace',
      'fieldNotMatchingPattern$digits' => '{field} can contain only digits',
      'fieldNotMatchingPattern$uriOptionalProtocol' => '{field} must be a valid URL',
      'fieldNotMatchingPattern$phoneNumberLoose' => '{field} contains characters not allowed in a phone number',
      'fieldInvalid' => '{field} is invalid',
      'fieldIsRequired' => '{field} là bắt buộc',
      'fieldPhoneInvalid' => '{field} is invalid',
      'fieldPhoneInvalidCode' => 'Invalid country code',
      'fieldPhoneTooShort' => '{field} is too short',
      'fieldPhoneTooLong' => '{field} is too long',
      'fieldPhoneInvalidCharacters' => 'Only digits, latin letters and characters `-+_@:#().` are allowed',
      'fieldPhoneExtensionTooLong' => 'Extension should not be longer than {maxLength}',
      'fieldShouldBeEmail' => 'Kiểm tra lại {field}',
      'fieldShouldBeFloat' => 'Kiểm tra lại {field}',
      'fieldShouldBeInt' => 'Kiểm tra lại {field}',
      'fieldShouldBeNumber' => '{field} should be a valid number',
      'fieldShouldBeDate' => 'Kiểm tra lại {field}',
      'fieldShouldBeDatetime' => 'Kiểm tra lại {field}',
      'fieldShouldAfter' => '{field} cần đặt sau {otherField}',
      'fieldShouldBefore' => '{field} cần đặt trước {otherField}',
      'fieldShouldBeBetween' => '{field} cần đặt giữa {min} và {max}',
      'fieldShouldBeLess' => '{field} cần nhỏ hơn {value}',
      'fieldShouldBeGreater' => '{field} cần lớn hơn {value}',
      'fieldBadPasswordConfirm' => '{field} không hợp lệ',
      'fieldMaxFileSizeError' => 'File should not exceed {max} Mb',
      'fieldValueDuplicate' => 'Giá trị bị trùng',
      'fieldIsUploading' => 'Uploading in progress',
      'fieldExceedsMaxCount' => 'Count exceeds max allowed {maxCount}',
      'barcodeInvalid' => '{field} is not valid {type}',
      'arrayItemMaxLength' => 'Item shouldn\'t be longer than {max} characters',
      'resetPreferencesDone' => 'Preferences has been reset to defaults',
      'confirmation' => 'Bạn chắc chắn thực hiện thao tác này?',
      'unlinkAllConfirmation' => 'Are you sure you want to unlink all related records?',
      'resetPreferencesConfirmation' => 'Bạn có chắc chắn muốn khôi phục tuỳ chỉnh về mặc định?',
      'removeRecordConfirmation' => 'Bạn muốn xoá nội dung này?',
      'unlinkRecordConfirmation' => 'Are you sure you want to unlink the related record?',
      'removeSelectedRecordsConfirmation' => 'Bạn muốn xoá các mục đã chọn?',
      'unlinkSelectedRecordsConfirmation' => 'Are you sure you want to unlink selected records?',
      'massUpdateResult' => '{count} mục đã được cập nhật',
      'massUpdateResultSingle' => '{count} mục đã được cập nhật',
      'recalculateFormulaConfirmation' => 'Are you sure you want to recalculate formula for selected records?',
      'noRecordsUpdated' => 'Không mục nào bị thay đổi',
      'massRemoveResult' => '{count} mục đã xoá',
      'massRemoveResultSingle' => '{count} mục đã được xoá',
      'noRecordsRemoved' => 'Không mục nào bị xoá',
      'clickToRefresh' => 'Nhấn để tải lại',
      'writeYourCommentHere' => 'Viết lời nhắn tại đây',
      'writeMessageToUser' => 'Nhắn tin tới {user}',
      'writeMessageToSelf' => 'Write a message on your stream',
      'typeAndPressEnter' => 'Nhập và nhấn enter',
      'checkForNewNotifications' => 'Kiểm tra thông báo mới',
      'checkForNewNotes' => 'Check for stream updates',
      'internalPost' => 'Post will be seen only by internal users',
      'internalPostTitle' => 'Post is seen only by internal users',
      'done' => 'Hoàn thành',
      'notUpdated' => 'Not updated',
      'confirmMassFollow' => 'Are you sure you want to follow selected records?',
      'confirmMassUnfollow' => 'Are you sure you want to unfollow selected records?',
      'massFollowResult' => '{count} records now are followed',
      'massUnfollowResult' => '{count} records now are not followed',
      'massFollowResultSingle' => '{count} record now is followed',
      'massUnfollowResultSingle' => '{count} record now is not followed',
      'massFollowZeroResult' => 'Nothing got followed',
      'massUnfollowZeroResult' => 'Nothing got unfollowed',
      'erasePersonalDataConfirmation' => 'Checked fields will be erased permanently. Are you sure?',
      'maintenanceModeError' => 'The application currently is in maintenance mode.',
      'maintenanceMode' => 'Ứng dụng đang được bảo trì. Chỉ có quản trị viên mới được phép truy cập phần này.

Nếu là quản trị viên, bạn có thể tắt tại Quản trị → Cài đặt.',
      'resolveSaveConflict' => 'The record has been modified. You need to resolve the conflict before you can save the record.',
      'massPrintPdfMaxCountError' => 'Can\'t print more that {maxCount} records.',
      'massActionProcessed' => 'Mass action has been processed.',
      'validationFailure' => 'Backend validation failure.

Field: `{field}`
Validation: `{type}`',
      'extensionLicenseInvalid' => 'Invalid \'{name}\' extension license.',
      'extensionLicenseExpired' => 'The \'{name}\' extension license subscription has expired.',
      'extensionLicenseSoftExpired' => 'The \'{name}\' extension license subscription has expired.',
      'confirmAppRefresh' => 'The application has been updated. It is recommended to refresh the page to ensure the proper functioning.',
      'loggedOutLeaveOut' => 'Logged out. The session is inactive. You may lose unsaved form data after page refresh. You may need to make a copy.',
      'noAccessToRecord' => 'Operation requires `{action}` access to record.',
      'noAccessToForeignRecord' => 'Operation requires `{action}` access to foreign record.',
      'noLinkAccess' => 'Can\'t relate with {foreignEntityType} record through the link \'{link}\'. No access.',
      'cannotUnrelateRequiredLink' => 'Can\'t unrelate required link.',
      'cannotRelateNonExisting' => 'Can\'t relate with non-existing {foreignEntityType} record.',
      'cannotRelateForbidden' => 'Can\'t relate with forbidden {foreignEntityType} record. `{action}` access required.',
      'cannotRelateForbiddenLink' => 'No access to link \'{link}\'.',
      'cannotLinkAlreadyLinked' => 'Cannot link an already linked record.',
      'error404' => 'The url you requested can\'t be handled.',
      'error403' => 'You don\'t have an access to this area.',
      'emptyMassUpdate' => 'No fields available for Mass Update.',
      'attemptIntervalFailure' => 'The operation is not allowed during a specific time interval. Wait for some time before the next attempt.',
      'confirmRestoreFromAudit' => 'The previous values will be set in a form. Then you can save the record to restore the previous values.',
      'starsLimitExceeded' => 'The number of stars exceeded the limit.',
      'select2OrMoreRecords' => 'Select 2 or more records',
      'selectNotMoreThanNumberRecords' => 'Select not more than {number} records',
      'selectAtLeastOneRecord' => 'Select at least one record',
      'duplicateConflict' => 'A record already exists.',
      'posting' => 'Đang đăng...'
    ],
    'boolFilters' => [
      'onlyMy' => 'Chỉ mình tôi',
      'onlyMyTeam' => 'My Team',
      'followed' => 'Đã theo dõi'
    ],
    'presetFilters' => [
      'followed' => 'Đã theo dõi',
      'all' => 'Tất cả',
      'starred' => 'Starred'
    ],
    'massActions' => [
      'delete' => 'Delete',
      'remove' => 'Loại bỏ',
      'merge' => 'Gộp lại',
      'update' => 'Update',
      'massUpdate' => 'Cập nhật hàng loạt',
      'unlink' => 'Hủy liên kết',
      'export' => 'Xuất ra',
      'follow' => 'Theo dõi',
      'unfollow' => 'Ngừng theo dõi',
      'convertCurrency' => 'Convert Currency',
      'recalculateFormula' => 'Recalculate Formula',
      'printPdf' => 'In ra PDF'
    ],
    'fields' => [
      'name' => 'Tên',
      'firstName' => 'Tên',
      'lastName' => 'Họ',
      'middleName' => 'Middle Name',
      'salutationName' => 'Chào đón',
      'assignedUser' => 'Người phụ trách',
      'assignedUsers' => 'Người phụ trách',
      'emailAddress' => 'Email',
      'emailAddressData' => 'Email Address Data',
      'emailAddressIsOptedOut' => 'Email Address is Opted-Out',
      'emailAddressIsInvalid' => 'Email Address is Invalid',
      'assignedUserName' => 'Thành viên được phụ trách',
      'teams' => 'Nhóm',
      'users' => 'Users',
      'createdAt' => 'Tạo lúc',
      'modifiedAt' => 'Sửa lúc',
      'createdBy' => 'Tạo bởi',
      'modifiedBy' => 'Sửa bởi',
      'description' => 'Mô tả',
      'address' => 'Địa chỉ',
      'phoneNumber' => 'Điện thoại',
      'phoneNumberMobile' => 'Số điện thoại (di động)',
      'phoneNumberHome' => 'Số điện thoại (bàn)',
      'phoneNumberFax' => 'Số Fax',
      'phoneNumberOffice' => 'Số điện thoại (văn phòng)',
      'phoneNumberOther' => 'Số điện thoại (khác)',
      'phoneNumberData' => 'Phone Number Data',
      'phoneNumberIsOptedOut' => 'Phone Number is Opted-Out',
      'phoneNumberIsInvalid' => 'Phone Number is Invalid',
      'order' => 'Thứ tự',
      'parent' => 'Parent',
      'children' => 'Children',
      'id' => 'ID',
      'ids' => 'IDs',
      'type' => 'Loại',
      'names' => 'Tên',
      'types' => 'Loại',
      'targetListIsOptedOut' => 'Is Opted Out (Target List)',
      'childList' => 'Child List',
      'billingAddressCity' => 'Quận - huyện',
      'billingAddressCountry' => 'Quốc gia',
      'billingAddressPostalCode' => 'Mã bưu điện',
      'billingAddressState' => 'Thành phố',
      'billingAddressStreet' => 'Đường',
      'billingAddressMap' => 'Bản đồ',
      'addressCity' => 'Quận - huyện',
      'addressStreet' => 'Đường',
      'addressCountry' => 'Quốc gia',
      'addressState' => 'Thành phố',
      'addressPostalCode' => 'Mã bưu điện',
      'addressMap' => 'Bản đồ',
      'shippingAddressCity' => 'Thành phố (Gửi đi)',
      'shippingAddressStreet' => 'Đường (Gửi đi)',
      'shippingAddressCountry' => 'Quốc gia (Gửi đi)',
      'shippingAddressState' => 'State (Shipping)',
      'shippingAddressPostalCode' => 'Postal Code (Shipping)',
      'shippingAddressMap' => 'Bản đồ (Địa chỉ thanh toán)'
    ],
    'links' => [
      'assignedUser' => 'Đã được giao cho',
      'createdBy' => 'Đã tạo bởi',
      'modifiedBy' => 'Đã sửa bởi',
      'team' => 'Nhóm',
      'roles' => 'Quyền',
      'teams' => 'Nhóm',
      'users' => 'Người dùng',
      'parent' => 'Parent',
      'children' => 'Trẻ em',
      'contacts' => 'Sổ liên lạc',
      'opportunities' => 'Cơ hội',
      'leads' => 'Trưởng nhóm',
      'meetings' => 'Hẹn gặp',
      'calls' => 'Cuộc gọi',
      'tasks' => 'Nhiệm vụ',
      'emails' => 'Địa chỉ email',
      'accounts' => 'Accounts',
      'cases' => 'Cases',
      'documents' => 'Tài liệu',
      'account' => 'Account',
      'opportunity' => 'Cơ hội',
      'contact' => 'Danh bạ'
    ],
    'dashlets' => [
      'Stream' => 'Luồng',
      'Emails' => 'Hộp thư của tôi',
      'Iframe' => 'Iframe',
      'Records' => 'Record List',
      'Memo' => 'Memo',
      'Leads' => 'Chỉ dẫn của tôi',
      'Opportunities' => 'Cơ hội của tôi',
      'Tasks' => 'Nhiệm vụ của tôi',
      'Cases' => 'Công việc của tôi',
      'Calendar' => 'Lịch',
      'Calls' => 'Cuộc gọi của tôi',
      'Meetings' => 'Cuộc hẹn của tôi',
      'OpportunitiesByStage' => 'Chia mức cơ hội',
      'OpportunitiesByLeadSource' => 'Phân chia cơ hội theo người chỉ dẫn',
      'SalesByMonth' => 'Doanh thu hàng tháng',
      'SalesPipeline' => 'Doanh thu gối',
      'Activities' => 'Hoạt động của tôi'
    ],
    'notificationMessages' => [
      'assign' => '{entityType} {entity} has been assigned to you',
      'emailReceived' => 'Email đã được nhận từ {from}',
      'entityRemoved' => '{user} đã xóa {entityType} {entity}',
      'eventAttendee' => '{user} added you to {entityType} {entity}'
    ],
    'streamMessages' => [
      'post' => '{user} đăng {entityType} {entity}',
      'attach' => '{user} đính kèm ở {entityType} {entity}',
      'status' => '{user} cập nhật {field} ở {entityType} {entity}',
      'update' => '{user} cập nhật {entityType} {entity}',
      'postTargetTeam' => '{user} đã đăng đến nhóm {target}',
      'postTargetTeams' => '{user} posted to team {target}',
      'postTargetPortal' => '{user} đã đăng đến tường 
{target}',
      'postTargetPortals' => '{user} đã đăng đến {target}',
      'postTarget' => '{user} đã đăng đến {target}',
      'postTargetYou' => '{user} đã đăng đến bạn',
      'postTargetYouAndOthers' => ' {user} đã đăng đến {target} và bạn',
      'postTargetAll' => ' {user} đã đăng đến tất cả mọi người',
      'postTargetSelf' => '{user} self-posted',
      'postTargetSelfAndOthers' => '{user} posted to {target} and themself',
      'mentionInPost' => '{user} mentioned {mentioned} in {entityType} {entity}',
      'mentionYouInPost' => '{user} nhắc đến bạn trong {entityType} {entity}',
      'mentionInPostTarget' => '{user} đã nhắc {mentioned} trong bài',
      'mentionYouInPostTarget' => '{user} mentioned you in post to {target}',
      'mentionYouInPostTargetAll' => '{user} đã nhắc đến bạn trong tất cả bài',
      'mentionYouInPostTargetNoTarget' => '{user} mentioned you in post',
      'create' => '{user} tạo {entityType} {entity}',
      'createThis' => '{user} tạo {entityType}',
      'createAssignedThis' => '{user} tạo {entityType} phân công cho {assignee}',
      'createAssigned' => '{user} tạo {entityType} {entity} phân công cho {assignee}',
      'createAssignedYou' => '{user} đã tạo {entityType} {entity} và giao cho bạn',
      'createAssignedThisSelf' => '{user} đã tạo {entityType} này và tự giao cho mình',
      'createAssignedSelf' => '{user} đã tạo {entityType} {entity} và tự giao cho mình',
      'assign' => '{user} phân công {entityType} {entity} cho {assignee}',
      'assignThis' => '{user} phân công {entityType} cho {assignee}',
      'assignYou' => '{user} assigned {entityType} {entity} to you',
      'assignThisVoid' => '{user} unassigned this {entityType}',
      'assignVoid' => '{user} unassigned {entityType} {entity}',
      'assignThisSelf' => '{user} self-assigned this {entityType}',
      'assignSelf' => '{user} self-assigned {entityType} {entity}',
      'postThis' => '{user} đã đăng',
      'attachThis' => '{user} đã đính kèm',
      'statusThis' => '{user} đã cập nhật {field}',
      'updateThis' => '{user} cập nhật {entityType}',
      'createRelatedThis' => '{user} created {relatedEntityType} {relatedEntity} linked to this {entityType}',
      'createRelated' => '{user} created {relatedEntityType} {relatedEntity} linked to {entityType} {entity}',
      'relate' => '{user} linked {relatedEntityType} {relatedEntity} with {entityType} {entity}',
      'relateThis' => '{user} linked {relatedEntityType} {relatedEntity} with this {entityType}',
      'unrelate' => '{user} unlinked {relatedEntityType} {relatedEntity} from {entityType} {entity}',
      'unrelateThis' => '{user} unlinked {relatedEntityType} {relatedEntity} from this {entityType}',
      'emailReceivedFromThis' => 'Đã nhận email từ {from}',
      'emailReceivedInitialFromThis' => 'Đã nhận email từ {from}, muc {entityType} đã được tạo',
      'emailReceivedThis' => '{entity} đã được nhận',
      'emailReceivedInitialThis' => 'Đã nhận email, {entityType} đã được tạo',
      'emailReceivedFrom' => 'Email received from {from}, related to {entityType} {entity}',
      'emailReceivedFromInitial' => 'Email received from {from}, {entityType} {entity} created',
      'emailReceived' => '{entity} đã được nhận bởi {entityType} {entity}',
      'emailReceivedInitial' => 'Email received: {entityType} {entity} created',
      'emailReceivedInitialFrom' => 'Email received from {from}, {entityType} {entity} created',
      'emailSent' => '{by} sent email related to {entityType} {entity}',
      'emailSentThis' => '{by} gửi email',
      'eventConfirmationAccepted' => '{invitee} accepted participation in {entityType} {entity}',
      'eventConfirmationDeclined' => '{invitee} declined participation in {entityType} {entity}',
      'eventConfirmationTentative' => '{invitee} is tentative about participation in {entityType} {entity}',
      'eventConfirmationAcceptedThis' => '{invitee} accepted participation',
      'eventConfirmationDeclinedThis' => '{invitee} declined participation',
      'eventConfirmationTentativeThis' => '{invitee} is tentative about participation'
    ],
    'streamMessagesMale' => [
      'postTargetSelfAndOthers' => '{user} posted to {target} and himself'
    ],
    'streamMessagesFemale' => [
      'postTargetSelfAndOthers' => '{user} posted to {target} and herself'
    ],
    'lists' => [
      'monthNames' => [
        0 => 'Tháng Một',
        1 => 'Tháng Hai',
        2 => 'Tháng Ba',
        3 => 'Tháng Tư',
        4 => 'Tháng Năm',
        5 => 'Tháng Sáu',
        6 => 'Tháng Bảy',
        7 => 'Tháng Tám',
        8 => 'Tháng Chín',
        9 => 'Tháng Mười',
        10 => 'Tháng Mười Một',
        11 => 'Tháng Mười Hai'
      ],
      'monthNamesShort' => [
        0 => 'Th1',
        1 => 'Th2',
        2 => 'Th3',
        3 => 'Th4',
        4 => 'Th5',
        5 => 'Th6',
        6 => 'Th7',
        7 => 'Th8',
        8 => 'Th9',
        9 => 'Th10',
        10 => 'Th11',
        11 => 'Th12'
      ],
      'dayNames' => [
        0 => 'Chủ Nhật',
        1 => 'Thứ Hai',
        2 => 'Thứ Ba',
        3 => 'Thứ Tư',
        4 => 'Thứ Năm',
        5 => 'Thứ Sáu',
        6 => 'Thứ Bảy'
      ],
      'dayNamesShort' => [
        0 => 'CN',
        1 => 'T2',
        2 => 'T3',
        3 => 'T4',
        4 => 'T5',
        5 => 'T6',
        6 => 'T7'
      ],
      'dayNamesMin' => [
        0 => 'CN',
        1 => 'T2',
        2 => 'T3',
        3 => 'T4',
        4 => 'T5',
        5 => 'T6',
        6 => 'T7'
      ]
    ],
    'durationUnits' => [
      'd' => 'ngày',
      'h' => 'giờ',
      'm' => 'phút',
      's' => 'giây'
    ],
    'options' => [
      'salutationName' => [
        'Mr.' => 'Ông.',
        'Mrs.' => 'Bà.',
        'Ms.' => 'Cô',
        'Dr.' => 'Bác sĩ.'
      ],
      'language' => [
        'ar_AR' => 'Arabic',
        'af_ZA' => 'Afrikaans',
        'az_AZ' => 'Azerbaijani',
        'be_BY' => 'Belarusian',
        'bg_BG' => 'Bulgarian',
        'bn_IN' => 'Bengali',
        'bs_BA' => 'Bosnian',
        'ca_ES' => 'Catalan',
        'cs_CZ' => 'Czech',
        'cy_GB' => 'Welsh',
        'da_DK' => 'Danish',
        'de_DE' => 'German',
        'el_GR' => 'Greek',
        'en_GB' => 'English (UK)',
        'es_MX' => 'Spanish (Mexico)',
        'en_US' => 'English (US)',
        'es_ES' => 'Spanish (Spain)',
        'et_EE' => 'Estonian',
        'eu_ES' => 'Basque',
        'fa_IR' => 'Persian',
        'fi_FI' => 'Finnish',
        'fo_FO' => 'Faroese',
        'fr_CA' => 'French (Canada)',
        'fr_FR' => 'French (France)',
        'ga_IE' => 'Irish',
        'gl_ES' => 'Galician',
        'gn_PY' => 'Guarani',
        'he_IL' => 'Hebrew',
        'hi_IN' => 'Hindi',
        'hr_HR' => 'Croatian',
        'hu_HU' => 'Hungarian',
        'hy_AM' => 'Armenian',
        'id_ID' => 'Indonesian',
        'is_IS' => 'Icelandic',
        'it_IT' => 'Italian',
        'ja_JP' => 'Japanese',
        'ka_GE' => 'Georgian',
        'km_KH' => 'Khmer',
        'ko_KR' => 'Korean',
        'ku_TR' => 'Kurdish',
        'lt_LT' => 'Lithuanian',
        'lv_LV' => 'Latvian',
        'mk_MK' => 'Macedonian',
        'ml_IN' => 'Malayalam',
        'ms_MY' => 'Malay',
        'nb_NO' => 'Norwegian Bokmål',
        'nn_NO' => 'Norwegian Nynorsk',
        'ne_NP' => 'Nepali',
        'nl_NL' => 'Dutch',
        'pa_IN' => 'Punjabi',
        'pl_PL' => 'Polish',
        'ps_AF' => 'Pashto',
        'pt_BR' => 'Portuguese (Brazil)',
        'pt_PT' => 'Portuguese (Portugal)',
        'ro_RO' => 'Romanian',
        'ru_RU' => 'Russian',
        'sk_SK' => 'Slovak',
        'sl_SI' => 'Slovene',
        'sq_AL' => 'Albanian',
        'sr_RS' => 'Serbian',
        'sv_SE' => 'Swedish',
        'sw_KE' => 'Swahili',
        'ta_IN' => 'Tamil',
        'te_IN' => 'Telugu',
        'th_TH' => 'Thai',
        'tl_PH' => 'Tagalog',
        'tr_TR' => 'Turkish',
        'uk_UA' => 'Ukrainian',
        'ur_PK' => 'Urdu',
        'vi_VN' => 'Tiếng Việt',
        'zh_CN' => 'Simplified Chinese (China)',
        'zh_HK' => 'Traditional Chinese (Hong Kong)',
        'zh_TW' => 'Traditional Chinese (Taiwan)'
      ],
      'dateSearchRanges' => [
        'on' => 'Lúc',
        'notOn' => 'Trừ lúc',
        'after' => 'After',
        'before' => 'Before',
        'between' => 'Trong khoản',
        'today' => 'Hôm nay',
        'past' => 'Past',
        'future' => 'Future',
        'currentMonth' => 'Tháng hiện tại',
        'lastMonth' => 'Tháng trước',
        'nextMonth' => 'Tháng tới',
        'currentQuarter' => 'Quý này',
        'lastQuarter' => 'Quý trước',
        'currentYear' => 'Năm hiện tại',
        'lastYear' => 'Năm trước',
        'lastSevenDays' => '7 ngày trước',
        'lastXDays' => 'x ngày trước',
        'nextXDays' => 'x ngày tiếp theo',
        'ever' => 'Ever',
        'isEmpty' => 'Is Empty',
        'olderThanXDays' => 'Older Than X Days',
        'afterXDays' => 'After X Days',
        'currentFiscalYear' => 'Current Fiscal Year',
        'lastFiscalYear' => 'Last Fiscal Year',
        'currentFiscalQuarter' => 'Current Fiscal Quarter',
        'lastFiscalQuarter' => 'Last Fiscal Quarter'
      ],
      'searchRanges' => [
        'is' => 'là',
        'isEmpty' => 'Bị bỏ trống',
        'isNotEmpty' => 'Không bị bỏ trống',
        'isOneOf' => 'Any Of',
        'isFromTeams' => 'Is From Team',
        'isNot' => 'Is Not',
        'isNotOneOf' => 'None Of',
        'anyOf' => 'Any Of',
        'allOf' => 'All Of',
        'noneOf' => 'None Of',
        'any' => 'Any'
      ],
      'varcharSearchRanges' => [
        'equals' => 'Bằng',
        'like' => 'Tương tự',
        'notLike' => 'Is Not Like (%)',
        'startsWith' => 'Bắt đầu bởi',
        'endsWith' => 'Kết thúc bởi',
        'contains' => 'Có chứa',
        'notContains' => 'Not Contains',
        'isEmpty' => 'Bị bỏ trống',
        'isNotEmpty' => 'Không bị bỏ trống',
        'notEquals' => 'Not Equals'
      ],
      'intSearchRanges' => [
        'equals' => 'Equals',
        'notEquals' => 'Not Equals',
        'greaterThan' => 'Greater Than',
        'lessThan' => 'Less Than',
        'greaterThanOrEquals' => 'Greater Than or Equals',
        'lessThanOrEquals' => 'Less Than or Equals',
        'between' => 'Between',
        'isEmpty' => 'Bị bỏ trống',
        'isNotEmpty' => 'Không bị bỏ trống'
      ],
      'autorefreshInterval' => [
        0 => 'Trống',
        '0.5' => '30 seconds',
        1 => '1 minute',
        2 => '2 minutes',
        5 => '5 minutes',
        10 => '10 minutes'
      ],
      'phoneNumber' => [
        'Mobile' => 'Di động',
        'Office' => 'Văn phòng',
        'Fax' => 'Fax',
        'Home' => 'Home',
        'Other' => 'Khác'
      ],
      'saveConflictResolution' => [
        'current' => 'Current',
        'actual' => 'Actual',
        'original' => 'Original'
      ],
      'reminderTypes' => [
        'Popup' => 'Popup',
        'Email' => 'Email'
      ]
    ],
    'sets' => [
      'summernote' => [
        'NOTICE' => 'You can find translation here: https://github.com/HackerWins/summernote/tree/master/lang',
        'font' => [
          'bold' => 'Đậm',
          'italic' => 'Nghiêng',
          'underline' => 'Gạch chân',
          'strike' => 'Gạch giữa',
          'clear' => 'Xóa định dạng',
          'height' => 'Kích thước dòng',
          'name' => 'Font chữ',
          'size' => 'Kích thước'
        ],
        'image' => [
          'image' => 'Ảnh',
          'insert' => 'Chèn ảnh',
          'resizeFull' => 'Ảnh đầy đủ',
          'resizeHalf' => 'Giảm nửa kích thước',
          'resizeQuarter' => 'Giảm 1/4 kích thước',
          'floatLeft' => 'Căn trái',
          'floatRight' => 'Căn phải',
          'floatNone' => 'Không căn lề',
          'dragImageHere' => 'Thả ảnh vào đây',
          'selectFromFiles' => 'Chọn từ thư mục',
          'url' => 'Đường dẫn ảnh',
          'remove' => 'Xóa ảnh'
        ],
        'link' => [
          'link' => 'Đường dẫn',
          'insert' => 'Chèn đường dẫn',
          'unlink' => 'Xóa liên kết',
          'edit' => 'Sửa',
          'textToDisplay' => 'Chữ hiển thị',
          'url' => 'To what URL should this link go?',
          'openInNewWindow' => 'Mở trong cửa sổ mới'
        ],
        'video' => [
          'video' => 'Video',
          'videoLink' => 'Đường dẫn video',
          'insert' => 'Chèn Video',
          'url' => 'Video URL?',
          'providers' => '(YouTube, Vimeo, Vine, Instagram, or DailyMotion)'
        ],
        'table' => [
          'table' => 'Bảng'
        ],
        'hr' => [
          'insert' => 'Thêm dòng ngang'
        ],
        'style' => [
          'style' => 'Kiểu',
          'normal' => 'Bình thường',
          'blockquote' => 'Trích dẫn',
          'pre' => 'Code',
          'h1' => 'Tiêu đề 1',
          'h2' => 'Tiêu đề 2',
          'h3' => 'Tiêu đềTiêu đề 3',
          'h4' => 'Tiêu đề 4',
          'h5' => 'Tiêu đề 5',
          'h6' => 'Tiêu đề 6'
        ],
        'lists' => [
          'unordered' => 'Liệt kê',
          'ordered' => 'Danh sách'
        ],
        'options' => [
          'help' => 'Trợ giúp',
          'fullscreen' => 'Đầy màn hình',
          'codeview' => 'Hiển thị dạng code'
        ],
        'paragraph' => [
          'paragraph' => 'Đoạn văn bản',
          'outdent' => 'Bỏ lùi đầu dòng',
          'indent' => 'Lùi đầu dòng',
          'left' => 'Căn lề trái',
          'center' => 'Căn lề giữa',
          'right' => 'Căn lề phải',
          'justify' => 'Căn lề 2 bên'
        ],
        'color' => [
          'recent' => 'Màu đã dùng',
          'more' => 'Thêm màu',
          'background' => 'Màu nền',
          'foreground' => 'Màu chữ',
          'transparent' => 'Trong suốt',
          'setTransparent' => 'Chỉnh độ trong suốt',
          'reset' => 'Reset',
          'resetToDefault' => 'Đặt lại mặc định'
        ],
        'shortcut' => [
          'shortcuts' => 'Phím tắt',
          'close' => 'Đóng',
          'textFormatting' => 'Định dạng chữ',
          'action' => 'Hành động',
          'paragraphFormatting' => 'Định dạng đoạn văn bản',
          'documentStyle' => 'Kiểu văn bản'
        ],
        'history' => [
          'undo' => 'Quay lui',
          'redo' => 'Tiến lên'
        ]
      ]
    ],
    'listViewModes' => [
      'list' => 'Danh sách',
      'kanban' => 'Dạng tiến trình'
    ],
    'themes' => [
      'Dark' => 'Dark',
      'Light' => 'Light',
      'Espo' => 'Espo',
      'EspoRtl' => 'RTL',
      'Sakura' => 'Sakura',
      'Violet' => 'Violet',
      'Hazyblue' => 'Hazyblue',
      'Glass' => 'Glass'
    ],
    'themeNavbars' => [
      'side' => 'Side Navbar',
      'top' => 'Top Navbar'
    ],
    'fieldValidations' => [
      'required' => 'Required',
      'maxCount' => 'Max Count',
      'maxLength' => 'Max Length',
      'pattern' => 'Pattern Matching',
      'emailAddress' => 'Valid Email Address',
      'phoneNumber' => 'Valid Phone Number',
      'array' => 'Array',
      'arrayOfString' => 'Array of Strings',
      'valid' => 'Validity',
      'noEmptyString' => 'No Empty String',
      'max' => 'Max Value',
      'min' => 'Min Value'
    ],
    'fieldValidationExplanations' => [
      'valid' => 'Invalid value.',
      'maxLength' => 'Value length exceeds maximum value.',
      'phone_valid' => 'Phone number is not valid. May be caused by a wrong or empty country code.',
      'url_valid' => 'Invalid URL value.',
      'currency_valid' => 'Invalid amount value.',
      'currency_validCurrency' => 'The currency code value is invalid or not allowed.',
      'varchar_pattern' => 'Likely, the value contains not allowed characters.',
      'email_emailAddress' => 'Invalid email address value.',
      'phone_phoneNumber' => 'Invalid phone number value.',
      'datetimeOptional_valid' => 'Invalid date-time value.',
      'datetime_valid' => 'Invalid date-time value.',
      'date_valid' => 'Invalid date value.',
      'enum_valid' => 'Invalid enum value. The value must be one of defined enum options. An empty value is allowed only if the field has an empty option.',
      'int_valid' => 'Invalid integer number value.',
      'float_valid' => 'Invalid number value.',
      'multiEnum_valid' => 'Invalid multi-enum value. Values must be one of defined field options.'
    ],
    'navbarTabs' => [
      'Business' => 'Business',
      'Marketing' => 'Marketing',
      'Support' => 'Support',
      'CRM' => 'CRM',
      'Activities' => 'Activities'
    ],
    'wysiwygLabels' => [
      'cell' => 'Cell',
      'align' => 'Align',
      'width' => 'Width',
      'height' => 'Height',
      'borderWidth' => 'Border Width',
      'borderColor' => 'Border Color',
      'cellPadding' => 'Cell Padding',
      'backgroundColor' => 'Background Color',
      'verticalAlign' => 'Vertical Align'
    ],
    'wysiwygOptions' => [
      'align' => [
        'left' => 'Left',
        'center' => 'Center',
        'right' => 'Right'
      ],
      'verticalAlign' => [
        'top' => 'Top',
        'middle' => 'Middle',
        'bottom' => 'Bottom'
      ]
    ],
    'detailViewModes' => [
      'detail' => 'Detail'
    ]
  ],
  'GroupEmailFolder' => [
    'links' => [
      'emails' => 'Emails'
    ],
    'labels' => [
      'Create GroupEmailFolder' => 'Create Folder'
    ]
  ],
  'Import' => [
    'labels' => [
      'New import with same params' => 'New import with same params',
      'Revert Import' => 'Khôi phục Import',
      'Return to Import' => 'Quay lại trang nhập dữ liệu',
      'Run Import' => 'Chạy nhập dữ liệu',
      'Back' => 'Trở lại',
      'Field Mapping' => 'Ánh xạ các trường',
      'Default Values' => 'Giá trị mặc định',
      'Add Field' => 'Thêm trường',
      'Created' => 'Đã tạo',
      'Updated' => 'Đã cập nhật',
      'Result' => 'Kết quả',
      'Show records' => 'Hiển thị các trường',
      'Remove Duplicates' => 'Lọc dữ liệu trùng',
      'importedCount' => 'Đã nhập (số lượng)',
      'duplicateCount' => 'Đếm dữ liệu trùng',
      'updatedCount' => 'Đã cập nhật (số lượng)',
      'Create Only' => 'Chỉ tạo',
      'Create and Update' => 'Tạo & cập nhật',
      'Update Only' => 'Chỉ cập nhật',
      'Update by' => 'Cập nhật bởi',
      'Set as Not Duplicate' => 'Set as Not Duplicate',
      'File (CSV)' => 'Tập tin (đinh dạng CSV)',
      'First Row Value' => 'Dữ liệu hàng đầu tiên',
      'Skip' => 'Bỏ qua',
      'Header Row Value' => 'Dữ liệu đầu',
      'Field' => 'Trường',
      'What to Import?' => 'Cần nhập những gì?',
      'Entity Type' => 'Loại Entity',
      'What to do?' => 'Cần làm gì',
      'Properties' => 'Thông tin chi tiết',
      'Header Row' => 'Hàng đầu',
      'Person Name Format' => 'Định dạng tên người dùng',
      'John Smith' => 'John Smith',
      'Smith John' => 'Smith John',
      'Smith, John' => 'Smith, John',
      'Field Delimiter' => 'Field Delimiter',
      'Date Format' => 'Định dạng ngày',
      'Decimal Mark' => 'Decimal Mark',
      'Text Qualifier' => 'Text Qualifier',
      'Time Format' => 'Định dạng thời gian',
      'Currency' => 'Tiền tệ',
      'Preview' => 'Xem trước',
      'Next' => 'Kế tiếp',
      'Step 1' => 'Bước 1',
      'Step 2' => 'Bước 2',
      'Double Quote' => 'Trích dẫn kép',
      'Single Quote' => 'Trích dẫn đơn lẻ',
      'Imported' => 'Đã nhập dữ liệu',
      'Duplicates' => 'Nhân bản',
      'Skip searching for duplicates' => 'Skip searching for duplicates',
      'Timezone' => 'Múi giờ',
      'Remove Import Log' => 'Remove Import Log',
      'New Import' => 'Nhập dữ liệu mới',
      'Import Results' => 'Quy định nhập dữ liệu',
      'Run Manually' => 'Run Manually',
      'Silent Mode' => 'Chế độ im lặng',
      'Export' => 'Export'
    ],
    'messages' => [
      'importRunning' => 'Import running...',
      'noErrors' => 'No errors',
      'utf8' => 'Được mã hóa UTF-8',
      'duplicatesRemoved' => 'Đã lọc trùng',
      'inIdle' => 'Execute in idle (for big data; via cron)',
      'revert' => 'This will remove all imported records permanently.',
      'removeDuplicates' => 'This will permanently remove all imported records that were recognized as duplicates.',
      'confirmRevert' => 'This will remove all imported records permanently. Are you sure?',
      'confirmRemoveDuplicates' => 'This will permanently remove all imported records that were recognized as duplicates. Are you sure?',
      'confirmRemoveImportLog' => 'This will remove the import log. All imported records will be kept. You won\'t be able to revert import results. Are you sure?',
      'removeImportLog' => 'This will remove the import log. All imported records will be kept. Use it if you are sure that import is fine.'
    ],
    'params' => [
      'phoneNumberCountry' => 'Telephone country code'
    ],
    'fields' => [
      'file' => 'Tập tin',
      'entityType' => 'Loại Entity',
      'imported' => 'Thông tin đã được nhập',
      'duplicates' => 'Trường trùng lặp',
      'updated' => 'Đã nhập nhật trường',
      'status' => 'Tình trạng'
    ],
    'links' => [
      'errors' => 'Errors'
    ],
    'options' => [
      'status' => [
        'Failed' => 'Lỗi',
        'Standby' => 'Standby',
        'Pending' => 'Pending',
        'In Process' => 'Đang thực hiện',
        'Complete' => 'Hoàn thành'
      ],
      'personNameFormat' => [
        'f l' => 'First Last',
        'l f' => 'Last First',
        'f m l' => 'First Middle Last',
        'l f m' => 'Last First Middle',
        'l, f' => 'Last, First'
      ]
    ],
    'strings' => [
      'commandToRun' => 'Command to run (from CLI)',
      'saveAsDefault' => 'Save as default'
    ],
    'tooltips' => [
      'manualMode' => 'If checked, you will need to run import manually from CLI. Command will be shown after setting up the import.',
      'silentMode' => 'A majority of after-save scripts will be skipped, stream notes won\'t be created. Import will run faster.'
    ]
  ],
  'ImportError' => [
    'fields' => [
      'type' => 'Type',
      'validationFailures' => 'Validation Failures',
      'import' => 'Import',
      'rowIndex' => 'Row Index',
      'exportRowIndex' => 'Export Row Index',
      'lineNumber' => 'Line Number',
      'exportLineNumber' => 'Export Line Number',
      'row' => 'Row',
      'entityType' => 'Entity Type'
    ],
    'options' => [
      'type' => [
        'Validation' => 'Validation',
        'Access' => 'Access',
        'Not-Found' => 'Not-Found'
      ]
    ],
    'tooltips' => [
      'lineNumber' => 'A line number in the original CSV.',
      'exportLineNumber' => 'A line number in the export CSV.'
    ]
  ],
  'InboundEmail' => [
    'fields' => [
      'name' => 'Tên',
      'emailAddress' => 'Địa chỉ Email',
      'team' => 'Nhóm',
      'status' => 'Trạng thái',
      'assignToUser' => 'Chỉ định',
      'host' => 'Máy chủ',
      'username' => 'Tên đăng nhập',
      'password' => 'Mật khẩu',
      'port' => 'Cổng',
      'monitoredFolders' => 'Thư mục được theo dõi',
      'trashFolder' => 'Thùng rác',
      'security' => 'Security',
      'createCase' => 'Tạo trường hợp',
      'reply' => 'Trả lời',
      'caseDistribution' => 'Trường hợp phân phối',
      'replyEmailTemplate' => 'Mẫu email trả lời',
      'replyFromAddress' => 'Địa chỉ email trả lời',
      'replyToAddress' => 'Trả lời sang mail',
      'replyFromName' => 'Tên người gửi',
      'targetUserPosition' => 'Target User Position',
      'fetchSince' => 'Fetch Since',
      'addAllTeamUsers' => 'Cho tất cả thành viên trong nhóm',
      'teams' => 'Nhóm',
      'sentFolder' => 'Sent Folder',
      'storeSentEmails' => 'Store Sent Emails',
      'keepFetchedEmailsUnread' => 'Keep Fetched Emails Unread',
      'connectedAt' => 'Connected At',
      'excludeFromReply' => 'Exclude from Reply',
      'useImap' => 'Fetch Emails',
      'useSmtp' => 'Use SMTP',
      'smtpHost' => 'Máy chủ SMTP',
      'smtpPort' => 'Cổng SMTP',
      'smtpAuth' => 'SMTP Auth',
      'smtpSecurity' => 'SMTP Security',
      'smtpAuthMechanism' => 'SMTP Auth Mechanism',
      'smtpUsername' => 'Tên đăng nhập SMTP',
      'smtpPassword' => 'Mật khẩu SMTP',
      'fromName' => 'From Name',
      'smtpIsShared' => 'SMTP Is Shared',
      'smtpIsForMassEmail' => 'SMTP Is for Mass Email',
      'groupEmailFolder' => 'Group Email Folder',
      'isSystem' => 'Is System',
      'ssl' => 'SSL'
    ],
    'tooltips' => [
      'isSystem' => 'Is the system email account.',
      'useSmtp' => 'The ability to send emails.',
      'reply' => 'Notify email senders that their emails has been received.

 Only one email will be sent to a particular recipient during some period of time to prevent looping.',
      'createCase' => 'Tự động tạo trường hợp khi có email gửi đến.',
      'replyToAddress' => 'Specify email address of this mailbox to make responses come here.',
      'caseDistribution' => 'How cases will be assigned to. Assigned directly to the user or among the team.',
      'assignToUser' => 'User cases will be assigned to.',
      'team' => 'Team cases will be assigned to.',
      'teams' => 'Teams emails will be assigned to.',
      'targetUserPosition' => 'Users with specified position will be distributed with cases.',
      'addAllTeamUsers' => 'Emails will be appearing in Inbox of all users of specified teams.',
      'monitoredFolders' => 'Multiple folders should be separated by comma.',
      'smtpIsShared' => 'If checked then users will be able to send emails using this SMTP. Availability is controlled by Roles through the Group Email Account permission.',
      'smtpIsForMassEmail' => 'If checked then SMTP will be available for Mass Email.',
      'storeSentEmails' => 'Sent emails will be stored on the IMAP server.',
      'groupEmailFolder' => 'Put incoming emails in a group folder.',
      'excludeFromReply' => 'When replying on emails sent to this account\'s email address, its email address won\'t be added to CC.

Note that by enabling this parameter, the email address of this account will be exposed to users who have access to send Emails.'
    ],
    'links' => [
      'filters' => 'Bộ lọc',
      'emails' => 'Emails',
      'assignToUser' => 'Assign to User',
      'groupEmailFolder' => 'Group Email Folder'
    ],
    'options' => [
      'status' => [
        'Active' => 'Đang hoạt động',
        'Inactive' => 'Chưa hoạt động'
      ],
      'caseDistribution' => [
        '' => 'Trống',
        'Direct-Assignment' => 'Direct-Assignment',
        'Round-Robin' => 'Round-Robin',
        'Least-Busy' => 'Least-Busy'
      ],
      'smtpAuthMechanism' => [
        'plain' => 'PLAIN',
        'login' => 'LOGIN',
        'crammd5' => 'CRAM-MD5'
      ]
    ],
    'labels' => [
      'Create InboundEmail' => 'Tạo email đến',
      'IMAP' => 'IMAP',
      'Actions' => 'Hoạt động',
      'Main' => 'Chính'
    ],
    'messages' => [
      'couldNotConnectToImap' => 'Không thể kết nối với máy chủ IMAP',
      'imapNotConnected' => 'Could not connect to group [IMAP account](#InboundEmail/view/{id}).'
    ]
  ],
  'Integration' => [
    'fields' => [
      'enabled' => 'Đã bật',
      'clientId' => 'ID khách',
      'clientSecret' => 'Client Secret',
      'redirectUri' => 'Redirect URI',
      'apiKey' => 'API Key'
    ],
    'titles' => [
      'GoogleMaps' => 'Google Maps'
    ],
    'messages' => [
      'selectIntegration' => 'Select an integration from menu.',
      'noIntegrations' => 'No Integrations is available.'
    ],
    'help' => [
      'Google' => '**Obtain OAuth 2.0 credentials from the Google Developers Console.**

Visit [Google Developers Console](https://console.developers.google.com/project) to obtain OAuth 2.0 credentials such as a Client ID and Client Secret that are known to both Google and EspoCRM application.',
      'GoogleMaps' => 'Obtain API key [here](https://developers.google.com/maps/documentation/javascript/get-api-key).'
    ]
  ],
  'Job' => [
    'fields' => [
      'status' => 'Tình trạng',
      'executeTime' => 'Thực thi lúc',
      'executedAt' => 'Executed At',
      'startedAt' => 'Bắt đầu lúc',
      'attempts' => 'Attempts Left',
      'failedAttempts' => 'Failed Attempts',
      'serviceName' => 'Dịch vụ',
      'method' => 'Method (deprecated)',
      'methodName' => 'Phương thức',
      'scheduledJob' => 'Bộ định thời công việc',
      'scheduledJobJob' => 'Scheduled Job Name',
      'data' => 'Dữ liệu',
      'targetType' => 'Target Type',
      'targetId' => 'Target ID',
      'number' => 'Số',
      'queue' => 'Queue',
      'group' => 'Group',
      'className' => 'Class Name',
      'targetGroup' => 'Target Group',
      'job' => 'Job'
    ],
    'options' => [
      'status' => [
        'Pending' => 'Đang chờ',
        'Success' => 'Thành công',
        'Running' => 'Đang chạy',
        'Failed' => 'Lỗi'
      ]
    ]
  ],
  'LayoutManager' => [
    'fields' => [
      'width' => 'Chiều ngang (%)',
      'link' => 'Liên kết',
      'notSortable' => 'Not Sortable',
      'align' => 'Căn chỉnh',
      'panelName' => 'Panel Name',
      'style' => 'Giao diện',
      'sticked' => 'Sticked',
      'isMuted' => 'Muted color',
      'isLarge' => 'Cỡ chữ lớn',
      'hidden' => 'Hidden',
      'noLabel' => 'No Label',
      'dynamicLogicVisible' => 'Conditions making panel visible',
      'dynamicLogicStyled' => 'Conditions making style applied',
      'tabLabel' => 'Tab Label',
      'tabBreak' => 'Tab-Break',
      'noteText' => 'Note Text',
      'noteStyle' => 'Note Style'
    ],
    'options' => [
      'align' => [
        'left' => 'Trái',
        'right' => 'Phải'
      ],
      'style' => [
        'default' => 'Mặc định',
        'success' => 'Thành công',
        'danger' => 'Nguy hiểm',
        'info' => 'Thông tin',
        'warning' => 'Cảnh báo',
        'primary' => 'Chính'
      ]
    ],
    'labels' => [
      'New panel' => 'Khung mới',
      'Layout' => 'Bố cục'
    ],
    'messages' => [
      'alreadyExists' => 'Layout `{name}` already exists.',
      'createInfo' => 'Custom list layouts can be used by relationship panels.',
      'cantBeEmpty' => 'Layout can\'t be empty.',
      'fieldsIncompatible' => 'Fields can\'t be on the layout together: {fields}.'
    ],
    'tooltips' => [
      'noteText' => 'A text to be displayed in the panel. Markdown is supported.',
      'tabBreak' => 'A separate tab for the panel and all following panels until the next tab-break.',
      'noLabel' => 'Don\'t display a column label in the header.',
      'notSortable' => 'Disables the ability to sort by the column.',
      'width' => 'A column width. It\'s recommended to have one column without specified width, usually it should be the *Name* field.',
      'sticked' => 'The panel will be sticked to the panel above. No gap between panels.',
      'hiddenPanel' => 'Need to click \'show more\' to see the panel.',
      'panelStyle' => 'A color of the panel.',
      'dynamicLogicVisible' => 'If set, the panel will be hidden unless the condition is met.',
      'dynamicLogicStyled' => 'A color will be applied if a specific condition is met . The color is defined by the *Style* parameter.',
      'link' => 'If checked, then a field value will be displayed as a link pointing to the detail view of the record. Usually it is used for *Name* fields.'
    ]
  ],
  'LayoutSet' => [
    'fields' => [
      'layoutList' => 'Layouts'
    ],
    'labels' => [
      'Create LayoutSet' => 'Create Layout Set',
      'Edit Layouts' => 'Edit Layouts'
    ],
    'tooltips' => []
  ],
  'LeadCapture' => [
    'fields' => [
      'name' => 'Tên',
      'campaign' => 'Chiến dịch',
      'isActive' => 'Được kích hoạt',
      'subscribeToTargetList' => 'Subscribe to Target List',
      'subscribeContactToTargetList' => 'Subscribe Contact if exists',
      'targetList' => 'Danh sách mục tiêu',
      'fieldList' => 'Payload Fields',
      'optInConfirmation' => 'Double Opt-In',
      'optInConfirmationEmailTemplate' => 'Opt-in confirmation email template',
      'optInConfirmationLifetime' => 'Opt-in confirmation lifetime (hours)',
      'optInConfirmationSuccessMessage' => 'Text to show after opt-in confirmation',
      'leadSource' => 'Nguồn gốc khách tiềm năng',
      'apiKey' => 'API Key',
      'targetTeam' => 'Target Team',
      'exampleRequestMethod' => 'Method',
      'exampleRequestUrl' => 'URL',
      'exampleRequestPayload' => 'Payload',
      'exampleRequestHeaders' => 'Headers',
      'createLeadBeforeOptInConfirmation' => 'Create Lead before confirmation',
      'skipOptInConfirmationIfSubscribed' => 'Bỏ qua bước xác nhận nếu dữ liệu đã có trong danh sách mục tiêu',
      'smtpAccount' => 'SMTP Account',
      'inboundEmail' => 'Group Email Account',
      'duplicateCheck' => 'Duplicate Check',
      'phoneNumberCountry' => 'Telephone country code'
    ],
    'links' => [
      'targetList' => 'Danh sách mục tiêu',
      'campaign' => 'Chiến dịch',
      'optInConfirmationEmailTemplate' => 'Opt-in confirmation email template',
      'targetTeam' => 'Target Team',
      'inboundEmail' => 'Group Email Account',
      'logRecords' => 'Nhật ký'
    ],
    'labels' => [
      'Create LeadCapture' => 'Create Entry Point',
      'Generate New API Key' => 'Generate New API Key',
      'Request' => 'Request',
      'Confirm Opt-In' => 'Confirm Opt-In'
    ],
    'messages' => [
      'generateApiKey' => 'Create new API Key',
      'optInConfirmationExpired' => 'Opt-in confirmation link is expired.',
      'optInIsConfirmed' => 'Opt-in is confirmed.'
    ],
    'tooltips' => [
      'optInConfirmationSuccessMessage' => 'Markdown is supported.'
    ]
  ],
  'LeadCaptureLogRecord' => [
    'fields' => [
      'number' => 'Number',
      'data' => 'Dữ liệu',
      'target' => 'Target',
      'leadCapture' => 'Thu thập khách tiềm năng',
      'createdAt' => 'Entered At',
      'isCreated' => 'Is Lead Created'
    ],
    'links' => [
      'leadCapture' => 'Thu thập khách tiềm năng',
      'target' => 'Target'
    ]
  ],
  'MassAction' => [
    'fields' => [
      'status' => 'Status',
      'processedCount' => 'Processed Count'
    ],
    'options' => [
      'status' => [
        'Pending' => 'Pending',
        'Running' => 'Running',
        'Success' => 'Success',
        'Failed' => 'Failed'
      ]
    ],
    'messages' => [
      'infoText' => 'The mass action is being processed in idle by cron. It can take some time to finish. Closing this modal dialog won\'t affect the execution process.'
    ]
  ],
  'Note' => [
    'fields' => [
      'post' => 'Gửi',
      'attachments' => 'Đính kèm',
      'targetType' => 'Đối tượng',
      'teams' => 'Nhóm',
      'users' => 'Người dùng',
      'portals' => 'Cổng thông tin',
      'type' => 'Loại',
      'isGlobal' => 'Is Global',
      'isInternal' => 'Is Internal (for internal users)',
      'isPinned' => 'Is Pinned',
      'related' => 'Related',
      'createdByGender' => 'Created By Gender',
      'data' => 'Dữ liệu',
      'number' => 'Số'
    ],
    'filters' => [
      'all' => 'Tất cả',
      'posts' => 'Bài viết',
      'updates' => 'Cập nhật',
      'activity' => 'Activity'
    ],
    'options' => [
      'targetType' => [
        'self' => 'tới tôi',
        'users' => 'to particular user(s)',
        'teams' => 'to particular team(s)',
        'all' => 'to all internal users',
        'portals' => 'to portal users'
      ],
      'type' => [
        'Post' => 'Post',
        'Create' => 'Create',
        'CreateRelated' => 'Create Related',
        'Update' => 'Update',
        'Status' => 'Status',
        'Assign' => 'Assign',
        'Relate' => 'Relate',
        'Unrelate' => 'Unrelate',
        'EmailReceived' => 'Email Received',
        'EmailSent' => 'Email Sent'
      ]
    ],
    'labels' => [
      'View Posts' => 'View Posts',
      'View Activity' => 'View Activity',
      'Pin' => 'Pin',
      'Unpin' => 'Unpin',
      'Pinned' => 'Pinned'
    ],
    'messages' => [
      'writeMessage' => 'Để lại lời nhắn của bạn tại đây',
      'pinnedMaxCountExceeded' => 'Cannot pin more notes. Max allowed number is {count}.'
    ],
    'links' => [
      'portals' => 'Portals',
      'attachments' => 'Attachments',
      'superParent' => 'Super Parent',
      'related' => 'Related'
    ]
  ],
  'PhoneNumber' => [
    'fields' => [
      'type' => 'Type',
      'optOut' => 'Opted Out',
      'invalid' => 'Không hợp lệ',
      'numeric' => 'Numeric Value'
    ],
    'presetFilters' => [
      'orphan' => 'Orphan'
    ]
  ],
  'Portal' => [
    'fields' => [
      'name' => 'Tên',
      'logo' => 'Logo',
      'url' => 'URL',
      'portalRoles' => 'Quyền',
      'isActive' => 'Được kích hoạt',
      'isDefault' => 'Mặc định',
      'tabList' => 'Tab List',
      'quickCreateList' => 'Danh sách tạo nhanh',
      'companyLogo' => 'Logo',
      'theme' => 'Chủ đề',
      'language' => 'Ngôn ngữ',
      'dashboardLayout' => 'Bố cục trang tổng quan',
      'dateFormat' => 'Định dạng ngày',
      'timeFormat' => 'Định dạng giờ',
      'timeZone' => 'Múi giờ',
      'weekStart' => 'Ngày đầu tiên của tuần',
      'defaultCurrency' => 'Tiền tệ mặc định',
      'layoutSet' => 'Layout Set',
      'authenticationProvider' => 'Authentication Provider',
      'customUrl' => 'Tùy chỉnh URL',
      'customId' => 'Custom ID',
      'authTokenLifetime' => 'Auth Token Lifetime (hours)',
      'authTokenMaxIdleTime' => 'Auth Token Max Idle Time (hours)'
    ],
    'links' => [
      'users' => 'Người dùng',
      'portalRoles' => 'Quyền',
      'layoutSet' => 'Layout Set',
      'authenticationProvider' => 'Authentication Provider',
      'notes' => 'Ghi chú',
      'articles' => 'Tài liệu kiến thức cơ bản'
    ],
    'tooltips' => [
      'layoutSet' => 'Provides the ability to have layouts that differ from standard ones.',
      'portalRoles' => 'Specified Portal Roles will be applied to all users of this portal.'
    ],
    'labels' => [
      'Create Portal' => 'Tạo Portal',
      'User Interface' => 'Giao diện người dùng',
      'General' => 'Tổng quan',
      'Settings' => 'Cài đặt'
    ]
  ],
  'PortalRole' => [
    'fields' => [
      'exportPermission' => 'Quyền xuất dữ liệu',
      'massUpdatePermission' => 'Mass Update Permission',
      'data' => 'Data',
      'fieldData' => 'Field Data'
    ],
    'links' => [
      'users' => 'Tài khoản'
    ],
    'labels' => [
      'Access' => 'Truy cập',
      'Create PortalRole' => 'Create Portal Role',
      'Scope Level' => 'Scope Level',
      'Field Level' => 'Field Level'
    ]
  ],
  'PortalUser' => [
    'labels' => [
      'Create PortalUser' => 'Create Portal User'
    ]
  ],
  'Preferences' => [
    'fields' => [
      'dateFormat' => 'Định dạng ngày',
      'timeFormat' => 'Định dạng thời gian',
      'timeZone' => 'Múi giờ',
      'weekStart' => 'Ngày đầu tiên của tuần',
      'thousandSeparator' => 'Dấu phân cách hàng nghìn',
      'decimalMark' => 'Dấu phân cách thập phân',
      'defaultCurrency' => 'Tiền tệ mặc định',
      'currencyList' => 'Danh sách tiền tệ',
      'language' => 'Ngôn ngữ',
      'exportDelimiter' => 'Xuất dấu phân cách',
      'receiveAssignmentEmailNotifications' => 'Email notifications upon assignment',
      'receiveMentionEmailNotifications' => 'Email notifications about mentions in posts',
      'receiveStreamEmailNotifications' => 'Email notifications about posts and status updates',
      'assignmentNotificationsIgnoreEntityTypeList' => 'In-app assignment notifications',
      'assignmentEmailNotificationsIgnoreEntityTypeList' => 'Email assignment notifications',
      'autoFollowEntityTypeList' => 'Tự động theo dõi toàn bộ',
      'signature' => 'Chữ ký email',
      'dashboardTabList' => 'Tab List',
      'defaultReminders' => 'Lời nhắc mặc định',
      'defaultRemindersTask' => 'Default Reminders for Tasks',
      'theme' => 'Chủ đề',
      'useCustomTabList' => 'Custom Tab List',
      'addCustomTabs' => 'Add Custom Tabs',
      'tabList' => 'Tab List',
      'emailReplyToAllByDefault' => 'Email Reply to all by default',
      'dashboardLayout' => 'Dashboard Layout',
      'dashboardLocked' => 'Lock Dashboard',
      'emailReplyForceHtml' => 'Email Reply in HTML',
      'doNotFillAssignedUserIfNotRequired' => 'Do not pre-fill assigned user on record creation',
      'followEntityOnStreamPost' => 'Tự động theo dõi danh mục sau khi đăng tại Thông tin cập nhật',
      'followCreatedEntities' => 'Tự động theo dõi mục đã được tạo',
      'followCreatedEntityTypeList' => 'Auto-follow created records of specific entity types',
      'emailUseExternalClient' => 'Use an external email client',
      'textSearchStoringDisabled' => 'Disable text filter storing',
      'calendarSlotDuration' => 'Calendar Slot Duration',
      'calendarScrollHour' => 'Calendar Scroll to Hour',
      'smtpServer' => 'Máy chủ',
      'smtpPort' => 'Cổng',
      'smtpAuth' => 'Truy cập',
      'smtpSecurity' => 'Bảo mật',
      'smtpUsername' => 'Tên đăng nhập',
      'smtpPassword' => 'Mật khẩu',
      'smtpEmailAddress' => 'Địa chỉ email'
    ],
    'links' => [],
    'options' => [
      'weekStart' => [
        0 => 'Chủ nhật',
        1 => 'Thứ 2'
      ]
    ],
    'labels' => [
      'Notifications' => 'Thông báo',
      'User Interface' => 'Giao diện người dùng',
      'Misc' => 'Misc',
      'Locale' => 'Locale',
      'Reset Dashboard to Default' => 'Reset Dashboard to Default'
    ],
    'tooltips' => [
      'addCustomTabs' => 'If checked, custom tabs will be appended to default tabs. Otherwise, custom tabs will be used instead of default tabs.',
      'autoFollowEntityTypeList' => 'Automatically follow ALL new records (created by any user) of the selected entity types. To be able to see information in the stream and receive notifications about all records in the system.',
      'doNotFillAssignedUserIfNotRequired' => 'When create record assigned user won\'t be filled with own user unless the field is required.',
      'followCreatedEntities' => 'When create new records, they will be automatically followed even if assigned to another user.',
      'followCreatedEntityTypeList' => 'When create new records of selected entity types, they will be followed automatically even if assigned to another user.'
    ],
    'tabFields' => [
      'label' => 'Label',
      'iconClass' => 'Icon',
      'color' => 'Color'
    ]
  ],
  'Role' => [
    'fields' => [
      'name' => 'Tên',
      'roles' => 'Vai trò',
      'assignmentPermission' => 'Assignment Permission',
      'userPermission' => 'User Permission',
      'messagePermission' => 'Message Permission',
      'portalPermission' => 'Phân quyền cổng thông tin',
      'groupEmailAccountPermission' => 'Group Email Account Permission',
      'exportPermission' => 'Quyền xuất dữ liệu',
      'massUpdatePermission' => 'Mass Update Permission',
      'followerManagementPermission' => 'Follower Management Permission',
      'dataPrivacyPermission' => 'Data Privacy Permission',
      'auditPermission' => 'Audit Permission',
      'mentionPermission' => 'Mention Permission',
      'data' => 'Data',
      'fieldData' => 'Field Data'
    ],
    'links' => [
      'users' => 'Người dùng',
      'teams' => 'Nhóm'
    ],
    'tooltips' => [
      'messagePermission' => 'Allows to send messages to other users.

* all – can send to all
* team – can send only to teammates
* no – cannot send',
      'assignmentPermission' => 'Allows to assign records to other users.

* all – no restriction
* team – can assign only to teammates
* no – can assign only to self',
      'userPermission' => 'Allows view activities, calendar and stream of other users.

* all – can view all
* team – can view activities of teammates only
* no – can\'t view',
      'portalPermission' => 'Access to portal information, the ability to post messages to portal users.',
      'groupEmailAccountPermission' => 'Access to group email accounts, the ability to send emails from group SMTP.',
      'exportPermission' => 'Allows to export records.',
      'massUpdatePermission' => 'The ability to perform mass update of records.',
      'followerManagementPermission' => 'Allows to manage followers of specific records.',
      'dataPrivacyPermission' => 'Allows to view and erase personal data.',
      'auditPermission' => 'Allows to view the audit log.',
      'mentionPermission' => 'Allows to mention other users in the Stream.

* all – can mention all
* team – can mention only teammates
* no – cannot mention'
    ],
    'labels' => [
      'Access' => 'Truy cập',
      'Create Role' => 'Tạo vai trò',
      'Scope Level' => 'Scope Level',
      'Field Level' => 'Field Level'
    ],
    'options' => [
      'accessList' => [
        'not-set' => 'chưa đặt',
        'enabled' => 'kích hoạt',
        'disabled' => 'tắt'
      ],
      'levelList' => [
        'all' => 'tất cả',
        'team' => 'nhóm',
        'account' => 'tài khoản',
        'contact' => 'liên hệ',
        'own' => 'sở hữu',
        'no' => 'không',
        'yes' => 'đồng ý',
        'not-set' => 'chưa đặt'
      ]
    ],
    'actions' => [
      'read' => 'Đọc',
      'edit' => 'Sửa',
      'delete' => 'Xóa',
      'stream' => 'Thông tin cập nhật',
      'create' => 'Tạo'
    ],
    'messages' => [
      'changesAfterClearCache' => 'All changes in an access control will be applied after cache is cleared.'
    ]
  ],
  'ScheduledJob' => [
    'fields' => [
      'name' => 'Tên',
      'status' => 'Trạng thái',
      'job' => 'Công việc',
      'scheduling' => 'Scheduling (crontab notation)'
    ],
    'links' => [
      'log' => 'Nhật ký'
    ],
    'labels' => [
      'As often as possible' => 'As often as possible',
      'Create ScheduledJob' => 'Lên lịch công việc'
    ],
    'options' => [
      'job' => [
        'Cleanup' => 'Dọn dẹp',
        'CheckInboundEmails' => 'Kiểm tra hộp thư đến',
        'CheckEmailAccounts' => 'Check Personal Email Accounts',
        'SendEmailReminders' => 'Gửi email nhắc hẹn',
        'AuthTokenControl' => 'Auth Token Control',
        'SendEmailNotifications' => 'Send Email Notifications',
        'CheckNewVersion' => 'Kiểm tra phiên bản mới',
        'ProcessWebhookQueue' => 'Process Webhook Queue',
        'ProcessMassEmail' => 'Send Mass Emails',
        'ControlKnowledgeBaseArticleStatus' => 'Control Knowledge Base Article Status'
      ],
      'cronSetup' => [
        'linux' => 'Note: Add this line to the crontab file to run Espo Scheduled Jobs:',
        'mac' => 'Note: Add this line to the crontab file to run Espo Scheduled Jobs:',
        'windows' => 'Note: Create a batch file with the following commands to run Espo Scheduled Jobs using Windows Scheduled Tasks:',
        'default' => 'Note: Add this command to Cron Job (Scheduled Task):'
      ],
      'status' => [
        'Active' => 'Đang hoạt động',
        'Inactive' => 'Chưa hoạt động'
      ]
    ],
    'tooltips' => [
      'scheduling' => 'Crontab notation. Defines frequency of job runs.

`*/5 * * * *` - every 5 minutes

`0 */2 * * *` - every 2 hours

`30 1 * * *` - at 01:30 once a day

`0 0 1 * *` - on the first day of the month'
    ]
  ],
  'ScheduledJobLogRecord' => [
    'fields' => [
      'status' => 'Trạng thái',
      'executionTime' => 'Thời gian hoạt động',
      'target' => 'Đối tượng nhắm đến'
    ]
  ],
  'Settings' => [
    'fields' => [
      'useCache' => 'Dùng Cache',
      'dateFormat' => 'Định dạng ngày',
      'timeFormat' => 'Định dạng thời gian',
      'timeZone' => 'Múi giờ',
      'weekStart' => 'Ngày đầu tiên của tuần',
      'thousandSeparator' => 'Dấu phân cách hàng nghìn',
      'decimalMark' => 'Dấu phân cách thập phân',
      'defaultCurrency' => 'Tiền tệ mặc định',
      'baseCurrency' => 'Đơn vị tiền tệ',
      'currencyRates' => 'Rate Values',
      'currencyList' => 'Danh sách tiền tệ',
      'language' => 'Ngôn ngữ',
      'companyLogo' => 'Logo công ty',
      'smsProvider' => 'SMS Provider',
      'outboundSmsFromNumber' => 'SMS From Number',
      'smtpServer' => 'Máy chủ',
      'smtpPort' => 'Cổng',
      'smtpAuth' => 'Truy cập',
      'smtpSecurity' => 'Bảo mật',
      'smtpUsername' => 'Tên đăng nhập',
      'emailAddress' => 'Email',
      'smtpPassword' => 'Mật khẩu',
      'outboundEmailFromName' => 'tên người gửi',
      'outboundEmailFromAddress' => 'Địa chỉ gửi',
      'outboundEmailIsShared' => 'Được chia sẻ',
      'emailAddressLookupEntityTypeList' => 'Email address look-up scopes',
      'emailAddressSelectEntityTypeList' => 'Email address select scopes',
      'recordsPerPage' => 'Số bản ghi trên mỗi trang',
      'recordsPerPageSmall' => 'Số lượng kết quả trên 1 trang (chế độ xem nhỏ)',
      'recordsPerPageSelect' => 'Records Per Page (Select)',
      'recordsPerPageKanban' => 'Records Per Page (Kanban)',
      'tabList' => 'Danh sách Tab',
      'quickCreateList' => 'Tạo nhanh danh sách',
      'exportDelimiter' => 'Xuất dấu phân cách',
      'globalSearchEntityList' => 'Global Search Entity List',
      'authenticationMethod' => 'Phương thức xác thực',
      'ldapHost' => 'Máy chủ',
      'ldapPort' => 'Cổng',
      'ldapAuth' => 'Truy cập',
      'ldapUsername' => 'Tên đăng nhập',
      'ldapPassword' => 'Mật khẩu',
      'ldapBindRequiresDn' => 'Yêu cầu Dn',
      'ldapBaseDn' => 'Dn gốc',
      'ldapAccountCanonicalForm' => 'Account Canonical Form',
      'ldapAccountDomainName' => 'Tên miền tài khoản',
      'ldapTryUsernameSplit' => 'Thử lại',
      'ldapPortalUserLdapAuth' => 'Use LDAP Authentication for Portal Users',
      'ldapCreateEspoUser' => 'Tạo người dùng',
      'ldapSecurity' => 'Bảo mật',
      'ldapUserLoginFilter' => 'Bộ lọc đăng nhập',
      'ldapAccountDomainNameShort' => 'Tên miền tài khoản',
      'ldapOptReferrals' => 'Được giới thiệu',
      'ldapUserNameAttribute' => 'Username Attribute',
      'ldapUserObjectClass' => 'User ObjectClass',
      'ldapUserTitleAttribute' => 'User Title Attribute',
      'ldapUserFirstNameAttribute' => 'User First Name Attribute',
      'ldapUserLastNameAttribute' => 'Thuộc tính Họ người dùng',
      'ldapUserEmailAddressAttribute' => 'User Email Address Attribute',
      'ldapUserTeams' => 'User Teams',
      'ldapUserDefaultTeam' => 'User Default Team',
      'ldapUserPhoneNumberAttribute' => 'User Phone Number Attribute',
      'ldapPortalUserPortals' => 'Default Portals for a Portal User',
      'ldapPortalUserRoles' => 'Default Roles for a Portal User',
      'exportDisabled' => 'Khóa chức năng Xuất dữ liệu (chỉ người quản trị hệ thống mới có quyền)',
      'assignmentNotificationsEntityList' => 'Entities to notify about upon assignment',
      'assignmentEmailNotifications' => 'Notifications upon assignment',
      'assignmentEmailNotificationsEntityList' => 'Assignment email notifications scopes',
      'streamEmailNotifications' => 'Notifications about updates in Stream for internal users',
      'portalStreamEmailNotifications' => 'Notifications about updates in Stream for portal users',
      'streamEmailNotificationsEntityList' => 'Stream email notifications scopes',
      'streamEmailNotificationsTypeList' => 'What to notify about',
      'emailNotificationsDelay' => 'Delay of email notifications (in seconds)',
      'b2cMode' => 'Chế độ B2C',
      'avatarsDisabled' => 'Tắt Avatars',
      'followCreatedEntities' => 'Theo dõi mục đã tạo',
      'displayListViewRecordCount' => 'Hiển thị tổng số lượng kết quả (ở chế độ xem dánh sách)',
      'theme' => 'Chủ đề',
      'userThemesDisabled' => 'Không cho phép người dùng thay đổi chủ đề',
      'attachmentUploadMaxSize' => 'Upload Max Size (Mb)',
      'attachmentUploadChunkSize' => 'Upload Chunk Size (Mb)',
      'emailMessageMaxSize' => 'Kích thước email tối đa (Mb)',
      'massEmailMaxPerHourCount' => 'Max number of emails sent per hour',
      'massEmailMaxPerBatchCount' => 'Max number of emails sent per batch',
      'personalEmailMaxPortionSize' => 'Max email portion size for personal account fetching',
      'inboundEmailMaxPortionSize' => 'Max email portion size for group account fetching',
      'maxEmailAccountCount' => 'Max number of personal email accounts per user',
      'authTokenLifetime' => 'Auth Token Lifetime (hours)',
      'authTokenMaxIdleTime' => 'Auth Token Max Idle Time (hours)',
      'dashboardLayout' => 'Dashboard Layout (default)',
      'siteUrl' => 'Địa chỉ trang',
      'addressPreview' => 'Xem trước địa chỉ',
      'addressFormat' => 'Định dạng địa chỉ',
      'personNameFormat' => 'Person Name Format',
      'notificationSoundsDisabled' => 'Tắt thông báo bằng âm thanh',
      'newNotificationCountInTitle' => 'Display new notification number in page title',
      'applicationName' => 'Tên ứng dụng',
      'calendarEntityList' => 'Calendar Entity List',
      'busyRangesEntityList' => 'Free/Busy Entity List',
      'mentionEmailNotifications' => 'Send email notifications about mentions in posts',
      'massEmailDisableMandatoryOptOutLink' => 'Disable mandatory opt-out link',
      'massEmailOpenTracking' => 'Email Open Tracking',
      'massEmailVerp' => 'Use VERP',
      'activitiesEntityList' => 'Activities Entity List',
      'historyEntityList' => 'History Entity List',
      'currencyFormat' => 'Định dạng tiền tệ',
      'currencyDecimalPlaces' => 'Currency Decimal Places',
      'aclAllowDeleteCreated' => 'Cho phép xóa bỏ mục đã tạo',
      'adminNotifications' => 'Thông báo từ hệ thống lên giao diện của người quản trị',
      'adminNotificationsNewVersion' => 'Show notification when new EspoCRM version is available',
      'adminNotificationsNewExtensionVersion' => 'Show notification when new versions of extensions are available',
      'textFilterUseContainsForVarchar' => 'Use \'contains\' operator when filtering varchar fields',
      'phoneNumberNumericSearch' => 'Numeric phone number search',
      'phoneNumberInternational' => 'International phone numbers',
      'phoneNumberExtensions' => 'Phone number extensions',
      'phoneNumberPreferredCountryList' => 'Preferred telephone country codes',
      'authTokenPreventConcurrent' => 'Only one auth token per user',
      'scopeColorsDisabled' => 'Disable scope colors',
      'tabColorsDisabled' => 'Disable tab colors',
      'tabIconsDisabled' => 'Không sử dụng icon',
      'emailAddressIsOptedOutByDefault' => 'Mark new email addresses as opted-out',
      'outboundEmailBccAddress' => 'BCC address for external clients',
      'cleanupDeletedRecords' => 'Clean up deleted records',
      'addressCityList' => 'Address City Autocomplete List',
      'addressStateList' => 'Address State Autocomplete List',
      'fiscalYearShift' => 'Tháng đầu tiên của năm',
      'jobRunInParallel' => 'Jobs Run in Parallel',
      'jobMaxPortion' => 'Jobs Max Portion',
      'jobPoolConcurrencyNumber' => 'Jobs Pool Concurrency Number',
      'jobForceUtc' => 'Force UTC Time Zone',
      'daemonInterval' => 'Daemon Interval',
      'daemonMaxProcessNumber' => 'Daemon Max Process Number',
      'daemonProcessTimeout' => 'Daemon Process Timeout',
      'cronDisabled' => 'Tắt Cron',
      'maintenanceMode' => 'Chế độ bảo trì',
      'useWebSocket' => 'Sử dụng WebSocket',
      'passwordRecoveryDisabled' => 'Không cho phép quên mật khẩu (đối với thành viên)',
      'passwordRecoveryForAdminDisabled' => 'Không cho phép quên mật khẩu (đối với quản trị viên)',
      'passwordRecoveryForInternalUsersDisabled' => 'Disable password recovery for internal users',
      'passwordRecoveryNoExposure' => 'Prevent email address exposure on password recovery form',
      'passwordGenerateLength' => 'Chiều dài của mật khẩu tạo tự động',
      'passwordStrengthLength' => 'Minimum password length',
      'passwordStrengthLetterCount' => 'Number of letters required in password',
      'passwordStrengthNumberCount' => 'Number of digits required in password',
      'passwordStrengthBothCases' => 'Password must contain letters of both upper and lower case',
      'auth2FA' => 'Enable 2-Factor Authentication',
      'auth2FAForced' => 'Force regular users to set up 2FA',
      'auth2FAMethodList' => 'Available 2FA methods',
      'auth2FAInPortal' => 'Allow 2FA in portals',
      'workingTimeCalendar' => 'Working Time Calendar',
      'oidcClientId' => 'OIDC Client ID',
      'oidcClientSecret' => 'OIDC Client Secret',
      'oidcAuthorizationRedirectUri' => 'OIDC Authorization Redirect URI',
      'oidcAuthorizationEndpoint' => 'OIDC Authorization Endpoint',
      'oidcTokenEndpoint' => 'OIDC Token Endpoint',
      'oidcJwksEndpoint' => 'OIDC JSON Web Key Set Endpoint',
      'oidcJwtSignatureAlgorithmList' => 'OIDC JWT Allowed Signature Algorithms',
      'oidcScopes' => 'OIDC Scopes',
      'oidcGroupClaim' => 'OIDC Group Claim',
      'oidcCreateUser' => 'OIDC Create User',
      'oidcUsernameClaim' => 'OIDC Username Claim',
      'oidcTeams' => 'OIDC Teams',
      'oidcSync' => 'OIDC Sync',
      'oidcSyncTeams' => 'OIDC Sync Teams',
      'oidcFallback' => 'OIDC Fallback Login',
      'oidcAllowRegularUserFallback' => 'OIDC Allow fallback login for regular users',
      'oidcAllowAdminUser' => 'OIDC Allow OIDC login for admin users',
      'oidcLogoutUrl' => 'OIDC Logout URL',
      'oidcAuthorizationPrompt' => 'OIDC Authorization Prompt',
      'pdfEngine' => 'PDF Engine',
      'quickSearchFullTextAppendWildcard' => 'Append wildcard in quick search',
      'authIpAddressCheck' => 'Restrict access by IP address',
      'authIpAddressWhitelist' => 'IP Address Whitelist',
      'authIpAddressCheckExcludedUsers' => 'Users excluded from check'
    ],
    'options' => [
      'authenticationMethod' => [
        'Oidc' => 'OIDC'
      ],
      'currencyFormat' => [
        1 => '10 USD',
        2 => '$10',
        3 => '10 $'
      ],
      'personNameFormat' => [
        'firstLast' => 'First Last',
        'lastFirst' => 'Last First',
        'firstMiddleLast' => 'First Middle Last',
        'lastFirstMiddle' => 'Last First Middle'
      ],
      'streamEmailNotificationsTypeList' => [
        'Post' => 'Bài viết',
        'Status' => 'Tình trạng cập nhật',
        'EmailReceived' => 'Thư đã nhận'
      ],
      'auth2FAMethodList' => [
        'Totp' => 'TOTP',
        'Email' => 'Email',
        'Sms' => 'SMS'
      ]
    ],
    'tooltips' => [
      'authIpAddressCheckExcludedUsers' => 'Users that will be able to log in regardless whether their IP address is in the whitelist.',
      'authIpAddressWhitelist' => 'A list of IP addresses or ranges in CIDR notation.

Portals are not affected by restriction.',
      'workingTimeCalendar' => 'A working time calendar that will be applied to all users by default.',
      'displayListViewRecordCount' => 'A total number of records will be shown on the list view.',
      'currencyList' => 'What currencies will be available in the system.',
      'activitiesEntityList' => 'What records will be available in the Activities panel.',
      'historyEntityList' => 'What records will be available in the History panel.',
      'calendarEntityList' => 'What records will be available in the Calendar.',
      'addressStateList' => 'State suggestions for address fields.',
      'addressCityList' => 'City suggestions for address fields.',
      'addressCountryList' => 'Country suggestions for address fields.',
      'exportDisabled' => 'Người dùng sẽ không thể xuất bản ghi. Chỉ dành cho quyền quản trị viên',
      'globalSearchEntityList' => 'What records can be searched with Global Search.',
      'siteUrl' => 'A URL of this EspoCRM instance. You need to change it if you move to another domain.',
      'useCache' => 'Not recommended to disable, unless for development purpose.',
      'useWebSocket' => 'WebSocket enables two-way interactive communication between a server and a browser. Requires setting up the WebSocket daemon on your server. Check the documentation for more info.',
      'passwordRecoveryForInternalUsersDisabled' => 'Only portal users will be able to recover password.',
      'passwordRecoveryNoExposure' => 'It won\'t be possible to determine whether a specific email address is registered in the system.',
      'emailAddressLookupEntityTypeList' => 'For email address autocomplete.',
      'emailAddressSelectEntityTypeList' => 'Entity types available when searching for an email address from a modal.',
      'emailNotificationsDelay' => 'A message can be edited within the specified timeframe before the notification is sent.',
      'outboundEmailFromAddress' => 'The system email address.',
      'smtpServer' => 'If empty, then Group Email Account with the corresponding email address will be used.',
      'busyRangesEntityList' => 'What will be taken into account when showing busy time ranges in scheduler & timeline.',
      'massEmailVerp' => 'Variable envelope return path. For better handling of bounced messages. Make sure that your SMTP provider supports it.',
      'recordsPerPage' => 'Number of records initially displayed in list views.',
      'recordsPerPageSmall' => 'Number of records initially displayed in relationship panels.',
      'recordsPerPageSelect' => 'Number of records initially displayed when selecting records.',
      'recordsPerPageKanban' => 'Number of records initially displayed in kanban columns.',
      'outboundEmailIsShared' => 'Allow users to send emails from this address.',
      'followCreatedEntities' => 'Users will automatically follow records they created.',
      'emailMessageMaxSize' => 'All inbound emails exceeding a specified size will be fetched w/o body and attachments.',
      'authTokenLifetime' => 'Defines how long tokens can exist.
0 - means no expiration.',
      'authTokenMaxIdleTime' => 'Defines how long since the last access tokens can exist.
0 - means no expiration.',
      'userThemesDisabled' => 'If checked then users won\'t be able to select another theme.',
      'ldapUsername' => 'The full system user DN which allows to search other users. E.g. "CN=LDAP System User,OU=users,OU=espocrm, DC=test,DC=lan".',
      'ldapPassword' => 'The password to access to LDAP server.',
      'ldapAuth' => 'Access credentials for the LDAP server.',
      'ldapUserNameAttribute' => 'The attribute to identify the user. 
E.g. "userPrincipalName" or "sAMAccountName" for Active Directory, "uid" for OpenLDAP.',
      'ldapUserObjectClass' => 'ObjectClass attribute for searching users. E.g. "person" for AD, "inetOrgPerson" for OpenLDAP.',
      'ldapAccountCanonicalForm' => 'The type of your account canonical form. There are 4 options:

- \'Dn\' - the form in the format \'CN=tester,OU=espocrm,DC=test, DC=lan\'.

- \'Username\' - the form \'tester\'.

- \'Backslash\' - the form \'COMPANY\\tester\'.

- \'Principal\' - the form \'tester@company.com\'.',
      'ldapBindRequiresDn' => 'The option to format the username in the DN form.',
      'ldapBaseDn' => 'The default base DN used for searching users. E.g. "OU=users,OU=espocrm,DC=test, DC=lan".',
      'ldapTryUsernameSplit' => 'The option to split a username with the domain.',
      'ldapOptReferrals' => 'if referrals should be followed to the LDAP client.',
      'ldapPortalUserLdapAuth' => 'Allow portal users to use LDAP authentication instead of Espo authentication.',
      'ldapCreateEspoUser' => 'This option allows EspoCRM to create a user from the LDAP.',
      'ldapUserFirstNameAttribute' => 'LDAP attribute which is used to determine the user first name. E.g. "givenname".',
      'ldapUserLastNameAttribute' => 'Thuộc tính LDAP được dùng để quyết định Họ của người dùng. Chẳng hạn như "sn"',
      'ldapUserTitleAttribute' => 'LDAP attribute which is used to determine the user title. E.g. "title".',
      'ldapUserEmailAddressAttribute' => 'LDAP attribute which is used to determine the user email address. E.g. "mail".',
      'ldapUserPhoneNumberAttribute' => 'LDAP attribute which is used to determine the user phone number. E.g. "telephoneNumber".',
      'ldapUserLoginFilter' => 'The filter which allows to restrict users who able to use EspoCRM. E.g. "memberOf=CN=espoGroup, OU=groups,OU=espocrm, DC=test,DC=lan".',
      'ldapAccountDomainName' => 'The domain which is used for authorization to LDAP server.',
      'ldapAccountDomainNameShort' => 'The short domain which is used for authorization to LDAP server.',
      'ldapUserTeams' => 'Teams for created user. For more, see user profile.',
      'ldapUserDefaultTeam' => 'Default team for created user. For more, see user profile.',
      'ldapPortalUserPortals' => 'Default Portals for created Portal User',
      'ldapPortalUserRoles' => 'Default Roles for created Portal User',
      'b2cMode' => 'By default EspoCRM is adapted for B2B. You can switch it to B2C.',
      'currencyDecimalPlaces' => 'Number of decimal places. If empty then all nonempty decimal places will be displayed.',
      'aclStrictMode' => 'Enabled: Access to scopes will be forbidden if it\'s not specified in roles.

Disabled: Access to scopes will be allowed if it\'s not specified in roles.',
      'aclAllowDeleteCreated' => 'Users will be able to remove records they created even if they don\'t have a delete access.',
      'textFilterUseContainsForVarchar' => 'If not checked then \'starts with\' operator is used. You can use the wildcard \'%\'.',
      'streamEmailNotificationsEntityList' => 'Email notifications about stream updates of followed records. Users will receive email notifications only for specified entity types.',
      'authTokenPreventConcurrent' => 'Users won\'t be able to be logged in on multiple devices simultaneously.',
      'emailAddressIsOptedOutByDefault' => 'When creating new record email address will be marked as opted-out.',
      'cleanupDeletedRecords' => 'Removed records will be deleted from database after a while.',
      'jobRunInParallel' => 'Jobs will be executed in parallel processes.',
      'jobPoolConcurrencyNumber' => 'Max number of processes run simultaneously.',
      'jobMaxPortion' => 'Max number of jobs processed per one execution.',
      'jobForceUtc' => 'Use the UTC time zone for scheduled jobs. Otherwise, the time zone set in settings will be used.',
      'daemonInterval' => 'Interval between process cron runs in seconds.',
      'daemonMaxProcessNumber' => 'Max number of cron processes run simultaneously.',
      'daemonProcessTimeout' => 'Max execution time (in seconds) allocated for a single cron process.',
      'cronDisabled' => 'Cron sẽ không được chạy',
      'maintenanceMode' => 'Only administrators will have access to the system.',
      'oidcGroupClaim' => 'A claim to use for team mapping.',
      'oidcFallback' => 'Allow login by username/password.',
      'oidcCreateUser' => 'Create a new user in Espo when no matching user found.',
      'oidcSync' => 'Sync user data (on every login).',
      'oidcSyncTeams' => 'Sync user teams (on every login).',
      'oidcUsernameClaim' => 'A claim to use for a username (for user matching and creation).',
      'oidcTeams' => 'Espo teams mapped against groups/teams/roles of the identity provider. Teams with an empty mapping value will be always assigned to a user (when creating or syncing).',
      'oidcLogoutUrl' => 'An URL the browser will redirect to after logging out from Espo. Intended for clearing the session information in the browser and doing logging out on the provider side. Usually the URL contains a redirect-URL parameter, to return back to Espo.

Available placeholders:
* `{siteUrl}`
* `{clientId}`',
      'quickSearchFullTextAppendWildcard' => 'Append a wildcard to an autocomplete search query when Full-Text search is enabled. Reduces search performance.'
    ],
    'labels' => [
      'Group Tab' => 'Group Tab',
      'Divider' => 'Divider',
      'System' => 'Hệ thống',
      'Locale' => 'Bản địa hóa',
      'Search' => 'Tìm kiếm',
      'Misc' => 'Thông tin khác',
      'SMTP' => 'SMTP',
      'General' => 'General',
      'Phone Numbers' => 'Phone Numbers',
      'Navbar' => 'Navbar',
      'Dashboard' => 'Dashboard',
      'Configuration' => 'Tùy chỉnh',
      'In-app Notifications' => 'Thông báo của ứng dụng',
      'Email Notifications' => 'Thông báo bằng email',
      'Currency Settings' => 'Cài đặt tiền tệ',
      'Currency Rates' => 'Currency Rates',
      'Mass Email' => 'Mass Email',
      'Test Connection' => 'Kiểm tra kết nối',
      'Connecting' => 'Đang kết nối...',
      'Activities' => 'Hoạt động',
      'Admin Notifications' => 'Thông báo quản trị viên',
      'Passwords' => 'Mật khẩu',
      '2-Factor Authentication' => 'Xác minh 2 bước`',
      'Attachments' => 'Attachments',
      'IdP Group' => 'IdP Group',
      'Access' => 'Access',
      'Strength' => 'Strength',
      'Recovery' => 'Recovery'
    ],
    'messages' => [
      'ldapTestConnection' => 'The connection successfully established.'
    ]
  ],
  'Stream' => [
    'messages' => [
      'infoMention' => 'Gõ **@username** để nhắc đến thành viên trong bài đăng',
      'infoSyntax' => 'Available markdown syntax',
      'couldNotAddFollowerUserHasNoAccessToStream' => 'Could not add the user \'{userName}\' to the followers. The user does not have \'stream\' access to the record.'
    ],
    'syntaxItems' => [
      'code' => 'code',
      'multilineCode' => 'multiline code',
      'strongText' => 'strong text',
      'emphasizedText' => 'emphasized text',
      'deletedText' => 'đã xóa văn bản',
      'blockquote' => 'blockquote',
      'link' => 'liên kết'
    ]
  ],
  'Team' => [
    'fields' => [
      'name' => 'Tên',
      'roles' => 'Vai trò',
      'layoutSet' => 'Layout Set',
      'workingTimeCalendar' => 'Working Time Calendar',
      'positionList' => 'Position List',
      'userRole' => 'User Role'
    ],
    'links' => [
      'users' => 'Người dùng',
      'notes' => 'Ghi chú',
      'roles' => 'Vai trò',
      'layoutSet' => 'Layout Set',
      'workingTimeCalendar' => 'Working Time Calendar',
      'inboundEmails' => 'Group Email Accounts',
      'groupEmailFolders' => 'Group Email Folders'
    ],
    'tooltips' => [
      'workingTimeCalendar' => 'A calendar will be applied to users who have this team set as a Default Team.',
      'layoutSet' => 'Provides the ability to have layouts that differ from standard ones. Layout Set will be applied to users who have this team set as Default Team.',
      'roles' => 'Access Roles. Users of this team obtain access control level from selected roles.',
      'positionList' => 'Available positions in this team. E.g. Salesperson, Manager.'
    ],
    'labels' => [
      'Create Team' => 'Tạo nhóm'
    ]
  ],
  'Template' => [
    'fields' => [
      'name' => 'Tên',
      'body' => 'Nội dung',
      'entityType' => 'Loại Entity',
      'header' => 'Phần đầu',
      'footer' => 'Phần chân',
      'leftMargin' => 'Canh trái',
      'topMargin' => 'Căn trên',
      'rightMargin' => 'Căn phải',
      'bottomMargin' => 'Căn dưới',
      'printFooter' => 'In phần chân',
      'printHeader' => 'Print Header',
      'footerPosition' => 'Vị trí phần chân',
      'headerPosition' => 'Header Position',
      'variables' => 'Available Placeholders',
      'pageOrientation' => 'Page Orientation',
      'pageFormat' => 'Định dạng trang',
      'pageWidth' => 'Page Width (mm)',
      'pageHeight' => 'Page Height (mm)',
      'fontFace' => 'Phông chữ',
      'title' => 'Title',
      'style' => 'Style'
    ],
    'links' => [],
    'labels' => [
      'Create Template' => 'Tạo mẫu'
    ],
    'options' => [
      'pageOrientation' => [
        'Portrait' => 'Chiều đứng',
        'Landscape' => 'Chiều ngang'
      ],
      'pageFormat' => [
        'Custom' => 'Tùy chỉnh'
      ],
      'placeholders' => [
        'pagebreak' => 'Page break',
        'today' => 'Hôm nay (ngày)',
        'now' => 'Hiện tại (ngày giờ)'
      ],
      'fontFace' => [
        'symbol' => 'Ký tự đặc biệt',
        'times' => 'Thời gian'
      ]
    ],
    'tooltips' => [
      'footer' => 'Use {pageNumber} to print page number.',
      'variables' => 'Copy-paste needed placeholder to Header, Body or Footer.'
    ]
  ],
  'User' => [
    'fields' => [
      'name' => 'Tên',
      'userName' => 'Tên người dùng',
      'title' => 'Tiêu đề',
      'type' => 'Loại',
      'isAdmin' => 'Tài khoản Admin',
      'defaultTeam' => 'Nhóm mặc định',
      'emailAddress' => 'Email',
      'phoneNumber' => 'Điện thoại',
      'roles' => 'Vai trò',
      'portals' => 'Portals',
      'portalRoles' => 'Quyền Portal',
      'teamRole' => 'Vị trí',
      'password' => 'Mật khẩu',
      'currentPassword' => 'Mật khẩu hiện tại',
      'passwordConfirm' => 'Xác thực mật khẩu',
      'newPassword' => 'Mật khẩu mới',
      'newPasswordConfirm' => 'Nhập lại mật khẩu mới',
      'yourPassword' => 'Mật khẩu hiện tại của bạn',
      'avatar' => 'Ảnh đại diện',
      'avatarColor' => 'Avatar Color',
      'isActive' => 'Được kích hoạt',
      'isPortalUser' => 'Is Portal User',
      'contact' => 'Danh bạ',
      'accounts' => 'Tài khoản',
      'account' => 'Tài khoản (chính)',
      'sendAccessInfo' => 'Send Email with Access Info to User',
      'portal' => 'Portal',
      'gender' => 'Giới tính',
      'position' => 'Position in Team',
      'ipAddress' => 'Địa chỉ IP',
      'passwordPreview' => 'Xem trước mật khẩu',
      'isSuperAdmin' => 'Is Super Admin',
      'lastAccess' => 'Lần truy cập gần nhất',
      'apiKey' => 'Khóa API',
      'secretKey' => 'Secret Key',
      'dashboardTemplate' => 'Dashboard Template',
      'workingTimeCalendar' => 'Working Time Calendar',
      'auth2FA' => '2FA',
      'authMethod' => 'Authentication Method',
      'auth2FAEnable' => 'Bật xác minh 2 bước',
      'auth2FAMethod' => 'Phương thức xác thực 2FA',
      'auth2FATotpSecret' => '2FA TOTP Secret',
      'layoutSet' => 'Layout Set',
      'acceptanceStatus' => 'Acceptance Status',
      'acceptanceStatusMeetings' => 'Acceptance Status (Meetings)',
      'acceptanceStatusCalls' => 'Acceptance Status (Calls)'
    ],
    'links' => [
      'defaultTeam' => 'Nhóm mặc định',
      'teams' => 'Nhóm',
      'roles' => 'Vai trò',
      'notes' => 'Ghi chú',
      'portals' => 'Portals',
      'portalRoles' => 'Quyền Portal',
      'contact' => 'Danh bạ',
      'accounts' => 'Tài khoản',
      'account' => 'Tài khoản (Chính)',
      'tasks' => 'Nhiệm vụ',
      'userData' => 'Dữ liệu người dùng',
      'dashboardTemplate' => 'Quản lý giao diện mẫu',
      'workingTimeCalendar' => 'Working Time Calendar',
      'workingTimeRanges' => 'Working Time Exceptions',
      'layoutSet' => 'Layout Set',
      'targetLists' => 'Danh sách mục tiêu'
    ],
    'labels' => [
      'Create User' => 'Tạo người dùng',
      'Generate' => 'Tạo',
      'Access' => 'Truy cập',
      'Preferences' => 'Tùy chỉnh',
      'Change Password' => 'Đổi mật khẩu',
      'Teams and Access Control' => 'Nhóm và kiểm soát truy cập',
      'Forgot Password?' => 'Quên mật khẩu?',
      'Password Change Request' => 'Yêu cầu đổi mật khẩu',
      'Email Address' => 'Địa chỉ email',
      'External Accounts' => 'Tài khoản bên ngoài',
      'Email Accounts' => 'Tài khoản email',
      'Portal' => 'Cổng thông tin',
      'Create Portal User' => 'Create Portal User',
      'Proceed w/o Contact' => 'Proceed w/o Contact',
      'Generate New API Key' => 'Generate New API Key',
      'Generate New Password' => 'Tự động tạo mật khẩu',
      'Send Password Change Link' => 'Send Password Change Link',
      'Back to login form' => 'Quay lại trang đăng nhập',
      'Requirements' => 'Requirements',
      'Security' => 'Bảo mật',
      'Reset 2FA' => 'Đặt lại 2FA',
      'Code' => 'Code',
      'Secret' => 'Secret',
      'Send Code' => 'Send Code',
      'Login Link' => 'Login Link'
    ],
    'tooltips' => [
      'defaultTeam' => 'All records created by this user will be related to this team by default.',
      'userName' => 'Ký tự a-z, số 0-9, dấu chấm, gạch nối, @-tên và gạch dưới được cho phép.',
      'isAdmin' => 'Tài khoản Admin được truy cập vào mọi thứ.',
      'isActive' => 'If unchecked then user won\'t be able to login.',
      'teams' => 'Teams which this user belongs to. Access control level is inherited from team\'s roles.',
      'roles' => 'Additional access roles. Use it if user doesn\'t belong to any team or you need to extend access control level exclusively for this user.',
      'portalRoles' => 'Additional portal roles. Use it to extend access control level exclusively for this user.',
      'portals' => 'Portals which this user has access to.',
      'layoutSet' => 'Layouts from a specified set will be applied for the user instead of default ones.'
    ],
    'messages' => [
      '2faMethodNotConfigured' => 'The 2FA method is not fully configured in the system.',
      'loginAs' => 'Open the login link in an incognito window to preserve your current session. Use your admin credentials to log in.',
      'sendPasswordChangeLinkConfirmation' => 'An email with a unique link will be sent to the user allowing them to change their password. The link will expire after a specific amount of time.',
      'passwordRecoverySentIfMatched' => 'Assuming the entered data matched any user account.',
      'passwordStrengthLength' => 'Must be at least {length} characters long.',
      'passwordStrengthLetterCount' => 'Must contain at least {count} letter(s).',
      'passwordStrengthNumberCount' => 'Must contain at least {count} digit(s).',
      'passwordStrengthBothCases' => 'Must contain letters of both upper and lower case.',
      'passwordWillBeSent' => 'Mật khẩu sẽ được gửi tới email tài khoản',
      'passwordChanged' => 'Mật khẩu đã được đổi',
      'userCantBeEmpty' => 'Tên đăng nhập không thể bỏ trống',
      'wrongUsernamePassword' => 'Sai tên đăng nhập hoặc mật khẩu',
      'failedToLogIn' => 'Failed to log in',
      'emailAddressCantBeEmpty' => 'Email Address can not be empty',
      'userNameEmailAddressNotFound' => 'Tên đăng nhập hoặc email không tồn tại',
      'forbidden' => 'Từ chối truy cập, xin thử lại sau',
      'uniqueLinkHasBeenSent' => 'The unique URL has been sent to the specified email address.',
      'passwordChangedByRequest' => 'Mật khẩu đã được thay đổi',
      'setupSmtpBefore' => 'You need to setup [SMTP settings]({url}) to make the system be able to send password in email.',
      'userNameExists' => 'User Name already exists',
      'loginError' => 'Error occurred',
      'wrongCode' => 'Sai mã',
      'codeIsRequired' => 'Bắt buộc sử dụng mã',
      'yourAuthenticationCode' => 'Your authentication code: {code}.',
      'choose2FaSmsPhoneNumber' => 'Select a phone number that will be used for 2FA.',
      'choose2FaEmailAddress' => 'Select an email address that will be used for 2FA. It\'s highly recommended to use a non-primary email address.',
      'enterCodeSentInEmail' => 'Enter the code sent to your email address.',
      'enterCodeSentBySms' => 'Enter the code sent by SMS to your phone number.',
      'enterTotpCode' => 'Enter a code from your authenticator app.',
      'verifyTotpCode' => 'Scan the QR-code with your mobile authenticator app. If you have a trouble with scanning, you can enter the secret manually. After that you will see a 6-digit code in your application. Enter this code in the field below.',
      'generateAndSendNewPassword' => 'A new password will be generated and sent to the user\'s email address.',
      'security2FaResetConfirmation' => 'Are you sure you want to reset the current 2FA settings?',
      'auth2FARequiredHeader' => '2 factor authentication required',
      'auth2FARequired' => 'You need to set up 2 factor authentication. Use an authenticator application on your mobile phone (e.g. Google Authenticator).',
      'ldapUserInEspoNotFound' => 'User is not found in EspoCRM. Contact your administrator to create the user.',
      'passwordChangeRequestNotFound' => 'The password change request is not found. It might be expired. Try to initiate a new password recovery from the [login page]({url}).',
      'defaultTeamIsNotUsers' => 'Default Team should be one of user\'s Teams'
    ],
    'options' => [
      'gender' => [
        '' => 'Chưa đặt',
        'Male' => 'Nam',
        'Female' => 'Nữ',
        'Neutral' => 'Chưa xác định'
      ],
      'type' => [
        'regular' => 'Regular',
        'admin' => 'Admin',
        'portal' => 'Portal',
        'system' => 'Hệ thống',
        'super-admin' => 'Quản trị viên cao nhất',
        'api' => 'API'
      ],
      'authMethod' => [
        'ApiKey' => 'Mã khóa API',
        'Hmac' => 'HMAC'
      ]
    ],
    'boolFilters' => [
      'onlyMyTeam' => 'Chỉ nhóm của tôi',
      'onlyMe' => 'OnlyMe'
    ],
    'presetFilters' => [
      'active' => 'Kích hoạt',
      'activePortal' => 'Portal Active',
      'activeApi' => 'API Active'
    ],
    'actions' => [
      'changePosition' => 'Change Position'
    ]
  ],
  'Webhook' => [
    'labels' => [
      'Create Webhook' => 'Create Webhook'
    ],
    'fields' => [
      'event' => 'Sự kiện',
      'url' => 'Url',
      'isActive' => 'Kích hoạt',
      'user' => 'API User',
      'entityType' => 'Entity Type',
      'field' => 'Field',
      'secretKey' => 'Secret Key'
    ],
    'links' => [
      'user' => 'Người dùng'
    ]
  ],
  'WebhookQueueItem' => [
    'fields' => [
      'event' => 'Event',
      'webhook' => 'Webhook',
      'target' => 'Target',
      'data' => 'Data',
      'status' => 'Status',
      'processedAt' => 'Processed At',
      'attempts' => 'Attempts',
      'processAt' => 'Process At'
    ],
    'links' => [
      'webhook' => 'Webhook'
    ],
    'options' => [
      'status' => [
        'Pending' => 'Pending',
        'Success' => 'Success',
        'Failed' => 'Failed'
      ]
    ]
  ],
  'WorkingTimeCalendar' => [
    'labels' => [
      'Create WorkingTimeCalendar' => 'Create Calendar'
    ],
    'fields' => [
      'timeZone' => 'Time Zone',
      'timeRanges' => 'Workday Schedule',
      'weekday0' => 'Sun',
      'weekday1' => 'Mon',
      'weekday2' => 'Tue',
      'weekday3' => 'Wed',
      'weekday4' => 'Thu',
      'weekday5' => 'Fri',
      'weekday6' => 'Sat',
      'weekday0TimeRanges' => 'Sun Schedule',
      'weekday1TimeRanges' => 'Mon Schedule',
      'weekday2TimeRanges' => 'Tue Schedule',
      'weekday3TimeRanges' => 'Wed Schedule',
      'weekday4TimeRanges' => 'Thu Schedule',
      'weekday5TimeRanges' => 'Fri Schedule',
      'weekday6TimeRanges' => 'Sat Schedule'
    ],
    'links' => [
      'ranges' => 'Exceptions'
    ]
  ],
  'WorkingTimeRange' => [
    'labels' => [
      'Create WorkingTimeRange' => 'Create Exception',
      'Calendars' => 'Calendars'
    ],
    'fields' => [
      'timeRanges' => 'Schedule',
      'dateStart' => 'Date Start',
      'dateEnd' => 'Date End',
      'type' => 'Type',
      'calendars' => 'Calendars',
      'users' => 'Users'
    ],
    'links' => [
      'calendars' => 'Calendars',
      'users' => 'Users'
    ],
    'options' => [
      'type' => [
        'Non-working' => 'Non-working',
        'Working' => 'Working'
      ]
    ],
    'presetFilters' => [
      'actual' => 'Actual'
    ],
    'tooltips' => [
      'calendars' => 'Calendars to apply the exception to. The exception will be applied to all users of selected calendars.

Leave the field empty if you need to apply the exception only for specific users.',
      'users' => 'Specific users to apply the exception to.'
    ]
  ],
  'Account' => [
    'fields' => [
      'name' => 'Tên',
      'emailAddress' => 'Email',
      'website' => 'Website',
      'phoneNumber' => 'Điện thoại',
      'billingAddress' => 'Địa chỉ thanh toán',
      'shippingAddress' => 'Địa chỉ vận chuyển',
      'description' => 'Mô tả',
      'sicCode' => 'Mã Sic',
      'industry' => 'Industry',
      'type' => 'Loại',
      'contactRole' => 'Vai trò',
      'contactIsInactive' => 'Inactive',
      'campaign' => 'Chiến dịch',
      'targetLists' => 'Danh sách mục tiêu',
      'targetList' => 'Danh sách mục tiêu',
      'originalLead' => 'Nguồn gốc khách tiềm năng'
    ],
    'links' => [
      'contacts' => 'Sổ liên lạc',
      'contactsPrimary' => 'Contacts (primary)',
      'opportunities' => 'Cơ hội',
      'cases' => 'Trường hợp',
      'documents' => 'Tài liệu',
      'meetingsPrimary' => 'Meetings (expanded)',
      'callsPrimary' => 'Cuộc gọi (mở rộng)',
      'tasksPrimary' => 'Tasks (expanded)',
      'emailsPrimary' => 'Emails (expanded)',
      'targetLists' => 'Danh sách mục tiêu',
      'campaignLogRecords' => 'Campaign Log',
      'campaign' => 'Chiến dịch',
      'portalUsers' => 'Portal Users',
      'originalLead' => 'Nguồn gốc khách tiềm năng'
    ],
    'options' => [
      'type' => [
        'Customer' => 'Khách hàng',
        'Investor' => 'Nhà đầu tư',
        'Partner' => 'Đối tác',
        'Reseller' => 'Đại lý'
      ],
      'industry' => [
        'Aerospace' => 'Hàng không vũ trụ',
        'Agriculture' => 'Nông nghiệp',
        'Advertising' => 'Quảng cáo',
        'Apparel & Accessories' => 'Thời trang và phụ kiện',
        'Architecture' => 'Kiến trúc',
        'Automotive' => 'Ô tô',
        'Banking' => 'Ngân hàng',
        'Biotechnology' => 'Công nghệ sinh học',
        'Building Materials & Equipment' => 'Vật liệu & thiết bị xây dựng',
        'Chemical' => 'Hóa chất',
        'Construction' => 'Xây dựng',
        'Computer' => 'Máy tính',
        'Defense' => 'Bảo vệ',
        'Creative' => 'Sáng tạo',
        'Culture' => 'Văn hóa',
        'Consulting' => 'Tư vấn',
        'Education' => 'Giáo dục',
        'Electronics' => 'Điện máy',
        'Electric Power' => 'Điện lực',
        'Energy' => 'Năng lượng',
        'Entertainment & Leisure' => 'Giải trí',
        'Finance' => 'Tín dụng',
        'Food & Beverage' => 'Thực phẩm & nước giải khát',
        'Grocery' => 'Tạp hóa',
        'Hospitality' => 'Bệnh viện',
        'Healthcare' => 'Chăm sóc sức khỏe',
        'Insurance' => 'Bảo hiểm',
        'Legal' => 'Pháp luật',
        'Manufacturing' => 'Chế tạo',
        'Mass Media' => 'Truyền thông đại chúng',
        'Mining' => 'Khai thác mỏ',
        'Music' => 'Âm nhạc',
        'Marketing' => 'Tiếp thị',
        'Publishing' => 'Nhà xuất bản',
        'Petroleum' => 'Dầu mỏ',
        'Real Estate' => 'Bất động sản',
        'Retail' => 'Bán lẻ',
        'Shipping' => 'Vận chuyển',
        'Service' => 'Dịch vụ',
        'Support' => 'Hỗ trợ',
        'Sports' => 'Thể thao',
        'Software' => 'Phần mềm',
        'Technology' => 'Công nghệ',
        'Telecommunications' => 'Viễn thông',
        'Television' => 'Truyền hình',
        'Testing, Inspection & Certification' => 'Thử nghiệm, Kiểm tra & Chứng nhận',
        'Transportation' => 'Vận tải',
        'Travel' => 'Du lịch',
        'Venture Capital' => 'Đầu tư mạo hiểm',
        'Wholesale' => 'Nhà phân phối',
        'Water' => 'Nước'
      ]
    ],
    'labels' => [
      'Create Account' => 'Tạo tài khoản',
      'Copy Billing' => 'Sao chép từ địa chỉ thanh toán',
      'Set Primary' => 'Set Primary'
    ],
    'presetFilters' => [
      'customers' => 'Khách hàng',
      'partners' => 'Đối tác',
      'recentlyCreated' => 'Đã tạo gần đây'
    ]
  ],
  'Calendar' => [
    'modes' => [
      'month' => 'Tháng',
      'week' => 'Tuần',
      'day' => 'Ngày',
      'agendaWeek' => 'Tuần',
      'agendaDay' => 'Ngày',
      'timeline' => 'Dòng thời gian'
    ],
    'labels' => [
      'Today' => 'Today',
      'Create' => 'Tạo',
      'Shared' => 'Đã chia sẻ',
      'Add User' => 'Thêm người dùng',
      'current' => 'hiện tại',
      'time' => 'thời gian',
      'User List' => 'Danh sách người dùng',
      'Manage Users' => 'Quản lý người dung',
      'View Calendar' => 'Xem lịch',
      'Create Shared View' => 'Create Shared View'
    ]
  ],
  'Call' => [
    'fields' => [
      'name' => 'Tên',
      'parent' => 'Chủ',
      'status' => 'Trạng thái',
      'dateStart' => 'Ngày bắt đầu',
      'dateEnd' => 'Ngày kết thúc',
      'direction' => 'Hướng',
      'duration' => 'Thời gian',
      'description' => 'Mô tả',
      'users' => 'Người dùng',
      'contacts' => 'Sổ liên lạc',
      'leads' => 'Trưởng nhóm',
      'reminders' => 'Nhắc nhở',
      'account' => 'Tài khoản',
      'acceptanceStatus' => 'Trạng thái chấp nhận'
    ],
    'links' => [],
    'options' => [
      'status' => [
        'Planned' => 'Đã lên kế hoạch',
        'Held' => 'Đã được tổ chức',
        'Not Held' => 'Chưa được tổ chức'
      ],
      'direction' => [
        'Outbound' => 'Ra ngoài',
        'Inbound' => 'Vào trong'
      ],
      'acceptanceStatus' => [
        'None' => 'Trống',
        'Accepted' => 'Đã đồng ý',
        'Declined' => 'Không đồng ý',
        'Tentative' => 'Dự định'
      ]
    ],
    'massActions' => [
      'setHeld' => 'Set Held',
      'setNotHeld' => 'Set Not Held'
    ],
    'labels' => [
      'Create Call' => 'Tạo cuộc gọi',
      'Set Held' => 'Tổ chức',
      'Set Not Held' => 'Không tổ chức',
      'Send Invitations' => 'Gửi giấy mời'
    ],
    'presetFilters' => [
      'planned' => 'Đã lên kế hoạch',
      'held' => 'Đã được tổ chức',
      'todays' => 'Hôm nay'
    ]
  ],
  'Campaign' => [
    'fields' => [
      'name' => 'Tên',
      'description' => 'Mô tả',
      'status' => 'Tình trạng',
      'type' => 'Phân loại',
      'startDate' => 'Ngày bắt đầu',
      'endDate' => 'Ngày kết thúc',
      'targetLists' => 'Danh sách mục tiêu',
      'excludingTargetLists' => 'Excluding Target Lists',
      'sentCount' => 'Gửi',
      'openedCount' => 'Đã mở',
      'clickedCount' => 'Đã nhấp',
      'optedOutCount' => 'Opted Out',
      'bouncedCount' => 'Bounced',
      'optedInCount' => 'Opted In',
      'hardBouncedCount' => 'Hard Bounced',
      'softBouncedCount' => 'Soft Bounced',
      'leadCreatedCount' => 'Tạo khách hàng tiềm năng',
      'revenue' => 'Revenue',
      'revenueConverted' => 'Revenue (converted)',
      'budget' => 'Budget',
      'budgetConverted' => 'Budget (converted)',
      'budgetCurrency' => 'Budget Currency',
      'contactsTemplate' => 'Contacts Template',
      'leadsTemplate' => 'Leads Template',
      'accountsTemplate' => 'Accounts Template',
      'usersTemplate' => 'Users Template',
      'mailMergeOnlyWithAddress' => 'Skip records w/o filled address'
    ],
    'links' => [
      'targetLists' => 'Danh sách mục tiêu',
      'excludingTargetLists' => 'Excluding Target Lists',
      'accounts' => 'Tài khoản',
      'contacts' => 'Danh bạ',
      'leads' => 'Khách hàng tiềm năng',
      'opportunities' => 'Cơ hội',
      'campaignLogRecords' => 'Nhật ký',
      'massEmails' => 'Mass Emails',
      'trackingUrls' => 'Địa chỉ theo dõi',
      'contactsTemplate' => 'Contacts Template',
      'leadsTemplate' => 'Leads Template',
      'accountsTemplate' => 'Accounts Template',
      'usersTemplate' => 'Users Template'
    ],
    'options' => [
      'type' => [
        'Email' => 'Email',
        'Web' => 'Web',
        'Television' => 'Truyền hình',
        'Radio' => 'Radio',
        'Newsletter' => 'Báo',
        'Mail' => 'Mail'
      ],
      'status' => [
        'Planning' => 'Lập kế hoạch',
        'Active' => 'Kích hoạt',
        'Inactive' => 'Không kích hoạt',
        'Complete' => 'Hoàn thành'
      ]
    ],
    'labels' => [
      'Create Campaign' => 'Tạo chiến dịch',
      'Target Lists' => 'Danh sách mục tiêu',
      'Statistics' => 'Thống kê',
      'hard' => 'cứng',
      'soft' => 'mềm',
      'Unsubscribe' => '`',
      'Mass Emails' => 'Mass Emails',
      'Email Templates' => 'Email Templates',
      'Unsubscribe again' => 'Unsubscribe again',
      'Subscribe again' => 'Subscribe again',
      'Create Target List' => 'Tạo danh sách mục tiêu',
      'Mail Merge' => 'Mail Merge',
      'Generate Mail Merge PDF' => 'Generate Mail Merge PDF'
    ],
    'presetFilters' => [
      'active' => 'Kích hoạt'
    ],
    'messages' => [
      'unsubscribed' => 'You have been unsubscribed from our mailing list.',
      'subscribedAgain' => 'You are subscribed again.'
    ],
    'tooltips' => [
      'targetLists' => 'Targets that should receive messages.',
      'excludingTargetLists' => 'Targets that should not receive messages.'
    ]
  ],
  'CampaignLogRecord' => [
    'fields' => [
      'action' => 'Hành động',
      'actionDate' => 'Ngày',
      'data' => 'Dữ liệu',
      'campaign' => 'Chiến dịch',
      'parent' => 'Đối tượng',
      'object' => 'Chủ đề',
      'application' => 'Ứng dụng',
      'queueItem' => 'Queue Item',
      'stringData' => 'String Data',
      'stringAdditionalData' => 'String Additional Data',
      'isTest' => 'Is Test'
    ],
    'links' => [
      'queueItem' => 'Queue Item',
      'parent' => 'Parent',
      'object' => 'Chủ đề',
      'campaign' => 'Chiến dịch'
    ],
    'options' => [
      'action' => [
        'Sent' => 'Gửi',
        'Opened' => 'Đã mở',
        'Opted Out' => 'Opted Out',
        'Bounced' => 'Bounced',
        'Clicked' => 'Đã nhấp chuột',
        'Lead Created' => 'Đã tạo khách tiềm năng',
        'Opted In' => 'Opted In'
      ]
    ],
    'labels' => [
      'All' => 'Tất cả'
    ],
    'presetFilters' => [
      'sent' => 'Gửi',
      'opened' => 'Đã mở',
      'optedOut' => 'Opted Out',
      'optedIn' => 'Opted In',
      'bounced' => 'Bounced',
      'clicked' => 'Đã click',
      'leadCreated' => 'Đã tạo khách hàng tiềm năng'
    ]
  ],
  'CampaignTrackingUrl' => [
    'fields' => [
      'url' => 'Địa chỉ',
      'action' => 'Hành động',
      'urlToUse' => 'Code to insert instead of URL',
      'message' => 'Tin nhắn',
      'campaign' => 'Chiến dịch'
    ],
    'links' => [
      'campaign' => 'Chiến dịch'
    ],
    'labels' => [
      'Create CampaignTrackingUrl' => 'Create Tracking URL'
    ],
    'options' => [
      'action' => [
        'Redirect' => 'Chuyển hướng',
        'Show Message' => 'Hiển thị tin nhắn'
      ]
    ],
    'tooltips' => [
      'url' => 'The recipient will be redirected to this location after they follow the link.',
      'message' => 'The message will be shown to the recipient after they follow the link. Markdown is supported.'
    ]
  ],
  'Case' => [
    'fields' => [
      'name' => 'Tên',
      'number' => 'Số',
      'status' => 'Trạng thái',
      'account' => 'Tài khoản',
      'contact' => 'Liên hệ',
      'contacts' => 'Danh bạ',
      'priority' => 'Ưu tiên',
      'type' => 'Loại',
      'description' => 'Mô tả',
      'inboundEmail' => 'Group Email Account',
      'lead' => 'Lead',
      'attachments' => 'Đính kèm',
      'originalEmail' => 'Original Email'
    ],
    'links' => [
      'inboundEmail' => 'Group Email Account',
      'account' => 'Tài khoản',
      'contact' => 'Contact (Primary)',
      'Contacts' => 'Danh bạ',
      'meetings' => 'Cuộc hẹn',
      'calls' => 'Cuộc gọi',
      'tasks' => 'Nhiệm vụ',
      'emails' => 'Emails',
      'articles' => 'Tài liệu kiến thức cơ bản',
      'lead' => 'Lead',
      'attachments' => 'Đính kèm'
    ],
    'options' => [
      'status' => [
        'New' => 'Mới',
        'Assigned' => 'Chỉ định',
        'Pending' => 'Đang chờ',
        'Closed' => 'Đã đóng',
        'Rejected' => 'Đã từ chối',
        'Duplicate' => 'Trùng'
      ],
      'priority' => [
        'Low' => 'Thấp',
        'Normal' => 'Bình thường',
        'High' => 'Cao',
        'Urgent' => 'Gấp'
      ],
      'type' => [
        'Question' => 'Câu hỏi',
        'Incident' => 'Sự cố',
        'Problem' => 'Có vấn đề'
      ]
    ],
    'labels' => [
      'Create Case' => 'Tạo trường hợp',
      'Close' => 'Đóng',
      'Reject' => 'Reject',
      'Closed' => 'Đã đóng',
      'Rejected' => 'Rejected'
    ],
    'presetFilters' => [
      'open' => 'Mở',
      'closed' => 'Đã đóng'
    ]
  ],
  'Contact' => [
    'fields' => [
      'name' => 'Tên',
      'emailAddress' => 'Email',
      'title' => 'Account Title',
      'account' => 'Tài khoản',
      'accounts' => 'Tài khoản',
      'phoneNumber' => 'Điện thoại',
      'accountType' => 'Loại tài khoản',
      'doNotCall' => 'Không gọi',
      'address' => 'Địa chỉ',
      'opportunityRole' => 'Vai trò cơ hội',
      'accountRole' => 'Vai trò',
      'description' => 'Mô tả',
      'campaign' => 'Chiến dịch',
      'targetLists' => 'Danh sách mục tiêu',
      'targetList' => 'Danh sách mục tiêu',
      'portalUser' => 'Portal User',
      'hasPortalUser' => 'Has Portal User',
      'originalLead' => 'Nguồn gốc khách tiềm năng',
      'acceptanceStatus' => 'Acceptance Status',
      'accountIsInactive' => 'Account Inactive',
      'acceptanceStatusMeetings' => 'Acceptance Status (Meetings)',
      'acceptanceStatusCalls' => 'Acceptance Status (Calls)',
      'originalEmail' => 'Original Email'
    ],
    'links' => [
      'opportunities' => 'Cơ hội',
      'cases' => 'Trường hợp',
      'targetLists' => 'Danh sách mục tiêu',
      'campaignLogRecords' => 'Campaign Log',
      'campaign' => 'Campaign',
      'account' => 'Account (Primary)',
      'accounts' => 'Tài khoản',
      'casesPrimary' => 'Cases (Primary)',
      'tasksPrimary' => 'Tasks (expanded)',
      'opportunitiesPrimary' => 'Opportunities (Primary)',
      'portalUser' => 'Portal User',
      'originalLead' => 'Nguồn gốc khách tiềm năng',
      'documents' => 'Tài liệu'
    ],
    'labels' => [
      'Create Contact' => 'Tạo liên hệ'
    ],
    'options' => [
      'opportunityRole' => [
        '' => '',
        'Decision Maker' => 'Tạo quyết định',
        'Evaluator' => 'Đánh giá',
        'Influencer' => 'Phụ thuộc'
      ]
    ],
    'presetFilters' => [
      'portalUsers' => 'Portal Users',
      'notPortalUsers' => 'Not Portal Users',
      'accountActive' => 'Kích hoạt'
    ]
  ],
  'Document' => [
    'labels' => [
      'Create Document' => 'Create Document',
      'Details' => 'Chi tiết'
    ],
    'fields' => [
      'name' => 'Tên',
      'status' => 'Tình trạng',
      'file' => 'Tập tin',
      'type' => 'Loại',
      'publishDate' => 'Ngày xuất bản',
      'expirationDate' => 'Ngày hết hạn',
      'description' => 'Mô tả',
      'accounts' => 'Tài khoản',
      'folder' => 'Thư mục'
    ],
    'links' => [
      'accounts' => 'Tài khoản',
      'opportunities' => 'Cơ hội',
      'folder' => 'Thư mục',
      'leads' => 'Leads',
      'contacts' => 'Contacts'
    ],
    'options' => [
      'status' => [
        'Active' => 'Kích hoạt',
        'Draft' => 'Nháp',
        'Expired' => 'Hết hạn',
        'Canceled' => 'Đã hủy'
      ],
      'type' => [
        '' => 'Trống',
        'Contract' => 'Contract',
        'NDA' => 'NDA',
        'EULA' => 'EULA',
        'License Agreement' => 'Thông tin bản quyền'
      ]
    ],
    'presetFilters' => [
      'active' => 'Kích hoạt',
      'draft' => 'Nháp'
    ]
  ],
  'DocumentFolder' => [
    'labels' => [
      'Create DocumentFolder' => 'Create Document Folder',
      'Manage Categories' => 'Quản lý thư mục',
      'Documents' => 'Tài liệu'
    ],
    'links' => [
      'documents' => 'Tài liệu'
    ]
  ],
  'EmailQueueItem' => [
    'fields' => [
      'name' => 'Tên',
      'status' => 'Tình trạng',
      'target' => 'Target',
      'sentAt' => 'Ngày gửi',
      'attemptCount' => 'Attempts',
      'emailAddress' => 'Địa chỉ email',
      'massEmail' => 'Mass Email',
      'isTest' => 'Is Test'
    ],
    'links' => [
      'target' => ' ',
      'massEmail' => 'Mass Email'
    ],
    'options' => [
      'status' => [
        'Pending' => 'Đang chờ',
        'Sent' => 'Gửi',
        'Failed' => 'Đã bị lỗi',
        'Sending' => 'Đang gửi'
      ]
    ],
    'presetFilters' => [
      'pending' => 'Đang chờ',
      'sent' => 'Gửi',
      'failed' => 'Bị lỗi'
    ]
  ],
  'KnowledgeBaseArticle' => [
    'labels' => [
      'Create KnowledgeBaseArticle' => 'Create Article',
      'Any' => 'Bất kỳ',
      'Send in Email' => 'Send in Email',
      'Move Up' => 'Di chuyển lên',
      'Move Down' => 'Di chuyển xuống',
      'Move to Top' => 'Di chuyển lên đầu',
      'Move to Bottom' => 'Di chuyển cuối cùng'
    ],
    'fields' => [
      'name' => 'Tên',
      'status' => 'Tình trạng',
      'type' => 'Loại',
      'attachments' => 'Đính  kèm',
      'publishDate' => 'Ngày xuất bản',
      'expirationDate' => 'Ngày hết hạn',
      'description' => 'Mô tả',
      'body' => 'Nội dung',
      'categories' => 'Chuyên mục',
      'language' => 'Ngôn ngữ',
      'portals' => 'Portals'
    ],
    'links' => [
      'cases' => 'Cases',
      'opportunities' => 'Cơ hội',
      'categories' => 'Chuyên mục',
      'portals' => 'Portals'
    ],
    'options' => [
      'status' => [
        'In Review' => 'In Review',
        'Draft' => 'Bản nháp',
        'Archived' => 'Đã lưu trữ',
        'Published' => 'Đã xuất bản'
      ],
      'type' => [
        'Article' => 'Article'
      ]
    ],
    'tooltips' => [
      'portals' => 'Article will be available only in specified portals.'
    ],
    'presetFilters' => [
      'published' => 'Đã xuất bản'
    ]
  ],
  'KnowledgeBaseCategory' => [
    'labels' => [
      'Create KnowledgeBaseCategory' => 'Tạo chuyên mục',
      'Manage Categories' => 'Quản lý chuyên mục',
      'Articles' => 'Articles'
    ],
    'links' => [
      'articles' => 'Articles'
    ]
  ],
  'Lead' => [
    'labels' => [
      'Converted To' => 'Đã chuyển đổi sang',
      'Create Lead' => 'Tạo chỉ dẫn',
      'Convert' => 'Chuyển đổi',
      'convert' => 'chuyển đổi'
    ],
    'fields' => [
      'name' => 'Tên',
      'emailAddress' => 'Email',
      'title' => 'Tiêu đề',
      'website' => 'Website',
      'phoneNumber' => 'Điện thoại',
      'accountName' => 'Tên tài khoản',
      'doNotCall' => 'Không gọi',
      'address' => 'Địa chỉ',
      'status' => 'Trạng thái',
      'source' => 'Nguồn',
      'opportunityAmount' => 'Trị giá',
      'opportunityAmountConverted' => 'Opportunity Amount (converted)',
      'description' => 'Mô tả',
      'createdAccount' => 'Tài khoản',
      'createdContact' => 'Liên hệ',
      'createdOpportunity' => 'Cơ hội',
      'convertedAt' => 'Converted At',
      'campaign' => 'Chiến dịch',
      'targetLists' => 'Danh sách mục tiêu',
      'targetList' => 'Danh sách mục tiêu',
      'industry' => 'Chuyên ngành',
      'acceptanceStatus' => 'Acceptance Status',
      'opportunityAmountCurrency' => 'Opportunity Amount Currency',
      'acceptanceStatusMeetings' => 'Acceptance Status (Meetings)',
      'acceptanceStatusCalls' => 'Acceptance Status (Calls)',
      'originalEmail' => 'Original Email'
    ],
    'links' => [
      'targetLists' => 'Danh sách mục tiêu',
      'campaignLogRecords' => 'Nhật ký chiến dịch',
      'campaign' => 'Chiến dịch',
      'createdAccount' => 'Tài khoản',
      'createdContact' => 'Danh bạ',
      'createdOpportunity' => 'Opportunity',
      'cases' => 'Cases',
      'documents' => 'Tài liệu'
    ],
    'options' => [
      'status' => [
        'New' => 'Mới',
        'Assigned' => 'Chỉ định',
        'In Process' => 'Đang tiến hành',
        'Converted' => 'Đã chuyển đổi',
        'Recycled' => 'Thùng rác',
        'Dead' => 'Chết'
      ],
      'source' => [
        'Call' => 'Gọi',
        'Email' => 'Email',
        'Existing Customer' => 'Khách hàng hiện có',
        'Partner' => 'Đối tác',
        'Public Relations' => 'Khách hàng công khai',
        'Web Site' => 'Web Site',
        'Campaign' => 'Chiến dịch',
        'Other' => 'Khác'
      ]
    ],
    'presetFilters' => [
      'active' => 'Đang hoạt động',
      'actual' => 'Hiện thời',
      'converted' => 'Đã chuyển đổi'
    ]
  ],
  'MassEmail' => [
    'fields' => [
      'name' => 'Tên',
      'status' => 'Tình trạng',
      'storeSentEmails' => 'Store Sent Emails',
      'startAt' => 'Ngày bắt đầu',
      'fromAddress' => 'Từ địa chỉ',
      'fromName' => 'Từ tên',
      'replyToAddress' => 'Trả lời đến địa chỉ',
      'replyToName' => 'Trả lời đến tên',
      'campaign' => 'Chiến dịch',
      'emailTemplate' => 'Thư mẫu',
      'inboundEmail' => 'Email Account',
      'targetLists' => 'Danh sách mục tiêu',
      'excludingTargetLists' => 'Excluding Target Lists',
      'optOutEntirely' => 'Opt-Out Entirely',
      'smtpAccount' => 'Tài khoản SMTP'
    ],
    'links' => [
      'targetLists' => 'Danh sách mục tiêu',
      'excludingTargetLists' => 'Excluding Target Lists',
      'queueItems' => 'Queue Items',
      'campaign' => 'Campaign',
      'emailTemplate' => 'Email Template',
      'inboundEmail' => 'Tài khoản email'
    ],
    'options' => [
      'status' => [
        'Draft' => 'Bản nháp',
        'Pending' => 'Đang chờ',
        'In Process' => 'Đang thực hiện',
        'Complete' => 'Hoàn thành',
        'Canceled' => 'Đã hủy',
        'Failed' => 'Lỗi'
      ]
    ],
    'labels' => [
      'Create MassEmail' => 'Create Mass Email',
      'Send Test' => 'Gửi mail thử nghiệm',
      'System SMTP' => 'Hệ thống SMTP',
      'system' => 'hệ thống',
      'group' => 'nhóm'
    ],
    'messages' => [
      'selectAtLeastOneTarget' => 'Select at least one target.',
      'testSent' => 'Test email(s) supposed to be sent'
    ],
    'tooltips' => [
      'optOutEntirely' => 'Email addresses of recipients that unsubscribed will be marked as opted out and they will not receive any mass emails anymore.',
      'targetLists' => 'Targets that should receive messages.',
      'excludingTargetLists' => 'Targets that should not receive messages.',
      'storeSentEmails' => 'Emails will be stored in CRM.'
    ],
    'presetFilters' => [
      'actual' => 'Hiện thời',
      'complete' => 'Hoàn thành'
    ]
  ],
  'Meeting' => [
    'fields' => [
      'name' => 'Tên',
      'parent' => 'Chủ',
      'status' => 'Trạng thái',
      'dateStart' => 'Ngày bắt đầu',
      'dateEnd' => 'Ngày kết thúc',
      'duration' => 'Thời gian',
      'description' => 'Mô tả',
      'users' => 'Người dùng',
      'contacts' => 'Sổ liên lạc',
      'leads' => 'Trưởng nhóm',
      'reminders' => 'Nhắc nhở',
      'account' => 'Account',
      'acceptanceStatus' => 'Acceptance Status',
      'dateStartDate' => 'Date Start (all day)',
      'dateEndDate' => 'Date End (all day)',
      'isAllDay' => 'Is All-Day',
      'sourceEmail' => 'Source Email'
    ],
    'links' => [],
    'options' => [
      'status' => [
        'Planned' => 'Đã lên kế hoạch',
        'Held' => 'Đã được tổ chức',
        'Not Held' => 'Chưa được tổ chức'
      ],
      'acceptanceStatus' => [
        'None' => 'trống',
        'Accepted' => 'Accepted',
        'Declined' => 'Declined',
        'Tentative' => 'Tentative'
      ]
    ],
    'massActions' => [
      'setHeld' => 'Set Held',
      'setNotHeld' => 'Set Not Held'
    ],
    'labels' => [
      'Create Meeting' => 'Tạo buổi hẹn',
      'Set Held' => 'Tổ chức',
      'Set Not Held' => 'Không tổ chức',
      'Send Invitations' => 'Gửi giấy mời',
      'Send Cancellation' => 'Send Cancellation',
      'on time' => 'on time',
      'before' => 'trước',
      'All-Day' => 'All-Day',
      'Acceptance' => 'Acceptance'
    ],
    'presetFilters' => [
      'planned' => 'Đã lên kế hoạch',
      'held' => 'Đã được tổ chức',
      'todays' => 'Hôm nay'
    ],
    'messages' => [
      'sendInvitationsToSelectedAttendees' => 'Invitation emails will be sent to the selected attendees.',
      'sendCancellationsToSelectedAttendees' => 'Cancellation emails will be sent to the selected attendees.',
      'selectAcceptanceStatus' => 'Set your acceptance status.',
      'nothingHasBeenSent' => 'Nothing were sent'
    ]
  ],
  'Opportunity' => [
    'fields' => [
      'name' => 'Tên',
      'account' => 'Tài khoản',
      'stage' => 'Mức',
      'amount' => 'Tổng',
      'probability' => 'Xác suất, %',
      'leadSource' => 'Nguồn dẫn',
      'doNotCall' => 'Không gọi',
      'closeDate' => 'Ngày kết thúc',
      'contacts' => 'Sổ liên lạc',
      'contact' => 'Contact (Primary)',
      'description' => 'Mô tả',
      'amountConverted' => 'Amount (converted)',
      'amountWeightedConverted' => 'Amount Weighted',
      'campaign' => 'Chiến dịch',
      'originalLead' => 'Original Lead',
      'amountCurrency' => 'Amount Currency',
      'contactRole' => 'Contact Role',
      'lastStage' => 'Last Stage'
    ],
    'links' => [
      'contacts' => 'Sổ liên lạc',
      'contact' => 'Contact (Primary)',
      'documents' => 'Tài liệu',
      'campaign' => 'Chiến dịch',
      'originalLead' => 'Original Lead'
    ],
    'options' => [
      'stage' => [
        'Prospecting' => 'Khảo sát',
        'Qualification' => 'Trình độ chuyên môn',
        'Proposal' => 'Giá đưa ra',
        'Negotiation' => 'Đàm phán',
        'Needs Analysis' => 'Phân tích nhu cầu',
        'Value Proposition' => 'Đề xuất giá trị',
        'Id. Decision Makers' => 'Id. Người tạo quyết định',
        'Perception Analysis' => 'Phân tích khả năng',
        'Proposal/Price Quote' => 'Giá đưa ra/báo giá',
        'Negotiation/Review' => 'Đàm phán / đánh giá',
        'Closed Won' => 'Chốt đơn',
        'Closed Lost' => 'Thua thầu'
      ]
    ],
    'labels' => [
      'Create Opportunity' => 'Tạo cơ hội'
    ],
    'presetFilters' => [
      'open' => 'Mở',
      'won' => 'Thắng',
      'lost' => 'Thất bại'
    ]
  ],
  'TargetList' => [
    'fields' => [
      'name' => 'Tên',
      'description' => 'Mô tả',
      'entryCount' => 'Entry Count',
      'optedOutCount' => 'Opted Out Count',
      'campaigns' => 'Campaigns',
      'endDate' => 'Ngày kết thúc',
      'targetLists' => 'Danh sách mục tiêu',
      'includingActionList' => 'Including',
      'excludingActionList' => 'Excluding',
      'targetStatus' => 'Target Status',
      'isOptedOut' => 'Is Opted Out',
      'sourceCampaign' => 'Source Campaign'
    ],
    'links' => [
      'accounts' => 'Tài khoản',
      'contacts' => 'Contacts',
      'leads' => 'Lead',
      'campaigns' => 'Chiến dịch',
      'massEmails' => 'Mass Emails'
    ],
    'options' => [
      'type' => [
        'Email' => 'Email',
        'Web' => 'Trang web',
        'Television' => 'Truyền hình',
        'Radio' => 'Radio',
        'Newsletter' => 'Thư'
      ],
      'targetStatus' => [
        'Opted Out' => 'Opted Out',
        'Listed' => 'Listed'
      ]
    ],
    'labels' => [
      'Create TargetList' => 'Tạo danh sách mục tiêu',
      'Opted Out' => 'Opted Out',
      'Cancel Opt-Out' => 'Cancel Opt-Out',
      'Opt-Out' => 'Opt-Out'
    ]
  ],
  'Task' => [
    'fields' => [
      'name' => 'Tên',
      'parent' => 'Chủ',
      'status' => 'Trạng thái',
      'dateStart' => 'Ngày bắt đầu',
      'dateEnd' => 'Hạn',
      'dateStartDate' => 'Date Start (all day)',
      'dateEndDate' => 'Date End (all day)',
      'priority' => 'Ưu tiên',
      'description' => 'Mô tả',
      'isOverdue' => 'Đã quá hạn',
      'account' => 'Account',
      'dateCompleted' => 'Date Completed',
      'attachments' => 'Đính kèm',
      'reminders' => 'Nhắc nhở',
      'contact' => 'Danh bạ'
    ],
    'links' => [
      'attachments' => 'Đính kèm',
      'account' => 'Tài khoản',
      'contact' => 'Danh bạ',
      'email' => 'Email'
    ],
    'options' => [
      'status' => [
        'Not Started' => 'Chưa bắt đầu',
        'Started' => 'Đã bắt đầu',
        'Completed' => 'Hoàn thành',
        'Canceled' => 'Hủy',
        'Deferred' => 'Deferred'
      ],
      'priority' => [
        'Low' => 'Thấp',
        'Normal' => 'Bình thường',
        'High' => 'Cao',
        'Urgent' => 'Gấp'
      ]
    ],
    'labels' => [
      'Create Task' => 'Tạo nhiệm vụ',
      'Complete' => 'Hoàn thành',
      'overdue' => 'quá hạn'
    ],
    'presetFilters' => [
      'actual' => 'Hiện thời',
      'completed' => 'Hoàn thành',
      'deferred' => 'Deferred',
      'todays' => 'Hôm nay',
      'overdue' => 'Quá hạn'
    ],
    'nameOptions' => [
      'replyToEmail' => 'Reply to email'
    ]
  ]
];
