<?php

// 注意 <<<LABEL 中的键盘换行是有效的
$content= <<<LABEL
要在Mac上卸载PHP 7.1，您可以使用Homebrew（如果您是通过Homebrew安装的PHP），或者使用macOS的“磁盘工具”应用来卸载。
请注意，卸载系统级别的软件可能会影响其他依赖该软件的应用程序，因此请谨慎操作。如果您不确定如何进行操作，建议先备份重要数据。

LABEL;

echo $content;

/*
 * \r\n 也是有效的， \r\n在linux, unix, windows都表示换行, 在Mac上使用 \r 表示回车
 * 文件中的换行符号： \r\n在linux, unix, windows都表示换行, 在Mac上使用 \
 */
$content2= <<<LABEL
\r\n使用了参数\r\n
$content
LABEL;

echo $content2;
?>