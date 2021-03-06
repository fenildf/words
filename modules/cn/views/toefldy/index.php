

<link rel="stylesheet" href="/cn/css/store-toefl.css"/>
<script type="text/javascript" src="/cn/js/store-toefl.js"></script>
<div class="toefl-banner">
    <div class="bannerBd">
        <ul>
            <li>
                <img src="/cn/images/toefl_topBanner.png" alt="轮播图"/>
            </li>
<!--            <li>-->
<!--                <img src="/cn/images/toefl_topBanner.png" alt="轮播图"/>-->
<!--            </li>-->
        </ul>
    </div>
</div>
<!--<script type="text/javascript">-->
<!--    jQuery(".toefl-banner").slide({mainCell:".bannerBd ul",autoPlay:true});-->
<!--</script>-->

<div class="container">
    <div class="row">
        <!--申友托福精品课程-->
        <div class="excellent">
            <h4>托福Online精品课程</h4>
            <p>Online提分更有一招 终结低分痛苦</p>
            <div class="excel-in">
                <ul>
                    <?php
                    $data = \app\modules\cn\models\Content::getClass(['where' => 'c.pid=0','fields' => 'price,answer','category' => '163,155','pageSize' => 5]);
                    foreach($data as $k=>$v){
                        ?>
                        <li>
                            <div class="excel-top">
                                <div class="eT-circle">
                                    <span></span>
                                    <img src="/cn/images/toefl_icon0<?php echo $k+1?>.png" alt="白色圆里面的图标">
                                </div>
                                <h5><?php echo $v['name']?></h5>
                            </div>
                            <div class="excel-bottom">
                                <span class="sj"></span>
                                <div class="inFonts">
                                    <p><?php echo $v['answer']?></p>
                                </div>
                                <a href="/goods/<?php echo $v['id']?>.html">详情点击</a>
                            </div>
                        </li>
                        <?php
                    }
                    ?>
                </ul>
            </div>
            <div class="moreUpload">
                <i class="fa fa-caret-down"></i>
                <a href="/course/category-163/type-0/page-1.html">更多课程查询</a>
            </div>
        </div>
    </div>
</div>

<!--三阶段超值服务系统-->
<div class="serviceSystem">
    <div class="container">
        <div class="row">
            <h2>三阶段超值服务系统，两大提分实力保障</h2>
            <div class="serviceUl">
                <ul>
                    <li>
                        <img src="/cn/images/toefl_classTopBg01.png" alt="头部背景图" class="topBg"/>
                        <img src="/cn/images/toefl_classTopBg02.png" alt="尾部背景图" class="botBg"/>
                        <div class="serviceTop">
                            <img src="/cn/images/toefl_gou.png" alt="勾图标"/><span>课前</span>
                        </div>
                        <div class="oneSort">
                            <ul>
                                <li>入学测评</li>
                                <li>测评结果解析</li>
                                <li>课前预习方案制定</li>
                                <li>个性化课程灵活定制</li>
                                <li>教材赠送</li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <img src="/cn/images/toefl_classTopBg01.png" alt="头部背景图" class="topBg"/>
                        <img src="/cn/images/toefl_classTopBg02.png" alt="尾部背景图" class="botBg"/>
                        <div class="serviceTop">
                            <img src="/cn/images/toefl_gou.png" alt="勾图标"/><span>课中</span>
                        </div>
                        <div class="twoSort">
                            <ul>
                                <li>名师小班面授</li>
                                <li>课间课下师生互动</li>
                                <li>阶段性作业评估</li>
                                <li>观看名师视频课程</li>
                                <li>备考资料共享</li>
                                <li>结课复习方案个性化定制</li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <img src="/cn/images/toefl_classTopBg01.png" alt="头部背景图" class="topBg"/>
                        <img src="/cn/images/toefl_classTopBg02.png" alt="尾部背景图" class="botBg"/>
                        <div class="serviceTop">
                            <img src="/cn/images/toefl_gou.png" alt="勾图标"/><span>课后</span>
                        </div>
                        <div class="threeSort">
                            <ul>
                                <li>专享助教复习跟踪指导</li>
                                <li>习题语音讲解</li>
                                <li>在线语音答疑</li>
                                <li>在线仿真模考</li>
                                <li>考前专题辅导</li>
                                <li>考试报名指导</li>
                                <li>临考心里辅导</li>
                                <li>留学规划指导</li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <img src="/cn/images/toefl_classTopBg01.png" alt="头部背景图" class="topBg"/>
                        <img src="/cn/images/toefl_classTopBg02.png" alt="尾部背景图" class="botBg"/>
                        <div class="serviceTop">
                            <img src="/cn/images/toefl_gou.png" alt="勾图标"/><span>模考</span>
                        </div>
                        <div class="fourSort">
                            <ul>
                                <li>34套TPO免费在线模考</li>
                                <li>听力练习</li>
                                <li>口语练习</li>
                                <li>模拟托福考试真实环境</li>
                                <li>雷哥网托福一站式自适应学习平台</li>
                            </ul>
                            <a href="#"><img src="/cn/images/toefl_testIcon.png" alt="图标">
                                测试一下</a>
                        </div>
                    </li>
                    <li>
                        <img src="/cn/images/toefl_classTopBg01.png" alt="头部背景图" class="topBg"/>
                        <img src="/cn/images/toefl_classTopBg02.png" alt="尾部背景图" class="botBg"/>
                        <div class="serviceTop">
                            <img src="/cn/images/toefl_gou.png" alt="勾图标"/><span>社区资源</span>
                        </div>
                        <div class="fourSort">
                            <ul>
                                <li>备考资料下载</li>
                                <li>近期托福资讯</li>
                                <li>备考技巧分享</li>
                                <li>高分学员经验分享</li>
                                <li>考试报名指南</li>
                            </ul>
                            <a href="#"><img src="/cn/images/toefl_testIcon.png" alt="图标">
                                测试一下</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>

