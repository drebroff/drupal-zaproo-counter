<?php

namespace Drupal\Tests\zaproo_counter\Functional;

use Drupal\Tests\BrowserTestBase;

/**
 * Test the functionality of the Zaproo Counter Module
 *
 */
class ZaprooCounterTest extends BrowserTestBase {

  /**
   * {@inheritdoc}
   */
  protected $defaultTheme = 'stark';

  /**
   * {@inheritdoc}
   */
  public static $modules = ['node', 'zaproo_counter'];

  /**
   * {@inheritdoc}
   */
  protected $profile = 'minimal';

  /**
   * {@inheritdoc}
   */
  public function setUp() {
    parent::setUp();

    // Create an article content type that we will use for testing.
    $this->createContentType(['type' => 'article']);

    // Create article node.
    $type = $this->container->get('entity_type.manager')->getStorage('node_type')
      ->create([
        'type' => 'article',
        'title' => 'Lorem Ipsum',
        'body' => ['value' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.'],
        'status' => 1,
      ]);
    $type->save();

    $account = $this->drupalCreateUser(['access administration pages']);
    $this->drupalLogin($account);

  }

  /**
   * Test the output of the zaproo counter.
   */
  public function testZaprooCounter() {
    $this->drupalGet('admin/config/zaproo/settings');
    $this->fillField('Enabled', '1');
    $this->pressButton('Save');

    $this->drupalGet('<front>');
    $this->assertSession()->pageTextContains('Word count');

  }

}
