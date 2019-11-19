<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace {

    use Symfony\Polyfill\Mbstring as p;

    if (!function_exists('mb_strlen')) {
        define('MB_CASE_UPPER', 0);
        define('MB_CASE_LOWER', 1);
        define('MB_CASE_TITLE', 2);

        function mb_convert_encoding($s, $to, $from = null)
        {
            return p\Mbstring::mb_convert_encoding($s, $to, $from);
        }

        function mb_decode_mimeheader($s)
        {
            return p\Mbstring::mb_decode_mimeheader($s);
        }

        function mb_encode_mimeheader($s, $charset = null, $transferEnc = null, $lf = null, $indent = null)
        {
            return p\Mbstring::mb_encode_mimeheader($s, $charset, $transferEnc, $lf, $indent);
        }

        function mb_decode_numericentity($s, $convmap, $enc = null)
        {
            return p\Mbstring::mb_decode_numericentity($s, $convmap, $enc);
        }

        function mb_encode_numericentity($s, $convmap, $enc = null, $is_hex = false)
        {
            return p\Mbstring::mb_encode_numericentity($s, $convmap, $enc, $is_hex);
        }

        function mb_convert_case($s, $mode, $enc = null)
        {
            return p\Mbstring::mb_convert_case($s, $mode, $enc);
        }

        function mb_internal_encoding($enc = null)
        {
            return p\Mbstring::mb_internal_encoding($enc);
        }

        function mb_language($lang = null)
        {
            return p\Mbstring::mb_language($lang);
        }

        function mb_list_encodings()
        {
            return p\Mbstring::mb_list_encodings();
        }

        function mb_encoding_aliases($encoding)
        {
            return p\Mbstring::mb_encoding_aliases($encoding);
        }

        function mb_check_encoding($var = null, $encoding = null)
        {
            return p\Mbstring::mb_check_encoding($var, $encoding);
        }

        function mb_detect_encoding($str, $encodingList = null, $strict = false)
        {
            return p\Mbstring::mb_detect_encoding($str, $encodingList, $strict);
        }

        function mb_detect_order($encodingList = null)
        {
            return p\Mbstring::mb_detect_order($encodingList);
        }

        function mb_parse_str($s, &$result = [])
        {
            parse_str($s, $result);
        }

        function mb_strlen($s, $enc = null)
        {
            return p\Mbstring::mb_strlen($s, $enc);
        }

        function mb_strpos($s, $needle, $offset = 0, $enc = null)
        {
            return p\Mbstring::mb_strpos($s, $needle, $offset, $enc);
        }

        function mb_strtolower($s, $enc = null)
        {
            return p\Mbstring::mb_strtolower($s, $enc);
        }

        function mb_strtoupper($s, $enc = null)
        {
            return p\Mbstring::mb_strtoupper($s, $enc);
        }

        function mb_substitute_character($char = null)
        {
            return p\Mbstring::mb_substitute_character($char);
        }

        function mb_substr($s, $start, $length = 2147483647, $enc = null)
        {
            return p\Mbstring::mb_substr($s, $start, $length, $enc);
        }

        function mb_stripos($s, $needle, $offset = 0, $enc = null)
        {
            return p\Mbstring::mb_stripos($s, $needle, $offset, $enc);
        }

        function mb_stristr($s, $needle, $part = false, $enc = null)
        {
            return p\Mbstring::mb_stristr($s, $needle, $part, $enc);
        }

        function mb_strrchr($s, $needle, $part = false, $enc = null)
        {
            return p\Mbstring::mb_strrchr($s, $needle, $part, $enc);
        }

        function mb_strrichr($s, $needle, $part = false, $enc = null)
        {
            return p\Mbstring::mb_strrichr($s, $needle, $part, $enc);
        }

        function mb_strripos($s, $needle, $offset = 0, $enc = null)
        {
            return p\Mbstring::mb_strripos($s, $needle, $offset, $enc);
        }

        function mb_strrpos($s, $needle, $offset = 0, $enc = null)
        {
            return p\Mbstring::mb_strrpos($s, $needle, $offset, $enc);
        }

        function mb_strstr($s, $needle, $part = false, $enc = null)
        {
            return p\Mbstring::mb_strstr($s, $needle, $part, $enc);
        }

        function mb_get_info($type = 'all')
        {
            return p\Mbstring::mb_get_info($type);
        }

        function mb_http_output($enc = null)
        {
            return p\Mbstring::mb_http_output($enc);
        }

        function mb_strwidth($s, $enc = null)
        {
            return p\Mbstring::mb_strwidth($s, $enc);
        }

        function mb_substr_count($haystack, $needle, $enc = null)
        {
            return p\Mbstring::mb_substr_count($haystack, $needle, $enc);
        }

        function mb_output_handler($contents, $status)
        {
            return p\Mbstring::mb_output_handler($contents, $status);
        }

        function mb_http_input($type = '')
        {
            return p\Mbstring::mb_http_input($type);
        }

        function mb_convert_variables(
            $toEncoding,
            $fromEncoding,
            &$a = null,
            &$b = null,
            &$c = null,
            &$d = null,
            &$e = null,
            &$f = null
        ) {
            return p\Mbstring::mb_convert_variables($toEncoding, $fromEncoding, $a, $b, $c, $d, $e, $f);
        }
    }
    if (!function_exists('mb_chr')) {
        function mb_ord($s, $enc = null)
        {
            return p\Mbstring::mb_ord($s, $enc);
        }

        function mb_chr($code, $enc = null)
        {
            return p\Mbstring::mb_chr($code, $enc);
        }

        function mb_scrub($s, $enc = null)
        {
            $enc = null === $enc ? mb_internal_encoding() : $enc;

            return mb_convert_encoding($s, $enc, $enc);
        }
    }

    if (!function_exists('mb_str_split')) {
        function mb_str_split($string, $split_length = 1, $encoding = null)
        {
            return p\Mbstring::mb_str_split($string, $split_length, $encoding);
        }
    }
}

namespace Symfony\Polyfill\Mbstring {

    /**
     * Partial mbstring implementation in PHP, iconv based, UTF-8 centric.
     *
     * Implemented:
     * - mb_chr                  - Returns a specific character from its Unicode code point
     * - mb_convert_encoding     - Convert character encoding
     * - mb_convert_variables    - Convert character code in variable(s)
     * - mb_decode_mimeheader    - Decode string in MIME header field
     * - mb_encode_mimeheader    - Encode string for MIME header XXX NATIVE IMPLEMENTATION IS REALLY BUGGED
     * - mb_decode_numericentity - Decode HTML numeric string reference to character
     * - mb_encode_numericentity - Encode character to HTML numeric string reference
     * - mb_convert_case         - Perform case folding on a string
     * - mb_detect_encoding      - Detect character encoding
     * - mb_get_info             - Get internal settings of mbstring
     * - mb_http_input           - Detect HTTP input character encoding
     * - mb_http_output          - Set/Get HTTP output character encoding
     * - mb_internal_encoding    - Set/Get internal character encoding
     * - mb_list_encodings       - Returns an array of all supported encodings
     * - mb_ord                  - Returns the Unicode code point of a character
     * - mb_output_handler       - Callback function converts character encoding in output buffer
     * - mb_scrub                - Replaces ill-formed byte sequences with substitute characters
     * - mb_strlen               - Get string length
     * - mb_strpos               - Find position of first occurrence of string in a string
     * - mb_strrpos              - Find position of last occurrence of a string in a string
     * - mb_str_split            - Convert a string to an array
     * - mb_strtolower           - Make a string lowercase
     * - mb_strtoupper           - Make a string uppercase
     * - mb_substitute_character - Set/Get substitution character
     * - mb_substr               - Get part of string
     * - mb_stripos              - Finds position of first occurrence of a string within another, case insensitive
     * - mb_stristr              - Finds first occurrence of a string within another, case insensitive
     * - mb_strrchr              - Finds the last occurrence of a character in a string within another
     * - mb_strrichr             - Finds the last occurrence of a character in a string within another, case insensitive
     * - mb_strripos             - Finds position of last occurrence of a string within another, case insensitive
     * - mb_strstr               - Finds first occurrence of a string within another
     * - mb_strwidth             - Return width of string
     * - mb_substr_count         - Count the number of substring occurrences
     *
     * Not implemented:
     * - mb_convert_kana         - Convert "kana" one from another ("zen-kaku", "han-kaku" and more)
     * - mb_ereg_*               - Regular expression with multibyte support
     * - mb_parse_str            - Parse GET/POST/COOKIE data and set global variable
     * - mb_preferred_mime_name  - Get MIME charset string
     * - mb_regex_encoding       - Returns current encoding for multibyte regex as string
     * - mb_regex_set_options    - Set/Get the default options for mbregex functions
     * - mb_send_mail            - Send encoded mail
     * - mb_split                - Split multibyte string using regular expression
     * - mb_strcut               - Get part of string
     * - mb_strimwidth           - Get truncated string with specified width
     *
     * @author Nicolas Grekas <p@tchwork.com>
     *
     * @internal
     */
    final class Mbstring
    {
        const MB_CASE_FOLD = PHP_INT_MAX;

        private static $encodingList = ['ASCII', 'UTF-8'];
        private static $language = 'neutral';
        private static $internalEncoding = 'UTF-8';
        private static $caseFold = [
            [
                'µ',
                'ſ',
                "\xCD\x85",
                'ς',
                "\xCF\x90",
                "\xCF\x91",
                "\xCF\x95",
                "\xCF\x96",
                "\xCF\xB0",
                "\xCF\xB1",
                "\xCF\xB5",
                "\xE1\xBA\x9B",
                "\xE1\xBE\xBE"
            ],
            ['μ', 's', 'ι', 'σ', 'β', 'θ', 'φ', 'π', 'κ', 'ρ', 'ε', "\xE1\xB9\xA1", 'ι'],
        ];

        public static function mb_convert_encoding($s, $toEncoding, $fromEncoding = null)
        {
            if (\is_array($fromEncoding) || false !== strpos($fromEncoding, ',')) {
                $fromEncoding = self::mb_detect_encoding($s, $fromEncoding);
            } else {
                $fromEncoding = self::getEncoding($fromEncoding);
            }

            $toEncoding = self::getEncoding($toEncoding);

            if ('BASE64' === $fromEncoding) {
                $s = base64_decode($s);
                $fromEncoding = $toEncoding;
            }

            if ('BASE64' === $toEncoding) {
                return base64_encode($s);
            }

            if ('HTML-ENTITIES' === $toEncoding || 'HTML' === $toEncoding) {
                if ('HTML-ENTITIES' === $fromEncoding || 'HTML' === $fromEncoding) {
                    $fromEncoding = 'Windows-1252';
                }
                if ('UTF-8' !== $fromEncoding) {
                    $s = iconv($fromEncoding, 'UTF-8//IGNORE', $s);
                }

                return preg_replace_callback('/[\x80-\xFF]+/', [__CLASS__, 'html_encoding_callback'], $s);
            }

            if ('HTML-ENTITIES' === $fromEncoding) {
                $s = html_entity_decode($s, ENT_COMPAT, 'UTF-8');
                $fromEncoding = 'UTF-8';
            }

            return iconv($fromEncoding, $toEncoding . '//IGNORE', $s);
        }

        public static function mb_convert_variables(
            $toEncoding,
            $fromEncoding,
            &$a = null,
            &$b = null,
            &$c = null,
            &$d = null,
            &$e = null,
            &$f = null
        ) {
            $vars = [&$a, &$b, &$c, &$d, &$e, &$f];

            $ok = true;
            array_walk_recursive($vars, function (&$v) use (&$ok, $toEncoding, $fromEncoding) {
                if (false === $v = Mbstring::mb_convert_encoding($v, $toEncoding, $fromEncoding)) {
                    $ok = false;
                }
            });

            return $ok ? $fromEncoding : false;
        }

        public static function mb_decode_mimeheader($s)
        {
            return iconv_mime_decode($s, 2, self::$internalEncoding);
        }

        public static function mb_encode_mimeheader(
            $s,
            $charset = null,
            $transferEncoding = null,
            $linefeed = null,
            $indent = null
        ) {
            trigger_error('mb_encode_mimeheader() is bugged. Please use iconv_mime_encode() instead', E_USER_WARNING);
        }

        public static function mb_decode_numericentity($s, $convmap, $encoding = null)
        {
            if (null !== $s && !\is_scalar($s) && !(\is_object($s) && \method_exists($s, '__toString'))) {
                trigger_error('mb_decode_numericentity() expects parameter 1 to be string, ' . \gettype($s) . ' given',
                    E_USER_WARNING);

                return null;
            }

            if (!\is_array($convmap) || !$convmap) {
                return false;
            }

            if (null !== $encoding && !\is_scalar($encoding)) {
                trigger_error('mb_decode_numericentity() expects parameter 3 to be string, ' . \gettype($s) . ' given',
                    E_USER_WARNING);

                return '';  // Instead of null (cf. mb_encode_numericentity).
            }

            $s = (string) $s;
            if ('' === $s) {
                return '';
            }

            $encoding = self::getEncoding($encoding);

            if ('UTF-8' === $encoding) {
                $encoding = null;
                if (!preg_match('//u', $s)) {
                    $s = @iconv('UTF-8', 'UTF-8//IGNORE', $s);
                }
            } else {
                $s = iconv($encoding, 'UTF-8//IGNORE', $s);
            }

            $cnt = floor(\count($convmap) / 4) * 4;

            for ($i = 0; $i < $cnt; $i += 4) {
                // collector_decode_htmlnumericentity ignores $convmap[$i + 3]
                $convmap[$i] += $convmap[$i + 2];
                $convmap[$i + 1] += $convmap[$i + 2];
            }

            $s = preg_replace_callback('/&#(?:0*([0-9]+)|x0*([0-9a-fA-F]+))(?!&);?/',
                function (array $m) use ($cnt, $convmap) {
                    $c = isset($m[2]) ? (int) hexdec($m[2]) : $m[1];
                    for ($i = 0; $i < $cnt; $i += 4) {
                        if ($c >= $convmap[$i] && $c <= $convmap[$i + 1]) {
                            return Mbstring::mb_chr($c - $convmap[$i + 2]);
                        }
                    }

                    return $m[0];
                }, $s);

            if (null === $encoding) {
                return $s;
            }

            return iconv('UTF-8', $encoding . '//IGNORE', $s);
        }

        public static function mb_encode_numericentity($s, $convmap, $encoding = null, $is_hex = false)
        {
            if (null !== $s && !\is_scalar($s) && !(\is_object($s) && \method_exists($s, '__toString'))) {
                trigger_error('mb_encode_numericentity() expects parameter 1 to be string, ' . \gettype($s) . ' given',
                    E_USER_WARNING);

                return null;
            }

            if (!\is_array($convmap) || !$convmap) {
                return false;
            }

            if (null !== $encoding && !\is_scalar($encoding)) {
                trigger_error('mb_encode_numericentity() expects parameter 3 to be string, ' . \gettype($s) . ' given',
                    E_USER_WARNING);

                return null;  // Instead of '' (cf. mb_decode_numericentity).
            }

            if (null !== $is_hex && !\is_scalar($is_hex)) {
                trigger_error('mb_encode_numericentity() expects parameter 4 to be boolean, ' . \gettype($s) . ' given',
                    E_USER_WARNING);

                return null;
            }

            $s = (string) $s;
            if ('' === $s) {
                return '';
            }

            $encoding = self::getEncoding($encoding);

            if ('UTF-8' === $encoding) {
                $encoding = null;
                if (!preg_match('//u', $s)) {
                    $s = @iconv('UTF-8', 'UTF-8//IGNORE', $s);
                }
            } else {
                $s = iconv($encoding, 'UTF-8//IGNORE', $s);
            }

            static $ulenMask = ["\xC0" => 2, "\xD0" => 2, "\xE0" => 3, "\xF0" => 4];

            $cnt = floor(\count($convmap) / 4) * 4;
            $i = 0;
            $len = \strlen($s);
            $result = '';

            while ($i < $len) {
                $ulen = $s[$i] < "\x80" ? 1 : $ulenMask[$s[$i] & "\xF0"];
                $uchr = substr($s, $i, $ulen);
                $i += $ulen;
                $c = self::mb_ord($uchr);

                for ($j = 0; $j < $cnt; $j += 4) {
                    if ($c >= $convmap[$j] && $c <= $convmap[$j + 1]) {
                        $cOffset = ($c + $convmap[$j + 2]) & $convmap[$j + 3];
                        $result .= $is_hex ? sprintf('&#x%X;', $cOffset) : '&#' . $cOffset . ';';
                        continue 2;
                    }
                }
                $result .= $uchr;
            }

            if (null === $encoding) {
                return $result;
            }

            return iconv('UTF-8', $encoding . '//IGNORE', $result);
        }

