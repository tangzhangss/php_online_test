SET character_set_client = gb2312; 
SET character_set_connection = gb2312; 
SET character_set_database = gb2312; 
SET character_set_results = gb2312; 
SET character_set_server = gb2312;
CREATE TABLE `xueshengxinxi` (
   `id` int(11) not null auto_increment,
   `yonghuming` varchar(50),`mima` varchar(50),`xingming` varchar(50),`xingbie` varchar(50),`nianling` varchar(50),`banji` varchar(50),`lianxifangshi` varchar(50),`youxiang` varchar(50),`beizhu` varchar(500),
   `addtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
   PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=gb2312 AUTO_INCREMENT=2;

insert into xueshengxinxi(yonghuming,mima,xingming,xingbie,nianling,banji,lianxifangshi,youxiang,beizhu) values('021','001','ղķ˹','��','33','','18759640002','trodd@yahoo.com','��');


