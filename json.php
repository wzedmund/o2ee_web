<?php

/**
 * 获取预警级别选择
 */
function getWarningTypeAction(){
    $data =  array(
        array('id'=>'1','text'=>'红色')
    ,array('id'=>'2','text'=>'橙色')
    ,array('id'=>'3','text'=>'蓝色')
    );
    echo json_encode(array('data'=>$data));
}
/**
 *
 * 获得货品差异化设置字段
 */

function difAction(){
    $data =  array(
        array('fieldvalue'=>'-1','fieldname'=>'全选'),
        array('fieldvalue'=>'1','fieldname'=>'默认仓库'),
        array('fieldvalue'=>'2','fieldname'=>'物流属性'),
        array('fieldvalue'=>'3','fieldname'=>'门店订货倍数'),
        array('fieldvalue'=>'4','fieldname'=>'最小起订量'),
        array('fieldvalue'=>'5','fieldname'=>'最大订货数量')
    );
    echo json_encode(array('data'=>$data));
}
/*
                            { title: "嵌套面板一", html: "嵌套面板一", iconCls: "save" },
                            { title: "嵌套面板二", html: "嵌套面板二", iconCls: "search" },
                            { title: "嵌套面板三", html: "嵌套面板三", iconCls: "back" },
                            { title: "嵌套面板四", html: "嵌套面板四", iconCls: "12" }
*/
function getMenu()
{
    $data =  array(
        array('title'=>'嵌套面板一','html'=>'嵌套面板一1','iconCls'=>'save'),
        array('title'=>'嵌套面板二','html'=>'嵌套面板二','iconCls'=>'search'),
        array('title'=>'嵌套面板三','html'=>'嵌套面板三','iconCls'=>'back'),
        array('title'=>'嵌套面板四','html'=>'嵌套面板四','iconCls'=>'12')

    );
    echo json_encode(array('data'=>$data));
}


function listalldiscenterAction(){
    global $db;
    $sql = "select lsid,lsname from lgt_store where stype=?  and lstatus>=0";
    $disCenter = $db->getAll($sql,array(C_Store_Delivery),DB_FETCHMODE_ASSOC);
    echo json_encode(array('data'=>$disCenter));
}

getMenu();
