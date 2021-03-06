<?php

/*
 * (c) webfactory GmbH <info@webfactory.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Webfactory\Doctrine\ORMTestInfrastructure\ORMInfrastructureTest;

use Doctrine\ORM\Mapping as ORM;
use Webfactory\Doctrine\ORMTestInfrastructure\ORMInfrastructureTest\Annotation\AnnotationForSimpleTest;

/**
 * An entity that uses a custom annotation.
 *
 * @ORM\Entity()
 * @ORM\Table(name="annotated_test_entity")
 * @AnnotationForSimpleTest
 */
class AnnotatedTestEntity
{
    /**
     * A unique ID.
     *
     * @var integer|null
     * @ORM\Id
     * @ORM\Column(type="integer", name="id")
     * @ORM\GeneratedValue
     */
    public $id = null;
}
