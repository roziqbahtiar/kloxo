<?php 

class Sgbl
{

	function __construct()
	{

		$this->arg_getting_string = '
		$arglist = array();
		for ($i = $start; $i < func_num_args(); $i++) {
			if (isset($transforming_func)) {
				$arglist[] = $transforming_func(func_get_arg($i));
			} else {
				$arglist[] = func_get_arg($i);
			}
		}';

		$this->initDeviceDescriptions();
		$this->initLanguages();
		$this->initLTypes();
		$this->initCtTypes();

		$this->__var_program_name = 'kloxo';
		$this->__ver_major = "6";
		$this->__ver_minor = "1";
		$this->__ver_release = "18";
		$this->__ver_enterprise = "Single Server Edition";
		$this->__ver_type = "production";
		$this->__ver_extra = "Stable";
		$this->__ver_major_minor = $this->__ver_major . "." . $this->__ver_minor;
		$this->__ver_major_minor_release = $this->__ver_major . "." . $this->__ver_minor . "." . $this->__ver_release;
		$this->__var_nname_impstr = "___";
		$this->__var_prog_port = "7778";
		$this->__var_prog_ssl_port = "7777";

		$this->__var_lxlabs_marker = "__lxlabs_marker";
		$this->__var_lpanelwidth = "220";

		if (windowsOs()) {
			$this->__var_quote_char = "\"";
			$this->__var_database_type = "sqlite";

			$this->__path_mysqldump_path = "C:/Program Files/lxlabs/ext/Mysql/";

			$this->__path_tmp = "c:/tmp";
			$this->__path_slash = "c:/tmp";
			$this->__path_user_root = "c:/usr";
			$this->__path_var_root = "c:/var";
			$this->__path_log = "d:/var/log";
			$this->__path_root_base = "my_computer";

			$this->__path_named_path = "c:/var/named";
			$this->__path_named_conf = "c:/etc/named.conf";
			$this->__path_apache_root = "c:/home/kloxo/httpd";
			$this->__path_apache_path = "d:/etc/httpd/conf";
			$this->__path_mysql_datadir = "/var/lib/mysql/";
			$this->__path_customer_root = "c:/webroot/";
			$this->__path_real_etc_root = "c:/etc/";

			$this->__path_etc_root = "C:/Program Files";
			$this->__ver_extra = "Beta";

			$this->__path_program_home = "c:/kloxo";

			$this->__path_home_dir = "d:/";
			$this->__path_client_root = "c:/home/kloxo/client";
			$this->__path_kloxo_httpd_root = "c:/Program Files/kloxodata";
			$this->__path_lxlabs_base = "c:/Program Files/lxlabs";
			$this->__path_program_root = "c:/Program Files/lxlabs/kloxo";
			$this->__path_program_htmlbase = "c:/Program Files/lxlabs/kloxo/httpdocs";
			$this->__path_mail_root = "c:/home/lxadmin/mail/domains";
			$this->__path_httpd_root  = "c:/httproot";
			$this->__path_perl_path  = "c:/Program Files/Perl/perl.exe";
			$this->__path_program_etc = "C:/Program Files/lxlabs/kloxo/etc";
			$this->__path_php_path =  $this->__path_lxlabs_base . "/ext/php/php.exe";

		} else {

			$this->__var_quote_char = "'";
			$this->__path_perl_path = "/usr/bin/perl";
			$this->__path_kloxo_back_phpini = "/etc/kloxo-backup-php.ini";
			$this->__var_database_type = "mysql";
			$this->__path_mysqlclient_path = "mysql";
			$this->__path_mysqldump_path = "mysqldump";
			$this->__var_noaccess_shell = '/sbin/nologin';
			$this->__path_named_path = "/var/named";
			$this->__path_customer_root = "/home";
			$this->__path_mysql_datadir = "/var/lib/mysql/";

			$this->__path_slash = "/";
			$this->__path_tmp = "/tmp";
			$this->__path_user_root = "/usr";
			$this->__path_var_root = "/var";
			$this->__path_real_etc_root = "/etc";
			$this->__path_log = "/var/log";
			$this->__path_root_base = "/";

			$this->__path_mara_path = "";
			$this->__path_mara_chroot = "/etc/maradns/";
			$this->__path_mara_conf = "/etc/mararc";

			$this->__path_program_home = "/home/kloxo";
			$this->__path_home_dir = "/home";
			$this->__path_named_conf = "/etc/kloxo.named.conf";
			$this->__path_named_chroot = "";
			$this->__path_home_root = "/home/kloxo";
			$this->__path_apache_path = "/etc/httpd/conf/";
			$this->__path_lighty_path = "/etc/lighttpd/";
			$this->__path_cron_root = '/var/spool/cron/';
			$this->__path_real_etc_root = "/etc/";

			$this->__path_httpd_root = "/home/httpd";
			$this->__path_client_root = "/home/kloxo/client";
			$this->__path_mail_root = "/home/lxadmin/mail";
			$this->__path_kloxo_httpd_root = "/home/kloxo/httpd";
			$this->__path_lxlabs_base = "/usr/local/lxlabs";
			$this->__path_program_etc = "/usr/local/lxlabs/kloxo/etc/";
			$this->__path_program_root = "/usr/local/lxlabs/kloxo";
			$this->__path_program_htmlbase = "/usr/local/lxlabs/kloxo/httpdocs";
			$this->__path_php_path = $this->__path_lxlabs_base . "/ext/php/php";
		}

		$this->__path_serverfile = $this->__path_lxlabs_base . "/kloxo/serverfile";
		$this->__path_download_dir = $this->__path_lxlabs_base . "/kloxo/download";

		$this->__path_program_start_vps_flag = $this->__path_program_root . "/etc/flag/start_vps.flg";

		$this->__path_installapp_servervar = $this->__path_kloxo_httpd_root . "/installappdata/lx_template.servervars.phps";

		//Default Values that will be overrriden in the kloxoconf file.
		$this->__path_named_chroot = "/var/named/chroot/";
		$this->__var_progservice_apache = 'httpd';
		$this->__var_programname_ftp = 'pure-ftpd';
		$this->__var_programname_syslog = 'syslog';
		//$this->__var_programname_mysql = 'mysqld';
		$this->__var_progservice_bind = 'named';
		$this->__var_programname_mmail = 'qmail';
		$this->__var_programname_imap = 'courier-imap';
		$this->__var_programuser_dns = 'named';

		$this->__var_no_sync = false;

		$this->__path_ssl_root = $this->__path_kloxo_httpd_root . "/ssl";
		$this->__path_named_realpath = "$this->__path_named_chroot/$this->__path_named_path";

		$this->__var_mssqlport = '7773';
		$this->__var_local_port = '7776';
		$this->__var_remote_port = '7779';

        // Send version to LxCenter for statistics about Kloxo usages.
        // Only Sends the Kloxo Version
        $this->__var_programname_stats = 'yes';

		$conffile = "$this->__path_program_root/file/conf/os.conf";

		if (!file_exists($conffile)) {

			$ret = findOperatingSystem();
			$os = $ret['os'];

			copy("$this->__path_program_root/file/conf/$os.conf", $conffile);
		}

		$this->__var_exit_char = "___...___";
		$this->__var_remote_char = "_._";

		$this->__var_connection_type = "tcp";
		include_once $conffile;

		if (!$conf) {
			print("Error Reading Config File...\n");
			exit;
		}

		foreach($conf as $k => $v) {
			if (!is_array($v)) {
				print("Error in Config File Syntax...\n");
				exit;
			}

			$vvarcore = "__{$k}_";
			foreach($v as $nk => $nv) {
				$vvar =  $vvarcore . $nk;
				$this->$vvar = $nv;
			}
		}

		$this->__path_dbschema = "$this->__path_program_root/file/.db_schema";

		if ($this->__var_database_type === "sqlite") {
			$this->__var_dbf = "{$this->__path_program_etc}/conf/db.db";
		} else {
			$this->__var_dbf = "kloxo";
		}

		$this->__path_super_pass = $this->__path_program_etc . "/conf/superadmin.pass";
		$this->__path_admin_pass = $this->__path_program_etc . "/conf/kloxo.pass";
		$this->__path_master_pass = $this->__path_program_etc . "/conf/kloxo.pass";

		$this->__var_super_user = "lxasuper";
		$this->__var_admin_user = "kloxo";

		$this->__path_slave_db = $this->__path_program_etc . "/conf/slave-db.db";
		$this->__path_supernode_db = "lxasuper";

		$this->__path_sql_file_supernode  = "$this->__path_program_htmlbase/sql/supernode";
		$this->__path_sql_file  = "$this->__path_program_htmlbase/sql/full";
		$this->__path_sql_file_common  = "$this->__path_program_htmlbase/sql/common";

		$this->__path_updating_file = $this->__path_program_etc . "/.updating";
		$this->__path_httpd_conf_file = $this->__path_apache_path . "/httpd.conf";
		$this->__path_mail_log = $this->__path_log . "/maillog";
		$this->__path_boot_log = $this->__path_log . "/boot.log";
		$this->__path_cron_log = $this->__path_log . "/cron";
		$this->__path_mysql_log = $this->__path_log . "/mysqld.log";
		$this->__path_vsftpd_log = $this->__path_log . "/vsftpd.log";
		$this->__path_lxmisc = $this->__path_program_root . "/sbin/lxmisc";

		$this->__var_rolelist = array("web", "mail", "dns", "secondary_master");

		$this->__var_dblist = array("mysql");

		$this->__var_error_file = "__path_program_root/httpdocs/.php.err";

		$this->__var_ticket_subcategory = null;
	}

