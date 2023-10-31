<?php declare(strict_types = 1);

namespace Drupal\digi_book;

use Drupal\Core\Entity\ContentEntityInterface;
use Drupal\Core\Entity\EntityChangedInterface;
use Drupal\user\EntityOwnerInterface;

/**
 * Provides an interface defining a digi book entity type.
 */
interface DigiBookInterface extends ContentEntityInterface, EntityOwnerInterface, EntityChangedInterface {

}
