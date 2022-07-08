<?php

namespace Lkt\Tools\Strings;

/**
 * @param string $str
 * @return string
 */
function toAscii(string $str = ''): string
{
    $str = \str_replace(array('º', 'ª'), '', $str);
    return \utf8_encode(\strtr(\utf8_decode($str),
        \utf8_decode(
            'ŠŒŽšœžŸ¥µÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖØÙÚÛÜÝßàáâãäåæçèéêëìíîïðñòóôõöøùúûüýÿ'),
        'SOZsozYYuAAAAAAACEEEEIIIIDNOOOOOOUUUUYsaaaaaaaceeeeiiiionoooooouuuuyy'));
}