<?php
	//暂时休眠创建对面反应时间
	sleep(2);
	$yaliya_say  = array(
	/*1*/	"吃点屎吧",  
	/*2*/	"你怎么还不跪下啊", 
	/*3*/	"你好啰嗦啊", 
	/*4*/	"我讨厌的三件事 ‘办不到’、‘好麻烦’、‘好累啊’、‘好久啊’，这三句话非常不好，会抹杀人类所拥有的无限可能",
	/*5*/	"叹缥缈，莫过春樱转瞬逝，怜世间，万千繁华是归尘",
	/*6*/	"恋爱真是无聊，我没期待过，没有期待过，连期待也没有过",
	/*7*/	"只有在童话里，自我牺牲才能传为佳话，而在现实中知识逃避的手段",		
	/*8*/	"第一条：相信伙伴，拯救伙伴。 <br />
			第二条：绝对遵守与委托人定下的契约。<br /> 
			第三条：要变强。但要在正确的前提下。 <br />
			第四条：武侦要自立。无请求不得出手相助。 <br />
			第五条：行动应如疾风。旨在一击必胜。<br /> 
			第六条：自己思考,自己行动。 <br />
			第七条：常持悲观论，以乐观论行动。 <br />
			第八条：任务要彻彻底底的完成。 <br />
			第九条：应展翅世界。不分人种、国籍共同战斗。 <br />
			第十条：武侦绝对不能放弃。
			"
		);
	if($_POST['my_say'] != "吃点屎吧" && $_POST['my_say'] != "我是方向明")
	{
		echo $yaliya_say[rand(0,7)];
	}
	else
	{
		if($_POST['my_say'] == "我是方向明")
		{
			echo "大人你来接我了？！";
		}
		else
		{
			echo $yaliya_say[0];
		}
		
	}
	
?>