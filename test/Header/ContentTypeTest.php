<?php

namespace ZendTest\Mail\Header;

use Zend\Mail\Header\ContentType;

class ContentTypeTest extends \PHPUnit_Framework_TestCase
{

    public function testContentTypeFromStringCreatesValidContentTypeHeader()
    {
        $contentTypeHeader = ContentType::fromString('Content-Type: xxx');
        $this->assertInstanceOf('Zend\Mail\Header\HeaderDescription', $contentTypeHeader);
        $this->assertInstanceOf('Zend\Mail\Header\ContentType', $contentTypeHeader);
    }

    public function testContentTypeGetFieldNameReturnsHeaderName()
    {
        $contentTypeHeader = new ContentType();
        $this->assertEquals('Content-Type', $contentTypeHeader->getFieldName());
    }

    public function testContentTypeGetFieldValueReturnsProperValue()
    {
        $this->markTestIncomplete('ContentType needs to be completed');

        $contentTypeHeader = new ContentType();
        $this->assertEquals('xxx', $contentTypeHeader->getFieldValue());
    }

    public function testContentTypeToStringReturnsHeaderFormattedString()
    {
        $this->markTestIncomplete('ContentType needs to be completed');

        $contentTypeHeader = new ContentType();

        // @todo set some values, then test output
        $this->assertEmpty('Content-Type: xxx', $contentTypeHeader->toString());
    }

    /** Implementation specific tests here */
    
}

