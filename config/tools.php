<?php
return [
    'image-tools' => [
        'screenshot-to-pdf' => [
            'name' => 'Screenshot to PDF',
            'description' => 'Convert screenshots to PDF documents',
            'steps' => [
                'Upload screenshots',
                'Arrange order',
                'Convert to PDF'
            ],
            'related' => ['image-to-png', 'image-to-jpg']
        ],
        'qr-code-generator' => [
            'name' => 'QR Code Generator',
            'description' => 'Generate QR codes for various purposes',
            'steps' => [
                'Enter content',
                'Customize QR code',
                'Download QR code'
            ],
            'related' => ['barcode-generator', 'image-to-png']
        ],
        'gif-maker' => [
            'name' => 'GIF Maker',
            'description' => 'Create animated GIFs from images',
            'steps' => [
                'Upload images',
                'Set animation speed',
                'Create GIF'
            ],
            'related' => ['image-resizer', 'image-compressor']
        ],
        'webp-to-png' => [
            'name' => 'WebP to PNG',
            'description' => 'Convert WebP images to PNG format',
            'steps' => [
                'Upload WebP image',
                'Convert to PNG',
                'Download PNG'
            ],
            'related' => ['image-to-png', 'all-in-one-conversions']
        ],
        'image-to-jpg' => [
            'name' => 'Image to JPG',
            'description' => 'Convert images to JPG format',
            'steps' => [
                'Upload image',
                'Convert to JPG',
                'Download JPG'
            ],
            'related' => ['image-to-png', 'all-in-one-conversions']
        ],
        'image-to-png' => [
            'name' => 'Image to PNG',
            'description' => 'Convert images to PNG format',
            'steps' => [
                'Upload image',
                'Convert to PNG',
                'Download PNG'
            ],
            'related' => ['image-to-jpg', 'all-in-one-conversions']
        ],
        'all-in-one-conversions' => [
            'name' => 'All in One Conversions',
            'description' => 'Convert images between multiple formats',
            'steps' => [
                'Upload image',
                'Choose format',
                'Convert and download'
            ],
            'related' => ['image-to-png', 'image-to-jpg']
        ],
        'image-to-base64' => [
            'name' => 'Image to Base64',
            'description' => 'Convert images to Base64 encoding',
            'steps' => [
                'Upload image',
                'Convert to Base64',
                'Copy Base64 string'
            ],
            'related' => ['base64-encoder-decoder', 'image-to-png']
        ],
        'image-cropper' => [
            'name' => 'Image Cropper',
            'description' => 'Crop images to desired dimensions',
            'steps' => [
                'Upload image',
                'Select crop area',
                'Download cropped image'
            ],
            'related' => ['image-resizer', 'image-compressor']
        ],
        'image-compressor' => [
            'name' => 'Image Compressor',
            'description' => 'Compress images while maintaining quality',
            'steps' => [
                'Upload image',
                'Choose compression level',
                'Download compressed image'
            ],
            'related' => ['image-resizer', 'image-cropper']
        ],
        'image-resizer' => [
            'name' => 'Image Resizer',
            'description' => 'Resize images to specific dimensions',
            'steps' => [
                'Upload image',
                'Set dimensions',
                'Download resized image'
            ],
            'related' => ['image-cropper', 'image-compressor']
        ]
    ],
    'tools' => [
        'json-formatter' => [
            'name' => 'JSON Formatter',
            'description' => 'Format and validate your JSON data with our easy-to-use JSON formatter tool',
            'steps' => [
                'Paste your JSON data',
                'Click Format to beautify your JSON',
                'Copy the formatted result or download it'
            ],
            'related' => ['html-to-markdown', 'markdown-to-html']
        ],
        'html-to-markdown' => [
            'name' => 'HTML to Markdown Converter',
            'description' => 'Convert HTML code to Markdown format easily',
            'steps' => [
                'Paste your HTML code',
                'Click Convert',
                'Copy the Markdown output'
            ],
            'related' => ['markdown-to-html', 'json-formatter']
        ],
        // Add more tools...
    ],
    'text-tools' => [
        'random-text-generator' => [
            'name' => 'Random Text Generator',
            'description' => 'Generate random text with customizable options',
            'steps' => [
                'Choose text type and length',
                'Configure generation options',
                'Generate and copy random text'
            ],
            'related' => ['word-counter', 'character-counter']
        ],
        'fancy-text-generator' => [
            'name' => 'Fancy Text Generator',
            'description' => 'Convert normal text into stylish and fancy text formats',
            'steps' => [
                'Enter your text',
                'Choose fancy text styles',
                'Copy your fancy text'
            ],
            'related' => ['case-converter', 'character-counter']
        ],
        'url-encoder-decoder' => [
            'name' => 'URL Encoder & Decoder',
            'description' => 'Encode or decode URLs for web use',
            'steps' => [
                'Enter URL or encoded text',
                'Choose encode or decode',
                'Copy the result'
            ],
            'related' => ['base64-encoder-decoder', 'html-to-markdown-converter']
        ],
        'speech-to-text' => [
            'name' => 'Speech to Text',
            'description' => 'Convert spoken words to written text',
            'steps' => [
                'Click to start recording',
                'Speak clearly',
                'View and copy transcribed text'
            ],
            'related' => ['text-to-speech', 'grammar-checker']
        ],
        'text-to-speech' => [
            'name' => 'Text to Speech',
            'description' => 'Convert written text to spoken words',
            'steps' => [
                'Enter or paste your text',
                'Choose voice and language',
                'Listen to the speech'
            ],
            'related' => ['speech-to-text', 'grammar-checker']
        ],
        'grammar-checker' => [
            'name' => 'Grammar Checker',
            'description' => 'Check and correct grammar in your text',
            'steps' => [
                'Enter your text',
                'Run grammar check',
                'Review and apply suggestions'
            ],
            'related' => ['plagiarism-checker', 'word-counter']
        ],
        'plagiarism-checker' => [
            'name' => 'Plagiarism Checker',
            'description' => 'Check text for potential plagiarism',
            'steps' => [
                'Enter your text',
                'Run plagiarism check',
                'View similarity report'
            ],
            'related' => ['grammar-checker', 'word-counter']
        ],
        'case-converter' => [
            'name' => 'Case Converter',
            'description' => 'Convert text between different letter cases',
            'steps' => [
                'Enter your text',
                'Choose case type',
                'Copy converted text'
            ],
            'related' => ['fancy-text-generator', 'word-counter']
        ],
        'character-counter' => [
            'name' => 'Character Counter',
            'description' => 'Count characters, words, and lines in your text',
            'steps' => [
                'Enter or paste your text',
                'View character count',
                'See detailed statistics'
            ],
            'related' => ['word-counter', 'grammar-checker']
        ],
        'word-counter' => [
            'name' => 'Word Counter',
            'description' => 'Count words and analyze text statistics',
            'steps' => [
                'Enter or paste your text',
                'View word count',
                'See detailed statistics'
            ],
            'related' => ['character-counter', 'grammar-checker']
        ]
    ],
    'developer-tools' => [
        'ip-address-lookup' => [
            'name' => 'IP Address Lookup',
            'description' => 'Look up detailed information about any IP address including location, ISP, and more',
            'steps' => [
                'Enter an IP address',
                'Click "Lookup" to get information',
                'View detailed IP information and geolocation data'
            ],
            'related' => ['domain-authority-checker', 'backlink-checker']
        ],
        'base64-encoder-decoder' => [
            'name' => 'Base64 Encoder/Decoder',
            'description' => 'Encode or decode text and files using Base64 encoding',
            'steps' => [
                'Enter text or upload a file',
                'Choose encode or decode',
                'Get your encoded/decoded result'
            ],
            'related' => ['json-formatter', 'html-to-markdown-converter']
        ],
        'color-code-picker' => [
            'name' => 'Color Code Picker',
            'description' => 'Pick colors and get their HEX, RGB, and HSL values',
            'steps' => [
                'Use the color picker or enter a color code',
                'View color values in different formats',
                'Copy the desired color code'
            ],
            'related' => ['css-minifier', 'html-to-markdown-converter']
        ],
        'markdown-to-html-converter' => [
            'name' => 'Markdown to HTML Converter',
            'description' => 'Convert Markdown text to clean HTML code',
            'steps' => [
                'Enter your Markdown text',
                'Click convert',
                'Copy the generated HTML'
            ],
            'related' => ['html-to-markdown-converter', 'json-formatter']
        ],
        'htaccess-redirect-generator' => [
            'name' => 'htaccess Redirect Generator',
            'description' => 'Generate htaccess redirect rules easily',
            'steps' => [
                'Enter your redirect details',
                'Choose redirect type (301, 302, etc.)',
                'Copy the generated htaccess code'
            ],
            'related' => ['robots-txt-generator', 'sitemap-generator']
        ],
        'sql-formatter' => [
            'name' => 'SQL Formatter',
            'description' => 'Format and beautify SQL queries',
            'steps' => [
                'Paste your SQL query',
                'Click format',
                'Copy the formatted SQL'
            ],
            'related' => ['json-formatter', 'css-minifier']
        ],
        'javascript-minifier' => [
            'name' => 'JavaScript Minifier',
            'description' => 'Minify JavaScript code to reduce file size',
            'steps' => [
                'Paste your JavaScript code',
                'Click minify',
                'Copy the minified code'
            ],
            'related' => ['css-minifier', 'html-to-markdown-converter']
        ],
        'css-minifier' => [
            'name' => 'CSS Minifier',
            'description' => 'Minify CSS code to reduce file size',
            'steps' => [
                'Paste your CSS code',
                'Click minify',
                'Copy the minified code'
            ],
            'related' => ['javascript-minifier', 'html-to-markdown-converter']
        ],
        'html-to-markdown-converter' => [
            'name' => 'HTML to Markdown Converter',
            'description' => 'Convert HTML code to Markdown format',
            'steps' => [
                'Paste your HTML code',
                'Click convert',
                'Copy the Markdown output'
            ],
            'related' => ['markdown-to-html-converter', 'json-formatter']
        ],
        'json-formatter' => [
            'name' => 'JSON Formatter',
            'description' => 'Format and validate JSON data',
            'steps' => [
                'Paste your JSON data',
                'Click format',
                'Copy the formatted JSON'
            ],
            'related' => ['sql-formatter', 'html-to-markdown-converter']
        ]
    ],
    'seo-tools' => [
        'mobile-friendly-test' => [
            'name' => 'Mobile-Friendly Test',
            'description' => 'Check if your website is mobile-friendly',
            'steps' => [
                'Enter your website URL',
                'Run the mobile-friendly test',
                'View detailed results and recommendations'
            ],
            'related' => ['page-speed-checker', 'meta-tag-generator']
        ],
        'xml-sitemap-validator' => [
            'name' => 'XML Sitemap Validator',
            'description' => 'Validate your XML sitemap for errors',
            'steps' => [
                'Enter your sitemap URL or upload file',
                'Run validation',
                'View validation results and errors'
            ],
            'related' => ['sitemap-generator', 'robots-txt-generator']
        ],
        'page-speed-checker' => [
            'name' => 'Page Speed Checker',
            'description' => 'Check your website\'s loading speed and performance',
            'steps' => [
                'Enter your website URL',
                'Run speed test',
                'View detailed performance metrics'
            ],
            'related' => ['mobile-friendly-test', 'google-index-checker']
        ],
        'backlink-checker' => [
            'name' => 'Backlink Checker',
            'description' => 'Check backlinks pointing to your website',
            'steps' => [
                'Enter your domain name',
                'Run backlink analysis',
                'View detailed backlink report'
            ],
            'related' => ['domain-authority-checker', 'google-index-checker']
        ],
        'domain-authority-checker' => [
            'name' => 'Domain Authority Checker',
            'description' => 'Check domain authority and page authority scores',
            'steps' => [
                'Enter your domain name',
                'Run authority check',
                'View authority metrics'
            ],
            'related' => ['backlink-checker', 'page-speed-checker']
        ],
        'google-index-checker' => [
            'name' => 'Google Index Checker',
            'description' => 'Check if your pages are indexed by Google',
            'steps' => [
                'Enter your URL',
                'Check index status',
                'View indexing results'
            ],
            'related' => ['sitemap-generator', 'robots-txt-generator']
        ],
        'robots-txt-generator' => [
            'name' => 'Robots.txt Generator',
            'description' => 'Generate a robots.txt file for your website',
            'steps' => [
                'Configure crawling rules',
                'Add custom directives',
                'Generate and download robots.txt'
            ],
            'related' => ['sitemap-generator', 'xml-sitemap-validator']
        ],
        'sitemap-generator' => [
            'name' => 'Sitemap Generator',
            'description' => 'Generate XML sitemaps for your website',
            'steps' => [
                'Enter your website URL',
                'Configure sitemap options',
                'Generate and download sitemap'
            ],
            'related' => ['robots-txt-generator', 'xml-sitemap-validator']
        ],
        'keyword-density-checker' => [
            'name' => 'Keyword Density Checker',
            'description' => 'Analyze keyword usage and density in your content',
            'steps' => [
                'Paste your content',
                'Run keyword analysis',
                'View keyword density report'
            ],
            'related' => ['meta-tag-generator', 'page-speed-checker']
        ],
        'meta-tag-generator' => [
            'name' => 'Meta Tag Generator',
            'description' => 'Generate SEO-friendly meta tags for your website',
            'steps' => [
                'Enter page details',
                'Configure meta options',
                'Generate meta tags'
            ],
            'related' => ['keyword-density-checker', 'robots-txt-generator']
        ]
    ],
    'pdf-tools' => [
        'compare-pdf' => [
            'name' => 'Compare PDF',
            'description' => 'Compare two PDF files and highlight differences',
            'steps' => [
                'Upload two PDF files',
                'Run comparison',
                'View and download comparison report'
            ],
            'related' => ['merge-pdf', 'split-pdf']
        ],
        'redact-pdf' => [
            'name' => 'Redact PDF',
            'description' => 'Permanently remove sensitive information from PDF files',
            'steps' => [
                'Upload PDF file',
                'Select areas to redact',
                'Download redacted PDF'
            ],
            'related' => ['protect-pdf', 'edit-pdf']
        ],
        'sign-pdf' => [
            'name' => 'Sign PDF',
            'description' => 'Add digital signatures to PDF documents',
            'steps' => [
                'Upload PDF file',
                'Add signature',
                'Download signed PDF'
            ],
            'related' => ['protect-pdf', 'edit-pdf']
        ],
        'add-watermark-to-pdf' => [
            'name' => 'Add Watermark to PDF',
            'description' => 'Add text or image watermarks to PDF files',
            'steps' => [
                'Upload PDF file',
                'Configure watermark',
                'Download watermarked PDF'
            ],
            'related' => ['protect-pdf', 'edit-pdf']
        ],
        'add-page-numbers-to-pdf' => [
            'name' => 'Add Page Numbers to PDF',
            'description' => 'Add customizable page numbers to PDF documents',
            'steps' => [
                'Upload PDF file',
                'Configure page numbering',
                'Download numbered PDF'
            ],
            'related' => ['edit-pdf', 'organize-pdf']
        ],
        'edit-pdf' => [
            'name' => 'Edit PDF',
            'description' => 'Edit text and images in PDF documents',
            'steps' => [
                'Upload PDF file',
                'Make edits',
                'Download edited PDF'
            ],
            'related' => ['redact-pdf', 'add-watermark-to-pdf']
        ],
        'protect-pdf' => [
            'name' => 'Protect PDF',
            'description' => 'Add password protection to PDF files',
            'steps' => [
                'Upload PDF file',
                'Set password and permissions',
                'Download protected PDF'
            ],
            'related' => ['unlock-pdf', 'sign-pdf']
        ],
        'unlock-pdf' => [
            'name' => 'Unlock PDF',
            'description' => 'Remove password protection from PDF files',
            'steps' => [
                'Upload protected PDF',
                'Enter password',
                'Download unlocked PDF'
            ],
            'related' => ['protect-pdf', 'repair-pdf']
        ],
        'rotate-pdf' => [
            'name' => 'Rotate PDF',
            'description' => 'Rotate pages in PDF documents',
            'steps' => [
                'Upload PDF file',
                'Select rotation angle',
                'Download rotated PDF'
            ],
            'related' => ['organize-pdf', 'edit-pdf']
        ],
        'ocr-pdf' => [
            'name' => 'OCR PDF',
            'description' => 'Convert scanned PDFs to searchable text',
            'steps' => [
                'Upload scanned PDF',
                'Select language',
                'Download searchable PDF'
            ],
            'related' => ['edit-pdf', 'repair-pdf']
        ],
        'repair-pdf' => [
            'name' => 'Repair PDF',
            'description' => 'Fix corrupted or damaged PDF files',
            'steps' => [
                'Upload damaged PDF',
                'Run repair process',
                'Download repaired PDF'
            ],
            'related' => ['compress-pdf', 'unlock-pdf']
        ],
        'compress-pdf' => [
            'name' => 'Compress PDF',
            'description' => 'Reduce PDF file size while maintaining quality',
            'steps' => [
                'Upload PDF file',
                'Choose compression level',
                'Download compressed PDF'
            ],
            'related' => ['repair-pdf', 'organize-pdf']
        ],
        'organize-pdf' => [
            'name' => 'Organize PDF',
            'description' => 'Reorder, delete, and organize PDF pages',
            'steps' => [
                'Upload PDF file',
                'Arrange pages',
                'Download organized PDF'
            ],
            'related' => ['split-pdf', 'merge-pdf']
        ],
        'extract-pages-from-pdf' => [
            'name' => 'Extract Pages from PDF',
            'description' => 'Extract specific pages from PDF documents',
            'steps' => [
                'Upload PDF file',
                'Select pages to extract',
                'Download extracted pages'
            ],
            'related' => ['split-pdf', 'remove-pages-from-pdf']
        ],
        'remove-pages-from-pdf' => [
            'name' => 'Remove Pages from PDF',
            'description' => 'Delete specific pages from PDF documents',
            'steps' => [
                'Upload PDF file',
                'Select pages to remove',
                'Download modified PDF'
            ],
            'related' => ['extract-pages-from-pdf', 'organize-pdf']
        ],
        'split-pdf' => [
            'name' => 'Split PDF',
            'description' => 'Split PDF into multiple documents',
            'steps' => [
                'Upload PDF file',
                'Choose split method',
                'Download split PDFs'
            ],
            'related' => ['merge-pdf', 'extract-pages-from-pdf']
        ],
        'merge-pdf' => [
            'name' => 'Merge PDF',
            'description' => 'Combine multiple PDF files into one',
            'steps' => [
                'Upload PDF files',
                'Arrange order',
                'Download merged PDF'
            ],
            'related' => ['split-pdf', 'organize-pdf']
        ]
    ],
    'unit-converter-tools' => [
        'time-converter' => [
            'name' => 'Time Converter',
            'description' => 'Convert between different time units',
            'steps' => [
                'Enter value',
                'Select source and target units',
                'View converted result'
            ],
            'related' => ['speed-converter', 'length-converter']
        ],
        'power-converter' => [
            'name' => 'Power Converter',
            'description' => 'Convert between different power units',
            'steps' => [
                'Enter value',
                'Select source and target units',
                'View converted result'
            ],
            'related' => ['energy-converter', 'pressure-converter']
        ],
        'pressure-converter' => [
            'name' => 'Pressure Converter',
            'description' => 'Convert between different pressure units',
            'steps' => [
                'Enter value',
                'Select source and target units',
                'View converted result'
            ],
            'related' => ['power-converter', 'energy-converter']
        ],
        'area-converter' => [
            'name' => 'Area Converter',
            'description' => 'Convert between different area units',
            'steps' => [
                'Enter value',
                'Select source and target units',
                'View converted result'
            ],
            'related' => ['volume-converter', 'length-converter']
        ],
        'energy-converter' => [
            'name' => 'Energy Converter',
            'description' => 'Convert between different energy units',
            'steps' => [
                'Enter value',
                'Select source and target units',
                'View converted result'
            ],
            'related' => ['power-converter', 'pressure-converter']
        ],
        'data-storage-converter' => [
            'name' => 'Data Storage Converter',
            'description' => 'Convert between different data storage units',
            'steps' => [
                'Enter value',
                'Select source and target units',
                'View converted result'
            ],
            'related' => ['speed-converter', 'time-converter']
        ],
        'volume-converter' => [
            'name' => 'Volume Converter',
            'description' => 'Convert between different volume units',
            'steps' => [
                'Enter value',
                'Select source and target units',
                'View converted result'
            ],
            'related' => ['area-converter', 'weight-converter']
        ],
        'temperature-converter' => [
            'name' => 'Temperature Converter',
            'description' => 'Convert between different temperature scales',
            'steps' => [
                'Enter value',
                'Select source and target units',
                'View converted result'
            ],
            'related' => ['energy-converter', 'pressure-converter']
        ],
        'speed-converter' => [
            'name' => 'Speed Converter',
            'description' => 'Convert between different speed units',
            'steps' => [
                'Enter value',
                'Select source and target units',
                'View converted result'
            ],
            'related' => ['time-converter', 'length-converter']
        ],
        'weight-converter' => [
            'name' => 'Weight Converter',
            'description' => 'Convert between different weight units',
            'steps' => [
                'Enter value',
                'Select source and target units',
                'View converted result'
            ],
            'related' => ['volume-converter', 'length-converter']
        ],
        'length-converter' => [
            'name' => 'Length Converter',
            'description' => 'Convert between different length units',
            'steps' => [
                'Enter value',
                'Select source and target units',
                'View converted result'
            ],
            'related' => ['area-converter', 'speed-converter']
        ]
    ],
    'social-media-tools' => [
        'twitter-character-counter' => [
            'name' => 'Twitter Character Counter',
            'description' => 'Count characters for Twitter posts with real-time feedback',
            'steps' => [
                'Type or paste your tweet',
                'View character count',
                'See remaining characters'
            ],
            'related' => ['social-media-post-generator', 'hashtag-generator']
        ],
        'emoji-keyboard' => [
            'name' => 'Emoji Keyboard',
            'description' => 'Find and copy emojis for social media posts',
            'steps' => [
                'Browse emoji categories',
                'Click to copy emoji',
                'Use in your posts'
            ],
            'related' => ['social-media-post-generator', 'hashtag-generator']
        ],
        'social-media-post-generator' => [
            'name' => 'Social Media Post Generator',
            'description' => 'Generate engaging posts for various social platforms',
            'steps' => [
                'Choose platform',
                'Enter topic/keywords',
                'Generate and customize post'
            ],
            'related' => ['hashtag-generator', 'emoji-keyboard']
        ],
        'hashtag-generator' => [
            'name' => 'Hashtag Generator',
            'description' => 'Generate relevant hashtags for social media posts',
            'steps' => [
                'Enter keywords',
                'Generate hashtags',
                'Copy and use hashtags'
            ],
            'related' => ['social-media-post-generator', 'twitter-character-counter']
        ],
        'youtube-tags-extractor' => [
            'name' => 'YouTube Tags Extractor',
            'description' => 'Extract tags from YouTube videos',
            'steps' => [
                'Enter video URL',
                'Extract tags',
                'Copy extracted tags'
            ],
            'related' => ['youtube-thumbnail-downloader', 'hashtag-generator']
        ],
        'tiktok-video-downloader' => [
            'name' => 'TikTok Video Downloader',
            'description' => 'Download TikTok videos without watermark',
            'steps' => [
                'Enter TikTok video URL',
                'Choose quality',
                'Download video'
            ],
            'related' => ['all-video-downloader', 'instagram-photo-downloader']
        ],
        'facebook-video-downloader' => [
            'name' => 'Facebook Video Downloader',
            'description' => 'Download videos from Facebook',
            'steps' => [
                'Enter Facebook video URL',
                'Choose quality',
                'Download video'
            ],
            'related' => ['all-video-downloader', 'twitter-video-downloader']
        ],
        'twitter-video-downloader' => [
            'name' => 'Twitter Video Downloader',
            'description' => 'Download videos from Twitter',
            'steps' => [
                'Enter tweet URL',
                'Choose quality',
                'Download video'
            ],
            'related' => ['all-video-downloader', 'facebook-video-downloader']
        ],
        'instagram-photo-downloader' => [
            'name' => 'Instagram Photo Downloader',
            'description' => 'Download photos from Instagram',
            'steps' => [
                'Enter Instagram post URL',
                'Choose photos',
                'Download photos'
            ],
            'related' => ['all-video-downloader', 'youtube-thumbnail-downloader']
        ],
        'youtube-thumbnail-downloader' => [
            'name' => 'YouTube Thumbnail Downloader',
            'description' => 'Download thumbnails from YouTube videos',
            'steps' => [
                'Enter video URL',
                'Choose thumbnail quality',
                'Download thumbnail'
            ],
            'related' => ['youtube-tags-extractor', 'instagram-photo-downloader']
        ],
        'all-video-downloader' => [
            'name' => 'All Video Downloader',
            'description' => 'Download videos from multiple social platforms',
            'steps' => [
                'Enter video URL',
                'Choose quality',
                'Download video'
            ],
            'related' => ['facebook-video-downloader', 'twitter-video-downloader']
        ]
    ],
    'security-encryption-tools' => [
        'privacy-policy-generator' => [
            'name' => 'Privacy Policy Generator',
            'description' => 'Generate a customized privacy policy for your website',
            'steps' => [
                'Enter website details',
                'Configure policy options',
                'Generate and download policy'
            ],
            'related' => ['http-headers-checker', 'ssl-certificate-checker']
        ],
        'http-headers-checker' => [
            'name' => 'HTTP Headers Checker',
            'description' => 'Check security headers of any website',
            'steps' => [
                'Enter website URL',
                'Analyze headers',
                'View security report'
            ],
            'related' => ['ssl-certificate-checker', 'whois-lookup']
        ],
        'whois-lookup' => [
            'name' => 'WHOIS Lookup',
            'description' => 'Look up domain registration information',
            'steps' => [
                'Enter domain name',
                'Run WHOIS query',
                'View domain info'
            ],
            'related' => ['ip-geolocation-finder', 'ssl-certificate-checker']
        ],
        'ssl-certificate-checker' => [
            'name' => 'SSL Certificate Checker',
            'description' => 'Check SSL certificate status and details',
            'steps' => [
                'Enter domain name',
                'Check SSL certificate',
                'View certificate details'
            ],
            'related' => ['http-headers-checker', 'whois-lookup']
        ],
        'ip-geolocation-finder' => [
            'name' => 'IP Geolocation Finder',
            'description' => 'Find geographical location of any IP address',
            'steps' => [
                'Enter IP address',
                'Run geolocation lookup',
                'View location details'
            ],
            'related' => ['whois-lookup', 'http-headers-checker']
        ],
        'url-shortener' => [
            'name' => 'URL Shortener',
            'description' => 'Create short URLs for long web addresses',
            'steps' => [
                'Enter long URL',
                'Generate short URL',
                'Copy shortened link'
            ],
            'related' => ['random-string-generator', 'password-generator']
        ],
        'random-string-generator' => [
            'name' => 'Random String Generator',
            'description' => 'Generate random strings with custom options',
            'steps' => [
                'Choose string options',
                'Set length',
                'Generate string'
            ],
            'related' => ['password-generator', 'sha256-hash-generator']
        ],
        'password-generator' => [
            'name' => 'Password Generator',
            'description' => 'Generate secure passwords with custom requirements',
            'steps' => [
                'Set password options',
                'Choose length',
                'Generate password'
            ],
            'related' => ['random-string-generator', 'md5-hash-generator']
        ],
        'sha256-hash-generator' => [
            'name' => 'SHA256 Hash Generator',
            'description' => 'Generate SHA256 hash of any text',
            'steps' => [
                'Enter text',
                'Generate hash',
                'Copy hash value'
            ],
            'related' => ['md5-hash-generator', 'random-string-generator']
        ],
        'md5-hash-generator' => [
            'name' => 'MD5 Hash Generator',
            'description' => 'Generate MD5 hash of any text',
            'steps' => [
                'Enter text',
                'Generate hash',
                'Copy hash value'
            ],
            'related' => ['sha256-hash-generator', 'random-string-generator']
        ]
    ],
    'math-calculator-tools' => [
        'calculadora-interes-compuesto' => [
            'name' => 'Compound Interest Calculator (Spanish)',
            'description' => 'Calculate compound interest in Spanish',
            'steps' => [
                'Enter principal amount',
                'Set interest rate and time',
                'View compound interest results'
            ],
            'related' => ['loan-emi-calculator', 'percentage-calculator']
        ],
        'asphalt-calculator' => [
            'name' => 'Asphalt Calculator',
            'description' => 'Calculate asphalt needed for paving projects',
            'steps' => [
                'Enter area dimensions',
                'Specify thickness',
                'Get required asphalt amount'
            ],
            'related' => ['area-converter', 'volume-converter']
        ],
        'gratuity-calculator-uae' => [
            'name' => 'UAE Gratuity Calculator',
            'description' => 'Calculate end of service gratuity in UAE',
            'steps' => [
                'Enter employment details',
                'Input salary information',
                'Calculate gratuity amount'
            ],
            'related' => ['end-of-service-calculator-uae', 'gratuity-calculator-dubai']
        ],
        'gratuity-calculator-dubai' => [
            'name' => 'Dubai Gratuity Calculator',
            'description' => 'Calculate end of service gratuity in Dubai',
            'steps' => [
                'Enter employment period',
                'Input basic salary',
                'Calculate gratuity'
            ],
            'related' => ['gratuity-calculator-uae', 'end-of-service-calculator-uae']
        ],
        'end-of-service-calculator-uae' => [
            'name' => 'UAE End of Service Calculator',
            'description' => 'Calculate end of service benefits in UAE',
            'steps' => [
                'Enter service duration',
                'Input salary details',
                'Calculate benefits'
            ],
            'related' => ['gratuity-calculator-uae', 'gratuity-calculator-dubai']
        ],
        'zerodha-margin-calculator' => [
            'name' => 'Zerodha Margin Calculator',
            'description' => 'Calculate trading margins for Zerodha',
            'steps' => [
                'Select trading segment',
                'Enter trade details',
                'Calculate required margin'
            ],
            'related' => ['currency-converter', 'percentage-calculator']
        ],
        'land-loan-calculator' => [
            'name' => 'Land Loan Calculator',
            'description' => 'Calculate land loan EMI and interest',
            'steps' => [
                'Enter loan amount',
                'Set interest rate and tenure',
                'Calculate EMI'
            ],
            'related' => ['loan-emi-calculator', 'heloc-payment-calculator']
        ],
        'ftv-calculator' => [
            'name' => 'FTV Calculator',
            'description' => 'Calculate Funding to Value ratio',
            'steps' => [
                'Enter property value',
                'Input loan amount',
                'Calculate FTV ratio'
            ],
            'related' => ['loan-emi-calculator', 'percentage-calculator']
        ],
        'novated-lease-calculator' => [
            'name' => 'Novated Lease Calculator',
            'description' => 'Calculate novated lease payments and benefits',
            'steps' => [
                'Enter vehicle details',
                'Input lease terms',
                'Calculate payments'
            ],
            'related' => ['loan-emi-calculator', 'fuel-consumption-calculator']
        ],
        'inside-ir35-calculator' => [
            'name' => 'Inside IR35 Calculator',
            'description' => 'Calculate take-home pay under IR35',
            'steps' => [
                'Enter contract rate',
                'Input expenses',
                'Calculate net income'
            ],
            'related' => ['percentage-calculator', 'discount-calculator']
        ],
        'fuel-consumption-calculator' => [
            'name' => 'Fuel Consumption Calculator',
            'description' => 'Calculate vehicle fuel consumption',
            'steps' => [
                'Enter distance traveled',
                'Input fuel used',
                'Calculate consumption rate'
            ],
            'related' => ['unit-converter', 'scientific-calculator']
        ],
        'actf-calculator' => [
            'name' => 'ACTF Calculator',
            'description' => 'Calculate Adjusted Closing Task Force',
            'steps' => [
                'Enter measurements',
                'Input conditions',
                'Calculate ACTF'
            ],
            'related' => ['scientific-calculator', 'unit-converter']
        ],
        'laplace-transform-calculator' => [
            'name' => 'Laplace Transform Calculator',
            'description' => 'Calculate Laplace transforms of functions',
            'steps' => [
                'Enter function',
                'Choose transform type',
                'View result'
            ],
            'related' => ['scientific-calculator', 'binary-to-decimal']
        ],
        'tip-calculator' => [
            'name' => 'Tip Calculator',
            'description' => 'Calculate tip amount and split bill',
            'steps' => [
                'Enter bill amount',
                'Choose tip percentage',
                'Split between people'
            ],
            'related' => ['percentage-calculator', 'discount-calculator']
        ],
        'heloc-payment-calculator' => [
            'name' => 'HELOC Payment Calculator',
            'description' => 'Calculate Home Equity Line of Credit payments',
            'steps' => [
                'Enter credit line amount',
                'Set interest rate',
                'Calculate payments'
            ],
            'related' => ['loan-emi-calculator', 'land-loan-calculator']
        ],
        'binary-to-decimal' => [
            'name' => 'Binary to Decimal Converter',
            'description' => 'Convert binary numbers to decimal',
            'steps' => [
                'Enter binary number',
                'Convert',
                'View decimal result'
            ],
            'related' => ['scientific-calculator', 'unit-converter']
        ],
        'time-zone-converter' => [
            'name' => 'Time Zone Converter',
            'description' => 'Convert time between different time zones',
            'steps' => [
                'Enter time',
                'Select time zones',
                'View converted time'
            ],
            'related' => ['time-converter', 'age-calculator']
        ],
        'currency-converter' => [
            'name' => 'Currency Converter',
            'description' => 'Convert between different currencies',
            'steps' => [
                'Enter amount',
                'Choose currencies',
                'View conversion'
            ],
            'related' => ['percentage-calculator', 'discount-calculator']
        ],
        'discount-calculator' => [
            'name' => 'Discount Calculator',
            'description' => 'Calculate discounted prices and savings',
            'steps' => [
                'Enter original price',
                'Input discount percentage',
                'View final price'
            ],
            'related' => ['percentage-calculator', 'currency-converter']
        ],
        'scientific-calculator' => [
            'name' => 'Scientific Calculator',
            'description' => 'Perform advanced mathematical calculations',
            'steps' => [
                'Enter expression',
                'Choose operation',
                'View result'
            ],
            'related' => ['binary-to-decimal', 'percentage-calculator']
        ],
        'loan-emi-calculator' => [
            'name' => 'Loan EMI Calculator',
            'description' => 'Calculate loan EMI and total interest',
            'steps' => [
                'Enter loan amount',
                'Set interest rate and tenure',
                'Calculate EMI'
            ],
            'related' => ['heloc-payment-calculator', 'land-loan-calculator']
        ],
        'bmi-calculator' => [
            'name' => 'BMI Calculator',
            'description' => 'Calculate Body Mass Index',
            'steps' => [
                'Enter height',
                'Enter weight',
                'Calculate BMI'
            ],
            'related' => ['age-calculator', 'unit-converter']
        ],
        'age-calculator' => [
            'name' => 'Age Calculator',
            'description' => 'Calculate age between two dates',
            'steps' => [
                'Enter birth date',
                'Enter calculation date',
                'View age result'
            ],
            'related' => ['time-zone-converter', 'bmi-calculator']
        ],
        'percentage-calculator' => [
            'name' => 'Percentage Calculator',
            'description' => 'Calculate percentages and ratios',
            'steps' => [
                'Enter numbers',
                'Choose calculation type',
                'View percentage result'
            ],
            'related' => ['discount-calculator', 'scientific-calculator']
        ]
    ],
    'miscellaneous-tools' => [
        'leap-year-checker' => [
            'name' => 'Leap Year Checker',
            'description' => 'Check if a year is a leap year',
            'steps' => [
                'Enter year',
                'Check leap year status',
                'View result'
            ],
            'related' => ['age-calculator', 'time-zone-converter']
        ],
        'fake-address-generator' => [
            'name' => 'Fake Address Generator',
            'description' => 'Generate random addresses for testing',
            'steps' => [
                'Choose country',
                'Set options',
                'Generate address'
            ],
            'related' => ['random-string-generator', 'business-name-generator']
        ],
        'ip-address-tracker' => [
            'name' => 'IP Address Tracker',
            'description' => 'Track and locate IP addresses',
            'steps' => [
                'Enter IP address',
                'Track location',
                'View details'
            ],
            'related' => ['ip-geolocation-finder', 'whois-lookup']
        ],
        'ai-chatbot-demo' => [
            'name' => 'AI Chatbot Demo',
            'description' => 'Try out an AI-powered chatbot',
            'steps' => [
                'Start conversation',
                'Type message',
                'Get AI response'
            ],
            'related' => ['story-plot-generator', 'business-name-generator']
        ],
        'e-book-creator' => [
            'name' => 'E-Book Creator',
            'description' => 'Create and format e-books',
            'steps' => [
                'Enter content',
                'Choose format',
                'Generate e-book'
            ],
            'related' => ['story-plot-generator', 'resume-builder']
        ],
        'story-plot-generator' => [
            'name' => 'Story Plot Generator',
            'description' => 'Generate creative story plots',
            'steps' => [
                'Choose genre',
                'Set parameters',
                'Generate plot'
            ],
            'related' => ['e-book-creator', 'business-name-generator']
        ],
        'password-generator' => [
            'name' => 'Password Generator',
            'description' => 'Generate secure passwords',
            'steps' => [
                'Set requirements',
                'Generate password',
                'Copy password'
            ],
            'related' => ['random-string-generator', 'random-number-generator']
        ],
        'wedding-invitation-generator' => [
            'name' => 'Wedding Invitation Generator',
            'description' => 'Create beautiful wedding invitations',
            'steps' => [
                'Enter details',
                'Choose template',
                'Generate invitation'
            ],
            'related' => ['invoice-generator', 'resume-builder']
        ],
        'daily-planner-creator' => [
            'name' => 'Daily Planner Creator',
            'description' => 'Create customized daily planners',
            'steps' => [
                'Choose layout',
                'Add sections',
                'Generate planner'
            ],
            'related' => ['resume-builder', 'invoice-generator']
        ],
        'internet-speed-test' => [
            'name' => 'Internet Speed Test',
            'description' => 'Test your internet connection speed',
            'steps' => [
                'Start test',
                'Wait for results',
                'View speed report'
            ],
            'related' => ['ip-address-tracker', 'http-headers-checker']
        ],
        'dice-roller-simulator' => [
            'name' => 'Dice Roller Simulator',
            'description' => 'Simulate rolling dice',
            'steps' => [
                'Choose dice type',
                'Set number of dice',
                'Roll dice'
            ],
            'related' => ['random-number-generator', 'flip-a-coin-simulator']
        ],
        'random-number-generator' => [
            'name' => 'Random Number Generator',
            'description' => 'Generate random numbers',
            'steps' => [
                'Set range',
                'Choose options',
                'Generate numbers'
            ],
            'related' => ['lottery-number-generator', 'dice-roller-simulator']
        ],
        'flip-a-coin-simulator' => [
            'name' => 'Flip a Coin Simulator',
            'description' => 'Simulate coin flips',
            'steps' => [
                'Click to flip',
                'View result',
                'Track statistics'
            ],
            'related' => ['dice-roller-simulator', 'random-number-generator']
        ],
        'lottery-number-generator' => [
            'name' => 'Lottery Number Generator',
            'description' => 'Generate random lottery numbers',
            'steps' => [
                'Choose lottery type',
                'Set parameters',
                'Generate numbers'
            ],
            'related' => ['random-number-generator', 'dice-roller-simulator']
        ],
        'business-name-generator' => [
            'name' => 'Business Name Generator',
            'description' => 'Generate creative business names',
            'steps' => [
                'Enter keywords',
                'Choose industry',
                'Generate names'
            ],
            'related' => ['story-plot-generator', 'fake-address-generator']
        ],
        'invoice-generator' => [
            'name' => 'Invoice Generator',
            'description' => 'Create professional invoices',
            'steps' => [
                'Enter details',
                'Add items',
                'Generate invoice'
            ],
            'related' => ['resume-builder', 'daily-planner-creator']
        ],
        'resume-builder' => [
            'name' => 'Resume Builder',
            'description' => 'Create professional resumes',
            'steps' => [
                'Enter information',
                'Choose template',
                'Generate resume'
            ],
            'related' => ['invoice-generator', 'daily-planner-creator']
        ],
        'meme-generator' => [
            'name' => 'Meme Generator',
            'description' => 'Create custom memes',
            'steps' => [
                'Upload image',
                'Add text',
                'Generate meme'
            ],
            'related' => ['barcode-generator', 'image-to-png-converter']
        ],
        'barcode-generator' => [
            'name' => 'Barcode Generator',
            'description' => 'Generate various types of barcodes',
            'steps' => [
                'Enter data',
                'Choose barcode type',
                'Generate barcode'
            ],
            'related' => ['qr-code-generator', 'meme-generator']
        ]
    ]
];
?> 
