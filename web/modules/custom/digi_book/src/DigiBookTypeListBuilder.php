<?php declare(strict_types = 1);

namespace Drupal\digi_book;

use Drupal\Core\Config\Entity\ConfigEntityListBuilder;
use Drupal\Core\Entity\EntityInterface;
use Drupal\Core\Url;

/**
 * Defines a class to build a listing of digi book type entities.
 *
 * @see \Drupal\digi_book\Entity\DigiBookType
 */
final class DigiBookTypeListBuilder extends ConfigEntityListBuilder {

  /**
   * {@inheritdoc}
   */
  public function buildHeader(): array {
    $header['label'] = $this->t('Label');
    return $header + parent::buildHeader();
  }

  /**
   * {@inheritdoc}
   */
  public function buildRow(EntityInterface $entity): array {
    $row['label'] = $entity->label();
    return $row + parent::buildRow($entity);
  }

  /**
   * {@inheritdoc}
   */
  public function render(): array {
    $build = parent::render();

    $build['table']['#empty'] = $this->t(
      'No digi book types available. <a href=":link">Add digi book type</a>.',
      [':link' => Url::fromRoute('entity.digi_book_type.add_form')->toString()],
    );

    return $build;
  }

}
