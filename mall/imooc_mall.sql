-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 11, 2017 at 01:26 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `imooc_mall`
--

-- --------------------------------------------------------

--
-- Table structure for table `im_goods`
--

CREATE TABLE `im_goods` (
  `id` int(11) NOT NULL COMMENT '商品id',
  `name` varchar(100) NOT NULL COMMENT '商品名称',
  `price` int(11) NOT NULL COMMENT '商品价格',
  `pic` varchar(255) NOT NULL COMMENT '商品图片',
  `des` varchar(200) NOT NULL COMMENT '商品简介',
  `content` longtext NOT NULL COMMENT '商品详情信息',
  `user_id` int(11) NOT NULL COMMENT '用户id',
  `create_time` int(11) NOT NULL COMMENT '发布时间',
  `update_time` int(11) NOT NULL COMMENT '修改时间',
  `view` int(11) NOT NULL DEFAULT '0' COMMENT '浏览次数'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='商品表';

--
-- Dumping data for table `im_goods`
--

INSERT INTO `im_goods` (`id`, `name`, `price`, `pic`, `des`, `content`, `user_id`, `create_time`, `update_time`, `view`) VALUES
(2, '大碗岛的‘星期天‘下午', 8889, 'http://localhost/mall/static/file/2017/0226/58b248ee70d8c1152.png', '画面描写了人们在塞纳河阿尼埃的大碗岛上休息度假的情景：阳光下的河滨树林间，  人们在休憩、散步，垂钓，河面上隐约可见有人在划船，午后的阳光拉下人们长长的身影，画面宁静而和谐。这幅画主要采用了点彩画法', '<div class="para" style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n	<strong>《大碗岛星期天的下午》</strong>是新印象主义典型的代表作，也是一幅在世界美术史上具有纪念碑式意义的油画作品。画面上的大腕岛是位于巴黎附近奥尼埃的一个岛上公园，<span style="color:#E56600;">也是巴黎人盛夏理想的避暑胜地。画面上，聚集了许多周末来这儿游玩的人们。画家着意把画面分成了被阳光照射的部分和处于阴凉中的两部分，使画面构成了鲜明的对比。</span>画面上的人物有的站在那里欣赏风景，有的躺卧或坐在地上自娱自乐，有的成双成对地谈笑，有的面对湖面，独自沉默<strong>---几只小狗在地上游逛。</strong> \r\n</div>\r\n<div class="para" style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n	<strong>画面上的人物与周围的湖面、树木等构成</strong>了精密和谐的构图，使画面上物象的比例、物象与整个画面的大小<em>、<strong>垂直线与平行线的平衡达到了一种理性的和谐和科学秩序下的统一。比如近处阴影下站着</strong></em>的一对高个夫妇与阳光下撑着伞的一对母女以及远处一个正在作画的男士，处于一条水平直线上，而精湛的近大远小的透视法使他们看上去比例和谐、科学，又让人觉得格调明快、有趣，充满活力。当然，与以往的绘画作品比较，这幅画最大的特点就是画面上布满了精密、细致排列的小圆点，这些小圆点是用不加调和的暖、冷色以及相近色、互补色等堆积而成的，在欣赏者一定距离的视角范围内观看，形成了极为鲜艳和饱满的色彩效果。画上的人物形象都不是很清晰，显然这不是画家最关心的，画家刻意追求的就是把众多人物安置在精确的几何图形中，在光线的照射下，使画中的固定人物形成一种奇妙而又特别有秩序的和谐。仔细观看，会觉得画中的人物在各自的位置上形成了一种超越时空的凝重，仿佛各自都必须坚守自己的位置，不能打破某种默契，让人感受到一种理性的不可违抗的井然和秩序。在色彩方面，画中的黄色和橙色占主导地位，黄色与绿色、白色、黑色相互搭配交织，形成了温暖、鲜明的色调，看上去赏心悦目。\r\n</div>\r\n<div class="para" style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n	乔治·修拉极为讲究精密秩序构图的“点彩画法”，使艺术过于科学化，从而失去了艺术本身感性的色彩，使绘画趋于机械和呆板。然而这种大胆的创新尝试，却具有非凡的划时代意义，他的探索深刻地影响了近代艺术的形成，不仅影响了野兽派，也预示了近代几何抽象艺术的出现。\r\n</div>', 2, 1487858209, 1488038676, 10),
(3, '红磨坊的舞会', 7810, 'http://localhost/mall/static/file/2017/0228/58b56dc9ee5203499.jpg', '这幅作品描绘出众多的人物，给人拥挤的感觉，人头攒动，色斑跳跃，热闹非凡，给人以愉快欢乐的强烈印象。画面用蓝紫为主色调，使人物由近及远，产生一种多层次的节奏感。', '<div class="para" style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n	《红磨坊街的舞会》描绘巴黎的一个露天舞会。 夜色轻轻降临，包围了蒙马特。这是一个酒吧、咖啡馆、夜总会聚集的地方。后印象派画家劳特累克（HerryDeToulouse－Lautrec1864－1901）很喜欢这种下层的社交场所。这里的人没有伪装的外表，没有阶级与贫富的区别。只要意气相投，就可以尽情地谈天、享乐。身处这样的环境，劳特累克由于身体残疾所造成的自卑也暂时离开了他，他感到身心放松，思维活跃，艺术灵感也更多。\r\n</div>\r\n<div class="para" style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n	在蒙马特，那个屋上顶着鲜红色风车的就是著名的欢乐场——<a target="_blank" href="http://baike.baidu.com/view/79849.htm">红磨坊</a>。红磨坊1889年才开业，每晚都举行舞会。红磨坊的乐队是以管乐器为主的马戏团乐队，每天晚上，妖娆的舞女随着响亮的喇叭声，拎起飘曳的长裙，踢动着裸露的玉腿，强烈而刺激的舞姿颇具挑逗性，舞蹈之后还有歌唱和杂技表演。舞女在节目的空档中，对客人们频送秋波，与客人们畅快地饮酒谈笑。严肃的世俗观被灯红酒绿的狂欢所淹没。红磨坊开业不久就成为巴黎的娱乐与社交中心。劳特累克也是座上客，他天天到这里画速写。\r\n</div>\r\n<div class="para" style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n	这幅画既表现了一个狂欢的场面，人们各种各样的幽默表现，又在贵族舞会的场面中企图捕捉一种无忧无虑生活方式的情趣。\r\n</div>\r\n<div class="para" style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n	这幅作品描绘出众多的人物，给人拥挤的感觉，人头攒动，色斑跳跃，热闹非凡，给人以愉快欢乐的强烈印象。画面用蓝紫为主色调，使人物由近及远，产生一种多层次的节奏感。画家把主要精力放在对近景一组人物的描绘上，生动地表现出人物脸上的光色效果及光影造成的迷离感，渲染了<a target="_blank" href="http://baike.baidu.com/view/978028.htm">舞会</a>的气氛。画面中还保留着印象派对外光与色斑的处理手法，使画面的总体色调、气氛有一种颤动、闪烁的强烈效果，充分表现了印象主义画家对现实生活中的光与色的变化的高度敏感。\r\n</div>\r\n<div class="para" style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n	我们既可以欣赏欢乐人群的行动，也可以陶醉于舞会之美。但雷诺阿创作此画的兴趣却别有所在，他想呈现出鲜艳色彩的悦目混合，研究阳光射在回旋的人群上的效果。\r\n</div>\r\n<div class="para" style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n	虽然这幅画显得“速写化”，似乎尚未完成。仅仅前景中一些人物的头部表现出一些细节，然而连那里也是用极其违反程式、极其大胆的手法画成的。坐着的那位女士的眼睛和前额处在阴影之中，而阳光照在她嘴和下巴上。她的明亮的衣服是用粗放的笔触画成的。然而这些人物正是我们集中注意的对象。往远处去，形象就越来越隐没于阳光和空气之中。[4]<a name="ref_[4]_1018122"></a>&nbsp;\r\n</div>\r\n<div class="para" style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n	这阳光照射在人们的脸上、衣服、桌椅和地面等引起的丰富的光色变化，充分表现了印象主义画家对现实生活中光与色的变化的高度敏感。京味开心大碗茶茶馆,侃侃文化事，聊聊京城百态。\r\n</div>\r\n<div class="para" style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n	这幅《红磨坊街的舞会》集中体现了他所处的那个最具有印象主义精神的时刻。虽说这幅画描绘的是一个飘渺的仙境，可里面的人却穿着当代的服装。男人们都戴着高帽或草帽，女人们均穿着用箍扩撑着的裙子和腰垫。在这幅画中，一个室外的波希米亚舞会的平凡景象，变成了美丽的女人们和殷勤的男人们的充满光感和色彩的梦。一束束光线，忽隐忽现地在人物的色彩形体上摇拽着——有蓝的、玫瑰红的和黄的，细部交融在浪漫的烟雾之中，使得所有这些愉快人们的美感柔和起来，并提高了这种美的价值。[4]<a name="ref_[4]_1018122"></a>&nbsp;\r\n</div>\r\n<div class="para" style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n	画中舞蹈着的是当时的蒙马特女王——拉．姑柳与男舞伴华兰丹。她是一个充满野性、缺乏教养的舞女。人们围着舞池，注视着这激烈的表演，谁也不在乎自己是谁，在这个地方就是尽情地享乐。\r\n</div>\r\n<div class="para" style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n	天越来越黑，像许多人期盼的那样，闪烁的灯光中，人影如鬼魅一般，这里隐隐约约呈现出一种沦落的美。人们沉湎在夜的世界里。这里是多么无拘无束，自由自在，于是有人纵情声色。<a target="_blank" href="http://baike.baidu.com/view/509933.htm">夜晚</a>的人声喧哗还是藏不住白天的寂寞伤悲，于是有人醉了，也有人看起来很颓废。总之这里的放纵与白天的严谨是那样的截然不同，舞步、歌声和<a target="_blank" href="http://baike.baidu.com/view/1722.htm">酒精</a>把白天的一切都烧成了灰。也许夜晚给了人们很多的快乐或是安慰，因此让人们这样的迷恋，这样的放肆。不会有人去想放纵之后会不会有后悔，酒醒之后会不会更伤悲，身在夜晚的人，谁也不会理会白天的世界。可事实上夜色掩盖了人们不欲人知的心情，纵情欢乐也藏不住角落里的悲伤，夜晚的恣意欢乐里总会或多或少地有着隐隐的伤痛。阳光下的世界有一种美，那是明朗的、愉快的；在昏暗的夜色里，在寻欢作乐的声色场中，也有一种深刻的、让人不能忘怀的东西，那是一种沉沦的美。\r\n</div>', 2, 1488285129, 1488285129, 3),
(4, '日出·印象', 8900, 'http://localhost/mall/static/file/2017/0228/58b56e7a6fdc04806.jpg', '日出时， 海上雾气迷朦， 水中反射着天空和太阳的颜色．岸上景色隐隐约约， 模模糊糊看不清， 给人一种瞬间的感受。', '<div class="para" style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n	《日出·印象》[1]<a name="ref_[1]_9153626"></a>&nbsp;&nbsp;描绘的是在晨雾笼罩中日出时港口景象。在由淡紫、微红、蓝灰和橙黄等色组成的色调中，一轮生机勃勃的红日拖着海水中一缕橙黄色的波光，冉冉升起。海水、天空、景物在轻松的笔调中，交错渗透，浑然一体。近海中的三只小船，在薄雾中渐渐变得模糊不清，远处的建筑、港口、吊车、船舶、桅杆等也都在晨曦中朦胧隐现。这一切，是画家从一个窗口看出去画成的。如此大胆地用“零乱”的笔触来展示雾气交融的景象。这对于一贯正统的沙龙学院派艺术家来说乃是艺术的叛逆。该画完全是一种瞬间的视觉感受和活泼生动的作画情绪使然，以往官方学院派艺术推崇的那种谨慎而明确的轮廓，呆板而僵化的色调荡然无存。这种具有叛逆性的绘画，引起了官方的反对。\r\n</div>\r\n<div class="para" style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n	这幅名画是莫奈于1872年在阿弗尔港口画的一幅写生画。他在同一地点还画了一张《日落》, 在送往首届印象派画展时, 两幅画都没有标题。一名新闻记者讽刺莫奈的画是"对美与真实的否定, 只能给人一种印象"。莫奈于是就给这幅画起了个题目——《日出·印象》。它作为一幅海景写生画, 整个画面笼罩在稀薄的灰色调中, 笔触画得非常随意、零乱, 展示了一种雾气交融的景象。日出时, 海上雾气迷朦, 水中反射着天空和太阳的颜色．岸上景色隐隐约约, 模模糊糊看不清, 给人一种瞬间的感受。\r\n</div>\r\n<div class="para" style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n	他对光色的专注远远超越物体本身的形象，使得物体在画布上的表现消失在光色之中。他让世人重新体悟到光与自然的结构。所以这一视野的嬗变，以往甚至难以想象，它所散发出的光线、色彩、运动和充沛的活力，取代了以往绘画中僵死的构图和不敢有丝毫创新的传统主义。\r\n</div>\r\n<div class="para" style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n	<div class="lemma-picture text-pic layout-right" style="border:1px solid #E0E0E0;margin:0px 0px 3px;">\r\n		"如果你弄个《日出·印象》的黑白版本（如图），会发现太阳基本消失了……没错，太阳本身没有光，只是凭色彩的映衬，才制造出这样的效果！"\r\n	</div>\r\n</div>\r\n<div class="para" style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n	当1874年<a target="_blank" href="http://baike.baidu.com/view/17359.htm">莫奈</a>和一群青年画家举办展览时，这幅《日出·印象》遭到了诽谤和奚落。有的评论家挖苦说：“毛坯的糊墙纸也比这海景完整！”更有人按这幅画的标题，讽喻以莫奈为首的青年艺术家们为“印象派”，于是“<a target="_blank" href="http://baike.baidu.com/view/5064.htm">印象主义</a>”也就成了这个画派的桂冠。\r\n</div>\r\n<div class="para" style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n	该画1985年被抢劫，据法国被盗艺术品侦缉处1990年12月6日，在<a target="_blank" href="http://baike.baidu.com/view/55728.htm">科西嘉岛</a>一座别墅中查获。\r\n</div>', 2, 1488285306, 1488285306, 7),
(5, '松树林之晨', 7500, 'http://localhost/mall/static/file/2017/0228/58b56effe02aa3951.jpg', '晨光为松树林涂上一层金辉，松林里荡漾着清新的生气。松树林苏醒了，几只黑熊在嬉闹玩耍，为宁静的松树林增添了生息。', '<span style="color:#333333;font-family:arial, 宋体, sans-serif;font-size:14px;background-color:#FFFFFF;">晨光为松树林涂上一层金辉，松林里荡漾着清新的生气。松树林苏醒了，几只黑熊在嬉闹玩耍，为宁静的松树林增添了生息。高大的松树林，分出近景、中景、远景，层次的丰富加强了空间感，展示出一派生机勃勃的景象。俄国风景画大师希施金从生活出发，以写生为基础，为作品灌注了现实情感。据说画中可爱、亲和的大小黑熊是萨维茨基所画。</span>', 2, 1488285439, 1488285439, 0),
(6, '吻', 19000, 'http://localhost/mall/static/file/2017/0228/58b56f700f2854392.jpg', '《吻》是一幅正方形的画作，呈现出一对相拥在一起的恋人，他们的身体借由长袍缠绕在一起。', '<div class="para" style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n	古斯塔夫·克林姆描绘一对相拥在一起的亲密恋人，画作的其他部分则是闪烁的光芒及过度平淡的图案。这种图案结构类似<a target="_blank" href="http://baike.baidu.com/view/95449.htm">新艺术运动</a>及艺术与工艺美术运动的作品。法国印象派画家<a target="_blank" href="http://baike.baidu.com/view/119691.htm">埃德加·德加</a>及其他现代主义画家也影响到古斯塔夫·克林姆的作品。意大利画家佛兰西斯科·哈耶兹（Francesco Hayez）在1859年的作品《亲吻》（Il bacio）呈现出19世纪世界末（Fin de siècle）的视觉表现主义，因为它捕捉到富裕及视觉感官传达出的堕落。克林姆使用金箔让人回忆起<a target="_blank" href="http://baike.baidu.com/view/43145.htm">中古时代</a>的黄金画作、手抄本装饰画及<a target="_blank" href="http://baike.baidu.com/view/1292158.htm">镶嵌画</a>。服装上的螺旋图案则类似<a target="_blank" href="http://baike.baidu.com/view/131966.htm">青铜时代</a>的艺术品，而装饰性的藤蔓则可见于早期的西方画作中。男性的头部相当接近画布的顶端边缘，这种风格与传统西方艺术相异，是受到<a target="_blank" href="http://baike.baidu.com/view/793746.htm">日本主义</a>美术的影响，因为两者的构图都非常单纯。\r\n</div>\r\n<div class="para" style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n	这两个人站在花草地贴片的边缘。男子穿着长袍，上面不规则分布著黑色及白色的长方形，并使用金箔来装饰螺旋状的姿态。男子戴着藤蔓组成的冠冕，女子则穿着紧身连身裙，上面点缀着花朵般的圆形或椭圆形的图案，它与背景的波浪线互相平行。她的头发使用花朵来装饰，并且是向上弯曲的时髦发型。她的头发就像一个光环突显出她的脸部，而她的下巴可以看到花朵组成的项链。古斯塔夫·克林姆的其他也出现这种将人体并列的风格，例如《贝多芬横饰带》（Beethoven Frieze）与《斯托克雷特横饰带》（Stoclet Frieze）。\r\n</div>\r\n<div class="para" style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n	《吻》当中的人物被认为是古斯塔夫·克林姆及艾蜜莉·芙洛格（Emilie Flöge），但是并没有证据来证明，也没有纪录流传下来。有些人认为相当类似《Woman with feather boa, Goldfish》及《<a target="_blank" href="http://baike.baidu.com/view/996953.htm">达那厄</a>》（Danaë）中的女主角，所以画中的女子可能是“红色希尔达”。\r\n</div>\r\n<div class="para" style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n	古斯塔夫·克林姆在1903年前往意大利时获得使用金箔的灵感。他在参观拉温纳时，看见<a target="_blank" href="http://baike.baidu.com/view/1524500.htm">圣维塔教堂</a>内的拜占廷<a target="_blank" href="http://baike.baidu.com/view/1292158.htm">镶嵌画</a>。对他来说，这幅扁平的镶嵌画使用金箔来修正缺乏透视感及深度的内容。古斯塔夫·克林姆于是开始使用金箔及银箔来作画。\r\n</div>', 2, 1488285552, 1488285552, 0),
(7, '无名女郎', 8700, 'http://localhost/mall/static/file/2017/0228/58b5701cae4bd7044.jpg', '无名女郎，是俄国画家伊万·尼古拉耶维奇·克拉姆斯柯依于1883年创作的一幅现实主义肖像画，是用油彩画于画布之上，现收藏于莫斯科的特列恰科夫美术博物馆。', '<div class="para" style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n	颇具<a target="_blank" href="http://baike.baidu.com/subview/2551717/2551717.htm">美学价值</a>的性格肖像画\r\n</div>\r\n<div class="para" style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n	这是一幅颇具美学价值的性格肖像画，画家以精湛的技艺表现出对象的精神气质。画中的无名女郎高傲而又自尊，她穿戴着俄国上流社会豪华的服饰，坐在华贵的敞蓬马车上，背景是<a target="_blank" href="http://baike.baidu.com/view/25075.htm">圣彼得堡</a>著名的<a target="_blank" href="http://baike.baidu.com/view/27308.htm">亚历山大</a>剧院。\r\n</div>\r\n<div class="para" style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n	究竟“无名女郎”是谁？至今仍是个谜。\r\n</div>\r\n<div class="para" style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n	画家在肖像画上创造了一种新的表现风格，即用主题性的情节来描绘肖像，展示出一个刚毅、果断、满怀思绪、散发着青春活力的俄国知识女性形象。\r\n</div>\r\n<div class="para" style="font-size:14px;color:#333333;font-family:arial, 宋体, sans-serif;background-color:#FFFFFF;">\r\n	这幅肖像画并不是一个具体人物的肖像，而是画家的理想创造。她坐在华贵的敞篷车上，高傲地望着观众，她那不凡的气派和自尊，给人以刚毅、果断、满怀思绪，散发着青春活力的深刻印象。 画面以冬天的城市为背景，白雪覆盖着屋顶，朦胧湿润的天空，使人感到寒意。女郎的毛皮手笼、镯子、帽子上的白色羽毛、蓝紫色的领结，都表现得极为精到。而最令人惊叹的是人物的精神气质，实在被描绘得精湛绝伦。它确实无愧为一幅杰出的性格肖像画名作。这个美丽女郎的画像。有人说是托尔斯泰小说中的安娜.卡捷琳娜，也有人说是<a target="_blank" href="http://baike.baidu.com/view/170585.htm">莫斯科大剧院</a>里的某个女演员。但不管她是谁，其精神气质确实很能打动观众。\r\n</div>', 2, 1488285724, 1488285724, 0);

-- --------------------------------------------------------

--
-- Table structure for table `im_user`
--

CREATE TABLE `im_user` (
  `id` int(11) NOT NULL COMMENT '主键id',
  `username` varchar(50) NOT NULL COMMENT '用户名',
  `password` varchar(50) NOT NULL COMMENT '密码',
  `create_time` int(11) NOT NULL COMMENT '创建时间'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='用户表';

--
-- Dumping data for table `im_user`
--

INSERT INTO `im_user` (`id`, `username`, `password`, `create_time`) VALUES
(2, 'ss', 'a02daa14133ae6bd41e1eae87eef2e11', 1487602448),
(3, 'ssss', 'a02daa14133ae6bd41e1eae87eef2e11', 1487678308),
(4, 'yyy', 'a02daa14133ae6bd41e1eae87eef2e11', 1505110344),
(5, 'zzz', 'b18f6d1f12ba37bc31742dd3cd4fbc9c', 1505133660),
(6, 'qqq', 'a5169d0f5e68cc7106f711f93b9d111a', 1505133674),
(7, 'rrr', 'd90fc5368c397e71860934807d756b21', 1505133694),
(8, 'ttt', '4606e914c233b0ab18f7678f9d599615', 1505133723);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `im_goods`
--
ALTER TABLE `im_goods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `im_user`
--
ALTER TABLE `im_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `im_goods`
--
ALTER TABLE `im_goods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '商品id', AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `im_user`
--
ALTER TABLE `im_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '主键id', AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