</div>
<!--中外托福名师团队-->
<div class="toefl-teacher">
    <div class="inTeacher">
        <h2>雷哥网教学研究中心</h2>
        <span>全程助你托福高分训练</span>
        <div class="toggleSummer">
            <div class="summerHd hd">
                <a href="javascript:void(0);" class="prev">
                    <img src="/cn/images/practice_prevTrangle.png" alt="左边箭头图标">
                </a>
                <a href="javascript:void(0);" class="next">
                    <img src="/cn/images/practice_nextTrangle.png" alt="右边箭头图标">
                </a>
            </div>
            <div class="summerBd">
                <ul>
                    <?php
                    foreach($teacher as $v) {
                        ?>
                        <li>
                            <div class="summerTop">
                                <img src="http://www.toeflonline.cn/<?php echo $v['image']?>" alt="图片">
                                <!--遮罩-->
                                <div class="summer-mask">
                                    <p><?php echo $v['name']?></p>
                                </div>
                            </div>
                            <span><?php echo $v['name']?></span>
                        </li>
                        <?php
                    }
                    ?>
                </ul>
            </div>
        </div>
        <script type="text/javascript">
            jQuery(".toggleSummer").slide({mainCell:".summerBd ul",vis:5,scroll:5,effect:"left",interTime:50,autoPage:true,pnLoop:false});
        </script>
        <a href="#yuyue"><img src="/cn/images/toefl_yuyueIcon.png" alt="预约图标"/>马上预约</a>
    </div>
