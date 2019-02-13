$data 

$xlsTitle = ['order_num' => '入库单号', 'purchase_time' => '进货日期', '..' => '..'];
$xlsList = ['order_num' => '45515184', 'puchase_time' => '2019-1-24 18:30'];

值得注意的是
1 当$xlsTitle里有key值时,$xlsList里的值不需要一一对应,并且可以有多余的值,isHasKey = true
2 当$xlsTitle里没有key时,$xlsList里的值需要一一对应且长度一致,isHasKey不需要传
3 $xlsName为导出表格名称
4 当存在$xlsHeader或$xlsFooter时, 这里的传值方式为:
    $xlsHeader = [
        "审批人: HYC",
        "审批日期: 2019-1-24 18:35",
        "..",
        ".."
    ]
