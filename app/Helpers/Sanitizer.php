<?php
namespace App\Helpers;

/**
 * HTML Sanitizer
 * 
 * Strips dangerous HTML tags and attributes while preserving safe formatting.
 * Used for WYSIWYG/CKEditor content that needs to allow some HTML output.
 */
class Sanitizer
{
    /**
     * Tags that are safe to render from WYSIWYG editors.
     */
    private static $allowedTags = '<p><br><b><strong><i><em><u><s><strike><sub><sup>'
        . '<h1><h2><h3><h4><h5><h6>'
        . '<ul><ol><li>'
        . '<a><img>'
        . '<table><thead><tbody><tfoot><tr><th><td>'
        . '<blockquote><pre><code><hr>'
        . '<div><span>'
        . '<figure><figcaption><video><source>';

    /**
     * Attributes that are safe to keep.
     */
    private static $allowedAttributes = [
        'href', 'src', 'alt', 'title', 'width', 'height',
        'class', 'id', 'style', 'target', 'rel',
        'colspan', 'rowspan', 'cellpadding', 'cellspacing',
        'border', 'align', 'valign',
        'controls', 'autoplay', 'loop', 'muted', 'type',
    ];

    /**
     * Sanitize HTML content: strip dangerous tags and attributes.
     *
     * @param  string $html Raw HTML from database
     * @return string Sanitized HTML safe for rendering
     */
    public static function clean($html)
    {
        if (empty($html)) {
            return '';
        }

        // 1. Remove <script> tags and their content
        $html = preg_replace('/<script\b[^>]*>(.*?)<\/script>/is', '', $html);

        // 2. Remove <style> tags and their content
        $html = preg_replace('/<style\b[^>]*>(.*?)<\/style>/is', '', $html);

        // 3. Remove <iframe> tags and their content
        $html = preg_replace('/<iframe\b[^>]*>(.*?)<\/iframe>/is', '', $html);

        // 4. Remove <object>, <embed>, <applet> tags
        $html = preg_replace('/<(object|embed|applet)\b[^>]*>(.*?)<\/\1>/is', '', $html);
        $html = preg_replace('/<(object|embed|applet)\b[^>]*\/?>/is', '', $html);

        // 5. Remove <form> tags
        $html = preg_replace('/<\/?form\b[^>]*>/is', '', $html);
        $html = preg_replace('/<(input|textarea|select|button)\b[^>]*\/?>/is', '', $html);

        // 6. Remove event handler attributes (onclick, onerror, onload, etc.)
        $html = preg_replace('/\s+on\w+\s*=\s*["\'][^"\']*["\']/is', '', $html);
        $html = preg_replace('/\s+on\w+\s*=\s*\S+/is', '', $html);

        // 7. Remove javascript: and data: URIs in href/src attributes
        $html = preg_replace('/\b(href|src|action)\s*=\s*["\']?\s*javascript\s*:/is', '$1="', $html);
        $html = preg_replace('/\b(href|src|action)\s*=\s*["\']?\s*data\s*:/is', '$1="', $html);
        $html = preg_replace('/\b(href|src|action)\s*=\s*["\']?\s*vbscript\s*:/is', '$1="', $html);

        // 8. Strip all tags except allowed ones
        $html = strip_tags($html, self::$allowedTags);

        // 9. Ensure <a> tags have rel="noopener noreferrer" for external links
        $html = preg_replace_callback(
            '/<a\b([^>]*)>/is',
            function ($matches) {
                $attrs = $matches[1];
                // Add rel if target="_blank" is present and rel is not
                if (stripos($attrs, 'target=') !== false && stripos($attrs, 'rel=') === false) {
                    $attrs .= ' rel="noopener noreferrer"';
                }
                return '<a ' . $attrs . '>';
            },
            $html
        );

        return $html;
    }

    /**
     * Escape a plain text value for safe HTML output.
     * Use this for titles, names, etc. — NOT for WYSIWYG content.
     *
     * @param  string $text
     * @return string
     */
    public static function escape($text)
    {
        return htmlspecialchars($text, ENT_QUOTES, 'UTF-8');
    }
}
