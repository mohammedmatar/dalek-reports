<?php
/**
 * Project: snso-framework-hosted
 * User: Mohammed Matar
 * Date: 06/09/17
 * Time: 02:55 ص
 */
namespace Dalek;
class PieChartComponent implements Component
{
    const CAPTION_STRING = 'caption';
    const HEIGHT_STRING = 'height';
    const WIDTH_STRING = 'width';

    private $builder;

    public function __construct( $meta, $data )
    {
        $this->builder = ReportBuilder::build( ReportType::PIE_CHART, $meta, $data );
    }

    /**
     * @param $caption
     * @return void
     */
    public function setCaption($caption)
    {
        $this->builder->attachProperty('caption', $caption);
    }

    /**
     * @return mixed
     */
    public function getCaption()
    {
        return $this->builder->getObject()[self::CAPTION_STRING];
    }

    /**
     * @param $width
     * @param $height
     * @return mixed
     */
    public function setDimension($width, $height)
    {
        $this->builder->attachProperty(self::WIDTH_STRING, $width);
        $this->builder->attachProperty(self::HEIGHT_STRING, $height);
        return $this->builder->getObject();
    }

    /**
     * @return mixed
     */
    public function getDimension()
    {
        return
            [
                self::WIDTH_STRING => $this->builder->getObject()[self::WIDTH_STRING],
                self::HEIGHT_STRING=> $this->builder->getObject()[self::HEIGHT_STRING]
            ];
    }

    /**
     * @return PieChartBuilder
     */
    public function getBuilder()
    {
        return $this->builder;
    }

}