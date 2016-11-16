<?php

/* @var $this yii\web\View */

$this->title = Yii::t('app','home');
?>
<div class="section1">
    <div class="arrow-top uk-text-center">
        <img class="arrow-animate " src="/style/img/arrow-top.png">
    </div>
    <div class="container-section1">
        <div class="uk-grid uk-grid-collapse">
            <div class="uk-width-1-2">
                <div class="section1-block1">
                    <div class="section1-sub-block">

                    </div>
                </div>
            </div>

            <div class="uk-width-1-2">
                <div class="section1-block2">
                    <div class="section1-sub-block1">
                        <div class="sub-panel">
                            <h2 class="sub-title">1 - ДЕМӨӨРЧҮ<br> 1 - ОКУУЧУ</h2>
                            <p>@Бир_демөөрчү_бир_окуучу акциясына кошулуп балдардын жана өлкөбүздүн келечегине кам көрөлү...</p>
                            <a href="#modal-donate" data-uk-modal="{center:true}" class="uk-button uk-button-primary uk-border-rounded"><span class="uk-icon-user-plus"></span> Бизге кошулуңуз</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="arrow-bottom">
        <div class="balls-animate"><a href="#asus" data-uk-smooth-scroll="{offset: -25}"><img src="/style/img/arrow-bottom.png"></a></div>
    </div>
</div>

<div class="section-info1">
    <div class="uk-container uk-container-center">
        <h2 class="stat1">Улуттук Статистика комитетинин билдирүүсү боюнча</h2>
        <div class="uk-width uk-container-center uk-text-center uk-hidden-small" style="max-width: 850px">
            <div class="uk-grid uk-grid-medium" data-uk-scrollspy="{cls:'uk-animation-fade', target:'.mystat', delay:100, repeat: true}">
                <div class="uk-width-1-4 mystat">
                    <div class="stat-panel" style="background: #3d8eb9">
                        80 000
                    </div>
                    <p class="stat-panel-text">Ашуун кароосуз калган балдар <strong>Кыргызстан</strong> аймагында катталган</p>
                </div>
                <div class="uk-width-1-4 mystat">
                    <div class="stat-panel" style="background: #fba026 ">
                        15 000
                    </div>
                    <p class="stat-panel-text">Балдар үйлөрүндө тарбияланса, калганы тууган туушкандарыныкында күн кечирип келет</p>
                </div>
                <div class="uk-width-1-4 mystat">
                    <div class="stat-panel" style="background: #41a85f">
                        500 - 700
                    </div>
                    <p class="stat-panel-text">Бала жыл сайын балдар үйүнөн тарбияланып чыкса</p>
                </div>
                <div class="uk-width-1-4 mystat">
                    <div class="stat-panel" style="background: #e14938">
                        70 - 80%
                    </div>
                    <p class="stat-panel-text">туура эмес жолдорго түшүүсү кейитпей койбойт</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div id="asus" class="section-info">
    <div class="uk-container uk-container-center">
        <h1 class="info-title" data-uk-scrollspy="{cls:'uk-animation-slide-bottom', repeat: true}">Баланын өсүп - өнүүсү</h1>
        <p class="uk-contrast uk-text-large uk-text-center uk-margin-bottom-remove dnb" data-uk-scrollspy="{cls:'uk-animation-slide-bottom', repeat: true, delay:200}">Баланын өсүп- өнүүсү эмнеден көз каранды? <br><strong>Мисал алсак:</strong></p>
    </div>
</div>


