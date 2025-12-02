Issue 1:

An error has occurred.
0 Class "JFormField" not found
Call Stack
#	Function	Location
1	()	JROOT/administrator/components/com_jgive/models/fields/amount.php:24
2	require_once()	JROOT/libraries/src/Form/FormHelper.php:271
3	Joomla\CMS\Form\FormHelper::loadClass()	JROOT/libraries/src/Form/FormHelper.php:136
4	Joomla\CMS\Form\FormHelper::loadType()	JROOT/libraries/src/Form/FormHelper.php:78
5	Joomla\CMS\Form\FormHelper::loadFieldType()	JROOT/libraries/src/Form/Form.php:1463
6	Joomla\CMS\Form\Form->loadField()	JROOT/libraries/src/Form/Form.php:233
7	Joomla\CMS\Form\Form->getField()	JROOT/libraries/src/Form/Form.php:544
8	Joomla\CMS\Form\Form->renderField()	JROOT/administrator/components/com_jgive/views/campaign/tmpl/edit_details_bs5.php:156
9	include()	JROOT/libraries/src/MVC/View/HtmlView.php:416
10	Joomla\CMS\MVC\View\HtmlView->loadTemplate()	JROOT/administrator/components/com_jgive/views/campaign/tmpl/edit_bs5.php:47
11	include()	JROOT/libraries/src/MVC/View/HtmlView.php:416
12	Joomla\CMS\MVC\View\HtmlView->loadTemplate()	JROOT/administrator/components/com_jgive/views/campaign/tmpl/edit.php:20
13	include()	JROOT/libraries/src/MVC/View/HtmlView.php:416
14	Joomla\CMS\MVC\View\HtmlView->loadTemplate()	JROOT/libraries/src/MVC/View/HtmlView.php:204
15	Joomla\CMS\MVC\View\HtmlView->display()	JROOT/administrator/components/com_jgive/views/campaign/view.html.php:144
16	JGiveViewCampaign->display()	JROOT/libraries/src/MVC/Controller/BaseController.php:697
17	Joomla\CMS\MVC\Controller\BaseController->display()	JROOT/administrator/components/com_jgive/controller.php:45
18	JGiveController->display()	JROOT/libraries/src/MVC/Controller/BaseController.php:730
19	Joomla\CMS\MVC\Controller\BaseController->execute()	JROOT/administrator/components/com_jgive/jgive.php:126
20	require_once()	JROOT/libraries/src/Dispatcher/LegacyComponentDispatcher.php:71
21	Joomla\CMS\Dispatcher\LegacyComponentDispatcher::Joomla\CMS\Dispatcher\{closure}()	JROOT/libraries/src/Dispatcher/LegacyComponentDispatcher.php:73
22	Joomla\CMS\Dispatcher\LegacyComponentDispatcher->dispatch()	JROOT/libraries/src/Component/ComponentHelper.php:361
23	Joomla\CMS\Component\ComponentHelper::renderComponent()	JROOT/libraries/src/Application/AdministratorApplication.php:150
24	Joomla\CMS\Application\AdministratorApplication->dispatch()	JROOT/libraries/src/Application/AdministratorApplication.php:205
25	Joomla\CMS\Application\AdministratorApplication->doExecute()	JROOT/libraries/src/Application/CMSApplication.php:320
26	Joomla\CMS\Application\CMSApplication->execute()	JROOT/administrator/includes/app.php:58
27	require_once()	JROOT/administrator/index.php:32

Referance link : http://ttpl-rt-234-php83.local/joomla_62/administrator/index.php?option=com_jgive&view=campaign&layout=edit

Issue 2: 

An error has occurred.
0 Class "HTMLHelperSidebar" not found
Call Stack
#	Function	Location
1	()	JROOT/administrator/components/com_jgive/views/donors/view.html.php:132
2	JGiveViewDonors->addToolbar()	JROOT/administrator/components/com_jgive/views/donors/view.html.php:88
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

Referance link : http://ttpl-rt-234-php83.local/joomla_62/administrator/index.php?option=com_jgive&view=donors

Issue 3:

An error has occurred.
0 Class "jFactory" not found
Call Stack
#	Function	Location
1	()	JROOT/administrator/components/com_tjfields/views/fields/tmpl/default_bs5.php:35
2	include()	JROOT/libraries/src/MVC/View/HtmlView.php:416
3	Joomla\CMS\MVC\View\HtmlView->loadTemplate()	JROOT/administrator/components/com_tjfields/views/fields/tmpl/default.php:20
4	include()	JROOT/libraries/src/MVC/View/HtmlView.php:416
5	Joomla\CMS\MVC\View\HtmlView->loadTemplate()	JROOT/libraries/src/MVC/View/HtmlView.php:204
6	Joomla\CMS\MVC\View\HtmlView->display()	JROOT/administrator/components/com_tjfields/views/fields/view.html.php:63
7	TjfieldsViewFields->display()	JROOT/libraries/src/MVC/Controller/BaseController.php:697
8	Joomla\CMS\MVC\Controller\BaseController->display()	JROOT/administrator/components/com_tjfields/controller.php:62
9	TjfieldsController->display()	JROOT/libraries/src/MVC/Controller/BaseController.php:730
10	Joomla\CMS\MVC\Controller\BaseController->execute()	JROOT/administrator/components/com_tjfields/tjfields.php:80
11	require_once()	JROOT/libraries/src/Dispatcher/LegacyComponentDispatcher.php:71
12	Joomla\CMS\Dispatcher\LegacyComponentDispatcher::Joomla\CMS\Dispatcher\{closure}()	JROOT/libraries/src/Dispatcher/LegacyComponentDispatcher.php:73
13	Joomla\CMS\Dispatcher\LegacyComponentDispatcher->dispatch()	JROOT/libraries/src/Component/ComponentHelper.php:361
14	Joomla\CMS\Component\ComponentHelper::renderComponent()	JROOT/libraries/src/Application/AdministratorApplication.php:150
15	Joomla\CMS\Application\AdministratorApplication->dispatch()	JROOT/libraries/src/Application/Administrathttp://ttpl-rt-234-php83.local/joomla_62/administrator/index.php?option=com_tjfields&view=fields&client=com_jgive.campaignorApplication.php:205
16	Joomla\CMS\Application\AdministratorApplication->doExecute()	JROOT/libraries/src/Application/CMSApplication.php:320
17	Joomla\CMS\Application\CMSApplication->execute()	JROOT/administrator/includes/app.php:58
18	require_once()	JROOT/administrator/index.php:32

