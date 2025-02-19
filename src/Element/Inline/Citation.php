<?php
/**
 * Citation - The cite element represents the title of a work (e.g. a book, a paper, an essay, a poem, a score, a song, a script, a film, a TV show, a game, a sculpture, a painting, a theatre production, a play, an opera, a musical, an exhibition, a legal case report, etc). This can be a work that is being quoted or referenced in detail (i.e. a citation), or it can just be a work that is mentioned in passing.
 * 
 * @package Html\Element\Inline
 * @link https://developer.mozilla.org/en-US/docs/Web/HTML/Element/cite
 */
namespace Html\Element\Inline;

use Html\Model\InlineElement;

final class Citation extends InlineElement
{
    public static string $qualifiedName = 'cite';


    public function __construct()
    {

    }


}