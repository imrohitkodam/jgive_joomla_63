#
#<?php die('Forbidden.'); ?>
#Date: 2025-12-02 07:08:29 UTC
#Software: Joomla! 6.0.0 Stable [ Kuimarisha ] 14-October-2025 16:00 UTC

#Fields: datetime	priority clientip	category	message
2025-12-02T07:08:29+00:00	INFO 127.0.0.1	updater	Loading information from update site #4 with name "JGive" and URL https://techjoomla.com/updates/stream/jgive.xml?format=xml took 1.30 seconds
2025-12-02T07:08:33+00:00	CRITICAL 127.0.0.1	error	Uncaught Throwable of type Error thrown with message "Failed opening required '[ROOT]/libraries/techjoomla/object/object.php' (include_path='.:/usr/share/php')". Stack trace: #0 [ROOT]/libraries/loader.php(219): include_once()
#1 [ROOT]/components/com_tjfields/helpers/tjfields.php(16): JLoader::import()
#2 [ROOT]/components/com_tjfields/filterFields.php(24): require_once('...')
#3 [ROOT]/components/com_jgive/models/campaignform.php(31): require_once('...')
#4 [ROOT]/administrator/components/com_jgive/models/campaign.php(20): require_once('...')
#5 [ROOT]/administrator/components/com_jgive/controllers/campaigns.php(25): require_once('...')
#6 [ROOT]/libraries/src/MVC/Controller/BaseController.php(332): require_once('...')
#7 [ROOT]/administrator/components/com_jgive/jgive.php(125): Joomla\CMS\MVC\Controller\BaseController::getInstance()
#8 [ROOT]/libraries/src/Dispatcher/LegacyComponentDispatcher.php(71): require_once('...')
#9 [ROOT]/libraries/src/Dispatcher/LegacyComponentDispatcher.php(73): Joomla\CMS\Dispatcher\LegacyComponentDispatcher::Joomla\CMS\Dispatcher\{closure}()
#10 [ROOT]/libraries/src/Component/ComponentHelper.php(361): Joomla\CMS\Dispatcher\LegacyComponentDispatcher->dispatch()
#11 [ROOT]/libraries/src/Application/AdministratorApplication.php(150): Joomla\CMS\Component\ComponentHelper::renderComponent()
#12 [ROOT]/libraries/src/Application/AdministratorApplication.php(205): Joomla\CMS\Application\AdministratorApplication->dispatch()
#13 [ROOT]/libraries/src/Application/CMSApplication.php(320): Joomla\CMS\Application\AdministratorApplication->doExecute()
#14 [ROOT]/administrator/includes/app.php(58): Joomla\CMS\Application\CMSApplication->execute()
#15 [ROOT]/administrator/index.php(32): require_once('...')
#16 {main}
