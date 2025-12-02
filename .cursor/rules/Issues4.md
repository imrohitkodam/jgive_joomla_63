Issue 1:
An error has occurred.
0 Call to a member function getCampaignUrl() on null
Call Stack
#	Function	Location
1	()	JROOT/plugins/system/jgiveactivities/helper.php:620
2	PlgSystemJgiveActivitiesHelper->addCampaignActivity()	JROOT/plugins/system/jgiveactivities/jgiveactivities.php:282
3	PlgSystemJgiveActivities->onAfterJGCampaignCreate()	JROOT/libraries/src/Plugin/CMSPlugin.php:386
4	Joomla\CMS\Plugin\CMSPlugin->Joomla\CMS\Plugin\{closure}()	JROOT/libraries/vendor/joomla/event/src/Dispatcher.php:454
5	Joomla\Event\Dispatcher->dispatch()	JROOT/libraries/src/Application/EventAware.php:111
6	Joomla\CMS\Application\WebApplication->triggerEvent()	JROOT/components/com_jgive/models/campaignform.php:845
7	JGiveModelCampaignForm->save()	JROOT/administrator/components/com_jgive/controllers/campaign.php:192
8	JGiveControllerCampaign->save()	JROOT/libraries/src/MVC/Controller/BaseController.php:730
9	Joomla\CMS\MVC\Controller\BaseController->execute()	JROOT/administrator/components/com_jgive/jgive.php:126
10	require_once()	JROOT/libraries/src/Dispatcher/LegacyComponentDispatcher.php:71
11	Joomla\CMS\Dispatcher\LegacyComponentDispatcher::Joomla\CMS\Dispatcher\{closure}()	JROOT/libraries/src/Dispatcher/LegacyComponentDispatcher.php:73
12	Joomla\CMS\Dispatcher\LegacyComponentDispatcher->dispatch()	JROOT/libraries/src/Component/ComponentHelper.php:361
13	Joomla\CMS\Component\ComponentHelper::renderComponent()	JROOT/libraries/src/Application/AdministratorApplication.php:150
14	Joomla\CMS\Application\AdministratorApplication->dispatch()	JROOT/libraries/src/Application/AdministratorApplication.php:205
15	Joomla\CMS\Application\AdministratorApplication->doExecute()	JROOT/libraries/src/Application/CMSApplication.php:320
16	Joomla\CMS\Application\CMSApplication->execute()	JROOT/administrator/includes/app.php:58
17	require_once()	JROOT/administrator/index.php:32

issue occured while created and tried to save campaign

