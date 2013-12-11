<?php

namespace Snappminds\Utils\Bundle\WidgetsBundle\Widget\Grid;

use Snappminds\Utils\Bundle\WidgetsBundle\View\View;

class Column
{

    private $name;
    private $label;
    private $prefix;

    public function __construct($name, $label, $prefix)
    {
        $this->setName($name);
        $this->setLabel($label);
        $this->setPrefix($prefix);
    }

    protected function setName($value)
    {
        $this->name = $value;
    }

    public function getName()
    {
        return $this->name;
    }

    protected function setLabel($value)
    {
        $this->label = $value;
    }

    public function getLabel()
    {
        return $this->label;
    }
    protected function setPrefix($value)
    {
        $this->prefix = $value;
    }

    public function getPrefix()
    {
        return $this->prefix;
    }

    /**
     * Procesa una fila o conjunto de valores para generar el valor de una celda.
     *
     * @param $value Fila o conjunto de valores a procesar.
     */
    public function processValue($row)
    {
        return $row[$this->getName()];
    }

    public function buildView(View $view)
    {
        $view->set('label', $this->getLabel());
        $view->set('name', $this->getName());
        $view->set('prefix', $this->getPrefix());
        $view->set('type', 'column');

        return $view;
    }

}