        public static function mb_convert_case($s, $mode, $encoding = null)
        {
            $s = (string) $s;
            if ('' === $s) {
                return '';
            }

            $encoding = self::getEncoding($encoding);

            if ('UTF-8' === $encoding) {
                $encoding = null;
                if (!preg_match('//u', $s)) {
                    $s = @iconv('UTF-8', 'UTF-8//IGNORE', $s);
                }
            } else {
                $s = iconv($encoding, 'UTF-8//IGNORE', $s);
            }

            if (MB_CASE_TITLE == $mode) {
                static $titleRegexp = null;
                if (null === $titleRegexp) {
                    $titleRegexp = self::getDataTitleCaseRegexp();
                }
                $s = preg_replace_callback($titleRegexp, [__CLASS__, 'title_case'], $s);
            } else {
                if (MB_CASE_UPPER == $mode) {
                    static $upper = null;
                    if (null === $upper) {
                        $upper = self::getDataUpperCase();
                    }
                    $map = $upper;
                } else {
                    if (self::MB_CASE_FOLD === $mode) {
                        $s = str_replace(self::$caseFold[0], self::$caseFold[1], $s);
                    }

                    static $lower = null;
                    if (null === $lower) {
                        $lower = self::getDataLowerCase();
                    }
                    $map = $lower;
                }

                static $ulenMask = ["\xC0" => 2, "\xD0" => 2, "\xE0" => 3, "\xF0" => 4];

                $i = 0;
                $len = \strlen($s);

                while ($i < $len) {
                    $ulen = $s[$i] < "\x80" ? 1 : $ulenMask[$s[$i] & "\xF0"];
                    $uchr = substr($s, $i, $ulen);
                    $i += $ulen;

                    if (isset($map[$uchr])) {
                        $uchr = $map[$uchr];
                        $nlen = \strlen($uchr);

                        if ($nlen == $ulen) {
                            $nlen = $i;
                            do {
                                $s[--$nlen] = $uchr[--$ulen];
                            } while ($ulen);
                        } else {
                            $s = substr_replace($s, $uchr, $i - $ulen, $ulen);
                            $len += $nlen - $ulen;
                            $i += $nlen - $ulen;
                        }
                    }
                }
            }

            if (null === $encoding) {
                return $s;
            }

            return iconv('UTF-8', $encoding . '//IGNORE', $s);
        }

        public static function mb_internal_encoding($encoding = null)
        {
            if (null === $encoding) {
                return self::$internalEncoding;
            }

            $encoding = self::getEncoding($encoding);

            if ('UTF-8' === $encoding || false !== @iconv($encoding, $encoding, ' ')) {
                self::$internalEncoding = $encoding;

                return true;
            }

            return false;
        }

        public static function mb_language($lang = null)
        {
            if (null === $lang) {
                return self::$language;
            }

            switch ($lang = strtolower($lang)) {
                case 'uni':
                case 'neutral':
                    self::$language = $lang;

                    return true;
            }

            return false;
        }

        public static function mb_list_encodings()
        {
            return ['UTF-8'];
        }

        public static function mb_encoding_aliases($encoding)
        {
            switch (strtoupper($encoding)) {
                case 'UTF8':
                case 'UTF-8':
                    return ['utf8'];
            }

            return false;
        }

        public static function mb_check_encoding($var = null, $encoding = null)
        {
            if (null === $encoding) {
                if (null === $var) {
                    return false;
                }
                $encoding = self::$internalEncoding;
            }

            return self::mb_detect_encoding($var, [$encoding]) || false !== @iconv($encoding, $encoding, $var);
        }

        public static function mb_detect_encoding($str, $encodingList = null, $strict = false)
        {
            if (null === $encodingList) {
                $encodingList = self::$encodingList;
            } else {
                if (!\is_array($encodingList)) {
                    $encodingList = array_map('trim', explode(',', $encodingList));
                }
                $encodingList = array_map('strtoupper', $encodingList);
            }

            foreach ($encodingList as $enc) {
                switch ($enc) {
                    case 'ASCII':
                        if (!preg_match('/[\x80-\xFF]/', $str)) {
                            return $enc;
                        }
                        break;

                    case 'UTF8':
                    case 'UTF-8':
                        if (preg_match('//u', $str)) {
                            return 'UTF-8';
                        }
                        break;

                    default:
                        if (0 === strncmp($enc, 'ISO-8859-', 9)) {
                            return $enc;
                        }
                }
            }

            return false;
        }

        public static function mb_detect_order($encodingList = null)
        {
            if (null === $encodingList) {
                return self::$encodingList;
            }

            if (!\is_array($encodingList)) {
                $encodingList = array_map('trim', explode(',', $encodingList));
            }
            $encodingList = array_map('strtoupper', $encodingList);

            foreach ($encodingList as $enc) {
                switch ($enc) {
                    default:
                        if (strncmp($enc, 'ISO-8859-', 9)) {
                            return false;
                        }
                    // no break
                    case 'ASCII':
                    case 'UTF8':
                    case 'UTF-8':
                }
            }

            self::$encodingList = $encodingList;

            return true;
        }

        public static function mb_strlen($s, $encoding = null)
        {
            $encoding = self::getEncoding($encoding);
            if ('CP850' === $encoding || 'ASCII' === $encoding) {
                return \strlen($s);
            }

            return @iconv_strlen($s, $encoding);
        }

        public static function mb_strpos($haystack, $needle, $offset = 0, $encoding = null)
        {
            $encoding = self::getEncoding($encoding);
            if ('CP850' === $encoding || 'ASCII' === $encoding) {
                return strpos($haystack, $needle, $offset);
            }

            $needle = (string) $needle;
            if ('' === $needle) {
                trigger_error(__METHOD__ . ': Empty delimiter', E_USER_WARNING);

                return false;
            }

            return iconv_strpos($haystack, $needle, $offset, $encoding);
        }

        public static function mb_strrpos($haystack, $needle, $offset = 0, $encoding = null)
        {
            $encoding = self::getEncoding($encoding);
            if ('CP850' === $encoding || 'ASCII' === $encoding) {
                return strrpos($haystack, $needle, $offset);
            }

            if ($offset != (int) $offset) {
                $offset = 0;
            } elseif ($offset = (int) $offset) {
                if ($offset < 0) {
                    if (0 > $offset += self::mb_strlen($needle)) {
                        $haystack = self::mb_substr($haystack, 0, $offset, $encoding);
                    }
                    $offset = 0;
                } else {
                    $haystack = self::mb_substr($haystack, $offset, 2147483647, $encoding);
                }
            }

            $pos = iconv_strrpos($haystack, $needle, $encoding);

            return false !== $pos ? $offset + $pos : false;
        }

        public static function mb_str_split($string, $split_length = 1, $encoding = null)
        {
            if (null !== $string && !\is_scalar($string) && !(\is_object($string) && \method_exists($string,
                        '__toString'))) {
                trigger_error('mb_str_split() expects parameter 1 to be string, ' . \gettype($string) . ' given',
                    E_USER_WARNING);

                return null;
            }

            if ($split_length < 1) {
                trigger_error('The length of each segment must be greater than zero', E_USER_WARNING);

                return false;
            }

            if (null === $encoding) {
                $encoding = mb_internal_encoding();
            }

            $result = [];
            $length = mb_strlen($string, $encoding);

            for ($i = 0; $i < $length; $i += $split_length) {
                $result[] = mb_substr($string, $i, $split_length, $encoding);
            }

            return $result;
        }

        public static function mb_strtolower($s, $encoding = null)
        {
            return self::mb_convert_case($s, MB_CASE_LOWER, $encoding);
        }

        public static function mb_strtoupper($s, $encoding = null)
        {
            return self::mb_convert_case($s, MB_CASE_UPPER, $encoding);
        }

        public static function mb_substitute_character($c = null)
        {
            if (0 === strcasecmp($c, 'none')) {
                return true;
            }

            return null !== $c ? false : 'none';
        }

        public static function mb_substr($s, $start, $length = null, $encoding = null)
        {
            $encoding = self::getEncoding($encoding);
            if ('CP850' === $encoding || 'ASCII' === $encoding) {
                return (string) substr($s, $start, null === $length ? 2147483647 : $length);
            }

            if ($start < 0) {
                $start = iconv_strlen($s, $encoding) + $start;
                if ($start < 0) {
                    $start = 0;
                }
            }

            if (null === $length) {
                $length = 2147483647;
            } elseif ($length < 0) {
                $length = iconv_strlen($s, $encoding) + $length - $start;
                if ($length < 0) {
                    return '';
                }
            }

            return (string) iconv_substr($s, $start, $length, $encoding);
        }

        public static function mb_stripos($haystack, $needle, $offset = 0, $encoding = null)
        {
            $haystack = self::mb_convert_case($haystack, self::MB_CASE_FOLD, $encoding);
            $needle = self::mb_convert_case($needle, self::MB_CASE_FOLD, $encoding);

            return self::mb_strpos($haystack, $needle, $offset, $encoding);
        }

        public static function mb_stristr($haystack, $needle, $part = false, $encoding = null)
        {
            $pos = self::mb_stripos($haystack, $needle, 0, $encoding);

            return self::getSubpart($pos, $part, $haystack, $encoding);
        }

        public static function mb_strrchr($haystack, $needle, $part = false, $encoding = null)
        {
            $encoding = self::getEncoding($encoding);
            if ('CP850' === $encoding || 'ASCII' === $encoding) {
                return strrchr($haystack, $needle, $part);
            }
            $needle = self::mb_substr($needle, 0, 1, $encoding);
            $pos = iconv_strrpos($haystack, $needle, $encoding);

            return self::getSubpart($pos, $part, $haystack, $encoding);
        }

        public static function mb_strrichr($haystack, $needle, $part = false, $encoding = null)
        {
            $needle = self::mb_substr($needle, 0, 1, $encoding);
            $pos = self::mb_strripos($haystack, $needle, $encoding);

            return self::getSubpart($pos, $part, $haystack, $encoding);
        }

        public static function mb_strripos($haystack, $needle, $offset = 0, $encoding = null)
        {
            $haystack = self::mb_convert_case($haystack, self::MB_CASE_FOLD, $encoding);
            $needle = self::mb_convert_case($needle, self::MB_CASE_FOLD, $encoding);

            return self::mb_strrpos($haystack, $needle, $offset, $encoding);
        }

        public static function mb_strstr($haystack, $needle, $part = false, $encoding = null)
        {
            $pos = strpos($haystack, $needle);
            if (false === $pos) {
                return false;
            }
            if ($part) {
                return substr($haystack, 0, $pos);
            }

            return substr($haystack, $pos);
        }

        public static function mb_get_info($type = 'all')
        {
            $info = [
                'internal_encoding' => self::$internalEncoding,
                'http_output' => 'pass',
                'http_output_conv_mimetypes' => '^(text/|application/xhtml\+xml)',
                'func_overload' => 0,
                'func_overload_list' => 'no overload',
                'mail_charset' => 'UTF-8',
                'mail_header_encoding' => 'BASE64',
                'mail_body_encoding' => 'BASE64',
                'illegal_chars' => 0,
                'encoding_translation' => 'Off',
                'language' => self::$language,
                'detect_order' => self::$encodingList,
                'substitute_character' => 'none',
                'strict_detection' => 'Off',
            ];

            if ('all' === $type) {
                return $info;
            }
            if (isset($info[$type])) {
                return $info[$type];
            }

            return false;
        }

        public static function mb_http_input($type = '')
        {
            return false;
        }

        public static function mb_http_output($encoding = null)
        {
            return null !== $encoding ? 'pass' === $encoding : 'pass';
        }

        public static function mb_strwidth($s, $encoding = null)
        {
            $encoding = self::getEncoding($encoding);

            if ('UTF-8' !== $encoding) {
                $s = iconv($encoding, 'UTF-8//IGNORE', $s);
            }

            $s = preg_replace('/[\x{1100}-\x{115F}\x{2329}\x{232A}\x{2E80}-\x{303E}\x{3040}-\x{A4CF}\x{AC00}-\x{D7A3}\x{F900}-\x{FAFF}\x{FE10}-\x{FE19}\x{FE30}-\x{FE6F}\x{FF00}-\x{FF60}\x{FFE0}-\x{FFE6}\x{20000}-\x{2FFFD}\x{30000}-\x{3FFFD}]/u',
                '', $s, -1, $wide);

            return ($wide << 1) + iconv_strlen($s, 'UTF-8');
        }

        public static function mb_substr_count($haystack, $needle, $encoding = null)
        {
            return substr_count($haystack, $needle);
        }

        public static function mb_output_handler($contents, $status)
        {
            return $contents;
        }

        public static function mb_chr($code, $encoding = null)
        {
            if (0x80 > $code %= 0x200000) {
                $s = \chr($code);
            } elseif (0x800 > $code) {
                $s = \chr(0xC0 | $code >> 6) . \chr(0x80 | $code & 0x3F);
            } elseif (0x10000 > $code) {
                $s = \chr(0xE0 | $code >> 12) . \chr(0x80 | $code >> 6 & 0x3F) . \chr(0x80 | $code & 0x3F);
            } else {
                $s = \chr(0xF0 | $code >> 18) . \chr(0x80 | $code >> 12 & 0x3F) . \chr(0x80 | $code >> 6 & 0x3F) . \chr(0x80 | $code & 0x3F);
            }

            if ('UTF-8' !== $encoding = self::getEncoding($encoding)) {
                $s = mb_convert_encoding($s, $encoding, 'UTF-8');
            }

            return $s;
        }

        public static function mb_ord($s, $encoding = null)
        {
            if ('UTF-8' !== $encoding = self::getEncoding($encoding)) {
                $s = mb_convert_encoding($s, 'UTF-8', $encoding);
            }

            if (1 === \strlen($s)) {
                return \ord($s);
            }

            $code = ($s = unpack('C*', substr($s, 0, 4))) ? $s[1] : 0;
            if (0xF0 <= $code) {
                return (($code - 0xF0) << 18) + (($s[2] - 0x80) << 12) + (($s[3] - 0x80) << 6) + $s[4] - 0x80;
            }
            if (0xE0 <= $code) {
                return (($code - 0xE0) << 12) + (($s[2] - 0x80) << 6) + $s[3] - 0x80;
            }
            if (0xC0 <= $code) {
                return (($code - 0xC0) << 6) + $s[2] - 0x80;
            }

            return $code;
        }

        private static function getSubpart($pos, $part, $haystack, $encoding)
        {
            if (false === $pos) {
                return false;
            }
            if ($part) {
                return self::mb_substr($haystack, 0, $pos, $encoding);
            }

            return self::mb_substr($haystack, $pos, null, $encoding);
        }

        private static function html_encoding_callback(array $m)
        {
            $i = 1;
            $entities = '';
            $m = unpack('C*', htmlentities($m[0], ENT_COMPAT, 'UTF-8'));

            while (isset($m[$i])) {
                if (0x80 > $m[$i]) {
                    $entities .= \chr($m[$i++]);
                    continue;
                }
                if (0xF0 <= $m[$i]) {
                    $c = (($m[$i++] - 0xF0) << 18) + (($m[$i++] - 0x80) << 12) + (($m[$i++] - 0x80) << 6) + $m[$i++] - 0x80;
                } elseif (0xE0 <= $m[$i]) {
                    $c = (($m[$i++] - 0xE0) << 12) + (($m[$i++] - 0x80) << 6) + $m[$i++] - 0x80;
                } else {
                    $c = (($m[$i++] - 0xC0) << 6) + $m[$i++] - 0x80;
                }

                $entities .= '&#' . $c . ';';
            }

            return $entities;
        }

        private static function title_case(array $s)
        {
            return self::mb_convert_case($s[1], MB_CASE_UPPER, 'UTF-8') . self::mb_convert_case($s[2], MB_CASE_LOWER,
                    'UTF-8');
        }