referance link : http://ttpl-rt-234-php83.local/joomla_62/administrator/index.php?option=com_tjfields&view=fields&client=com_jgive.campaign

Issue 4: 

An error has occurred.
0 Class "JFormField" not found
Call Stack
#	Function	Location
1	()	JROOT/administrator/components/com_tjfields/models/fields/createdby.php:20
2	require_once()	JROOT/libraries/src/Form/FormHelper.php:271
3	Joomla\CMS\Form\FormHelper::loadClass()	JROOT/libraries/src/Form/FormHelper.php:136
4	Joomla\CMS\Form\FormHelper::loadType()	JROOT/libraries/src/Form/FormHelper.php:78
5	Joomla\CMS\Form\FormHelper::loadFieldType()	JROOT/libraries/src/Form/Form.php:1463
6	Joomla\CMS\Form\Form->loadField()	JROOT/libraries/src/Form/Form.php:233
7	Joomla\CMS\Form\Form->getField()	JROOT/libraries/src/Form/Form.php:488
8	Joomla\CMS\Form\Form->getLabel()	JROOT/administrator/components/com_tjfields/views/group/tmpl/edit_bs5.php:77
9	include()	JROOT/libraries/src/MVC/View/HtmlView.php:416
10	Joomla\CMS\MVC\View\HtmlView->loadTemplate()	JROOT/administrator/components/com_tjfields/views/group/tmpl/edit.php:20
11	include()	JROOT/libraries/src/MVC/View/HtmlView.php:416
12	Joomla\CMS\MVC\View\HtmlView->loadTemplate()	JROOT/libraries/src/MVC/View/HtmlView.php:204
13	Joomla\CMS\MVC\View\HtmlView->display()	JROOT/administrator/components/com_tjfields/views/group/view.html.php:53
14	TjfieldsViewGroup->display()	JROOT/libraries/src/MVC/Controller/BaseController.php:697
15	Joomla\CMS\MVC\Controller\BaseController->display()	JROOT/administrator/components/com_tjfields/controller.php:62
16	TjfieldsController->display()	JROOT/libraries/src/MVC/Controller/BaseController.php:730
17	Joomla\CMS\MVC\Controller\BaseController->execute()	JROOT/administrator/components/com_tjfields/tjfields.php:80
18	require_once()	JROOT/libraries/src/Dispatcher/LegacyComponentDispatcher.php:71
19	Joomla\CMS\Dispatcher\LegacyComponentDispatcher::Joomla\CMS\Dispatcher\{closure}()	JROOT/libraries/src/Dispatcher/LegacyComponentDispatcher.php:73
20	Joomla\CMS\Dispatcher\LegacyComponentDispatcher->dispatch()	JROOT/libraries/src/Component/ComponentHelper.php:361
21	Joomla\CMS\Component\ComponentHelper::renderComponent()	JROOT/libraries/src/Application/AdministratorApplication.php:150
22	Joomla\CMS\Application\AdministratorApplication->dispatch()	JROOT/libraries/src/Application/AdministratorApplication.php:205
23	Joomla\CMS\Application\AdministratorApplication->doExecute()	JROOT/libraries/src/Application/CMSApplication.php:320
24	Joomla\CMS\Application\CMSApplication->execute()	JROOT/administrator/includes/app.php:58
25	require_once()	JROOT/administrator/index.php:32

Referance link : http://ttpl-rt-234-php83.local/joomla_62/administrator/index.php?option=com_tjfields&view=group&layout=edit&client=com_jgive.campaign

Issue 5: 

An error has occurred.
0 Class "ToolbarHelper" not found
Call Stack
#	Function	Location
1	()	JROOT/administrator/components/com_tjfields/views/country/view.html.php:93
2	TjfieldsViewCountry->addToolbar()	JROOT/administrator/components/com_tjfields/views/country/view.html.php:53
3	TjfieldsViewCountry->display()	JROOT/libraries/src/MVC/Controller/BaseController.php:697
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

Referance link : http://ttpl-rt-234-php83.local/joomla_62/administrator/index.php?option=com_tjfields&view=country&layout=edit&client=com_jgive

Issue 6:

An error has occurred.
0 Class "ToolbarHelper" not found
Call Stack
#	Function	Location
1	()	JROOT/administrator/components/com_tjfields/views/country/view.html.php:93
2	TjfieldsViewCountry->addToolbar()	JROOT/administrator/components/com_tjfields/views/country/view.html.php:53
3	TjfieldsViewCountry->display()	JROOT/libraries/src/MVC/Controller/BaseController.php:697
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

http://ttpl-rt-234-php83.local/joomla_62/administrator/index.php?option=com_tjfields&view=region&layout=edit&client=com_jgive