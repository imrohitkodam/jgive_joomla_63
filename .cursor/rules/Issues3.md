An error has occurred.
0 Class "JFormField" not found
Call Stack
#	Function	Location
1	()	JROOT/administrator/components/com_jgive/models/fields/imagedisplay.php:22
2	require_once()	JROOT/libraries/src/Form/FormHelper.php:271
3	Joomla\CMS\Form\FormHelper::loadClass()	JROOT/libraries/src/Form/FormHelper.php:136
4	Joomla\CMS\Form\FormHelper::loadType()	JROOT/libraries/src/Form/FormHelper.php:78
5	Joomla\CMS\Form\FormHelper::loadFieldType()	JROOT/libraries/src/Form/Form.php:1463
6	Joomla\CMS\Form\Form->loadField()	JROOT/libraries/src/Form/Form.php:446
7	Joomla\CMS\Form\Form->getGroup()	JROOT/layouts/joomla/form/field/subform/repeatable/section.php:47
8	include()	JROOT/libraries/src/Layout/FileLayout.php:128
9	Joomla\CMS\Layout\FileLayout->render()	JROOT/libraries/src/Layout/FileLayout.php:636
10	Joomla\CMS\Layout\FileLayout->sublayout()	JROOT/layouts/joomla/form/field/subform/repeatable.php:70
11	include()	JROOT/libraries/src/Layout/FileLayout.php:128
12	Joomla\CMS\Layout\FileLayout->render()	JROOT/libraries/src/Form/Field/SubformField.php:274
13	Joomla\CMS\Form\Field\SubformField->getInput()	JROOT/libraries/src/Form/FormField.php:1070
14	Joomla\CMS\Form\FormField->renderField()	JROOT/libraries/src/Form/Form.php:547
15	Joomla\CMS\Form\Form->renderField()	JROOT/administrator/components/com_jgive/views/campaign/tmpl/edit_bs5.php:58
16	include()	JROOT/libraries/src/MVC/View/HtmlView.php:416
17	Joomla\CMS\MVC\View\HtmlView->loadTemplate()	JROOT/administrator/components/com_jgive/views/campaign/tmpl/edit.php:20
18	include()	JROOT/libraries/src/MVC/View/HtmlView.php:416
19	Joomla\CMS\MVC\View\HtmlView->loadTemplate()	JROOT/libraries/src/MVC/View/HtmlView.php:204
20	Joomla\CMS\MVC\View\HtmlView->display()	JROOT/administrator/components/com_jgive/views/campaign/view.html.php:144
21	JGiveViewCampaign->display()	JROOT/libraries/src/MVC/Controller/BaseController.php:697
22	Joomla\CMS\MVC\Controller\BaseController->display()	JROOT/administrator/components/com_jgive/controller.php:45
23	JGiveController->display()	JROOT/libraries/src/MVC/Controller/BaseController.php:730
24	Joomla\CMS\MVC\Controller\BaseController->execute()	JROOT/administrator/components/com_jgive/jgive.php:126
25	require_once()	JROOT/libraries/src/Dispatcher/LegacyComponentDispatcher.php:71
26	Joomla\CMS\Dispatcher\LegacyComponentDispatcher::Joomla\CMS\Dispatcher\{closure}()	JROOT/libraries/src/Dispatcher/LegacyComponentDispatcher.php:73
27	Joomla\CMS\Dispatcher\LegacyComponentDispatcher->dispatch()	JROOT/libraries/src/Component/ComponentHelper.php:361
28	Joomla\CMS\Component\ComponentHelper::renderComponent()	JROOT/libraries/src/Application/AdministratorApplication.php:150
29	Joomla\CMS\Application\AdministratorApplication->dispatch()	JROOT/libraries/src/Application/AdministratorApplication.php:205
30	Joomla\CMS\Application\AdministratorApplication->doExecute()	JROOT/libraries/src/Application/CMSApplication.php:320
31	Joomla\CMS\Application\CMSApplication->execute()	JROOT/administrator/includes/app.php:58
32	require_once()	JROOT/administrator/index.php:32

http://ttpl-rt-234-php83.local/joomla_62/administrator/index.php?option=com_jgive&view=campaign&layout=edit