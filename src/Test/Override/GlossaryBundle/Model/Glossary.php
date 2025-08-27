<?php
declare(strict_types=1);

namespace Test\Override\GlossaryBundle\Model;

use Pimcore\Bundle\GlossaryBundle\Model\Glossary\Dao;
use Pimcore\Model\AbstractModel;
use Pimcore\Bundle\GlossaryBundle\Model\Glossary as CoreModel;
use Pimcore\Model\Exception\NotFoundException;
use Pimcore\Model\Site;

/**
 * @method Dao getDao()
 * @method void delete()
 * @method void save()
 */
class Glossary extends CoreModel
{
    protected ?string $data = "...";
    /**
     * Rewrite example
     * 
     * Summary of setSite
     * @param null|int|\Pimcore\Model\Site $site
     * @return CoreModel
     */
    public function setSite(null|int|Site $site): static
    {
        if ($site == '...') {
            /**
             * Some custom logic
             */
        }
        return parent::setSite($site);
    }

    /**
     * Added method
     * 
     * Summary of getAditionalContent
     * @return string|null
     */
    public function getAditionalContent(): ?string
    {
        return $this->data;
    }
}
