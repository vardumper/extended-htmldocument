<?php

use Html\Helper\YamlHelper;

it('parseFile returns array for yaml file', function () {
    $tmp = sys_get_temp_dir() . '/test_yaml_' . uniqid() . '.yaml';
    file_put_contents($tmp, "a: 1\nb: test\n");
    $helper = new YamlHelper();

    $res = $helper->parseFile($tmp);
    unlink($tmp);

    expect($res)
        ->toBeArray();
    expect($res['a'])->toBe(1);
    expect($res['b'])->toBe('test');
});

it('dump and parse roundtrip', function () {
    $helper = new YamlHelper();
    $data = [
        'x' => [
            'y' => 2,
        ],
        'arr' => [1, 2, 3],
    ];
    $yaml = $helper->dump($data);
    expect($yaml)
        ->toBeString();

    // Re-parse to validate roundtrip
    $parsed = \Symfony\Component\Yaml\Yaml::parse($yaml);
    expect($parsed)
        ->toBe($data);
});