</div>
<!--关于申友托福-->
<div class="container">
    <div class="row">
        <div class="aboutToefl">
            <h2>关于托福Online，他们有话说</h2>
            <div class="aboutTSlide">
                <div class="aboutTHd hd">
                    <a href="javascript:void(0);" class="next">
                        <i class="fa fa-angle-right"></i>
                    </a>
                    <a href="javascript:void(0);" class="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                </div>
                <div class="aboutTBd">
                    <ul>
                        <?php
                        $data = \app\modules\cn\models\Content::getClass(['where' => 'c.pid=0','fields' => 'answer,cnName','category' => '290','page'=>1,'pageSize' => 4]);
                        foreach($data as $k=>$v) {
                            ?>
                            <li>
                                <div class="aboutTBd-left">
                                    <a href="#">
                                        <img src="<?php echo $v['image']?>" alt="学员头像"/>
                                    </a>
                                </div>
                                <div class="aboutTBd-right">
                                    <h4><?php echo $v['cnName']?></h4>

                                    <p><?php echo $v['name']?></p>
                                    <a href="/cn/case/290-<?php echo $v['id']?>.html">查看详情 &gt;</a>
                                </div>
                                <div style="clear: both"></div>
                            </li>
                            <?php
                        }
                        ?>
                    </ul>
                    <ul>
                        <?php
                        $data = \app\modules\cn\models\Content::getClass(['where' => 'c.pid=0','fields' => 'answer','category' => '290','page'=>2,'pageSize' => 4]);
                        foreach($data as $k=>$v) {
                            ?>
                            <li>
                                <div class="aboutTBd-left">
                                    <a href="#">
                                        <img src="<?php echo $v['image']?>" alt="学员头像"/>
                                    </a>
                                </div>
                                <div class="aboutTBd-right">
                                    <h4><?php echo $v['name']?></h4>

                                    <p><?php echo $v['title']?></p>
                                    <a href="/cn/case/290-<?php echo $v['id']?>.html">查看详情 &gt;</a>
                                </div>
                                <div style="clear: both"></div>
                            </li>
                            <?php
                        }
                        ?>
                    </ul>
                </div>
            </div>
            <script type="text/javascript">
                jQuery(".aboutTSlide").slide({mainCell:".aboutTBd",trigger:"click",pnLoop:false});
            </script>

        </div>
    </div>
</div>

<!--申友公开课-->
<div class="shenYou-class">
    <div class="container">
        <div class="row">
            <h2>托福Online公开课</h2>
            <?php
            $data = \app\modules\cn\models\Content::getClass(['where' => 'c.pid=0','fields' => 'duration,cnName,numbering','category' => '218,163','pageSize' => 4]);
            foreach($data as $v) {
                ?>
                <div class="col-md-3">
                    <div class="open-commonStyle">
                        <a href="http://open.viplgw.cn/public-class/<?php echo $v['id']?>.html"><img src="<?php echo $v['image']?>" alt="课程图"/></a>
                        <p><a href="http://open.viplgw.cn/public-class/<?php echo $v['id']?>.html"><?php echo $v['name']?></p>
                        <span><?php echo $v['createTime'] ?></span>
                        <b><?php echo $v['numbering']?></b>
                        <div style="clear: both;"></div>
                        <?php
                        if($v['duration']) {
                            ?>
                            <a href="http://open.viplgw.cn/public-class/back/<?php echo $v['id']?>.html" class="classBtn diffColor01">回放</a>
                            <?php
                        }else {
                            ?>
                            <a href="javascript:;" onclick="buyNow(<?php echo $v['id']?>)" class="classBtn diffColor01">报名</a>
                            <?php
                        }
                        ?>
                        <a href="http://open.viplgw.cn/public-class/<?php echo $v['id']?>.html" class="classBtn diffColor02">详情</a>
                    </div>
                </div> <?php
            }
            ?>
        </div>
    </div>