	private function initLanguages()
	{
		$this->__var_language['tr'] = 'Turkish';
		$this->__var_language['en'] = 'English';
		$this->__var_language['cen'] = 'Custom English';
		$this->__var_language['cn'] = 'Chinese';
		$this->__var_language['es'] = 'Spanish';
		$this->__var_language['de'] = 'German';
		$this->__var_language['it'] = 'Italian';
		$this->__var_language['fr'] = 'French';
		$this->__var_language['cz'] = 'Czech';
		$this->__var_language['nl'] = 'Dutch';
		$this->__var_language['pt'] = 'Portuguese';
		$this->__var_language['pl'] = 'Polish';
		$this->__var_language['lt'] = 'Lithuanian';
		$this->__var_language['bg'] = 'Bulgarian';
		$this->__var_language['jp'] = 'Japanese';
		$this->__var_language['kr'] = 'Korean';
		$this->__var_language['ru'] = 'Russian';
		$this->__var_language['se'] = 'Swedish';
		$this->__var_language['ro'] = 'Romanian';
		$this->__var_language['br'] = 'Brazilian Portuguese';
		$this->__var_language['hu'] = 'Hungarian';
        $this->__var_language['fa'] = 'Persian';
    }

	private function initDeviceDescriptions()
	{
		$this->__var_service_desc['httpd'] = "Apache Web Server";
		$this->__var_service_desc['apache2'] = "Apache Web Server";
		$this->__var_service_desc['qmail'] = "Qmail Mail Server";
		$this->__var_service_desc['named'] = "Bind Dns Server";
		$this->__var_service_desc['bind9'] = "Bind Dns Server";
		$this->__var_service_desc['pure-ftpd'] = "Pureftp Ftp Server";
		$this->__var_service_desc['courier'] = "Courier Pop/Imap Server";
		$this->__var_service_desc['courier-imap'] = "Courier Pop/Imap Server";
	}

