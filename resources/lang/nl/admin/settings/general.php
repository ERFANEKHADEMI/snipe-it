<?php

return array(
    'ad'				        => 'Active Directory',
    'ad_domain'				    => 'Active Directory domein',
    'ad_domain_help'			=> 'Dit is soms hetzelfde als je e-mail domein.',
    'is_ad'				        => 'Dit is een Active Directory server',
	'alert_email'				=> 'Verstuur meldingen naar',
	'alerts_enabled'			=> 'Meldingen ingeschakeld',
	'alert_interval'			=> 'Drempel verlopende meldingen (in dagen)',
	'alert_inv_threshold'		=> 'Inventaris melding drempel',
	'asset_ids'					=> 'Product ID\'s',
	'auto_increment_assets'		=> 'Genereer een auto-verhoging product ID\'s',
	'auto_increment_prefix'		=> 'Voorvoegsel (niet verplicht)',
	'auto_incrementing_help'    => 'Schakel eerst auto-verhoging voor product ID\'s in',
	'backups'					=> 'Back-ups',
	'barcode_settings'			=> 'Barcode instellingen',
    'confirm_purge'			    => 'Opschoning bevestigen',
    'confirm_purge_help'		=> 'Voer de tekst "DELETE" in het vak hieronder om uw verwijderde records op te schonen. Deze actie kan niet ongedaan worden gemaakt.',
	'custom_css'				=> 'Aangepaste CSS',
	'custom_css_help'			=> 'Voer een aangepaste CSS overschrijving die je wilt gebruiken in. Gebruik geen &lt;style&gt;&lt;/style&gt; tags.',
	'default_currency'  		=> 'Standaard valuta',
	'default_eula_text'			=> 'Standaard gebruikersovereenkomst',
  'default_language'					=> 'Standaardtaal',
	'default_eula_help_text'	=> 'Je kan aangepaste gebruikersovereenkomsten koppelen aan specifieke product categorieën.',
    'display_asset_name'        => 'Laat Product naam zien',
    'display_checkout_date'     => 'Laat Checkout datum zien',
    'display_eol'               => 'Laat EOL in tabel zien',
    'display_qr'                => 'QR codes weergeven',
	'display_alt_barcode'		=> 'Streepjescode weergeven',
	'barcode_type'				=> 'QR-code soort',
	'alt_barcode_type'			=> 'Streepjescode soort',
    'eula_settings'				=> 'Gebruikersovereenkomsten instellingen',
    'eula_markdown'				=> 'Deze gebruikersovereenkomst staat <a href="https://help.github.com/articles/github-flavored-markdown/">Github flavored markdown</a> toe.',
    'general_settings'			=> 'Algemene Instellingen',
	'generate_backup'			=> 'Genereer een backup',
    'header_color'              => 'Kleur van koptekst',
    'info'                      => 'Deze instellingen laten jou specifieke aspecten aanpassen van jou installatie.',
    'laravel'                   => 'Laravel Versie',
    'ldap_enabled'              => 'LDAP ingeschakeld',
    'ldap_integration'          => 'LDAP integratie',
    'ldap_settings'             => 'LDAP instellingen',
    'ldap_server'               => 'LDAP server',
    'ldap_server_help'          => 'Dit moet beginnen met ldap:// (voor onversleuteld of TLS) of ldaps:// (voor SSL)',
	'ldap_server_cert'			=> 'LDAP SSL certificaat validatie',
	'ldap_server_cert_ignore'	=> 'Staat ongeldige SSL certificaat toe',
	'ldap_server_cert_help'		=> 'Selecteer deze box als je een eigen ondergetekende SSL certificaat gebruik en deze wilt accepteren.',
    'ldap_tls'                  => 'TLS gebruiken',
    'ldap_tls_help'             => 'Dit moet alleen ingeschakeld worden als je STARTTLS op je LDAP server gebruikt. ',
    'ldap_uname'                => 'LDAP Bind gebruikersnaam',
    'ldap_pword'                => 'LDAP Bind wachtwoord',
    'ldap_basedn'               => 'Basis Bind DN',
    'ldap_filter'               => 'LDAP filter',
    'ldap_pw_sync'              => 'LDAP wachtwoord synchronisatie',
    'ldap_pw_sync_help'         => 'Schakel dit vinkje uit als je niet wenst dat LDAP wachtwoorden gesynchroniseerd worden met lokale wachtwoorden. Uitschakelen kan betekenen dat gebruikers niet kunnen inloggen als de LDAP server niet bereikbaar is.',
    'ldap_username_field'       => 'Gebruikersnaam veld',
    'ldap_lname_field'          => 'Achternaam',
    'ldap_fname_field'          => 'LDAP Voornaam',
    'ldap_auth_filter_query'    => 'LDAP verficatie query',
    'ldap_version'              => 'LDAP versie',
    'ldap_active_flag'          => 'LDAP actief vlag',
    'ldap_emp_num'              => 'LDAP personeelsnummer',
    'ldap_email'                => 'LDAP E-mail',
    'load_remote_text'          => 'Remote Scripts',
    'load_remote_help_text'		=> 'Deze Snipe-IT installatie kan scripts van de buitenwereld laden.',
    'logo'                    	=> 'Logo',
    'full_multiple_companies_support_help_text' => 'Beperk gebruikers (ook admins) die gekoppeld zijn aan hun bedrijf tot hun bedrijfsproducten.',
    'full_multiple_companies_support_text' => 'Volledige meerdere bedrijven ondersteuning',
    'optional'					=> 'mogelijk',
    'per_page'                  => 'Resultaten per pagina',
    'php'                       => 'PHP versie',
    'php_gd_info'               => 'Je moet php-gd installeren om QR codes te laten zien, zie installatie instructies.',
    'php_gd_warning'            => 'PHP Image Processing en GD plugin zijn NIET geïnstalleerd.',
    'qr_help'                   => 'Schakel QR codes eerst in om dit in te kunnen stellen',
    'qr_text'                   => 'QR Code tekst',
    'setting'                   => 'Instelling',
    'settings'                  => 'Instellingen',
    'site_name'                 => 'Site naam',
    'slack_botname'             => 'Slack Botname',
    'slack_channel'             => 'Slack kanaal',
    'slack_endpoint'            => 'Slack eindpunt',
    'slack_integration'         => 'Slack instellingen',
    'slack_integration_help'    => 'Slack intergratie is niet verplicht, maar de endpoint en kanaal zijn verplicht als je het wilt gebruiken. Om Slack integratie te configureren moet je eerst <a href=":slack_link" target="_new">maak een nieuwe webhook aan</a> in je Slack account.',
    'snipe_version'  			=> 'Snipe-IT Versie',
    'system'                    => 'Systeem informatie',
    'update'                    => 'Wijzig instelingen',
    'value'                     => 'Waarde',
    'brand'                     => 'Merk',
    'about_settings_title'      => 'Over instellingen',
    'about_settings_text'       => 'Deze instellingen laten jou specifieke aspecten aanpassen van jou installatie.',
    'labels_per_page'           => 'Labels per pagina',
    'label_dimensions'          => 'Label afmetingen (inches)',
    'page_padding'             => 'Pagina marges (inches)',
    'purge'                    => 'Verwijderde items opschonen',
    'labels_display_bgutter'    => 'Label ondermarge',
    'labels_display_sgutter'    => 'Label zijmarge',
    'labels_fontsize'           => 'Label lettergrootte',
    'labels_pagewidth'          => 'Label blad breedte',
    'labels_pageheight'         => 'Label blad hoogte',
    'label_gutters'        => 'Label tussenruimte (inches)',
    'page_dimensions'        => 'Pagina dimensies (inches)',
    'label_fields'          => 'Zichtbare velden op label',
    'inches'        => 'inches',
    'width_w'        => 'b',
    'height_h'        => 'h',
    'text_pt'        => 'pt',
    'left'        => 'links',
    'right'        => 'rechts',
    'top'        => 'bovenkant',
    'bottom'        => 'onderkant',
    'vertical'        => 'verticaal',
    'horizontal'        => 'horizontaal',
    'zerofill_count'        => 'Lengte van object ID, inclusief opvulling',
);
