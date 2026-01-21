<?php

declare(strict_types=1);

$cloverPath = $argv[1] ?? 'clover.xml';
$outputPath = $argv[2] ?? 'coverage.svg';

if (! is_file($cloverPath)) {
    fwrite(\STDERR, "Clover report not found: {$cloverPath}\n");
    exit(1);
}

libxml_use_internal_errors(true);
$xml = simplexml_load_file($cloverPath);
if ($xml === false) {
    fwrite(\STDERR, "Failed to parse clover XML: {$cloverPath}\n");
    foreach (libxml_get_errors() as $error) {
        fwrite(\STDERR, trim($error->message) . "\n");
    }
    exit(1);
}

$metrics = $xml->project->metrics;
if ($metrics === null) {
    fwrite(\STDERR, "Clover XML is missing /coverage/project/metrics\n");
    exit(1);
}

$statements = (int) ($metrics['statements'] ?? 0);
$coveredStatements = (int) ($metrics['coveredstatements'] ?? 0);

$percent = 0;
if ($statements > 0) {
    $percent = (int) round(($coveredStatements / $statements) * 100);
}

$percent = max(0, min(100, $percent));

// Match the typical shields.io color thresholds.
$color = '#e05d44'; // red
if ($percent >= 90) {
    $color = '#4c1'; // green
} elseif ($percent >= 50) {
    $color = '#dfb317'; // yellow
}

$percentText = $percent . ' %';

$svg = <<<SVG
<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="108" height="20" role="img">
    <linearGradient id="s" x2="0" y2="100%">
        <stop offset="0" stop-color="#bbb" stop-opacity=".1"/>
        <stop offset="1" stop-opacity=".1"/>
    </linearGradient>
    <clipPath id="r">
        <rect width="108" height="20" rx="3" fill="#fff"/>
    </clipPath>
    <g clip-path="url(#r)">
        <rect width="63" height="20" fill="#555"/>
        <rect x="63" width="45" height="20" fill="{$color}"/>
        <rect width="108" height="20" fill="url(#s)"/>
    </g>
    <g fill="#fff" text-anchor="middle" font-family="Verdana,Geneva,DejaVu Sans,sans-serif" text-rendering="geometricPrecision" font-size="110">
        <text aria-hidden="true" x="315" y="150" fill="#010101" fill-opacity=".3" transform="scale(.1)" textLength="530">coverage</text>
        <text x="315" y="140" transform="scale(.1)" fill="#fff" textLength="530">coverage</text>
        <text aria-hidden="true" x="850" y="150" fill="#010101" fill-opacity=".3" transform="scale(.1)" textLength="350">{$percentText}</text>
        <text x="850" y="140" transform="scale(.1)" fill="#fff" textLength="350">{$percentText}</text>
    </g>
</svg>
SVG;

if (file_put_contents($outputPath, $svg) === false) {
    fwrite(\STDERR, "Failed to write badge: {$outputPath}\n");
    exit(1);
}