<div class="section2">
    <div class="pdt">
        <div class="pdtt" data-uk-scrollspy="{cls:'uk-animation-slide-top', repeat: true, delay:300}">
            7 - Жашта
        </div>
    </div>
    <div class="uk-grid uk-grid-collapse">
        <div class="uk-width-1-2">
            <div class="section2-block1">
                <div class="uk-width uk-float-right" style="max-width:600px">
                    <div class="uk-grid uk-grid-collapse">
                        <div class="uk-width-medium-1-2 uk-text-right">
                            <h2 class="person-title" data-uk-scrollspy="{cls:'uk-animation-scale-down', repeat: true, delay:100}">Бул <strong>Асан</strong></h2>
                            <h2 class="person-date" data-uk-scrollspy="{cls:'uk-animation-slide-left', repeat: true, delay:100}">Ата-энеси бар</h2>
                            <p data-uk-scrollspy="{cls:'uk-animation-slide-left', repeat: true, delay:400}">Ата-эне кадырын перзенти билбейт, себеби ал ата же эне боло элек, ал эми перзентин ата эне тушунот, себеби алар да бир кезде бироонун ата эненин кадырын билбеген перзенти болушкан. </p>
                        </div>
                        <div class="uk-width-medium-1-2">
                            <img src="/style/img/asan/asan.png" class="person" data-uk-scrollspy="{cls:'uk-animation-scale-up', repeat: true}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="uk-width-1-2">
            <div class="section2-block2">
                <div class="uk-width uk-float-left" style="max-width:600px">
                    <div class="uk-grid uk-grid-collapse">
                        <div class="uk-width-medium-1-2">
                            <div class="uk-text-right"><img src="/style/img/uson/Yson.png" class="person" data-uk-scrollspy="{cls:'uk-animation-scale-up', repeat: true, delay:400}"></div>
                        </div>
                        <div class="uk-width-medium-1-2 uk-text-left">
                            <h2 class="person-title" data-uk-scrollspy="{cls:'uk-animation-scale-down', repeat: true, delay:100}">Бул <strong>үсөн</strong></h2>
                            <h2 class="person-date" data-uk-scrollspy="{cls:'uk-animation-slide-right', repeat: true, delay:100}">Ата-энеси жок</h2>
                            <p data-uk-scrollspy="{cls:'uk-animation-slide-right', repeat: true, delay:400}">Ыйлатпай кароо жетимди, Ыймандуулардын иши дейт. Жерде бир жетим ыйласа, Кудайдын аршы титирейт. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section3">
    <div class="pdt">
        <div class="pdtt" data-uk-scrollspy="{cls:'uk-animation-slide-top', repeat: true, delay:300}">
            9 - Жашта
        </div>
    </div>
    <div class="uk-grid uk-grid-collapse">
        <div class="uk-width-1-2">
            <div class="section3-block1">
                <div class="uk-width uk-float-right" style="max-width:600px">
                    <div class="uk-grid uk-grid-collapse">
                        <div class="uk-width-medium-1-2 uk-text-right">
                            <h2 class="person-title uk-contrast" data-uk-scrollspy="{cls:'uk-animation-scale-down', repeat: true, delay:100}"><strong>Асан</strong></h2>
                            <h2 class="person-date" data-uk-scrollspy="{cls:'uk-animation-slide-left', repeat: true, delay:100}">Балалык кези</h2>
                            <p class="uk-contrast" data-uk-scrollspy="{cls:'uk-animation-slide-left', repeat: true, delay:100}">Башкалар үчүн майда нерселерди жасагандан эч чарба. Кээде ошол майда нерселер жүрөгүңдүн чоң бөлүгүн ээлейт. </p>
                        </div>
                        <div class="uk-width-medium-1-2">
                            <img src="/style/img/asan/asan9.png" class="person" data-uk-scrollspy="{cls:'uk-animation-scale-up', repeat: true, delay:100}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="uk-width-1-2">
            <div class="section3-block2">
                <div class="uk-width uk-float-left" style="max-width:600px">
                    <div class="uk-grid uk-grid-collapse">
                        <div class="uk-width-medium-1-2">
                            <div class="daddy" data-uk-scrollspy="{cls:'uk-animation-scale-up', repeat: true, delay:100}"><a id="dad" href="#d"></a></div>
                        </div>
                        <div class="uk-width-medium-1-2 uk-text-left">
                            <h2 class="person-title uk-contrast" data-uk-scrollspy="{cls:'uk-animation-scale-down', repeat: true, delay:100}"><strong>үсөн</strong></h2>
                            <h2 class="person-date" data-uk-scrollspy="{cls:'uk-animation-slide-right', repeat: true, delay:100}">Кайырчы</h2>
                            <p class="uk-contrast" data-uk-scrollspy="{cls:'uk-animation-slide-right', repeat: true, delay:100}">Жетимдер ыйлайт: “Нан бер” – деп
                                Жакының ыйлайт: “Мал бер”, - деп<br>
                                Жалдырайт оору: “Кан бер”, - деп<br>
                                Мекеним ыйлайт бир гана: “Мен үчүн иштеп жан бер”, - деп </p>

                            <div class="notsun" data-uk-scrollspy="{cls:'uk-animation-slide-right', repeat: true, delay:500}"><a id="not" href="#modal-donate" data-uk-modal="{center:true}" class="uk-button uk-button-small uk-button-success uk-border-rounded">Жардам көрсөтүү</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section5">
    <div class="pdt">
        <div class="pdtt" data-uk-scrollspy="{cls:'uk-animation-slide-top', repeat: true, delay:300}">
            11 - Жашта
        </div>
    </div>
    <div class="uk-grid uk-grid-collapse">
        <div class="uk-width-1-2">
            <div class="section4-block1">
                <div class="uk-width uk-float-right" style="max-width:600px">
                    <div class="uk-grid uk-grid-collapse">
                        <div class="uk-width-medium-1-2 uk-text-right">
                            <h2 class="person-title uk-contrast" data-uk-scrollspy="{cls:'uk-animation-scale-down', repeat: true, delay:100}"><strong>Асан</strong></h2>
                            <h2 class="person-date" data-uk-scrollspy="{cls:'uk-animation-slide-left', repeat: true, delay:100}">Билим алат</h2>
                            <p class="uk-contrast" data-uk-scrollspy="{cls:'uk-animation-slide-left', repeat: true, delay:100}">Биз адамбыз бир тууганым кандашым, Адамдык – бул тебеленип калбасын. </p>
                        </div>
                        <div class="uk-width-medium-1-2">
                            <img src="/style/img/asan/asan11.png" class="person" data-uk-scrollspy="{cls:'uk-animation-scale-up', repeat: true, delay:100}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="uk-width-1-2">
            <div class="section4-block2">
                <div class="uk-width uk-float-left" style="max-width:600px">
                    <div class="uk-grid uk-grid-collapse">
                        <div class="uk-width-medium-1-2">
                            <div class="daddy1" data-uk-scrollspy="{cls:'uk-animation-scale-up', repeat: true, delay:400}"><a id="dad2" href="#d"></a></div>
                        </div>
                        <div class="uk-width-medium-1-2 uk-text-left">
                            <h2 class="person-title uk-contrast" data-uk-scrollspy="{cls:'uk-animation-scale-down', repeat: true, delay:100}"><strong>үсөн</strong></h2>
                            <h2 class="person-date" data-uk-scrollspy="{cls:'uk-animation-slide-right', repeat: true, delay:100}">Күнүмдүк жан багуу</h2>
                            <p class="uk-contrast" data-uk-scrollspy="{cls:'uk-animation-slide-right', repeat: true, delay:100}">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua.</p>

                            <div class="notsun" data-uk-scrollspy="{cls:'uk-animation-slide-right', repeat: true, delay:500}"><a id="not2" href="" class="uk-button uk-button-small uk-button-success uk-border-rounded">Жардам көрсөтүү</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section5">
    <div class="pdt">
        <div class="pdtt" data-uk-scrollspy="{cls:'uk-animation-slide-top', repeat: true, delay:300}">
            15 - Жашта
        </div>
    </div>
    <div class="uk-grid uk-grid-collapse">
        <div class="uk-width-1-2">
            <div class="section5-block1">
                <div class="uk-width uk-float-right" style="max-width:600px">
                    <div class="uk-grid uk-grid-collapse">
                        <div class="uk-width-medium-1-2 uk-text-right">
                            <h2 class="person-title uk-contrast" data-uk-scrollspy="{cls:'uk-animation-scale-down', repeat: true, delay:100}"><strong>Асан</strong></h2>
                            <h2 class="person-date" data-uk-scrollspy="{cls:'uk-animation-slide-left', repeat: true, delay:100}">Спорт менен алек</h2>
                            <p class="uk-contrast" data-uk-scrollspy="{cls:'uk-animation-slide-left', repeat: true, delay:100}">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                        <div class="uk-width-medium-1-2">
                            <img src="/style/img/asan/asan15.png" class="person" data-uk-scrollspy="{cls:'uk-animation-scale-up', repeat: true, delay:100}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="uk-width-1-2">
            <div class="section5-block2">
                <div class="uk-width uk-float-left" style="max-width:600px">
                    <div class="uk-grid uk-grid-collapse">
                        <div class="uk-width-medium-1-2">
                            <div class="daddy2" data-uk-scrollspy="{cls:'uk-animation-scale-up', repeat: true, delay:400}"><a id="dad3" href="#d"></a></div>
                        </div>
                        <div class="uk-width-medium-1-2 uk-text-left">
                            <h2 class="person-title uk-contrast" data-uk-scrollspy="{cls:'uk-animation-scale-down', repeat: true, delay:100}"><strong>үсөн</strong></h2>
                            <h2 class="person-date" data-uk-scrollspy="{cls:'uk-animation-slide-right', repeat: true, delay:100}">Тентек</h2>
                            <p class="uk-contrast" data-uk-scrollspy="{cls:'uk-animation-slide-right', repeat: true, delay:300}">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua.</p>

                            <div class="notsun" data-uk-scrollspy="{cls:'uk-animation-slide-right', repeat: true, delay:500}"><a id="not3" href="" class="uk-button uk-button-small uk-button-success uk-border-rounded">Жардам көрсөтүү</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section6">
    <div class="pdt">
        <div class="pdtt" data-uk-scrollspy="{cls:'uk-animation-slide-top', repeat: true, delay:300}">
            18 - Жашта
        </div>
    </div>
    <div class="uk-grid uk-grid-collapse">
        <div class="uk-width-1-2">
            <div class="section6-block1">
                <div class="uk-width uk-float-right" style="max-width:600px">
                    <div class="uk-grid uk-grid-collapse">
                        <div class="uk-width-medium-1-2 uk-text-right">
                            <h2 class="person-title uk-contrast" data-uk-scrollspy="{cls:'uk-animation-scale-down', repeat: true, delay:100}"><strong>Асан</strong></h2>
                            <h2 class="person-date" data-uk-scrollspy="{cls:'uk-animation-slide-left', repeat: true, delay:100}">Жогорку билим алат</h2>
                            <p class="uk-contrast" data-uk-scrollspy="{cls:'uk-animation-slide-left', repeat: true, delay:100}"> Билеги күчтүү бирди жыгат,<br> билими күчтүү миңди жыгат.</p>
                        </div>
                        <div class="uk-width-medium-1-2">
                            <img src="/style/img/asan/asan18.png" class="person" data-uk-scrollspy="{cls:'uk-animation-scale-up', repeat: true, delay:100}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="uk-width-1-2">
            <div class="section6-block2">
                <div class="uk-width uk-float-left" style="max-width:600px">
                    <div class="uk-grid uk-grid-collapse">
                        <div class="uk-width-medium-1-2">
                            <div class="daddy3" data-uk-scrollspy="{cls:'uk-animation-scale-up', repeat: true, delay:400}"><a id="dad4" href="#d"></a></div>
                        </div>
                        <div class="uk-width-medium-1-2 uk-text-left">
                            <h2 class="person-title uk-contrast" data-uk-scrollspy="{cls:'uk-animation-scale-down', repeat: true, delay:100}"><strong>үсөн</strong></h2>
                            <h2 class="person-date" data-uk-scrollspy="{cls:'uk-animation-slide-right', repeat: true, delay:100}">Селсаяктап жүрөт</h2>
                            <p class="uk-contrast" data-uk-scrollspy="{cls:'uk-animation-slide-right', repeat: true, delay:300}">Кайгыңды шарапка чөктүрөм дебе, ал баары бир калкып чыгат.</p>

                            <div class="notsun" data-uk-scrollspy="{cls:'uk-animation-slide-right', repeat: true, delay:500}"><a id="not4" href="" class="uk-button uk-button-small uk-button-success uk-border-rounded">Жардам көрсөтүү</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section7">
    <div class="pdt">
        <div class="pdtt" data-uk-scrollspy="{cls:'uk-animation-slide-top', repeat: true, delay:300}">
            23 - Жашта
        </div>
    </div>
    <div class="uk-grid uk-grid-collapse">
        <div class="uk-width-1-2">
            <div class="section7-block1">
                <div class="uk-width uk-float-right" style="max-width:600px">
                    <div class="uk-grid uk-grid-collapse">
                        <div class="uk-width-medium-1-2 uk-text-right">
                            <h2 class="person-title uk-contrast" data-uk-scrollspy="{cls:'uk-animation-scale-down', repeat: true, delay:100}"><strong>Асан</strong></h2>
                            <h2 class="person-date" data-uk-scrollspy="{cls:'uk-animation-slide-left', repeat: true, delay:100}">Кесип ээси</h2>
                            <p class="uk-contrast" data-uk-scrollspy="{cls:'uk-animation-slide-left', repeat: true, delay:100}">Абийирдүү жигитке -
                                Ажалдуу кийик жолугат.</p>
                        </div>
                        <div class="uk-width-medium-1-2">
                            <img src="/style/img/asan/asan23.png" class="person" data-uk-scrollspy="{cls:'uk-animation-scale-up', repeat: true, delay:100}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="uk-width-1-2">
            <div class="section7-block2">
                <div class="uk-width uk-float-left" style="max-width:600px">
                    <div class="uk-grid uk-grid-collapse">
                        <div class="uk-width-medium-1-2">
                            <div class="daddy4" data-uk-scrollspy="{cls:'uk-animation-scale-up', repeat: true, delay:100}"><a id="dad1" href="#d"></a></div>
                        </div>
                        <div class="uk-width-medium-1-2 uk-text-left">
                            <h2 class="person-title uk-contrast" data-uk-scrollspy="{cls:'uk-animation-scale-down', repeat: true, delay:400}"><strong>үсөн</strong></h2>
                            <h2 class="person-date" data-uk-scrollspy="{cls:'uk-animation-slide-right', repeat: true, delay:100}">Көчөдө урушуп жүрөт</h2>
                            <p class="uk-contrast" data-uk-scrollspy="{cls:'uk-animation-slide-right', repeat: true, delay:300}">Адам эки жашабайт, бирок адам болуп бир да жолу жашай албагандар көп.</p>
                            <div class="notsun" data-uk-scrollspy="{cls:'uk-animation-slide-right', repeat: true, delay:500}"><a id="not1" href="" class="uk-button uk-button-small uk-button-success uk-border-rounded">Жардам көрсөтүү</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section8">
    <div class="pdt">
        <div class="pdtt" data-uk-scrollspy="{cls:'uk-animation-slide-top', repeat: true, delay:300}">
            27 - Жашта
        </div>
    </div>
    <div class="uk-grid uk-grid-collapse">
        <div class="uk-width-1-2">
            <div class="section8-block1">
                <div class="uk-width uk-float-right" style="max-width:600px">
                    <div class="uk-grid uk-grid-collapse">
                        <div class="uk-width-medium-1-2 uk-text-right">
                            <h2 class="person-title uk-contrast" data-uk-scrollspy="{cls:'uk-animation-scale-down', repeat: true, delay:100}"><strong>Асан</strong></h2>
                            <h2 class="person-date" data-uk-scrollspy="{cls:'uk-animation-slide-left', repeat: true, delay:100}">Бактылуу үй-бүлө</h2>
                            <p class="uk-contrast" data-uk-scrollspy="{cls:'uk-animation-slide-left', repeat: true, delay:100}">Берешендик алып келет, Берешендикти жетелеп.
                                Бир жолу берсе Жараткан, Он жолу берет эселеп.</p>
                        </div>
                        <div class="uk-width-medium-1-2">
                            <img src="/style/img/asan/asan27.png" class="person" data-uk-scrollspy="{cls:'uk-animation-scale-up', repeat: true, delay:100}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="uk-width-1-2">
            <div class="section8-block2">
                <div class="uk-width uk-float-left" style="max-width:600px">
                    <div class="uk-grid uk-grid-collapse">
                        <div class="uk-width-medium-1-2">
                            <div class="daddy5" data-uk-scrollspy="{cls:'uk-animation-scale-up', repeat: true, delay:100}"><a id="dad1" href="#d"></a></div>
                        </div>
                        <div class="uk-width-medium-1-2 uk-text-left">
                            <h2 class="person-title uk-contrast" data-uk-scrollspy="{cls:'uk-animation-scale-down', repeat: true, delay:400}"><strong>үсөн</strong></h2>
                            <h2 class="person-date" data-uk-scrollspy="{cls:'uk-animation-slide-right', repeat: true, delay:100}">Жаза өтөө</h2>
                            <p class="uk-contrast" data-uk-scrollspy="{cls:'uk-animation-slide-right', repeat: true, delay:300}">Өлкө өз жаштарынын келечегине азыртадан кам көрбөсө, түрмө салууга мажбур болот</p>

                            <div class="notsun" data-uk-scrollspy="{cls:'uk-animation-slide-right', repeat: true, delay:500}"><a id="not1" href="" class="uk-button uk-button-small uk-button-success uk-border-rounded">Жардам көрсөтүү</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section-donate">
    <div class="uk-grid uk-grid-collapse">
        <div class="uk-width-1-2">
            <div class="section-donate-block1">
                <div class="uk-width uk-float-right" style="max-width:600px">

                </div>
            </div>
        </div>
        <div class="uk-width-1-2">
            <div class="section-donate-block2">
                <div class="uk-width uk-float-left" style="max-width:600px">
                    <h3 class="bduu" data-uk-scrollspy="{cls:'uk-animation-slide-bottom', repeat: true}">балдардын жана өлкөбүздүн келечегине кам көрөлү...</h3>
                    <p class="bduur" data-uk-scrollspy="{cls:'uk-animation-slide-bottom', repeat: true, delay:200}">1 окучуунун бир айлык чыгашасы – 2700 сом (40 АКШ долларын) түзөт. </p>
                    <div class="feedback" data-uk-scrollspy="{cls:'uk-animation-scale-up', repeat: true, delay:100}">
                        <h3 class="uk-text-contrast">Жардам берүү анкетасы</h3>
                        <div class="uk-form">
                            <p><input placeholder="Аты жӨнҮҢҮз" type="text" class="uk-form-large uk-width-1-1"></p>
                            <p><input placeholder="ТЕлефон" type="text" class="uk-form-large uk-width-1-1"></p>
                            <p><input placeholder="E-mail" type="text" class="uk-form-large uk-width-1-1"></p>
                            <button class="uk-button uk-button-large uk-button-success uk-border-rounded" type="button">Жардам</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section-diagram">
    <div class="uk-grid uk-grid-collapse">
        <div class="uk-width-1-2 dbg-fs">
            <div class="section-diagram1">
                <div class="uk-width uk-float-right" style="max-width:600px">
                    <div class="uk-grid uk-grid-collapse">
                        <div class="uk-width-medium-1-2 uk-text-right">
                            <h2 class="person-title uk-contrast" data-uk-scrollspy="{cls:'uk-animation-slide-left', repeat: true, delay:100}"><strong>Спонсор табылды</strong></h2>
                            <p class="uk-contrast" data-uk-scrollspy="{cls:'uk-animation-slide-left', repeat: true, delay:500}">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                        <div class="uk-width-medium-1-2">
                            <div style="box-sizing: border-box; padding: 0 35px 0 100px;" data-uk-scrollspy="{cls:'uk-animation-fade', repeat: true, delay:300}">
                                <div class="line-chart-text-1">
                                    <h3>60</h3>
                                    <p>Балдар - кыздар</p>
                                </div>
                                <div class="line-chart-green" style="height: 150px;"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="uk-width-1-2 dbg-fd">
            <div class="section-diagram2">
                <div class="uk-width uk-float-left" style="max-width:600px">
                    <div class="uk-grid uk-grid-collapse">
                        <div class="uk-width-medium-1-2">
                            <div style="box-sizing: border-box; padding: 0 100px 0 35px;" data-uk-scrollspy="{cls:'uk-animation-fade', repeat: true, delay:100}">
                                <div class="line-chart-text">
                                    <h3>240</h3>
                                    <p>Балдар - кыздар</p>
                                </div>
                                <div class="line-chart" style="height: 300px;"></div>
                            </div>
                        </div>
                        <div class="uk-width-medium-1-2 uk-text-left">
                            <h2 class="person-title uk-contrast" data-uk-scrollspy="{cls:'uk-animation-slide-right', repeat: true, delay:100}"><strong>Спонсор табыла элек</strong></h2>
                            <p class="uk-contrast" data-uk-scrollspy="{cls:'uk-animation-slide-right', repeat: true, delay:500}">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="section-info">
    <div class="uk-container uk-container-center">
        <h1 class="info-title" data-uk-scrollspy="{cls:'uk-animation-slide-bottom', repeat: true}">Жаңылыктар</h1>
        <p class="uk-contrast uk-text-large uk-text-center uk-margin-bottom-remove dnb" data-uk-scrollspy="{cls:'uk-animation-slide-bottom', repeat: true, delay:200}">Куттуу багыт фондунун балдардын жетишкендиктери</p>
    </div>
