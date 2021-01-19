<?php

use PHPUnit\Framework\TestCase;

class StringsTest extends TestCase
{
    /**
     * @see https://www.php.net/manual/en/language.types.string.php
     */
    public function testVariableParsing()
    {
        $foo = 'world';

        // Double quotes.
        $this->assertEquals('Hello world', "Hello $foo");

        // Single quotes.
        $this->assertEquals('Hello $foo', 'Hello $foo');

        // TODO "Hello ${foo}"
        $this->assertEquals("Hello world", "Hello ${foo}");

        // TODO "Hello " . $foo
        $this->assertEquals("Hello world", "Hello " . $foo);

        // TODO Heredoc
        $this->assertEquals("$foo", $foo= <<<EOT
world
EOT);

        // TODO Nowdoc
        $this->assertEquals("$foo", $foo= <<<'EOT'
world
EOT);
    }

    /**
     * @see https://www.php.net/manual/en/ref.strings.php
     */
    public function testStringFunctions()
    {
        // trim — Strip whitespace (or other characters) from the beginning and end of a string
        $this->assertEquals('Hello', trim('Hello         '));
        $this->assertEquals('Hello', trim('Hello......', '.'));

        // ltrim — Strip whitespace (or other characters) from the beginning of a string
        // TODO to be implemented
        $this->assertEquals('ltrim — Strip whitespace', ltrim('   ltrim — Strip whitespace'));

        // rtrim — Strip whitespace (or other characters) from the end of a string
        // TODO to be implemented
        $this->assertEquals('ltrim — Strip whitespace', rtrim('ltrim — Strip whitespace     '));

        // strtoupper — Make a string uppercase
        $this->assertEquals('ABCDE', strtoupper('abcde'));

        // strtolower — Make a string lowercase
        $this->assertEquals('hello', strtolower('HeLlO'));

        // ucfirst — Make a string's first character uppercase
        // TODO to be implemented
        $this->assertEquals('Make a string', ucfirst('make a string'));

        // lcfirst — Make a string's first character lowercase
        // TODO to be implemented
        $this->assertEquals('make a string', lcfirst('Make a string'));

        // strip_tags — Strip HTML and PHP tags from a string
        // TODO to be implemented
        $this->assertEquals('Функция strtoupper', strip_tags('<h1>Функция strtoupper</h1>'));

        // htmlspecialchars — Convert special characters to HTML entities
        // TODO to be implemented
        $this->assertEquals('&lt;h1&gt;Функция strtoupper&lt;/h1&gt;', htmlspecialchars('<h1>Функция strtoupper</h1>'));

        // addslashes — Quote string with slashes
        // TODO to be implemented
        $this->assertEquals('Make a string_s', addslashes('Make a string_s'));

        // strcmp — Binary safe string comparison
        // TODO to be implemented
        $this->assertEquals(0, strcmp('strcmp','strcmp'));

        // strncasecmp — Binary safe case-insensitive string comparison of the first n characters
        // TODO to be implemented
        $this->assertEquals(-1, strcmp('Hello','hello'));

        // str_replace — Replace all occurrences of the search string with the replacement string
        // TODO to be implemented
        $this->assertEquals('!bc!bc', str_replace('a', '!', 'abcabc'));

        // strpos — Find the position of the first occurrence of a substring in a string
        // TODO to be implemented
        $this->assertEquals(2, strpos('abcde abcde', 'c'));

        // strstr — Find the first occurrence of a string
        // TODO to be implemented
        $this->assertEquals('/folder1/', strstr('site.ru/folder1/', '/'));

        // strrchr — Find the last occurrence of a character in a string
        // TODO to be implemented
        $this->assertEquals('/page.html', strrchr('folder2/page.html', '/'));

        // substr — Return part of a string
        // TODO to be implemented
        $this->assertEquals('bcd', substr('abcde', 1, 3));

        // sprintf — Return a formatted string
        // TODO to be implemented
        $name = "Радион";
        $age = 29;
        $str = "Имя: %s - %d лет";
        $this->assertEquals('Имя: Радион - 29 лет', sprintf($str,$name,$age));
    }
}