        private static function getDataLowerCase()
        {
            return array(
                'A' => 'a',
                'B' => 'b',
                'C' => 'c',
                'D' => 'd',
                'E' => 'e',
                'F' => 'f',
                'G' => 'g',
                'H' => 'h',
                'I' => 'i',
                'J' => 'j',
                'K' => 'k',
                'L' => 'l',
                'M' => 'm',
                'N' => 'n',
                'O' => 'o',
                'P' => 'p',
                'Q' => 'q',
                'R' => 'r',
                'S' => 's',
                'T' => 't',
                'U' => 'u',
                'V' => 'v',
                'W' => 'w',
                'X' => 'x',
                'Y' => 'y',
                'Z' => 'z',
                'À' => 'à',
                'Á' => 'á',
                'Â' => 'â',
                'Ã' => 'ã',
                'Ä' => 'ä',
                'Å' => 'å',
                'Æ' => 'æ',
                'Ç' => 'ç',
                'È' => 'è',
                'É' => 'é',
                'Ê' => 'ê',
                'Ë' => 'ë',
                'Ì' => 'ì',
                'Í' => 'í',
                'Î' => 'î',
                'Ï' => 'ï',
                'Ð' => 'ð',
                'Ñ' => 'ñ',
                'Ò' => 'ò',
                'Ó' => 'ó',
                'Ô' => 'ô',
                'Õ' => 'õ',
                'Ö' => 'ö',
                'Ø' => 'ø',
                'Ù' => 'ù',
                'Ú' => 'ú',
                'Û' => 'û',
                'Ü' => 'ü',
                'Ý' => 'ý',
                'Þ' => 'þ',
                'Ā' => 'ā',
                'Ă' => 'ă',
                'Ą' => 'ą',
                'Ć' => 'ć',
                'Ĉ' => 'ĉ',
                'Ċ' => 'ċ',
                'Č' => 'č',
                'Ď' => 'ď',
                'Đ' => 'đ',
                'Ē' => 'ē',
                'Ĕ' => 'ĕ',
                'Ė' => 'ė',
                'Ę' => 'ę',
                'Ě' => 'ě',
                'Ĝ' => 'ĝ',
                'Ğ' => 'ğ',
                'Ġ' => 'ġ',
                'Ģ' => 'ģ',
                'Ĥ' => 'ĥ',
                'Ħ' => 'ħ',
                'Ĩ' => 'ĩ',
                'Ī' => 'ī',
                'Ĭ' => 'ĭ',
                'Į' => 'į',
                'İ' => 'i',
                'Ĳ' => 'ĳ',
                'Ĵ' => 'ĵ',
                'Ķ' => 'ķ',
                'Ĺ' => 'ĺ',
                'Ļ' => 'ļ',
                'Ľ' => 'ľ',
                'Ŀ' => 'ŀ',
                'Ł' => 'ł',
                'Ń' => 'ń',
                'Ņ' => 'ņ',
                'Ň' => 'ň',
                'Ŋ' => 'ŋ',
                'Ō' => 'ō',
                'Ŏ' => 'ŏ',
                'Ő' => 'ő',
                'Œ' => 'œ',
                'Ŕ' => 'ŕ',
                'Ŗ' => 'ŗ',
                'Ř' => 'ř',
                'Ś' => 'ś',
                'Ŝ' => 'ŝ',
                'Ş' => 'ş',
                'Š' => 'š',
                'Ţ' => 'ţ',
                'Ť' => 'ť',
                'Ŧ' => 'ŧ',
                'Ũ' => 'ũ',
                'Ū' => 'ū',
                'Ŭ' => 'ŭ',
                'Ů' => 'ů',
                'Ű' => 'ű',
                'Ų' => 'ų',
                'Ŵ' => 'ŵ',
                'Ŷ' => 'ŷ',
                'Ÿ' => 'ÿ',
                'Ź' => 'ź',
                'Ż' => 'ż',
                'Ž' => 'ž',
                'Ɓ' => 'ɓ',
                'Ƃ' => 'ƃ',
                'Ƅ' => 'ƅ',
                'Ɔ' => 'ɔ',
                'Ƈ' => 'ƈ',
                'Ɖ' => 'ɖ',
                'Ɗ' => 'ɗ',
                'Ƌ' => 'ƌ',
                'Ǝ' => 'ǝ',
                'Ə' => 'ə',
                'Ɛ' => 'ɛ',
                'Ƒ' => 'ƒ',
                'Ɠ' => 'ɠ',
                'Ɣ' => 'ɣ',
                'Ɩ' => 'ɩ',
                'Ɨ' => 'ɨ',
                'Ƙ' => 'ƙ',
                'Ɯ' => 'ɯ',
                'Ɲ' => 'ɲ',
                'Ɵ' => 'ɵ',
                'Ơ' => 'ơ',
                'Ƣ' => 'ƣ',
                'Ƥ' => 'ƥ',
                'Ʀ' => 'ʀ',
                'Ƨ' => 'ƨ',
                'Ʃ' => 'ʃ',
                'Ƭ' => 'ƭ',
                'Ʈ' => 'ʈ',
                'Ư' => 'ư',
                'Ʊ' => 'ʊ',
                'Ʋ' => 'ʋ',
                'Ƴ' => 'ƴ',
                'Ƶ' => 'ƶ',
                'Ʒ' => 'ʒ',
                'Ƹ' => 'ƹ',
                'Ƽ' => 'ƽ',
                'Ǆ' => 'ǆ',
                'ǅ' => 'ǆ',
                'Ǉ' => 'ǉ',
                'ǈ' => 'ǉ',
                'Ǌ' => 'ǌ',
                'ǋ' => 'ǌ',
                'Ǎ' => 'ǎ',
                'Ǐ' => 'ǐ',
                'Ǒ' => 'ǒ',
                'Ǔ' => 'ǔ',
                'Ǖ' => 'ǖ',
                'Ǘ' => 'ǘ',
                'Ǚ' => 'ǚ',
                'Ǜ' => 'ǜ',
                'Ǟ' => 'ǟ',
                'Ǡ' => 'ǡ',
                'Ǣ' => 'ǣ',
                'Ǥ' => 'ǥ',
                'Ǧ' => 'ǧ',
                'Ǩ' => 'ǩ',
                'Ǫ' => 'ǫ',
                'Ǭ' => 'ǭ',
                'Ǯ' => 'ǯ',
                'Ǳ' => 'ǳ',
                'ǲ' => 'ǳ',
                'Ǵ' => 'ǵ',
                'Ƕ' => 'ƕ',
                'Ƿ' => 'ƿ',
                'Ǹ' => 'ǹ',
                'Ǻ' => 'ǻ',
                'Ǽ' => 'ǽ',
                'Ǿ' => 'ǿ',
                'Ȁ' => 'ȁ',
                'Ȃ' => 'ȃ',
                'Ȅ' => 'ȅ',
                'Ȇ' => 'ȇ',
                'Ȉ' => 'ȉ',
                'Ȋ' => 'ȋ',
                'Ȍ' => 'ȍ',
                'Ȏ' => 'ȏ',
                'Ȑ' => 'ȑ',
                'Ȓ' => 'ȓ',
                'Ȕ' => 'ȕ',
                'Ȗ' => 'ȗ',
                'Ș' => 'ș',
                'Ț' => 'ț',
                'Ȝ' => 'ȝ',
                'Ȟ' => 'ȟ',
                'Ƞ' => 'ƞ',
                'Ȣ' => 'ȣ',
                'Ȥ' => 'ȥ',
                'Ȧ' => 'ȧ',
                'Ȩ' => 'ȩ',
                'Ȫ' => 'ȫ',
                'Ȭ' => 'ȭ',
                'Ȯ' => 'ȯ',
                'Ȱ' => 'ȱ',
                'Ȳ' => 'ȳ',
                'Ⱥ' => 'ⱥ',
                'Ȼ' => 'ȼ',
                'Ƚ' => 'ƚ',
                'Ⱦ' => 'ⱦ',
                'Ɂ' => 'ɂ',
                'Ƀ' => 'ƀ',
                'Ʉ' => 'ʉ',
                'Ʌ' => 'ʌ',
                'Ɇ' => 'ɇ',
                'Ɉ' => 'ɉ',
                'Ɋ' => 'ɋ',
                'Ɍ' => 'ɍ',
                'Ɏ' => 'ɏ',
                'Ͱ' => 'ͱ',
                'Ͳ' => 'ͳ',
                'Ͷ' => 'ͷ',
                'Ϳ' => 'ϳ',
                'Ά' => 'ά',
                'Έ' => 'έ',
                'Ή' => 'ή',
                'Ί' => 'ί',
                'Ό' => 'ό',
                'Ύ' => 'ύ',
                'Ώ' => 'ώ',
                'Α' => 'α',
                'Β' => 'β',
                'Γ' => 'γ',
                'Δ' => 'δ',
                'Ε' => 'ε',
                'Ζ' => 'ζ',
                'Η' => 'η',
                'Θ' => 'θ',
                'Ι' => 'ι',
                'Κ' => 'κ',
                'Λ' => 'λ',
                'Μ' => 'μ',
                'Ν' => 'ν',
                'Ξ' => 'ξ',
                'Ο' => 'ο',
                'Π' => 'π',
                'Ρ' => 'ρ',
                'Σ' => 'σ',
                'Τ' => 'τ',
                'Υ' => 'υ',
                'Φ' => 'φ',
                'Χ' => 'χ',
                'Ψ' => 'ψ',
                'Ω' => 'ω',
                'Ϊ' => 'ϊ',
                'Ϋ' => 'ϋ',
                'Ϗ' => 'ϗ',
                'Ϙ' => 'ϙ',
                'Ϛ' => 'ϛ',
                'Ϝ' => 'ϝ',
                'Ϟ' => 'ϟ',
                'Ϡ' => 'ϡ',
                'Ϣ' => 'ϣ',
                'Ϥ' => 'ϥ',
                'Ϧ' => 'ϧ',
                'Ϩ' => 'ϩ',
                'Ϫ' => 'ϫ',
                'Ϭ' => 'ϭ',
                'Ϯ' => 'ϯ',
                'ϴ' => 'θ',
                'Ϸ' => 'ϸ',
                'Ϲ' => 'ϲ',
                'Ϻ' => 'ϻ',
                'Ͻ' => 'ͻ',
                'Ͼ' => 'ͼ',
                'Ͽ' => 'ͽ',
                'Ѐ' => 'ѐ',
                'Ё' => 'ё',
                'Ђ' => 'ђ',
                'Ѓ' => 'ѓ',
                'Є' => 'є',
                'Ѕ' => 'ѕ',
                'І' => 'і',
                'Ї' => 'ї',
                'Ј' => 'ј',
                'Љ' => 'љ',
                'Њ' => 'њ',
                'Ћ' => 'ћ',
                'Ќ' => 'ќ',
                'Ѝ' => 'ѝ',
                'Ў' => 'ў',
                'Џ' => 'џ',
                'А' => 'а',
                'Б' => 'б',
                'В' => 'в',
                'Г' => 'г',
                'Д' => 'д',
                'Е' => 'е',
                'Ж' => 'ж',
                'З' => 'з',
                'И' => 'и',
                'Й' => 'й',
                'К' => 'к',
                'Л' => 'л',
                'М' => 'м',
                'Н' => 'н',
                'О' => 'о',
                'П' => 'п',
                'Р' => 'р',
                'С' => 'с',
                'Т' => 'т',
                'У' => 'у',
                'Ф' => 'ф',
                'Х' => 'х',
                'Ц' => 'ц',
                'Ч' => 'ч',
                'Ш' => 'ш',
                'Щ' => 'щ',
                'Ъ' => 'ъ',
                'Ы' => 'ы',
                'Ь' => 'ь',
                'Э' => 'э',
                'Ю' => 'ю',
                'Я' => 'я',
                'Ѡ' => 'ѡ',
                'Ѣ' => 'ѣ',
                'Ѥ' => 'ѥ',
                'Ѧ' => 'ѧ',
                'Ѩ' => 'ѩ',
                'Ѫ' => 'ѫ',
                'Ѭ' => 'ѭ',
                'Ѯ' => 'ѯ',
                'Ѱ' => 'ѱ',
                'Ѳ' => 'ѳ',
                'Ѵ' => 'ѵ',
                'Ѷ' => 'ѷ',
                'Ѹ' => 'ѹ',
                'Ѻ' => 'ѻ',
                'Ѽ' => 'ѽ',
                'Ѿ' => 'ѿ',
                'Ҁ' => 'ҁ',
                'Ҋ' => 'ҋ',
                'Ҍ' => 'ҍ',
                'Ҏ' => 'ҏ',
                'Ґ' => 'ґ',
                'Ғ' => 'ғ',
                'Ҕ' => 'ҕ',
                'Җ' => 'җ',
                'Ҙ' => 'ҙ',
                'Қ' => 'қ',
                'Ҝ' => 'ҝ',
                'Ҟ' => 'ҟ',
                'Ҡ' => 'ҡ',
                'Ң' => 'ң',
                'Ҥ' => 'ҥ',
                'Ҧ' => 'ҧ',
                'Ҩ' => 'ҩ',
                'Ҫ' => 'ҫ',
                'Ҭ' => 'ҭ',
                'Ү' => 'ү',
                'Ұ' => 'ұ',
                'Ҳ' => 'ҳ',
                'Ҵ' => 'ҵ',
                'Ҷ' => 'ҷ',
                'Ҹ' => 'ҹ',
                'Һ' => 'һ',
                'Ҽ' => 'ҽ',
                'Ҿ' => 'ҿ',
                'Ӏ' => 'ӏ',
                'Ӂ' => 'ӂ',
                'Ӄ' => 'ӄ',
                'Ӆ' => 'ӆ',
                'Ӈ' => 'ӈ',
                'Ӊ' => 'ӊ',
                'Ӌ' => 'ӌ',
                'Ӎ' => 'ӎ',
                'Ӑ' => 'ӑ',
                'Ӓ' => 'ӓ',
                'Ӕ' => 'ӕ',
                'Ӗ' => 'ӗ',
                'Ә' => 'ә',
                'Ӛ' => 'ӛ',
                'Ӝ' => 'ӝ',
                'Ӟ' => 'ӟ',
                'Ӡ' => 'ӡ',
                'Ӣ' => 'ӣ',
                'Ӥ' => 'ӥ',
                'Ӧ' => 'ӧ',
                'Ө' => 'ө',
                'Ӫ' => 'ӫ',
                'Ӭ' => 'ӭ',
                'Ӯ' => 'ӯ',
                'Ӱ' => 'ӱ',
                'Ӳ' => 'ӳ',
                'Ӵ' => 'ӵ',
                'Ӷ' => 'ӷ',
                'Ӹ' => 'ӹ',
                'Ӻ' => 'ӻ',
                'Ӽ' => 'ӽ',
                'Ӿ' => 'ӿ',
                'Ԁ' => 'ԁ',
                'Ԃ' => 'ԃ',
                'Ԅ' => 'ԅ',
                'Ԇ' => 'ԇ',
                'Ԉ' => 'ԉ',
                'Ԋ' => 'ԋ',
                'Ԍ' => 'ԍ',
                'Ԏ' => 'ԏ',
                'Ԑ' => 'ԑ',
                'Ԓ' => 'ԓ',
                'Ԕ' => 'ԕ',
                'Ԗ' => 'ԗ',
                'Ԙ' => 'ԙ',
                'Ԛ' => 'ԛ',
                'Ԝ' => 'ԝ',
                'Ԟ' => 'ԟ',
                'Ԡ' => 'ԡ',
                'Ԣ' => 'ԣ',
                'Ԥ' => 'ԥ',
                'Ԧ' => 'ԧ',
                'Ԩ' => 'ԩ',
                'Ԫ' => 'ԫ',
                'Ԭ' => 'ԭ',
                'Ԯ' => 'ԯ',
                'Ա' => 'ա',
                'Բ' => 'բ',
                'Գ' => 'գ',
                'Դ' => 'դ',
                'Ե' => 'ե',
                'Զ' => 'զ',
                'Է' => 'է',
                'Ը' => 'ը',
                'Թ' => 'թ',
                'Ժ' => 'ժ',
                'Ի' => 'ի',
                'Լ' => 'լ',
                'Խ' => 'խ',
                'Ծ' => 'ծ',
                'Կ' => 'կ',
                'Հ' => 'հ',
                'Ձ' => 'ձ',
                'Ղ' => 'ղ',
                'Ճ' => 'ճ',
                'Մ' => 'մ',
                'Յ' => 'յ',
                'Ն' => 'ն',
                'Շ' => 'շ',
                'Ո' => 'ո',
                'Չ' => 'չ',
                'Պ' => 'պ',
                'Ջ' => 'ջ',
                'Ռ' => 'ռ',
                'Ս' => 'ս',
                'Վ' => 'վ',
                'Տ' => 'տ',
                'Ր' => 'ր',
                'Ց' => 'ց',
                'Ւ' => 'ւ',
                'Փ' => 'փ',
                'Ք' => 'ք',
                'Օ' => 'օ',
                'Ֆ' => 'ֆ',
                'Ⴀ' => 'ⴀ',
                'Ⴁ' => 'ⴁ',
                'Ⴂ' => 'ⴂ',
                'Ⴃ' => 'ⴃ',
                'Ⴄ' => 'ⴄ',
                'Ⴅ' => 'ⴅ',
                'Ⴆ' => 'ⴆ',
                'Ⴇ' => 'ⴇ',
                'Ⴈ' => 'ⴈ',
                'Ⴉ' => 'ⴉ',
                'Ⴊ' => 'ⴊ',
                'Ⴋ' => 'ⴋ',
                'Ⴌ' => 'ⴌ',
                'Ⴍ' => 'ⴍ',
                'Ⴎ' => 'ⴎ',
                'Ⴏ' => 'ⴏ',
                'Ⴐ' => 'ⴐ',
                'Ⴑ' => 'ⴑ',
                'Ⴒ' => 'ⴒ',
                'Ⴓ' => 'ⴓ',
                'Ⴔ' => 'ⴔ',
                'Ⴕ' => 'ⴕ',
                'Ⴖ' => 'ⴖ',
                'Ⴗ' => 'ⴗ',
                'Ⴘ' => 'ⴘ',
                'Ⴙ' => 'ⴙ',
                'Ⴚ' => 'ⴚ',
                'Ⴛ' => 'ⴛ',
                'Ⴜ' => 'ⴜ',
                'Ⴝ' => 'ⴝ',
                'Ⴞ' => 'ⴞ',
                'Ⴟ' => 'ⴟ',
                'Ⴠ' => 'ⴠ',
                'Ⴡ' => 'ⴡ',
                'Ⴢ' => 'ⴢ',
                'Ⴣ' => 'ⴣ',
                'Ⴤ' => 'ⴤ',
                'Ⴥ' => 'ⴥ',
                'Ⴧ' => 'ⴧ',
                'Ⴭ' => 'ⴭ',
                'Ḁ' => 'ḁ',
                'Ḃ' => 'ḃ',
                'Ḅ' => 'ḅ',
                'Ḇ' => 'ḇ',
                'Ḉ' => 'ḉ',
                'Ḋ' => 'ḋ',
                'Ḍ' => 'ḍ',
                'Ḏ' => 'ḏ',
                'Ḑ' => 'ḑ',
                'Ḓ' => 'ḓ',
                'Ḕ' => 'ḕ',
                'Ḗ' => 'ḗ',
                'Ḙ' => 'ḙ',
                'Ḛ' => 'ḛ',
                'Ḝ' => 'ḝ',
                'Ḟ' => 'ḟ',
                'Ḡ' => 'ḡ',
                'Ḣ' => 'ḣ',
                'Ḥ' => 'ḥ',
                'Ḧ' => 'ḧ',
                'Ḩ' => 'ḩ',
                'Ḫ' => 'ḫ',
                'Ḭ' => 'ḭ',
                'Ḯ' => 'ḯ',
                'Ḱ' => 'ḱ',
                'Ḳ' => 'ḳ',
                'Ḵ' => 'ḵ',
                'Ḷ' => 'ḷ',
                'Ḹ' => 'ḹ',
                'Ḻ' => 'ḻ',
                'Ḽ' => 'ḽ',
                'Ḿ' => 'ḿ',
                'Ṁ' => 'ṁ',
                'Ṃ' => 'ṃ',
                'Ṅ' => 'ṅ',
                'Ṇ' => 'ṇ',
                'Ṉ' => 'ṉ',
                'Ṋ' => 'ṋ',
                'Ṍ' => 'ṍ',
                'Ṏ' => 'ṏ',
                'Ṑ' => 'ṑ',
                'Ṓ' => 'ṓ',
                'Ṕ' => 'ṕ',
                'Ṗ' => 'ṗ',
                'Ṙ' => 'ṙ',
                'Ṛ' => 'ṛ',
                'Ṝ' => 'ṝ',
                'Ṟ' => 'ṟ',
                'Ṡ' => 'ṡ',
                'Ṣ' => 'ṣ',
                'Ṥ' => 'ṥ',
                'Ṧ' => 'ṧ',
                'Ṩ' => 'ṩ',
                'Ṫ' => 'ṫ',
                'Ṭ' => 'ṭ',
                'Ṯ' => 'ṯ',
                'Ṱ' => 'ṱ',
                'Ṳ' => 'ṳ',
                'Ṵ' => 'ṵ',
                'Ṷ' => 'ṷ',
                'Ṹ' => 'ṹ',
                'Ṻ' => 'ṻ',
                'Ṽ' => 'ṽ',
                'Ṿ' => 'ṿ',
                'Ẁ' => 'ẁ',
                'Ẃ' => 'ẃ',
                'Ẅ' => 'ẅ',
                'Ẇ' => 'ẇ',
                'Ẉ' => 'ẉ',
                'Ẋ' => 'ẋ',
                'Ẍ' => 'ẍ',
                'Ẏ' => 'ẏ',
                'Ẑ' => 'ẑ',
                'Ẓ' => 'ẓ',
                'Ẕ' => 'ẕ',
                'ẞ' => 'ß',
                'Ạ' => 'ạ',
                'Ả' => 'ả',
                'Ấ' => 'ấ',
                'Ầ' => 'ầ',
                'Ẩ' => 'ẩ',
                'Ẫ' => 'ẫ',
                'Ậ' => 'ậ',
                'Ắ' => 'ắ',
                'Ằ' => 'ằ',
                'Ẳ' => 'ẳ',
                'Ẵ' => 'ẵ',
                'Ặ' => 'ặ',
                'Ẹ' => 'ẹ',
                'Ẻ' => 'ẻ',
                'Ẽ' => 'ẽ',
                'Ế' => 'ế',
                'Ề' => 'ề',
                'Ể' => 'ể',
                'Ễ' => 'ễ',
                'Ệ' => 'ệ',
                'Ỉ' => 'ỉ',
                'Ị' => 'ị',
                'Ọ' => 'ọ',
                'Ỏ' => 'ỏ',
                'Ố' => 'ố',
                'Ồ' => 'ồ',
                'Ổ' => 'ổ',
                'Ỗ' => 'ỗ',
                'Ộ' => 'ộ',
                'Ớ' => 'ớ',
                'Ờ' => 'ờ',
                'Ở' => 'ở',
                'Ỡ' => 'ỡ',
                'Ợ' => 'ợ',
                'Ụ' => 'ụ',
                'Ủ' => 'ủ',
                'Ứ' => 'ứ',
                'Ừ' => 'ừ',
                'Ử' => 'ử',
                'Ữ' => 'ữ',
                'Ự' => 'ự',
                'Ỳ' => 'ỳ',
                'Ỵ' => 'ỵ',
                'Ỷ' => 'ỷ',
                'Ỹ' => 'ỹ',
                'Ỻ' => 'ỻ',
                'Ỽ' => 'ỽ',
                'Ỿ' => 'ỿ',
                'Ἀ' => 'ἀ',
                'Ἁ' => 'ἁ',
                'Ἂ' => 'ἂ',
                'Ἃ' => 'ἃ',
                'Ἄ' => 'ἄ',
                'Ἅ' => 'ἅ',
                'Ἆ' => 'ἆ',
                'Ἇ' => 'ἇ',
                'Ἐ' => 'ἐ',
                'Ἑ' => 'ἑ',
                'Ἒ' => 'ἒ',
                'Ἓ' => 'ἓ',
                'Ἔ' => 'ἔ',
                'Ἕ' => 'ἕ',
                'Ἠ' => 'ἠ',
                'Ἡ' => 'ἡ',
                'Ἢ' => 'ἢ',
                'Ἣ' => 'ἣ',
                'Ἤ' => 'ἤ',
                'Ἥ' => 'ἥ',
                'Ἦ' => 'ἦ',
                'Ἧ' => 'ἧ',
                'Ἰ' => 'ἰ',
                'Ἱ' => 'ἱ',
                'Ἲ' => 'ἲ',
                'Ἳ' => 'ἳ',
                'Ἴ' => 'ἴ',
                'Ἵ' => 'ἵ',
                'Ἶ' => 'ἶ',
                'Ἷ' => 'ἷ',
                'Ὀ' => 'ὀ',
                'Ὁ' => 'ὁ',
                'Ὂ' => 'ὂ',
                'Ὃ' => 'ὃ',
                'Ὄ' => 'ὄ',
                'Ὅ' => 'ὅ',
                'Ὑ' => 'ὑ',
                'Ὓ' => 'ὓ',
                'Ὕ' => 'ὕ',
                'Ὗ' => 'ὗ',
                'Ὠ' => 'ὠ',
                'Ὡ' => 'ὡ',
                'Ὢ' => 'ὢ',
                'Ὣ' => 'ὣ',
                'Ὤ' => 'ὤ',
                'Ὥ' => 'ὥ',
                'Ὦ' => 'ὦ',
                'Ὧ' => 'ὧ',
                'ᾈ' => 'ᾀ',
                'ᾉ' => 'ᾁ',
                'ᾊ' => 'ᾂ',
                'ᾋ' => 'ᾃ',
                'ᾌ' => 'ᾄ',
                'ᾍ' => 'ᾅ',
                'ᾎ' => 'ᾆ',
                'ᾏ' => 'ᾇ',
                'ᾘ' => 'ᾐ',
                'ᾙ' => 'ᾑ',
                'ᾚ' => 'ᾒ',
                'ᾛ' => 'ᾓ',
                'ᾜ' => 'ᾔ',
                'ᾝ' => 'ᾕ',
                'ᾞ' => 'ᾖ',
                'ᾟ' => 'ᾗ',
                'ᾨ' => 'ᾠ',
                'ᾩ' => 'ᾡ',
                'ᾪ' => 'ᾢ',
                'ᾫ' => 'ᾣ',
                'ᾬ' => 'ᾤ',
                'ᾭ' => 'ᾥ',
                'ᾮ' => 'ᾦ',
                'ᾯ' => 'ᾧ',
                'Ᾰ' => 'ᾰ',
                'Ᾱ' => 'ᾱ',
                'Ὰ' => 'ὰ',
                'Ά' => 'ά',
                'ᾼ' => 'ᾳ',
                'Ὲ' => 'ὲ',
                'Έ' => 'έ',
                'Ὴ' => 'ὴ',
                'Ή' => 'ή',
                'ῌ' => 'ῃ',
                'Ῐ' => 'ῐ',
                'Ῑ' => 'ῑ',
                'Ὶ' => 'ὶ',
                'Ί' => 'ί',
                'Ῠ' => 'ῠ',
                'Ῡ' => 'ῡ',
                'Ὺ' => 'ὺ',
                'Ύ' => 'ύ',
                'Ῥ' => 'ῥ',
                'Ὸ' => 'ὸ',
                'Ό' => 'ό',
                'Ὼ' => 'ὼ',
                'Ώ' => 'ώ',
                'ῼ' => 'ῳ',
                'Ω' => 'ω',
                'K' => 'k',
                'Å' => 'å',
                'Ⅎ' => 'ⅎ',
                'Ⅰ' => 'ⅰ',
                'Ⅱ' => 'ⅱ',
                'Ⅲ' => 'ⅲ',
                'Ⅳ' => 'ⅳ',
                'Ⅴ' => 'ⅴ',
                'Ⅵ' => 'ⅵ',
                'Ⅶ' => 'ⅶ',
                'Ⅷ' => 'ⅷ',
                'Ⅸ' => 'ⅸ',
                'Ⅹ' => 'ⅹ',
                'Ⅺ' => 'ⅺ',
                'Ⅻ' => 'ⅻ',
                'Ⅼ' => 'ⅼ',
                'Ⅽ' => 'ⅽ',
                'Ⅾ' => 'ⅾ',
                'Ⅿ' => 'ⅿ',
                'Ↄ' => 'ↄ',
                'Ⓐ' => 'ⓐ',
                'Ⓑ' => 'ⓑ',
                'Ⓒ' => 'ⓒ',
                'Ⓓ' => 'ⓓ',
                'Ⓔ' => 'ⓔ',
                'Ⓕ' => 'ⓕ',
                'Ⓖ' => 'ⓖ',
                'Ⓗ' => 'ⓗ',
                'Ⓘ' => 'ⓘ',
                'Ⓙ' => 'ⓙ',
                'Ⓚ' => 'ⓚ',
                'Ⓛ' => 'ⓛ',
                'Ⓜ' => 'ⓜ',
                'Ⓝ' => 'ⓝ',
                'Ⓞ' => 'ⓞ',
                'Ⓟ' => 'ⓟ',
                'Ⓠ' => 'ⓠ',
                'Ⓡ' => 'ⓡ',
                'Ⓢ' => 'ⓢ',
                'Ⓣ' => 'ⓣ',
                'Ⓤ' => 'ⓤ',
                'Ⓥ' => 'ⓥ',
                'Ⓦ' => 'ⓦ',
                'Ⓧ' => 'ⓧ',
                'Ⓨ' => 'ⓨ',
                'Ⓩ' => 'ⓩ',
                'Ⰰ' => 'ⰰ',
                'Ⰱ' => 'ⰱ',
                'Ⰲ' => 'ⰲ',
                'Ⰳ' => 'ⰳ',
                'Ⰴ' => 'ⰴ',
                'Ⰵ' => 'ⰵ',
                'Ⰶ' => 'ⰶ',
                'Ⰷ' => 'ⰷ',
                'Ⰸ' => 'ⰸ',
                'Ⰹ' => 'ⰹ',
                'Ⰺ' => 'ⰺ',
                'Ⰻ' => 'ⰻ',
                'Ⰼ' => 'ⰼ',
                'Ⰽ' => 'ⰽ',
                'Ⰾ' => 'ⰾ',
                'Ⰿ' => 'ⰿ',
                'Ⱀ' => 'ⱀ',
                'Ⱁ' => 'ⱁ',
                'Ⱂ' => 'ⱂ',
                'Ⱃ' => 'ⱃ',
                'Ⱄ' => 'ⱄ',
                'Ⱅ' => 'ⱅ',
                'Ⱆ' => 'ⱆ',
                'Ⱇ' => 'ⱇ',
                'Ⱈ' => 'ⱈ',
                'Ⱉ' => 'ⱉ',
                'Ⱊ' => 'ⱊ',
                'Ⱋ' => 'ⱋ',
                'Ⱌ' => 'ⱌ',
                'Ⱍ' => 'ⱍ',
                'Ⱎ' => 'ⱎ',
                'Ⱏ' => 'ⱏ',
                'Ⱐ' => 'ⱐ',
                'Ⱑ' => 'ⱑ',
                'Ⱒ' => 'ⱒ',
                'Ⱓ' => 'ⱓ',
                'Ⱔ' => 'ⱔ',
                'Ⱕ' => 'ⱕ',
                'Ⱖ' => 'ⱖ',
                'Ⱗ' => 'ⱗ',
                'Ⱘ' => 'ⱘ',
                'Ⱙ' => 'ⱙ',
                'Ⱚ' => 'ⱚ',
                'Ⱛ' => 'ⱛ',
                'Ⱜ' => 'ⱜ',
                'Ⱝ' => 'ⱝ',
                'Ⱞ' => 'ⱞ',
                'Ⱡ' => 'ⱡ',
                'Ɫ' => 'ɫ',
                'Ᵽ' => 'ᵽ',
                'Ɽ' => 'ɽ',
                'Ⱨ' => 'ⱨ',
                'Ⱪ' => 'ⱪ',
                'Ⱬ' => 'ⱬ',
                'Ɑ' => 'ɑ',
                'Ɱ' => 'ɱ',
                'Ɐ' => 'ɐ',
                'Ɒ' => 'ɒ',
                'Ⱳ' => 'ⱳ',
                'Ⱶ' => 'ⱶ',
                'Ȿ' => 'ȿ',
                'Ɀ' => 'ɀ',
                'Ⲁ' => 'ⲁ',
                'Ⲃ' => 'ⲃ',
                'Ⲅ' => 'ⲅ',
                'Ⲇ' => 'ⲇ',
                'Ⲉ' => 'ⲉ',
                'Ⲋ' => 'ⲋ',
                'Ⲍ' => 'ⲍ',
                'Ⲏ' => 'ⲏ',
                'Ⲑ' => 'ⲑ',
                'Ⲓ' => 'ⲓ',
                'Ⲕ' => 'ⲕ',
                'Ⲗ' => 'ⲗ',
                'Ⲙ' => 'ⲙ',
                'Ⲛ' => 'ⲛ',
                'Ⲝ' => 'ⲝ',
                'Ⲟ' => 'ⲟ',
                'Ⲡ' => 'ⲡ',
                'Ⲣ' => 'ⲣ',
                'Ⲥ' => 'ⲥ',
                'Ⲧ' => 'ⲧ',
                'Ⲩ' => 'ⲩ',
                'Ⲫ' => 'ⲫ',
                'Ⲭ' => 'ⲭ',
                'Ⲯ' => 'ⲯ',
                'Ⲱ' => 'ⲱ',
                'Ⲳ' => 'ⲳ',
                'Ⲵ' => 'ⲵ',
                'Ⲷ' => 'ⲷ',
                'Ⲹ' => 'ⲹ',
                'Ⲻ' => 'ⲻ',
                'Ⲽ' => 'ⲽ',
                'Ⲿ' => 'ⲿ',
                'Ⳁ' => 'ⳁ',
                'Ⳃ' => 'ⳃ',
                'Ⳅ' => 'ⳅ',
                'Ⳇ' => 'ⳇ',
                'Ⳉ' => 'ⳉ',
                'Ⳋ' => 'ⳋ',
                'Ⳍ' => 'ⳍ',
                'Ⳏ' => 'ⳏ',
                'Ⳑ' => 'ⳑ',
                'Ⳓ' => 'ⳓ',
                'Ⳕ' => 'ⳕ',
                'Ⳗ' => 'ⳗ',
                'Ⳙ' => 'ⳙ',
                'Ⳛ' => 'ⳛ',
                'Ⳝ' => 'ⳝ',
                'Ⳟ' => 'ⳟ',
                'Ⳡ' => 'ⳡ',
                'Ⳣ' => 'ⳣ',
                'Ⳬ' => 'ⳬ',
                'Ⳮ' => 'ⳮ',
                'Ⳳ' => 'ⳳ',
                'Ꙁ' => 'ꙁ',
                'Ꙃ' => 'ꙃ',
                'Ꙅ' => 'ꙅ',
                'Ꙇ' => 'ꙇ',
                'Ꙉ' => 'ꙉ',
                'Ꙋ' => 'ꙋ',
                'Ꙍ' => 'ꙍ',
                'Ꙏ' => 'ꙏ',
                'Ꙑ' => 'ꙑ',
                'Ꙓ' => 'ꙓ',
                'Ꙕ' => 'ꙕ',
                'Ꙗ' => 'ꙗ',
                'Ꙙ' => 'ꙙ',
                'Ꙛ' => 'ꙛ',
                'Ꙝ' => 'ꙝ',
                'Ꙟ' => 'ꙟ',
                'Ꙡ' => 'ꙡ',
                'Ꙣ' => 'ꙣ',
                'Ꙥ' => 'ꙥ',
                'Ꙧ' => 'ꙧ',
                'Ꙩ' => 'ꙩ',
                'Ꙫ' => 'ꙫ',
                'Ꙭ' => 'ꙭ',
                'Ꚁ' => 'ꚁ',
                'Ꚃ' => 'ꚃ',
                'Ꚅ' => 'ꚅ',
                'Ꚇ' => 'ꚇ',
                'Ꚉ' => 'ꚉ',
                'Ꚋ' => 'ꚋ',
                'Ꚍ' => 'ꚍ',
                'Ꚏ' => 'ꚏ',
                'Ꚑ' => 'ꚑ',
                'Ꚓ' => 'ꚓ',
                'Ꚕ' => 'ꚕ',
                'Ꚗ' => 'ꚗ',
                'Ꚙ' => 'ꚙ',
                'Ꚛ' => 'ꚛ',
                'Ꜣ' => 'ꜣ',
                'Ꜥ' => 'ꜥ',
                'Ꜧ' => 'ꜧ',
                'Ꜩ' => 'ꜩ',
                'Ꜫ' => 'ꜫ',
                'Ꜭ' => 'ꜭ',
                'Ꜯ' => 'ꜯ',
                'Ꜳ' => 'ꜳ',
                'Ꜵ' => 'ꜵ',
                'Ꜷ' => 'ꜷ',
                'Ꜹ' => 'ꜹ',
                'Ꜻ' => 'ꜻ',
                'Ꜽ' => 'ꜽ',
                'Ꜿ' => 'ꜿ',
                'Ꝁ' => 'ꝁ',
                'Ꝃ' => 'ꝃ',
                'Ꝅ' => 'ꝅ',
                'Ꝇ' => 'ꝇ',
                'Ꝉ' => 'ꝉ',
                'Ꝋ' => 'ꝋ',
                'Ꝍ' => 'ꝍ',
                'Ꝏ' => 'ꝏ',
                'Ꝑ' => 'ꝑ',
                'Ꝓ' => 'ꝓ',
                'Ꝕ' => 'ꝕ',
                'Ꝗ' => 'ꝗ',
                'Ꝙ' => 'ꝙ',
                'Ꝛ' => 'ꝛ',
                'Ꝝ' => 'ꝝ',
                'Ꝟ' => 'ꝟ',
                'Ꝡ' => 'ꝡ',
                'Ꝣ' => 'ꝣ',
                'Ꝥ' => 'ꝥ',
                'Ꝧ' => 'ꝧ',
                'Ꝩ' => 'ꝩ',
                'Ꝫ' => 'ꝫ',
                'Ꝭ' => 'ꝭ',
                'Ꝯ' => 'ꝯ',
                'Ꝺ' => 'ꝺ',
                'Ꝼ' => 'ꝼ',
                'Ᵹ' => 'ᵹ',
                'Ꝿ' => 'ꝿ',
                'Ꞁ' => 'ꞁ',
                'Ꞃ' => 'ꞃ',
                'Ꞅ' => 'ꞅ',
                'Ꞇ' => 'ꞇ',
                'Ꞌ' => 'ꞌ',
                'Ɥ' => 'ɥ',
                'Ꞑ' => 'ꞑ',
                'Ꞓ' => 'ꞓ',
                'Ꞗ' => 'ꞗ',
                'Ꞙ' => 'ꞙ',
                'Ꞛ' => 'ꞛ',
                'Ꞝ' => 'ꞝ',
                'Ꞟ' => 'ꞟ',
                'Ꞡ' => 'ꞡ',
                'Ꞣ' => 'ꞣ',
                'Ꞥ' => 'ꞥ',
                'Ꞧ' => 'ꞧ',
                'Ꞩ' => 'ꞩ',
                'Ɦ' => 'ɦ',
                'Ɜ' => 'ɜ',
                'Ɡ' => 'ɡ',
                'Ɬ' => 'ɬ',
                'Ʞ' => 'ʞ',
                'Ʇ' => 'ʇ',
                'Ａ' => 'ａ',
                'Ｂ' => 'ｂ',
                'Ｃ' => 'ｃ',
                'Ｄ' => 'ｄ',
                'Ｅ' => 'ｅ',
                'Ｆ' => 'ｆ',
                'Ｇ' => 'ｇ',
                'Ｈ' => 'ｈ',
                'Ｉ' => 'ｉ',
                'Ｊ' => 'ｊ',
                'Ｋ' => 'ｋ',
                'Ｌ' => 'ｌ',
                'Ｍ' => 'ｍ',
                'Ｎ' => 'ｎ',
                'Ｏ' => 'ｏ',
                'Ｐ' => 'ｐ',
                'Ｑ' => 'ｑ',
                'Ｒ' => 'ｒ',
                'Ｓ' => 'ｓ',
                'Ｔ' => 'ｔ',
                'Ｕ' => 'ｕ',
                'Ｖ' => 'ｖ',
                'Ｗ' => 'ｗ',
                'Ｘ' => 'ｘ',
                'Ｙ' => 'ｙ',
                'Ｚ' => 'ｚ',
                '𐐀' => '𐐨',
                '𐐁' => '𐐩',
                '𐐂' => '𐐪',
                '𐐃' => '𐐫',
                '𐐄' => '𐐬',
                '𐐅' => '𐐭',
                '𐐆' => '𐐮',
                '𐐇' => '𐐯',
                '𐐈' => '𐐰',
                '𐐉' => '𐐱',
                '𐐊' => '𐐲',
                '𐐋' => '𐐳',
                '𐐌' => '𐐴',
                '𐐍' => '𐐵',
                '𐐎' => '𐐶',
                '𐐏' => '𐐷',
                '𐐐' => '𐐸',
                '𐐑' => '𐐹',
                '𐐒' => '𐐺',
                '𐐓' => '𐐻',
                '𐐔' => '𐐼',
                '𐐕' => '𐐽',
                '𐐖' => '𐐾',
                '𐐗' => '𐐿',
                '𐐘' => '𐑀',
                '𐐙' => '𐑁',
                '𐐚' => '𐑂',
                '𐐛' => '𐑃',
                '𐐜' => '𐑄',
                '𐐝' => '𐑅',
                '𐐞' => '𐑆',
                '𐐟' => '𐑇',
                '𐐠' => '𐑈',
                '𐐡' => '𐑉',
                '𐐢' => '𐑊',
                '𐐣' => '𐑋',
                '𐐤' => '𐑌',
                '𐐥' => '𐑍',
                '𐐦' => '𐑎',
                '𐐧' => '𐑏',
                '𑢠' => '𑣀',
                '𑢡' => '𑣁',
                '𑢢' => '𑣂',
                '𑢣' => '𑣃',
                '𑢤' => '𑣄',
                '𑢥' => '𑣅',
                '𑢦' => '𑣆',
                '𑢧' => '𑣇',
                '𑢨' => '𑣈',
                '𑢩' => '𑣉',
                '𑢪' => '𑣊',
                '𑢫' => '𑣋',
                '𑢬' => '𑣌',
                '𑢭' => '𑣍',
                '𑢮' => '𑣎',
                '𑢯' => '𑣏',
                '𑢰' => '𑣐',
                '𑢱' => '𑣑',
                '𑢲' => '𑣒',
                '𑢳' => '𑣓',
                '𑢴' => '𑣔',
                '𑢵' => '𑣕',
                '𑢶' => '𑣖',
                '𑢷' => '𑣗',
                '𑢸' => '𑣘',
                '𑢹' => '𑣙',
                '𑢺' => '𑣚',
                '𑢻' => '𑣛',
                '𑢼' => '𑣜',
                '𑢽' => '𑣝',
                '𑢾' => '𑣞',
                '𑢿' => '𑣟',
            );
        }

