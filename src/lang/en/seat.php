<?php
/*
This file is part of SeAT

Copyright (C) 2015, 2016  Leon Jacobs

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License along
with this program; if not, write to the Free Software Foundation, Inc.,
51 Franklin Street, Fifth Floor, Boston, MA 02110-1301 USA.
*/

return [

    // General
    'home'                  => 'Home',
    'character'             => 'Character|Characters',
    'corporation'           => 'Corporation|Corporations',
    'user'                  => 'User|Users',
    'last_update'           => 'Last Update',
    'unknown'               => 'Unknown',
    'note'                  => 'Note',
    'name'                  => 'Name|Names',
    'granted'               => 'Granted',
    'denied'                => 'Denied',
    'enabled'               => 'Enabled',
    'disabled'              => 'Disabled',
    'username'              => 'Username',
    'email'                 => 'Email',
    'close'                 => 'Close',
    'date'                  => 'Date',
    'status'                => 'Status',
    'id'                    => 'ID|IDs',
    'type'                  => 'Type|Types',
    'expiry'                => 'Expiry',
    'never'                 => 'Never',
    'detail'                => 'Detail|Details',
    'delete'                => 'Delete',
    'verify'                => 'Verify',
    'reset'                 => 'Reset',
    'back'                  => 'Back',
    'summary'               => 'Summary',
    'quantity'              => 'Quantity',
    'volume'                => 'Volume',
    'group'                 => 'Group',
    'owner'                 => 'Owner',
    'description'           => 'Description',
    'labels'                => 'Labels',
    'created'               => 'Created',
    'issuer'                => 'Issuer',
    'title'                 => 'Title|Titles',
    'price'                 => 'Price',
    'reward'                => 'Reward',
    'collateral'            => 'Collateral',
    'location'              => 'Location',
    'filter'                => 'Filter|Filters',
    'clear'                 => 'Clear',
    'none'                  => 'None',
    'permission'            => 'Permission|Permissions',
    'affiliation'           => 'Affiliation|Affiliations',
    'role'                  => 'Role|Roles',
    'edit'                  => 'Edit',
    'remove'                => 'Remove',
    'yes'                   => 'Yes',
    'no'                    => 'No',
    'update'                => 'Update',
    'action'                => 'Action',
    'key'                   => 'Key',
    'log'                   => 'Log|Logs',
    'view'                  => 'View',
    'item'                  => 'Item|Items',
    'usage'                 => 'Usage',
    'unit'                  => 'Unit|Units',
    'add'                   => 'Add',
    'all'                   => 'All',
    'inverse'               => 'Inverse',
    'read'                  => 'Read',
    'level'                 => 'Level',

    // Requirements
    'requirements'          => 'Requirements',
    'requirements_message'  => 'The following list shows missing PHP extentions. Please install' .
        ' them first before you can continue.',
    'php_version'           => 'PHP Version',
    'php_version_message'   => 'The installed version of PHP does not meet the minimum version' .
        ' requirement for SeAT. Please upgrade your PHP installation.',
    'installed_version'     => 'Installed Version',
    'min_version'           => 'Minimum Version',
    'admin_contact_warning' => 'An administrative contact for this install has not been set.' .
        ' No jobs will be queued because of this. Please configure it in the SeAT settings.',
    'sso_email_warning'     => 'This profile is using an auto generated email addres due to it ' .
        ' being an EVE SSO login. Please set a valid email address in your profile settings.',

    // Auth
    'failed'                => 'These credentials do not match our records.',
    'throttle'              => 'Too many login attempts. Please try again in :seconds seconds.',
    'login_welcome'         => 'Welcome, please enter your credentials.',
    'remember_me'           => 'Remember me',
    'password'              => 'Password',
    'password_again'        => 'Password Again',
    'forgot'                => 'I forgot my password',
    'register'              => 'Register a new membership',
    'sign_in'               => 'Sign In',
    'mfa_welcome'           => 'Please enter an Authentication Code to proceed.',
    'mfa'                   => 'Multifactor Auth',
    'email_verify'          => 'Email Verification',
    'email_verify_welcome'  => 'Please enter a valid email address for your account.',

    // Registration
    'new_account'           => 'New Account',
    'register_welcome'      => 'Please choose a username and a strong password.',
    'register_eve_warn'     => 'Do not use the same password that you use to log onto Eve Online',
    'existing_account'      => 'I already have an account',
    'register_account'      => 'Register Account',

    // Passwords
    'password_reset'        => 'Password Reset',
    'reset_welcome'         => 'Please enter the email address for the account whos password should be reset.',
    'remember'              => 'I remember my credentials',
    'reset_topic'           => 'Reset Password',
    'reset_token_welcome'   => 'Please enter the email and new password.',

    // Header
    'toggle_navigation'     => 'Toggle Navigation',
    'queued'                => 'Queued',
    'working'               => 'Working',
    'joined'                => 'Joined',
    'profile'               => 'Profile',
    'sign_out'              => 'Sign Out',

    // Notifications
    'error'                 => 'Error',
    'success'               => 'Success',
    'warning'               => 'Warning',
    'notice'                => 'Notice',
    'info'                  => 'Info',

    // Menu
    'api_key_management'    => 'API Key Management',
    'add_api_key'           => 'Add a EVE API Key',
    'list_keys'             => 'List EVE API Keys',
    'all_char'              => 'All Characters',
    'mail_timeline'         => 'Mail Timeline',
    'all_corp'              => 'All Corporations',
    'configuration'         => 'Configuration',
    'access'                => 'Access Management',
    'other'                 => 'Other',
    'tools'                 => 'Tools',
    'security_logs'         => 'Security Logs',
    'import'                => 'Import API Keys',
    'settings'              => 'SeAT Settings',
    'schedule'              => 'Schedule',
    'no_main_char'          => 'No Main Character',
    'hello'                 => 'Hello',
    'online'                => 'Online',
    'search'                => 'Search',
    'main_menu'             => 'Main Menu',
    'security'              => 'Security',
    'tracking'              => 'Tracking',

    'assets'                      => 'Assets',
    'calendar'                    => 'Calendar',
    'channels'                    => 'Channels',
    'contacts'                    => 'Contacts',
    'contracts'                   => 'Contracts',
    'industry'                    => 'Industry',
    'intel'                       => 'Intel',
    'killmails'                   => 'Killmails',
    'mail'                        => 'Mail',
    'market'                      => 'Market',
    'notifications'               => 'Notifications',
    'pi'                          => 'PI',
    'research'                    => 'Research',
    'sheet'                       => 'Sheet',
    'skills'                      => 'Skills',
    'standings'                   => 'Standings',
    'wallet_journal'              => 'Wallet Journal',
    'wallet_transactions'         => 'Wallet Transactions',

    // Dashboard
    'home_page'                   => 'The Home Page',
    'dashboard'                   => 'Dashboard',
    'online_layers'               => 'Online Players',
    'owned_api_keys'              => 'Owned API Keys',
    'total_character_isk'         => 'Total Character ISK',
    'total_character_skillpoints' => 'Total Character Skillpoints',
    'total_killmails'             => 'Total Killmails',
    'main_char_skills'            => ':character_name\'s Skills',
    'main_char_skills_per_level'  => 'Skills Per Level',
    'main_char_skills_coverage'   => 'Skills Coverage (in percent)',

    // Api Keys
    'api_key_add'                 => 'Add a New API Key',
    'key_id'                      => 'Key ID',
    'v_code'                      => 'Verification Code',
    'check_key'                   => 'Check Key',
    'api_new_key'                 => 'Create a New API Key',
    'api_use_link'                => 'Use the following link to create a new API Key',
    'api_full_link'               => 'Full API Key for All Characters',
    'api_full_min_mask'           => 'API Key with minimum Mask needed',
    'insufficient_access_mask'    => 'This API Key does not meet the minimum Access Mask required',
    'api_key_info'                => 'API Key Info',
    'api_key_type'                => 'API Key Type',
    'api_access_mask'             => 'API Access Mask',
    'api_add_type_key'            => 'Add :type Api Key',
    'api_add_job'                 => 'Adding an Api Key will automatically queue a new update job for it',
    'api_min_mask'                => 'Min. Mask',
    'api_access'                  => 'Access',
    'api_detail'                  => 'API Key Detail',
    'api_key_status'              => 'API Key Status',
    'api_job_update'              => 'Queue an Update Job',
    'owner_info'                  => 'Owner Information',
    'no_owner'                    => 'This API Key has no Owner',
    'last_login'                  => 'Last Login',
    'account_status'              => 'Account Status',
    'transfer_ownership'          => 'Transfer Ownership',
    'seat_user'                   => 'SeAT User',
    'transfer'                    => 'Transfer',
    'mask_map_fail'               => 'Unable to load the Access Mask map',
    'recent_jobs'                 => 'Recent Jobs',
    'scope'                       => 'Scope',
    'api_all'                     => 'All API Keys',
    'reveal'                      => 'Reveal',
    'add_success'                 => 'Api Key Successfully Added. Update Job :jobid Dispatched',
    're_enable'                   => 'Re-enable Key',
    'reenable_all_disabled'       => 'Re-enable all disabled keys',

    // People
    'people_groups'               => 'People Groups',
    'unaffiliated_keys'           => 'Unaffiliated Keys',
    'add_to_existing'             => 'Add to Existing',
    'add_to_existing_group'       => 'Add to Existing Group',
    'group_main'                  => 'Group Main',
    'new_group_with_main'         => 'New Group with :name as Main',

    // Access
    'access_mangement'            => 'Access Management',
    'quick_add_role'              => 'Quick Add Role',
    'role_name'                   => 'Role Name',
    'add_new_role'                => 'Add New Role',
    'available_roles'             => 'Available Roles',
    'quick_add_user'              => 'Quick Add User',
    'add_new_user'                => 'Add New User',
    'edit_role'                   => 'Edit Role',
    'available_permissions'       => 'Available Permissions',
    'grant_permissions'           => 'Grant Permissions',
    'inverse_permission'          => 'Inverse Permission',
    'inverse_affiliation'         => 'Inverse Affiliation',
    'current_permissions'         => 'Current Permissions',
    'has_superuser'               => 'Has Superuser',
    'permission_inherit'          => 'Inherits All Permissions',
    'available_corporations'      => 'Available Corporations',
    'available_characters'        => 'Available Characters',
    'add_affiliations'            => 'Add Affiliations',
    'current_affiliations'        => 'Current Affiliations',
    'available_users'             => 'Available Users',
    'add_user'                    => 'Add User|Add Users',
    'current_users'               => 'Current Users',
    'select_item_add'             => 'Select a Item to Add',
    'impersonate'                 => 'Impersonate',
    'edit_user'                   => 'Edit User',
    'activate_user'               => 'Activate User',
    'deactivate_user'             => 'Deactivate User',
    'account_status_change'       => 'The account status has been changed',
    'user_agent'                  => 'User Agent String',
    'login_history'               => 'Login History',
    'role_summary'                => 'Role Summary',
    'user_updated'                => 'The user has been updated',
    'user_deleted'                => 'The user has been deleted',
    'self_delete_warning'         => 'You can not delete yourself!',
    'impersonating'               => 'Impersonating :user',
    'user_created'                => 'User Created',
    'unauthorized_request'        => 'Unauthorized Request',
    'unauthorized_request_logged' => 'This attempt has been logged.',

    'role_added'                   => 'Role has been added',
    'role_removed'                 => 'Role has been removed',
    'permissions_granted'          => 'Permissions have been granted',
    'permission_revoked'           => 'Permission has been revoked',
    'user_added'                   => 'Users were added to this role',
    'user_removed'                 => 'User has been removed from this role',
    'affiliations_added'           => 'Affiliations were added to this role',
    'affiliation_removed'          => 'Affiliation has been removed from this role',

    // Import
    'api_import_title'             => 'Import Eve Online API Keys',
    'csv_data_source'              => 'CSV Data Source File',
    'help'                         => 'Help',
    'importing_csv_data'           => 'Import CSV Data',
    'csv_format_explained'         => 'The file format for the CSV is keyID,vCode and sampled below',
    'important_notes'              => 'Important Notes',
    'curr_user_becomes_owner'      => 'The current user (:user) will become the owner of the API keys.',
    'only_format_is_checked'       => 'Only API key format is checked here. No checking is done to ensure that ' .
        'minimum api masks are configured.',
    'update_with_next_job'         => 'Key data will only populate once the next updater job comes by, or is manually started.',

    // Schedule
    'new_schedule'                 => 'New Schedule',
    'available_commands'           => 'Available Commands',
    'cron_expression'              => 'Cron Expression',
    'current_schedule'             => 'Current Schedule',
    'command'                      => 'Command',
    'cron'                         => 'Cron',
    'allow_overlap'                => 'Allow Overlap',
    'allow_maintenance'            => 'Allow in Maintenance Mode',
    'scheduled_commands'           => 'Scheduled Commands',
    'choose_prepop'                => 'Choose a pre-populated cron expression, or write your own.',
    'add_scheduled'                => 'Add Scheduled Command',

    // Security
    'category'                     => 'Category',
    'message'                      => 'Message',
    'source'                       => 'Source',

    // Ledger
    'ledger'                       => 'Wallet Ledger',
    'bountyprizesbymonth'          => 'Bounty Prizes By Month',
    'bountyprizetotal'             => 'Prize Total',
    'pitotals'                     => 'PI Total Taxes',
    'wallet_division_name'         => 'Wallet Division Name',
    'wallet_summary'               => 'Wallet Summary|Wallet Summaries',

    // Users
    'user_management'              => 'User Management',

    // Settings
    'admin_email'                  => 'Administrator Email',
    'admin_email_help'             => 'Please enter the email address of the administrator of this SeAT installation.',
    'min_access_mask'              => 'Minimum Required Access Mask',
    'min_character_access_mask'    => 'Minimum Required Character Access Mask',
    'min_corporation_access_mask'  => 'Minimum Required Corporation Access Mask',
    'force_min_mask'               => 'Force Min. Access Mask',
    'registration'                 => 'Registration',
    'single_signon'                => 'Eve Online Single Signon',
    'admin_warn_sso'               => 'Double check you EVE_CLIENT_ID, EVE_CLIENT_SECRET and EVE_CALLBACK_URL' .
        ' values in the .env file as they may be empty or invalid. SSO can fail because of this!',
    'allow_sso'                    => 'Allow Single Signon',
    'allow_registration'           => 'Allow Registration',
    'module_versions'              => 'SeAT Module Versions',
    'tp_versions'                  => 'Third Party Versions',
    'installed'                    => 'Installed',
    'current'                      => 'Current',
    'url'                          => 'Url',
    'google_analytics'             => 'Google Analytics',
    'allow_tracking'               => 'Allow Tracking',
    'tracking_id'                  => 'Unique Tracking ID',
    'tracking_help'                => 'Before disabling the usage tracking, please refer to the below' .
        ' document first.',

    // Character
    'joined_curr_corp'             => 'Joined Current Corporation',
    'skillpoint'                   => 'Skillpoint|Skillpoints',
    'account_balance'              => 'Account Balance',
    'current_ship'                 => 'Current Ship',
    'last_location'                => 'Last Location',
    'security_status'              => 'Security Status',
    'items_taking'                 => 'items taking',
    'calendar_events'              => 'Calendar Events',
    'positive_standings'           => 'Positive Standings',
    'neutral_standings'            => 'Neutral Standings',
    'negative_standings'           => 'Negative Standings',
    'start'                        => 'Start',
    'installer'                    => 'Installer',
    'system'                       => 'System',
    'activity'                     => 'Activity',
    'run'                          => 'Run|Runs',
    'blueprint'                    => 'Blueprint',
    'product'                      => 'Product',
    'victim'                       => 'Victim',
    'ship_type'                    => 'Ship Type',
    'transaction_type'             => 'Transaction Type',
    'owner_1'                      => 'From',
    'owner_2'                      => 'To',
    'amount'                       => 'Amount',
    'balance'                      => 'Balance',
    'corporation_name'             => 'Corporation Name',
    'from'                         => 'From',
    'subject'                      => 'Subject',
    'to'                           => 'To',
    'to_corp_alliance'             => 'To Corporation / Alliance',
    'to_char'                      => 'To Characters',
    'total'                        => 'Total',
    'updated'                      => 'Updated At',
    'planet'                       => 'Planet',
    'upgrade_level'                => 'Upgrade Level',
    'no_pins'                      => '# Pins',
    'agent'                        => 'Agent',
    'skill'                        => 'Skill|Skills',
    'points_p_day'                 => 'Points per Day',
    'remainder'                    => 'Remainder',
    'skills_summary'               => 'Skills Summary',
    'curr_training'                => 'Currently Training',
    'skill_training_end'           => 'Skill Training End',
    'skill_queue'                  => 'Skill Queue',
    'no_skill_training'            => 'No Skill in Training',
    'empty_skill_queue'            => 'The Skill Queue is Empty',
    'account_info'                 => 'Account Information',
    'paid_until'                   => 'Paid Until',
    'logon_count'                  => 'Logon Count',
    'online_time'                  => 'Online Time',
    'jump_fatigue'                 => 'Jump Fatigue',
    'jump_clones'                  => 'Jump Clones',
    'jump_act_timer'               => 'Jump Activiation Timer',
    'no_jump_clones'               => 'No Jump Clones',
    'implants'                     => 'Implants',
    'no_implants'                  => 'No Implants',
    'employment_history'           => 'Employment History',
    'corporation_titles'           => 'Corporation Titles',
    'item_type'                    => 'Item Type',
    'client_name'                  => 'Client Name',
    'client'                       => 'Client',
    'qty'                          => '#',
    'unknown_character'            => 'Unknown Character. Is the API Key on record and updated?',
    'no_account_info'              => 'No Account Information Available',
    'channel_members'              => 'Channel Members',
    'motd'                         => 'MoTD',
    'bookmark'                     => 'Bookmark|Bookmarks',
    'coordinates'                  => 'Coordinates',
    'folder'                       => 'Folder',
    'skills_graph'                 => 'Skills Graph',

    // Character Intel
    'loading_journal'              => 'Loading Journal Entries ...',
    'loading_transactions'         => 'Loading Transaction Entries ...',
    'loading_mail'                 => 'Loading Mail Entries...',

    // Corporation
    'alliance'                     => 'Alliance',
    'ticker'                       => 'Ticker',
    'ceo'                          => 'CEO',
    'home_station'                 => 'Home Station',
    'tax_rate'                     => 'Tax Rate',
    'member_count'                 => 'Member Count',
    'roles_change_log'             => 'Roles Change Log',
    'affected'                     => 'Affected',
    'member_limit'                 => 'Member Limit',
    'shares'                       => 'Shares',
    'member_capacity'              => 'Member Capacity',
    'divisional_information'       => 'Divisional Information',
    'corporation_divisions'        => 'Corporation Divisions',
    'wallet_divisions'             => 'Wallet Divisions',
    'unknown_corporation'          => 'Unknown Corporation. Is the API Key on record and updated?',
    'created_by'                   => 'Created By',
    'starbase'                     => 'Starbase|Starbases',
    'state'                        => 'State',
    'fuel_level'                   => 'Fuel Level',
    'offline'                      => 'Offline Est.',
    'cargo_usage'                  => 'Cargo Usage',
    'onlined_at'                   => 'Onlined At',
    'moon'                         => 'Moon',
    'use_standings_from'           => 'Use Standings From',
    'attack_on_agression'          => 'Attack On Agression',
    'attack_on_war'                => 'Attack On War',
    'corp_member_access'           => 'Corp Member Access',
    'alliance_member_access'       => 'Alliance Member Access',
    'fuel_levels'                  => 'Fuel Levels',
    'fuel_blocks'                  => 'Fuel Blocks',
    'fuel_usage'                   => 'Fuel Usage',
    'low_fuel'                     => 'Low Fuel',
    'stront_usage'                 => 'Strontium Usage',
    'blocks_p_h'                   => 'Blocks p/h',
    'units_p_h'                    => 'Units p/h',
    'sov_bonus'                    => 'Sovereignty Bonus',
    'reinforce_estimate'           => 'Reinforcement Estimate',
    'module'                       => 'Module|Modules',
    'content'                      => 'Content',
    'no_known_assets'              => 'No Known Assets',
    'volume_usage'                 => 'Volume Usage',
    'loading_modules'              => 'Loading Module Information...',
    'pocos'                        => 'Pocos',
    'reinforcement'                => 'Reinforcement',
    'standing_level'               => 'Standing Level',
    'tax_alliance_corp'            => 'Tax: Alliance/Corp',
    'tax_standings'                => 'Tax: Standings',

    // Profile
    'user_profile'                 => 'User Profile',
    'user_preferences'             => 'User Preferences',
    'user_account'                 => 'User Account',
    'account_settings'             => 'Account Settings',
    'change_password'              => 'Change Password',
    'change_email'                 => 'Change Email',
    'superuser'                    => 'Superuser',
    'user_interface'               => 'User Interface',
    'main_character'               => 'Main Character',
    'seat_skin'                    => 'SeAT Skin',
    'language'                     => 'Language',
    'sidebar_size'                 => 'Sidebar Size',
    'number_format'                => 'Number Format',
    'current_format'               => 'Current Format',
    'thousands_seperator'          => 'Thousands Seperator',
    'decimal_seperator'            => 'Decimal Seperator',
    'email_notifications'          => 'Email Notifications',
    'require_mfa'                  => 'Require MFA',
    'setup_token_now'              => 'Setup Token Now',
    'owned_keys'                   => 'Owned Keys',
    'account_help'                 => 'For any account related enquiries, including permissions amendments, ' .
        'please contact the SeAT administrator.',
    'current_password'             => 'Current Password',
    'new_password'                 => 'New Password',
    'confirm_new_password'         => 'Confirm New Password',
    'current_email'                => 'Current Email',
    'new_email'                    => 'New Email',
    'confirm_new_email'            => 'Confirm New Email',
    'mfa_setup'                    => 'Multifactor Authentication Setup',
    'scan_qr'                      => 'Scan QR Code',
    'scan_qr_help1'                => 'Please scan the below QR code with your authenticator application.',
    'scan_qr_help2'                => 'Each time this page loads, a new token and qr code is generated.',
    'supported_apps'               => 'Supported Google Authenticator Apps',
    'preferred_apps'               => 'Preferred Apps',
    'other_apps'                   => 'Other Apps',
    'confirm_code'                 => 'Confirm an Authentication Code',
    'confirm_help'                 => 'Next, confirm your setup by entering a confirmation code generated ' .
        'by your authentication application.',
    'code'                         => 'Code',
    'confirm_setup'                => 'Confirm Setup',

    // Queue
    'queue_manage'                 => 'Queue Management',
    'total_jobs'                   => 'Total Jobs',
    'queued_jobs'                  => 'Queued Jobs',
    'working_jobs'                 => 'Working Jobs',
    'error_jobs'                   => 'Errored Jobs',
    'complete'                     => ' complete.',
    'history'                      => 'History',
    'submit_jobs'                  => 'Submit Jobs',
    'job_submit_desc'              => 'These buttons allow you to manually queue jobs into the scheduler. It ' .
        'runs exactly the same commands as you would on the commandline or via the scheduler.',
    'no_working'                   => 'There are currently no working jobs',
    'no_queue'                     => 'There are currently no queued jobs',
    'job_error_detail'             => 'Job Error Details',
    'error_details_desc'           => 'This is a full stack trace for this job error. If this is not something ' .
        'that you understand, or a developer has asked for this, please copy the entire section below ' .
        'and paste it on a site such as pastebin and send the link along.',
    'full_job_error'               => 'Full Job Error Detail',
    'job_id'                       => 'Job ID',
    'api'                          => 'Api',
    'actions'                      => 'Actions',
    'owner_id'                     => 'Owner ID',
    'clear_all_errors'             => 'Clear All Errors',
    'output'                       => 'Output',
    'last_output'                  => 'Last Output',
    'view_full'                    => 'View Full',
    'no_errors'                    => 'There are no known errors',
    'clear_all_history'            => 'Clear All History',
    'job_history'                  => 'Job History',
    'no_history'                   => 'There are no historical jobs',
    'eve_api_status'               => 'EVE API Status',
    'eve_api_error_threshold'      => 'API Errors',
    'eve_api_connection_threshold' => 'Connection Errors',
    'supervisor_offline'           => 'Offline',
    'supervisor_online'            => 'Online',

    // Tools
    'standings_builder'            => 'Standings Builder',

    // Footer
    'web_version'                  => 'Web Version',
    'sde_version'                  => 'SDE Version',
    'render_in'                    => 'Rendered In',
    'copyright'                    => 'Copyright',
];

