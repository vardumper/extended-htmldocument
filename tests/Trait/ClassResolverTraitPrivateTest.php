<?php

namespace Tests\Trait;

test('loadAllPhpFiles requires php files and loads classes', function () {
    $tmp = sys_get_temp_dir() . '/ehd_test_' . uniqid();
    mkdir($tmp . '/src', 0777, true);
    $file = $tmp . '/src/TestLoadedClass.php';
    file_put_contents($file, "<?php\nclass TempLoadedClass {}\n");

    $t = new TestClassResolverPrivate();

    expect(class_exists('TempLoadedClass'))
        ->toBeFalse();
    $t->callLoadAllPhpFiles($tmp . '/src');
    expect(class_exists('TempLoadedClass'))
        ->toBeTrue();

    // cleanup
    @unlink($file);
    @rmdir($tmp . '/src');
    @rmdir($tmp);
});

test('findComposerRoot returns autoload path when composer.json and vendor/autoload.php exist', function () {
    $tmp = sys_get_temp_dir() . '/ehd_test_comp_' . uniqid();
    mkdir($tmp . '/nested/dir', 0777, true);
    file_put_contents($tmp . '/composer.json', '{}');
    mkdir($tmp . '/vendor', 0777, true);
    file_put_contents($tmp . '/vendor/autoload.php', "<?php\n// autoload\n");

    $t = new TestClassResolverPrivate();

    $found = $t->callFindComposerRoot($tmp . '/nested/dir');

    expect($found)
        ->toBe($tmp . '/vendor/autoload.php');

    // cleanup
    @unlink($tmp . '/vendor/autoload.php');
    @rmdir($tmp . '/vendor');
    @unlink($tmp . '/composer.json');
    @rmdir($tmp . '/nested/dir');
    @rmdir($tmp . '/nested');
    @rmdir($tmp);
});

test('getPackageRoot returns string and points to package root', function () {
    $t = new TestClassResolverPrivate();

    $pkg = $t->callGetPackageRoot();

    expect(is_string($pkg))
        ->toBeTrue();
    expect(is_dir($pkg))
        ->toBeTrue();
});
