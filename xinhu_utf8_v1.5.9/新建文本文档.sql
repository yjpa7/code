git add .
git commit -m "更改的内容"
git push git@github.com:yjpa7/code.git


###xinhu 插入考勤记录示例###
INSERT INTO xinhu_kqdkjl (uid,dkdt,optdt,type,ip,snid,sntype) VALUES ("2","2017-09-28 09:32:33","2017-09-28 09:32:33","1","192.168.0.33","1","1")


#####xinhu_kqjsn添加列ipaddr(IP地址),purpose（用途）####
一、数据库添加字段
alter table xinhu_kqjsn add ipAddr char(15) not null default '000.000.000.000' comment 'IP地址';
alter table xinhu_kqjsn add purpose char(1) not null default 'k' comment '用途,k,(考勤机),x(消费机),d(订餐机)';

二、系统关联字段
流程模块-》表单元素管理-》新增


###########创建订餐原始记录表，就餐原始记录表，日报表###########

create table xinhu_dcycjl (
id int auto_increment comment '自增主键',
dckh char(16) comment '订餐卡号',
dcxm char(12) comment'订餐姓名',
dcjwz char(4) comment'订餐机位置,jjjl|九江,qyjl|清远,yj|赢伽,kt|凯庭,yls|雅尼斯,yx|营销',
dcjip char(15) comment '订餐机IP',
dcsj datetime comment '刷卡时间',
dctype char(2) comment '订餐类型,sg|手工,sk|刷卡',
primary key (id)
)comment '订餐原始记录表'


测试：insert into xinhu_dcycjl (dckh,dcxm,dcjwz,dcjip,dcsj,dctype) 
values ("1205","一三四","jjjl","192.168.0.52","2017-10-21 15:30:00.000","sk")

