<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit99476055b40e798c865fde06554b27a1
{
    public static $prefixLengthsPsr4 = array (
        'A' => 
        array (
            'Autoindex\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Autoindex\\' => 
        array (
            0 => __DIR__ . '/../..' . '/classes',
        ),
    );

    public static $classMap = array (
        'Autoindex\\Accounts' => __DIR__ . '/../..' . '/classes/Accounts.php',
        'Autoindex\\Admin' => __DIR__ . '/../..' . '/classes/Admin.php',
        'Autoindex\\ConfigData' => __DIR__ . '/../..' . '/classes/ConfigData.php',
        'Autoindex\\DirItem' => __DIR__ . '/../..' . '/classes/DirItem.php',
        'Autoindex\\DirectoryList' => __DIR__ . '/../..' . '/classes/DirectoryList.php',
        'Autoindex\\DirectoryListDetailed' => __DIR__ . '/../..' . '/classes/DirectoryListDetailed.php',
        'Autoindex\\Display' => __DIR__ . '/../..' . '/classes/Display.php',
        'Autoindex\\ExceptionDisplay' => __DIR__ . '/../..' . '/classes/ExceptionDisplay.php',
        'Autoindex\\FileItem' => __DIR__ . '/../..' . '/classes/FileItem.php',
        'Autoindex\\Ftp' => __DIR__ . '/../..' . '/classes/Ftp.php',
        'Autoindex\\Htaccess' => __DIR__ . '/../..' . '/classes/Htaccess.php',
        'Autoindex\\Icon' => __DIR__ . '/../..' . '/classes/Icon.php',
        'Autoindex\\Image' => __DIR__ . '/../..' . '/classes/Image.php',
        'Autoindex\\Item' => __DIR__ . '/../..' . '/classes/Item.php',
        'Autoindex\\Language' => __DIR__ . '/../..' . '/classes/Language.php',
        'Autoindex\\Logging' => __DIR__ . '/../..' . '/classes/Logging.php',
        'Autoindex\\MimeType' => __DIR__ . '/../..' . '/classes/MimeType.php',
        'Autoindex\\Search' => __DIR__ . '/../..' . '/classes/Search.php',
        'Autoindex\\Size' => __DIR__ . '/../..' . '/classes/Size.php',
        'Autoindex\\Stats' => __DIR__ . '/../..' . '/classes/Stats.php',
        'Autoindex\\Tar' => __DIR__ . '/../..' . '/classes/Tar.php',
        'Autoindex\\Template' => __DIR__ . '/../..' . '/classes/Template.php',
        'Autoindex\\TemplateFiles' => __DIR__ . '/../..' . '/classes/TemplateFiles.php',
        'Autoindex\\TemplateInfo' => __DIR__ . '/../..' . '/classes/TemplateInfo.php',
        'Autoindex\\Upload' => __DIR__ . '/../..' . '/classes/Upload.php',
        'Autoindex\\Url' => __DIR__ . '/../..' . '/classes/Url.php',
        'Autoindex\\User' => __DIR__ . '/../..' . '/classes/User.php',
        'Autoindex\\UserLoggedIn' => __DIR__ . '/../..' . '/classes/UserLoggedIn.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit99476055b40e798c865fde06554b27a1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit99476055b40e798c865fde06554b27a1::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit99476055b40e798c865fde06554b27a1::$classMap;

        }, null, ClassLoader::class);
    }
}
