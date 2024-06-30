<?php declare(strict_types=1); ?>
<?php 

print '●相対パスでファイルを指定した場合、<br>';
$filePath = './files/dir1/dir2/file.txt';

print 'ファイル名：' . basename($filePath) . '<br>';
print 'ファイル名（拡張子なし）：' . basename($filePath, 'txt') . '<br>';
print 'ディレクトリ名：' . dirname($filePath) . '<br>';
print 'ディレクトリ名（２階層上）：' . dirname($filePath, 2) . '<br>';
print '絶対パス：' . realpath($filePath) . '<br>';
print '拡張子：' . pathinfo($filePath, PATHINFO_EXTENSION) . '<br>';
print 'ファイル名：' . pathinfo($filePath, PATHINFO_FILENAME) . '<br>';

