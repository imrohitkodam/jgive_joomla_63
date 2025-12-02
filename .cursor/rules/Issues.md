Issue 1: 
An error has occurred.
0 Class "JModelLegacy" not found
Call Stack
#	Function	Location
1	()	JROOT/components/com_jgive/models/campaignform.php:49
2	require_once()	JROOT/administrator/components/com_jgive/models/campaign.php:20
3	require_once()	JROOT/administrator/components/com_jgive/controllers/campaigns.php:25
4	require_once()	JROOT/libraries/src/MVC/Controller/BaseController.php:332
5	Joomla\CMS\MVC\Controller\BaseController::getInstance()	JROOT/administrator/components/com_jgive/jgive.php:125
6	require_once()	JROOT/libraries/src/Dispatcher/LegacyComponentDispatcher.php:71
7	Joomla\CMS\Dispatcher\LegacyComponentDispatcher::Joomla\CMS\Dispatcher\{closure}()	JROOT/libraries/src/Dispatcher/LegacyComponentDispatcher.php:73
8	Joomla\CMS\Dispatcher\LegacyComponentDispatcher->dispatch()	JROOT/libraries/src/Component/ComponentHelper.php:361
9	Joomla\CMS\Component\ComponentHelper::renderComponent()	JROOT/libraries/src/Application/AdministratorApplication.php:150
10	Joomla\CMS\Application\AdministratorApplication->dispatch()	JROOT/libraries/src/Application/AdministratorApplication.php:205
11	Joomla\CMS\Application\AdministratorApplication->doExecute()	JROOT/libraries/src/Application/CMSApplication.php:320
12	Joomla\CMS\Application\CMSApplication->execute()	JROOT/administrator/includes/app.php:58
13	require_once()	JROOT/administrator/index.php:32

On this location : http://ttpl-rt-234-php83.local/joomla_62/administrator/index.php?option=com_jgive&view=campaigns&layout=


Issue 2: 
An error has occurred.
0 Class "Toolbar" not found
Call Stack
#	Function	Location
1	()	JROOT/administrator/components/com_jgive/views/donors/view.html.php:104
2	JGiveViewDonors->addToolbar()	JROOT/administrator/components/com_jgive/views/donors/view.html.php:87
3	JGiveViewDonors->display()	JROOT/libraries/src/MVC/Controller/BaseController.php:697
4	Joomla\CMS\MVC\Controller\BaseController->display()	JROOT/administrator/components/com_jgive/controller.php:45
5	JGiveController->display()	JROOT/libraries/src/MVC/Controller/BaseController.php:730
6	Joomla\CMS\MVC\Controller\BaseController->execute()	JROOT/administrator/components/com_jgive/jgive.php:126
7	require_once()	JROOT/libraries/src/Dispatcher/LegacyComponentDispatcher.php:71
8	Joomla\CMS\Dispatcher\LegacyComponentDispatcher::Joomla\CMS\Dispatcher\{closure}()	JROOT/libraries/src/Dispatcher/LegacyComponentDispatcher.php:73
9	Joomla\CMS\Dispatcher\LegacyComponentDispatcher->dispatch()	JROOT/libraries/src/Component/ComponentHelper.php:361
10	Joomla\CMS\Component\ComponentHelper::renderComponent()	JROOT/libraries/src/Application/AdministratorApplication.php:150
11	Joomla\CMS\Application\AdministratorApplication->dispatch()	JROOT/libraries/src/Application/AdministratorApplication.php:205
12	Joomla\CMS\Application\AdministratorApplication->doExecute()	JROOT/libraries/src/Application/CMSApplication.php:320
13	Joomla\CMS\Application\CMSApplication->execute()	JROOT/administrator/includes/app.php:58
14	require_once()	JROOT/administrator/index.php:32

On this location : http://ttpl-rt-234-php83.local/joomla_62/administrator/index.php?option=com_jgive&view=donors

Issue 3: 

An error has occurred.
0 Class "ToolbarHelper" not found
Call Stack
#	Function	Location
1	()	JROOT/administrator/components/com_tjfields/views/fields/view.html.php:107
2	TjfieldsViewFields->addToolbar()	JROOT/administrator/components/com_tjfields/views/fields/view.html.php:56
3	TjfieldsViewFields->display()	JROOT/libraries/src/MVC/Controller/BaseController.php:697
4	Joomla\CMS\MVC\Controller\BaseController->display()	JROOT/administrator/components/com_tjfields/controller.php:62
5	TjfieldsController->display()	JROOT/libraries/src/MVC/Controller/BaseController.php:730
6	Joomla\CMS\MVC\Controller\BaseController->execute()	JROOT/administrator/components/com_tjfields/tjfields.php:80
7	require_once()	JROOT/libraries/src/Dispatcher/LegacyComponentDispatcher.php:71
8	Joomla\CMS\Dispatcher\LegacyComponentDispatcher::Joomla\CMS\Dispatcher\{closure}()	JROOT/libraries/src/Dispatcher/LegacyComponentDispatcher.php:73
9	Joomla\CMS\Dispatcher\LegacyComponentDispatcher->dispatch()	JROOT/libraries/src/Component/ComponentHelper.php:361
10	Joomla\CMS\Component\ComponentHelper::renderComponent()	JROOT/libraries/src/Application/AdministratorApplication.php:150
11	Joomla\CMS\Application\AdministratorApplication->dispatch()	JROOT/libraries/src/Application/AdministratorApplication.php:205
12	Joomla\CMS\Application\AdministratorApplication->doExecute()	JROOT/libraries/src/Application/CMSApplication.php:320
13	Joomla\CMS\Application\CMSApplication->execute()	JROOT/administrator/includes/app.php:58
14	require_once()	JROOT/administrator/index.php:32

