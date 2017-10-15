<?php
namespace Concrete\Package\PaprikasPackage;

use Concrete\Core\Package\Package;
use Concrete\Core\Page\Theme\Theme;
use Concrete\Core\Support\Facade\Express;
//use Concrete\Core\Express;

defined('C5_EXECUTE') or die("Access denied");

class Controller extends Package
{
    protected $pkgHandle = 'paprikas_package';
    protected $appVersionRequired = '5.8';
    protected $pkgVersion = '1.0';

    public function getPackageDescription()
    {
        return t("Customized for Paprikas");
    }

    public function getPackageName()
    {
        return t("Paprikas Package");
    }

    public function install()
    {
        $pkg = parent::install();
        Theme::add('paprikas', $pkg);

        // Create Express object
        $student = Express::buildObject('student', 'students', 'Student', $pkg);
        $student->addAttribute('text', 'First Name', 'first_name');
        $student->addAttribute('text', 'Last Name', 'last_name');
        $student->addAttribute('textarea', 'Bio', 'bio');
        $student->addAttribute('datetime', 'Birthday', 'birthday');

        $student->save();

        // Create form
        $form = $student->buildForm('Form');
        $form->addFieldset('Basics')
            ->addAttributeKeyControl('first_name')
            ->addAttributeKeyControl('last_name')
            ->addAttributeKeyControl('birthday')
            ->addTextControl('', 'This is just some basic explanatory text.')
            ->addAttributeKeyControl('bio');
        $form = $form->save();

        // Set default forms
        $student->getEntity()->setDefaultViewForm($form);
        $student->getEntity()->setDefaultEditForm($form);
        $student->save();
    }
}