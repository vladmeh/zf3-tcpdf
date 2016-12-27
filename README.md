# TCPDFModule

A Zend Framework 3 module for incorporating TCPDF support.

[![Build Status](https://travis-ci.org/vladmeh/zf3-tcpdf.svg?branch=master)](https://travis-ci.org/vladmeh/zf3-tcpdf)

## Requirements

* Zend Faramework 3
* PHP v5.6 or 7.0

## Installation

1. Installation of TCPDFModule uses PHP Composer. For more information about PHP Composer, please visit the official [PHP Composer site](http://getcomposer.org/).

    ```
    php composer.phar require vladmeh/zf3-tcpdf
    ```

2. Open my/project/directory/config/modules.config.php and add the following key to your modules:

    ```
    return [
        ...
        'TCPDFModule',
    ];
    ```