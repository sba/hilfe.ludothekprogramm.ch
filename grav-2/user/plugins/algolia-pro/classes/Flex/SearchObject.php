<?php

declare(strict_types=1);

namespace Grav\Plugin\AlgoliaPro\Flex;

use Grav\Common\Data\Blueprint;
use Grav\Common\Flex\FlexObject;

/**
 * Class SearchObject
 */
class SearchObject extends FlexObject
{
    /**
     * @param array $data
     * @param array $files
     * @return SearchObject
     */
    public function update(array $data, array $files = [])
    {
        $type = $data['type'] ?? null;
        if ($type && $type !== $this->getProperty('type')) {
            $this->setProperty('type', $type);
            $this->resetBlueprints();
        }

        return parent::update($data, $files);
    }

    /**
     * @param string $name
     * @return Blueprint
     */
    protected function doGetBlueprint(string $name = ''): Blueprint
    {
        $template = $this->getProperty('type') . ($name ? '.' . $name : '');
        $context = 'blueprints://search';
        if (!file_exists("{$context}/{$template}.yaml")) {
            $blueprint = $this->getFlexDirectory()->getBlueprint('missing', $context);
        } else {
            $blueprint = $this->getFlexDirectory()->getBlueprint($template, $context);
        }


        $isNew = $blueprint->get('initialized', false) === false;
        if ($isNew === true && $name === '') {
            $blueprint->set('initialized', true);
            $blueprint->setFilename($template);
        }

        return $blueprint;
    }
}