	private function initLTypes()
	{
		$this->__var_ltype['kloxoaccount'] = 'client';
		$this->__var_ltype['serveradmin'] = 'pserver';
		$this->__var_ltype['domainowner'] = 'domain';
		$this->__var_ltype['sysuser'] = 'uuser';
		$this->__var_ltype['mailuser'] = 'mailaccount';
		$this->__var_ltype['ftpuser'] = 'ftpuser';
		$this->__var_ltype['superclient'] = 'superclient';
	}

	private function initCtTypes()
	{
		$this->__var_cttype['superadmin'] = 4;
		$this->__var_cttype['superclient'] = 5;
		$this->__var_cttype['node'] = 7;
		$this->__var_cttype['admin'] = 11;
		$this->__var_cttype['master'] = 15;
		$this->__var_cttype['wholesale'] = 20;
		$this->__var_cttype['reseller'] = 30;
		$this->__var_cttype['customer'] = 40;
		$this->__var_cttype['pserver'] = 50;
		$this->__var_cttype['domain'] = 60;
		$this->__var_cttype['uuser'] = 70;
		$this->__var_cttype['ftpuser'] = 80;
		$this->__var_cttype['mailaccount'] = 90;
	}

	function getlType($classname)
	{
		return array_search($classname, $this->__var_ltype);
	}

	function isDebug()
	{
		return ($this->dbg > 0);
	}

	function isLxlabsClient()
	{
		return ($this->__var_program_name === 'lxlabsclient');
	}

	function isBlackBackground()
	{
		return false;
		return $this->isDebug();
	}

	function isKloxo()
	{
		return ($this->__var_program_name === 'kloxo');
	}

	function isKloxoForRestore()
	{
		return $this->isKloxo();
	}

	function isLive()
	{
		return false;
	}

	function isHyperVm()
	{
		return ($this->__var_program_name === 'hypervm');
	}

	function is_this_master()
	{
		return !$this->is_this_slave();
	}

	function is_this_slave()
	{
		return lxfile_exists("__path_slave_db");
	}

}