        private static function getDataUpperCase()
        {
            return array(
                'a' => 'A',
                'b' => 'B',
                'c' => 'C',
                'd' => 'D',
                'e' => 'E',
                'f' => 'F',
                'g' => 'G',
                'h' => 'H',
                'i' => 'I',
                'j' => 'J',
                'k' => 'K',
                'l' => 'L',
                'm' => 'M',
                'n' => 'N',
                'o' => 'O',
                'p' => 'P',
                'q' => 'Q',
                'r' => 'R',
                's' => 'S',
                't' => 'T',
                'u' => 'U',
                'v' => 'V',
                'w' => 'W',
                'x' => 'X',
                'y' => 'Y',
                'z' => 'Z',
                'µ' => 'Μ',
                'à' => 'À',
                'á' => 'Á',
                'â' => 'Â',
                'ã' => 'Ã',
                'ä' => 'Ä',
                'å' => 'Å',
                'æ' => 'Æ',
                'ç' => 'Ç',
                'è' => 'È',
                'é' => 'É',
                'ê' => 'Ê',
                'ë' => 'Ë',
                'ì' => 'Ì',
                'í' => 'Í',
                'î' => 'Î',
                'ï' => 'Ï',
                'ð' => 'Ð',
                'ñ' => 'Ñ',
                'ò' => 'Ò',
                'ó' => 'Ó',
                'ô' => 'Ô',
                'õ' => 'Õ',
                'ö' => 'Ö',
                'ø' => 'Ø',
                'ù' => 'Ù',
                'ú' => 'Ú',
                'û' => 'Û',
                'ü' => 'Ü',
                'ý' => 'Ý',
                'þ' => 'Þ',
                'ÿ' => 'Ÿ',
                'ā' => 'Ā',
                'ă' => 'Ă',
                'ą' => 'Ą',
                'ć' => 'Ć',
                'ĉ' => 'Ĉ',
                'ċ' => 'Ċ',
                'č' => 'Č',
                'ď' => 'Ď',
                'đ' => 'Đ',
                'ē' => 'Ē',
                'ĕ' => 'Ĕ',
                'ė' => 'Ė',
                'ę' => 'Ę',
                'ě' => 'Ě',
                'ĝ' => 'Ĝ',
                'ğ' => 'Ğ',
                'ġ' => 'Ġ',
                'ģ' => 'Ģ',
                'ĥ' => 'Ĥ',
                'ħ' => 'Ħ',
                'ĩ' => 'Ĩ',
                'ī' => 'Ī',
                'ĭ' => 'Ĭ',
                'į' => 'Į',
                'ı' => 'I',
                'ĳ' => 'Ĳ',
                'ĵ' => 'Ĵ',
                'ķ' => 'Ķ',
                'ĺ' => 'Ĺ',
                'ļ' => 'Ļ',
                'ľ' => 'Ľ',
                'ŀ' => 'Ŀ',
                'ł' => 'Ł',
                'ń' => 'Ń',
                'ņ' => 'Ņ',
                'ň' => 'Ň',
                'ŋ' => 'Ŋ',
                'ō' => 'Ō',
                'ŏ' => 'Ŏ',
                'ő' => 'Ő',
                'œ' => 'Œ',
                'ŕ' => 'Ŕ',
                'ŗ' => 'Ŗ',
                'ř' => 'Ř',
                'ś' => 'Ś',
                'ŝ' => 'Ŝ',
                'ş' => 'Ş',
                'š' => 'Š',
                'ţ' => 'Ţ',
                'ť' => 'Ť',
                'ŧ' => 'Ŧ',
                'ũ' => 'Ũ',
                'ū' => 'Ū',
                'ŭ' => 'Ŭ',
                'ů' => 'Ů',
                'ű' => 'Ű',
                'ų' => 'Ų',
                'ŵ' => 'Ŵ',
                'ŷ' => 'Ŷ',
                'ź' => 'Ź',
                'ż' => 'Ż',
                'ž' => 'Ž',
                'ſ' => 'S',
                'ƀ' => 'Ƀ',
                'ƃ' => 'Ƃ',
                'ƅ' => 'Ƅ',
                'ƈ' => 'Ƈ',
                'ƌ' => 'Ƌ',
                'ƒ' => 'Ƒ',
                'ƕ' => 'Ƕ',
                'ƙ' => 'Ƙ',
                'ƚ' => 'Ƚ',
                'ƞ' => 'Ƞ',
                'ơ' => 'Ơ',
                'ƣ' => 'Ƣ',
                'ƥ' => 'Ƥ',
                'ƨ' => 'Ƨ',
                'ƭ' => 'Ƭ',
                'ư' => 'Ư',
                'ƴ' => 'Ƴ',
                'ƶ' => 'Ƶ',
                'ƹ' => 'Ƹ',
                'ƽ' => 'Ƽ',
                'ƿ' => 'Ƿ',
                'ǅ' => 'Ǆ',
                'ǆ' => 'Ǆ',
                'ǈ' => 'Ǉ',
                'ǉ' => 'Ǉ',
                'ǋ' => 'Ǌ',
                'ǌ' => 'Ǌ',
                'ǎ' => 'Ǎ',
                'ǐ' => 'Ǐ',
                'ǒ' => 'Ǒ',
                'ǔ' => 'Ǔ',
                'ǖ' => 'Ǖ',
                'ǘ' => 'Ǘ',
                'ǚ' => 'Ǚ',
                'ǜ' => 'Ǜ',
                'ǝ' => 'Ǝ',
                'ǟ' => 'Ǟ',
                'ǡ' => 'Ǡ',
                'ǣ' => 'Ǣ',
                'ǥ' => 'Ǥ',
                'ǧ' => 'Ǧ',
                'ǩ' => 'Ǩ',
                'ǫ' => 'Ǫ',
                'ǭ' => 'Ǭ',
                'ǯ' => 'Ǯ',
                'ǲ' => 'Ǳ',
                'ǳ' => 'Ǳ',
                'ǵ' => 'Ǵ',
                'ǹ' => 'Ǹ',
                'ǻ' => 'Ǻ',
                'ǽ' => 'Ǽ',
                'ǿ' => 'Ǿ',
                'ȁ' => 'Ȁ',
                'ȃ' => 'Ȃ',
                'ȅ' => 'Ȅ',
                'ȇ' => 'Ȇ',
                'ȉ' => 'Ȉ',
                'ȋ' => 'Ȋ',
                'ȍ' => 'Ȍ',
                'ȏ' => 'Ȏ',
                'ȑ' => 'Ȑ',
                'ȓ' => 'Ȓ',
                'ȕ' => 'Ȕ',
                'ȗ' => 'Ȗ',
                'ș' => 'Ș',
                'ț' => 'Ț',
                'ȝ' => 'Ȝ',
                'ȟ' => 'Ȟ',
                'ȣ' => 'Ȣ',
                'ȥ' => 'Ȥ',
                'ȧ' => 'Ȧ',
                'ȩ' => 'Ȩ',
                'ȫ' => 'Ȫ',
                'ȭ' => 'Ȭ',
                'ȯ' => 'Ȯ',
                'ȱ' => 'Ȱ',
                'ȳ' => 'Ȳ',
                'ȼ' => 'Ȼ',
                'ȿ' => 'Ȿ',
                'ɀ' => 'Ɀ',
                'ɂ' => 'Ɂ',
                'ɇ' => 'Ɇ',
                'ɉ' => 'Ɉ',
                'ɋ' => 'Ɋ',
                'ɍ' => 'Ɍ',
                'ɏ' => 'Ɏ',
                'ɐ' => 'Ɐ',
                'ɑ' => 'Ɑ',
                'ɒ' => 'Ɒ',
                'ɓ' => 'Ɓ',
                'ɔ' => 'Ɔ',
                'ɖ' => 'Ɖ',
                'ɗ' => 'Ɗ',
                'ə' => 'Ə',
                'ɛ' => 'Ɛ',
                'ɜ' => 'Ɜ',
                'ɠ' => 'Ɠ',
                'ɡ' => 'Ɡ',
                'ɣ' => 'Ɣ',
                'ɥ' => 'Ɥ',
                'ɦ' => 'Ɦ',
                'ɨ' => 'Ɨ',
                'ɩ' => 'Ɩ',
                'ɫ' => 'Ɫ',
                'ɬ' => 'Ɬ',
                'ɯ' => 'Ɯ',
                'ɱ' => 'Ɱ',
                'ɲ' => 'Ɲ',
                'ɵ' => 'Ɵ',
                'ɽ' => 'Ɽ',
                'ʀ' => 'Ʀ',
                'ʃ' => 'Ʃ',
                'ʇ' => 'Ʇ',
                'ʈ' => 'Ʈ',
                'ʉ' => 'Ʉ',
                'ʊ' => 'Ʊ',
                'ʋ' => 'Ʋ',
                'ʌ' => 'Ʌ',
                'ʒ' => 'Ʒ',
                'ʞ' => 'Ʞ',
                'ͅ' => 'Ι',
                'ͱ' => 'Ͱ',
                'ͳ' => 'Ͳ',
                'ͷ' => 'Ͷ',
                'ͻ' => 'Ͻ',
                'ͼ' => 'Ͼ',
                'ͽ' => 'Ͽ',
                'ά' => 'Ά',
                'έ' => 'Έ',
                'ή' => 'Ή',
                'ί' => 'Ί',
                'α' => 'Α',
                'β' => 'Β',
                'γ' => 'Γ',
                'δ' => 'Δ',
                'ε' => 'Ε',
                'ζ' => 'Ζ',
                'η' => 'Η',
                'θ' => 'Θ',
                'ι' => 'Ι',
                'κ' => 'Κ',
                'λ' => 'Λ',
                'μ' => 'Μ',
                'ν' => 'Ν',
                'ξ' => 'Ξ',
                'ο' => 'Ο',
                'π' => 'Π',
                'ρ' => 'Ρ',
                'ς' => 'Σ',
                'σ' => 'Σ',
                'τ' => 'Τ',
                'υ' => 'Υ',
                'φ' => 'Φ',
                'χ' => 'Χ',
                'ψ' => 'Ψ',
                'ω' => 'Ω',
                'ϊ' => 'Ϊ',
                'ϋ' => 'Ϋ',
                'ό' => 'Ό',
                'ύ' => 'Ύ',
                'ώ' => 'Ώ',
                'ϐ' => 'Β',
                'ϑ' => 'Θ',
                'ϕ' => 'Φ',
                'ϖ' => 'Π',
                'ϗ' => 'Ϗ',
                'ϙ' => 'Ϙ',
                'ϛ' => 'Ϛ',
                'ϝ' => 'Ϝ',
                'ϟ' => 'Ϟ',
                'ϡ' => 'Ϡ',
                'ϣ' => 'Ϣ',
                'ϥ' => 'Ϥ',
                'ϧ' => 'Ϧ',
                'ϩ' => 'Ϩ',
                'ϫ' => 'Ϫ',
                'ϭ' => 'Ϭ',
                'ϯ' => 'Ϯ',
                'ϰ' => 'Κ',
                'ϱ' => 'Ρ',
                'ϲ' => 'Ϲ',
                'ϳ' => 'Ϳ',
                'ϵ' => 'Ε',
                'ϸ' => 'Ϸ',
                'ϻ' => 'Ϻ',
                'а' => 'А',
                'б' => 'Б',
                'в' => 'В',
                'г' => 'Г',
                'д' => 'Д',
                'е' => 'Е',
                'ж' => 'Ж',
                'з' => 'З',
                'и' => 'И',
                'й' => 'Й',
                'к' => 'К',
                'л' => 'Л',
                'м' => 'М',
                'н' => 'Н',
                'о' => 'О',
                'п' => 'П',
                'р' => 'Р',
                'с' => 'С',
                'т' => 'Т',
                'у' => 'У',
                'ф' => 'Ф',
                'х' => 'Х',
                'ц' => 'Ц',
                'ч' => 'Ч',
                'ш' => 'Ш',
                'щ' => 'Щ',
                'ъ' => 'Ъ',
                'ы' => 'Ы',
                'ь' => 'Ь',
                'э' => 'Э',
                'ю' => 'Ю',
                'я' => 'Я',
                'ѐ' => 'Ѐ',
                'ё' => 'Ё',
                'ђ' => 'Ђ',
                'ѓ' => 'Ѓ',
                'є' => 'Є',
                'ѕ' => 'Ѕ',
                'і' => 'І',
                'ї' => 'Ї',
                'ј' => 'Ј',
                'љ' => 'Љ',
                'њ' => 'Њ',
                'ћ' => 'Ћ',
                'ќ' => 'Ќ',
                'ѝ' => 'Ѝ',
                'ў' => 'Ў',
                'џ' => 'Џ',
                'ѡ' => 'Ѡ',
                'ѣ' => 'Ѣ',
                'ѥ' => 'Ѥ',
                'ѧ' => 'Ѧ',
                'ѩ' => 'Ѩ',
                'ѫ' => 'Ѫ',
                'ѭ' => 'Ѭ',
                'ѯ' => 'Ѯ',
                'ѱ' => 'Ѱ',
                'ѳ' => 'Ѳ',
                'ѵ' => 'Ѵ',
                'ѷ' => 'Ѷ',
                'ѹ' => 'Ѹ',
                'ѻ' => 'Ѻ',
                'ѽ' => 'Ѽ',
                'ѿ' => 'Ѿ',
                'ҁ' => 'Ҁ',
                'ҋ' => 'Ҋ',
                'ҍ' => 'Ҍ',
                'ҏ' => 'Ҏ',
                'ґ' => 'Ґ',
                'ғ' => 'Ғ',
                'ҕ' => 'Ҕ',
                'җ' => 'Җ',
                'ҙ' => 'Ҙ',
                'қ' => 'Қ',
                'ҝ' => 'Ҝ',
                'ҟ' => 'Ҟ',
                'ҡ' => 'Ҡ',
                'ң' => 'Ң',
                'ҥ' => 'Ҥ',
                'ҧ' => 'Ҧ',
                'ҩ' => 'Ҩ',
                'ҫ' => 'Ҫ',
                'ҭ' => 'Ҭ',
                'ү' => 'Ү',
                'ұ' => 'Ұ',
                'ҳ' => 'Ҳ',
                'ҵ' => 'Ҵ',
                'ҷ' => 'Ҷ',
                'ҹ' => 'Ҹ',
                'һ' => 'Һ',
                'ҽ' => 'Ҽ',
                'ҿ' => 'Ҿ',
                'ӂ' => 'Ӂ',
                'ӄ' => 'Ӄ',
                'ӆ' => 'Ӆ',
                'ӈ' => 'Ӈ',
                'ӊ' => 'Ӊ',
                'ӌ' => 'Ӌ',
                'ӎ' => 'Ӎ',
                'ӏ' => 'Ӏ',
                'ӑ' => 'Ӑ',
                'ӓ' => 'Ӓ',
                'ӕ' => 'Ӕ',
                'ӗ' => 'Ӗ',
                'ә' => 'Ә',
                'ӛ' => 'Ӛ',
                'ӝ' => 'Ӝ',
                'ӟ' => 'Ӟ',
                'ӡ' => 'Ӡ',
                'ӣ' => 'Ӣ',
                'ӥ' => 'Ӥ',
                'ӧ' => 'Ӧ',
                'ө' => 'Ө',
                'ӫ' => 'Ӫ',
                'ӭ' => 'Ӭ',
                'ӯ' => 'Ӯ',
                'ӱ' => 'Ӱ',
                'ӳ' => 'Ӳ',
                'ӵ' => 'Ӵ',
                'ӷ' => 'Ӷ',
                'ӹ' => 'Ӹ',
                'ӻ' => 'Ӻ',
                'ӽ' => 'Ӽ',
                'ӿ' => 'Ӿ',
                'ԁ' => 'Ԁ',
                'ԃ' => 'Ԃ',
                'ԅ' => 'Ԅ',
                'ԇ' => 'Ԇ',
                'ԉ' => 'Ԉ',
                'ԋ' => 'Ԋ',
                'ԍ' => 'Ԍ',
                'ԏ' => 'Ԏ',
                'ԑ' => 'Ԑ',
                'ԓ' => 'Ԓ',
                'ԕ' => 'Ԕ',
                'ԗ' => 'Ԗ',
                'ԙ' => 'Ԙ',
                'ԛ' => 'Ԛ',
                'ԝ' => 'Ԝ',
                'ԟ' => 'Ԟ',
                'ԡ' => 'Ԡ',
                'ԣ' => 'Ԣ',
                'ԥ' => 'Ԥ',
                'ԧ' => 'Ԧ',
                'ԩ' => 'Ԩ',
                'ԫ' => 'Ԫ',
                'ԭ' => 'Ԭ',
                'ԯ' => 'Ԯ',
                'ա' => 'Ա',
                'բ' => 'Բ',
                'գ' => 'Գ',
                'դ' => 'Դ',
                'ե' => 'Ե',
                'զ' => 'Զ',
                'է' => 'Է',
                'ը' => 'Ը',
                'թ' => 'Թ',
                'ժ' => 'Ժ',
                'ի' => 'Ի',
                'լ' => 'Լ',
                'խ' => 'Խ',
                'ծ' => 'Ծ',
                'կ' => 'Կ',
                'հ' => 'Հ',
                'ձ' => 'Ձ',
                'ղ' => 'Ղ',
                'ճ' => 'Ճ',
                'մ' => 'Մ',
                'յ' => 'Յ',
                'ն' => 'Ն',
                'շ' => 'Շ',
                'ո' => 'Ո',
                'չ' => 'Չ',
                'պ' => 'Պ',
                'ջ' => 'Ջ',
                'ռ' => 'Ռ',
                'ս' => 'Ս',
                'վ' => 'Վ',
                'տ' => 'Տ',
                'ր' => 'Ր',
                'ց' => 'Ց',
                'ւ' => 'Ւ',
                'փ' => 'Փ',
                'ք' => 'Ք',
                'օ' => 'Օ',
                'ֆ' => 'Ֆ',
                'ᵹ' => 'Ᵹ',
                'ᵽ' => 'Ᵽ',
                'ḁ' => 'Ḁ',
                'ḃ' => 'Ḃ',
                'ḅ' => 'Ḅ',
                'ḇ' => 'Ḇ',
                'ḉ' => 'Ḉ',
                'ḋ' => 'Ḋ',
                'ḍ' => 'Ḍ',
                'ḏ' => 'Ḏ',
                'ḑ' => 'Ḑ',
                'ḓ' => 'Ḓ',
                'ḕ' => 'Ḕ',
                'ḗ' => 'Ḗ',
                'ḙ' => 'Ḙ',
                'ḛ' => 'Ḛ',
                'ḝ' => 'Ḝ',
                'ḟ' => 'Ḟ',
                'ḡ' => 'Ḡ',
                'ḣ' => 'Ḣ',
                'ḥ' => 'Ḥ',
                'ḧ' => 'Ḧ',
                'ḩ' => 'Ḩ',
                'ḫ' => 'Ḫ',
                'ḭ' => 'Ḭ',
                'ḯ' => 'Ḯ',
                'ḱ' => 'Ḱ',
                'ḳ' => 'Ḳ',
                'ḵ' => 'Ḵ',
                'ḷ' => 'Ḷ',
                'ḹ' => 'Ḹ',
                'ḻ' => 'Ḻ',
                'ḽ' => 'Ḽ',
                'ḿ' => 'Ḿ',
                'ṁ' => 'Ṁ',
                'ṃ' => 'Ṃ',
                'ṅ' => 'Ṅ',
                'ṇ' => 'Ṇ',
                'ṉ' => 'Ṉ',
                'ṋ' => 'Ṋ',
                'ṍ' => 'Ṍ',
                'ṏ' => 'Ṏ',
                'ṑ' => 'Ṑ',
                'ṓ' => 'Ṓ',
                'ṕ' => 'Ṕ',
                'ṗ' => 'Ṗ',
                'ṙ' => 'Ṙ',
                'ṛ' => 'Ṛ',
                'ṝ' => 'Ṝ',
                'ṟ' => 'Ṟ',
                'ṡ' => 'Ṡ',
                'ṣ' => 'Ṣ',
                'ṥ' => 'Ṥ',
                'ṧ' => 'Ṧ',
                'ṩ' => 'Ṩ',
                'ṫ' => 'Ṫ',
                'ṭ' => 'Ṭ',
                'ṯ' => 'Ṯ',
                'ṱ' => 'Ṱ',
                'ṳ' => 'Ṳ',
                'ṵ' => 'Ṵ',
                'ṷ' => 'Ṷ',
                'ṹ' => 'Ṹ',
                'ṻ' => 'Ṻ',
                'ṽ' => 'Ṽ',
                'ṿ' => 'Ṿ',
                'ẁ' => 'Ẁ',
                'ẃ' => 'Ẃ',
                'ẅ' => 'Ẅ',
                'ẇ' => 'Ẇ',
                'ẉ' => 'Ẉ',
                'ẋ' => 'Ẋ',
                'ẍ' => 'Ẍ',
                'ẏ' => 'Ẏ',
                'ẑ' => 'Ẑ',
                'ẓ' => 'Ẓ',
                'ẕ' => 'Ẕ',
                'ẛ' => 'Ṡ',
                'ạ' => 'Ạ',
                'ả' => 'Ả',
                'ấ' => 'Ấ',
                'ầ' => 'Ầ',
                'ẩ' => 'Ẩ',
                'ẫ' => 'Ẫ',
                'ậ' => 'Ậ',
                'ắ' => 'Ắ',
                'ằ' => 'Ằ',
                'ẳ' => 'Ẳ',
                'ẵ' => 'Ẵ',
                'ặ' => 'Ặ',
                'ẹ' => 'Ẹ',
                'ẻ' => 'Ẻ',
                'ẽ' => 'Ẽ',
                'ế' => 'Ế',
                'ề' => 'Ề',
                'ể' => 'Ể',
                'ễ' => 'Ễ',
                'ệ' => 'Ệ',
                'ỉ' => 'Ỉ',
                'ị' => 'Ị',
                'ọ' => 'Ọ',
                'ỏ' => 'Ỏ',
                'ố' => 'Ố',
                'ồ' => 'Ồ',
                'ổ' => 'Ổ',
                'ỗ' => 'Ỗ',
                'ộ' => 'Ộ',
                'ớ' => 'Ớ',
                'ờ' => 'Ờ',
                'ở' => 'Ở',
                'ỡ' => 'Ỡ',
                'ợ' => 'Ợ',
                'ụ' => 'Ụ',
                'ủ' => 'Ủ',
                'ứ' => 'Ứ',
                'ừ' => 'Ừ',
                'ử' => 'Ử',
                'ữ' => 'Ữ',
                'ự' => 'Ự',
                'ỳ' => 'Ỳ',
                'ỵ' => 'Ỵ',
                'ỷ' => 'Ỷ',
                'ỹ' => 'Ỹ',
                'ỻ' => 'Ỻ',
                'ỽ' => 'Ỽ',
                'ỿ' => 'Ỿ',
                'ἀ' => 'Ἀ',
                'ἁ' => 'Ἁ',
                'ἂ' => 'Ἂ',
                'ἃ' => 'Ἃ',
                'ἄ' => 'Ἄ',
                'ἅ' => 'Ἅ',
                'ἆ' => 'Ἆ',
                'ἇ' => 'Ἇ',
                'ἐ' => 'Ἐ',
                'ἑ' => 'Ἑ',
                'ἒ' => 'Ἒ',
                'ἓ' => 'Ἓ',
                'ἔ' => 'Ἔ',
                'ἕ' => 'Ἕ',
                'ἠ' => 'Ἠ',
                'ἡ' => 'Ἡ',
                'ἢ' => 'Ἢ',
                'ἣ' => 'Ἣ',
                'ἤ' => 'Ἤ',
                'ἥ' => 'Ἥ',
                'ἦ' => 'Ἦ',
                'ἧ' => 'Ἧ',
                'ἰ' => 'Ἰ',
                'ἱ' => 'Ἱ',
                'ἲ' => 'Ἲ',
                'ἳ' => 'Ἳ',
                'ἴ' => 'Ἴ',
                'ἵ' => 'Ἵ',
                'ἶ' => 'Ἶ',
                'ἷ' => 'Ἷ',
                'ὀ' => 'Ὀ',
                'ὁ' => 'Ὁ',
                'ὂ' => 'Ὂ',
                'ὃ' => 'Ὃ',
                'ὄ' => 'Ὄ',
                'ὅ' => 'Ὅ',
                'ὑ' => 'Ὑ',
                'ὓ' => 'Ὓ',
                'ὕ' => 'Ὕ',
                'ὗ' => 'Ὗ',
                'ὠ' => 'Ὠ',
                'ὡ' => 'Ὡ',
                'ὢ' => 'Ὢ',
                'ὣ' => 'Ὣ',
                'ὤ' => 'Ὤ',
                'ὥ' => 'Ὥ',
                'ὦ' => 'Ὦ',
                'ὧ' => 'Ὧ',
                'ὰ' => 'Ὰ',
                'ά' => 'Ά',
                'ὲ' => 'Ὲ',
                'έ' => 'Έ',
                'ὴ' => 'Ὴ',
                'ή' => 'Ή',
                'ὶ' => 'Ὶ',
                'ί' => 'Ί',
                'ὸ' => 'Ὸ',
                'ό' => 'Ό',
                'ὺ' => 'Ὺ',
                'ύ' => 'Ύ',
                'ὼ' => 'Ὼ',
                'ώ' => 'Ώ',
                'ᾀ' => 'ᾈ',
                'ᾁ' => 'ᾉ',
                'ᾂ' => 'ᾊ',
                'ᾃ' => 'ᾋ',
                'ᾄ' => 'ᾌ',
                'ᾅ' => 'ᾍ',
                'ᾆ' => 'ᾎ',
                'ᾇ' => 'ᾏ',
                'ᾐ' => 'ᾘ',
                'ᾑ' => 'ᾙ',
                'ᾒ' => 'ᾚ',
                'ᾓ' => 'ᾛ',
                'ᾔ' => 'ᾜ',
                'ᾕ' => 'ᾝ',
                'ᾖ' => 'ᾞ',
                'ᾗ' => 'ᾟ',
                'ᾠ' => 'ᾨ',
                'ᾡ' => 'ᾩ',
                'ᾢ' => 'ᾪ',
                'ᾣ' => 'ᾫ',
                'ᾤ' => 'ᾬ',
                'ᾥ' => 'ᾭ',
                'ᾦ' => 'ᾮ',
                'ᾧ' => 'ᾯ',
                'ᾰ' => 'Ᾰ',
                'ᾱ' => 'Ᾱ',
                'ᾳ' => 'ᾼ',
                'ι' => 'Ι',
                'ῃ' => 'ῌ',
                'ῐ' => 'Ῐ',
                'ῑ' => 'Ῑ',
                'ῠ' => 'Ῠ',
                'ῡ' => 'Ῡ',
                'ῥ' => 'Ῥ',
                'ῳ' => 'ῼ',
                'ⅎ' => 'Ⅎ',
                'ⅰ' => 'Ⅰ',
                'ⅱ' => 'Ⅱ',
                'ⅲ' => 'Ⅲ',
                'ⅳ' => 'Ⅳ',
                'ⅴ' => 'Ⅴ',
                'ⅵ' => 'Ⅵ',
                'ⅶ' => 'Ⅶ',
                'ⅷ' => 'Ⅷ',
                'ⅸ' => 'Ⅸ',
                'ⅹ' => 'Ⅹ',
                'ⅺ' => 'Ⅺ',
                'ⅻ' => 'Ⅻ',
                'ⅼ' => 'Ⅼ',
                'ⅽ' => 'Ⅽ',
                'ⅾ' => 'Ⅾ',
                'ⅿ' => 'Ⅿ',
                'ↄ' => 'Ↄ',
                'ⓐ' => 'Ⓐ',
                'ⓑ' => 'Ⓑ',
                'ⓒ' => 'Ⓒ',
                'ⓓ' => 'Ⓓ',
                'ⓔ' => 'Ⓔ',
                'ⓕ' => 'Ⓕ',
                'ⓖ' => 'Ⓖ',
                'ⓗ' => 'Ⓗ',
                'ⓘ' => 'Ⓘ',
                'ⓙ' => 'Ⓙ',
                'ⓚ' => 'Ⓚ',
                'ⓛ' => 'Ⓛ',
                'ⓜ' => 'Ⓜ',
                'ⓝ' => 'Ⓝ',
                'ⓞ' => 'Ⓞ',
                'ⓟ' => 'Ⓟ',
                'ⓠ' => 'Ⓠ',
                'ⓡ' => 'Ⓡ',
                'ⓢ' => 'Ⓢ',
                'ⓣ' => 'Ⓣ',
                'ⓤ' => 'Ⓤ',
                'ⓥ' => 'Ⓥ',
                'ⓦ' => 'Ⓦ',
                'ⓧ' => 'Ⓧ',
                'ⓨ' => 'Ⓨ',
                'ⓩ' => 'Ⓩ',
                'ⰰ' => 'Ⰰ',
                'ⰱ' => 'Ⰱ',
                'ⰲ' => 'Ⰲ',
                'ⰳ' => 'Ⰳ',
                'ⰴ' => 'Ⰴ',
                'ⰵ' => 'Ⰵ',
                'ⰶ' => 'Ⰶ',
                'ⰷ' => 'Ⰷ',
                'ⰸ' => 'Ⰸ',
                'ⰹ' => 'Ⰹ',
                'ⰺ' => 'Ⰺ',
                'ⰻ' => 'Ⰻ',
                'ⰼ' => 'Ⰼ',
                'ⰽ' => 'Ⰽ',
                'ⰾ' => 'Ⰾ',
                'ⰿ' => 'Ⰿ',
                'ⱀ' => 'Ⱀ',
                'ⱁ' => 'Ⱁ',
                'ⱂ' => 'Ⱂ',
                'ⱃ' => 'Ⱃ',
                'ⱄ' => 'Ⱄ',
                'ⱅ' => 'Ⱅ',
                'ⱆ' => 'Ⱆ',
                'ⱇ' => 'Ⱇ',
                'ⱈ' => 'Ⱈ',
                'ⱉ' => 'Ⱉ',
                'ⱊ' => 'Ⱊ',
                'ⱋ' => 'Ⱋ',
                'ⱌ' => 'Ⱌ',
                'ⱍ' => 'Ⱍ',
                'ⱎ' => 'Ⱎ',
                'ⱏ' => 'Ⱏ',
                'ⱐ' => 'Ⱐ',
                'ⱑ' => 'Ⱑ',
                'ⱒ' => 'Ⱒ',
                'ⱓ' => 'Ⱓ',
                'ⱔ' => 'Ⱔ',
                'ⱕ' => 'Ⱕ',
                'ⱖ' => 'Ⱖ',
                'ⱗ' => 'Ⱗ',
                'ⱘ' => 'Ⱘ',
                'ⱙ' => 'Ⱙ',
                'ⱚ' => 'Ⱚ',
                'ⱛ' => 'Ⱛ',
                'ⱜ' => 'Ⱜ',
                'ⱝ' => 'Ⱝ',
                'ⱞ' => 'Ⱞ',
                'ⱡ' => 'Ⱡ',
                'ⱥ' => 'Ⱥ',
                'ⱦ' => 'Ⱦ',
                'ⱨ' => 'Ⱨ',
                'ⱪ' => 'Ⱪ',
                'ⱬ' => 'Ⱬ',
                'ⱳ' => 'Ⱳ',
                'ⱶ' => 'Ⱶ',
                'ⲁ' => 'Ⲁ',
                'ⲃ' => 'Ⲃ',
                'ⲅ' => 'Ⲅ',
                'ⲇ' => 'Ⲇ',
                'ⲉ' => 'Ⲉ',
                'ⲋ' => 'Ⲋ',
                'ⲍ' => 'Ⲍ',
                'ⲏ' => 'Ⲏ',
                'ⲑ' => 'Ⲑ',
                'ⲓ' => 'Ⲓ',
                'ⲕ' => 'Ⲕ',
                'ⲗ' => 'Ⲗ',
                'ⲙ' => 'Ⲙ',
                'ⲛ' => 'Ⲛ',
                'ⲝ' => 'Ⲝ',
                'ⲟ' => 'Ⲟ',
                'ⲡ' => 'Ⲡ',
                'ⲣ' => 'Ⲣ',
                'ⲥ' => 'Ⲥ',
                'ⲧ' => 'Ⲧ',
                'ⲩ' => 'Ⲩ',
                'ⲫ' => 'Ⲫ',
                'ⲭ' => 'Ⲭ',
                'ⲯ' => 'Ⲯ',
                'ⲱ' => 'Ⲱ',
                'ⲳ' => 'Ⲳ',
                'ⲵ' => 'Ⲵ',
                'ⲷ' => 'Ⲷ',
                'ⲹ' => 'Ⲹ',
                'ⲻ' => 'Ⲻ',
                'ⲽ' => 'Ⲽ',
                'ⲿ' => 'Ⲿ',
                'ⳁ' => 'Ⳁ',
                'ⳃ' => 'Ⳃ',
                'ⳅ' => 'Ⳅ',
                'ⳇ' => 'Ⳇ',
                'ⳉ' => 'Ⳉ',
                'ⳋ' => 'Ⳋ',
                'ⳍ' => 'Ⳍ',
                'ⳏ' => 'Ⳏ',
                'ⳑ' => 'Ⳑ',
                'ⳓ' => 'Ⳓ',
                'ⳕ' => 'Ⳕ',
                'ⳗ' => 'Ⳗ',
                'ⳙ' => 'Ⳙ',
                'ⳛ' => 'Ⳛ',
                'ⳝ' => 'Ⳝ',
                'ⳟ' => 'Ⳟ',
                'ⳡ' => 'Ⳡ',
                'ⳣ' => 'Ⳣ',
                'ⳬ' => 'Ⳬ',
                'ⳮ' => 'Ⳮ',
                'ⳳ' => 'Ⳳ',
                'ⴀ' => 'Ⴀ',
                'ⴁ' => 'Ⴁ',
                'ⴂ' => 'Ⴂ',
                'ⴃ' => 'Ⴃ',
                'ⴄ' => 'Ⴄ',
                'ⴅ' => 'Ⴅ',
                'ⴆ' => 'Ⴆ',
                'ⴇ' => 'Ⴇ',
                'ⴈ' => 'Ⴈ',
                'ⴉ' => 'Ⴉ',
                'ⴊ' => 'Ⴊ',
                'ⴋ' => 'Ⴋ',
                'ⴌ' => 'Ⴌ',
                'ⴍ' => 'Ⴍ',
                'ⴎ' => 'Ⴎ',
                'ⴏ' => 'Ⴏ',
                'ⴐ' => 'Ⴐ',
                'ⴑ' => 'Ⴑ',
                'ⴒ' => 'Ⴒ',
                'ⴓ' => 'Ⴓ',
                'ⴔ' => 'Ⴔ',
                'ⴕ' => 'Ⴕ',
                'ⴖ' => 'Ⴖ',
                'ⴗ' => 'Ⴗ',
                'ⴘ' => 'Ⴘ',
                'ⴙ' => 'Ⴙ',
                'ⴚ' => 'Ⴚ',
                'ⴛ' => 'Ⴛ',
                'ⴜ' => 'Ⴜ',
                'ⴝ' => 'Ⴝ',
                'ⴞ' => 'Ⴞ',
                'ⴟ' => 'Ⴟ',
                'ⴠ' => 'Ⴠ',
                'ⴡ' => 'Ⴡ',
                'ⴢ' => 'Ⴢ',
                'ⴣ' => 'Ⴣ',
                'ⴤ' => 'Ⴤ',
                'ⴥ' => 'Ⴥ',
                'ⴧ' => 'Ⴧ',
                'ⴭ' => 'Ⴭ',
                'ꙁ' => 'Ꙁ',
                'ꙃ' => 'Ꙃ',
                'ꙅ' => 'Ꙅ',
                'ꙇ' => 'Ꙇ',
                'ꙉ' => 'Ꙉ',
                'ꙋ' => 'Ꙋ',
                'ꙍ' => 'Ꙍ',
                'ꙏ' => 'Ꙏ',
                'ꙑ' => 'Ꙑ',
                'ꙓ' => 'Ꙓ',
                'ꙕ' => 'Ꙕ',
                'ꙗ' => 'Ꙗ',
                'ꙙ' => 'Ꙙ',
                'ꙛ' => 'Ꙛ',
                'ꙝ' => 'Ꙝ',
                'ꙟ' => 'Ꙟ',
                'ꙡ' => 'Ꙡ',
                'ꙣ' => 'Ꙣ',
                'ꙥ' => 'Ꙥ',
                'ꙧ' => 'Ꙧ',
                'ꙩ' => 'Ꙩ',
                'ꙫ' => 'Ꙫ',
                'ꙭ' => 'Ꙭ',
                'ꚁ' => 'Ꚁ',
                'ꚃ' => 'Ꚃ',
                'ꚅ' => 'Ꚅ',
                'ꚇ' => 'Ꚇ',
                'ꚉ' => 'Ꚉ',
                'ꚋ' => 'Ꚋ',
                'ꚍ' => 'Ꚍ',
                'ꚏ' => 'Ꚏ',
                'ꚑ' => 'Ꚑ',
                'ꚓ' => 'Ꚓ',
                'ꚕ' => 'Ꚕ',
                'ꚗ' => 'Ꚗ',
                'ꚙ' => 'Ꚙ',
                'ꚛ' => 'Ꚛ',
                'ꜣ' => 'Ꜣ',
                'ꜥ' => 'Ꜥ',
                'ꜧ' => 'Ꜧ',
                'ꜩ' => 'Ꜩ',
                'ꜫ' => 'Ꜫ',
                'ꜭ' => 'Ꜭ',
                'ꜯ' => 'Ꜯ',
                'ꜳ' => 'Ꜳ',
                'ꜵ' => 'Ꜵ',
                'ꜷ' => 'Ꜷ',
                'ꜹ' => 'Ꜹ',
                'ꜻ' => 'Ꜻ',
                'ꜽ' => 'Ꜽ',
                'ꜿ' => 'Ꜿ',
                'ꝁ' => 'Ꝁ',
                'ꝃ' => 'Ꝃ',
                'ꝅ' => 'Ꝅ',
                'ꝇ' => 'Ꝇ',
                'ꝉ' => 'Ꝉ',
                'ꝋ' => 'Ꝋ',
                'ꝍ' => 'Ꝍ',
                'ꝏ' => 'Ꝏ',
                'ꝑ' => 'Ꝑ',
                'ꝓ' => 'Ꝓ',
                'ꝕ' => 'Ꝕ',
                'ꝗ' => 'Ꝗ',
                'ꝙ' => 'Ꝙ',
                'ꝛ' => 'Ꝛ',
                'ꝝ' => 'Ꝝ',
                'ꝟ' => 'Ꝟ',
                'ꝡ' => 'Ꝡ',
                'ꝣ' => 'Ꝣ',
                'ꝥ' => 'Ꝥ',
                'ꝧ' => 'Ꝧ',
                'ꝩ' => 'Ꝩ',
                'ꝫ' => 'Ꝫ',
                'ꝭ' => 'Ꝭ',
                'ꝯ' => 'Ꝯ',
                'ꝺ' => 'Ꝺ',
                'ꝼ' => 'Ꝼ',
                'ꝿ' => 'Ꝿ',
                'ꞁ' => 'Ꞁ',
                'ꞃ' => 'Ꞃ',
                'ꞅ' => 'Ꞅ',
                'ꞇ' => 'Ꞇ',
                'ꞌ' => 'Ꞌ',
                'ꞑ' => 'Ꞑ',
                'ꞓ' => 'Ꞓ',
                'ꞗ' => 'Ꞗ',
                'ꞙ' => 'Ꞙ',
                'ꞛ' => 'Ꞛ',
                'ꞝ' => 'Ꞝ',
                'ꞟ' => 'Ꞟ',
                'ꞡ' => 'Ꞡ',
                'ꞣ' => 'Ꞣ',
                'ꞥ' => 'Ꞥ',
                'ꞧ' => 'Ꞧ',
                'ꞩ' => 'Ꞩ',
                'ａ' => 'Ａ',
                'ｂ' => 'Ｂ',
                'ｃ' => 'Ｃ',
                'ｄ' => 'Ｄ',
                'ｅ' => 'Ｅ',
                'ｆ' => 'Ｆ',
                'ｇ' => 'Ｇ',
                'ｈ' => 'Ｈ',
                'ｉ' => 'Ｉ',
                'ｊ' => 'Ｊ',
                'ｋ' => 'Ｋ',
                'ｌ' => 'Ｌ',
                'ｍ' => 'Ｍ',
                'ｎ' => 'Ｎ',
                'ｏ' => 'Ｏ',
                'ｐ' => 'Ｐ',
                'ｑ' => 'Ｑ',
                'ｒ' => 'Ｒ',
                'ｓ' => 'Ｓ',
                'ｔ' => 'Ｔ',
                'ｕ' => 'Ｕ',
                'ｖ' => 'Ｖ',
                'ｗ' => 'Ｗ',
                'ｘ' => 'Ｘ',
                'ｙ' => 'Ｙ',
                'ｚ' => 'Ｚ',
                '𐐨' => '𐐀',
                '𐐩' => '𐐁',
                '𐐪' => '𐐂',
                '𐐫' => '𐐃',
                '𐐬' => '𐐄',
                '𐐭' => '𐐅',
                '𐐮' => '𐐆',
                '𐐯' => '𐐇',
                '𐐰' => '𐐈',
                '𐐱' => '𐐉',
                '𐐲' => '𐐊',
                '𐐳' => '𐐋',
                '𐐴' => '𐐌',
                '𐐵' => '𐐍',
                '𐐶' => '𐐎',
                '𐐷' => '𐐏',
                '𐐸' => '𐐐',
                '𐐹' => '𐐑',
                '𐐺' => '𐐒',
                '𐐻' => '𐐓',
                '𐐼' => '𐐔',
                '𐐽' => '𐐕',
                '𐐾' => '𐐖',
                '𐐿' => '𐐗',
                '𐑀' => '𐐘',
                '𐑁' => '𐐙',
                '𐑂' => '𐐚',
                '𐑃' => '𐐛',
                '𐑄' => '𐐜',
                '𐑅' => '𐐝',
                '𐑆' => '𐐞',
                '𐑇' => '𐐟',
                '𐑈' => '𐐠',
                '𐑉' => '𐐡',
                '𐑊' => '𐐢',
                '𐑋' => '𐐣',
                '𐑌' => '𐐤',
                '𐑍' => '𐐥',
                '𐑎' => '𐐦',
                '𐑏' => '𐐧',
                '𑣀' => '𑢠',
                '𑣁' => '𑢡',
                '𑣂' => '𑢢',
                '𑣃' => '𑢣',
                '𑣄' => '𑢤',
                '𑣅' => '𑢥',
                '𑣆' => '𑢦',
                '𑣇' => '𑢧',
                '𑣈' => '𑢨',
                '𑣉' => '𑢩',
                '𑣊' => '𑢪',
                '𑣋' => '𑢫',
                '𑣌' => '𑢬',
                '𑣍' => '𑢭',
                '𑣎' => '𑢮',
                '𑣏' => '𑢯',
                '𑣐' => '𑢰',
                '𑣑' => '𑢱',
                '𑣒' => '𑢲',
                '𑣓' => '𑢳',
                '𑣔' => '𑢴',
                '𑣕' => '𑢵',
                '𑣖' => '𑢶',
                '𑣗' => '𑢷',
                '𑣘' => '𑢸',
                '𑣙' => '𑢹',
                '𑣚' => '𑢺',
                '𑣛' => '𑢻',
                '𑣜' => '𑢼',
                '𑣝' => '𑢽',
                '𑣞' => '𑢾',
                '𑣟' => '𑢿',
            );
        }

