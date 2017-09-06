<?php
/**
 * Project: snso-framework-hosted
 * User: Mohammed Matar
 * Date: 06/09/17
 * Time: 01:52 ص
 */

namespace Dalek;


abstract class ReportBuilder
{
    public static function build( $type, array $meta, array $data)
    {
        switch ($type){
            case ReportType::DATA_TABLE: return new DataTableBuilder( $meta, $data );
            case ReportType::PIE_CHART:  return new PieChartBuilder( $meta, $data );
            default: return null;
        }
    }
}