</div>

<div class="section-news">
    <div class="uk-container uk-container-center">
        <div class="uk-width uk-container-center uk-text-center uk-hidden-small" style="max-width: 850px">
            <div class="uk-grid" data-uk-scrollspy="{cls:'uk-animation-fade', target:'.fnews', delay:100, repeat: true}">
                <div class="uk-width-1-3 fnews">
                    <div class="uk-panel uk-panel-box">
                        <div class="uk-panel-teaser">
                            <img src="/style/img/news/news1.png">
                        </div>
                        <h3 class="uk-margin-bottom-remove"><strong>"Билал Кидс" соода маркасы</strong></h3>
                        <p class="uk-text-muted uk-margin-top-remove">04.11.16</p>
                        <p class="uk-margin-bottom">"Билал Кидс" соода маркасы мектеп интернатынын окуучуларын 350 жаңы баш кийимдер менен кубантышты. </p>
                        <a href="" class="uk-button uk-button-primary uk-border-rounded">Уландысы...</a>
                    </div>
                </div>
                <div class="uk-width-1-3 fnews">
                    <div class="uk-panel uk-panel-box">
                        <div class="uk-panel-teaser">
                            <img src="/style/img/news/news2.png">
                        </div>
                        <h3 class="uk-margin-bottom-remove"><strong>Жайкы эс алуу<br> лагерь</strong></h3>
                        <p class="uk-text-muted uk-margin-top-remove">04.11.16</p>
                        <p class="uk-margin-bottom">2016 - жылкы жайкы эс алуу лагерибизге белгилүү режиссер Сүйүн Откеев агабыз "Мегатой" тасмасы менен келип, балдарга... </p>
                        <a href="" class="uk-button uk-button-primary uk-border-rounded">Уландысы...</a>
                    </div>
                </div>
                <div class="uk-width-1-3 fnews">
                    <div class="uk-panel uk-panel-box">
                        <div class="uk-panel-teaser">
                            <img src="/style/img/news/news.png">
                        </div>
                        <h3 class="uk-margin-bottom-remove"><strong>1 - сентябрь окуу күнүндө</strong></h3>
                        <p class="uk-text-muted uk-margin-top-remove">04.11.16</p>
                        <p class="uk-margin-bottom">1 - сентябрь окуу күнүндө ар бир бала мектепке бараарда толкунданып, өзгөчө сезимдер коштоп турат.</p>
                        <a href="" class="uk-button uk-button-primary uk-border-rounded">Уландысы...</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>