On this location : http://ttpl-rt-234-php83.local/joomla_62/administrator/index.php?option=com_tjfields&view=fields&client=com_jgive.campaign

Issue 4: 

An error has occurred.
0 Class "ToolbarHelper" not found
Call Stack
#	Function	Location
1	()	JROOT/administrator/components/com_tjfields/views/groups/view.html.php:112
2	TjfieldsViewGroups->addToolbar()	JROOT/administrator/components/com_tjfields/views/groups/view.html.php:56
3	TjfieldsViewGroups->display()	JROOT/libraries/src/MVC/Controller/BaseController.php:697
4	Joomla\CMS\MVC\Controller\BaseController->display()	JROOT/administrator/components/com_tjfields/controller.php:62
5	TjfieldsController->display()	JROOT/libraries/src/MVC/Controller/BaseController.php:730
6	Joomla\CMS\MVC\Controller\BaseController->execute()	JROOT/administrator/components/com_tjfields/tjfields.php:80
7	require_once()	JROOT/libraries/src/Dispatcher/LegacyComponentDispatcher.php:71
8	Joomla\CMS\Dispatcher\LegacyComponentDispatcher::Joomla\CMS\Dispatcher\{closure}()	JROOT/libraries/src/Dispatcher/LegacyComponentDispatcher.php:73
9	Joomla\CMS\Dispatcher\LegacyComponentDispatcher->dispatch()	JROOT/libraries/src/Component/ComponentHelper.php:361
10	Joomla\CMS\Component\ComponentHelper::renderComponent()	JROOT/libraries/src/Application/AdministratorApplication.php:150
11	Joomla\CMS\Application\AdministratorApplication->dispatch()	JROOT/libraries/src/Application/AdministratorApplication.php:205
12	Joomla\CMS\Application\AdministratorApplication->doExecute()	JROOT/libraries/src/Application/CMSApplication.php:320
13	Joomla\CMS\Application\CMSApplication->execute()	JROOT/administrator/includes/app.php:58
14	require_once()	JROOT/administrator/index.php:32

On this location : http://ttpl-rt-234-php83.local/joomla_62/administrator/index.php?option=com_tjfields&view=groups&client=com_jgive.campaign

Issue 5: 
An error has occurred.
0 Class "HTMLHelperSidebar" not found
Call Stack
#	Function	Location
1	()	JROOT/administrator/components/com_tjfields/views/countries/view.html.php:154
2	TjfieldsViewCountries->addToolbar()	JROOT/administrator/components/com_tjfields/views/countries/view.html.php:68
3	TjfieldsViewCountries->display()	JROOT/libraries/src/MVC/Controller/BaseController.php:697
4	Joomla\CMS\MVC\Controller\BaseController->display()	JROOT/administrator/components/com_tjfields/controller.php:62
5	TjfieldsController->display()	JROOT/libraries/src/MVC/Controller/BaseController.php:730
6	Joomla\CMS\MVC\Controller\BaseController->execute()	JROOT/administrator/components/com_tjfields/tjfields.php:80
7	require_once()	JROOT/libraries/src/Dispatcher/LegacyComponentDispatcher.php:71
8	Joomla\CMS\Dispatcher\LegacyComponentDispatcher::Joomla\CMS\Dispatcher\{closure}()	JROOT/libraries/src/Dispatcher/LegacyComponentDispatcher.php:73
9	Joomla\CMS\Dispatcher\LegacyComponentDispatcher->dispatch()	JROOT/libraries/src/Component/ComponentHelper.php:361
10	Joomla\CMS\Component\ComponentHelper::renderComponent()	JROOT/libraries/src/Application/AdministratorApplication.php:150
11	Joomla\CMS\Application\AdministratorApplication->dispatch()	JROOT/libraries/src/Application/AdministratorApplication.php:205
12	Joomla\CMS\Application\AdministratorApplication->doExecute()	JROOT/libraries/src/Application/CMSApplication.php:320
13	Joomla\CMS\Application\CMSApplication->execute()	JROOT/administrator/includes/app.php:58
14	require_once()	JROOT/administrator/index.php:32

On this location : http://ttpl-rt-234-php83.local/joomla_62/administrator/index.php?option=com_tjfields&view=countries&client=com_jgive

On this location : http://ttpl-rt-234-php83.local/joomla_62/administrator/index.php?option=com_tjfields&view=regions&client=com_jgive

On this location : http://ttpl-rt-234-php83.local/joomla_62/administrator/index.php?option=com_tjfields&view=cities&client=com_jgive

