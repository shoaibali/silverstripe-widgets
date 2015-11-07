<?php

/**
 * @mixin PHPUnit_Framework_TestCase
 *
 * @package widgets
 */
class WidgetPageExtensionTest extends FunctionalTest {
	/**
	 * @var string
	 */
	public static $fixture_file = 'widgets/tests/WidgetPageExtensionTest.yml';

	public function testSideBarView() {
		/**
		 * Test to see if widget is shown in sidebar view
		 */

		require_once(__DIR__ . "/../_config.php");

		/**
		 * Register the extension
		 */
		Page::add_extension('WidgetPageExtension');

		/**
		 * @var widgetPage $widgetPage
		 */
		$widgetPage = $this->objFromFixture('Page', 'widgetPage');

		/**
		 * @var sidebarView $sidebarView
		 */
		$sidebarView = $widgetPage->SideBarView();

		// $request = new SS_HTTPRequest('GET', $widgetPage->Link());

		// $controller = new Page_Controller($widgetPage);

		// $response = $controller->preview($request);

		//var_dump($sidebarView);

		// $this->assertContains('share-draft-content-message', $response);

		// $this->assertContains('share-draft-error-page', $response);
	}
}

class WidgetAreaEditorTest_FakePage extends Page implements TestOnly {
	private static $has_one = array(
		"Widget" => "WidgetArea",
	);
}
