Issue 1:

An error has occurred.
0 Class "JFormField" not found
Call Stack
#	Function	Location
1	()	JROOT/media/com_jgive/fields/legend.php:37
2	require_once()	JROOT/libraries/src/Form/FormHelper.php:271
3	Joomla\CMS\Form\FormHelper::loadClass()	JROOT/libraries/src/Form/FormHelper.php:136
4	Joomla\CMS\Form\FormHelper::loadType()	JROOT/libraries/src/Form/FormHelper.php:78
5	Joomla\CMS\Form\FormHelper::loadFieldType()	JROOT/libraries/src/Form/Form.php:1463
6	Joomla\CMS\Form\Form->loadField()	JROOT/libraries/src/Form/Form.php:304
7	Joomla\CMS\Form\Form->getFieldset()	JROOT/libraries/src/Form/Form.php:565
8	Joomla\CMS\Form\Form->renderFieldset()	JROOT/administrator/components/com_config/tmpl/component/default.php:111
9	include()	JROOT/libraries/src/MVC/View/HtmlView.php:416
10	Joomla\CMS\MVC\View\HtmlView->loadTemplate()	JROOT/libraries/src/MVC/View/HtmlView.php:204
11	Joomla\CMS\MVC\View\HtmlView->display()	JROOT/administrator/components/com_config/src/View/Component/HtmlView.php:135
12	Joomla\Component\Config\Administrator\View\Component\HtmlView->display()	JROOT/libraries/src/MVC/Controller/BaseController.php:697
13	Joomla\CMS\MVC\Controller\BaseController->display()	JROOT/administrator/components/com_config/src/Controller/DisplayController.php:64
14	Joomla\Component\Config\Administrator\Controller\DisplayController->display()	JROOT/libraries/src/MVC/Controller/BaseController.php:730
15	Joomla\CMS\MVC\Controller\BaseController->execute()	JROOT/libraries/src/Dispatcher/ComponentDispatcher.php:143
16	Joomla\CMS\Dispatcher\ComponentDispatcher->dispatch()	JROOT/libraries/src/Component/ComponentHelper.php:361
17	Joomla\CMS\Component\ComponentHelper::renderComponent()	JROOT/libraries/src/Application/AdministratorApplication.php:150
18	Joomla\CMS\Application\AdministratorApplication->dispatch()	JROOT/libraries/src/Application/AdministratorApplication.php:205
19	Joomla\CMS\Application\AdministratorApplication->doExecute()	JROOT/libraries/src/Application/CMSApplication.php:320
20	Joomla\CMS\Application\CMSApplication->execute()	JROOT/administrator/includes/app.php:58
21	require_once()	JROOT/administrator/index.php:32

Referance link : http://ttpl-rt-234-php83.local/joomla_63/administrator/index.php?option=com_config&view=component&component=com_jgive&path=&return=aHR0cDovL3R0cGwtcnQtMjM0LXBocDgzLmxvY2FsL2pvb21sYV82My9hZG1pbmlzdHJhdG9yL2luZGV4LnBocD9vcHRpb249Y29tX2pnaXZlJnZpZXc9Y2FtcGFpZ25z