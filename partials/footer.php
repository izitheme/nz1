<?php
$logo = Yii::$app->f->getLogo('footer');

if(isset($logo['error']) && $logo['error'] == 1){
	$logo = [
		'src' => '/img/nz2.png',
		'url_link' => '/',
		'title' => 'Nozomijapan',
		'alt' => 'Nozomijapan',
	];
}
?>
<div data-elementor-type=footer data-elementor-id=57 class="elementor elementor-57 elementor-location-footer" data-elementor-settings=[]>
    <div class=elementor-section-wrap>
        <section class="elementor-section elementor-top-section elementor-element elementor-element-c127865 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id=c127865 data-element_type=section data-settings={&quot;background_background&quot;:&quot;classic&quot;}>
            <div class=elementor-background-overlay></div>
            <div class="elementor-container elementor-column-gap-no">
                <div class=elementor-row>
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-59143bf" data-id=59143bf data-element_type=column>
                        <div class="elementor-column-wrap elementor-element-populated">
                            <div class=elementor-widget-wrap>
                                <section class="elementor-section elementor-inner-section elementor-element elementor-element-906effa elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id=906effa data-element_type=section>
                                    <div class="elementor-container elementor-column-gap-default">
                                        <div class=elementor-row>
                                            <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-34ca58a" data-id=34ca58a data-element_type=column>
                                                <div class="elementor-column-wrap elementor-element-populated">
                                                    <div class=elementor-widget-wrap>
                                                         
                                                        
                                                      
                                                        <div class="elementor-element elementor-element-4d9828b elementor-widget elementor-widget-image" data-id=4d9828b data-element_type=widget data-widget_type=image.default>
                                                            <div class=elementor-widget-container>
                                                                <div class=elementor-image>
                                                                <a href="<?=$logo['url_link'];?>"><img src="<?=$logo['src'];?>" title="<?=$logo['title'];?>" alt="<?=$logo['alt'];?>"></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-65decac elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id=65decac data-element_type=widget data-widget_type=icon-list.default>
                                                            <div class=elementor-widget-container>
                                                                <?php
                                                                $widget = Yii::$app->f->getWidget('footer_col_1', [
                                                                    'default' => [
                                                                        'text' => '
                                                                        <ul class=elementor-icon-list-items>
                                                                            <li class=elementor-icon-list-item>
                                                                                <span class=elementor-icon-list-text>Công Ty Cổ Phần Thương Mại Quốc Tế Nozomi Japan</span>
                                                                            </li>
                                                                            <li class=elementor-icon-list-item><span class=elementor-icon-list-text>Hà Nội: Tầng 5, Toà nhà M5, số 91 Nguyễn Chí Thanh, Đống Đa, Hà Nội</span></li>
                                                                            <li class=elementor-icon-list-item><span class=elementor-icon-list-text>TP. HCM: Số 98 Phạm Văn Chiêu, phường 9, quận Gò Vấp, TP. Hồ Chí Minh</span></li>
                                                                            <li class=elementor-icon-list-item><span class=elementor-icon-list-text>Nhật Bản: 1-2-19 Sakaemachi, Hino, Tokyo, Japan</span></li>
                                                                            <li class=elementor-icon-list-item><a href=tel:0393125151>		<span class=elementor-icon-list-text>Hotline: 0393.12.51.51</span> </a></li>
                                                                            <li class=elementor-icon-list-item><a href="xkld@nozomijapan.vn">		<span class=elementor-icon-list-text>Email: xkld@nozomijapan.vn</span></a></li>
                                                                        </ul>',
                                                                    ]
                                                                ]);

                                                                echo uh($widget['text'],2);
                                                                ?>
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-9182e7d" data-id=9182e7d data-element_type=column>
                                                <div class="elementor-column-wrap elementor-element-populated">
                                                    <div class=elementor-widget-wrap>
                                                        <?php
                                                        $widget = Yii::$app->f->getWidget('footer_col_2', [
                                                            'default' => [
                                                                'name' => 'Dịch vụ',
                                                                'text' => '
                                                                <ul class=elementor-icon-list-items>
                                                                    <li class=elementor-icon-list-item>
                                                                        <a href="/dao-tao-tieng-nhat"><span class="elementor-icon-list-text">Đào tạo tiếng Nhật</span></a>
                                                                    </li>
                                                                    <li class=elementor-icon-list-item>
                                                                        <a href="/du-hoc-nhat-ban"><span class="elementor-icon-list-text">Du học Nhật Bản</span></a>
                                                                    </li>
                                                                    <li class=elementor-icon-list-item>
                                                                        <a href="/xuat-khau-lao-dong-nhat"><span class="elementor-icon-list-text">Xuất khẩu lao động Nhật</span></a>
                                                                    </li>  
                                                                    
                                                                </ul>',
                                                            ]
                                                        ]);

                                                        echo '<div class="elementor-element elementor-element-32239c7 elementor-widget elementor-widget-heading" data-id=32239c7 data-element_type=widget data-widget_type=heading.default>
                                                            <div class=elementor-widget-container><h3 class="elementor-heading-title elementor-size-default">'.uh($widget['name']).'</h3></div>
                                                        </div>';

                                                        echo '<div class="elementor-element elementor-element-f15c2e6 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id=f15c2e6 data-element_type=widget data-widget_type=icon-list.default>
                                                        <div class=elementor-widget-container>';
                                                        echo uh($widget['text'],2);
                                                        echo '</div></div>';
                                                        ?>
                                                        
                                                         
                                                       
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-0443222" data-id=0443222 data-element_type=column>
                                                <div class="elementor-column-wrap elementor-element-populated">
                                                    <div class=elementor-widget-wrap>
                                                        
                                                        <?php
                                                        $widget = Yii::$app->f->getWidget('footer_col_3', [
                                                            'default' => [
                                                                'name' => 'Chính sách',
                                                                'text' => '
                                                                <ul class=elementor-icon-list-items>
                                                                    <li class=elementor-icon-list-item>
                                                                        <a href="/dieu-khoan-su-dung"><span class="elementor-icon-list-text">Điều khoản sử dụng</span></a>
                                                                    </li>
                                                                    <li class=elementor-icon-list-item>
                                                                        <a href="/chinh-sach-bao-mat"><span class="elementor-icon-list-text">Chính sách bảo mật</span></a>
                                                                    </li>
                                                                    <li class=elementor-icon-list-item>
                                                                        <a href="/thu-tuc-xkld-nhat"><span class="elementor-icon-list-text">Thủ tục XKLĐ Nhật</span></a>
                                                                    </li>  
                                                                    <li class=elementor-icon-list-item>
                                                                        <a href="/thu-tuc-du-hoc-nhat-ban"><span class="elementor-icon-list-text">Thủ tục du học Nhật Bản</span></a>
                                                                    </li> 
                                                                    
                                                                </ul>',
                                                            ]
                                                        ]);

                                                        echo '<div class="elementor-element elementor-element-32239c7 elementor-widget elementor-widget-heading" data-id=32239c7 data-element_type=widget data-widget_type=heading.default>
                                                            <div class=elementor-widget-container><h3 class="elementor-heading-title elementor-size-default">'.uh($widget['name']).'</h3></div>
                                                        </div>';

                                                        echo '<div class="elementor-element elementor-element-f15c2e6 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list" data-id=f15c2e6 data-element_type=widget data-widget_type=icon-list.default>
                                                        <div class=elementor-widget-container>';
                                                        echo uh($widget['text'],2);
                                                        echo '</div></div>';
                                                        ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-52c237e" data-id=52c237e data-element_type=column>
                                                <div class="elementor-column-wrap elementor-element-populated">
                                                    <div class=elementor-widget-wrap>
                                                        <div class="elementor-element elementor-element-99fb259 elementor-widget elementor-widget-heading" data-id=99fb259 data-element_type=widget data-widget_type=heading.default>
                                                            <div class=elementor-widget-container><h3 class="elementor-heading-title elementor-size-default">Kết nối với chúng tôi</h3></div>
                                                        </div>
                                                        <div class="elementor-element elementor-element-7184a49 elementor-widget elementor-widget-template" data-id=7184a49 data-element_type=widget data-widget_type=template.default>
                                                            <div class=elementor-widget-container>
                                                                <div class=elementor-template>
                                                                    <div data-elementor-type=section data-elementor-id=1523 class="elementor elementor-1523 elementor-location-footer" data-elementor-settings=[]>
                                                                        <div class=elementor-section-wrap>
                                                                            <section class="elementor-section elementor-top-section elementor-element elementor-element-189d5f0 socical__ff elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id=189d5f0 data-element_type=section>
                                                                                <div class="elementor-container elementor-column-gap-no">
                                                                                    <div class=elementor-row>
                                                                                        <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-c3a5725" data-id=c3a5725 data-element_type=column>
                                                                                            <div class="elementor-column-wrap elementor-element-populated">
                                                                                                <div class=elementor-widget-wrap>
                                                                                                    <div  class="elementor-element elementor-element-e47835a elementor-widget elementor-widget-image" data-id=e47835a data-element_type=widget data-widget_type=image.default>
                                                                                                        <div class=elementor-widget-container>
                                                                                                            <div class=elementor-image> 
                                                                                                                <a href="#" target=_blank>
                                                                                                                <img width=64 height=61 src="/img/zalo-1.png" class="attachment-full size-full" alt loading=lazy>
                                                                                                                </a>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-93f20c0" data-id=93f20c0 data-element_type=column>
                                                                                            <div class="elementor-column-wrap elementor-element-populated">
                                                                                                <div class=elementor-widget-wrap>
                                                                                                    <div class="elementor-element elementor-element-d7d8824 elementor-widget elementor-widget-image" data-id=d7d8824 data-element_type=widget data-widget_type=image.default>
                                                                                                        <div class=elementor-widget-container>
                                                                                                            <div class=elementor-image>
                                                                                                                <a href="#" target=_blank>
                                                                                                                    <img width=64 height=64 src="/img/facebook.png" class="attachment-full size-full" alt loading=lazy>		
                                                                                                                </a>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-4f089ec" data-id=4f089ec data-element_type=column>
                                                                                            <div class="elementor-column-wrap elementor-element-populated">
                                                                                                <div class=elementor-widget-wrap>
                                                                                                    <div class="elementor-element elementor-element-5398d45 elementor-widget elementor-widget-image" data-id=5398d45 data-element_type=widget data-widget_type=image.default>
                                                                                                        <div class=elementor-widget-container>
                                                                                                            <div class=elementor-image>                 
                                                                                                                <a href="#" target=_blank>
                                                                                                                    <img width=64 height=64 src="/img/youtube.png" class="attachment-full size-full" alt loading=lazy>		
                                                                                                                </a>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                        <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-9c7341d" data-id=9c7341d data-element_type=column>
                                                                                            <div class=elementor-column-wrap>
                                                                                                <div class=elementor-widget-wrap>

                                                                                                <li class=elementor-icon-list-item></li>
                                                                    <li class=elementor-icon-list-item>
                                                                        <span class="elementor-icon-list-text">
                                                                            <img src="/img/dmca-badge-w100-2x1-03.png" alt="">
                                                                        </span>
                                                                    </li>  
                                                                    
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </section>
                                                                            <section class="elementor-section elementor-top-section elementor-element elementor-element-31ec03c elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id=31ec03c data-element_type=section>
                                                                                <div class="elementor-container elementor-column-gap-no">
                                                                                    <div class=elementor-row>
                                                                                         
                                                                                    <li class=elementor-icon-list-item></li>
                                                                    <li class=elementor-icon-list-item>
                                                                        <span class="elementor-icon-list-text">
                                                                            <img src="/img/bct.png" alt="">
                                                                        </span>
                                                                    </li>  
                                                                                    </div>
                                                                                </div>
                                                                            </section>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <section class="elementor-section elementor-inner-section elementor-element elementor-element-378f341 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id=378f341 data-element_type=section data-settings={&quot;background_background&quot;:&quot;gradient&quot;}>
                                    <div class="elementor-container elementor-column-gap-default">
                                        <div class=elementor-row>
                                            <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-f85e477" data-id=f85e477 data-element_type=column>
                                                <div class="elementor-column-wrap elementor-element-populated">
                                                    <div class=elementor-widget-wrap>
                                                        <div class="elementor-element elementor-element-bb51d1b elementor-widget elementor-widget-heading" data-id=bb51d1b data-element_type=widget data-widget_type=heading.default>
                                                            <div class=elementor-widget-container>
                                                                <div class="elementor-heading-title elementor-size-default">
                                                                <?php
                                                                $widget = Yii::$app->f->getWidget('footer_copyright', [
                                                                    'default' => [
                                                                        'name' => 'Copyright',
                                                                        'text' => 'COPYRIGHT ©2020 Nozomijapan. ALL RIGHTS RESERVED.',
                                                                    ]
                                                                ]); 
                                                                echo uh($widget['text'],2);                                                                
                                                                ?>    
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
	                                </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>