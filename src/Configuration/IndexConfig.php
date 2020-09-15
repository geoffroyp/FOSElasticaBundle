<?php

/*
 * This file is part of the FOSElasticaBundle package.
 *
 * (c) FriendsOfSymfony <http://friendsofsymfony.github.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FOS\ElasticaBundle\Configuration;

class IndexConfig implements IndexConfigInterface
{
    use IndexConfigTrait;

    /**
     * Indicates if the index should use an alias, allowing an index repopulation to occur
     * without overwriting the current index.
     *
     * @var bool
     */
    private $useAlias = false;

    /**
     * Constructor expects an array as generated by the Container Configuration builder.
     */
    public function __construct(array $config)
    {
        $this->elasticSearchName = $config['elasticsearch_name'] ?? $config['name'];
        $this->name = $config['name'];
        $this->settings = $config['settings'] ?? [];
        $this->useAlias = $config['use_alias'] ?? false;
        $this->config = $config['config'];
        $this->mapping = $config['mapping'];
        $this->model = $config['model'];
    }

    public function isUseAlias(): bool
    {
        return $this->useAlias;
    }
}
