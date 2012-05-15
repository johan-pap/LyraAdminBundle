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

interface ShowRendererInterface
{
    /**
     * Sets the instance of the record to display.
     *
     * @param mixed $object
     */
    function setObject($object);

    /**
     * Gets the instance of the record to display.
     *
     * @return mixed
     */
    function getObject();

    /**
     * Sets the show dialog title.
     *
     * @param string $title
     */
    function setTitle($title)
    {
        $this->title = $title;
    }
    /**
     * Gets the show dialog title
     *
     * @return string.
     */
    function getTitle();

    /**
     * Sets configuration options of the fields to show.
     *
     * @param array $fields
     */
    function setFields($fields);

    /**
     * Gets configuration options of the fields to show.
     *
     * @return array
     */
    function getFields();

    /**
     * Gets a field value.
     *
     * @param string $field
     *
     * @return mixed
     */
    function getFieldValue($field);
}
