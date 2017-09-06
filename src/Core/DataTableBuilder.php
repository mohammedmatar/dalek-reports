<?php

namespace Dalek;

class DataTableBuilder implements ReportBuilderInterface
{
    const HEADER_KEY = 'headers';

    private $object;
    private $meta;
    private $data;

    public function __construct( $meta, $data )
    {
        if ( self::HEADER_KEY !== self::LABELS_STRING ) {
            $meta[self::HEADER_KEY] = $meta[self::LABELS_STRING];
            unset($meta[self::LABELS_STRING]);
        } else {
            $meta[self::HEADER_KEY] = $meta[self::LABELS_STRING];
        }

        $this->meta = $meta;
        $this->data = $data;

        $this->createReportJson();
    }

    /**
     * @return array
     */
    public function createReportJson()
    {
        return $this->setObject([
            'meta'=> $this->meta,
            'data'=> $this->data
        ]);
    }

    /**
     * @return array
     */
    public function getObject()
    {
        return $this->object;
    }

    /**
     * @return string
     */
    public function getObjectAsJson()
    {
        return json_encode($this->object);
    }

    /**
     * @return array
     */
    public function getHeaders()
    {
        return $this->meta[self::HEADER_KEY];
    }

    /**
     * @return array
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return ReportType::DATA_TABLE;
    }

    /**
     * @param $name string
     * @param $value
     * @return array
     */
    public function attachProperty($name, $value)
    {
        $this->meta[$name] = $value;
        return $this->createReportJson();
    }

    /**
     * @param $data
     * @return array
     */
    public function setData($data)
    {
        $this->data = $data;
        $this->setObject(['meta'=> $this->meta, 'data'=> $this->data]);
        return $this->createReportJson();
    }

    /**
     * @param $headers
     * @return array
     */
    public function setHeaders($headers)
    {
        $this->meta[self::HEADER_KEY] = $headers;
        return $this->createReportJson();
    }
    private function setObject($object)
    {
        $this->object = $object;
    }
}
