###xinhu 插入考勤记录示例###
INSERT INTO xinhu_kqdkjl (uid,dkdt,optdt,type,ip,snid,sntype) VALUES ("2","2017-09-28 09:32:33","2017-09-28 09:32:33","1","192.168.0.33","1","1")


#####xinhu_kqjsn添加列ipaddr(IP地址),purpose（用途）####
一、数据库添加字段
alter table xinhu_kqjsn add ipAddr char(15) not null default '000.000.000.000' comment 'IP地址';
alter table xinhu_kqjsn add purpose char(1) not null default 'k' comment '用途,k,(考勤机),x(消费机),d(订餐机)';

二、系统关联字段
流程模块-》表单元素管理-》新增


