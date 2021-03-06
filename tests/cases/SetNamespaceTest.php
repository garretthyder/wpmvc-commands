<?php
/**
 * Tests set namespace command.
 *
 * @author Garrett Hyder <https://github.com/garretthyder>
 * @copyright 10 Quality <http://www.10quality.com>
 * @license MIT
 * @package WPMVC\Commands
 * @version 1.1.8
 */
class SetNamespaceTest extends WpmvcAyucoTestCase
{
    /**
     * Retore to default namespace.
     * @since 1.1.8
     */
    public function tearDown(): void
    {
        parent::tearDown();
        exec('php '.WPMVC_AYUCO.' set namespace:MyApp');
    }
    /**
     * Test resulting message.
     */
    public function testResultMessage()
    {
        // Execute
        $execution = exec('php '.WPMVC_AYUCO.' set namespace:PHPUnit');
        // Assert
        $this->assertEquals($execution, 'Namespace updated!');
    }
    /**
     * Test Main app file updated.
     */
    public function testMainNamespaceValue()
    {
        // Prepare
        $filename = FRAMEWORK_PATH.'/environment/app/Main.php';
        // Execute
        $execution = exec('php '.WPMVC_AYUCO.' set namespace:MainValue');
        // Assert
        $this->assertPregMatchContents('/namespace\sMainValue/', $filename);
    }
    /**
     * Test composer file updated.
     */
    public function testComposerJson()
    {
        // Prepare
        $filename = FRAMEWORK_PATH.'/environment/composer.json';
        // Execute
        $execution = exec('php '.WPMVC_AYUCO.' set namespace:ComposerValue');
        // Assert
        $this->assertPregMatchContents('/\"ComposerValue\\\\\\\"(|\s)\:(|\s)\"app/', $filename);
    }
}