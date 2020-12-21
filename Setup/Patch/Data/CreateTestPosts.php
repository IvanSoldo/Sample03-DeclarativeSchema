<?php

namespace Inchoo\DeclarativeSchema\Setup\Patch\Data;

use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\Patch\DataPatchInterface;

class CreateTestPosts implements DataPatchInterface
{
    private $moduleDataSetup;

    public function __construct(ModuleDataSetupInterface $moduleDataSetup)
    {
        $this->moduleDataSetup = $moduleDataSetup;
    }

    public static function getDependencies()
    {
        return [];
    }

    public function getAliases()
    {
        return [];
    }

    public function apply()
    {
        $posts = [
            ['content' => 'content 1'],
            ['content' => 'content 2'],
            ['content' => 'content 3'],
            ['content' => 'content 4']
        ];

        $this->moduleDataSetup->getConnection()->insertMultiple('inchoo_posts', $posts);

        return $this;
    }
}
