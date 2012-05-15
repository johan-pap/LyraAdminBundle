<?php

/*
 * This file is part of the LyraAdminBundle package.
 *
 * Copyright 2011 Massimo Giagnoni <gimassimo@gmail.com>
 *
 * This source file is subject to the MIT license. Full copyright and license
 * information are in the LICENSE file distributed with this source code.
 */

namespace Lyra\AdminBundle\Renderer;

/**
 * Show renderer class.
 *
 * Displays a single record in a dialog window.
 */
class ShowRenderer extends BaseRenderer
{
    /**
     * @var mixed
     */
    protected $object;

    /**
     * @var string
     */
    protected $title;

    /**
     * @var array
     */
    protected $fields;

    public function setObject($object)
    {
        $this->object = $object;
    }

    public function getObject()
    {
        return $this->object;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setFields($fields)
    {
        $this->fields = $fields;
    }

    public function getFields()
    {
        return $this->fields;
    }

    public function getFieldValue($field)
    {
        $method = $this->fields[$field]['get_method'];
        $type = $this->fields[$field]['type'];
        $value = $this->object->$method();

        if (null !== $value && ('date' == $type || 'datetime' == $type)) {
            $value = $value->format($format = $this->configuration->getShowFieldOption($field, 'format'));
        }

        return $value;
    }
}
