<?php
// tests/Module/Album/src/Album/Model/AlbumTest.php
namespace Album\Module;

use PHPUnit_Framework_TestCase;

class AlbumTest extends PHPUnit_Framework_TestCase
{
    public function testAlbumIntialState()
    {
        $album = new Album();
        
        $this->assertNull($album->artist, '"artist" should initially be null');
        $this->assertNull($id->id, '"id" should initially be null');
        $this->assertNull($title->title, '"title" should initially be null');
    }
    
    public function testExchangeArraySetPropertiesCorrectly()
    {
        $album = new Album();
        $data = array('artist' => 'some artist',
                        'id' => 123,
                        'title' => 'some title');
        
        $album->exchangeArray($data);
        
        $this->assertSame($data['artist'], $album->artist, '"artist" was not set correctly');
        $this->assertSame($data['id'], $album->id, '"id" was not set correctly');
        $this->assertSame($data['title'], $album->title, '"title" was not set correctly');
    }
    
    public function testExchangeArraySetsPropertiesToNullIfKeysAreNotPresent()
    {
        $album = new Album();

        $album->exchangeArray(array('artist' => 'some artist',
                                    'id'     => 123,
                                    'title'  => 'some title'));
        $album->exchangeArray(array());

        $this->assertNull($album->artist, '"artist" should have defaulted to null');
        $this->assertNull($album->id, '"title" should have defaulted to null');
        $this->assertNull($album->title, '"title" should have defaulted to null');
    }

}