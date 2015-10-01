select `d1`.`type`, `d1`.`value` from `data` as d1
inner join (select max(id) as l_id from `data` group by `type`) as d2 on `d1`.`id`=`d2`.`l_id`
order by `d1`.`date` desc;