        private static function getDataTitleCaseRegexp()
        {
            return '/(?<![\x{0027}\x{002E}\x{003A}\x{005E}\x{0060}\x{00A8}\x{00AD}\x{00AF}\x{00B4}\x{00B7}\x{00B8}\x{02B0}-\x{02C1}\x{02C2}-\x{02C5}\x{02C6}-\x{02D1}\x{02D2}-\x{02DF}\x{02E0}-\x{02E4}\x{02E5}-\x{02EB}\x{02EC}\x{02ED}\x{02EE}\x{02EF}-\x{02FF}\x{0300}-\x{036F}\x{0374}\x{0375}\x{037A}\x{0384}-\x{0385}\x{0387}\x{0483}-\x{0487}\x{0488}-\x{0489}\x{0559}\x{0591}-\x{05BD}\x{05BF}\x{05C1}-\x{05C2}\x{05C4}-\x{05C5}\x{05C7}\x{05F4}\x{0600}-\x{0605}\x{0610}-\x{061A}\x{061C}\x{0640}\x{064B}-\x{065F}\x{0670}\x{06D6}-\x{06DC}\x{06DD}\x{06DF}-\x{06E4}\x{06E5}-\x{06E6}\x{06E7}-\x{06E8}\x{06EA}-\x{06ED}\x{070F}\x{0711}\x{0730}-\x{074A}\x{07A6}-\x{07B0}\x{07EB}-\x{07F3}\x{07F4}-\x{07F5}\x{07FA}\x{07FD}\x{0816}-\x{0819}\x{081A}\x{081B}-\x{0823}\x{0824}\x{0825}-\x{0827}\x{0828}\x{0829}-\x{082D}\x{0859}-\x{085B}\x{08D3}-\x{08E1}\x{08E2}\x{08E3}-\x{0902}\x{093A}\x{093C}\x{0941}-\x{0948}\x{094D}\x{0951}-\x{0957}\x{0962}-\x{0963}\x{0971}\x{0981}\x{09BC}\x{09C1}-\x{09C4}\x{09CD}\x{09E2}-\x{09E3}\x{09FE}\x{0A01}-\x{0A02}\x{0A3C}\x{0A41}-\x{0A42}\x{0A47}-\x{0A48}\x{0A4B}-\x{0A4D}\x{0A51}\x{0A70}-\x{0A71}\x{0A75}\x{0A81}-\x{0A82}\x{0ABC}\x{0AC1}-\x{0AC5}\x{0AC7}-\x{0AC8}\x{0ACD}\x{0AE2}-\x{0AE3}\x{0AFA}-\x{0AFF}\x{0B01}\x{0B3C}\x{0B3F}\x{0B41}-\x{0B44}\x{0B4D}\x{0B56}\x{0B62}-\x{0B63}\x{0B82}\x{0BC0}\x{0BCD}\x{0C00}\x{0C04}\x{0C3E}-\x{0C40}\x{0C46}-\x{0C48}\x{0C4A}-\x{0C4D}\x{0C55}-\x{0C56}\x{0C62}-\x{0C63}\x{0C81}\x{0CBC}\x{0CBF}\x{0CC6}\x{0CCC}-\x{0CCD}\x{0CE2}-\x{0CE3}\x{0D00}-\x{0D01}\x{0D3B}-\x{0D3C}\x{0D41}-\x{0D44}\x{0D4D}\x{0D62}-\x{0D63}\x{0DCA}\x{0DD2}-\x{0DD4}\x{0DD6}\x{0E31}\x{0E34}-\x{0E3A}\x{0E46}\x{0E47}-\x{0E4E}\x{0EB1}\x{0EB4}-\x{0EB9}\x{0EBB}-\x{0EBC}\x{0EC6}\x{0EC8}-\x{0ECD}\x{0F18}-\x{0F19}\x{0F35}\x{0F37}\x{0F39}\x{0F71}-\x{0F7E}\x{0F80}-\x{0F84}\x{0F86}-\x{0F87}\x{0F8D}-\x{0F97}\x{0F99}-\x{0FBC}\x{0FC6}\x{102D}-\x{1030}\x{1032}-\x{1037}\x{1039}-\x{103A}\x{103D}-\x{103E}\x{1058}-\x{1059}\x{105E}-\x{1060}\x{1071}-\x{1074}\x{1082}\x{1085}-\x{1086}\x{108D}\x{109D}\x{10FC}\x{135D}-\x{135F}\x{1712}-\x{1714}\x{1732}-\x{1734}\x{1752}-\x{1753}\x{1772}-\x{1773}\x{17B4}-\x{17B5}\x{17B7}-\x{17BD}\x{17C6}\x{17C9}-\x{17D3}\x{17D7}\x{17DD}\x{180B}-\x{180D}\x{180E}\x{1843}\x{1885}-\x{1886}\x{18A9}\x{1920}-\x{1922}\x{1927}-\x{1928}\x{1932}\x{1939}-\x{193B}\x{1A17}-\x{1A18}\x{1A1B}\x{1A56}\x{1A58}-\x{1A5E}\x{1A60}\x{1A62}\x{1A65}-\x{1A6C}\x{1A73}-\x{1A7C}\x{1A7F}\x{1AA7}\x{1AB0}-\x{1ABD}\x{1ABE}\x{1B00}-\x{1B03}\x{1B34}\x{1B36}-\x{1B3A}\x{1B3C}\x{1B42}\x{1B6B}-\x{1B73}\x{1B80}-\x{1B81}\x{1BA2}-\x{1BA5}\x{1BA8}-\x{1BA9}\x{1BAB}-\x{1BAD}\x{1BE6}\x{1BE8}-\x{1BE9}\x{1BED}\x{1BEF}-\x{1BF1}\x{1C2C}-\x{1C33}\x{1C36}-\x{1C37}\x{1C78}-\x{1C7D}\x{1CD0}-\x{1CD2}\x{1CD4}-\x{1CE0}\x{1CE2}-\x{1CE8}\x{1CED}\x{1CF4}\x{1CF8}-\x{1CF9}\x{1D2C}-\x{1D6A}\x{1D78}\x{1D9B}-\x{1DBF}\x{1DC0}-\x{1DF9}\x{1DFB}-\x{1DFF}\x{1FBD}\x{1FBF}-\x{1FC1}\x{1FCD}-\x{1FCF}\x{1FDD}-\x{1FDF}\x{1FED}-\x{1FEF}\x{1FFD}-\x{1FFE}\x{200B}-\x{200F}\x{2018}\x{2019}\x{2024}\x{2027}\x{202A}-\x{202E}\x{2060}-\x{2064}\x{2066}-\x{206F}\x{2071}\x{207F}\x{2090}-\x{209C}\x{20D0}-\x{20DC}\x{20DD}-\x{20E0}\x{20E1}\x{20E2}-\x{20E4}\x{20E5}-\x{20F0}\x{2C7C}-\x{2C7D}\x{2CEF}-\x{2CF1}\x{2D6F}\x{2D7F}\x{2DE0}-\x{2DFF}\x{2E2F}\x{3005}\x{302A}-\x{302D}\x{3031}-\x{3035}\x{303B}\x{3099}-\x{309A}\x{309B}-\x{309C}\x{309D}-\x{309E}\x{30FC}-\x{30FE}\x{A015}\x{A4F8}-\x{A4FD}\x{A60C}\x{A66F}\x{A670}-\x{A672}\x{A674}-\x{A67D}\x{A67F}\x{A69C}-\x{A69D}\x{A69E}-\x{A69F}\x{A6F0}-\x{A6F1}\x{A700}-\x{A716}\x{A717}-\x{A71F}\x{A720}-\x{A721}\x{A770}\x{A788}\x{A789}-\x{A78A}\x{A7F8}-\x{A7F9}\x{A802}\x{A806}\x{A80B}\x{A825}-\x{A826}\x{A8C4}-\x{A8C5}\x{A8E0}-\x{A8F1}\x{A8FF}\x{A926}-\x{A92D}\x{A947}-\x{A951}\x{A980}-\x{A982}\x{A9B3}\x{A9B6}-\x{A9B9}\x{A9BC}\x{A9CF}\x{A9E5}\x{A9E6}\x{AA29}-\x{AA2E}\x{AA31}-\x{AA32}\x{AA35}-\x{AA36}\x{AA43}\x{AA4C}\x{AA70}\x{AA7C}\x{AAB0}\x{AAB2}-\x{AAB4}\x{AAB7}-\x{AAB8}\x{AABE}-\x{AABF}\x{AAC1}\x{AADD}\x{AAEC}-\x{AAED}\x{AAF3}-\x{AAF4}\x{AAF6}\x{AB5B}\x{AB5C}-\x{AB5F}\x{ABE5}\x{ABE8}\x{ABED}\x{FB1E}\x{FBB2}-\x{FBC1}\x{FE00}-\x{FE0F}\x{FE13}\x{FE20}-\x{FE2F}\x{FE52}\x{FE55}\x{FEFF}\x{FF07}\x{FF0E}\x{FF1A}\x{FF3E}\x{FF40}\x{FF70}\x{FF9E}-\x{FF9F}\x{FFE3}\x{FFF9}-\x{FFFB}\x{101FD}\x{102E0}\x{10376}-\x{1037A}\x{10A01}-\x{10A03}\x{10A05}-\x{10A06}\x{10A0C}-\x{10A0F}\x{10A38}-\x{10A3A}\x{10A3F}\x{10AE5}-\x{10AE6}\x{10D24}-\x{10D27}\x{10F46}-\x{10F50}\x{11001}\x{11038}-\x{11046}\x{1107F}-\x{11081}\x{110B3}-\x{110B6}\x{110B9}-\x{110BA}\x{110BD}\x{110CD}\x{11100}-\x{11102}\x{11127}-\x{1112B}\x{1112D}-\x{11134}\x{11173}\x{11180}-\x{11181}\x{111B6}-\x{111BE}\x{111C9}-\x{111CC}\x{1122F}-\x{11231}\x{11234}\x{11236}-\x{11237}\x{1123E}\x{112DF}\x{112E3}-\x{112EA}\x{11300}-\x{11301}\x{1133B}-\x{1133C}\x{11340}\x{11366}-\x{1136C}\x{11370}-\x{11374}\x{11438}-\x{1143F}\x{11442}-\x{11444}\x{11446}\x{1145E}\x{114B3}-\x{114B8}\x{114BA}\x{114BF}-\x{114C0}\x{114C2}-\x{114C3}\x{115B2}-\x{115B5}\x{115BC}-\x{115BD}\x{115BF}-\x{115C0}\x{115DC}-\x{115DD}\x{11633}-\x{1163A}\x{1163D}\x{1163F}-\x{11640}\x{116AB}\x{116AD}\x{116B0}-\x{116B5}\x{116B7}\x{1171D}-\x{1171F}\x{11722}-\x{11725}\x{11727}-\x{1172B}\x{1182F}-\x{11837}\x{11839}-\x{1183A}\x{11A01}-\x{11A0A}\x{11A33}-\x{11A38}\x{11A3B}-\x{11A3E}\x{11A47}\x{11A51}-\x{11A56}\x{11A59}-\x{11A5B}\x{11A8A}-\x{11A96}\x{11A98}-\x{11A99}\x{11C30}-\x{11C36}\x{11C38}-\x{11C3D}\x{11C3F}\x{11C92}-\x{11CA7}\x{11CAA}-\x{11CB0}\x{11CB2}-\x{11CB3}\x{11CB5}-\x{11CB6}\x{11D31}-\x{11D36}\x{11D3A}\x{11D3C}-\x{11D3D}\x{11D3F}-\x{11D45}\x{11D47}\x{11D90}-\x{11D91}\x{11D95}\x{11D97}\x{11EF3}-\x{11EF4}\x{16AF0}-\x{16AF4}\x{16B30}-\x{16B36}\x{16B40}-\x{16B43}\x{16F8F}-\x{16F92}\x{16F93}-\x{16F9F}\x{16FE0}-\x{16FE1}\x{1BC9D}-\x{1BC9E}\x{1BCA0}-\x{1BCA3}\x{1D167}-\x{1D169}\x{1D173}-\x{1D17A}\x{1D17B}-\x{1D182}\x{1D185}-\x{1D18B}\x{1D1AA}-\x{1D1AD}\x{1D242}-\x{1D244}\x{1DA00}-\x{1DA36}\x{1DA3B}-\x{1DA6C}\x{1DA75}\x{1DA84}\x{1DA9B}-\x{1DA9F}\x{1DAA1}-\x{1DAAF}\x{1E000}-\x{1E006}\x{1E008}-\x{1E018}\x{1E01B}-\x{1E021}\x{1E023}-\x{1E024}\x{1E026}-\x{1E02A}\x{1E8D0}-\x{1E8D6}\x{1E944}-\x{1E94A}\x{1F3FB}-\x{1F3FF}\x{E0001}\x{E0020}-\x{E007F}\x{E0100}-\x{E01EF}])(\pL)(\pL*+)/u';
        }

        private static function getEncoding($encoding)
        {
            if (null === $encoding) {
                return self::$internalEncoding;
            }

            $encoding = strtoupper($encoding);

            if ('8BIT' === $encoding || 'BINARY' === $encoding) {
                return 'CP850';
            }
            if ('UTF8' === $encoding) {
                return 'UTF-8';
            }

            return $encoding;
        }
    }
}
