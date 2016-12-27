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

#### Example usage

```php
// module config: module\Application\config\module.config.php

<?php
namespase Application;

use Application\Factory\IndexControllerFactory;

return [
    'controllers' => [
        'factories' => [
            Controller\IndexController::class => IndexControllerFactory::class,
        ],
    ],
    'router' => [],
    ...
];
```

```php
// module\Application\src\Factory\IndexControllerFactory.php

<?php

namespace Application\Factory;


use Application\Controller\IndexController;
use Interop\Container\ContainerInterface;
use Zend\ServiceManager\Factory\FactoryInterface;
use Zend\View\Renderer\RendererInterface;

class IndexControllerFactory implements FactoryInterface
{
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        $tcpdf = $container->get(\TCPDF::class);
        $renderer = $container->get(RendererInterface::class);
        return new IndexController(
            $tcpdf,
            $renderer
        );
    }
}
```

```php
// module\Application\src\Controller\IndexController.php
<?php

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\View\Renderer\RendererInterface;


class IndexController extends AbstractActionController
{

    /**
     * @var \TCPDF
     */
    protected $tcpdf;

    /**
     * @var RendererInterface
     */
    protected $renderer;

    public function __construct($tspdf, $renderer)
    {
        $this->tcpdf = $tspdf;
        $this->renderer = $renderer;
    }

    public function indexAction()
    {
        $view = new ViewModel();

        $renderer = $this->renderer;
        $view->setTemplate('layout/pdf');
        $html = $renderer->render($view);

        $pdf = $this->tcpdf;

        $pdf->SetFont('arialnarrow', '', 12, '', false);
        $pdf->AddPage();
        $pdf->writeHTML($html, true, false, true, false, '');

        $pdf->Output();
    }
}

```