</div>
<!--申友研究中心-->
<div class="researchCenter">
    <div class="container">
        <div class="row">
            <div class="inResearch">
                <h2>托福Online研究中心</h2>
                <?php
                $data = \app\modules\cn\models\Content::getBook(165,172,"","",1,2);
                foreach($data as $v) {
                    ?>
                    <div class="col-md-6">
                        <div class="col-md-3">
                            <div class="researchT-left">
                                <a href="/goods/<?php echo $v['id']?>.html"><img src="<?php echo $v['image']?>" alt="书籍图片"/></a>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="researchT-right">
                                <h5><a href="/goods/<?php echo $v['id']?>.html"><?php echo $v['name']?></h5>
                                <div class="whiteRes">
                                    <?php echo $v['answer'] ?>
                                    <h4></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                ?>
                <div style="clear: both"></div>
            </div>
            <div class="research-bottom">
                <ul>
                    <?php
                    $data = \app\modules\cn\models\Content::getBook(165,172,"","",1,6);
                    foreach($data as $v) {
                        ?>
                        <li>
                            <a href="/goods/<?php echo $v['id'] ?>.html">
                                <div class="reseT-img">
                                    <img src="<?php echo $v['image'] ?>" alt="教材图片"/>
                                </div>
                                <span><a href="/goods/<?php echo $v['id'] ?>.html"><?php echo $v['name'] ?></span>
                            </a>
                        </li>
                        <?php
                    }
                    ?>
                </ul>
            </div>
        </div>
    </div>
</div>

</div>
<!--动态-->
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="dynamic">
                <div class="dynamic-left">
                    <img src="/cn/images/toefl_examIcon01.png" alt="图片"/>
                </div>
                <div class="dynamic-right">
                    <h4>托福考试动态</h4>
                    <ul>
                        <?php
                        $data = \app\modules\cn\models\Content::getClass(['where' => 'c.pid=0','fields' => 'answer','category' => '299','page'=>1,'pageSize' => 3]);
                        foreach($data as $v) {
                            ?>
                            <li>
                                <a href="/cn/admission-requirement/detail/243-<?php echo $v['id']?>.html"><?php echo $v['title']?></a>
                            </li>
                            <?php
                        }
                        ?>
                    </ul>
                    <div class="moreDiv">
                        <a href="/cn/admission-requirement">
                            <span>MORE+</span>
                            <div><i class="fa fa-angle-right"></i></div>
                        </a>
                    </div>
                    <div style="clear: both"></div>
                </div>
                <div style="clear: both"></div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="dynamic">
                <div class="dynamic-left">
                    <img src="/cn/images/toefl_examIcon02.png" alt="图片"/>
                </div>
                <div class="dynamic-right">
                    <h4>GMAT考试动态</h4>
                    <ul>
                        <?php
                        $data = \app\modules\cn\models\Content::getClass(['where' => 'c.pid=0','fields' => 'answer','category' => '300','page'=>1,'pageSize' => 3]);
                        foreach($data as $v) {
                            ?>
                            <li>
                                <a href="/cn/admission-requirement/detail/243-<?php echo $v['id']?>.html"><?php echo $v['title']?></a>
                            </li>
                            <?php
                        }
                        ?>
                    </ul>
                    <div class="moreDiv">
                        <a href="/cn/admission-requirement">
                            <span>MORE+</span>
                            <div><i class="fa fa-angle-right"></i></div>
                        </a>
                    </div>
                    <div style="clear: both"></div>
                </div>
                <div style="clear: both"></div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="dynamic">
                <div class="dynamic-left">
                    <img src="/cn/images/toefl_examIcon03.png" alt="图片"/>
                </div>
                <div class="dynamic-right">
                    <h4>留学考试动态</h4>
                    <ul>
                        <?php
                        $data = \app\modules\cn\models\Content::getClass(['where' => 'c.pid=0','fields' => 'answer','category' => '301','page'=>1,'pageSize' => 3]);
                        foreach($data as $v) {
                            ?>
                            <li>
                                <a href="/cn/admission-requirement/detail/243-<?php echo $v['id']?>.html"><?php echo $v['title']?></a>
                            </li>
                            <?php
                        }
                        ?>
                    </ul>
                    <div class="moreDiv">
                        <a href="/cn/admission-requirement">
                            <span>MORE+</span>
                            <div><i class="fa fa-angle-right"></i></div>
                        </a>
                    </div>
                    <div style="clear: both"></div>
                </div>
                <div style="clear: both"></div>
            </div>
        </div>

    </div>
</div>

<!--马上预约享优惠-->
<div class="container" id="yuyue">
    <form action="<?php echo baseUrl?>/cn/toefldy/make" method="post">
        <div class="row">
            <div class="favorable">
                <h2>马上预约享优惠</h2>
                <ul>
                    <li>
                        <label><span>*</span>姓名：</label>
                        <input type="text" class="oneWidth" name="user_name"/>
                    </li>
                    <li>
                        <label><span>*</span>电话：</label>
                        <input type="text" class="oneWidth" name="user_phone"/>
                    </li>
                    <li>
                        <label>验证码：</label>
                        <input type="text" class="twoWidth" name="user_code" />
                        <img style="height: 28px;" src="/cn/api/verification-code" onclick="this.src='/cn/api/verification-code?'+Math.random();" name="user_code" alt="验证码"/>
                    </li>
                    <li>
                        <label>毕业/在读学校：</label>
                        <input type="text" class="twoWidth" name="user_school"/>
                    </li>
                </ul>
                <input style="width: 144px;height: 30px;line-height: 30px;display: block;background: #7440a2;color: white;text-align: center; border-radius: 10px;font-size: 16px;margin: 0 auto;margin-top: 30px;" type="submit" value="点击提交">
            </div>
        </div>
    </form>
</div>