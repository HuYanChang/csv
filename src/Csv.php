<?php
/**
 * Created by PhpStorm.
 * User: pc
 * Date: 2019/1/24
 * Time: 18:10
 */
namespace Cxp\Csv;

class Csv
{
    public static function exportCsv($data, $isHasKey = false)
    {
        $xlsTitle = $data['xlsTitle'];
        $arrayKeys = array_keys($xlsTitle);
        $xlsName = $data['xlsName'];
        $xlsList = $data['xlsList'];
        $string = '';
        //表格前信息
        if(isset($data['xlsHeader']) && !empty($data['xlsHeader'])){
            foreach ($data['xlsHeader'] as $v){
                $string .= iconv('utf-8', 'GBK//IGNORE', $v)."\n";
            }
        }
        //  头部
        foreach ($xlsTitle as $key => $val) {
            $xlsTitle[$key] = iconv('utf-8', 'gb2312', $val);
        }
        $string .= implode(',', $xlsTitle) . "\n";

        //  内容
        foreach ($xlsList as $key => $value) {
            $exportData = [];
            foreach ($arrayKeys as $k) {
                if($isHasKey == false) $value = array_values($value);
                $exportData[$k] = addslashes(iconv('utf-8', 'GBK//IGNORE', str_replace("\n", '',str_replace(',', '， ', $value[$k]))));
            }
            $string .= implode(',', $exportData) . "\n";
        }
        //表格后信息
        if(isset($data['xlsFooter']) && !empty($data['xlsFooter'])){
            foreach ($data['xlsFooter'] as $v){
                $string .= iconv('utf-8', 'GBK//IGNORE', $v)."\n";
            }
        }
        $filename = $xlsName . date('Y-m-d H:i:s') . '.csv';
        header("Content-type:text/csv");
        header("Content-Disposition:attachment;filename=" . $filename);
        header("Cache-Controller:must-revalidate,post-check=0,pre-check=0");
        header('Expires:0');
        echo $string;
    }
}